<?php
$api = 'https://api.telegram.org/bot' . $token; 
include ('api.php');

if(!empty($data)){
$m = substr($data, 0, 3);
$d = substr($data, -3);
$mID = $message_id_in;
$c=$chat_id_in;}
else {
$m = $message;
$mID = $message_id;
$c=$chat_id;}

$DBbot = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$botID'");
$bot = mysqli_fetch_assoc ($DBbot);
//$type = $bot[type];
$type = 'F';
$alert = $bot['alert'];
$admin = $bot['master'];

include ('buttons.php');
	
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
if (mysqli_num_rows ($DBuser) == 0) {
	$res = strpos($m, '/start');
	if ($res === 0){
$log = $time.'-start-'.$botID;
mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log) VALUES ('$c','$first_name','$last_name','$u','1','0.00','0','$botID','RU','$log')"); 
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$user = mysqli_fetch_assoc ($DBuser);} 
else {
$log = $time.'-ban-'.$botID;
mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log,ban) VALUES ('$c','$fn','$ln','$u','0','0.00','0','$botID','RU','$log',1)");
include ('../../library/error/local.lib');
sMsg($c, $E604, $BanM);
exit;}}
else {
$user = mysqli_fetch_assoc ($DBuser);
if ($user['ban']===1){sMsg($c, 'You was banned and can not use this bot and others provided by our service platform. You should contact the support service or you can try later', $BanM); exit;}
}

if (empty ($bot['master']) AND $message == '/start'){
sMsg($c, 'У данного бота не обнаружен администратор. Если им являетесь вы, пришлите в ответном сообщении токен бота или перешлите сообщение от @botfather в котором он содержится', $bkM);
$temp = 'IFA='.$botID;
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
$m = '/break';}

preg_match ('/[0-9]{9,11}:[a-zA-Z0-9_-]{35}/', $message, $tok);
if(! empty ($tok[0]) AND ! empty ($user['temp'])){
	$tkn = $tok[0];
	if ($tkn == $token AND strpos($user['temp'], $botID) === 4){
		mysqli_query($q, "UPDATE bots SET master = '$c' WHERE id = '$botID'");
		mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");
		sMsg($c,'Поздравляем, вы подтвердили что являетесь владельцем данного бота',$CPM);
		$m = '/break';}}
		
if ($bot['master'] == $c AND $message == '/start'){
sMsg($c,'Приветствую вас, Мастер '.$first_name.' '.$last_name.'!'.PHP_EOL.'СЕЙЧАС: '.$clock.PHP_EOL.'Хорошего дня и успехов, бро!',$CPM);
	$m = '/break';}

$HIUTXT = 'Приветствую, '.$first_name	.' '.$last_name.PHP_EOL.PHP_EOL.'Добро пожаловать в магазин "'.$title.'"'.PHP_EOL.'➖➖➖➖➖➖➖➖➖'.PHP_EOL.'❗️Совершая покупки в боте ты автоматически соглашаешься с нашими правилами❗️';
$MYPTXT = 'Пользователь: '.$first_name	.' '.$last_name.PHP_EOL.'ID: '.$user_id.PHP_EOL.PHP_EOL.'Доступный баланс:'.PHP_EOL.'💰 '.$user['balance'].'$';
$RFSTXT = '❓ Вы точно уверены, что хотите отменить заказ ❓'.PHP_EOL.'❗ При отмене заказа бот заблокирует возможность заказа на 1 минуту ❗'.PHP_EOL.PHP_EOL.'❌ После третьего отказа подряд бот заблокирует вас навсегда ❌';
$cS = 'Вы выбрали: "';
$mS = '".'.PHP_EOL.'Выберите желаемый товар из категорий ниже:';
$sS = '".'.PHP_EOL.'Выберите наиболее удобный вам район из предложенных ниже:';
$wS = '".'.PHP_EOL.'Выберите фасовку из категорий ниже:';

?>
