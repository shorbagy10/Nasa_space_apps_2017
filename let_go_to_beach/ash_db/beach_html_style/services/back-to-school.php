<?php require_once('../../../Connections/lets_go_to_beach.php'); ?>

<?php 
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

mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_dictionary_back_to_school = "SELECT * FROM dictionary_words_ash";
$dictionary_back_to_school = mysql_query($query_dictionary_back_to_school, $lets_go_to_beach) or die(mysql_error());
$row_dictionary_back_to_school = mysql_fetch_assoc($dictionary_back_to_school);
$totalRows_dictionary_back_to_school = mysql_num_rows($dictionary_back_to_school);
?>
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
                                <h2 class="art-postheader">Back To School</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>
                
                <style>
                .word_def{  height: 150px;
  width: 150px;
  display: table-cell;
  text-align: center;
  vertical-align:middle;
  border-radius: 50%; /* may require vendor prefixes */
  /*background: #06F;*/
  float:right;
  opacity:100;

 
  
  }
  
				.meaning_def{ position:relative;
				vertical-align:middle;
				 text-align: center;
				  font-size:18px;
				  padding: 50 50 50 50 px;
				  margin: 10 10 10 10 px;
				
				}
                
                </style>
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script><br/><br/>
      <?php 
	  do{
echo '<div class="word_def" data-toggle="tooltip" title="'.$row_dictionary_back_to_school['meaning'].'"><b class="meaning_def">'.$row_dictionary_back_to_school['word'].'</b></div> ';		  
		  
		  
		  }while(
$row_dictionary_back_to_school = mysql_fetch_assoc($dictionary_back_to_school));
	  
	  
	  ?>          
                
                <br/>
                
                
  
<style>
#glossary_div
{
    width    : 900px;
    height   : 1400px;
    overflow : hidden;
    position : relative;
}

#glossary
{
    position : absolute;
    top      : -120px;
    left     : 10px;
    width    : 1280px;
    height   : 3200px;
}

</style>       
 
<div id="glossary_div"> 
    
                <iframe id="glossary" width="850px" height="3000px" src="https://mynasadata.larc.nasa.gov/glossary/"></iframe>
                </div>
                </p></div>


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
mysql_free_result($dictionary_back_to_school);
?>
