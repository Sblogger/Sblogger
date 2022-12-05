<?php
date_default_timezone_set("asia/Dushanbe");
$token = ('5889018869:AAHVGA1UFEcSuwZj37H9YaSwwJFPLkmfzAo');
$admin = ("5273786010");

#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #




function bot($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".$token."/".$method;
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



function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
    
   
 
 
 

function file_get($local){
global $cid;
return file_get_contents($local);
}

function file_put($loaction,$file){
global $cid;
return file_put_contents($loaction,$file);
}


 

$update  = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$cid  = $update->message->chat->id;
$fid  = $update->message->from->id;
$text  = $update->message->text;
$photo = $update->message->photo;
$getText  = $update->message->text;
$name = $update->message->first_name;
$user = $update->message->from->username;
$mid  = $update->message->message_id;
$name  = $update->message->from->first_name;
$type  = $update->message->chat->type;
$message = $update->message;
}
#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #
if(isset($update->callback_query)){
  $cid = $update->callback_query->message->chat->id;
  $qid = $update->callback_query->id;
  $fid = $update->callback_query->from->id;  
  $data = $update->callback_query->data;  
  $mid2 = $update->callback_query->message->message_id;
  $mid = $update->callback_query->message->message_id;
}

@mkdir(step);
@mkdir(res);
$step = file_get("step/$cid.txt");
$from = file_get("res/$cid.from");
$to = file_get("res/$cid.to");

if(mb_stripos($text,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="n$cid";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if(mb_stripos($text,"/stat")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx = "<b>📡 Botdan foydalanayotgan
      
👥 Guruhlar: $gr ta

👤 Userlar: $us ta

🔁 Hammasi bõlib: $all ta </b>";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$tx,
  ]);
}

if($text == "/help"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🛂Qo'llanma bilan tanishing! 

1. Tarjima tilini to'g'ri tanlab oling,
 /mode buyrug'i orqali yoki xabar kiritish maydonidagi knopkalar orqali.

2. Qisqa matnlardan foydalaning, 600 ta belgidan oshgan matnlar kesib tashlanadi.

3. Rasmni tarjima qilish uchun yozuvlari fonga aralashib ketmagan, tiniq va to'g'ri rasmga olingan foto jo'nating.(tamir!)

4. Matnlarni bexato yozib jo'nating, shevada, jargonda yozilgan matnlarni tarjimon tushunmaydi.

5. Ushbu botni ko'proq gruppalar va do'stlaringizga tarqating, qancha ko'p xabar jo'natilsa bot tarjima qilishni shuncha yaxshi o'rganadi.


@Oddiygina_Qalblar kanali admini..!
",
parse_mode=>html,
]);
}

#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #

if($text == "/start"){
   if(mb_stripos($baza,$cid) !==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Salom hurmatli foydalanuvchi
 🔗 Tarjima uchun tilni tanlang!",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
///[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]); 
}else{
 file_get_contents("azo.dat","true");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima qilishda sizga yordam beraman! Tarjimangiz sifatli bo'lishi uchun:

1. Tarjima tilini to'g'ri tanlab oling, /mode buyrug'i orqali yoki xabar kiritish maydonidagi knopkalar orqali.

2. Qisqa matnlardan foydalaning, 600 ta belgidan oshgan matnlar kesib tashlanadi.

3. Rasmni tarjima qilish uchun yozuvlari fonga aralashib ketmagan, tiniq va to'g'ri rasmga olingan foto jo'nating.

4. Matnlarni bexato yozib jo'nating, shevada, jargonda yozilgan matnlarni tarjimon tushunmaydi.

5. Ushbu botni ko'proq gruppalar va do'stlaringizga tarqating, qancha ko'p xabar jo'natilsa bot tarjima qilishni shuncha yaxshi o'rganadi.!
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]); 
}
}
#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #

if($text == "/mode"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🔗 Tarjima yo'nalishini tanlang ",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
]])
]); 
file_put("step/$cid.txt","");
unlink("step/$cid.txt","");
}

if($step=="cril"){
if(mb_stripos($text,"⚪")!==false or mb_stripos($text,"🟢")!==false or mb_stripos($text,"/")!==false){
}else{
$text=str_replace('қ','q​',$text);
$text=str_replace('я','ya',$text);
$text=str_replace('е','e​',$text);
$text=str_replace('р','r​',$text);
$text=str_replace('т','t​',$text);
$text=str_replace('й','y​',$text);
$text=str_replace('у','u​',$text);
$text=str_replace('и','i​',$text);
$text=str_replace('о','o​',$text);
$text=str_replace('п','p',$text);
$text=str_replace('а','a​',$text);
$text=str_replace('с','s',$text);
$text=str_replace('д','d',$text);
$text=str_replace('ф','f',$text);
$text=str_replace('г','g​',$text);
$text=str_replace('х','h​',$text);
$text=str_replace('ж','j​',$text);
$text=str_replace('к','​k',$text);
$text=str_replace('л','l​',$text);
$text=str_replace('з','z​',$text);
$text=str_replace('ҳ','x',$text);
$text=str_replace('с','c​',$text);
$text=str_replace('в','v',$text);
$text=str_replace('б','b​',$text);
$text=str_replace('н','n​',$text);
$text=str_replace('м','m​',$text);
$text=str_replace('ё','yo​',$text);
$text=str_replace('ғ','g‘​',$text);
$text=str_replace('ъ','‘​',$text);
$text=str_replace('ш','sh',$text);
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>$text,
]);
}}

if($step=="lotin"){
if(mb_stripos($text,"⚪")!==false or mb_stripos($text,"🟢")!==false or mb_stripos($text,"/")!==false){
}else{
$text=str_replace('Q','қ​',$text);
$text=str_replace('ya','я',$text);
$text=str_replace('e','е​',$text);
$text=str_replace('r','р​',$text);
$text=str_replace('t','т​',$text);
$text=str_replace('y','й​',$text);
$text=str_replace('u','у​',$text);
$text=str_replace('i','и​',$text);
$text=str_replace('o','о​',$text);
$text=str_replace('p','п',$text);
$text=str_replace('a','а​',$text);
$text=str_replace('S','с',$text);
$text=str_replace('d','д',$text);
$text=str_replace('f','ф',$text);
$text=str_replace('g','г​',$text);
$text=str_replace('h','х​',$text);
$text=str_replace('J','ж​',$text);
$text=str_replace('k','​к',$text);
$text=str_replace('l','л​',$text);
$text=str_replace('z','з​',$text);
$text=str_replace('x','х',$text);
$text=str_replace('v','в',$text);
$text=str_replace('b','б​',$text);
$text=str_replace('N','н​',$text);
$text=str_replace('m','м​',$text);
$text=str_replace('yo','ю​',$text);
$text=str_replace("g'","ғ",$text);
$text=str_replace("'","ь",$text);
$text=str_replace('sh','ш',$text);
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>$text,
]);
}
}

if($text == "⚪ Lotin-Cril"){
file_put("step/$cid.txt","lotin");

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Endi menga xabar jonating!
Lotin => Cril ga o'giraman",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
//[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
[["text"=>"🟢 Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}

if($text == "⚪ Cril-Lotin"){
file_put("step/$cid.txt","cril");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Endi menga xabar jonating!
Cril => Lotin ga o'giraman",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
///[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
[["text"=>"⚪ Lotin-Cril"],['text'=>"🟢 Cril-Lotin"]],
]])
]);
}

if(mb_stripos($text,"🟢")!==false){
if($text == "⚪"){
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"$from-$to tarjima uchun matn yoki rasm yuboring!",
'parse_mode'=>"html",
]);
}}

if($text == "⚪ Uz-En"){
file_put("step/$cid.txt","translator");
file_put("res/$cid.from","uz");
file_put("res/$cid.to","en");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"🟢 Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}

if($text == "⚪ En-Uz"){
file_put("step/$cid.txt","translator");
file_put("res/$cid.from","en");
file_put("res/$cid.to","uz");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"🟢 En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}

if($text == "⚪ Uz-Ru"){
file_put("step/$cid.txt","translator");
file_put("res/$cid.from","uz");
file_put("res/$cid.to","ru");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"🟢 Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}

if($text == "⚪ Ru-Uz"){
file_put("step/$cid.txt","translator");
file_put("res/$cid.from","ru");
file_put("res/$cid.to","uz");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"🟢 Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
///[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}
if($text == "⚪ En-Ru"){
file_put("step/$cid.txt","translator");
file_put("res/$cid.from","en");
file_put("res/$cid.to","ru");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"🟢 En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}
if($text == "⚪ Ru-En"){
file_put("res/$cid.from","ru");
file_put("res/$cid.to","en");
file_put("step/$cid.txt","translator");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"🟢 Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}
#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #
if($text == "⚪ Uz-Ar"){
file_put("res/$cid.from","uz");
file_put("res/$cid.to","ar");
file_put("step/$cid.txt","translator");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"🟢 Uz-Ar"],["text"=>"⚪ Ar-Uz"],],
///[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}

if($text == "⚪ Ar-Uz"){
file_put("res/$cid.from","ar");
file_put("res/$cid.to","uz");
file_put("step/$cid.txt","translator");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Tarjima uchun matn yoki rasm yuboring",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"⚪ Uz-En"],["text"=>"⚪ En-Uz"],],
[["text"=>"⚪ Uz-Ru"],["text"=>"⚪ Ru-Uz"],],
[["text"=>"⚪ En-Ru"],["text"=>"⚪ Ru-En"],],
[["text"=>"⚪ Uz-Ar"],["text"=>"🟢 Ar-Uz"],],
//[["text"=>"⚪ Lotin-Cril"],['text'=>"⚪ Cril-Lotin"]],
]])
]);
}

if($photo){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"❌ Kechirasiz men hozirda !
Rasmni o'qiy olmayman!",
'parse_mode'=>"markdown",
]);
}

if($step == "translator" and $text !=="/stat" and $text !=="/panel" and $text !=="/help" and $text !="/start" and $text !=="/mode" and !$photo){
if(mb_stripos($text,"⚪")!==false or mb_stripos($text,"🟢")!==false){
}else{
$str = strlen($text);
if($str <= 600){
$text = str_replace(' ',"+",$text);
$tr = file_get_contents("http://coderoff.uzxost.ru/Tarjima_api/apiga.php?Language=$from&TO=$to&text=$text");
$tr = str_replace('_',"\n",$tr);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>$tr,
'parse_mode'=>"markdown",
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"❌ | Matinda minimal belgilar 600 tagacha bolishi lozim!",
'parse_mode'=>"markdown",
]);
}
}
}

#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #

/////panel

$update = json_decode(file_get_contents('php://input'));
$admin = "5273786010";
//$adminn = "1999061722";
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$tx = $message->text;
$text= $message->text;
$ism = file_get_contents("Veb_code/$cid.ism");
$sguruhlar = file_get_contents("Stat/sguruh.dat");
$lichka = file_get_contents("Stat/lichka.dat");
$guruhlar = file_get_contents("Stat/guruh.dat");
$kanallar = file_get_contents("Stat/kanallar.dat");
///$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/$cid.step3");
$step1 = file_get_contents("Bot/$chat_id2.step");
$name = $message->chat->first_name;
$user = $message->from->username;
$soat = date('H•i', strtotime('2 hour'));
mkdir("Bot");
mkdir("Stat");
mkdir("Veb_code");

$adminpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔰 Azolarga Xabar"],['text'=>"🔰Azolarga forward"]],
[['text'=>"🔰 Guruhga Xabar"],['text'=>"🔰Guruhga forward"]],
[['text'=>"🔰 Shaxsiy Guruhlarga Xabar"]],
[['text'=>"🔰 Shaxsiy Guruhlarga forward"]],
[['text'=>"📗 Statistika"],['text'=>"🔙Orqaga"]],
/*[['text'=>"✅Admin qo`shish"], 
['text'=>"❌Admindan olish"]], 
[['text'=>"🔰Adminlar"]]*/
]
]);



$ort = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❌Bekor qilish"]],
]
]);


if($text=="/panel" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Panel ochildi!",
'reply_markup'=>$adminpanel,
]);
file_put("step/$cid.txt","");
unlink("step/$cid.txt","");
}





$lichka = file_get_contents("Stat/lichka.dat");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("Stat/lichka.dat","$lichka\n$cid");
}
}

$sguruhlar = file_get_contents("Stat/sguruh.dat");
if($type=="group"){
if(stripos($sguruhlar,"$cid") !==false){
}else{
file_put_contents("Stat/sguruh.dat","$sguruhlar\n$cid");
}
}

$guruhlar = file_get_contents("Stat/guruh.dat");
if($type=="supergroup"){
if(stripos($guruhlar,"$cid") !==false){
}else{
file_put_contents("Stat/guruh.dat","$guruhlar\n$cid");
}
}

$kanallar = file_get_contents("Stat/kanallar.dat");
if($type=="channel"){
if(stripos($kanallar,"$cid") !==false){
}else{
file_put_contents("Stat/kanallar.dat","$kanallar\n$cid");
}
}



if($tx=="🔰Azolarga forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step3","forward");
}

if($step3=="forward" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarok){
$us = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $us ta bot a'zolariga yetkazildi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}





if($tx=="🔰Guruhga forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step3","12");
}

if($step3=="12" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$guruhlarim = explode("\n",$guruhlar);
foreach($guruhlarim as $guruhs){
$xabarokkk=bot('ForwardMessage',[
'chat_id'=>$guruhs,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarokkk){
$gr = substr_count($guruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $gr ta ommaviy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}

if($tx=="🔰 Shaxsiy Guruhlarga forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step3","forwardsgr");
}

if($step3=="forwardsgr" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$sguruhlarim = explode("\n",$sguruhlar);
foreach($sguruhlarim as $sguruhs){
$sxabarokkk=bot('ForwardMessage',[
'chat_id'=>$sguruhs,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($sxabarokkk){
$sgr = substr_count($sguruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $sgr ta shaxsiy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}


if($tx=="❌Bekor qilish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*❌ Xabar yuborish bekor qilindi✅*",
'parse_mode'=>'markdown',
'reply_markup'=>$adminpanel,
]);
}


///oddiy xabar
if($tx=="🔰 Azolarga Xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step3","oddiy");
}

if($step3=="oddiy" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarok){
$us = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $us ta bot a'zolariga yetkazildi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}

///oddiy guruhga

if($tx=="🔰 Guruhga Xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step3","1202");
}

if($step3=="1202" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$guruhlarim = explode("\n",$guruhlar);
foreach($guruhlarim as $guruhs){
$xabarokkk=bot('sendmessage',[
'chat_id'=>$guruhs,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarokkk){
$gr = substr_count($guruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $gr ta ommaviy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}


///odiy shaxsiy guruhga

if($tx=="🔰 Shaxsiy Guruhlarga Xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step3","forwardsgr1");
}

if($step3=="forwardsgr1" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$sguruhlarim = explode("\n",$sguruhlar);
foreach($sguruhlarim as $sguruhs){
$sxabarokkk=bot('sendMessage',[
'chat_id'=>$sguruhs,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($sxabarokkk){
$sgr = substr_count($sguruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $sgr ta shaxsiy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}



if($text == "📗 Statistika" and $cid==$admin){
$date = date('d.m.Y - H:s a');
$gr = substr_count($guruhlar,"\n");
$lc = substr_count($lichka,"\n");
$sgr = substr_count($sguruhlar,"\n");
$kn = substr_count($kanallar,"\n");
bot('SendMessage',[
'chat_id'=>$cid,
parse_mode=>html, 
'text'=>"
⏳ Hozirgi $date vaqtiga ko'ra umumiy obunachilar $lc ta
🔰 Ommaviy guruhlar : $gr ta
🔰 Shaxsiy guruhlar : $sgr ta",
]);
}







if($text=="🔙Orqaga"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Panel yopildi :)",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
]);
#Ushbu kod @veb_code firdavs jurayev tomondan dasturlandi #
#Manbaa @phpuzkod va @php_bot_kodlari#
#Yaxshilikka ishlating! manbaa qolsin alloh guvoh #
}
