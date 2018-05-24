<?php
$city="Brisbane";$country="au"; //Two digit country code
$url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country;
$url = "http://api.openweathermap.org/data/2.5/forecast?id=524901&APPID=aadbd74f336b59b4401ab16fabd3d502";
$json = file_get_contents($url);

echo $json;
//$data=json_decode($json,true);//Get current Temperature in Celsiusecho

/*foreach($data as $k => $v) {
	echo $k." is ".$v."<br>";
}*/

/*$data['main']['temp']."";//Get weather conditionecho 
$data['weather'][0]['main']."
";//Get cloud percentageecho 
$data['clouds']['all']."
";//Get wind speedecho 
$data['wind']['speed']."";*

?>