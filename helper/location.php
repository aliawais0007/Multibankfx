<?php 
// $ip =  $_SERVER['REMOTE_ADDR'];
// $url = "http://api.hostip.info/get_html.php?ip=$ip";
// echo $url;
// $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
print_r($location);
// echo $country;
// Reformat the data returned (Keep only country and country abbr.)
// $only_country=explode (" ", $country);

// echo "Country : ".$only_country[1]." ".substr($only_country[2],0,4);

?>
<html>
    <head>
        <title>
            Hello
        </title>
    </head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<h3>Client side IP geolocation using <a href="http://ipinfo.io">ipinfo.io</a></h3>

<hr/>
<div id="ip"></div>
<div id="address"></div>
<hr/>Full response: <pre id="details"></pre>
<script>
    
$.get("https://ipinfo.io/json", function (response) {
    $("#ip").html("IP: " + response.ip);
    $("#address").html("Location: " + response.city + ", " + response.region);
    $("#details").html(JSON.stringify(response));
}, "jsonp");
</script>
</body>
</html>