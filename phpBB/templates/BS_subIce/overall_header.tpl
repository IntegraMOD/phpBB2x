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
<link href="{TEMPLATE}/{T_HEAD_STYLESHEET}" rel="stylesheet" type="text/css">

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
<script>
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script>
<!-- 
function mpFoto(img){ 
foto1= new Image(); 
foto1.src=(img); 
mpControl(img); 
} 
function mpControl(img){ 
if((foto1.width!=0)&&(foto1.height!=0)){ 
viewFoto(img); 
} 
else{ 
mpFunc="mpControl('"+img+"')"; 
intervallo=setTimeout(mpFunc,20); 
} 
} 
function viewFoto(img){ 
largh=foto1.width+20; 
altez=foto1.height+20; 
string="width="+largh+",height="+altez; 
finestra=window.open(img,"",string); 
} 
//--> 
</script> 
</head>
<body>
<a id="top"></a>
<div class="container-fluid mx-0 px-0 px-sm-4"> 
  <div class="row"> 
    <div class="col mx-0 my-2">
       <div class="container-fluid bodyline mx-0 px-0 pt-0 pb-2">
          <div class="row justify-content-center"> 
			<div class="col">
<a id="top"></a>
<div class="container-fluid mx-0 px-0 px-sm-4"> 
  <div class="row"> 
    <div class="col mx-0 my-2">
       <div class="container-fluid bodyline mx-0 px-0 pt-0 pb-2">
          <div class="row justify-content-center"> 
			<div class="col">
 			  <!-- INCLUDE nav_header.tpl -->
              <div class="container-fluid topbkg">
                <div class="row d-flex align-items-center">
                  <div class="col"><a class="navbar-brand" href="{U_INDEX}"><img src="templates/BS_subIce/images/phpbb2_logo.png" alt="{L_INDEX}"></a></div>
                  <div class="col text-start"><span class="maintitle align-text-bottom">{SITENAME}</span><br /><span class="gen">{SITE_DESCRIPTION}</span></div>
		        </div>
		      </div>
		    </div>
		  </div>