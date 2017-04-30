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

    <li><a href="infraviolet.php<?php echo $url_var;?>" id="infraviolet" class="">InfraViolet</a></li><li><a href="services.php<?php echo $url_var;?>" id="services" class="">Services</a><ul class=""><li><a href="services/can-you-swim-with-me.php<?php echo $url_var;?>" id="can-you-swim" class="">Can You Swim With Me</a></li><li><a href="services/big-fishes-go-back.php<?php echo $url_var;?>" id="big-fishes-go" class="">BIG FISHES .. GO BACK!</a></li><li><a href="services/dont-ruin-my-beach.php<?php echo $url_var;?>" id="dont-ruin-my" class="">DON'T RUIN MY BEACH</a></li>
    
    
    <li><a id="whats-happening-now" href="services/whats-happening-now-at-your-beach.php<?php echo $url_var;?>">Beach on Air</a></li>
    
    <li><a id="back-to-school" href="services/back-to-school.php<?php echo $url_var;?>" class="">BACK TO SCHOOL</a></li></ul></li>
    
    <li><a id="about-us" href="about-us-2.php<?php echo $url_var;?>" class="active">About Us</a></li><li><a id="policy" href="policy.php<?php echo $url_var;?>">Policy</a></li><li><a href="services/whats-happening-now-at-your-beach.php<?php echo $url_var;?>">Beach On-Air</a></li>
