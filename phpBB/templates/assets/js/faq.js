/*************************************************************
 *	DHTML Collapsible FAQ MOD v1.0.0
 *
 *	Copyright (C) 2004, Markus (http://www.phpmix.com)
 *	This script is released under GPL License.
 *	Feel free to use this script (or part of it) wherever you need
 *	it ...but please, give credit to original author. Thank you. :-)
 *	We will also appreciate any links you could give us.
 *
 *	Enjoy! ;-)
 *************************************************************/

function _CFAQ()
{
	this.lastOpened = '';
	return this;
}
_CFAQ.prototype.IsDisplaySupported = function()
{
	if( window.opera && !document.childNodes ) return false;
	if( document.getElementById || document.all ) return true;
	return false;
}
_CFAQ.prototype.getQueryVar = function(varName)
{
	var q = window.location.search.substring(1);
	var v = q.split('&');
	for( var i=0; i < v.length; i++ )
	{
		var p = v[i].split('=');
		if( p[0] == varName ) return p[1];
	}
	return null;
}
_CFAQ.prototype.getObj = function(obj)
{
	return ( document.getElementById ? document.getElementById(obj) : ( document.all ? document.all[obj] : null ) );
}
_CFAQ.prototype.displayObj = function(obj, status)
{
	var x = this.getObj(obj);
	if( x && x.style ) x.style.display = status;
}
_CFAQ.prototype.display = function(faq_id, isLink)
{
	if( this.IsDisplaySupported() )
	{
		if( !isLink )
		{
			if( this.lastOpened != '' )
			{
				this.displayObj(this.lastOpened, 'none');
			}
			if( this.lastOpened != faq_id )
			{
				this.displayObj(faq_id, '');
				this.lastOpened = faq_id;
			}
			else
			{
				this.lastOpened = '';
			}
		}
		return false;
	}
	return true;
}

var CFAQ = new _CFAQ();

if( !CFAQ.IsDisplaySupported() )
{
	var u_faq = window.location.href;
	u_faq += ( u_faq.indexOf('?') > 0 ? '&' : '?' ) + 'dhtml=no';
	window.location.replace(u_faq);
}
