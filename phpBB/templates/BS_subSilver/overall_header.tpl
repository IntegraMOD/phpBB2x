<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="en" xml:lang="en">
<head>
<meta charset="{S_CONTENT_ENCODING}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="copyright" content="2001, 2005 phpBB Group">
<link rel="icon" type="image/x-icon" href="images/favicon.ico">

<!-- Bootstrap 5.2.3 CSS -->
<link rel="stylesheet" href="templates/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="templates/BS_subSilver/{T_HEAD_STYLESHEET}" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<title>{SITENAME} :: {PAGE_TITLE}</title>
<script src="https://cdn.jsdelivr.net/npm/altcha/dist/altcha.min.js"></script>
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
       <div class="container-fluid bodyline mx-0 px-0 py-2">
        <div class="row justify-content-center"> 
			<div>
<!-- Navbar start -->
              <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{U_INDEX}"><img src="templates/BS_subSilver/images/logo_phpBB.gif" alt="{L_INDEX}"></a>
                  <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </div>
                  <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0 d-flex flex-wrap">
                      <li class="nav-item d-xs-block d-sm-none  d-lg-block">
                        <a class="nav-link text-nowrap navbr" href="{U_INDEX}"><i class="fa-solid fa-house"></i>&nbsp;{L_HOME}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_FAQ}"><i class="fa-regular fa-circle-question"></i>&nbsp;{L_FAQ}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_SEARCH}"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_MEMBERLIST}"><i class="fa-regular fa-rectangle-list"></i>&nbsp;{L_MEMBERLIST}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_GROUP_CP}"><i class="fa-solid fa-users"></i>&nbsp;{L_USERGROUPS}</a>
                      </li>
            		  <!-- BEGIN switch_user_logged_in -->              
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_PROFILE}"><i class="fa-solid fa-user"></i>&nbsp;{L_PROFILE}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_PRIVATEMSGS}"><i class="fa-solid fa-message"></i>&nbsp;{PRIVATE_MESSAGE_INFO}</a>
                      </li>
            		  <!-- END switch_user_logged_in -->                      
               		  <!-- BEGIN switch_user_logged_out -->
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_REGISTER}"><i class="fa-solid fa-door-open fa-fade"></i>&nbsp;{L_REGISTER}</a>
                      </li>		  
            		  <!-- END switch_user_logged_out -->
                      <li class="nav-item">
                        <a class="nav-link text-nowrap navbr" href="{U_LOGIN_LOGOUT}">
            				<!-- BEGIN switch_user_logged_in -->
            				<i class="fa-solid fa-right-from-bracket"></i>
            				<!-- END switch_user_logged_in -->
            				<!-- BEGIN switch_user_logged_out -->
            				<i class="fa-solid fa-right-to-bracket"></i>
            				<!-- END switch_user_logged_out -->
            				{L_LOGIN_LOGOUT}
            			</a>
                      </li>
					  <li class="nav-item"><span class="nav-link text-nowrap navbr">{ADMIN_SHORT_LINK}</span></li>
                    </ul>
                    <form action="{U_SEARCH}" method="get" id="search">
            		<fieldset>
                      <input name="search_keywords" id="keywords" class="form-control" type="text" placeholder="Search" aria-label="Search">
            		  {S_HIDDEN_FIELDS}
            		</fieldset>
                    </form>
                  </div>
                </div>
              </nav>  			  
<!-- Navbar end -->			  
		      <div class="col text-center mb-3"><span class="maintitle align-text-bottom">{SITENAME}</span><br /><span class="gen">{SITE_DESCRIPTION}</span></div>
		  </div>
		</div>
<br />

