<header id="header" style="margin:0;">
                  <div class="container">
                     <div id="mega_main_menu" class="primary primary_style-flat icons-left first-lvl-align-right first-lvl-separator-none direction-horizontal fullwidth-enable mobile_minimized-enable dropdowns_animation-anim_5 include-logo no-search no-woo_cart no-buddypress responsive-enable coercive_styles-disable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-0-2 mega_main mega_main_menu">
                        <div class="menu_holder">
                           <div class="mmm_fullwidth_container"></div>
                           <!-- class="fullwidth_container" -->
                           <div class="menu_inner">
                              <span class="nav_logo">
                                 <a class="logo_link" href="http://vesitcricketleague.in/fantasyhome.php" >
                                 <img src="http://vesitcricketleague.in/wp-content/uploads/2014/10/logo.png" alt="FC Champion" />
                                 </a>
                                 <a class="mobile_toggle">
                                    <span class="mobile_button">
                                    Menu &nbsp;
                                    <span class="symbol_menu">&equiv;</span>
                                    <span class="symbol_cross">&#x2573;</span>
                                    </span><!-- class="mobile_button" -->
                                 </a>
                              </span>
                              <!-- /class="nav_logo" -->
                              <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                                 <?php if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id)) { ?>
                                 <li id="menu-item-2271" class="menu-item menu-item-type-post_type menu-item-object-sp_team menu-item-2271 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    <?php echo 'Welcome team, '.$user_id.'!'; ?>  
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <?php } ?>
                                 <li id="menu-item-2951" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-2951 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/fantasyhome.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    HOME
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <li id="menu-item-2271" class="menu-item menu-item-type-post_type menu-item-object-sp_team menu-item-2271 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/play.php#selectArea" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    PLAY
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <li id="menu-item-2271" class="menu-item menu-item-type-post_type menu-item-object-sp_team menu-item-2271 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/howtoplay.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    HOW TO PLAY
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <li id="menu-item-2985" class="menu-item menu-item-type-post_type menu-item-object-sp_calendar menu-item-2985 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/stats.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    STATS
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <?php if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id)) { ?>
                                 <li id="menu-item-2985" class="menu-item menu-item-type-post_type menu-item-object-sp_calendar menu-item-2985 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/logout.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    LOGOUT
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <?php } else { ?>
                                 <li id="menu-item-2985" class="menu-item menu-item-type-post_type menu-item-object-sp_calendar menu-item-2985 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/my-account/index.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    LOGIN/REGISTER
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                                 <?php } ?>
                         <li id="menu-item-2985" class="menu-item menu-item-type-post_type menu-item-object-sp_calendar menu-item-2985 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/sponsors.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    SPONSORS
                                    </span>
                                    </span>
                                    </a>
                                 </li>
								 <li id="menu-item-2985" class="menu-item menu-item-type-post_type menu-item-object-sp_calendar menu-item-2985 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                    <a href="http://vesitcricketleague.in/index.php" class="item_link  disable_icon" tabindex="0">
                                    <i class=""></i> 
                                    <span class="link_content">
                                    <span class="link_text">
                                    VCL HOME
                                    </span>
                                    </span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /class="menu_inner" -->
                        </div>
                        <!-- /class="menu_holder" -->
                     </div>
                     <!-- /id="mega_main_menu" -->		
                  </div>
               </header>
