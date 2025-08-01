<div class="container-fluid">
  <div class="row pb-2">
    <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
  
  
    <div id="formContent text-center">
	  <form method="post" action="{S_LOGIN_ACTION}">
	  <div class="p-2 text-center bg-light rounded-2 bdr-lt boxwrapper">
	    <div class="row nav mx-0 pl-2"> 
		  <div class="col text-center"><a name="login"></a><span class="cattitle">{L_LOGIN_LOGOUT}</span></div>
		</div>
		<div class="row mx-0">
		  <div class="col-1 px-0 text-center my-auto"><button class="btn fa- d-inline-block"><span class="fa-solid fa-right-to-bracket" alt="{L_LOGIN}"  title="{L_LOGIN}"></span></button></div>
		  <div class="col hr5 py-2">
	        <span class="d-flex align-items-center fadeIn second form-field"><i class="far fa-user"></i><input class="text-center" type="text" name="username" id="username" placeholder="{L_USERNAME}"></span>
            <span class="d-flex align-items-center fadeIn third form-field"><i class="fas fa-key"></i><input class="text-center" type="password" name="password" id="password" placeholder="{L_PASSWORD}"></span>	  
		    <!-- BEGIN switch_allow_autologin -->
		    <div class="autologin">{L_AUTO_LOGIN} <input class="text" type="checkbox" name="autologin" /></div>
		    <!-- END switch_allow_autologin -->	
			<div class="fadeIn fourth my-2">{S_HIDDEN_FIELDS}<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" /></div>
			<div class="row">
			  <div class="col text-center pt-2"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></div>
			</div>
			<div class="row">
			  <div class="col text-center pt-2 gensmall"><a href="{U_REGISTER}">{L_NO_ACCOUNT}</a></div>
			</div>			
		  </div>
		</div>
	  </div>
	  </form>
    </div> 
</div>
