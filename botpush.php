<?php



require "vendor/autoload.php";


use \LINE\LINEBot;
use \LINE\LINEBot\HTTPClient;
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot\MessageBuilder;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use \LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use \LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use \LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
use \LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
use \LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
use \LINE\LINEBot\ImagemapActionBuilder;
use \LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use \LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder ;
use \LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use \LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
use \LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use \LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use \LINE\LINEBot\TemplateActionBuilder;
use \LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
use \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
use \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
use \LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;


$access_token = 'B6evNhMG4CGdAWsP2SjJJJb0a91FSERPfQKE6fq8CbRE5k4ZxQz9ebhF6R/9wo4pnmx4VwYeUcUKjGuWZdhG1kjluc/MNm/BTxl4w2fr7D9kYoRkQpJ3W2Rt1bTfukhPFYtzMELJLl+aCB3iAYsiwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6f9c0091ab46845a1a6ede91d264c92';

$pushID = '0529947247451731e66d76abe48b1402';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีพวกเรา vgenz');
    $textReplyMessage = "Bot ตอบกลับคุณเป็นข้อความ";
    $textMessage = new TextMessageBuilder($textReplyMessage);
                     
    $picFullSize = 'https://www.mywebsite.com/imgsrc/photos/f/simpleflower';
    $picThumbnail = 'https://www.mywebsite.com/imgsrc/photos/f/simpleflower/240';
    $imageMessage = new ImageMessageBuilder($picFullSize,$picThumbnail);
                     
    $placeName = "ที่ตั้งร้าน";
    $placeAddress = "แขวง พลับพลา เขต วังทองหลาง กรุงเทพมหานคร ประเทศไทย";
    $latitude = 13.780401863217657;
    $longitude = 100.61141967773438;
    $locationMessage = new LocationMessageBuilder($placeName, $placeAddress, $latitude ,$longitude);        
 
    $multiMessage =     new MultiMessageBuilder;
    $multiMessage->add($textMessage);
    $multiMessage->add($imageMessage);
    $multiMessage->add($locationMessage);
    $replyData = $multiMessage; 
$response = $bot->pushMessage($pushID, $replyData);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







