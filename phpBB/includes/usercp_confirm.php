<?php
/***************************************************************************
 *                            usercp_confirm.php
 *                            -------------------
 *   begin                : Saturday, Jan 15, 2003
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: usercp_confirm.php,v 1.1.2.4 2006/05/30 19:29:43 grahamje Exp $
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
	exit;
}

// Note to potential users of this code ...
//
// Remember this is released under the _GPL_ and is subject
// to that licence. Do not incorporate this within software 
// released or distributed in any way under a licence other
// than the GPL. We will be watching ... ;)

// Do we have an id? No, then just exit
if (empty($HTTP_GET_VARS['id']))
{
	exit;
}

$confirm_id = htmlspecialchars((string) $HTTP_GET_VARS['id']);

// Define available charset
$chars = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',  'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',  'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9');

if (!preg_match('/^[A-Za-z0-9]+$/', $confirm_id))
{
	$confirm_id = '';
}

// Try and grab code for this id and session
$sql = 'SELECT code  
	FROM ' . CONFIRM_TABLE . " 
	WHERE session_id = '" . $userdata['session_id'] . "' 
		AND confirm_id = '$confirm_id'";
$result = $db->sql_query($sql);

// If we have a row then grab data else create a new id
if ($row = $db->sql_fetchrow($result))
{
	$db->sql_freeresult($result);
	$code = $row['code'];
}
else
{
	exit;
}

/*=======================================
|	This script was developed by alex Roosso .
|	Title: Protect Form (Captcha)
|	Version: 2.0.1
|	Release: Feb 2007
|	Homepage: http://www.black-web.ru
|	Copyright (c) 2007 alex Roosso.
|	All rights reserved.
========================================*/


$path = "images/captchabg";  //Name folder backgrounds
$num = 6;	//How many symbols in code

$string = $code;

$bgcolor = array();
$bgcolor = array(255,255,255);

$bg_array = array();
$bg_array = glob($path."/*.{gif,jpg,png}", GLOB_BRACE);
$file_name = $bg_array[mt_rand(0,count($bg_array)-1)];
$size = getimagesize($file_name);

$capcha = imagecreatetruecolor($size[0], $size[1]);
$bg = imagecolorallocate($capcha,$bgcolor[0],$bgcolor[1],$bgcolor[2]);
imagefilledrectangle($capcha, 1, 1, $size[0]-2, $size[1]-2, $bg);
if($size['mime'] == "image/jpeg") $img = imagecreatefromjpeg($file_name);
elseif($size['mime'] == "image/png") $img = imagecreatefrompng($file_name);
elseif($size['mime'] == "image/gif") $img = imagecreatefromgif($file_name);
imagecopyresampled($capcha, $img, 1, 1, 1, 1, $size[0]-2, $size[1]-2, $size[0]-2, $size[1]-2);

$str_w = $size[0] - 20;
$str_h = $size[1];
$one = $str_w / $num;
$xs = 10;
for($l=0;$l<=$num-1;$l++)
{ 
	$letter_img = imagecreate($one,$str_h);
	$color = imagecolorallocate($letter_img, 255, 255, 255);
	imagefilledrectangle($letter_img, 0, 0, $one, $str_h, $color);
	imagecolortransparent($letter_img,$color);
	$r = mt_rand(0,150);
	$g = mt_rand(0,150);
	$b = mt_rand(0,150);
	$color2 = imagecolorallocatealpha($letter_img, $r, $g, $b, 50);
	$letter = substr($string,$l,1);
	imagestring($letter_img, 5, 0, 0, $letter, $color2);
	imagecopyresized($capcha, $letter_img, $xs, 5, 0, 0, $one*3, $str_h*($one/3), $one, $str_w);
	$xs += $one;
	imagedestroy($letter_img);
}

for($i=0;$i<=mt_rand(3,$num);$i++)
{
	$r = mt_rand(100,255);
	$g = mt_rand(100,255);
	$b = mt_rand(100,255);
	$color = imagecolorallocatealpha($capcha, $r, $g, $b, 60);
	$radius = mt_rand(10,$size[1]-10);
	$x = mt_rand(1,$size[0]-1);
	$y = mt_rand(1,$size[1]-1);
	imagefilledellipse($capcha, $x, $y, $radius, $radius, $color);
}

for($i=0;$i<=mt_rand(1,$num);$i++)
{
	$r = mt_rand(0,200);
	$g = mt_rand(0,200);
	$b = mt_rand(0,200);
	$color = imagecolorallocatealpha($capcha, $r, $g, $b, 20);
	$points = array();
	$p = mt_rand(3,10);
	for($s=0;$s<=$p;$s++)
	{
		$points[] = mt_rand(1,$size[0]-2);
		$points[] = mt_rand(1,$size[1]-2);
	}
	imagepolygon($capcha, $points, $p, $color);
}


//imageColorAllocateAlpha($img, $r, $g, $b, 50);

header("Content-type: image/jpeg");
imagejpeg($capcha);
imagedestroy($capcha);

?>