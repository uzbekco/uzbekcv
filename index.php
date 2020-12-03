
<?php
ob_start();
define('API_KEY', '1428131175:AAHo3R6X9omiaE2BH-kRG1UADPLuyckpRYo');
//tokenni yozing
$admin = "1171894731"; 
//ozizni id raqamizni yozing
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
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.

$update = json_decode(file_get_contents('php://input'));
$botim="Advokat_Sbot";
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$fadmin = $message->from->id;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
//yangi odam qo'shilishi
if (($new_chat_members != NUll)&&($is_bot!=true)) {
  $test = "Salom  <b> $first_name</b> <i>Hacker bey Group</i> guruhiga hush kelibsiz!\nGuruhda hozir faqat o'qiy olasiz yozish uchun qoidaga roziligingizni tastiqlang!\n<a href='https://telegram.me/Advokat_Sbot?start=$new_chat_members'>👉 Tasdiqlash 👈</a>
";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$test,
    'parse_mode'=>'html'
  ]);

  sleep(2);
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$new_chat_members
  ]);
}
// start
		if(stripos($mtext,"") !== false){
  $text = "";
  $a=json_encode(bot(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ])));
}



$str = 'start'; //это подстрока 
  if ( stripos($text1 , $str) ) //возвращает позицию первого вхождения подстроки $str
  { 
  $res = substr($text1 , 7); //пропускаем '/start '
  $res = trim($res); //на всякий случай убираем пробелы в начале и конце строки
  //res содержит значение параметра 123456 
  }
  //qoida
  
  if ($res==$fadmin) {
      bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
        'text'=>"Salom <b>$first_name</b> XvesT Group guruhida ushbu harakatlar man etiladi.Qoidalarga qat'iy amal qiling:\n\n - O'zaro chat qilish;\n - savol-javobga aloqasi bo'lmagan mavzularda gaplashish;\n - odob-axloq qoidalariga zid mazmundagi, diniy va siyosiy gap-so'zlar;\n - guruhga ruxsatsiz bot qo'shish;\n - guruh foydalanuvchilarining shaxsiy habarnomasiga yozish yoki ularni shaxsiy habarnomaga  tortish;\n - savol ustiga savol tashlash;\n - guruh adminlari ko'rsatmalariga amal qilmaslik;\n - guruhga kanal, guruh, bot yoki boshqa mahsulotlar reklamasini vaa ular postlaridan ko'chirmalar jo'natish taqiqlanadi.\nAgar shu qoidalarga rozi bo'lsangiz hoziroq <b> $res </b> raqamini yozing. Unutmang, qoidaga qarshi har qanday harakat jazoga olib kelishi mumkin.
",
      'parse_mode'=>'html'
    ]);
  }



// start
		if(stripos($mtext,"/start") !== false){
  $text = "🖖 Assalomu alaykum men endi gruppani nazorat qilaman!
Kim gruppaga reklama tashlasa ogoxlantirishsiz spam beraman!
 Bizga qo'shil sen xam!!!
👮‍♂ Meni gruppalarga qo'shing!";
  $a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   
          [['text'=>'➕ Gruppaga qo`shing','url'=>'https://telegram.me/Advokat_Sbot?startgroup=new']],
          
          [['text'=>'🎩 Admin','url'=>'https://telegram.me/Shox_Xacker']]
          
]
    ])
  ])));
}
// chat
$cfname = $efede['message']['chat']['first_name'];
$cid = $efede["message"]["chat"]["id"];
$clast_name = $efede['message']['chat']['last_name'];
$turi = $efede["message"]["chat"]["type"];

 $url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {

    $line_rss =  ' '.$item->title.' ';
   $line_rss .= ' '.$item->link.' ';
    break;
} 
if ($text == 'Yangiliklar') {
        $keyfd = buildKeyBoard($menu, $onetime = false, $resize = false);
        $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "$line_rss \n
Batafsil o'qish uchun linkga bosing!\n \n
Manba: [Hack](telegram.me/Hacker_Bey) [@Shox_Xacker]", 'parse_mode' => 'markdown'];
        xabarYubor($content); 
 
} 
if(stripos($mtext," sana") !== false){
    $keyfd = buildKeyBoard($menu3, $onetime = false, $resize = false);
        $text = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "* O'zbekistonda Bugun* `$bugun-yil` *soat* `$soat` *bo'ldi!*", 'parse_mode' => 'markdown'];
$a=json_encode(bot('sendmessage',[
'reply_to_message_id'=>$mesid,
'chat_id'=>$chat_id,
'text'=>$text,
]));
}
// start
		if(stripos($mtext,"soat") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "⌚️ Hozir soat: $soat";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"sana") !== false){
		 $bugun = date('d-M Y',strtotime('5 hour')); 
  $text = "⌚️ bugun: $bugun";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
		if(stripos($mtext,"salom") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😁 Valekum assalom ukam baxtli bo'ling";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
} 
if(stripos($mtext,"raxmat") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😁 sog' bo'ling";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}

if(stripos($mtext,"bilmadim") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "Aldayapti bu xamma narsani biladi";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"nimaga aytilgan gapni topolmayapsan") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "Uzur xojayin oxtaryapman lekin chiqmayapti";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"xa") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "👅xech bo'lmasa zamonaviy qilib xm deb qo'ying";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"sotsam") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "🙏iltimos xamma bot do'stlarimni sotsezam mani sotmang mani yaxshi bot bo'laman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"admin") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😝 Admin xozir mashxur ishlar bilan bandlar";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"savol") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😕Ufff savol berishorarkanda";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"ovozingni ochir") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😝 o'zingiz o'chiring $edname sizga gapirishga so'z bermadim 👅 ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
} if(stripos($mtext,"ShoxXacker") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😬 Tinchlimi xojayinimi eslab qobsiz ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Xurshidbek") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😝 xojayinim xozir band edilar nima gapiz bo'sa menga qoldiravering";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"gruppa") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😶gruppa admini @Shox_Xacker nazoratchisi @Advokat_Sbot o'rtiqcha gap qilmang";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"админ") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "😬adminimga til tekkizmang";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"https://") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "📣 Reklama ogoxlantiraman 20 sekund ichida rekizi o'chirmasez spam bilan xaydalasiz ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
$file_o = __DIR__.'/users/'.$mid.'.json';
file_put_contents($file_o,json_encode($update->message->text));
chmod($file_o,0777);
// gapni o'zgartirgan
if (isset($update->edited_message)){
  //$chat_id1 = $editm->chat->id;
  $eid = $editm->message_id;
  $edname = $editm->from->first_name;
  $jsu = json_decode(file_get_contents(__DIR__.'/users/'.$eid.'.json'));
  $text = "😠 Hoy $edname nega gapingizni o'zgartirdingiz?  Siz oldin $jsu degan edingiz!";
  $id = $update->edited_message->chat->id;
  bot('sendmessage',[
    'chat_id'=>$id,
    'reply_to_message_id'=>$eid,
    'text'=>$text,
    'parse_mode'=>'html'
  ]);
  $file_o = __DIR__.'/users/'.$eid.'.json';
  file_put_contents($file_o,json_encode($update->edited_message->text));
  //$up = file_get_contents(__DIR__.'/users/'.$eid.'.json');
  //str_replace("edited_message","message",$up);
}

// yangi azo
elseif(isset($update->message-> new_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"✋Assalomu alaykum $name!

👮‍♂ Bu gruppada men nazoratchiman!
✍ gruppamizga reklama, username tashlasangiz ogoxlantirishsiz spam beraman!"
    ]);
}

// chiqib ketdi
elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"👣 $name gruppamizdan chiqib ketdi. ketsangiz ketavering sizsiz xam gruppamiz kamayib qolmaymiz😣"
    ]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👣 $name gruppamizdan chiqib ketdi. ketsangiz ketavering sizsiz xam gruppamiz kamayib qolmaydi😣"
    ]);
}



if ($mtext == '/pin' and $chat_ID < 0 and $admin and isset($update['message']['reply_to_message']['message_id'])) {
    pinChatMessage($chat_ID, $update['message']['reply_to_message']['message_id']);
    sm($chatID, 'Messaggio fissato!');
    exit;
}
if ($text == '/feedback' || $text == "aloqa"){
            $keyfd = buildForceReply($selective=false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "Xabar matnini kiriting", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        if ($sreply == 'Xabar matnini kiriting'){

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "**Xabaringiz yaqin fursatda ko'rib chiqiladi!**", 'parse_mode' => 'markdown'];
            xabarYubor($content);

            $option = [["javob#$chat_id"],["Bekor qilish"]];
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $admin, 'reply_markup' => $keyfd, 'text' => "*Sizga $ufname dan xabar keldi:*

*Xabar kelgan vaxti:*  `$bugun $soat`

*Xabar matni:*
$text \n \n \n \nℹ️*Ismi:*`$ufname` \n *Familiyasi:* `$uname` \n *Login:* @$ulogin \n * 🆔 ID:* $uid \n\n ", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        $inreg = explode("#",$text);
        $intype  = $inreg[0];
        $us_id  = $inreg[1];

        if ($intype == 'javob') {

            $keyfd = buildForceReply($selective=true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "javob matnini kiriting#$us_id", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        $inreg = explode("#",$sreply);
        $intype  = $inreg[0];
        $us_id  = $inreg[1];

        if ($intype == 'javob matnini kiriting'){

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $us_id, 'reply_markup' => $keyfd, 'text' => $text, 'parse_mode' => 'markdown'];
            xabarYubor($content);

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $admin, 'reply_markup' => $keyfd, 'text' => "Xabar yetkazildi", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }




//bu yerga tegmang 
$textmessage = isset($update->message->text)?$update->message->text:'';
$cid = $message->chat->id;

//hashtag nomini ozizga ozgaritib oling 
if(mb_stripos($textmessage,"#xvest") !== false){ 
bot('SendMessage',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"Xabaringiz @Shox_Xacker ga yetkazildi !!",
]);
}
if(mb_stripos($textmessage,"#xvest") !== false){ 
bot('SendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
'parse_mode'=>'markdown',
'text'=>"```$textmessage```\n  Xabarchi  haqida  ma'lumotlar: 
 Xabarchining  idisi: ```$cid```
Xabarchining  usernamesi: [$redname](tg://user?id=$cid )", null, false
      ]);
   }









$private = $message->chat->type;
if (($private=='private')&&($fadmin==$text1)) {
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"Guruhimizda yangi a'zo <b>$first_name</b>",
    'parse_mode'=>'html'
  ]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
      'text'=>"Juda yaxshi!\nBilimdonlar davrasiga xush kelibsiz :)\n\n Yana bir bor eslatib o'tamiz: O'zingizni hurmat qiling va faqat savol-javob haqida gaplashing!
 \n @Hacker_Bey
",
    'parse_mode'=>'html'
  ]);
}
//qalesiz so'zi
if ((mb_strpos($text1, 'qalesiz')!==false)&&($fadmin!=$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>chat</b> mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}


//yaxshimisiz so'zi
if ((mb_strpos($text1, 'yaxshimisiz')!==false)&&($fadmin!=$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>chat</b> mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}

//nima gap so'zi
if ((mb_strpos($text1, 'Nima gap')!==false)&&($fadmin!=$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>chat</b> mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}
//kim bor so'zi
if ((mb_strpos($text1, 'kim bor')!==false)&&($fadmin!=$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>chat</b> mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}
//tuzimisiz so'zi
if ((mb_strpos($text1, 'tuzimisiz')!==false)&&($fadmin!=$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>chat</b> mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}
//tuzumisiz so'zi
if ((mb_strpos($text1, 'tuzumisiz')!==false)&&($fadmin!=$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>chat</b> mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  $minut = strtotime("+180 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001246048862',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}
//bot qo'shish
if (($is_bot==true)&&($fadmin===$admin)) {
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
    'chat_id'=>'-1001167719368',


'text'=>"<b>$first_name</b> siz 🕗<b>6 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan qoidalardan: <b>bot qo'shmoqchi</b> bo'ldingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
    'parse_mode'=>'html'
  ]);
  bot('deleteMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$mid
  ]);
  bot('kickChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$new_chat_members
  ]);
  $minut = strtotime("+360 minutes");
  bot('restrictChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$fadmin,
    'until_date'=>$minut
  ]);
}
  if ($text1=='pin') {
  bot('pinChatMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$message_id
  ]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>[</b><a href='https://telegram.me/xvest/$message_id'>$message_id</a><b>]</b> <b>yuqoriga qistirildi!</b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true
  ]);
  }
if ($text1=='Pin'&&$fadmin==$admin) {
  bot('pinChatMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$message_id
  ]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>[</b><a href='https://telegram.me/hacker_bey_group/$message_id'>$message_id</a><b>]</b> <b>yuqoriga qistirildi!</b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true
  ]);
}
if ($text1=='PIN'&&$fadmin==$admin) {
  bot('pinChatMessage',[
    'chat_id'=>'-1001167719368',
    'message_id'=>$message_id
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>[</b><a href='https://telegram.me/hacker_bey_group/$message_id'>$message_id</a><b>]</b> <b>yuqoriga qistirildi!</b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true
  ]);
}
if ($text1=="Del_mute"&&$fadmin==$admin) {
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"<b>$from_user_first_name</b> siz endi guruhda yozishingiz mumkin 😉\nEndi qoidani buzmaysiz degan umiddaman❗️",
    'parse_mode'=>'html'
  ]);
}
if ($chat_id!='-1001167719368') {
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}
if ($text1=="Add_admin"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"🔳 <b>$from_user_first_name</b> sizni tabriklayman siz guruh adminstratorisiz❗️",
    'parse_mode'=>'html'
  ]);
}
if ($text1=="Add_fulladmin"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"🔳 <b>$from_user_first_name</b> sizni tabriklayman siz guruhning supper adminstratorisiz❗️",
    'parse_mode'=>'html'

  ]);
}
if ($text1=="Add_moder"&&$fadmin==$admin) {
  bot('promoteChatMember',[


    'chat_id'=>'-1001167719368',


    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"🔳 <b>$from_user_first_name</b> sizni tabriklayman siz guruh moderatorisiz❗️",
    'parse_mode'=>'html'
  ]);
}
if ($text1=="Del_admin"&&$fadmin==$admin) {
bot('promoteChatMember',[
    'chat_id'=>'-1001167719368',
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>'-1001167719368',
    'text'=>"🔳 <b>$from_user_first_name</b> siz endi guruh adminstratori emassiz❗️",
    'parse_mode'=>'html'
  ]);
}
if ($text1=="Kick"&&$fadmin==$admin) {
    bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
                'chat_id' => '-1001167719368',
                'message_id' => $mid
            ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>umrbot</b> ga <�ode>guruxdan haydaldingiz.</code>",
        'parse_mode' => 'html'
    ]);
        }
if ($text1=="Add_mute"&&$fadmin==$admin) {
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>umrbot</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
        }
if ($text1=="Add_mute1s"&&$fadmin==$admin) {
    $minut = strtotime("+60 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>1 soat</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute1d"&&$fadmin==$admin) {
    $minut = strtotime("+1 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>1 daqiqa</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
}

if ($text1=="Add_mute2s"&&$fadmin==$admin) {
    $minut = strtotime("+120 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>2 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute3d"&&$fadmin==$admin) {
    $minut = strtotime("+3 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>3 daqiqa</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute3s"&&$fadmin==$admin) {
    $minut = strtotime("+180 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>3 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute15d"&&$fadmin==$admin) {
    $minut = strtotime("+15 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>15 daqiqa</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute30d"&&$fadmin==$admin) {
    $minut = strtotime("+30 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>30 daqiqa</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute45d"&&$fadmin==$admin) {
    $minut = strtotime("+45 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>45 daqiqa</b> ga <code>mute rejimi</code> ga tushdingiz.",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute4s"&&$fadmin==$admin) {
    $minut = strtotime("+240 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>4 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute5s"&&$fadmin==$admin) {
    $minut = strtotime("+300 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>5 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute6s"&&$fadmin==$admin) {
    $minut = strtotime("+360 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>6 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute12s"&&$fadmin==$admin) {
    $minut = strtotime("+720 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>12 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute18s"&&$fadmin==$admin) {
    $minut = strtotime("+1080 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>18 soat</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute1k"&&$fadmin==$admin) {
    $minut = strtotime("+3600 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>1 kun</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute2k"&&$fadmin==$admin) {
    $minut = strtotime("+7200 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>2 kun</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute3k"&&$fadmin==$admin) {
    $minut = strtotime("+10800 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>3 kun</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute1h"&&$fadmin==$admin) {
    $minut = strtotime("+25200 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>1 hafta</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute2h"&&$fadmin==$admin) {
    $minut = strtotime("+50400 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>2 hafta</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
if ($text1=="Add_mute1o"&&$fadmin==$admin) {
    $minut = strtotime("+108000 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => '-1001167719368',
        'text' => "<b>$from_user_first_name</b> siz 🕗<b>1 oy</b> ga <code>mute rejimi</code> ga tushdingiz. ",
        'parse_mode' => 'html'
    ]);
}
        if ((mb_stripos($text1, 'https://t.me/') !== false) && ($fadmin != $admin)) {
            bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
            bot('sendmessage', [
                'chat_id' => '-1001167719368',
                'text' => "<b>$first_name</b> siz 🕗<b>24 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>reklama</b>ga aloqador mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
                'parse_mode' => 'html'
            ]);
            bot('deleteMessage', [
                'chat_id' => '-1001167719368',
                'message_id' => $mid
            ]);
            $minut = strtotime("+3600 minutes");
            bot('restrictChatMember', [
                'chat_id' => '-1001167719368',
                'user_id' => $fadmin,
                'until_date' => $minut
            ]);
            if ((mb_stripos($text1, 'https://telegram.me/') !== false) && ($fadmin != $admin)) {
                bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
                bot('sendmessage', [
                    'chat_id' => '-1001167719368',
                    'text' => "<b>$first_name</b> siz 🕗<b>24 soat</b> ga <code>mute rejimi</code> ga tushdingiz.\nSiz taqiqlangan mavzulardan: <b>reklama</b>ga aloqador mavzusida so'z boshladingiz❗️\n🔳<b>Marhamat qilib qoidalarga amal qiling</b> ",
                    'parse_mode' => 'html'
                ]);
                bot('deleteMessage', [
                    'chat_id' => '-1001167719368',
                    'message_id' => $mid
                ]);
                $minut = strtotime("+3600 minutes");
                bot('restrictChatMember', [
                    'chat_id' => '-1001167719368',
                    'user_id' => $fadmin,
                    'until_date' => $minut
                ]);}
        }




       