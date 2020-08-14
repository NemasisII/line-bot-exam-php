<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'zKPE2kCxxktSNYqAllCL4tohPoDQp9+ZubkOMCGAyKZW4hgAwLPEvDEC0VXNC2aqpbyoIBbs33/LhTvSFppRkCj1cElkVBI28cs9cxnhSK7MxWZyorH7L2aLCb6N9jHbyWFU0jQU2zxWIcVIzHotZgdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'b3c3b5b66389a63b99abc35d65279c0c';
$idPush = 'U6f490ff8a9d07d84640087f44b583acf'

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
