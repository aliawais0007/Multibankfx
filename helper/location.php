<?php 
$ip =  $_SERVER['REMOTE_ADDR'];
$url = "http://api.hostip.info/get_html.php?ip=$ip";
echo $url;
$country=file_get_contents($url);
echo $country;
// Reformat the data returned (Keep only country and country abbr.)
$only_country=explode (" ", $country);

echo "Country : ".$only_country[1]." ".substr($only_country[2],0,4);
?>