<?php
//CloneしたAPIの読み込み
require_once('google-api-php-client-2.2.1/vendor/autoload.php');

//Googleクライアントを読み込み、API情報を設定する
$client = new Google_Client();
$client->setApplicationName("Youtube Data API v3 Test");
$client->setDeveloperKey("AIzaSyA6erHM5H0jPocDaxk0z7tTc02IquDvA5c");

//YouTubeの読み込み
$youtube = new Google_Service_YouTube($client);

//ワード検索してみる
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