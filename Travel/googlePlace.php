<?php
	$searchTerm = $_GET["query"];
	$str = "";
	for($i = 0; $i < strlen($searchTerm) ; $i++) {
		if(($searchTerm[$i] >= 'A' && $searchTerm[$i] <= 'Z') || ($searchTerm[$i] >= 'a' && $searchTerm[$i] <= 'z'))  {
			$str .= $searchTerm[$i];
		} else {
			$str .= '+';
		}
	}
	$key = "AIzaSyDwQeUa5F6g3oYRVZvOcx1PtmvKE0CAZ2o";
	$url = "https://maps.googleapis.com/maps/api/place/textsearch/xml?query=".$str."&key=".$key;
	$xml = file_get_contents($url);
	header("Content-type: text/xml");
	echo $xml;
?>