
<?php
	
	
require_once __DIR__ . '/setting.php';
class Linebot {
	private $channelAccessToken;
	private $channelSecret;
	private $webhookResponse;
	private $webhookEventObject;
	private $apiReply;
	private $apiPush;
	
	public function __construct(){
		$this->channelAccessToken = Setting::getChannelAccessToken();
		$this->channelSecret = Setting::getChannelSecret();
		$this->apiReply = Setting::getApiReply();
		$this->apiPush = Setting::getApiPush();
		$this->webhookResponse = file_get_contents('php://input');
		$this->webhookEventObject = json_decode($this->webhookResponse);
	}
	
	private function httpPost($api,$body){
		$ch = curl_init($api); 
		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body)); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
		'Content-Type: application/json; charser=UTF-8', 
		'Authorization: Bearer '.$this->channelAccessToken)); 
		$result = curl_exec($ch); 
		curl_close($ch); 
		return $result;
	}
	
	public function keluar($groupid){
		$ch = curl_init('https://api.line.me/v2/bot/group/'.$groupid.'/leave'); 
   		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body)); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
		'Content-Type: application/json; charser=UTF-8', 
		'Authorization: Bearer '.$this->channelAccessToken)); 
		$result = curl_exec($ch); 
		curl_close($ch); 
		return $result;
	}
	
	public function masuk($groupid){
		$ch = curl_init('https://api.line.me/v2/bot/group/'.$groupid.'/join'); 
   		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body)); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
		'Content-Type: application/json; charser=UTF-8', 
		'Authorization: Bearer '.$this->channelAccessToken)); 
		$result = curl_exec($ch); 
		curl_close($ch); 
		return $result;
	}
	
	public function reply2($text){
		$api = $this->apiReply;
		$webhook = $this->webhookEventObject;
		$replyToken = $webhook->{"events"}[0]->{"replyToken"}; 
		$body["replyToken"] = $replyToken;
		$body["messages"][0] = array(
			"type" => "text",
			"text"=>$text
		);
		
		$result = $this->httpPost($api,$body);
		return $result;
	}
	
	
	
	
	
	public function replya($text,$kondisi){
		$api = $this->apiReply;
		$webhook = $this->webhookEventObject;
		$replyToken = $webhook->{"events"}[0]->{"replyToken"}; 
		$body["replyToken"] = $replyToken;
		$body["messages"][0] = array(
		
  'type'=> 'template',
  'altText'=> 'this is a buttons template',
  'template'=> array(
    'type'=> 'buttons',
    'actions'=> array(
      array(
        'type'=> 'postback',
        'label'=> 'Bermain',
        'data'=> 'main',
        'text'=> 'main'
      ),
      array(
        'type'=> 'postback',
        'label'=> 'Beri makan',
        'data'=> 'makan',
        'text'=> 'makan'
      ),
      array(
        'type'=> 'postback',
        'label'=> 'Elus',
        'data'=> 'elus',
        'text'=> 'elus'
      ),
      array(
        'type'=> 'postback',
        'label'=> 'Abaikan',
        'data'=> 'abaikan',
        'text'=> 'abaikan'
      )
    ),
   'text'=> $text,
   'title'=> 'Kondisi : '.$kondisi
    
  
)					
						
									
						
						);
		
		$result = $this->httpPost($api,$body);
		return $result;
	}
		/*public function reply($text,$noid){
		$api = $this->apiReply;
		$webhook = $this->webhookEventObject;
		$replyToken = $webhook->{"events"}[0]->{"replyToken"}; 
		$body["replyToken"] = $replyToken;
		$body["messages"][0] = array(
								
										'type'=> 'template',
										
  										'altText'=> 'Transaksi Pulsa',
  										//'thumbnailImageUrl' =>  $url,
                                        
  										'template'=> array(
     										 'type'=> 'buttons',
     									
     										 
    										  
    											  'actions' => array(
      												    array(
       												     'type'=> 'message',
        												    'label'=> 'Cek Status',
        												    'text'=> 'S,'.$noid,
        												   
       													   
         												 ),
      												    array(
         											   'type'=> 'message',
         											   'label'=> 'Tagihan',
         												   'text'=> 'tagihan'
        												  )
     														 ),
     											
                                                     //'title'=> $noid,
                                                     'text'=> $text
											  )
									
							
						);
		
		$result = $this->httpPost($api,$body);
		return $result;
	}*/
	


  
	
	public function getMessageText(){
		$webhook = $this->webhookEventObject;
		$messageText = $webhook->{"events"}[0]->{"message"}->{"text"}; 
		return $messageText;
	}
	
	public function postbackEvent(){
		$webhook = $this->webhookEventObject;
		$postback = $webhook->{"events"}[0]->{"postback"}->{"data"}; 
		return $postback;
	}
	
	public function getUserId(){
		$webhook = $this->webhookEventObject;
		$userId = $webhook->{"events"}[0]->{"source"}->{"userId"}; 
		return $userId;
	}
	public function getGroupId(){
		$webhook = $this->webhookEventObject;
		$userId = $webhook->{"events"}[0]->{"source"}->{"groupId"}; 
		return $userId;
	}
	public function getMessageId(){
		$webhook = $this->webhookEventObject;
		$userId = $webhook->{"events"}[0]->{"message"}->{"id"}; 
		return $userId;
	}
	
}
