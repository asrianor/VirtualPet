<?php

class Setting {
public function getChannelAccessToken(){
$channelAccessToken = "ArePRNR96q1yfBZTCyX70Jdl4ph0PcPw8iL+4XVFuPfh84hri87kApDS0oDWjchmey/HkPMrrTtgU0bjVqRGwbfAr3qga2iqUiLhWF6SzNyswpnUu92DfixsI4jdX/S2ETstdxkN9yne0nj5nlt8dwdB04t89/1O/w1cDnyilFU=";
return $channelAccessToken;
}
public function getChannelSecret(){
$channelSecret = "96b14b086f746cb5d7183aff30cb07f5";
return $channelSecret;
}
public function getApiReply(){
$api = "https://api.line.me/v2/bot/message/reply";
return $api;
}
public function getApiPush(){
$api = "https://api.line.me/v2/bot/message/push";
return $api;
}
}
?>