<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="en" xml:lang="en">
<head>
<meta charset="{S_CONTENT_ENCODING}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico">

<!-- Vendor CSS Files -->
<link href="templates/Hero/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="templates/Hero/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="templates/Hero/vendor/aos/aos.css" rel="stylesheet">
<link href="templates/Hero/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="templates/Hero/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
<link href="templates/Hero/{T_HEAD_STYLESHEET}" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- BEGIN switch_enable_pm_popup -->
<script>
<!--
	if ({PRIVATE_MESSAGE_NEW_FLAG}) {
    window.location.href = '{U_PRIVATEMSGS_POPUP}';
}
//-->
</script>
<!-- END switch_enable_pm_popup -->

</head>
<body>
<a id="top"></a>
<div class="container-fluid mx-0 px-0 px-sm-4"> 
  <div class="row"> 
    <div class="col mx-2 my-2 px-0"> 
		<div class="container-fluid mx-0 px-0 py-2">

		<header id="header" class="header d-flex align-items-center sticky-top">
		<div class="container-fluid position-relative d-flex align-items-center justify-content-between">
          <a href="{U_INDEX}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="./images/logo/logo_sml.png" alt="">
            <h1 class="sitename">{SITENAME}</h1>
          </a>

         <nav id="navmenu" class="navmenu">
            <ul>
              <li class="dropdown"><a href="{U_INDEX}#home" class="active"><span>{L_HOME}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{U_INDEX}#home" class="active">{L_HOME}</a></li>
    			  <li><a href="{U_INDEX}#forum">{L_FORUM}</a></li>
                  <li><a href="{U_FAQ}">{L_FAQ}</a></li>
    			<!-- BEGIN switch_user_logged_in -->              
                  <li><a href="{U_MEMBERLIST}">{L_MEMBERLIST}</a></li>
                  <li><a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a></li>
                <!-- END switch_user_logged_in -->              
                </ul>
              </li>
              <li><a href="{U_INDEX}#forum">{L_FORUM}</a></li>
              <li><a href="{U_FAQ}">{L_FAQ}</a></li>
              <li class="dropdown"><a href="#"><span>{L_SEARCH}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{U_SEARCH}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH}</span></a></li>
                <!-- BEGIN switch_user_logged_in -->              
                  <li><a href="{U_SEARCH_SELF}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_SELF}</span></a></li>
                  <li><a href="{U_SEARCH_NEW}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_NEW}</span></a></li>
                <!-- END switch_user_logged_in -->              
                 <li><a href="{U_SEARCH_UNANSWERED}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_UNANSWERED}</span></a></li>
                </ul>
              </li>

	          <!-- BEGIN switch_user_logged_in -->	  
			  <li class="dropdown">
			  <a href="{U_THISUSER}">
			  <span>
			  {THISUSER}
			  </span> <i class="bi bi-chevron-down toggle-dropdown"></i>
			  </a>
				<ul>
				  <li><a href="{U_THISUSER}"><span><i class="fa-solid fa-user-circle"></i>&nbsp;{THISUSER}</span></a></li>
				  <li><a href="{U_PROFILE}"><span><i class="fa-solid fa-user-gear"></i>&nbsp;{L_PROFILE}</span></a></li>
				  <li><a href="{U_PRIVATEMSGS}"><span><i class="fa-solid fa-message"></i>&nbsp;{PRIVATE_MESSAGE_INFO}</span></a></li>
				  <li class="dropdown"><a href="#"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH} <i class="bi bi-chevron-down toggle-dropdown"></i></span></a>
					<ul>
					  <li><a href="{U_SEARCH_SELF}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_SELF}</span></a></li>
					  <li><a href="{U_SEARCH_NEW}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_NEW}</span></a></li>
					  <li><a href="{U_SEARCH_UNANSWERED}"><span><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_UNANSWERED}</span></a></li>
					</ul>
				  </li>
				  <li>{ADMIN_SHORT_LINK}</li>
				  <li><a href="{U_LOGIN_LOGOUT}"><span><i class="fa-solid fa-right-from-bracket"></i>&nbsp;{L_LOGIN_LOGOUT}</span></a></li>
				</ul>
			  </li>
	          <!-- END switch_user_logged_in -->
	          <!-- BEGIN switch_user_logged_out -->
			  <li class="dropdown">
			  <a href="#">
			  <span>
			  Welcome!
			  </span> <i class="bi bi-chevron-down toggle-dropdown"></i>
			  </a>
				<ul>
				  <li><a href="{U_LOGIN_LOGOUT}"><span><i class="fa-solid fa-right-from-bracket"></i>&nbsp;{L_LOGIN_LOGOUT}</span></a></li>
				  <li><a href="{U_REGISTER}"><span><i class="fa-solid fa-door-open fa-fade"></i>&nbsp;{L_REGISTER}</span></a></li>	
				</ul>
			  </li>
	          <!-- END switch_user_logged_out -->

              <li><a href="{U_INDEX}#about">About</a></li>
              <li><a href="{U_INDEX}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>

		<!-- BEGIN switch_cookie_consent -->
		<div id="cookie_notice" style="text-align: center; background-color: #fdf4e3; border-bottom: 1px solid #ccc; padding: 8px;">
		  <span class="gensmall">
			  {cookie_consent_msg}
			[ <a href="#" onclick="document.getElementById('privacy_dropdown').style.display = (document.getElementById('privacy_dropdown').style.display == 'none') ? 'block' : 'none'; return false;" class="gensmall">{L_PRIVACY}</a> ]
		  </span>
		  <div id="privacy_dropdown" style="display: none; margin: 8px auto; width: 80%; text-align: left; background-color: #f5f5f5; border: 1px solid #ccc; padding: 8px;" class="gensmall">
			{L_PRIVACY_POLICY}
		  </div>
		  <input type="button" class="mainoption" value="{L_COOKIE_ACCEPT}" onclick="document.cookie='cookie_consent=1; path=/; max-age=31536000'; document.getElementById('cookie_notice').style.display='none'; return false;" />
		</div>
		<!-- END switch_cookie_consent -->

		</div>
        </header>	   
	    
<br />
	<!-- Forum Section -->
	<section id="forum" class="forum section">