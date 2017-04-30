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
                <div class="art-content-layout"></div>
            
            
<?php 
//require_once('html_content_page/header.php');

?>
<?php 

$json = file_get_contents('http://api.wunderground.com/api/f1d7c3f73327490e/geolookup/q/autoip.json');
$obj = json_decode($json);
//echo $obj->access_token;

//print_r($obj->{'location'}->{'lat'});

//print_r($obj);
?>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
        width:70%;
		
        /*top:280px;*/
        /*left:500px;*/
      }
       /*html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }*/
	  #Header_photo{
		  
		  position: fixed; top: 0px; bottom: 0; left:600px; right: 50;
		  
		  height:220;
		  }
	  
     </style>


<div id="map_wrap" style="position: absolute; top: 050px; bottom: 0; left: 50px; right: 0;"> 
   
            <div id="map">
            

</div>
    
                </div>
<div id="log" style="display:none"></div>
 <script>
     // This example requires the Places library. Include the libraries=places
     // parameter when you first load the API. For example:
     // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

     function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
             center: { lat: <?php echo $obj->{'location'}->{'lat'}?>, lng: <?php echo $obj->{'location'}->{'lon'}?> },
             zoom: 15
         });

         var infowindow = new google.maps.InfoWindow();
         var service = new google.maps.places.PlacesService(map);

         service.getDetails({
             placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
         }, function (place, status) {
             if (status === google.maps.places.PlacesServiceStatus.OK) {
                 //var marker = new google.maps.Marker({
                 //    map: map,
                 //    position: place.geometry.location
                 //});
                 //google.maps.event.addListener(marker, 'click', function () {
                 //    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                 //      'Place ID: ' + place.place_id + '<br>' +
                 //      'Position: '+place.
                 //      place.formatted_address + '</div>');
                 //    infowindow.open(map, this);
                 //});
             }
         });

//         google.maps.event.addListener(
//        map, "dbclick", function (
//                overlay, latlng, overlaylatlng
//        ) {
//            // var point = new GLatLng( latlng.y, latlng.x ); 
//            //document.getElementById("log").innerHTML = 
//            map.getCenter().toString();
//            document.getElementById("log").innerHTML = '|' +
//map.getCenter().lat().toFixed(6) + ' |' +
//map.getCenter().lng().toFixed(6);
         //        });

         google.maps.event.addListener(map, "click", function (e) {
             document.getElementById("log").innerHTML  = e.latLng.lat().toFixed(6)
             + ' |' + e.latLng.lng().toFixed(6);
			 var lng=e.latLng.lng().toFixed(5);
			 var lat=e.latLng.lat().toFixed(5); 
			 //alert(lat);
			 document.getElementById("lng").value=lng;
			 document.getElementById("lat").value=lat;
			
         });
     }

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuwYgqEldl_mDTc3MOTljtJRr0YLakIEo&callback=initMap&libraries=places&sensor=false">
    </script>
<form action="infraviolet.php" method="get">
<label for="age">Enter Your Age</label>
<input type="number" name="age" required id="age"  value="" placeholder="Enter Age..." ><br/><br/>
<label for="gender">Select Gender</label>
<select name="gender">
<option value="M">Male</option>
<option value="F">Female</option>
</select><br/><br/>
<label for="last_exposure_sun">Last Exposure to Sun/Sea</label>
<input required type="date" name="last_exposure_sun" id="age"  value="" placeholder="Enter Last Exposure to sun/sea..." size="35" ><br/><br/>
<label for="lng">Longitude(ReadOnly):</label>
<input type="text" name="lng" id="lng"  value="<?php echo $obj->{'location'}->{'lon'}?>" ><br/>
<label for="lat">Latitude(ReadOnly):</label>
<input type="text" name="lat" id="lat"  value="<?php echo $obj->{'location'}->{'lat'}?>">

<br/>
<label for="skin_color">Upload Pic. of your Skin</label>
<input type="file" name="skin_color"  placeholder="upload Pic. of your Skin">
<br/>
<label for="skin_color_check">Confirm Your Skin Color: </label>
<select name="skin_color_check">
<option value="white_burners">white (burners)</option>
<option value="naturally_black">naturally black</option>
<option value="white_tanners">white (tanners)</option>
<option value="naturally_brown">naturally brown</option>

</select>
<style>
.protect_me{
	
	width:100px;
	height:20px;
	font-size:16px;
	color:#F00;}
</style>
<input name="Protect_Me" class="protect_me" type="submit" value="Protect Me">
</form>


<?php 
//require_once('html_content_page/footer.php');

?>
            
            
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
