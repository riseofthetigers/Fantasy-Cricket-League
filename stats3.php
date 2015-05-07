<?php
    error_reporting(E_ERROR);
    session_start();
    include "dbconfig.php";
    ob_start();
    $user_id = trim($_SESSION["VALID_USER_ID"]);
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
                    </style>
                    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1415599819144{margin-top: -95px !important;}.vc_custom_1417685753803{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1417783121670{padding-top: 60px !important;padding-bottom: 60px !important;}.vc_custom_1417589097135{padding-top: 72px !important;padding-bottom: 40px !important;}.vc_custom_1417591707165{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1417591654264{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1417591989292{padding-top: 90px !important;padding-bottom: 70px !important;}.vc_custom_1417610866818{padding-top: 70px !important;padding-bottom: 60px !important;}.vc_custom_1417593123378{margin-bottom: 0px !important;padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1417592943283{margin-bottom: -70px !important;padding-top: 50px !important;padding-bottom: 100px !important;}.vc_custom_1412851208864{margin-bottom: 30px !important;}.vc_custom_1412851221583{margin-bottom: 30px !important;}.vc_custom_1417598971948{margin-bottom: -40px !important;}.vc_custom_1417599760937{margin-top: 0px !important;margin-bottom: -40px !important;}.vc_custom_1417610560143{margin-bottom: -20px !important;}.vc_custom_1417604174205{margin-bottom: -40px !important;}</style>
                </head>
                <style type="text/css">
                    article .sp-data-table tbody td{font-size: 15px}
                </style>
                <body class="home page page-id-1725 page-template-default mmm mega_main_menu-2-0-2 ivan-vc-enabled  nav_bar_static wpb-js-composer js-comp-ver-4.3.4 vc_responsive">
                    <div id="wrapper">
                        <?php include "headerfantasy.php"; ?>
                        <!--#header-->
                        <div id="main">
                            <div class="container">
                                <ol class="breadcrumb">
                                    <li class=""><a href="index.php">Home</a></li>
                                    <li class="active">Statistics</li>
                                </ol>
                                <div id="primary" class="content-area">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <article id="post-2342" class="post-2342 sp_table type-sp_table status-publish hentry">
                                                <h1 class="page-title">League Statistics</h1>
                                                <hr style="border-top: 1px solid #d61919">
                                                <div class="entry-content">
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Standings</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-p">P</th>
                                                                        <th class="data-w">W</th>
                                                                        <th class="data-l">L</th>
                                                                        <th class="data-t">T</th>
                                                                        <th class="data-pts">Pts</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query1=mysqli_query($con,"SELECT * from teamnames Order by points desc, played asc,won desc,lost asc") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query1))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name has-logo"><span class="team-logo"><img width="128" height="128" src="wp-content/uploads/2014/10/ball.png" class="attachment-sportspress-fit-icon wp-post-image" alt="7" /></span>'.$row['name'].'</td><td class="data-p">'.$row['played'].'</td><td class="data-w">'.$row['won'].'</td><td class="data-l">'.$row['lost'].'</td><td class="data-t">'.$row['tie'].'</td><td class="data-pts">'.$row['points'].'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query1))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name has-logo"><span class="team-logo"><img width="128" height="128" src="wp-content/uploads/2014/10/ball.png" class="attachment-sportspress-fit-icon wp-post-image" alt="7" /></span>'.$row['name'].'</td><td class="data-p">'.$row['played'].'</td><td class="data-w">'.$row['won'].'</td><td class="data-l">'.$row['lost'].'</td><td class="data-t">'.$row['tie'].'</td><td class="data-pts">'.$row['points'].'</td></tr>';
                                                                               $i++;           
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Top 10 Batting Strike RAtes</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-innings">In</th>
                                                                        <th class="data-sr">S/R</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query2=mysqli_query($con,"SELECT * from players WHERE ballsfaced<>0 AND batinnings<>0 Order by runscored/ballsfaced desc") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query2))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row["name"].'</td><td class="data-name">'.$row["team"].'</td><td class="data-innings">'.$row['batinnings'].'</td><td class="data-sr">'.number_format((float)$row['runscored']/$row['ballsfaced']*100 , 2, '.', '').'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query2))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row["name"].'</td><td class="data-name">'.$row["team"].'</td><td class="data-innings">'.$row['batinnings'].'</td><td class="data-sr">'.number_format((float)$row['runscored']/$row['ballsfaced']*100 , 2, '.', '').'</td></tr>';
                                                                               $i++;
                                                                        
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Top 10 Bowling Economy Rates</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-innings">In</th>
                                                                        <th class="data-econ">Econ</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query3=mysqli_query($con,"SELECT * from players WHERE ballsbowled<>0 AND bwlinnings<>0 Order by runsconceded*6/ballsbowled") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query3))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-innings">'.$row['bwlinnings'].'</td><td class="data-econ">'.$row['runsconceded']*6/$row['ballsbowled'].'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query3))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-innings">'.$row['bwlinnings'].'</td><td class="data-econ">'.$row['runsconceded']*6/$row['ballsbowled'].'</td></tr>';
                                                                               $i++;
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Top 10 Batting Averages</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-innings">In</th>
                                                                        <th class="data-notout">NO</th>
                                                                        <th class="data-ave">Ave</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query4=mysqli_query($con,"SELECT * from players WHERE ballsfaced<>0 AND batinnings<>0") OR die(mysql_error());
                                                                        class bataverage
                                                                        {
                                                                           public $name;
                                                                           public $team;
                                                                           public $batinnings;
                                                                           public $notout;
                                                                           public $average;
                                                                        }
                                                                        $obj4 = array();
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query4))
                                                                        {
                                                                           $obj4[$i] = new bataverage();
                                                                           $obj4[$i]->name=$row["name"];
                                                                           $obj4[$i]->team=$row["team"];
                                                                           $obj4[$i]->batinnings=$row["batinnings"];
                                                                           $obj4[$i]->notout=$row["notout"];
                                                                           $div=$row["batinnings"] - $row["notout"];
                                                                           if($div == 0) $div=1;
                                                                           $obj4[$i]->average = $row["runscored"]/$div;
                                                                           $i++;
                                                                        }
                                                                        $j=$i;
                                                                        $i=1;
                                                                        while($i<$j)
                                                                        {
                                                                           $k=1;
                                                                           while($k<$j-1)
                                                                           {
                                                                              if($obj4[$k]->average < $obj4[$k+1]->average)
                                                                              {
                                                                                 list($obj4[$k], $obj4[$k+1])=array($obj4[$k+1] , $obj4[$k]);
                                                                              }
                                                                              $k++;
                                                                           }
                                                                           $i++;
                                                                        }
                                                                        $i=1;
                                                                        while($i<$j)
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$obj4[$i]->name.'</td><td class="data-name">'.$obj4[$i]->team.'</td><td class="data-innings">'.$obj4[$i]->batinnings.'</td><td class="data-notout">'.$obj4[$i]->notout.'</td><td class="data-ave">'.$obj4[$i]->average.'</td></tr>';
                                                                           $i++;
                                                                               if($i<$j)
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$obj4[$i]->name.'</td><td class="data-name">'.$obj4[$i]->team.'</td><td class="data-innings">'.$obj4[$i]->batinnings.'</td><td class="data-notout">'.$obj4[$i]->notout.'</td><td class="data-ave">'.$obj4[$i]->average.'</td></tr>';
                                                                               $i++;
                                                                        } 
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Top 10 Bowling Averages</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-innings">In</th>
                                                                        <th class="data-wickets">Wkts</th>
                                                                        <th class="data-ave">Ave</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query5=mysqli_query($con,"SELECT * from players WHERE ballsbowled>25 AND bwlinnings<>0 AND wickets<>0 Order by runsconceded/wickets") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query5))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-innings">'.$row['bwlinnings'].'</td><td class="data-wickets">'.$row['wickets'].'</td><td class="data-ave">'.$row['runsconceded']/$row['wickets'].'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query5))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-innings">'.$row['bwlinnings'].'</td><td class="data-wickets">'.$row['wickets'].'</td><td class="data-ave">'.$row['runsconceded']/$row['wickets'].'</td></tr>';
                                                                               $i++;
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Most Runs In A Single Match</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-innings">In</th>
                                                                        <th class="data-hs">Hs</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query6=mysqli_query($con,"SELECT * from players WHERE ballsfaced<>0 AND batinnings<>0 Order by highest desc") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query6))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-innings">'.$row['batinnings'].'</td><td class="data-hs">'.$row['highest'].'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query5))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-innings">'.$row['batinnings'].'</td><td class="data-hs">'.$row['highest'].'</td></tr>';
                                                                               $i++;
                                                                        
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Best Bowling Figures In A Match</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-innings">In</th>
                                                                        <th class="data-bbi">BBI</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query7=mysqli_query($con,"SELECT * from players WHERE ballsbowled<>0 AND bwlinnings<>0") OR die(mysql_error());
                                                                        class bwlfigures
                                                                        {
                                                                           public $name;
                                                                           public $team;
                                                                           public $bwlinnings;
                                                                           public $best;
                                                                           public $wkt;
                                                                           public $runs;
                                                                        }
                                                                        $obj7 = array();
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query7))
                                                                        {
                                                                           $obj7[$i] = new bwlfigures();
                                                                           $obj7[$i]->name=$row["name"];
                                                                           $obj7[$i]->team=$row["team"];
                                                                           $obj7[$i]->bwlinnings=$row["bwlinnings"];
                                                                           $obj7[$i]->best=$row["best"];
                                                                           $temp=explode('-',$obj7[$i]->best);
                                                                           $obj7[$i]->wkt=$temp[0];
                                                                           $obj7[$i]->runs=$temp[1];
                                                                           $i++;
                                                                        }
                                                                        $j=$i;
                                                                        $i=1;
                                                                        while($i<$j)
                                                                        {
                                                                           $k=1;
                                                                           while($k<$j-1)
                                                                           {
                                                                              if($obj7[$k]->runs > $obj7[$k+1]->runs)
                                                                              {
                                                                                 list($obj7[$k], $obj7[$k+1])=array($obj7[$k+1] , $obj7[$k]);
                                                                              }
                                                                              $k++;
                                                                           }
                                                                           $i++;
                                                                        }
                                                                        $i=1;
                                                                        while($i<$j)
                                                                        {
                                                                           $k=1;
                                                                           while($k<$j-1)
                                                                           {
                                                                              if($obj7[$k]->wkt < $obj7[$k+1]->wkt)
                                                                              {
                                                                                 list($obj7[$k], $obj7[$k+1])=array($obj7[$k+1] , $obj7[$k]);
                                                                              }
                                                                              $k++;
                                                                           }
                                                                           $i++;
                                                                        }
                                                                        $i=1;
                                                                        while($i<$j)
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$obj7[$i]->name.'</td><td class="data-name">'.$obj7[$i]->team.'</td><td class="data-innings">'.$obj7[$i]->bwlinnings.'</td><td class="data-bbi">'.$obj7[$i]->best.'</td></tr>';
                                                                           $i++;
                                                                               if($i<$j)
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$obj7[$i]->name.'</td><td class="data-name">'.$obj7[$i]->team.'</td><td class="data-innings">'.$obj7[$i]->bwlinnings.'</td><td class="data-bbi">'.$obj7[$i]->best.'</td></tr>';
                                                                               $i++;
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <hr style="border-top: 1px solid #d61919">
                                                    <h1 class="page-title">Fantasy Statistics</h1>
                                                    <hr style="border-top: 1px solid #d61919">
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Most Points (Top 60)</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">User</th>
                                                                        <th class="data-pts">Pts</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query8=mysqli_query($con,"SELECT * from users Order by points desc limit 60") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query8))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['user_id'].'</td><td class="data-pts">'.$row['points'].'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query8))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['user_id'].'</td><td class="data-pts">'.$row['points'].'</td></tr>';
                                                                               $i++;
                                                                               //if($i==31)
                                                                                 // break;
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="sp-template sp-template-league-table">
                                                        <h3 class="page-title">Average Points Scored By A Player</h3>
                                                        <div class="sp-table-wrapper sp-scrollable-table-wrapper">
                                                            <table class="sp-league-table sp-data-table sp-responsive-table sp-sortable-table sp-paginated-table" data-sp-rows="10">
                                                                <thead>
                                                                    <tr style="height:40px">
                                                                        <th class="data-rank">Pos</th>
                                                                        <th class="data-name">Player Name</th>
                                                                        <th class="data-name">Team</th>
                                                                        <th class="data-pts">Ave. Pts</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $query9=mysqli_query($con,"SELECT * from players WHERE matches<>0 Order by avgpoints desc") OR die(mysql_error());
                                                                        $i=1;
                                                                        while($row=mysqli_fetch_array($query9))
                                                                        {
                                                                           echo '<tr style="height:40px" class="odd"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-pts">'.$row['avgpoints'].'</td></tr>';
                                                                           $i++;
                                                                               if($row=mysqli_fetch_array($query9))
                                                                                  echo '<tr style="height:40px" class="even"><td class="data-rank">'.$i.'</td><td class="data-name">'.$row['name'].'</td><td class="data-name">'.$row['team'].'</td><td class="data-pts">'.$row['avgpoints'].'</td></tr>';
                                                                               $i++;
                                                                        }
                                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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