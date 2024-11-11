<?php
/***************************************************************************
                                digest_emailer.php
                             -------------------
    begin                : Sun Aug 6 2006
    copyright            : (c) Mark D. Hamill
    email                : mhamill@computer.org
 
    $Id: emailer.php,v 1.15.2.35 2005/10/05 17:42:04 grahamje Exp $
 
***************************************************************************/
 
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// Written by Mark D. Hamill, mhamill@computer.org
// This software is designed to work with phpBB Version 2.0.20 
 
// This is a special version of the emailer class with a few of code added
// so an HTML digest can be sent. The original class tells email clients that ASCII
// email is being sent always. This code had to be snipped so that web based
// email clients like Yahoo! Mail could receive formatted email.
 
class emailer
{
    public $msg;
    public $subject;
    public $extra_headers;
    public $addresses;
    public $reply_to;
    public $from;
 
    public $tpl_msg = array();
 
    public function __construct($use_smtp)
    {
        $this->reset();
        $this->reply_to = $this->from = '';
    }
 
    // Resets all the data (address, template file, etc etc to default
    public function reset()
    {
        $this->addresses = array();
        $this->vars = $this->msg = $this->extra_headers = '';
    }
 
    // Sets an email address to send to
    public function email_address($address)
    {
        $this->addresses['to'] = trim((string) $address);
    }
 
    public function cc($address)
    {
        $this->addresses['cc'][] = trim((string) $address);
    }
 
    public function bcc($address)
    {
        $this->addresses['bcc'][] = trim((string) $address);
    }
 
    public function replyto($address)
    {
        $this->reply_to = trim((string) $address);
    }
 
    public function from($address)
    {
        $this->from = trim((string) $address);
    }
 
    // set up subject for mail
    public function set_subject($subject = '')
    {
        $this->subject = trim(preg_replace('#[\n\r]+#s', '', (string) $subject));
    }
 
    // set up extra mail headers
    public function extra_headers($headers)
    {
        $this->extra_headers .= trim((string) $headers) . "\n";
    }
 
    public function use_template($template_file, $template_lang = '')
    {
        global $board_config, $phpbb_root_path;
 
        if (trim((string) $template_file) == '')
        {
            message_die(GENERAL_ERROR, 'No template file set', '', __LINE__, __FILE__);
        }
 
        if (trim((string) $template_lang) == '')
        {
            $template_lang = $board_config['default_lang'];
        }
 
        if (empty($this->tpl_msg[$template_lang . $template_file]))
        {
            $tpl_file = $phpbb_root_path . 'language/lang_' . $template_lang . '/email/' . $template_file . '.tpl';
 
            if (!@file_exists(@phpbb_realpath($tpl_file)))
            {
                $tpl_file = $phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/email/' . $template_file . '.tpl';
 
                if (!@file_exists(@phpbb_realpath($tpl_file)))
                {
                    message_die(GENERAL_ERROR, 'Could not find email template file :: ' . $template_file, '', __LINE__, __FILE__);
                }
            }
 
            if (!($fd = @fopen($tpl_file, 'r')))
            {
                message_die(GENERAL_ERROR, 'Failed opening template file :: ' . $tpl_file, '', __LINE__, __FILE__);
            }
 
            $this->tpl_msg[$template_lang . $template_file] = fread($fd, filesize($tpl_file));
            fclose($fd);
        }
 
        $this->msg = $this->tpl_msg[$template_lang . $template_file];
 
        return true;
    }
 
    // assign variables
    public function assign_vars($vars)
    {
        $this->vars = (empty($this->vars)) ? $vars : $this->vars . $vars;
    }
 
    // Send the mail out to the recipients set previously in var $this->address
    public function send($is_html)
    {
        global $board_config, $lang, $phpEx, $phpbb_root_path, $db;
 
        // Escape all quotes, else the eval will fail.
        $this->msg = str_replace ("'", "\'", (string) $this->msg);
        $this->msg = preg_replace('#\{([a-z0-9\-_]*?)\}#is', "' . $\\1 . '", $this->msg);
 
        // Set vars
        foreach ($this->vars as $key => $val) {
            ${$key} = $val;
        }
 
        eval("\$this->msg = '$this->msg';");
 
        // Clear vars
        foreach ($this->vars as $key => $val) {
            unset(${$key});
        }
 
        // We now try and pull a subject from the email body ... if it exists,
        // do this here because the subject may contain a variable
        $drop_header = '';
        $match = array();
        if (preg_match('#^(Subject:(.*?))$#m', $this->msg, $match))
        {
            $this->subject = (trim($match[2]) != '') ? trim($match[2]) : (($this->subject != '') ? $this->subject : 'No Subject');
            $drop_header .= '[\r\n]*?' . preg_quote($match[1], '#');
        }
        else
        {
            $this->subject = (($this->subject != '') ? $this->subject : 'No Subject');
        }
 
        if (preg_match('#^(Charset:(.*?))$#m', $this->msg, $match))
        {
            $this->encoding = (trim($match[2]) != '') ? trim($match[2]) : trim((string) $lang['ENCODING']);
            $drop_header .= '[\r\n]*?' . preg_quote($match[1], '#');
        }
        else
        {
            $this->encoding = trim((string) $lang['ENCODING']);
        }
 
        if ($drop_header != '')
        {
            $this->msg = trim(preg_replace('#' . $drop_header . '#s', '', $this->msg));
        }
 
        $to = $this->addresses['to'];
 
        $cc = (count($this->addresses['cc'])) ? implode(', ', $this->addresses['cc']) : '';
        $bcc = (count($this->addresses['bcc'])) ? implode(', ', $this->addresses['bcc']) : '';
 
        // Build header
        // This is the one line of code modified from emailer.php so mail_digests.php can send HTML
        if ($is_html)
        {
             $this->extra_headers = (($this->reply_to != '') ? "Reply-to: $this->reply_to\n" : '') . (($this->from != '') ? "From: $this->from\n" : "From: " . $board_config['board_email'] . "\n") . "Return-Path: " . $board_config['board_email'] . "\nMessage-ID: <" . md5(uniqid(time())) . "@" . $board_config['server_name'] . ">\nContent-transfer-encoding: 8bit\nDate: " . date('r', time()) . "\nX-Priority: 3\nX-MSMail-Priority: Normal\nX-Mailer: PHP\nX-MimeOLE: Produced By phpBB2\n" . $this->extra_headers . (($cc != '') ? "Cc: $cc\n" : '')  . (($bcc != '') ? "Bcc: $bcc\n" : '');
        }
        else 
        {
            $this->extra_headers = (($this->reply_to != '') ? "Reply-to: $this->reply_to\n" : '') . (($this->from != '') ? "From: $this->from\n" : "From: " . $board_config['board_email'] . "\n") . "Return-Path: " . $board_config['board_email'] . "\nMessage-ID: <" . md5(uniqid(time())) . "@" . $board_config['server_name'] . ">\nMIME-Version: 1.0\nContent-type: text/plain; charset=" . $this->encoding . "\nContent-transfer-encoding: 8bit\nDate: " . date('r', time()) . "\nX-Priority: 3\nX-MSMail-Priority: Normal\nX-Mailer: PHP\nX-MimeOLE: Produced By phpBB2\n" . $this->extra_headers . (($cc != '') ? "Cc: $cc\n" : '')  . (($bcc != '') ? "Bcc: $bcc\n" : '');
        }
 
 
        // Send message ... removed $this->encode() from subject for time being
        if ( $this->use_smtp )
        {
            if ( !defined('SMTP_INCLUDED') ) 
            {
                include($phpbb_root_path . 'includes/smtp.' . $phpEx);
            }
 
            $result = smtpmail($to, $this->subject, $this->msg, $this->extra_headers);
        }
        else
        {
            $empty_to_header = ($to == '') ? TRUE : FALSE;
            $to = ($to == '') ? (($board_config['sendmail_fix']) ? ' ' : 'Undisclosed-recipients:;') : $to;
 
            $result = @mail((string) $to, (string) $this->subject, preg_replace("#(?<!\r)\n#s", "\n", $this->msg), $this->extra_headers);
 
            if (!$result && !$board_config['sendmail_fix'] && $empty_to_header)
            {
                $to = ' ';
 
                $sql = "UPDATE " . CONFIG_TABLE . " 
                    SET config_value = '1'
                    WHERE config_name = 'sendmail_fix'";
                if (!$db->sql_query($sql))
                {
                    message_die(GENERAL_ERROR, 'Unable to update config table', '', __LINE__, __FILE__, $sql);
                }
 
                $board_config['sendmail_fix'] = 1;
                $result = @mail($to, (string) $this->subject, preg_replace("#(?<!\r)\n#s", "\n", $this->msg), $this->extra_headers);
            }
        }
 
        // Did it work?
        if (!$result)
        {
            message_die(GENERAL_ERROR, 'Failed sending email :: ' . (($this->use_smtp) ? 'SMTP' : 'PHP') . ' :: ' . $result, '', __LINE__, __FILE__);
        }
 
        return true;
    }
 
    // Encodes the given string for proper display for this encoding ... nabbed 
    // from php.net and modified. There is an alternative encoding method which 
    // may produce lesd output but it's questionable as to its worth in this 
    // scenario IMO
    public function encode($str)
    {
        if ($this->encoding == '')
        {
            return $str;
        }
 
        // define start delimimter, end delimiter and spacer
        $end = "?=";
        $start = "=?$this->encoding?B?";
        $spacer = "$end\r\n $start";
 
        // determine length of encoded text within chunks and ensure length is even
        $length = 75 - strlen($start) - strlen($end);
        $length = floor($length / 2) * 2;
 
        // encode the string and split it into chunks with spacers after each chunk
        $str = chunk_split(base64_encode((string) $str), $length, $spacer);
 
        // remove trailing spacer and add start and end delimiters
        $str = preg_replace('#' . preg_quote($spacer, '#') . '$#', '', $str);
 
        return $start . $str . $end;
    }
 
    //
    // Attach files via MIME.
    //
    public function attachFile($filename, $szFromAddress, $szFilenameToDisplay, $mimetype = "application/octet-stream")
    {
        global $lang;
        $mime_boundary = "--==================_846811060==_";
 
        $this->msg = '--' . $mime_boundary . "\nContent-Type: text/plain;\n\tcharset=\"" . $lang['ENCODING'] . "\"\n\n" . $this->msg;
 
        if ($mime_filename)
        {
            $filename = $mime_filename;
            $encoded = $this->encode_file($filename);
        }
 
        $fd = fopen($filename, "r");
        $contents = fread($fd, filesize($filename));
 
        $this->mimeOut = "--" . $mime_boundary . "\n";
        $this->mimeOut .= "Content-Type: " . $mimetype . ";\n\tname=\"$szFilenameToDisplay\"\n";
        $this->mimeOut .= "Content-Transfer-Encoding: quoted-printable\n";
        $this->mimeOut .= "Content-Disposition: attachment;\n\tfilename=\"$szFilenameToDisplay\"\n\n";
 
        if ( $mimetype == "message/rfc822" )
        {
            $this->mimeOut .= "From: ".$szFromAddress."\n";
            $this->mimeOut .= "To: ".$this->emailAddress."\n";
            $this->mimeOut .= "Date: ".date("D, d M Y H:i:s") . " UT\n";
            $this->mimeOut .= "Reply-To:".$szFromAddress."\n";
            $this->mimeOut .= "Subject: ".$this->mailSubject."\n";
            $this->mimeOut .= "X-Mailer: PHP/".phpversion()."\n";
            $this->mimeOut .= "MIME-Version: 1.0\n";
        }
 
        $this->mimeOut .= $contents."\n";
        $this->mimeOut .= "--" . $mime_boundary . "--" . "\n";
 
        return $out;
        // added -- to notify email client attachment is done
    }
 
    public function getMimeHeaders($filename, $mime_filename="")
    {
        $mime_boundary = "--==================_846811060==_";
 
        if ($mime_filename)
        {
            $filename = $mime_filename;
        }
 
        $out = "MIME-Version: 1.0\n";
        $out .= "Content-Type: multipart/mixed;\n\tboundary=\"$mime_boundary\"\n\n";
        $out .= "This message is in MIME format. Since your mail reader does not understand\n";
        $out .= "this format, some or all of this message may not be legible.";
 
        return $out;
    }
 
    //
    // Split string by RFC 2045 semantics (76 chars per line, end with \r\n).
    //
    public function myChunkSplit($str)
    {
        $stmp = $str;
        $len = strlen((string) $stmp);
        $out = "";
 
        while ($len > 0)
		{
			if ($len >= 76)
			{
				$out .= substr((string) $stmp, 0, 76) . "\r\n";
				$stmp = substr((string) $stmp, 76);
				$len = $len - 76;
			}
			else
			{
				$out .= $stmp . "\r\n";
				$stmp = "";
				$len = 0;
			}
		}
		return $out;
	}

	//
	// Split the specified file up into a string and return it
	//
	public function encode_file($sourcefile)
	{
		if (is_readable(phpbb_realpath($sourcefile)))
		{
			$fd = fopen($sourcefile, "r");
			$contents = fread($fd, filesize($sourcefile));
			$encoded = $this->myChunkSplit(base64_encode($contents));
			fclose($fd);
		}
	 
		return $encoded;
	}

} // class emailer