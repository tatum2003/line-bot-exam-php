<?php



require "vendor/autoload.php";

$access_token = 'WVx3/J6GszDkkn+mxzkWtEKyXE+8onO3I5v0GyNenyGvRqtMwYJ+9jMyP1hFpx1VAICfyFxSb5reQ5cUtcg3DvHWhDMFmVU3dcp8MVR3cTmUfKc2O/VK/cEdrqOs7ASS0KqFPvLdTN8yozW/grUSqwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







