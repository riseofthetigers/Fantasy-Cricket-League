<?php
error_reporting(E_ERROR);
session_start();
include "dbconfig.php";
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
?>
<?php
   error_reporting(E_ERROR);
   session_start();
   ob_start();
   $user_id = trim($_SESSION["VALID_USER_ID"]);
   include "dbconfig.php";
   function team($abbr)
   {
      global $con;
      $result=mysqli_query($con,"SELECT * from teamnames Where abbr='$abbr'") OR die(mysqli_error());
      $row1=mysqli_fetch_array($result);
      return $row1['name'];
   }
   ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
   <![endif]-->
   <!--[if IE 8]>
   <html class="ie ie8" lang="en-US">
      <![endif]-->
      <!--[if IE 9]>
      <html class="ie ie9" lang="en-US">
         <![endif]-->
         <!--[if !(IE 7) | !(IE 8) | !(IE 9) ]><!-->
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
               <script type='text/javascript' src='wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
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
               <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
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
                  .scr{
                     width:80%;
                     margin-left: auto;
                     margin-right: auto;
                     display: block;
                  }
                  table.fraction { text-align: center; vertical-align: middle;margin-top:0.5em; margin-bottom:0.5em; line-height: 2em; }
               </style>
               <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1415599819144{margin-top: -95px !important;}.vc_custom_1417685753803{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1417783121670{padding-top: 60px !important;padding-bottom: 60px !important;}.vc_custom_1417589097135{padding-top: 72px !important;padding-bottom: 40px !important;}.vc_custom_1417591707165{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1417591654264{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1417591989292{padding-top: 90px !important;padding-bottom: 70px !important;}.vc_custom_1417610866818{padding-top: 70px !important;padding-bottom: 60px !important;}.vc_custom_1417593123378{margin-bottom: 0px !important;padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1417592943283{margin-bottom: -70px !important;padding-top: 50px !important;padding-bottom: 100px !important;}.vc_custom_1412851208864{margin-bottom: 30px !important;}.vc_custom_1412851221583{margin-bottom: 30px !important;}.vc_custom_1417598971948{margin-bottom: -40px !important;}.vc_custom_1417599760937{margin-top: 0px !important;margin-bottom: -40px !important;}.vc_custom_1417610560143{margin-bottom: -20px !important;}.vc_custom_1417604174205{margin-bottom: -40px !important;}</style>
            </head>
            <body class="home page page-id-1725 page-template-default mmm mega_main_menu-2-0-2 ivan-vc-enabled  nav_bar_static wpb-js-composer js-comp-ver-4.3.4 vc_responsive">
			<?php include_once("analyticstracking.php") ?>
               <div id="wrapper">
                  <?php include "headerfantasy.php"; ?>
                  <!--#header-->
                  <div id="main">
                  <div class="container"><ol class="breadcrumb"><li class=""><a href="index.php">Home</a></li><li class="active">How To Play</li></ol><div id="primary" class="content-area">
                   <div class="row">
                       <div class="col-sm-10">
                        <article id="post-2342" class="post-2342 sp_table type-sp_table status-publish hentry">

                           <h1 class="page-title">How To Play</h1>   <hr style="border-top: 1px solid #d61919">   
                           <div class="entry-content">
                              <h2 style="font-size: 20px;text-align: left;font-family:Oswald;font-weight:400;font-style:normal">SELECTING YOUR TEAM</h2>
                              <br/>
                              <p><span style="font-size: 16px; color: #252c33;">To select your team, login <a href="my-account/index.php">here</a>. If you don't have an account, you can register too.</span></p><br/>
                              <p><span style="font-size: 16px; color: #252c33;">You need to select a team every day when a match is scheduled.You have a budget of 135 credits (270 if four matches are scheduled) for the same. The team selected should be made of the below specified combinations(The values become twice the given if 4 matches are scheduled.</span></p><br/>
                              <div  class="vc_clearfix">
                                 <div class="vc_league_table sp-table-wrapper sp-scrollable-table-wrapper">
                                    <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="1">
                                       <thead>
                                          <tr>
                                             <th style="width:25%;" class="data-rank">Wicket-Keeper<br>(Min-Max)</th>
                                             <th style="width:25%;" class="data-rank">Batsman<br>(Min-Max)</th>
                                             <th style="width:25%;" class="data-l">All Rounder<br>(Min-Max)</th>
                                             <th style="width:25%;" class="data-l">Bowler<br>(Min-Max)</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="odd">
                                             <td style="width:25%;" class="data-rank">1</td>
                                             <td style="width:25%;" class="data-rank">3 - 5</td>
                                             <td style="width:25%;" class="data-rank">1 - 3</td>
                                             <td style="width:25%;" class="data-rank">3 - 5</td>
                                          </tr>
                                          
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <p><span style="font-size: 16px; color: #252c33;">So each team has 11 players (22 if 4 matches) of which one will be captain and one vice-captain</span></p><br/>
                              <h2 style="font-size: 20px;text-align: left;font-family:Oswald;font-weight:400;font-style:normal">How To Select</h2>
                              <p><span style="font-size: 16px; color: #252c33;">1.Click on play button on the navigation bar</span></p><br/>
                              <p><span style="font-size: 16px; color: #252c33;">2.Select the player you want to choose from the available players and then click "ADD". The player gets added to your team</span></p><br/>
                              <img class="scr" src="scrshot/1.png" /><br/><br/>
                              <p><span style="font-size: 16px; color: #252c33;">3.After Selecting your team, a dialog will appear for you to chose captain and vice-captain. Click on submit after done.</span></p><br/>
                              <img class="scr" src="scrshot/3.png" /><br/><br/>
                              <p><span style="font-size: 16px; color: #252c33;">4.You can view the players information in a dialog box that appears after clicking <img src="images/info.png" style="width:14px;height:14px;" />icon</span></p><br/>
                              <img class="scr" src="scrshot/2.png" /><br/><br/>
                              <h2 style="font-size: 20px;text-align: left;font-family:Oswald;font-weight:400;font-style:normal">Scoring System</h2>
                              <p><span style="font-size: 16px; color: #252c33;">The scores will be evaluated on the basis of the team submiited by you before deadline time. The deadline time of each day can be seen here</span></p><br/>
                              <div  class="vc_clearfix">
                                 <div class="sp-template sp-template-league-table">
                                 <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                    <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                       <thead>
                                          <tr style="height:40px">
                                             <th style="width:25%;" class="data-rank">Actual Time</th>
                                             <th style="width:25%;" class="data-rank">Team1</th>
                                             <th style="width:25%;" class="data-l">Team2</th>
                                             <th style="width:25%;" class="data-l">Deadline Time</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $query=mysqli_query($con,"SELECT * FROM fixtures where deadline_time<>0 order by deadline_time");
                                          while($row=mysqli_fetch_array($query)){ ?>
                                          <tr style="height:40px" class="odd">
                                             <td style="width:25%;" class="data-rank"><?php echo date("M d Y | H:i",$row["actual_time"]); ?></td>
                                             <td style="width:25%;" class="data-rank"><?php echo $row["team1"]; ?></td>
                                             <td style="width:25%;" class="data-l"><?php echo $row["team2"]; ?></td>
                                             <td style="width:25%;" class="data-l"><?php echo date("M d Y | H:i",$row["deadline_time"]); ?></td>
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div><br/>
                              </div>
                              </div>
                              <p><span style="font-size: 16px; color: #252c33;">Scores will be evaluated on basis of a player's performance in match <b>with respect to others</b></span></p><br/>
                              <p><span style="font-size: 16px; color: #252c33;">If a player bats in a match. His score will be evaluated as</span></p>
                              <table class="fraction" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          <i>score</i> =  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Str.Rate</i> * 5
                                      </td>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          +  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Runs Scored</i> * 5
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Max Str.Rate</i>
                                      </td>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Max Runs Scored</i>
                                      </td>
                                  </tr>
                              </table><br/>
                              <p><span style="font-size: 16px; color: #252c33;">If a player bowls in a match. His score will be evaluated as</span></p>
                              <table class="fraction" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          <i>score</i> =  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Min Economy</i> * 5
                                      </td>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          +  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Wkts Taken</i> * 5
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Economy</i>
                                      </td>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Max Wkts Taken</i>
                                      </td>
                                  </tr>
                              </table><br/>
                              <p><span style="font-size: 16px; color: #252c33;">So score awarded will be between 0 and 10 to all players who either bats or bowls.</b></span></p><br/>
                              <p><span style="font-size: 16px; color: #252c33;">If a player bats and bowls in a match. His score will be evaluated as</span></p>
                              <table class="fraction" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          <i>score</i> =  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Str.Rate</i> * 3.75
                                      </td>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          +  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Runs Scored</i> * 3.75
                                      </td>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          +  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Min Economy</i> * 3.75
                                      </td>
                                      <td style="border:0;" rowspan="2" nowrap="nowrap">
                                          +  
                                      </td>
                                      <td style="border:0;" nowrap="nowrap">
                                          <i>Wkts Taken</i> * 3.75
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Max Str.Rate</i>
                                      </td>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Max Runs Scored</i>
                                      </td>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Economy</i>
                                      </td>
                                      <td style="border-top:solid 1px black;border-bottom:0;border-left:0;border-right:0;" class="upper_line">
                                          <i>Max Wkts Taken</i>
                                      </td>
                                  </tr>
                              </table><br/>
                              <p><span style="font-size: 16px; color: #252c33;">So score awarded will be between 0 and 15 to all players who bats as well as bowls.</b></span></p><br/>
                              <h2 style="font-size: 20px;text-align: left;font-family:Oswald;font-weight:400;font-style:normal">Credits System</h2>
                              <p><span style="font-size: 16px; color: #252c33;">The credits form the most important part in forming ur team</b></span></p><br/>
                              <p><span style="font-size: 16px; color: #252c33;">The initial credits awarded are given on the basis of the performnace of the player in the auction.But will eventually change as season progresses.</b></span></p><br/>
                              <p><span style="font-size: 16px; color: #252c33;">The credits change on basis of a player's score in a match and will be dynamically adjusted after every match.So keep an eye on the same</b></span></p><br/>
                              <h2 style="font-size: 20px;text-align: left;font-family:Oswald;font-weight:400;font-style:normal">Prizes</h2>
                              <p><span style="font-size: 16px; color: #252c33;">A cash prize of Rs.1000 is at stake</b></span></p><br/>
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
               <script type='text/javascript' src='wp-content/plugins/sportspress/assets/js/jquery.dataTables.minde48.js?ver=1.9.4'></script>
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
               <script type='text/javascript' src='wp-content/themes/champion/assets/js/bootstrap.mindc93.js?ver=1418925116'></script>
               <script type='text/javascript' src='wp-content/themes/champion/assets/js/select2.mindc93.js?ver=1418925116'></script>
               <script type='text/javascript' src='wp-content/themes/champion/assets/js/jquery.fancybox.packdc93.js?ver=1418925116'></script>
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