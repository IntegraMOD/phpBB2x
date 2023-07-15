<script>
<!--

/*************************************************************
 *	DHTML Slide Menu for ACP MOD
 *
 *	Copyright (C) 2004, Markus (phpMiX)
 *	This script is released under GPL License.
 *	Feel free to use this script (or part of it) wherever you need
 *	it ...but please, give credit to original author. Thank you. :-)
 *	We will also appreciate any links you could give us.
 *
 *	Enjoy! ;-)
 *************************************************************/

function getCookie(name)
{
	var cookies = document.cookie;
	var start = cookies.indexOf(name + '=');
	if( start < 0 ) return null;
	var len = start + name.length + 1;
	var end = cookies.indexOf(';', len);
	if( end < 0 ) end = cookies.length;
	return unescape(cookies.substring(len, end));
}
function setCookie(name, value, expires, path, domain, secure)
{
	document.cookie = name + '=' + escape (value) +
		((expires) ? '; expires=' + ( (expires == 'never') ? 'Thu, 31-Dec-2099 23:59:59 GMT' : expires.toGMTString() ) : '') +
		((path)    ? '; path='    + path    : '') +
		((domain)  ? '; domain='  + domain  : '') +
		((secure)  ? '; secure' : '');
}
function delCookie(name, path, domain)
{
	if( getCookie(name) )
	{
		document.cookie = name + '=;expires=Thu, 01-Jan-1970 00:00:01 GMT' +
			((path)    ? '; path='    + path    : '') +
			((domain)  ? '; domain='  + domain  : '');
	}
}

function menuCat(id, rows)
{
	this.cat_id = id;
	this.cat_rows = rows;
	this.status = 'block';
}
var menuCats = new Array();
<!-- BEGIN catrow -->
menuCats['menuCat_{catrow.MENU_CAT_ID}'] = new menuCat('{catrow.MENU_CAT_ID}', {catrow.MENU_CAT_ROWS});
<!-- END catrow -->

function getObj(obj)
{
	return ( document.getElementById ? document.getElementById(obj) : ( document.all ? document.all[obj] : null ) );
}
function displayObj(obj, status)
{
	var x = getObj(obj);
	if( x && x.style ) x.style.display = status;
}

var queueInterval = 20;		// milliseconds between queued steps.
var execInterval = 0;
var queuedSteps;
var currentStep;

function queueStep(o, s)
{
	this.obj = o;
	this.status = s;
}
function execQueue()
{
	if( currentStep < queuedSteps.length )
	{
		var obj = queuedSteps[currentStep].obj;
		var status = queuedSteps[currentStep].status;
		displayObj(obj, status);
		if( menuCats[obj] ) menuCats[obj].status = status;
		currentStep++;
		setTimeout("execQueue();", execInterval);
	}
	else
	{
		execInterval = queueInterval;
	}
}
function onMenuCatClick(cat_id)
{
	var currentCat, currentStatus;

	currentCat = 'menuCat_'+cat_id;
	currentStatus = menuCats[currentCat].status;

	queuedSteps = new Array();
	currentStep = 0;

	for( var catName in menuCats )
	{
		if( menuCats[catName].status == 'none' ) continue;

		for( var i=(menuCats[catName].cat_rows-1); i >= 0; i-- )
		{
			queuedSteps[currentStep++] = new queueStep(catName+'_'+i, 'none');
		}
		queuedSteps[currentStep++] = new queueStep(catName, 'none');
	}

	if( currentStatus == 'none' )
	{
		queuedSteps[currentStep++] = new queueStep(currentCat, 'block');
		for( var i=0; i < menuCats[currentCat].cat_rows; i++ )
		{
			queuedSteps[currentStep++] = new queueStep(currentCat+'_'+i, 'block');
		}
		var	expdate = new Date();		// 72 Hours from now
		expdate.setTime(expdate.getTime() + (72 * 60 * 60 * 1000));
		setCookie('{COOKIE_NAME}_menu_cat_id', cat_id, expdate,
				('{COOKIE_PATH}'   == '') ? null : '{COOKIE_PATH}',
				('{COOKIE_DOMAIN}' == '') ? null : '{COOKIE_DOMAIN}',
				('{COOKIE_SECURE}' == '0') ? false : true);
	}
	else
	{
		delCookie('{COOKIE_NAME}_menu_cat_id',
				('{COOKIE_PATH}'   == '') ? null : '{COOKIE_PATH}',
				('{COOKIE_DOMAIN}' == '') ? null : '{COOKIE_DOMAIN}');
	}

	currentStep = 0;
	setTimeout("execQueue();", execInterval);
}

function doOnLoadMenuACP()
{
	var cat_id;

	if( getObj('menuCat_0') )
	{
		cat_id = getCookie('{COOKIE_NAME}_menu_cat_id');
		if( !menuCats['menuCat_'+cat_id] )
		{
			cat_id = 0;
		}
		else
		{
			menuCats['menuCat_'+cat_id].status = 'none';
		}
		onMenuCatClick(cat_id);
	}
	if( oldOnLoadMenuACP )
	{
		oldOnLoadMenuACP();
	}
}
var	oldOnLoadMenuACP = window.onload;
window.onload = doOnLoadMenuACP;

// -->
</script>
<img src="../templates/prosilver/admin/images/phpbb_logo.gif" alt="phpBB" />
<div id="menu">
  <ul>
	<li class="header">{L_ADMIN}</li>
	<li><a href="{U_ADMIN_INDEX}" target="main"><span>{L_ADMIN_INDEX}</span></a></li>
	<li><a href="{U_FORUM_INDEX}" target="_parent"><span>{L_FORUM_INDEX}</span></a></li>
	<li><a href="{U_FORUM_INDEX}" target="main"><span>{L_PREVIEW_FORUM}</span></a></li>
  </ul>
  <!-- BEGIN catrow -->
  <ul>
	<li class="header" onclick="onMenuCatClick('{catrow.MENU_CAT_ID}');" style="cursor:pointer;cursor:hand;">{catrow.ADMIN_CATEGORY}</li>
    <li id="menuCat_{catrow.MENU_CAT_ID}" style="display:block;">
      <!-- BEGIN modulerow -->
      <div id="menuCat_{catrow.MENU_CAT_ID}_{catrow.modulerow.ROW_COUNT}" style="display:block;"><a href="{catrow.modulerow.U_ADMIN_MODULE}" target="main" class="small">{catrow.modulerow.ADMIN_MODULE}</a></div>
      <!-- END modulerow -->
    </li>
  </ul>
  <!-- END catrow -->
  
  
</div>
<div class="copyright" align="center">DHTML Menu by <b>phpMiX</b></div>
	