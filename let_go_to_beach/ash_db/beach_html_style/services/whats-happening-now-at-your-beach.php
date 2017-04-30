<?php ?>
<?php require_once('../../../Connections/lets_go_to_beach.php'); ?>

<?php $lng=number_format($_REQUEST['lng'], 1, '.', '');
$lat=number_format($_REQUEST['lat'], 1, '.', '');
$gender=$_REQUEST['gender'];
$last_exposure_sun=$_REQUEST['last_exposure_sun'];
$skin_color_check=$_REQUEST['skin_color_check'];
$url_var="?lng=$lng&lat=$lat&gender=$gender&last_exposure_sun=$last_exposure_sun&skin_color_check=$skin_color_check"
?>

<?php 
$url_main_page="http://localhost:51791/ash_db/beach_html_style/infraviolet.php";
?>
<?php 
//$lng=$_REQUEST['lng'];
//$lat=$_REQUEST['lat'];


	
if (isset($lng)&&isset($lat) && $lng!=NULL && $lat!=NULL && $lng!='' && $lat!='') {

	$get_loc_query=" where lat LIKE '".$lat."%' and lng LIKE '".$lng."%'";
	
	}else{$get_loc_query=" where lat='no_data_found'";
	$getshark_attack_data=" where Country='no_data_found'";	
	$hide_data='nothing_found';
	}
	

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO whats_happening_in_beach (user_name, lng, lat, `comment`) VALUES ( %s, %s, %s, %s)",

                       GetSQLValueString($_POST['user_name'], "text"),
                       GetSQLValueString($_POST['lng'], "text"),
                       GetSQLValueString($_POST['lat'], "text"),

                       GetSQLValueString($_POST['comment'], "text"));

  mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
  $Result1 = mysql_query($insertSQL, $lets_go_to_beach) or die(mysql_error());

  $insertGoTo = "";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_users_comments_by_loc = "SELECT * FROM whats_happening_in_beach $get_loc_query $qsearch_word";
$users_comments_by_loc = mysql_query($query_users_comments_by_loc, $lets_go_to_beach) or die(mysql_error());
$row_users_comments_by_loc = mysql_fetch_assoc($users_comments_by_loc);
$totalRows_users_comments_by_loc = mysql_num_rows($users_comments_by_loc);
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
                                <h2 class="art-postheader">Beach On-Air! (Users Comments)</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>
                
                <br/>
                <h3>&nbsp;</h3>
                <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                  <table align="center">
                    <tr valign="baseline">
                      <th nowrap align="right">User_name:</th>
                      <td><input type="text" name="user_name" value="" size="32"></td>
                    </tr>
                    <tr valign="baseline">
                      <th nowrap align="right">Comment:</td>
                      <th>
                       <textarea name="comment" rows="5" cols="40"></textarea>
                      
                      </td>
                    </tr>
                    <tr valign="baseline">
                      <td nowrap align="right">&nbsp;</td>
                      <td><input type="submit" value="Add Comment">
                     
                      </td>
                    </tr>
                  </table>
                  <input type="hidden" name="MM_insert" value="form1">
                  <input type="hidden" name="lng" value="<?php echo  $lng?>" size="32">
                  <input type="hidden" name="lat" value="<?php echo $lat?>" size="32">
                </form>
                <p>&nbsp;</p>
                <table border="1" cellpadding="0" cellspacing="0">
                  <tr>
                    <th>User Name</th>
                    <th>Lng</th>
                    <th>Lat</th>
                    <th>Date</th>
                    <th>Comment</th>
                  </tr>
                  <?php do { ?>
                    <tr>
                      <td><?php echo $row_users_comments_by_loc['user_name']; ?></td>
                      <td><?php echo $row_users_comments_by_loc['lng']; ?></td>
                      <td><?php echo $row_users_comments_by_loc['lat']; ?></td>
                      <td><?php echo $row_users_comments_by_loc['date']; ?></td>
                      <td><?php echo $row_users_comments_by_loc['comment']; ?></td>
                    </tr>
                    <?php } while ($row_users_comments_by_loc = mysql_fetch_assoc($users_comments_by_loc)); ?>
                </table>
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
mysql_free_result($users_comments_by_loc);
?>
