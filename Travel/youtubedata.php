<?php

require_once('google-api-php-client-2.2.1/vendor/autoload.php');


$client = new Google_Client();
$client->setApplicationName("Youtube Data API Search");
$client->setDeveloperKey("AIzaSyA6erHM5H0jPocDaxk0z7tTc02IquDvA5c");

//Read YouTube
$youtube = new Google_Service_YouTube($client);

//Search words
if(isset($_GET["place"]) && $_GET["place"] != "") {
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => $_GET["place"],
        'maxResults' => 3,
));
} else {
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => 'Queensland',
        'maxResults' => 3,
));
}
echo json_encode($searchResponse);
?>