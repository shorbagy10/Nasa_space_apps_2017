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
<?php 
$dateymd=date("Y-m-d");
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

mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_uv_index_opp = "SELECT * FROM uv_index";
$uv_index_opp = mysql_query($query_uv_index_opp, $lets_go_to_beach) or die(mysql_error());
$row_uv_index_opp = mysql_fetch_assoc($uv_index_opp);
$totalRows_uv_index_opp = mysql_num_rows($uv_index_opp);


?>


<?php 
do{
	
	$unique_no=$row_uv_index_opp['unique_no'];
	$uv_opp['classification'][$unique_no]=$row_uv_index_opp['classification'];
	$uv_opp['from'][$unique_no]=$row_uv_index_opp['from'];
	$uv_opp['to'][$unique_no]=$row_uv_index_opp['to'];
	$uv_opp['Recommendations'][$unique_no]=$row_uv_index_opp['Recommendations'];	
	
	}while($row_uv_index_opp = mysql_fetch_assoc($uv_index_opp));

?>

<style>
#algae_harm_div
{
    width    : 900px;
    height   : 600px;
    overflow : hidden;
    position : relative;
}

#get_harmful_algae
{
    position : absolute;
    top      : -100px;
    left     : -330px;
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
                                <h2 class="art-postheader">Can You Swim With Me...</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                
                <p><?php 
				$year=date("Y");
				$month_c=date("m")-1;
				$day_c=date("d");
				$searching_date=date("Y-$month_c-1");
				$day_of_year=date('z' , strtotime($searching_date))+1;
				$end_month_date1=date("Y-$month_c-t");
				$end_month_date=date('z',strtotime($end_month_date1))+2; //echo $end_month_date;
				
$url_src_img='https://oceancolor.gsfc.nasa.gov/cgi/l3/V'.$year.'0'.$day_of_year.$year.'0'.$end_month_date.'.L3m_MO_SNPP_CHL_chlor_a_4km.nc.png?sub=img';
				?>
  <h3>Algae Distribution at 4KM of Sea Level (last Month: <?php echo $month_c.'/'.$year?> )</h3>              
  <img src="<?php echo $url_src_img;?>" width="800" height="500"></img>
<h4> Legend: 
  <img src="../images/overall_monthly_all_algae.png" height="50"></img>    </h4>   
  <br/>
  
  <br/>
  <h3>Current Situation of Harmful Algae Map (karenia brevis):</h3>
  <br/>
  <div id="algae_harm_div">
  <iframe id="get_harmful_algae" src="https://service.ncddc.noaa.gov/website/AGSViewers/HABSOS/maps.htm#map" width="850" height="500"></iframe>
  
  
  
  </div><h4> Legend: 
  <img src="../images/legend_2_algae.jpg" height="100"></img>    </h4> 
  <script>
  /*$(function(){
	  $('#get_harmful_algae-div').load('https://service.ncddc.noaa.gov/website/AGSViewers/HABSOS/maps.htm#map');
	  
	alert('hi');  
	  });*/
  </script>
         
                </p>
                  
                <p>
                
                
                </p>
                
                 <h3></h3>
                <p>
                
                
              </p>
                
                
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
</footer>

</div>


</body></html>
<?php
mysql_free_result($uv_index_opp);
?>
