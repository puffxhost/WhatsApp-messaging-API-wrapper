<?php
require "../../sdk/php/MpwaClient.php";
$client=new MpwaClient("API_KEY","SENDER");
print_r($client->sendText("62822xxxx","Hello!"));
?>