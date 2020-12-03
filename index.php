<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#5d80a6">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата, Xvest.Ru Мобильный Хостинг,Мобильный Хостинг,Xvest.Ru, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от Xvest – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие PRAKUROR"/> 
<meta name="author" content="PRAKUROR"/>
<meta name="copyright" content="PRAKUROR system!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body> <header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>Xvest.Ru - Sayt menedjeri</b></h1>
               </td>
               <td class="r_bar">
<a href="/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php
ob_start();
define('API_KEY','1428131175:AAHo3R6X9omiaE2BH-kRG1UADPLuyckpRYo');
$token = "1428131175:AAHo3R6X9omiaE2BH-kRG1UADPLuyckpRYo";
$admin = "1171894731";
$mybot="@Advokat_Sbot";
$kanal = "@Hacker_Bey";
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

          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$cty = $message->chat->type;
$name = $update->message->from->first_name;
$fadmin = $update->message->from->id;
$mtext = $message->text;
$from_id = $message->from->id;
$mid = $message->message_id;
$fadmin = $message->from->id;
$from = $message->from;
mkdir("stat");
mkdir("Quvonchbek_Jalolov");
$step = file_get_contents("Quvonchbek_Jalolov/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
//Yangi odam id si
$new_user = $message->new_chat_member;
$new_user_id= $message->new_chat_member->id;
$new_fname= $message->new_chat_member->first_name;
$username = $message->from->username;
$fname= $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$text = $message->text;
//Sozlama;
$title = $message->chat->title;
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$last_name = $message->from->last_name;
$capt = $message->caption;
$forward = $update->message->forward_from;

if(stripos($text,"/start")!==false){
	if($cty == "supergroup" or $cty == "group"){
    bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mid,
  ]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "
👨🏻‍✈| *Man reklamalarni, ssilkalarni guruhlarda o'chirib beraman ✅*

📍| *Man ishlashim uchun guruhizga qo'shib admin qilishingiz kerak*",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[
          [['text'=>"Admin 🇺🇿",'url'=>"https://t.me/Shox_Xacker"],['text'=>" 🤖Yangiliklar ",'url'=>"https://telegram.me/Hacker_Bey"]], 
]   
]),
]);
bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mid,
  ]);
}
}

if($text == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if((stripos($text,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}

if($text=="Statistikani Korish☘" and $chat_id==$admin){
      $gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
      $tx = "<b>📡 Bot Statistikasi
👥 Guruhlar: $gr
🏆</b> @Advokat_Sbot";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$mid,
   'parse_mode'=>'html',
   'text'=>$tx,
        "reply_markup"=>json_encode([
"remove_keyboard"=>true,
]),
  ]);
}

$us = bot('getChatMembersCount',[
	'chat_id'=>$chat_id
	]);
	$count = $us->result;
$user = $message->chat->username;
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$soat = date('H:i:s', strtotime('2 hour'));
$bugun = date('d-M Y',strtotime('2 hour'));
if($user){
$result = "@$user";
}else{
$result = "$getlinkde";
}

if($new_chat_members == "1035038851"){
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🖐🏿| Assalomu Aleykum!
        
👨🏻‍✈| Men *reklamalarni, ssilkalarni* guruhingizdan tozalab beraman 

📍| Man ishlashim uchun *guruhizda admin* qiling..!",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Admin 🇺🇿",'url'=>"https://t.me/Shox_Xacker"],['text'=>"➕ Bot yangiliklari ➕",'url'=>"https://telegram.me/Hacker_Bey"]],          
            ]
        ])
    ]);
}

if ($new_chat_members == "1357381329"){
bot ('SendMessage', [
'chat_id'=>"-1001357381329",
'text'=>"🆕️<b>Botimiz $title guruhiga qo‘shildi!</b>\n\n✉<b>Guruh a‘zolari soni: $count</b>\n\n👥<b>Guruh useri:</b> $result",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);
}

if(isset($text)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }
 $good = $json->ok;
$gett = bot('getChatMember', [
     'chat_id' => $chat_id,
     'user_id' => $fadmin,
     ]);
     $get = $gett->result->status;
     
     $mem = bot('getChatMembersCount',[
'chat_id'=>$cid,
]);
$azo = $mem->result;

if($cty == "supergroup" or $cty == "group"){
	
if(isset($message->forward_from) or isset($message->forward_from_chat)!==false){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot('SendMessage',[
"chat_id"=> $chat_id,
'text'=>"⚠️ [$name](tg://user?id=$fadmin) *Iltimos Reklama Tarqatmang! 🗑* Kanalimiz @Hacker_Bey",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Guruhga qo'shish 🇺🇿",'url'=>"https://telegram.me/Advokat_Sbot?startgroup=new"]]]]),
]);
}
}

if(($new_chat_members != NUll)&&($is_bot!=false)) {
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "☘ *Salom Men Bu Guruhda Toliq Ishga Tushishim Uchun Guruhga Admin Qiling
🗑 Guruhdagi Reklama Va Linklarni Ochiradi
*",
      'parse_mode' => 'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Guruhga qo'shish 🇺🇿",'url'=>"https://telegram.me/Advokat_Sbot?startgroup=new"]]]]),
  ]);
}

if((stripos($text,".uz")!==false) or (stripos($text,".com")!==false) or (stripos($text,".ru")!==false) or (stripos($text,".dog")!==false) or (stripos($text,"://")!==false) or (stripos($text,"http")!==false) or (stripos($text,"@")!==false) or (stripos($text,".me")!==false) or (stripos($text,".be")!==false)){
 $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot ('SendMessage',[
"chat_id"=> $chat_id,
'text'=>"⚠️ [$name](tg://user?id=$fadmin) *Iltimos Reklama Tarqatmang! 🗑*",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Guruhga qo'shish 🇺🇿",'url'=>"https://telegram.me/Advokat_Sbot?startgroup=new"]]]]),
]);
}
}

if($update->message->new_chat_member or $update->message->new_chat_photo or $update->message->new_chat_title or $update->message->left_chat_member or $update->message->pinned_message){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
}

if(stripos($text,"ض") or stripos($text, 'ص') or stripos($text, 'ث') or stripos($text, 'ق') or stripos($text, 'ف') or stripos($text, 'غ') or stripos($text, 'ع') or stripos($text, 'ه') or stripos($text, 'خ') or stripos($text, 'ح') or stripos($text, 'ج') or stripos($text, 'ش') or stripos($text, 'س') or stripos($text, 'ي') or stripos($text, 'ب') or stripos($text, 'ل') or stripos($text, 'ا') or stripos($text, 'ت') or stripos($text, 'ن') or stripos($text, 'م') or stripos($text, 'ك') or stripos($text, 'ط') or stripos($text, 'ذ') or stripos($text, 'ء') or stripos($text, 'ؤ') or stripos($text, 'ر') or stripos($text, 'ى') or stripos($text, 'ئ') or stripos($text, 'ة') or stripos($text, 'و') or stripos($text, 'ز') or stripos($text, 'ظ') or stripos($text, 'د') or stripos($text, 'أ') or stripos($text, 'إ') or stripos($text, 'آ')){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
      $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $vaqti,
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"⚠️ [$name](tg://user?id=$fadmin) *Arab Harfda Yozgani Uchun Guruhdan Chiqarib Yuborildi*",
        'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Guruhga qo'shish 🇺🇿",'url'=>"t.me/https://telegram.me/Advokat_Sbot?startgroup=new"]]]]),
      ]);
  }
}

if($text == "/admin"){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"[@Shox_Xacker]*'ni paneli*",
    'parse_mode' => 'markdown',
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'Forward Yuborish☘']],
         [['text'=>'Statistikani Korish☘']],
                [['text'=>''],['text'=>'']] 
			]
		]),
	]);
}

if($text == '' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__),
"reply_markup"=>json_encode([
"remove_keyboard"=>true,
]),
]);
}

if($text == 'Statistikani Olish☘' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("stat/user.list"),
'caption'=>"👤Userlar Statistkasi",
]);
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("stat/group.list"),
'caption'=>"👥Guruhlar Statistkasi",
"reply_markup"=>json_encode([
"remove_keyboard"=>true,
]),
]);
}

if($text == "Forward Yuborish☘"){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"[@Advokat_Sbot]*'ni paneli*",
    'parse_mode' => 'markdown',
    'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
                [['text'=>'Userlarga Forward☘'],['text'=>'Guruhga Forward☘']] 
			]
		]),
	]);
}
if($text == "Userlarga Forward☘" and $chat_id == $admin){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"📩 Forward qilinadigon xabar yuboring!
/otmen -> Bekor Qilish",
      "reply_markup"=>json_encode([
"remove_keyboard"=>true,
]),
      ]);
      file_put_contents("Quvonchbek_Jalolov/$chat_id.step","forwardus");
    }

    if($step == "forwardus" and $chat_id == $admin){
      if($text == "/otmen"){
      unlink("CoderBola/$chat_id.step");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('forwardMessage', [
'chat_id'=>$idlat,
'from_chat_id'=>$admin,
'message_id'=>$mid,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"✅Userlarga Forward yuborildi!",
          ]);      
      unlink("Quvonchbek_Jalolov/$chat_id.step");
        }
      }
    }   
    
    if($text == "Guruhga Forward☘" and $chat_id == $admin){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"📩 Forward qilinadigon xabar yuboring!
/otmen -> Bekor Qilish",
      "reply_markup"=>json_encode([
"remove_keyboard"=>true,
]),
      ]);
      file_put_contents("Quvonchbek_Jalolov/$chat_id.step","forwarduq");
    }

    if($step == "forwarduq" and $chat_id == $admin){
      if($text == "/otmen"){
      unlink("Quvonchbek_Jalolov/$chat_id.step");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
     $userr = bot('forwardMessage', [
'chat_id'=>$idlat,
'from_chat_id'=>$admin,
'message_id'=>$mid,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"✅Guruhlarga Forward yuborildi!",
          ]);      
      unlink("Quvonchbek_Jalolov/$chat_id.step");
        }
      }
    }

?>
