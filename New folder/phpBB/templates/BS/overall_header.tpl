<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="en" xml:lang="en">
<head>
<meta charset="{S_CONTENT_ENCODING}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="copyright" content="2017, 2023 Integra Team">

<title>{SITENAME} :: {PAGE_TITLE}</title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico">

<!-- Bootstrap 5.2.3 CSS -->
<link rel="stylesheet" href="templates/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- fontawesome 6.4.0 CSS-->  
<link rel="stylesheet" href="templates/assets/css/all.css" rel="stylesheet" type="text/css">
<link href="templates/BS/{T_HEAD_STYLESHEET}" rel="stylesheet" type="text/css">

<!-- BEGIN switch_enable_pm_popup -->
<script>
if ({ PRIVATE_MESSAGE_NEW_FLAG }) {
  window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'height=225, resizable=yes, width=400')
}
</script>
<!-- END switch_enable_pm_popup -->
</head>

<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}" >
<a id="top"></a>
<div class="container-fluid mx-0 px-0 px-sm-4"> 
  <div class="row"> 
    <div class="col mx-0 my-2">
       <div class="container-fluid mx-0 px-0 pt-0 pb-2">
          <div class="row justify-content-center"> 
			<div class="col">
            <!-- Navbar begin -->				    
              <nav class="navbar navbar-expand-lg navbar-light" aria-label="{SITENAME}">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-start row1" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title navbar-toggler" type="button" data-bs-toggle="offcanvas" id="offcanvasNavbarLabel">{SITENAME}</h5>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 align-items-center">
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_INDEX}"><i class="fa-solid fa-house"></i>&nbsp;{L_FORUM}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_FAQ}"><i class="fa-regular fa-circle-question"></i>&nbsp;{L_FAQ}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_SEARCH}"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_MEMBERLIST}"><i class="fa-regular fa-rectangle-list"></i>&nbsp;{L_MEMBERLIST}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_GROUP_CP}"><i class="fa-solid fa-users"></i>&nbsp;{L_USERGROUPS}</a></li>
                        <!-- BEGIN switch_user_logged_in -->              
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_PROFILE}"><i class="fa-solid fa-user"></i>&nbsp;{L_PROFILE}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_PRIVATEMSGS}"><i class="fa-solid fa-message"></i>&nbsp;{PRIVATE_MESSAGE_INFO}</a></li>
                        <!-- END switch_user_logged_in -->
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_LOGIN_LOGOUT}">
                          <!-- BEGIN switch_user_logged_in -->
                          <i class="fa-solid fa-right-from-bracket"></i>
                          <!-- END switch_user_logged_in -->
                          <!-- BEGIN switch_user_logged_out -->
                          <i class="fa-solid fa-right-to-bracket"></i>
                          <!-- END switch_user_logged_out -->
                          {L_LOGIN_LOGOUT}
                        </a></li>
                        <!-- BEGIN switch_user_logged_out -->
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_REGISTER}"><i class="fa-solid fa-door-open fa-fade"></i>&nbsp;{L_REGISTER}</a></li>		  
                        <!-- END switch_user_logged_out -->                        
                      </ul>
                      <form action="{U_SEARCH}" method="get" id="search">
                        <fieldset>
                        <input name="search_keywords" id="keywords" class="form-control" type="text" placeholder="Search" aria-label="Search">
                        {S_HIDDEN_FIELDS}
                        </fieldset>
                      </form>          
                    </div>
                  </div>
                </div>
              </nav>
            <!-- Navbar end -->				    
            <div class="container-fluid pt-3">
              <div class="row d-flex align-items-center">
			  	<!-- Logo start -->
                <div class="col-md-6"><a class="navbar-brand" href="{U_INDEX}">
				  <div class="h-100 p-1 text-bg-light rounded-3 bdr-lt boxwrapper text-wrap">
				    <div class="row d-flex bg-body-secondary rounded-2 bdr-cat p-4 mx-0 my-1"> 
				    <img src="templates/BS/images/logo_phpBB2x.png" alt="{SITENAME}" loading="lazy" style="max-width: 300px; display: block; margin-left: auto; margin-right: auto; width: 50%;">
				    <p class="navbr text-center">{SITE_DESCRIPTION}</p>
				  </div>
				</div>
                </a></div>
				<!-- Logo end -->				    
              <div class="col text-center"><span class="maintitle align-text-bottom">{SITENAME}</span></div>
		      </div>
		    </div>
		  </div>
		</div>
<br />