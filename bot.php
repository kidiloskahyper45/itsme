<?php
////////BENCHAMIN LOUIS//////
//CHANNEL:- T.ME/INDUSBOTS////
error_reporting(0);

set_time_limit(0);

flush();
$API_KEY = '1884962279:AAEYQbLCJhRCup97haTuKjps9sE6_V6JEK4'; //Your token
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
//===============BENCHAM=============//
$tch = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@HOT_MEMS08&user_id=".$from_id))->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
bot('sendMessage',['chat_id'=>$from_id,'text'=>"Sorry Dude😔

You need to join my  channel to use me✌️

Join now:- @HOT_MEMS08😋"
]);
}Else{
if ($text == "/start"){

            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***HEY $name,

I'm a Random Insta hot pic Bot Made By @HOT_MEMS08

Click the button to Get pic.***
",
                'parse_mode'=>"MarkDown",
                'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "GET GIF", 'callback_data' => "get"]],

]])
                
]);
}
}

if ($text == "/pic"){
bot('copyMessage', [
                'chat_id' =>$chat_id,
                'from_chat_id'=>-1001309456712,
                'message_id'=>rand(25,530)
               
               ]);
        }    
if ($callback_query == "get"){
bot('copyMessage', [
                'chat_id' =>$chatid,
                'from_chat_id'=>-1001309456712,
                'message_id'=>rand(25,530)
               
               ]);
bot('DeleteMessage',[
'chat_id'=>$chatid,
'message_id'=>$messageid,
]);
        }    
