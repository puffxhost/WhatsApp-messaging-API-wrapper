<?php
class MpwaClient {
  private $apiKey, $sender, $baseUrl;
  function __construct($apiKey, $sender, $baseUrl="https://api.x-server.in"){
    $this->apiKey=$apiKey; $this->sender=$sender; $this->baseUrl=rtrim($baseUrl,"/");
  }
  function req($path,$data){
    $data=array_merge(["api_key"=>$this->apiKey,"sender"=>$this->sender],$data);
    $ch=curl_init($this->baseUrl.$path);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));
    curl_setopt($ch,CURLOPT_HTTPHEADER,["Content-Type: application/json"]);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    return json_decode(curl_exec($ch),true);
  }
  function sendText($number,$message,$footer=null){
    return $this->req("/send-message",compact("number","message","footer"));
  }
}
?>
