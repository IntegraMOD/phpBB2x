<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="en" xml:lang="en">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Favicons -->
<link href="templates/Hero/img/favicon.ico" rel="icon">
<link href="templates/Hero/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Vendor CSS Files -->
<link href="templates/Hero/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="templates/Hero/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="templates/Hero/vendor/aos/aos.css" rel="stylesheet">
<link href="templates/Hero/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="templates/Hero/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
<link href="templates/Hero/{T_HEAD_STYLESHEET}" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<title>{SITENAME} :: {PAGE_TITLE}</title>

<!-- BEGIN switch_enable_pm_popup -->
<script>
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
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
       <div class="container-fluid bodyline mx-0 px-0 py-2">
	   
	   
	   
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{U_INDEX}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="templates/Hero/images/logo/logo_sml.png" alt="">
        <h1 class="sitename">{SITENAME}</h1>
      </a>

     <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{U_INDEX}#home" class="active">{L_HOME}</a></li>
          <li><a href="{U_INDEX}#forum">{L_FORUM}</a></li>
		  
          <li class="dropdown"><a href="{U_SEARCH}"><span>{L_SEARCH}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
		  <a href="#">
		  <span>
		  {THISUSER}
		  </span> <i class="bi bi-chevron-down toggle-dropdown"></i>
		  </a>
            <ul>
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

    </div>
  </header>	   
	
<br />
	<section id="forum" class="forum section">
