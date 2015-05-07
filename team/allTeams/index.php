<?php
	error_reporting(E_ERROR);
   session_start();
   ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
   include "../../dbconfig.php";
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

<!-- Mirrored from champion.stylemix.net/team/stream-sharks/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Dec 2014 18:02:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VCL</title>

<link rel="stylesheet" href="../../wp-content/plugins/sitepress-multilingual-cms/res/css/language-selector6639.css?v=3.1.6" type="text/css" media="all" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="../../xmlrpc.php">
	<link rel="alternate" type="application/rss+xml" title="FC Champion &raquo; Feed" href="../../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="FC Champion &raquo; Comments Feed" href="../../comments/feed/index.html" />
<link rel='stylesheet' id='mmm_cache.skin-css'  href='../../wp-content/plugins/mega_main_menu/src/css/cache.skin692c.css?ver=1418925202' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../../wp-content/plugins/revslider/rs-plugin/css/settings4698.css?ver=4.6.3' type='text/css' media='all' />
<style type='text/css'>
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<link rel='stylesheet' id='dashicons-css'  href='../../wp-includes/css/dashicons.minf39e.css?ver=4.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='sportspress-general-css'  href='../../wp-content/plugins/sportspress/assets/css/sportspress7ef2.css?ver=1.5' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-layout7888.css?ver=2.2.8' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen7888.css?ver=2.2.8' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce7888.css?ver=2.2.8' type='text/css' media='all' />
<link rel='stylesheet' id='theme-style-css'  href='../../wp-content/themes/champion/assets/css/styleebd9.css?ver=1418925172' type='text/css' media='all' />
<link rel='stylesheet' id='theme-mobile-style-css'  href='../../wp-content/themes/champion/assets/css/mobileebd9.css?ver=1418925172' type='text/css' media='all' />
<link rel='stylesheet' id='mm_icomoon-css'  href='../../wp-content/plugins/mega_main_menu/src/css/external/icomoon4c56.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='mm_font-awesome-css'  href='../../wp-content/plugins/mega_main_menu/src/css/external/font-awesome4c56.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_custom_css-css'  href='../../wp-content/uploads/js_composer/custom7035.css?ver=4.3.4' type='text/css' media='screen' />
<link rel='stylesheet' id='bfa-font-awesome-css'  href='../../../cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.minae82.css?ver=4.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='ivan_vc_modules-css'  href='../../wp-content/plugins/ivan-visual-composer/assets/modulesf39e.css?ver=4.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='../../wp-content/plugins/ivan-visual-composer/assets/libs/font-awesome-css/font-awesome.minbfce.css?ver=4.1.0' type='text/css' media='all' />
<link rel='stylesheet' id='elegant-icons-css'  href='../../wp-content/plugins/ivan-visual-composer/assets/libs/elegant-icons/elegant-icons5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='../../wp-content/plugins/ivan-visual-composer/assets/libs/magnific-popup/magnific-popup.mine2dc.css?ver=0.9.9' type='text/css' media='all' />
<style type="text/css"></style><script type='text/javascript' src='../../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/fix-ie-css-limit-standaloneebd9.js?ver=1418925172'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ivan_vc = {"isAdmin":"","container":"window"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/ivan-visual-composer/assets/modules.minf39e.js?ver=4.0.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" /> 
<link rel='next' title='Strong Rams' href='../kensington-kangaroos/index.html' />
<link rel='shortlink' href='../../index67c0.html?p=2196' />
		<script type="text/javascript">
			jQuery(document).ready(function() {
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				var ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content = "<h2>THIS IS SOME TITLE</h2><br/>";

					content += "Type:"+obj.type+"</br>";
					content += "ID:"+obj.id+"</br>";        
					content += "Aspect Ratio:"+obj.aspectratio+"</br>";  
					
					data = {};
					
					data.action = 'revslider_ajax_call_front';
					data.client_action = 'get_slider_html';
					data.token = '9f639741f4';
					data.type = obj.type;
					data.id = obj.id;
					data.aspectratio = obj.aspectratio;
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:"post",
						url:"http://champion.stylemix.net/wp-admin/admin-ajax.php",
						dataType: 'json',
						data:data,
						async:false,
						success: function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error: function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector+" .rev_slider").revkill();
				}

				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
				var extendessential = setInterval(function() {
					if (jQuery.fn.tpessential != undefined) {
						clearInterval(extendessential);
						if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined')
							jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});   
							// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
							// func: the Function Name which is Called once the Item with the Post Type has been clicked
							// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
							// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
					}
				},30);
			});
		</script>
		<meta name="generator" content="WPML ver:3.1.6 stt:1,4,3;0" />
<link rel="shortcut icon" type="image/x-icon" href="../../wp-content/themes/champion/favicon.ico" />
	<script type="text/javascript">
		var ajaxurl = '../../wp-admin/admin-ajax.html';
	</script>
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="http://champion.stylemix.net/wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen"><![endif]-->
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

<script type="text/javascript">
// Add Global Lightbox Settings for VC Extensions
var $TS_VCSC_Lightbox_Thumbs = "bottom";
var $TS_VCSC_Lightbox_Thumbsize = 50;
var $TS_VCSC_Lightbox_Animation = "random";
var $TS_VCSC_Lightbox_Captions = "data-title";
var $TS_VCSC_Lightbox_Closer = true;
var $TS_VCSC_Lightbox_Durations = 5000;
var $TS_VCSC_Lightbox_Share = true;
var $TS_VCSC_Lightbox_Social = "fb,tw,gp,pin";
var $TS_VCSC_Lightbox_NoTouch = false;
var $TS_VCSC_Lightbox_BGClose = true;
var $TS_VCSC_Lightbox_NoHashes = true;
var $TS_VCSC_Lightbox_Keyboard = true;
var $TS_VCSC_Lightbox_FullScreen = true;
var $TS_VCSC_Lightbox_Zoom = true;
var $TS_VCSC_Lightbox_FXSpeed = 300;
var $TS_VCSC_Lightbox_Scheme = "dark";
var $TS_VCSC_Lightbox_Backlight = "#ffffff";
var $TS_VCSC_Lightbox_UseColor = false;
var $TS_VCSC_Lightbox_Overlay = "#000000";
var $TS_VCSC_Lightbox_Noise = "";
// Add Global Translation Strings for VC Extensions
var $TS_VCSC_Countdown_DaysLabel = "Days";
var $TS_VCSC_Countdown_DayLabel = "Day";
var $TS_VCSC_Countdown_HoursLabel = "Hours";
var $TS_VCSC_Countdown_HourLabel = "Hour";
var $TS_VCSC_Countdown_MinutesLabel = "Minutes";
var $TS_VCSC_Countdown_MinuteLabel = "Minute";
var $TS_VCSC_Countdown_SecondsLabel = "Seconds";
var $TS_VCSC_Countdown_SecondLabel = "Second";
var $TS_VCSC_GoogleMap_TextCalcShow = "Show Address Input";
var $TS_VCSC_GoogleMap_TextCalcHide = "Hide Address Input";
var $TS_VCSC_GoogleMap_TextDirectionShow = "Show Directions";
var $TS_VCSC_GoogleMap_TextDirectionHide = "Hide Directions";
var $TS_VCSC_GoogleMap_TextResetMap = "Reset Map";
var $TS_VCSC_GoogleMap_PrintRouteText = "Print Route";
var $TS_VCSC_GoogleMap_TextDistance = "Total Distance:";
var $TS_VCSC_GoogleMap_TextViewOnGoogle = "View on Google";
var $TS_VCSC_GoogleMap_TextButtonCalc = "Show Route";
var $TS_VCSC_GoogleMap_TextSetTarget = "Please enter your Start Address:";
var $TS_VCSC_GoogleMap_TextGeoLocation = "<br /><b>Notice</b>:  Undefined index: TextGeoLocation in <b>/home/champion/public_html/wp-content/plugins/ts-visual-composer-extend/assets/ts_vcsc_settings_language.php</b> on line <b>200</b><br />";
var $TS_VCSC_GoogleMap_TextTravelMode = "Travel Mode";
var $TS_VCSC_GoogleMap_TextDriving = "Driving";
var $TS_VCSC_GoogleMap_TextWalking = "Walking";
var $TS_VCSC_GoogleMap_TextBicy = "Bicycling";
var $TS_VCSC_GoogleMap_TextWP = "Optimize Waypoints";
var $TS_VCSC_GoogleMap_TextButtonAdd = "Add Stop on the Way";
var $TS_VCSC_GoogleMap_TextMapHome = "Home";
var $TS_VCSC_GoogleMap_TextMapBikes = "Bicycle Trails";
var $TS_VCSC_GoogleMap_TextMapTraffic = "Traffic";
var $TS_VCSC_GoogleMap_TextMapSpeedMiles = "Miles Per Hour";
var $TS_VCSC_GoogleMap_TextMapSpeedKM = "Kilometers Per Hour";
var $TS_VCSC_GoogleMap_TextMapNoData = "No Data Available!";
var $TS_VCSC_GoogleMap_TextMapMiles = "Miles";
var $TS_VCSC_GoogleMap_TextMapKilometes = "Kilometers";
var $TS_VCSC_GoogleMap_TextActivate = "<br /><b>Notice</b>:  Undefined index: TextMapActivate in <b>/home/champion/public_html/wp-content/plugins/ts-visual-composer-extend/assets/ts_vcsc_settings_language.php</b> on line <b>155</b><br />";
var $TS_VCSC_GoogleMap_TextDeactivate = "<br /><b>Notice</b>:  Undefined index: TextMapDeactivate in <b>/home/champion/public_html/wp-content/plugins/ts-visual-composer-extend/assets/ts_vcsc_settings_language.php</b> on line <b>159</b><br />";
// Add Global SmoothScroll Settings for VC Extensions
var $TS_VCSC_SmoothScrollActive = false;
var $TS_VCSC_SmoothScrollSpeed = 1500;
</script>
</head>

<body class="single single-sp_team postid-2196 mmm mega_main_menu-2-0-2 ivan-vc-enabled sportspress sportspress-page  nav_bar_static wpb-js-composer js-comp-ver-4.3.4 vc_responsive">
<?php include_once("analyticstracking.php") ?>

<div id="wrapper">
	<?php include "../../header.php"; ?>
	<!--#header-->
	<div id="main">
		<div class="container"><div id="primary" class="content-area">
    <div class="row">
        <div class="col-x-12 col-sm-9 col-md-9 col-lg-9">
	<article id="post-2196" class="post-2196 sp_team type-sp_team status-publish has-post-thumbnail hentry">

				<div class="entry-content">
			<ul class="nav nav-tabs" role="tablist">
		<?php 
		$result=mysqli_query($con,"select * from teamnames");
		while($row=mysqli_fetch_array($result)) {
		$teams[]=$row['abbr'];
		$teamNames[]=$row['name'];
		}
		?>
		<?php for($i=0;$i<count($teams);$i++) { ?>
        <li <?php if($i==0) { echo 'class="active"'; } ?> ><a href="<?php echo '#'.$teams[$i]; ?>" role="tab" data-toggle="tab"><?php echo $teamNames[$i]; ?></a></li>
		<?php } ?>
    
        
    </ul>
<div class="tab-content">
<?php 
for($i=0;$i<count($teams);$i++) {

?>
    <div class="<?php if($i==0) { echo 'tab-pane fade in active'; } else { echo 'tab-pane fade in'; } ?>" id="<?php echo $teams[$i]; ?>">
    <div class="sp-template sp-template-player-gallery">
	<div id='sp-player-gallery-2268' class='gallery galleryid-2268 gallery-columns-3 gallery-size-thumbnail'>	<h2 class="player-group-name player-gallery-group-name">All-Rounder</h2><ul class="player_gallery clearfix">
<?php $result=mysqli_query($con,"select * from players where team='$teams[$i]' and skill='ar'");	
while($row=mysqli_fetch_array($result))
{
?>
<li>
    <div class="player_image">
        
            <img style="width:267px;height:267px;" src="<?php echo '../../'.$row['photo']; ?>" class="attachment-player_photo wp-post-image" alt="2(3)" />      
        
    </div>
    <h4><?php echo $row['name']; ?></a></h4>
    <div class="player_info clearfix">
        <div class="number"><i class="t-shirt"></i><?php echo $row['player_id']; ?></div>
        <div class="position">All-Rounder</div>
    </div>
</li>
<?php } ?>
</ul><h2 class="player-group-name player-gallery-group-name">Batsman</h2><ul class="player_gallery clearfix">
<?php $result=mysqli_query($con,"select * from players where team='$teams[$i]' and skill='batsman'");	
while($row=mysqli_fetch_array($result))
{
?>
<li>
    <div class="player_image">
        
            <img style="width:267px;height:267px;" src="<?php echo '../../'.$row['photo']; ?>" class="attachment-player_photo wp-post-image" alt="2(3)" />      
        
    </div>
    <h4><?php echo $row['name']; ?></a></h4>
    <div class="player_info clearfix">
        <div class="number"><i class="t-shirt"></i><?php echo $row['player_id']; ?></div>
        <div class="position">Batsman</div>
    </div>
</li>
<?php } ?>

</ul><h2 class="player-group-name player-gallery-group-name">Wicket-Keeper</h2><ul class="player_gallery clearfix">
<?php $result=mysqli_query($con,"select * from players where team='$teams[$i]' and skill='wk'");	
while($row=mysqli_fetch_array($result))
{
?>
<li>
    <div class="player_image">
        
            <img style="width:267px;height:267px;" src="<?php echo '../../'.$row['photo']; ?>" class="attachment-player_photo wp-post-image" alt="2(3)" />      
        
    </div>
    <h4><?php echo $row['name']; ?></a></h4>
    <div class="player_info clearfix">
        <div class="number"><i class="t-shirt"></i><?php echo $row['player_id']; ?></div>
        <div class="position">Wicket-Keeper</div>
    </div>
</li>
<?php } ?>
</ul>
<h2 class="player-group-name player-gallery-group-name">Bowler</h2><ul class="player_gallery clearfix">
<?php $result=mysqli_query($con,"select * from players where team='$teams[$i]' and skill='bowler'");	
while($row=mysqli_fetch_array($result))
{
?>
<li>
    <div class="player_image">
        
            <img style="width:267px;height:267px;" src="<?php echo '../../'.$row['photo']; ?>" class="attachment-player_photo wp-post-image" alt="2(3)" />     
        
    </div>
    <h4><?php echo $row['name']; ?></a></h4>
    <div class="player_info clearfix">
        <div class="number"><i class="t-shirt"></i><?php echo $row['player_id']; ?></div>
        <div class="position">Bowler</div>
    </div>
</li>
<?php } ?>
</ul>
</div>
</div>    </div>
<?php } ?>
    
</div>    </div>
</div>
<div class="sp-post-content"></div>		</div>
        
	</article>
	<!-- #post-## -->
</div>        <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 ">

	
		

	
</div>    </div>
</div>

</div> <!--.container-->
</div> <!--#main-->
<?php include "../../footer.php"; ?>
<style></style>			<script type='text/javascript' src='../../wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min2a02.js?rev=4.6.3'></script>
			<script type='text/javascript' src='../../wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min2a02.js?rev=4.6.3'></script>
			<script type='text/javascript' src='../../wp-content/plugins/sportspress/assets/js/jquery.dataTables.minde48.js?ver=1.9.4'></script>
<script type='text/javascript' src='../../wp-content/plugins/sportspress/assets/js/jquery.countdown.min4c56.js?ver=2.0.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var localized_strings = {"days":"days","hrs":"hrs","mins":"mins","secs":"secs","previous":"Previous","next":"Next"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/sportspress/assets/js/sportspressebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc8cb.js?ver=2.60'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","ajax_loader_url":"\/\/champion.stylemix.net\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"};
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","ajax_loader_url":"\/\/champion.stylemix.net\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7888.js?ver=2.2.8'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.mine7f0.js?ver=1.3.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7888.js?ver=2.2.8'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/bootstrap.minebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/select2.minebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/jquery.fancybox.packebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/jquery.nicescroll.minebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/customebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/themes/champion/assets/js/owl.carousel.minebd9.js?ver=1418925172'></script>
<script type='text/javascript' src='../../wp-content/plugins/mega_main_menu/src/js/frontend/menu_functionsf39e.js?ver=4.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var icl_vars = {"current_language":"en","icl_home":"http:\/\/champion.stylemix.net\/"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/sitepress-multilingual-cms/res/js/sitepressf39e.js?ver=4.0.1'></script>
</body>

<!-- Mirrored from champion.stylemix.net/team/stream-sharks/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Dec 2014 18:02:13 GMT -->
</html>