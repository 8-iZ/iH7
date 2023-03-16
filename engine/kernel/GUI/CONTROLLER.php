<?php

                
// SOME DEFAULT TEXT TEMPLATES FOR COMMANDS ANSWERS
$CPTXT = '👋🏻Приветствую вас, Мастер '.$first_name.' '.$last_name.'!'.PHP_EOL.'СЕЙЧАС: '.date('d.m.Y l H:i').PHP_EOL.'Хорошего дня и успехов, БРО!';
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
if ($admin == $C & $message == '/start' OR $message == '⬅️ Назад'){
		sMsg($C,$CPTXT,$CPM);
		$m='BREAK';}
		
// GETTING INFORMATION ABOUT INCLUDED FEATURES IN BOT FUNCTIONS
$extDB = mysqli_query ($q, "SELECT * FROM extensions WHERE bot = '$botID'");
    $ext = mysqli_fetch_assoc($extDB);
        $locSv = $ext['loc_saver'];

// RECEIVING AND SAVING PHOTOS FROM USER IN PRIVATE
if(!empty($photo) AND $C > 0){
	$photo = array_pop($photo);
	   $ch = curl_init('https://api.telegram.org/bot' . $T . '/getFile');  
	       curl_setopt($ch, CURLOPT_POST, 1);  
	       curl_setopt($ch, CURLOPT_POSTFIELDS, array('file_id' => $photo['file_id']));
	       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	       curl_setopt($ch, CURLOPT_HEADER, false);
	       $res = curl_exec($ch);
	           curl_close($ch);
	       $res = json_decode($res, true);
	       if ($res['ok']) {
	           $dir = '/disk/user/'.$C; 
                    if(!is_dir($R.$dir)) {
                        mkdir($R.$dir, 0777, true); }
		       $src  = 'https://api.telegram.org/file/bot' . $T . '/' . $res['result']['file_path'];
		       $dest = $dir.'/'. time() . '-' . basename($src);
		            copy($src, $R.$dest);}
	       sndP($C,$WR.$dest,'ССЫЛКА НА ВАШ ФАЙЛ:'.PHP_EOL.$WR.$dest,$menu);
	       $m = 'BREAK'; }
	
if($C > 0 AND !empty($audio) OR !empty($voice)){
    if(!empty($voice)){$voice = array_pop($voice);$sound=$voFID;}else{$audio = array_pop($audio);$sound=$auFID;}
	   $ch = curl_init('https://api.telegram.org/bot' . $T . '/getFile');  
	       curl_setopt($ch, CURLOPT_POST, 1);  
	       curl_setopt($ch, CURLOPT_POSTFIELDS, array('file_id' => $sound));
	       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	       curl_setopt($ch, CURLOPT_HEADER, false);
	       $res = curl_exec($ch);
	           curl_close($ch);
	       $res = json_decode($res, true);
	       if ($res['ok']) {
	           $dir = '/disk/user/'.$C; 
                    if(!is_dir($R.$dir)) {
                        mkdir($R.$dir, 0777, true); }
		       $src  = 'https://api.telegram.org/file/bot' . $T . '/' . $res['result']['file_path'];
		       $dest = $dir.'/'. time() . '-' . basename($src);
		            copy($src, $R.$dest);}sndVo($C,$WR.$dest);

		sMsg($C,'ССЫЛКА НА ВАШ ФАЙЛ:'.PHP_EOL.$WR.$dest,$menu);
	       $m = 'BREAK'; }
		
// PUBLIC CHAT MESSAGE DETECTING
if ($C < 0) { 
	$m = 'PUB';}
	
// CATCHING AND TRANSFORMING OF   ALL MESSAGES WITH FUNCTIONS REQUIRES CONTENT: RESPONSIBLE GLOBAL (FROM MAIN FOOTER MENU) BUTTONS, CLASSIC BOT COMMANDS (BEGINS WITH "/"), SOME INLINE BUTTONS (JUST SPECIAL WITH HIGH SECURITY LEVEL OR AFTER USER  CLICK ADDITIONAL ANALYSING OR CLASSIFYING REQUIRE) AND MODERN INTELLIGENT "EASY FOR HUMAN READING/UNDERSTANDING COMMANDS" (TEXTABLE MESSAGES WITH WORD(S) FULLY CORRESPONDED  TO PRE-FORMULATED FOR CAPTURE "KEY PHRASES" ASSOCIATED WITH THEIR CLASSIC COMMANDS ANALOGS) IN SHORT 
switch ($message) {
    case '🎲 РАНДОМНЫЙ БОТ 🎲':
        $m = 'BTN'; $d = 'RANDBOT';
        break;
    case 'добавить'.PHP_EOL.'товар':
        $m = 'BTN'; $d = 'ADPADS';
        break;
    case 'CONTROL PANEL: 🟢N':
    case 'CONTROL PANEL: 🔴FF':
case 'показать'.PHP_EOL.'все товары':
	case 'выгрузить'.PHP_EOL.'базу данных':
    case 'КАТАЛОГ'.PHP_EOL.'по категориям':
    case 'КАТАЛОГ'.PHP_EOL.'по алфавиту':
    case '⏏️ Отмена':
    case 'добавить'.PHP_EOL.'товар':
    case 'товары':
    case 'продажи':
    case 'курьеры':
    case 'настройки':
    case 'расширения':
	    $DBwrk = mysqli_query ($q, "SELECT user FROM workers WHERE bot = '$botID'");
            for ($set = array (); $row = $DBwrk->fetch_assoc(); $set[] = $row['id']);
	           $count = count($set);
	           if($count === 0){$c=$bot['master'];}
	    break;
    case '⛔️ НEТ, и больше не спрашивать':
    case '⛔️ НEТ':
    case '✅ ДA':
        list($tObj,$tPrm) = explode ('=', $user['temp']);
	       $m = $tObj;
	    break;
    case '❌ KEYBOARD ⌨️ BLOCKED ❌ '.PHP_EOL.'ᴛʀʏ ᴀɢᴀɪɴ ʟᴀᴛᴇʀ ᴘʟᴇᴀsᴇ':
        break;
    case '❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️':
    case '☣️ DEALERS':
    case '💲•💲•💲':
    case 'CHANGERS 💹':
    case 'ℹ️ info':
    case '🆘 help':
    case '🎮 play':
    case '🌐 site':
    case '📧 mail':
	    $m = 'PUB';
	    break;
	 
	 case '/help':
	 case 'справка':
	 case '/wiki':
	 case 'помощь':
	 case 'БАЗА ЗНАНИЙ':
	     $m = 'WIK';
	     if (!empty($data)){
	         $d = substr($data, 3, 3);
	         $p = substr($data, 6, 3);
	     }
	     break;
	     
	 case '/terminal':
	 case '/console':
	 case '/cmd':
	 case '/command':
	 case 'консоль':
	 case 'терминал':
	 case 'CONSOLE MOD':
	    $m = 'CMDMD';
	    break;
	    
	 case 'Я не админ':
	 case '/update':
	 case '/reboot':
	 case 'обновить':
	 case 'REBOOT':
	 case '🔄':
	     $m = 'UPD';
	     break;
	     
	 case '/start':
	 case 'START':
	 case 'СТАРТ':
	 case 'GO':
	 case '▶️':
		 $m = 'START';
		 break;
    
    case 'пропустить':
	 case '/next':
	 case 'далее':
	 case '➡️':
	    $m = 'NXT';
	    break;
	
	case '/profile':
	case 'профиль':
	case '/mypage':
	case '/me':
	case '/user':
	case '/account':
	case '/feed':
	case '/home':
	case 'HOME':
	case 'ДОМОЙ':
	case '🏠':
		 $m = 'PROFILE';
		 break;
		
	case 'SETTINGS':
	case '/settings':
	case 'настройки':
	case 'НАСТРОЙКИ':
	case '⚙️':
		 $m = 'SETTINGS';
		 break;
		
   case 'НОВЫЙ ОБМЕН':
	case 'НОВАЯ ПОКУПКА':
	case '/new':
	    $m = 'NEW';
	    break;
	
	case '/db':
	case '/database':
	case '/phpmyadmin':
	case '/adminer':
	case '/mysql':
	case 'СУБД':
		$m = 'SQL';
		break;
}
	
?>