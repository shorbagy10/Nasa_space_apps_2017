<?php require_once('../../../Connections/lets_go_to_beach.php'); ?>


<?php 
$lng=number_format($_REQUEST['lng'], 0, '.', '');
$lat=number_format($_REQUEST['lat'], 0, '.', '');
$loc_unique_no=$_REQUEST['loc_unique_no'];

if(!isset($loc_unique_no) ||$loc_unique_no==NULL || $loc_unique_no==''){
	
if (isset($lng)&&isset($lat) && $lng!=NULL && $lat!=NULL && $lng!='' && $lat!='') {
	
	$get_loc_query=" where lat LIKE '".$lat."%' and lng LIKE '".$lng."%'";
	
	}else{$get_loc_query=" where lat='no_data_found'";
	$getshark_attack_data=" where Country='no_data_found'";	
	$hide_data='nothing_found';
	}
	
}else{
	$get_loc_query=" where unique_no='".$loc_unique_no."'";
	
	
	}

?>
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

$maxRows_lets_go_to_beach2 = 30;
$pageNum_lets_go_to_beach2 = 0;
if (isset($_GET['pageNum_lets_go_to_beach2'])) {
  $pageNum_lets_go_to_beach2 = $_GET['pageNum_lets_go_to_beach2'];
}
$startRow_lets_go_to_beach2 = $pageNum_lets_go_to_beach2 * $maxRows_lets_go_to_beach2;





mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_cities_with_long_lat_q = "SELECT * FROM cities_with_long_lat $get_loc_query";
$cities_with_long_lat_q = mysql_query($query_cities_with_long_lat_q, $lets_go_to_beach) or die(mysql_error());
$row_cities_with_long_lat_q = mysql_fetch_assoc($cities_with_long_lat_q);
$totalRows_cities_with_long_lat_q = mysql_num_rows($cities_with_long_lat_q);

$num=0;
do{
	
	$num++;
	$unique_no=$row_cities_with_long_lat_q['unique_no'];
	
$loc_all_data['city'][$unique_no]=$row_cities_with_long_lat_q['city'];


$loc_all_data['city_ascii'][$unique_no]=$row_cities_with_long_lat_q['city_ascii'];


$loc_all_data['lat'][$unique_no]=$row_cities_with_long_lat_q['lat'];

$loc_all_data['lng'][$unique_no]=$row_cities_with_long_lat_q['lng'];

$loc_all_data['pop'][$unique_no]=$row_cities_with_long_lat_q['pop'];

$loc_all_data['country'][$unique_no]=$row_cities_with_long_lat_q['country'];

$loc_all_data['iso2'][$unique_no]=$row_cities_with_long_lat_q['iso2'];

$loc_all_data['iso3'][$unique_no]=$row_cities_with_long_lat_q['iso3'];

$loc_all_data['province'][$unique_no]=$row_cities_with_long_lat_q['province'];

	}while($row_cities_with_long_lat_q = mysql_fetch_assoc($cities_with_long_lat_q));

if($num<=1){
	
mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_lets_go_to_beach2 = "select * from shark_attacks_list where (country='".$loc_all_data['country'][$unique_no]."' || country='".$loc_all_data['iso2'][$unique_no]."' || country='".$loc_all_data['iso3'][$unique_no]."') and (area Like '%".$loc_all_data['province'][$unique_no]."%' OR area Like '%".$loc_all_data['city'][$unique_no]."%' OR Location Like '%".$loc_all_data['province'][$unique_no]."%' OR Location Like '%".$loc_all_data['city'][$unique_no]."%') ";
$query_limit_lets_go_to_beach2 = sprintf("%s LIMIT %d, %d", $query_lets_go_to_beach2, $startRow_lets_go_to_beach2, $maxRows_lets_go_to_beach2);
$lets_go_to_beach2 = mysql_query($query_limit_lets_go_to_beach2, $lets_go_to_beach) or die(mysql_error());
$row_lets_go_to_beach2 = mysql_fetch_assoc($lets_go_to_beach2);
}
if (isset($_GET['totalRows_lets_go_to_beach2'])) {
  $totalRows_lets_go_to_beach2 = $_GET['totalRows_lets_go_to_beach2'];
} else {
  $all_lets_go_to_beach2 = mysql_query($query_lets_go_to_beach2);
  $totalRows_lets_go_to_beach2 = mysql_num_rows($all_lets_go_to_beach2);
}
$totalPages_lets_go_to_beach2 = ceil($totalRows_lets_go_to_beach2/$maxRows_lets_go_to_beach2)-1;

mysql_select_db($database_lets_go_to_beach, $lets_go_to_beach);
$query_get_shark_attacks_data = "select * from shark_attacks_list";
//$query_get_shark_attacks_data = "select * from shark_attacks_list where shark_attacks_list.Case_Number LIKE '%".$Case_Number."%' OR ((Date LIKE '%".$Date."%' OR Year LIKE '%".$Case_Number."%' ) AND Country LIKE '%".$Country."%' ) OR Area LIKE '%".$Area."%' OR Activity  LIKE '%".$Activity."%' OR Age LIKE '%".$Age."%' OR Fatal LIKE '%".$Fatal."%'";

$get_shark_attacks_data = mysql_query($query_get_shark_attacks_data, $lets_go_to_beach) or die(mysql_error());
$row_get_shark_attacks_data = mysql_fetch_assoc($get_shark_attacks_data);
$totalRows_get_shark_attacks_data = mysql_num_rows($get_shark_attacks_data);
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
                                <h2 class="art-postheader">Big Fishes ... Go Back!</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><h3 class="art-postheader">Shark Attacks Log for This Area</h3><p><br/>
          <?php if($hide_data!='nothing_found'){?>      
   <ul>
   <?php 
   echo 'Selected City with Long ('.$lng.') & Lat ('.$lat.'):<br/> ';
   //print_r($loc_all_data);
   foreach($loc_all_data['city'] as $key=>$val){
   echo '<li>'.'<a href="?loc_unique_no='.$key.'">'.$val.'</a> in : '.$loc_all_data['province'][$key].' in : '.$loc_all_data['country'][$key].' (Population : '.$loc_all_data['pop'][$key].' )</li>';
   ?>
   
   <?php }?>
   </ul>            
           <?php }?>     
<form action="" method="get">
<label for="lat">Latitude</label>
<input type="text" name="lat" id="lat" placeholder="Enter Longitude..." value="<?php echo $lat;?>"/>
<label for="lng">Longitude</label>
<input type="text" name="lng" id="lng" placeholder="Enter Longitude..." value="<?php echo $lng;?>" />
<label for="loc_unique_no"> Loc. No.</label>
<input type="text" name="loc_unique_no" id="loc_unique_no" placeholder="Location No. ..." value="<?php echo $_REQUEST['loc_unique_no'];?>" />
<input name="submit" type="submit" value="Get Data">
</form>
<?php if( $totalRows_lets_go_to_beach2>0){
	?><br/><h3>Recommendations : </h3>
    <style>
    ol{ font-size:12px;
	font-weight:bold;
	color:red;}
    </style>
    <ol>
    <li>Think like a shark. If you see lots of fish or seals, chances are that sharks could be around and could confuse you with dinner.</li>
    <li>Avoid looking like a seal. Reclining on a surfboard and wearing a wetsuit and fins can give you a seal's silhouette from a shark's perspective below.</li>
    <li>Swim in a group or at least be sure to have a partner with you. Stay alert as to what is going on in the surrounding water environment.</li>
    <li>Don't swim in waters known to be frequented by sharks. Consult with lifeguards and other authorities for more specific regional information.</li>
    
    </ol>
<br/><h3>Shark Attacks History: </h3>
	<?php }?>

<?php if($hide_data!='nothing_found'){?>
<table border="1" cellpadding="0" cellspacing="0">
  <tr>
    
    <th>Case_Number</th>
    <th>Year</th>
    <th>Type</th>
    <th>Country</th>
    <th>Area</th>
    <th>Location</th>
    <th>Activity</th>
    <th>Name</th>
    <th>Sex</th>
    <th>Age</th>
    <th>Injury</th>
    <th>Fatal</th>
    <th>Time</th>
    <th>Species</th>
    <th>Investigator_or_Source</th>
  </tr>
  <?php do { ?>
    <tr>
      
      <td><a href="<?php echo $row_lets_go_to_beach2['URL']; ?>" target="_blank"><?php echo $row_lets_go_to_beach2['Case_Number']; ?></a></td>
      <td><?php echo $row_lets_go_to_beach2['Year']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Type']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Country']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Area']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Location']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Activity']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Name']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Sex']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Age']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Injury']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Fatal']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Time']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Species']; ?></td>
      <td><?php echo $row_lets_go_to_beach2['Investigator_or_Source']; ?></td>
    </tr>
    <?php } while ($row_lets_go_to_beach2 = mysql_fetch_assoc($lets_go_to_beach2)); ?>
    </table>            
               
 <?php }else{echo '</br>No Location Selected';}?>              
               
<br/>


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
mysql_free_result($lets_go_to_beach2);

mysql_free_result($cities_with_long_lat_q);

mysql_free_result($get_shark_attacks_data);
?>
