<?php

if ($bot['switcher'] == '0'){ 
if ($bot['master'] == $c){
$ttl = 'ВКЛЮЧИТЬ❇️';$cb='BTNONN';
$BTN = array ("text" => $ttl, "callback_data" => $cb);
$menu = json_encode(array("inline_keyboard" => [[$BTN]]));
sMsg($c,'ВНИМАНИЕ! Бот в режиме "Технических работ". Не забудьте включить его по завершению настройки!',$menu);
}else{
sMsg($c,'Бот временно не функционирует; вероятно, проводятся технические работы. Возвращайтесь немного позднее или попробуйте поискать аналогичные товары/услуги у наших коллег, воспользовавшись каталогом',$KatM);
$m = '/break';}}
	
// VERIFICATION OF USER IN DATABASE
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
    if (mysqli_num_rows ($DBuser) == 0) {
	   $res = strpos($m, '/start');
	   if ($res === 0){
            $log = $time.'-start-'.$botID;
                mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log) VALUES ('$c','$first_name','$last_name','$u','1','0.00','0','$botID','RU','$log')"); 
            $DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
            $user = mysqli_fetch_assoc ($DBuser);
       }else {
            $log = $time.'-ban-'.$botID;
                mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log,ban) VALUES ('$c','$fn','$ln','$u','0','0.00','0','$botID','RU','$log',1)");
            include ($root.'iH6/library/error/local.lib');
            sMsg($c, $E604, $BanM);
    exit;}}
        else {
            $user = mysqli_fetch_assoc ($DBuser);
                if ($user['ban']===1){
                    sMsg($c, 'You was banned and can not use this bot and others provided by our service platform. You should contact the support service or you can try later', $BanM); exit;}}

// VERIFICATION IF BOT IS ASSOCIATED WITH ITS ADMINISTRATOR
if (empty ($bot['master']) AND $message == '/start'){
    sMsg($c, 'У данного бота не обнаружен администратор. Если им являетесь вы, пришлите в ответном сообщении токен бота или перешлите сообщение от @botfather в котором он содержится', $bkM);
        $temp = 'IFA='.$botID;
    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
    $m = '/break';}

// TOKEN DETECTION IN RECEIVED MESSAGE 
preg_match ('/[0-9]{9,11}:[a-zA-Z0-9_-]{35}/', $message, $tok);

if(! empty ($tok[0]) AND ! empty ($user['temp'])){
	$tkn = $tok[0];
	if ($tkn == $token AND strpos($user['temp'], $botID) === 4){
		mysqli_query($q, "UPDATE bots SET master = '$c' WHERE id = '$botID'");
		mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");
		sMsg($c,'Поздравляем, вы подтвердили что являетесь владельцем данного бота',$CPM);
		$m = '/break';}
	elseif ($tkn !== $token AND strpos($user['temp'], 'iH6=') !== false){
	    list ($sub,$ttl) = explode ('=',$user['temp']);
	    if(strpos($message, $TgSH) !== false){
	       list($sub1,$sub2) = explode($TgSH.'/',$message);
	       list($nick,$sub3) = explode ('. Y',$sub2);
	       list($newB,$nkey) = explode (':',$tkn);
	           $DBnew = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$newB'");
	           if (mysqli_num_rows ($DBnew) == 0) {
                   $log =  $time.' botStart '.$botID;
	               mysqli_query($q, "INSERT INTO bots (id, title, master, status, nick, log, skey,switcher) VALUES ('$newB', '$ttl', '$c', '2', '$nick', '$log', '$nkey', '1')");
                 	sMsg($c,'Теперь можете написать небольшое описание к вашему боту - пару слов о его назначении, контактные данные или слоган вашего проекта. А можно просто нажать кнопку "пропустить" и сразу перейти к следующему этапу.',$PassM);
            		$temp = 'iH6='.$newB.'&info=';
                    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
                $m = '/break';}}}}
// SOME DEFAULT TEXT TEMPLATES FOR COMMANDS ANSWERS
$CPTXT = '👋🏻Приветствую вас, Мастер '.$first_name.' '.$last_name.'!'.PHP_EOL.'СЕЙЧАС: '.$clock.PHP_EOL.'Хорошего дня и успехов, бро!';
$HIUTXT = '👋🏻<i>Приветствуем, пользователь  <b>'.$first_name	.' '.$last_name.'</b>! '.PHP_EOL.'Добро пожаловать на автоматизированный сервис <b>"'.$title.'"</b></i>';
$MYPTXT = 'Пользователь: '.$first_name	.' '.$last_name.PHP_EOL.'ID: '.$user_id.PHP_EOL.PHP_EOL.'Доступный баланс:'.PHP_EOL.'💰 '.$user['balance'].'$';
$RFSTXT = '❓ Вы точно уверены, что хотите отменить заказ ❓'.PHP_EOL.'❗ При отмене заказа бот заблокирует возможность заказа на 1 минуту ❗'.PHP_EOL.PHP_EOL.'❌ После третьего отказа подряд бот заблокирует вас навсегда ❌';
$cS = 'Вы выбрали: "';
$mS = '".'.PHP_EOL.'Выберите желаемый товар из категорий ниже:';
$sS = '".'.PHP_EOL.'Выберите наиболее удобный вам район из предложенных ниже:';
$wS = '".'.PHP_EOL.'Выберите фасовку из категорий ниже:';
$ADDTXT = 'Остался последний шаг - пришли уникальные данные соответствующие выбранным категориям, которые будут зашифрованы и доступны только покупателю с аккаунтом которого при оплате будут ассоциирован секретный ключ, который расшифрует эти данные по запросу клиента.'.PHP_EOL.'ВАЖНО: в ответном сообщении должны содержаться все данные, включая координаты и изображение (заблаговременно загруженное на файлообменник, например IMGUR, и включенное в текст в виде ссылки)';
$iHLtxt = 'Вот, пожалуй, и всё! Осталось последовательно нажать на эти две кнопки ниже. Первая откроется в браузерном окне поверх мессенджера. Если сообщение в нем оповестит об успехе операции, значит все сделано верно и можно, закрыв данное окно нажать на вторую кнопку и перейти к панели управления своим ботом. Если в сообщении будет содержаться информация об ошибке, пытаться исправить ее самостоятельно не стоит; рекомендуется обратиться в нашу службу клиентской поддержки и описать подробно свои действия и текст полученный в открывшемся окне.';$iHLtxt = 'Вот, пожалуй, и всё! Осталось последовательно нажать на эти две кнопки ниже. Первая откроется в браузерном окне поверх мессенджера. Если сообщение в нем оповестит об успехе операции, значит все сделано верно и можно, закрыв данное окно нажать на вторую кнопку и перейти к панели управления своим ботом. Если в сообщении будет содержаться информация об ошибке, пытаться исправить ее самостоятельно не стоит; рекомендуется обратиться в нашу службу клиентской поддержки и описать подробно свои действия и текст полученный в открывшемся окне.';

	    $FREETXT = 'Подключайся прямо сейчас и используй стартовый набор функций совершенно бесплатно и неограниченно вне зависимости от типа бота, а, при необходимости, в любой момент, расширяй возможности платными дополнениями, выбирая только нужные тебе, или выгодно приобретя расширения <b>PRO</b> или <b>ViP</b> комплектом';
	    $TRIALTXT = 'Бесплатно опробуй весь функционал, доступный пользователям тарифа PRO в течение 7 дней или активируй пробный период тарифа ViP на 24 часа, чтобы оценить все возможности и удобства перед оплатой тарифного плана или подключением только необходимых расширений, оставаясь при этом пользователем минимального FREE тарифа.';

// NEW SESSION WITH CONTROL PANEL FOR BOT ADMINISTRATOR
if ($bot['master'] == $c & $message == '/start' OR $message == '⬅️ Назад'){
		sMsg($c,$CPTXT,$CPM);
		$m='/break';}
		
// GETTING INFORMATION ABOUT INCLUDED FEATURES IN BOT FUNCTIONS
$extDB = mysqli_query ($q, "SELECT * FROM extensions WHERE bot = '$botID'");
    $ext = mysqli_fetch_assoc($extDB);
        $locSv = $ext['loc_saver'];

// RECEIVING AND SAVING PHOTOS FROM USER IN PRIVATE
if(!empty($photo) AND $c > 0){
	$photo = array_pop($photo);
	   $ch = curl_init('https://api.telegram.org/bot' . $token . '/getFile');  
	       curl_setopt($ch, CURLOPT_POST, 1);  
	       curl_setopt($ch, CURLOPT_POSTFIELDS, array('file_id' => $photo['file_id']));
	       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	       curl_setopt($ch, CURLOPT_HEADER, false);
	       $res = curl_exec($ch);
	           curl_close($ch);
	       $res = json_decode($res, true);
	       if ($res['ok']) {
	           $dir = 'disk/user/'.$c; 
                    if(!is_dir($root.$dir)) {
                        mkdir($root.$dir, 0777, true); }
		       $src  = 'https://api.telegram.org/file/bot' . $token . '/' . $res['result']['file_path'];
		       $dest = $dir.'/'. time() . '-' . basename($src);
		            copy($src, $root.$dest);}
	       sndP($c,'https://'.$domain.'/'.$dest,'ССЫЛКА НА ВАШ ФАЙЛ:'.PHP_EOL.'https://'.$domain.'/'.$dest,$menu);
	       $m = '/break'; }
	
		
// PUBLIC CHAT MESSAGE DETECTING
if ($c < 0) { 
	$m = 'PUB';}
	
?>