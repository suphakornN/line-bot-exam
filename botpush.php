<?php



require "vendor/autoload.php";

$access_token = '0B6evNhMG4CGdAWsP2SjJJJb0a91FSERPfQKE6fq8CbRE5k4ZxQz9ebhF6R/9wo4pnmx4VwYeUcUKjGuWZdhG1kjluc/MNm/BTxl4w2fr7D9kYoRkQpJ3W2Rt1bTfukhPFYtzMELJLl+aCB3iAYsiwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a6f9c0091ab46845a1a6ede91d264c92';

$pushID = 'U0529947247451731e66d76abe48b1402';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$placeName = "ที่ตั้งร้าน";
$placeAddress = "แขวง พลับพลา เขต วังทองหลาง กรุงเทพมหานคร ประเทศไทย";
$latitude = 13.780401863217657;
$longitude = 100.61141967773438;
$replyData = new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder($placeName, $placeAddress, $latitude ,$longitude);      

//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('โปรโมชั่นเดือนกรกฎาคม 2561 ซื้อ 5 ไม่มีของแถมมมมมม');
$response = $bot->pushMessage($pushID, $replyData);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







