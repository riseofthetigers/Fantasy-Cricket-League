<?php
   include "dbconfig.php";
   //header("location: unavailable.php");
   error_reporting(E_ERROR);
   session_start();
   ob_start();
   $user_id = trim($_SESSION["VALID_USER_ID"]);
   if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
   {
   
   $result=mysqli_query($con,"select * from next_match");
   $nteams=mysqli_num_rows($result);
   while($row=mysqli_fetch_array($result)) {
   $teams[]=$row['teams'];
   }
   
   for($i=0;$i<$nteams;$i++) {
   $result=mysqli_query($con,"select * from players where team='$teams[$i]'");
   while($row=mysqli_fetch_array($result)) {
   $players[]=$row['player_id'];
   }
   }
   for($i=0;$i<sizeof($players);$i++) {
   $result=mysqli_query($con,"select * from teams where player_id='$players[$i]' and user_id='$user_id'");
   $count=mysqli_num_rows($result);
   if($count==1)
   $flag[$i]=1;
   else
   $flag[$i]=0;
   }
   
   if($nteams==8) {
   $result=mysqli_query($con,"select tc2,rc2 from users where user_id='$user_id'");
   while($row=mysqli_fetch_array($result)) {
   $tc=$row['tc2'];
   $rc=$row['rc2'];
   }
   }
   else {
   $result=mysqli_query($con,"select tc,rc from users where user_id='$user_id'");
   while($row=mysqli_fetch_array($result)) {
   $tc=$row['tc'];
   $rc=$row['rc'];
   }
   }
   $result=mysqli_query($con,"select teamcomplete from users where user_id='$user_id'");
	while($row=mysqli_fetch_array($result)) {
		$teamcomplete=$row['teamcomplete'];
	}
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <!--<![endif]-->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Fantasy VCL | Home</title>
      <link rel="stylesheet" href="wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector6639.css?v=3.1.6" type="text/css" media="all" />
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="xmlrpc.php">
      <link rel="alternate" type="application/rss+xml" title="FC Champion &raquo; Feed" href="feed/index.html" />
      <link rel="alternate" type="application/rss+xml" title="FC Champion &raquo; Comments Feed" href="comments/feed/index.html" />
      <link rel='stylesheet' id='mmm_mega_main_menu-css'  href='wp-content/plugins/mega_main_menu/src/css/cache.skinc9f4.css?ver=1418925004' type='text/css' media='all' />
      <link rel='stylesheet' id='ts-font-awesome-css'  href='wp-content/plugins/ts-visual-composer-extend/css/ts-font-awesomef39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/rs-plugin/css/settings4698.css?ver=4.6.3' type='text/css' media='all' />
      <style type='text/css'>
         .tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
      </style>
      <link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.minf39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='sportspress-general-css'  href='wp-content/plugins/sportspress/assets/css/sportspress7ef2.css?ver=1.5' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-layout-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout7888.css?ver=2.2.8' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen7888.css?ver=2.2.8' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce7888.css?ver=2.2.8' type='text/css' media='all' />
      <link rel='stylesheet' id='theme-style-css'  href='wp-content/themes/champion/assets/css/styledc93.css?ver=1418925116' type='text/css' media='all' />
      <link rel='stylesheet' id='theme-mobile-style-css'  href='wp-content/themes/champion/assets/css/mobiledc93.css?ver=1418925116' type='text/css' media='all' />
      <link rel='stylesheet' id='mm_icomoon-css'  href='wp-content/plugins/mega_main_menu/src/css/external/icomoon4c56.css?ver=2.0.2' type='text/css' media='all' />
      <link rel='stylesheet' id='mm_font-awesome-css'  href='wp-content/plugins/mega_main_menu/src/css/external/font-awesome4c56.css?ver=2.0.2' type='text/css' media='all' />
      <link rel='stylesheet' id='js_composer_front-css'  href='wp-content/uploads/js_composer/js_composer_front_custom7035.css?ver=4.3.4' type='text/css' media='all' />
      <link rel='stylesheet' id='js_composer_custom_css-css'  href='wp-content/uploads/js_composer/custom7035.css?ver=4.3.4' type='text/css' media='screen' />
      <link rel='stylesheet' id='bfa-font-awesome-css'  href='../cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.minae82.css?ver=4.2.0' type='text/css' media='all' />
      <link rel='stylesheet' id='ivan_vc_modules-css'  href='wp-content/plugins/ivan-visual-composer/assets/modulesf39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome-css'  href='wp-content/plugins/ivan-visual-composer/assets/libs/font-awesome-css/font-awesome.minbfce.css?ver=4.1.0' type='text/css' media='all' />
      <link rel='stylesheet' id='elegant-icons-css'  href='wp-content/plugins/ivan-visual-composer/assets/libs/elegant-icons/elegant-icons5152.css?ver=1.0' type='text/css' media='all' />
      <link rel='stylesheet' id='magnific-popup-css'  href='wp-content/plugins/ivan-visual-composer/assets/libs/magnific-popup/magnific-popup.mine2dc.css?ver=0.9.9' type='text/css' media='all' />
      <style type="text/css"></style>
      <script src="js/jquery.js"></script>
      <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
      <script type='text/javascript' src='wp-content/plugins/ts-visual-composer-extend/js/jquery.vcsc.modernizr.minf39e.js?ver=4.0.1'></script>
      <script type='text/javascript' src='wp-content/themes/champion/assets/js/fix-ie-css-limit-standalonedc93.js?ver=1418925116'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var ivan_vc = {"isAdmin":"","container":"window"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='wp-content/plugins/ivan-visual-composer/assets/modules.minf39e.js?ver=4.0.1'></script>
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
      <link rel='shortlink' href='index.php' />
      <meta name="generator" content="WPML ver:3.1.6 stt:1,4,3;0" />
      <link rel="alternate" hreflang="en-US" href="index.php" />
      <link rel="alternate" hreflang="fr-FR" href="fr/index.html" />
      <link rel="alternate" hreflang="de-DE" href="de/index.html" />
      <link rel="shortcut icon" type="image/x-icon" href="wp-content/themes/champion/favicon.ico" />
      <script type="text/javascript">
         var ajaxurl = 'wp-admin/admin-ajax.html';
      </script>
      <!--[if IE 8]>
      <link rel="stylesheet" type="text/css" href="wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen">
      <![endif]-->
      <!--[if gte IE 9]>
      <style type="text/css">
         .#mega_main_menu,
         .#mega_main_menu *
         {
         filter: none;
         }
      </style>
      <![endif]-->
      <style type="text/css">
         
         body {
         background-color: #f5f5f5;
         font-family: Arial, sans-serif;
         font-size: 14px;
         color: #252c33;
         }
         #wrapper {
         background-color: #f5f5f5;
         }
         .pre_top_nav,
         .wpml_switcher ul
         {
         background-color: #f5f5f5;
         }
         .footer {
         background-color: #ffffff;
         }
         .footer .copyright {
         color: #868686;
         }
         a{
         color: #c4302b;
         }
         a:hover, a:focus{
         color: #c4302b;
         }
         .navbar-brand{
         font-size: 20px;
         }
         h1, .h1,
         h2, .h2,
         h3, .h3,
         h4, .h4,
         h5, .h5,
         h6, .h6,
         .entry-title,
         .page-title
         {
         color: #252c33;
         font-weight: 400;
         font-family: Oswald, Arial, sans-serif;
         }
         h1, .h1
         {
         font-size: 60px;
         }
         h2, .h2{
         font-size: 30px;
         }
         h3, .h3{
         font-size: 20px;
         }
         h4, .h4{
         font-size: 17px;
         }
         h5, .h5{
         font-size: 15px;
         }
         h6, .h6{
         font-size: 14px;
         }
         .info {
         width:14px;
         height:14px;
         }
         .ground {
         position:relative;
         background-image:url(images/ground.png);
         background-repeat:no-repeat;
         background-size:contain;
         height:419px;
         width:554px;
         }
         .inlineblock {
         display:inline-block;
		 
         }
         .playerinfo {
         overflow-x:scroll;
         }
         .fieldwrapper {
         }
         .field {
         position:relative;
         background-image:url(images/fieldbg.png);
         background-repeat:no-repeat;
         display:inline-block;
         background-size:contain;
         width:135px;
         height:211px;
         }
         .pntl,.cntl,.tntl {
         color:white;
         }
         .pntl {
		 font-size:10pt;
         position:absolute;
         top:12.0%;
         left:14.1%;
         }
         .pstl { 
         position:absolute;
         top:86.6%;
         left:9.1%;
         text-transform:uppercase;
         font-size:16pt;
         }
         .cntl {
         position:absolute;
         top:3.8%;
         left:50%;
         }
         .tntl { 
         position:absolute;
         top:47%;
         left:38.8%;
         }
         .tick {
         background-image:url(images/tick.png);
         background-repeat:no-repeat;
         background-size:cover;
         background-color:transparent;
         border-color:transparent;
         width:23px;
         height:21px;
         }
         .btntl {
         background-image:url(images/removeplayer.png);
         background-repeat:no-repeat;
         background-size:cover;
         background-color:transparent;
         border-color:transparent;
         width:23px;
         height:21px;
         position:absolute;
         top:3.2%;
         left:4.9%;
         }
		 
      </style>
      <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1415599819144{margin-top: -95px !important;}.vc_custom_1417685753803{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1417783121670{padding-top: 60px !important;padding-bottom: 60px !important;}.vc_custom_1417589097135{padding-top: 72px !important;padding-bottom: 40px !important;}.vc_custom_1417591707165{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1417591654264{padding-bottom: 20px !important;}.vc_custom_1417591989292{padding-top: 90px !important;padding-bottom: 70px !important;}.vc_custom_1417610866818{padding-top: 70px !important;padding-bottom: 60px !important;}.vc_custom_1417593123378{margin-bottom: 0px !important;padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1417592943283{margin-bottom: -70px !important;padding-top: 50px !important;padding-bottom: 100px !important;}.vc_custom_1412851208864{margin-bottom: 30px !important;}.vc_custom_1412851221583{margin-bottom: 30px !important;}.vc_custom_1417598971948{margin-bottom: -40px !important;}.vc_custom_1417599760937{margin-top: 0px !important;margin-bottom: -40px !important;}.vc_custom_1417610560143{margin-bottom: -20px !important;}.vc_custom_1417604174205{margin-bottom: -40px !important;}</style>
      <script src="js/global.js"></script>
	  <script type='text/javascript' src='wp-content/themes/champion/assets/js/bootstrap.mindc93.js?ver=1418925116'></script>
      <link rel="stylesheet" href="css/global.css" />
	  <script src="js/sweet-alert.js"></script> 
      <link rel="stylesheet" type="text/css" href="css/sweet-alert.css"/>
      <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
      <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js"></script>
      <script src="js/datatables.js"></script>
      <link href="css/datatables.css" rel="stylesheet"/>
	  <script src="//cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>
	  <link rel="stylesheet" href="//cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css" />
	  <script>
	  <?php if($nteams==8) echo 'teamcount2();'; else echo 'teamcount();'; ?>
	  </script>
      <script>
        $(document).ready(function() {	
         
         
         for(var i=1;i<=22;i++) {
         var SID2='#show'+i;
         $(SID2).hide();
         }
         $('#myTable').DataTable(
         {
         "iDisplayLength": 22,
		  responsive: true
         });
         
         $(".fancybox").fancybox(); 
		 $('.fancybox').attr('disabled','disabled');
         $(".playerinfo").fancybox({
         
         fitToView	: false,
         width		: '40%',
         height		: '70%',
         autoSize	: false,
         closeClick	: false,
         openEffect	: 'none',
         closeEffect	: 'none',
         scrolling : 'auto'
         });
         s();
         
         });
        
      </script>
      
   </head>
   <body class="home page page-id-1725 page-template-default mmm mega_main_menu-2-0-2 ivan-vc-enabled  nav_bar_static wpb-js-composer js-comp-ver-4.3.4 vc_responsive">
   <?php include_once("analyticstracking.php") ?>
      <div id="wrapper">
         <header id="header" style="position:fixed;top:0;left:0;z-index:5000;">
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
                                    <a href="http://vesitcricketleague.in/play.php" class="item_link  disable_icon" tabindex="0">
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
				  <div class="title" style="background: #b81e1f;text-align:center;max-height:86px;">
                        <h2 class="inlineblock" style="color: #fff;margin: 0;text-transform: uppercase; font-size: 1.9vw;">
                           You have &nbsp;
                        </h2>
                        <h1  style="font-size:3.9vw;" class="inlineblock" id="rc"><?php echo number_format((float)$rc, 2, '.', ''); ?></h1>
                        <h2 class="inlineblock" style="color: #fff;margin: 0;text-transform: uppercase;font-size: 1.9vw;"> &nbsp; credits left & selected &nbsp;</h2>
                        <h1 style="font-size:3.9vw;" class="inlineblock" id="tc"><?php if($nteams==8) echo (22-$tc).'/22'; else echo (11-$tc).'/11'; ?></h1>
                        <h2 class="inlineblock" style="color: #fff;margin: 0;text-transform: uppercase;font-size: 1.9vw;"> &nbsp; players.</h2>
						<div class="inlineblock" style="width:48px;height:48px;" id="teamcomplete">
						<?php if($teamcomplete==1) echo '<img src="images/tc.png" style="margin-top:-25px;width:48px;height:48px;" />'; ?>
						</div>
                     </div>
               </header>

         <!--#header-->
         <div id="main">
            <div class="container">
               <article id="post-1725" class="post-1725 page type-page status-publish hentry">
                  <div class="entry-content">
                     
                     <div style="height:48px;margin-top:165px;width:48px;" class="inlineblock" id="loadingar"></div>
					 <h4 class="inlineblock" style="color: #000;margin: 0;text-transform: uppercase;">Deadline: 7:30 AM on the day of the upcoming matches.</h4>
                     <div class="vc_row wpb_row vc_row-fluid vc_custom_1417591654264">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                           <div class="wpb_wrapper">
                              <div class="vc_col-sm-6 wpb_column vc_column_container">
                                 <div class="wpb_wrapper">
                                    <div  class="vc_clearfix">
                                       <button class="btn btn-danger btn-lg inlineblock" id="c" onclick="c();">Clear Team</button>
                                       <h4 class="inlineblock" style="color: #000;margin: 0;text-transform: uppercase;">Teams in this Round - </h4>
                                       <?php 
                                          for($i=0;$i<$nteams;$i++) {
                                          echo '<h4 class="inlineblock" style="color: #b81e1f;margin: 0;text-transform: uppercase;">'.$teams[$i].'</h4>'.' ';
                                          }
                                          ?>		
										  
                                       <a style="margin-top:5px;" id="inline"  class="btn btn-danger btn-lg fancybox btn" href="#data">Choose Captain & Vice-Captain</a>
									   
                                       <div style="margin-top:5px;height:610px;overflow-y: scroll;overflow-x:scroll;max-width:100%;">
                                          <table id="myTable" >
                                             <thead>
                                                <tr>
                                                   <th>Skill</th>
                                                   <th>Name</th>
                                                   <th>Team</th>
                                                   <th>Points</th>
                                                   <th>Credits</th>
                                                   <th>Add</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                   $j=0;
                                                   for($i=0;$i<$nteams;$i++) {
                                                   $result=mysqli_query($con,"select * from players where team='$teams[$i]'");
                                                   while($row=mysqli_fetch_array($result)) { ?>
                                                <tr>
                                                   <td style="text-transform:uppercase;"><?php echo $row['skill']; ?></td>
                                                   <td><?php echo $row['name']; ?> &nbsp; <a href="playerstats.php?player_id=<?php echo 'n'.$row['player_id']; ?>" data-fancybox-type="iframe" class="playerinfo"><img src="images/info.png" class="info" /></a></td>
                                                   <td><?php echo $row['team']; ?></td>
                                                   <td><?php echo $row['points']; ?></td>
                                                   <td><?php echo number_format((float)$row['credits'], 2, '.', ''); ?></td>
                                                   <?php if($flag[$j]==0) { ?>
                                                   <td align="center"><button id="<?php echo $row['player_id']; ?>" onclick="<?php if($nteams==8) { 
                                                      echo 'add2('.$row['player_id'].','.'\''.$row['name'].'\''.');'; } else { 
                                                      echo 'add('.$row['player_id'].','.'\''.$row['name'].'\''.');'; } ?>">Add</button> </td>
                                                   <?php } else { ?>
                                                   <td align="center"><button id="<?php echo $row['player_id']; ?>" onclick="<?php if($nteams==8) { 
                                                      echo 'add2('.$row['player_id'].','.'\''.$row['name'].'\''.');'; } else { 
                                                      echo 'add('.$row['player_id'].','.'\''.$row['name'].'\''.');'; } ?>">Add</button></td>
                                                </tr>
                                                <script type="text/javascript">
                                                   <?php echo '$("#'.$row['player_id'].'").attr("disabled","disabled");'; ?>
                                                   <?php echo '$("#'.$row['player_id'].'").hide();'; ?>
                                                   <?php echo '$("#'.$row['player_id'].'").addClass("tick");'; ?>
                                                   <?php echo '$("#'.$row['player_id'].'").html(\'<img src="images/tick.png" />\');'; ?>
                                                   <?php echo '$("#'.$row['player_id'].'").show();'; ?>
                                                </script>
                                                <?php 
                                                   }
                                                   $j++;
                                                   }
                                                   }
                                                   ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="vc_col-sm-6 wpb_column vc_column_container">
                                 <div class="wpb_wrapper">
                                    <div  class="vc_clearfix">
									<br>
									<h4 style="color: #000;margin: 0;text-transform: uppercase;">Selected Players</h4>
									<div style="overflow-x:scroll;height:610px;">
									
                                       <br><br><br>
                                       <?php
                                          for($i=1;$i<=22;$i++) {
                                          echo '<div class="field" id="show'.$i.'">';
                                          echo '<p class="pntl" id="playername'.$i.'"></p>';
                                          echo '<p class="pstl" id="playerskill'.$i.'"></p>';
                                          echo '<p class="tntl" id="teamname'.$i.'"></p>';
                                          echo '<p class="cntl" id="creditsname'.$i.'"></p>';
                                          echo '<button class="btntl" id="btnlt'.$i.'" onclick="q();"></button>';
                                          echo '</div>';		
                                          }
                                          ?>
										</div>  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div style="display:none">
                        <div id="data">
                           <h3>Complete Your Team</h3>
                           <p>Choose them carefully as they may help you win a league!</p>
                           <br><br>
                           <h3>Select Captain</h3>
                           <p>Captain gets 3 times the points he scores
                           <p>
                              <select id="captain" >
                                 <option>Choose a Player</option>
                              </select>
                           <h3>Select Vice-Captain</h3>
                           <p>Vice-Captain gets 1.5 time the points he scores
                           <p>
                              <select id="vicecaptain" >
                                 <option>Choose a Player</option>
                              </select>
                           <div id="response"></div>
                           <button class="btn btn-danger btn-lg" id="submit" onclick="storeCaptain();">Submit</button>
                        </div>
                     </div>
                  </div>
                  <!-- .entry-content -->
               </article>
               <!-- #post-## -->
            </div>
            <!--.container-->
         </div>
         <!--#main-->
         <?php include "footerfantasy.php"; ?>
      </div>
      <!--#wrapper-->
      <style>.vc_customizer_1415700997553 .wpb_tabs_nav a{font-family:Oswald !important;font-weight:400 !important;color:#fff !important;font-size:17px !important;line-height:52px !important;text-transform:uppercase !important;}.vc_customizer_1415700997553 .wpb_tabs_nav a:hover,.vc_customizer_1415700997553  .wpb_tabs_nav li.ui-tabs-active a,.vc_customizer_1415700997553  .wpb_tabs_nav li.ui-tabs-active{color:#fff !important;}.vc_customizer_1415700997553 .wpb_tabs_nav li,.vc_customizer_1415700997553  .wpb_tabs_nav a{background-color:#242b31 !important;}.vc_customizer_1415700997553 .wpb_tabs_nav a:hover,.vc_customizer_1415700997553  .wpb_tabs_nav li.ui-tabs-active a{background-color:#b81e1f !important;}.vc_customizer_1415700997553 .wpb_tabs_nav li{margin-left:0px !important;margin-right:0px !important;}.vc_customizer_1415700997553 .wpb_tabs_nav a{padding-top:0px !important;padding-bottom:0px !important;padding-left:0px !important;padding-right:0px !important;}.vc_customizer_1415700997553 .wpb_tab{background-color:transparent !important;padding-top:0px !important;padding-bottom:0px !important;padding-left:0px !important;padding-right:0px !important;}.vc_customizer_1413006735774 .wpb_tabs_nav a{font-family:Oswald !important;font-weight:400 !important;color:#fff !important;font-size:15px !important;line-height:44px !important;text-transform:uppercase !important;}.vc_customizer_1413006735774 .wpb_tabs_nav a:hover,.vc_customizer_1413006735774  .wpb_tabs_nav li.ui-tabs-active a,.vc_customizer_1413006735774  .wpb_tabs_nav li.ui-tabs-active{color:#fff !important;}.vc_customizer_1413006735774 .wpb_tabs_nav li,.vc_customizer_1413006735774  .wpb_tabs_nav a{background-color:#495159 !important;}.vc_customizer_1413006735774 .wpb_tabs_nav a:hover,.vc_customizer_1413006735774  .wpb_tabs_nav li.ui-tabs-active a{background-color:#d61919 !important;}.vc_customizer_1413006735774 .wpb_tabs_nav{margin-top:0px !important;margin-bottom:35px !important;}.vc_customizer_1413006735774 .wpb_tabs_nav li{margin-left:3px !important;margin-right:0px !important;}.vc_customizer_1413006735774 .wpb_tabs_nav a{padding-top:0px !important;padding-bottom:0px !important;padding-left:33px !important;padding-right:33px !important;}.vc_customizer_1413006735774 .wpb_tab{background-color:transparent !important;padding-top:0px !important;padding-bottom:0px !important;padding-left:0px !important;padding-right:0px !important;}</style>
      <script type='text/javascript' src='wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min2a02.js?rev=4.6.3'></script>
      <script type='text/javascript' src='wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min2a02.js?rev=4.6.3'></script>
      <style scoped>
         .tp-caption.black,.black{color:#000;text-shadow:none}
      </style>
      <link rel='stylesheet' id='ts-extend-animations-css'  href='wp-content/plugins/ts-visual-composer-extend/css/ts-visual-composer-extend-animations.minf39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='ts-visual-composer-extend-front-css'  href='wp-content/plugins/ts-visual-composer-extend/css/ts-visual-composer-extend-front.minf39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='ts-font-ecommerce-css'  href='wp-content/plugins/ts-visual-composer-extend/css/ts-font-ecommercef39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='vc_google_fonts_oswald300regular700-css'  href='http://fonts.googleapis.com/css?family=Oswald%3A300%2Cregular%2C700&amp;subset=latin%2Cvietnamese%2Ccyrillic%2Clatin-ext%2Cgreek%2Ccyrillic-ext%2Cgreek-ext&amp;ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='ts-extend-nacho-css'  href='wp-content/plugins/ts-visual-composer-extend/css/jquery.vcsc.nchlightbox.minf39e.css?ver=4.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='ts-extend-simptip-css'  href='wp-content/plugins/ts-visual-composer-extend/css/jquery.vcsc.simptip.minf39e.css?ver=4.0.1' type='text/css' media='all' />
      <script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/jquery-waypoints/waypoints.min7035.js?ver=4.3.4'></script>
      <script type='text/javascript' src='wp-content/plugins/sportspress/assets/js/jquery.countdown.min4c56.js?ver=2.0.2'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var localized_strings = {"days":"days","hrs":"hrs","mins":"mins","secs":"secs","previous":"Previous","next":"Next"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='wp-content/plugins/sportspress/assets/js/sportspressdc93.js?ver=1418925116'></script>
      <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc8cb.js?ver=2.60'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","ajax_loader_url":"\/\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"};
         var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","ajax_loader_url":"\/\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7888.js?ver=2.2.8'></script>
      <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.mine7f0.js?ver=1.3.1'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
         var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7888.js?ver=2.2.8'></script>
      <script type='text/javascript' src='wp-content/themes/champion/assets/js/select2.mindc93.js?ver=1418925116'></script>
      
      <script type='text/javascript' src='wp-content/themes/champion/assets/js/jquery.nicescroll.mindc93.js?ver=1418925116'></script>
      <script type='text/javascript' src='wp-content/themes/champion/assets/js/customdc93.js?ver=1418925116'></script>
      <script type='text/javascript' src='wp-content/themes/champion/assets/js/owl.carousel.mindc93.js?ver=1418925116'></script>
      <script type='text/javascript' src='wp-content/plugins/mega_main_menu/src/js/frontend/menu_functionsf39e.js?ver=4.0.1'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var icl_vars = {"current_language":"en","icl_home":"http:\/index.html\/"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='wp-content/plugins/sitepress-multilingual-cms/res/js/sitepressf39e.js?ver=4.0.1'></script>
      <script type='text/javascript' src='wp-content/plugins/ts-visual-composer-extend/js/ts-visual-composer-extend-front.minf39e.js?ver=4.0.1'></script>
      <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/js_composer_front7035.js?ver=4.3.4'></script>
      <script type='text/javascript' src='wp-content/plugins/ts-visual-composer-extend/js/jquery.vcsc.newsticker.minf39e.js?ver=4.0.1'></script>
      <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.core.min2c18.js?ver=1.10.4'></script>
      <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.widget.min2c18.js?ver=1.10.4'></script>
      <script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.tabs.min2c18.js?ver=1.10.4'></script>
      <script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/jquery-ui-tabs-rotate/jquery-ui-tabs-rotate7035.js?ver=4.3.4'></script>
      <script type='text/javascript' src='wp-content/plugins/ts-visual-composer-extend/js/jquery.vcsc.hammer.minf39e.js?ver=4.0.1'></script>
      <script type='text/javascript' src='wp-content/plugins/ts-visual-composer-extend/js/jquery.vcsc.nchlightbox.minf39e.js?ver=4.0.1'></script>
      <script type='text/javascript' src='wp-content/plugins/ivan-visual-composer/assets/projects.minf39e.js?ver=4.0.1'></script>
   </body>
</html>
<?php
   }
   else
   {
   header("location: my-account/index.php");
   }
   ?>
