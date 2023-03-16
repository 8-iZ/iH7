<?php

	
// VERIFICATION OF BOT IN DATABASE
$DBbot = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$botID'");
    if (mysqli_num_rows ($DBbot) == 0) {
        sndE($C,'Ошибка доступа');
    } else {
    $bot = mysqli_fetch_assoc ($DBbot);
        $type = $bot['type'];
        $admin = $bot['master'];
    }

// VERIFICATION OF BOT SWITCHER
if ($bot['switcher'] == '0'){ 
    if ($admin == $C){
        $ttl = 'ВКЛЮЧИТЬ❇️';
        $cb='BTNONN';
            $BTN = array ("text" => $ttl, "callback_data" => $cb);
                $menu = json_encode(array("inline_keyboard" => [[$BTN]]));
        sMsg($C,'ВНИМАНИЕ! Бот в режиме "Технических работ". Не забудьте включить его по завершению настройки!',$menu);
} else {
        sMsg($C,'Бот временно не функционирует; вероятно, проводятся технические работы. Возвращайтесь немного позднее или попробуйте поискать аналогичные товары/услуги у наших коллег, воспользовавшись каталогом',$KatM);
            $m = 'BREAK'; }}
	
// VERIFICATION OF USER IN DATABASE
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$C'");
    if (mysqli_num_rows ($DBuser) == 0) {
	   $res = strpos($message, '/start');
	   if ($res === 0){
            $log = $time.'-start-'.$botID;
                mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log) VALUES ('$C','$first_name','$last_name','$u','1','0.00','0','$botID','RU','$log')"); 
            $DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$C'");
            $user = mysqli_fetch_assoc ($DBuser);
       }else {
            $log = $time.'-ban-'.$botID;
                mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log,ban) VALUES ('$C','$fn','$ln','$u','0','0.00','0','$botID','RU','$log',1)");
            include ($iHroot.'/library/error/local.lib');
            sMsg($C, $E604, $BanM);
    $m = 'BREAK';}}
        else {
            $user = mysqli_fetch_assoc ($DBuser);
              $temp = $user['temp'];
                if ($user['ban']===1){
                    sMsg($C, 'You was banned and can not use this bot and others provided by our service platform. You should contact the support service or you can try later', $BanM); $m = 'BREAK';}}

// VERIFICATION IF BOT IS ASSOCIATED WITH ITS ADMINISTRATOR
if (empty ($admin) AND $message == '/start'){
    sMsg($c, 'У данного бота не обнаружен администратор. Если им являетесь вы, пришлите в ответном сообщении токен бота или перешлите сообщение от @botfather в котором он содержится', $bkM);
        $temp = 'IFA='.$botID;
    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
    $m = 'BREAK';}

// TOKEN DETECTION IN RECEIVED MESSAGE 
preg_match ('/[0-9]{9,11}:[a-zA-Z0-9_-]{35}/', $message, $tok);
if(! empty ($tok[0]) AND ! empty ($temp)){
	$tkn = $tok[0];
	if ($tkn == $T AND strpos($temp, $botID) === 4){
		mysqli_query($q, "UPDATE bots SET master = '$C' WHERE id = '$botID'");
		mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$C'");
		sMsg($C,'Поздравляем, вы подтвердили что являетесь владельцем данного бота',$CPM);
		$m = 'BREAK';}
	elseif ($tkn !== $T AND strpos($temp, 'iH6=') !== false){
	    list ($sub,$ttl) = explode ('=',$temp);
	    if(strpos($message, $TgSH) !== false){
	       list($sub1,$sub2) = explode($TgSH.'/',$message);
	       list($nick,$sub3) = explode ('. Y',$sub2);
	       list($newB,$nkey) = explode (':',$tkn);
	           $DBnew = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$newB'");
	           if (mysqli_num_rows ($DBnew) == 0) {
                   $log =  $time.' botStart '.$botID;
	               mysqli_query($q, "INSERT INTO bots (id, title, master, status, nick, log, skey,switcher) VALUES ('$newB', '$ttl', '$C', '2', '$nick', '$log', '$nkey', '1')");
                 	sMsg($C,'Теперь можете написать небольшое описание к вашему боту - пару слов о его назначении, контактные данные или слоган вашего проекта. А можно просто нажать кнопку "пропустить" и сразу перейти к следующему этапу.',$PassM);
            		$temp = 'iH6='.$newB.'&info=';
                    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
                $m = 'BREAK';}}}}

?>