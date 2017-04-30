
<?php ?>
<?php require_once('../../../Connections/lets_go_to_beach.php'); ?>

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
<style>
#algae_harm_div
{
    width    : 900px;
    height   : 400px;
    overflow : hidden;
    position : relative;
}

#get_harmful_algae
{
    position : absolute;
    top      : -410px;
    left     : -350px;
    width    : 1280px;
    height   : 1200px;
}

</style>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
    <meta charset="utf-8">
    <title>New Page</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="../style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="../style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">


    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <script src="../script.responsive.js"></script>


</head>
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
                                <h2 class="art-postheader">Don't Ruin My Beach</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>
                
                <br/>
                <h3>Oil Spil Map</h3>
                  <div id="algae_harm_div">
                  
                  
  <iframe id="get_harmful_algae" src="http://wwz.cedre.fr/en/Our-resources/Spills/Spill-map" width="850" height="500"></iframe>
  </div>
                
                </p></div>


</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<p>Copyright © 2017, InfraViolet. All Rights Reserved.<br>
<br></p>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
  </div>
</footer>

</div>


</body></html>