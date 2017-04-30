<?php require_once('../../Connections/lets_go_to_beach.php'); ?>

<?php 

$uv_risk_reco_arr['No risk']="Almost low danger from the sun's UV rays for the average person.<br/> Wear sunglasses on bright days.";
$uv_risk_reco_arr['Low']='Wear sunglasses on bright days.<br/>
If you burn easily, cover up and use broad spectrum SPF 30+ sunscreen.<br/>
Watch out for bright surfaces, like sand, water and snow, which reflect UV and increase exposure.';
$uv_risk_reco_arr['Medium']='Moderate risk of harm from unprotected sun exposure.<br/>
Stay in shade near midday when the sun is strongest.<br/>
If outdoors, wear protective clothing, a wide-brimmed hat, and UV-blocking sunglasses.<br/>
Generously apply broad spectrum SPF 30+ sunscreen every 2 hours, even on cloudy days, and after swimming or sweating.<br/> 
Watch out for bright surfaces, like sand, water and snow, which reflect UV and increase exposure.';
$uv_risk_reco_arr['High']='Extreme risk of harm from unprotected sun exposure.<br/> Take all precautions because unprotected skin and eyes can burn in minutes.<br/> Try to avoid sun exposure between 10 a.m. and 4 p.m.
If outdoors, seek shade and wear protective clothing, a wide-brimmed hat, and UV-blocking sunglasses.<br/>
Generously apply broad spectrum SPF 30+ sunscreen every 2 hours, even on cloudy days, and after swimming or sweating.<br/>
Watch out for bright surfaces, like sand, water and snow, which reflect UV and increase exposure.';
?>



<?php $lng=$_REQUEST['lng'];
$lat=$_REQUEST['lat'];
$gender=$_REQUEST['gender'];
$last_exposure_sun=$_REQUEST['last_exposure_sun'];
$skin_color_check=$_REQUEST['skin_color_check'];
$url_var="?lng=$lng&lat=$lat&gender=$gender&last_exposure_sun=$last_exposure_sun&skin_color_check=$skin_color_check"
?>

<?php 
$url_main_page="http://localhost:51791/ash_db/beach_html_style/infraviolet.php";
?>


<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<script>jQuery(function ($) {
    'use strict';
    if ($.fn.themeSlider) {
        $(".art-slidecontainerfood043").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            inner.children().filter("script").remove();
            var helper = null;
            
            if ($.support.themeTransition) {
                helper = new BackgroundHelper();
                helper.init("fade", "next", $(".art-slide-item", inner).first().css($.support.themeTransition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

                
            } else if (browser.ie && browser.version <= 8) {
                var slidesInfo = {
".art-slidefood0430": {
    "bgimage" : "url('images/slidefood0430.jpg')",
    "bgposition": "0 0",
    "images": "",
    "positions": ""
},
".art-slidefood0431": {
    "bgimage" : "url('images/slidefood0431.jpg')",
    "bgposition": "0 0",
    "images": "",
    "positions": ""
}
                };
                $.each(slidesInfo, function(selector, info) {
                    processElementMultiplyBg(slideContainer.find(selector), info);
                });
            }

            inner.children().eq(0).addClass("active");
            slideContainer.themeSlider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorfood043"),
                helper: helper
            });
            
                        
        });
    }
});
jQuery(function ($) {
    'use strict';
    if ($.fn.themeSlider) {
        $(".art-slidecontainerfood064").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            inner.children().filter("script").remove();
            var helper = null;
            
            if ($.support.themeTransition) {
                helper = new BackgroundHelper();
                helper.init("fade", "next", $(".art-slide-item", inner).first().css($.support.themeTransition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

                
            } else if (browser.ie && browser.version <= 8) {
                var slidesInfo = {
".art-slidefood0640": {
    "bgimage" : "url('images/slidefood0640.jpg')",
    "bgposition": "0 0",
    "images": "",
    "positions": ""
},
".art-slidefood0641": {
    "bgimage" : "url('images/slidefood0641.jpg')",
    "bgposition": "0 0",
    "images": "",
    "positions": ""
}
                };
                $.each(slidesInfo, function(selector, info) {
                    processElementMultiplyBg(slideContainer.find(selector), info);
                });
            }

            inner.children().eq(0).addClass("active");
            slideContainer.themeSlider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigatorfood064"),
                helper: helper
            });
            
                        
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-2 { color: #737373; background: #2F89B6; padding: 0px;  }
.art-content .art-postcontent-0 .layout-item-3 { color: #737373; background: #A04661; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-4 { color: #737373; background: #5B9121; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-5 { color: #737373; background: #EB9500; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-6 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-7 { background: ; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-8 { margin-top: 0px;margin-right: 10px;margin-bottom: 20px;margin-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-9 {  border-collapse: separate;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainerfood043 {
    position: relative;
        width: 187px;
    height: 187px;
        }

.default-responsive .art-header .art-slidecontainerfood043,
.responsive .art-header .art-slidecontainerfood043
{
  position: absolute !important;
}

.responsive .art-pageslider .art-slidecontainerfood043 {
  position: absolute !important;
}

.art-slidecontainerfood043 .art-slide-item
{

    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    transform: rotate(0);
}



.art-slidecontainerfood043 .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute !important;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainerfood043 .active, .art-slidecontainerfood043 .next, .art-slidecontainerfood043 .prev {
    display: block;
}

.art-slidecontainerfood043 .active {
    opacity: 1;
}

.art-slidecontainerfood043 .next, .art-slidecontainerfood043 .prev {
    width: 100%;
}

.art-slidecontainerfood043 .next.forward, .art-slidecontainerfood043 .prev.back {
    opacity: 1;
}

.art-slidecontainerfood043 .active.forward {
    opacity: 0;
}

.art-slidecontainerfood043 .active.back {
    opacity: 0;
}


.art-slidefood0430 {
    background-image:  url('images/slidefood0430.jpg');
        /* background-size:  auto auto; */
        background-position:  center center;
    background-repeat: no-repeat;
}

/* special setup for header/pageslider */
.responsive .art-header .art-slidefood0430 {
    background-image:  url('images/slidefood0430.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.responsive .art-pageslider .art-slidefood0430 {
    background-image:  url('images/slidefood0430.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.default-responsive .art-header .art-slidefood0430 {
    background-image: url('images/slidefood0430.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}

.default-responsive .art-pageslider .art-slidefood0430 {
    background-image: url('images/slidefood0430.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}.art-slidefood0431 {
    background-image:  url('images/slidefood0431.jpg');
        /* background-size:  auto auto; */
        background-position:  center center;
    background-repeat: no-repeat;
}

/* special setup for header/pageslider */
.responsive .art-header .art-slidefood0431 {
    background-image:  url('images/slidefood0431.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.responsive .art-pageslider .art-slidefood0431 {
    background-image:  url('images/slidefood0431.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.default-responsive .art-header .art-slidefood0431 {
    background-image: url('images/slidefood0431.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}

.default-responsive .art-pageslider .art-slidefood0431 {
    background-image: url('images/slidefood0431.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}

.art-slidenavigatorfood043 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 163px;
  left: 76.47%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigatorfood043
{
background: #AB9698;background: -webkit-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: -o-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: linear-gradient(to bottom, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigatorfood043 > a
{
background: #634F51;background: #634F51;background: #634F51;background: #634F51;background: #634F51;-svg-background: #634F51;background: #634F51;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorfood043 > a.active
{
background: #E93F75;background: #E93F75;background: #E93F75;background: #E93F75;background: #E93F75;-svg-background: #E93F75;background: #E93F75;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorfood043 > a:hover
{
background: #A0133F;background: #A0133F;background: #A0133F;background: #A0133F;background: #A0133F;-svg-background: #A0133F;background: #A0133F;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

.art-slidecontainerfood064 {
    position: relative;
        width: 187px;
    height: 187px;
        }

.default-responsive .art-header .art-slidecontainerfood064,
.responsive .art-header .art-slidecontainerfood064
{
  position: absolute !important;
}

.responsive .art-pageslider .art-slidecontainerfood064 {
  position: absolute !important;
}

.art-slidecontainerfood064 .art-slide-item
{

    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    transform: rotate(0);
}



.art-slidecontainerfood064 .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute !important;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainerfood064 .active, .art-slidecontainerfood064 .next, .art-slidecontainerfood064 .prev {
    display: block;
}

.art-slidecontainerfood064 .active {
    opacity: 1;
}

.art-slidecontainerfood064 .next, .art-slidecontainerfood064 .prev {
    width: 100%;
}

.art-slidecontainerfood064 .next.forward, .art-slidecontainerfood064 .prev.back {
    opacity: 1;
}

.art-slidecontainerfood064 .active.forward {
    opacity: 0;
}

.art-slidecontainerfood064 .active.back {
    opacity: 0;
}


.art-slidefood0640 {
    background-image:  url('images/slidefood0640.jpg');
        /* background-size:  auto auto; */
        background-position:  center center;
    background-repeat: no-repeat;
}

/* special setup for header/pageslider */
.responsive .art-header .art-slidefood0640 {
    background-image:  url('images/slidefood0640.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.responsive .art-pageslider .art-slidefood0640 {
    background-image:  url('images/slidefood0640.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.default-responsive .art-header .art-slidefood0640 {
    background-image: url('images/slidefood0640.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}

.default-responsive .art-pageslider .art-slidefood0640 {
    background-image: url('images/slidefood0640.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}.art-slidefood0641 {
    background-image:  url('images/slidefood0641.jpg');
        /* background-size:  auto auto; */
        background-position:  center center;
    background-repeat: no-repeat;
}

/* special setup for header/pageslider */
.responsive .art-header .art-slidefood0641 {
    background-image:  url('images/slidefood0641.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.responsive .art-pageslider .art-slidefood0641 {
    background-image:  url('images/slidefood0641.jpg');
    background-size: auto auto;
    background-position:  center center;
    background-repeat: no-repeat;
}

.default-responsive .art-header .art-slidefood0641 {
    background-image: url('images/slidefood0641.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}

.default-responsive .art-pageslider .art-slidefood0641 {
    background-image: url('images/slidefood0641.jpg');
    background-size: auto auto;
    background-position: center center;
    background-repeat: no-repeat;
}

.art-slidenavigatorfood064 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 163px;
  left: 76.47%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigatorfood064
{
background: #AB9698;background: -webkit-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: -o-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;background: linear-gradient(to bottom, rgba(205, 193, 194, 0.6) 0, rgba(142, 113, 115, 0.6) 90%, rgba(133, 107, 108, 0.6) 100%) no-repeat;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigatorfood064 > a
{
background: #634F51;background: #634F51;background: #634F51;background: #634F51;background: #634F51;-svg-background: #634F51;background: #634F51;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorfood064 > a.active
{
background: #E93F75;background: #E93F75;background: #E93F75;background: #E93F75;background: #E93F75;-svg-background: #E93F75;background: #E93F75;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatorfood064 > a:hover
{
background: #A0133F;background: #A0133F;background: #A0133F;background: #A0133F;background: #A0133F;-svg-background: #A0133F;background: #A0133F;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style></head>
<body>
<div id="art-main">
<nav class="art-nav">
    <ul class="art-hmenu"><?php include 'html_content_page/upper_links.php';?></ul> 
    </nav>
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object1004968578"></div>

            </div>

<h1 class="art-headline">
    <a href="http://localhost:51791/ash_db/beach_html_style/infraviolet.php<?php echo $url_var;?>">Smart Beach</a>
</h1>
<h2 class="art-slogan">Let's go to the Beach</h2>





                        
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 25%" >
        <p style="text-align: center;"></p><a href="http://localhost:51791/ash_db/beach_html_style/services/can-you-swim-with-me.php<?php echo $url_var?>"><div id="food064" style="position: relative; display: inline-block; z-index: 0; margin-top: 5px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px;  border-width: 0px;  " class="art-collage">
<div class="art-slider art-slidecontainerfood064" data-width="187" data-height="187">
    <div class="art-slider-inner">
<div class="art-slide-item art-slidefood0640" >


</div>
<div class="art-slide-item art-slidefood0641" >


</div>

    </div>
</div>
<div class="art-slidenavigator art-slidenavigatorfood064" data-left="1" data-top="1">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>
 


    </div></a>
<p style="text-align: center;"></p>
        <a href="services/can-you-swim-with-me.php<?php echo $url_var;?>"  class=""><h4>Can You Swim with me?</h4></a>
    </div><a href="http://localhost:51791/ash_db/beach_html_style/services/can-you-swim-with-me.php<?php echo $url_var?>"><div class="art-layout-cell layout-item-3" style="width: 25%" >
        <p style="text-align: center;"></p><div id="food043" style="position: relative; display: inline-block; z-index: 0; margin-top: 5px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px;  border-width: 0px;  " class="art-collage">
       
        
<div class="art-slider art-slidecontainerfood043" data-width="187" data-height="187">
    <div class="art-slider-inner">
<div class="art-slide-item art-slidefood0430" >


</div>
<div class="art-slide-item art-slidefood0431" >


</div>

    </div>
</div>
<div class="art-slidenavigator art-slidenavigatorfood043" data-left="1" data-top="1">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>



    </div>
    


        <p style="text-align: center;">
        </p><a href="services/big-fishes-go-back.php<?php echo $url_var;?>" class=""><h4>Big Fishes .. go back!</h4></a>
    </div><div class="art-layout-cell layout-item-4" style="width: 25%" >
        <p style="text-align: center;"><img width="187" height="187" alt="" src="images/food08-3.jpg" style="margin-top: 5px; margin-bottom: 5px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;" class=""></p>
        <a href="services/dont-ruin-my-beach.php<?php echo $url_var;?>" class=""><h4>Don't Ruin my Beach</h4></a>
    </div><div class="art-layout-cell layout-item-5" style="width: 25%" >
        <p style="text-align: center;"><img width="187" height="187" alt="" src="images/food07-3.jpg" style="margin-top: 5px; margin-bottom: 5px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;" class=""></p>
       <a id="back-to-school" href="services/back-to-school.php<?php echo $url_var;?>" class=""><h4>Back to School</h4></a>
    </div>
    
    
    
    </div>
</div>
</div>






<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-7" style="width: 25%" >
    
    <style>
    .bold_weath{
		
		font-size:12px;
		color:#03F;}
    </style>
    
<?php 
$url_weather_get="http://api.wunderground.com/api/f1d7c3f73327490e/geolookup/q/".$_REQUEST['lat'].",".$_REQUEST['lng'].".json";

$json = file_get_contents($url_weather_get);
$obj = json_decode($json);
//echo $obj->access_token;
echo '<a href="';
print_r($obj->{'location'}->{'wuiurl'});
echo '">Current Weather Situation</a>';
//print_r($obj);
echo ' <img src="'.$obj->{"current_observation"}->{"icon_url"}.'"></img>';
?>

<?php /* 
$requested_url_fullweather=$obj->{'location'}->{'requesturl'};
$requested_url_fullweather="http://api.wunderground.com/api/f1d7c3f73327490e/conditions/q/".$requested_url_fullweather;

$requested_url_fullweather=substr($requested_url_fullweather,0,-5).".json";
$json = file_get_contents($requested_url_fullweather);
$obj = json_decode($json);
//echo $obj->access_token;
echo $requested_url_fullweather;
echo "UV Index: ";
print_r($obj->{"response"}->{"current_observation"}->{"estimated"}->{"UV"});
*/
?>


<?php 
$requested_url_fullweather=$obj->{'location'}->{"zip"};
$requested_url_fullweather="http://api.wunderground.com/api/f1d7c3f73327490e/conditions/q/".$_REQUEST['lat'].','.$_REQUEST['lng'].'.json';


$json = file_get_contents($requested_url_fullweather);
$obj = json_decode($json);
//echo $obj->access_token;
//echo $requested_url_fullweather;
echo '<hr><span class="bold_weath">Weather Data For:</span> '.$obj->{"current_observation"}->{"local_time_rfc822"}.'<hr>';

echo '<span class="bold_weath">Temp.:</span> '.$obj->{"current_observation"}->{"temp_c"}.'<sup>o</sup>C<hr>';

echo '<span class="bold_weath">Relative Humidity:</span> '.$obj->{"current_observation"}->{"relative_humidity"}.'<hr>';

echo '<span class="bold_weath">You Feels Like:</span> '.$obj->{"current_observation"}->{"feelslike_c"}.'<sup>0</sup>C<hr>';


echo '<span class="bold_weath">Wind Speed:</span> '.$obj->{"current_observation"}->{"wind_kph"}.' Kph<hr>';

echo '<span class="bold_weath">Wind Direction:</span> '.$obj->{"current_observation"}->{"wind_dir"}.'<hr>';


echo '<span class="bold_weath">Pressure :</span> '.$obj->{"current_observation"}->{"pressure_mb"}.' mb<hr>';


echo '<span class="bold_weath">"Dewpoint Temp.:</span> '.$obj->{"current_observation"}->{"dewpoint_c"}.' <sup>0</sup>c<hr>';

echo '<span class="bold_weath">Total Weather Status.:</span> '.$obj->{"current_observation"}->{"weather"}.'
<hr>';

echo '<br/><span class="bold_weath">UV Index: </span>';
$uv_index=$obj->{"current_observation"}->{"UV"};
if($uv_index<0||$uv_index==NULL){$uv_index=0;}
echo $uv_index;

?>    
 

    
      <p>&nbsp;</p>
      <p></p>
    </div>
    
 <div class="art-layout-cell layout-item-6" style="width: 25%" >
        <p style="text-align: justify;">   
      <?php $arr_gender['M']='Male';
	  $arr_gender['F']='Female';
	  ?>
      <h3>Due to Your Choices as:</h3>
      
      
    <span class="bold_weath">You Are : </span><?php echo str_replace("_"," ",$arr_gender[$_REQUEST['gender']]).'    <br/> '; ?>    
      
      
      
      <span class="bold_weath">Skin Color: </span><?php echo str_replace("_"," ",$_REQUEST['skin_color_check']).'    <br/> '; ?>
      
<span class="bold_weath">Last Exposure Date to Sun/Sea: </span><?php echo str_replace("_"," ",$_REQUEST['last_exposure_sun']).'<br/>'; ?>   

 <span class="bold_weath">Age : </span><?php echo str_replace("_"," ",$_REQUEST['age']).' Years old<br/>'; ?> 

   
   
   
   <?php 


mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_uv_index_data = "SELECT * FROM uv_index where from_d <='".$uv_index."' AND to_d >='".$uv_index."'";
$uv_index_data = mysql_query($query_uv_index_data, $lets_go_to_beach) or die(mysql_error());
$row_uv_index_data = mysql_fetch_assoc($uv_index_data);
$totalRows_uv_index_data = mysql_num_rows($uv_index_data);

$skin_color_check1=$_REQUEST['skin_color_check'];
$skin_color_check1="skin_$skin_color_check1";

echo '<br/><font size="+1" color="#003366">Your UV level:</font><font size="+1" color="#0000CC"> '.$row_uv_index_data[$skin_color_check1].'</font><br/>';
echo '<h4>Recommendations to avoid UV Danger: </h4>'.$uv_risk_reco_arr[$row_uv_index_data[$skin_color_check1]];

?> 
      </p>
    </div>   
    
    </div>
</div>
<div class="art-content-layout-wrapper layout-item-8">
<div class="art-content-layout layout-item-9">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-6" style="width: 76%" >
        <p><span style="text-align: justify;"></span></p>
        <h1>Future Plan</h1>
        <p><img style="float: left; margin-top: 0px; margin-right: 20px; margin-bottom: 0px; margin-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;" width="196" height="185" alt="" class="art-lightbox" src="images/cb4a3fc1-9d56-46ac-a7b0-7394321b552b.png">
        </p><p>
        </p><p>&nbsp;</p>
        <h3>Comming Soon .....</h3>
    </div><div class="art-layout-cell layout-item-7" style="width: 24%" >
<br/>
<br/>
    </div>
    </div>
</div>
</div>
</div>


</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<p>Copyright © 2013, Nutrition Consultants. All Rights Reserved.<br>
<br></p>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
  </div>
  <div id="log"></div>
  
  
</footer>

</div>


</body></html>
<?php
mysql_free_result($uv_index_data);
?>
