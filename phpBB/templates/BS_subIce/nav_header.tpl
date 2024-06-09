           <!-- Navbar begin -->				    
              <nav class="navbar navbar-expand-lg navbar-light rowpic" aria-label="{SITENAME}">
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
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_INDEX}"><i class="fa-solid fa-house"></i>&nbsp;{L_HOME}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_FAQ}"><i class="fa-regular fa-circle-question"></i>&nbsp;{L_FAQ}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_SEARCH}"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_MEMBERLIST}"><i class="fa-regular fa-rectangle-list"></i>&nbsp;{L_MEMBERLIST}</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_GROUP_CP}"><i class="fa-solid fa-users"></i>&nbsp;{L_USERGROUPS}</a></li>
                        <!-- BEGIN switch_user_logged_in -->              
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_PRIVATEMSGS}"><i class="fa-solid fa-message"></i>&nbsp;{PRIVATE_MESSAGE_INFO}</a></li>
						<li class="nav-item"><a class='nav-link nav_important navbr dropdown-arrow' href='#'><i class="fa-solid fa-user-gear"></i>&nbsp;{THISUSER}</a>
						  <ul class='sub-menus'>
							<li><a class="nav-link" href="{U_PROFILE}"><i class="fa-solid fa-user-gear"></i>&nbsp;{L_PROFILE}</a></li>
							<li><a class="nav-link" href="{U_SEARCH_SELF}"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;{L_SEARCH_SELF}</a></li>
							<li><a class="nav-link" href="{U_LOGIN_LOGOUT}"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;{L_LOGOUT}</a></li>
						  </ul>
						</li>
						<!-- END switch_user_logged_in -->
                        <!-- BEGIN switch_user_logged_out -->
                        <li class="nav-item"><a class="nav-link text-nowrap navbr" href="{U_LOGIN_LOGOUT}"><i class="fa-solid fa-right-to-bracket"></i>{L_LOGIN_LOGOUT}</a></li>
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
