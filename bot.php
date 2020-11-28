<?php
////////BENCHAMIN LOUIS//////
//CHANNEL:- T.ME/INDUSBOTS////
error_reporting(0);

set_time_limit(0);

flush();
$API_KEY = '1497400861:AAGpw8Oo3bOOwMIWTOVRV3sYPOHy-Lj057Q'; //Your token
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
//==============BENCHAM======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$name = $from_id = $message->from->first_name;
$from_id = $message->from->id;
$text = $message->text;
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$chatid = $update->callback_query->message->chat->id;
$callback_query = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message->message_id;
  $date = date("d/m/y");
$AdminID = 1222113933; //admin user id get it from @MissRose_bot 
 $log = -1001412381389;
$jk = -1001237862679;
//===============BENCHAM=============//
if ($text == "/start"){

            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***HEY $name,

CLICK GET GIF :)***
",
                'parse_mode'=>"MarkDown",
                'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "GET GIF", 'callback_data' => "get"]],

]])
                
]);
Bot('sendmessage',[
'chat_id'=>$log,
'text'=> "***BOT STARTED BY USER***
 
***NAME :-*** `$name`
***Username :-*** @$username
***Userid :-*** `$from_id`",
'parse_mode'=>"MarkDown",
]);
}

if ($callback_query == "get"){
bot('copyMessage', [
                'chat_id' =>$chatid,
                'from_chat_id'=>-1001324812174,
                'message_id'=>rand(10,530)
               
               ]);
        }    
