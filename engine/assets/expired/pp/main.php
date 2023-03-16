<?php 

$output = json_decode(file_get_contents('php://input'), TRUE); 
$chat_id = $output['message']['chat']['id']; 
$message = $output['message']['text'];
$photo = $output['message']['photo'];
$message_id = $output['message']['id'];
$user_id = $output['message']['from']['id'];
$username	= $output['message']['chat']['username'];
$first_name	= $output['message']['chat']['first_name'];
$last_name	= $output['message']['chat']['last_name']; 
$callback_query = $output['callback_query']; 
$data = $callback_query['data']; 
$chat_id_in = $callback_query['message']['chat']['id'];
$message_id_in = $callback_query['message']['message_id'];
$user_id_in = $callback_query['message']['from']['id'];
$chat_id_in = $callback_query['message']['chat']['id']; 
$callback_query_id = $callback_query['data']['id']; 
$message_in = $callback_query['message']['text'];
$query_id = $callback_query['id']; 

$root = '../../';
$api = 'https://api.telegram.org/bot' . $token; 
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
        $type = 'L';
        $alert = $bot['alert'];
        $admin = $bot['master'];


	$btnA = array ("text" => "🔻 ALL AVAILABLE TYPES 🔻", "callback_data" => "iH6BTA");
	$btnC = array ("text" => "BOT - CHAT/CHANNEL ADMIN", "callback_data" => "iH6BTC");
	$btnB = array ("text" => "BOT - CHAT CHEATER/CHATTERBOX", "callback_data" => "iH6BTB");
	$btnU = array ("text" => "BOT - PERSONAL ASSISTANT", "callback_data" => "iH6BTU");
	$btnG = array ("text" => "BOT - SHADOW DEALS GARANT", "callback_data" => "iH6BTG");
	$btnR = array ("text" => "BOT - CHAT/USER SPAMER", "callback_data" => "iH6BTR");
	$btnP = array ("text" => "BOT - SPAM/PRIVAT MAILBOX", "callback_data" => "iH6BTP");
	$btnS = array ("text" => "BOT - 24/7 AUTO SELLER", "callback_data" => "iH6BTS");
	$btnL = array ("text" => "BOT - CRYPTO/E-MONEY EXCHANGE", "callback_data" => "iH6BTS");
	$btnH = array ("text" => "BOT - PARSER/SNOOP/OSINT/HACKS", "callback_data" => "iH6BTH");
	$btnF = array ("text" => "BOT - INVOICES GENERATOR", "callback_data" => "iH6BTF");
	$btnO = array ("text" => "BOT - CLOUD FILE STORAGE", "callback_data" => "iH6BTO");
	$btnD = array ("text" => "BOT - TEXT/IMAGE DESIGNER", "callback_data" => "iH6BTD");
	$btnT = array ("text" => "BOT - SOFTWARE MARKETPLACE", "callback_data" => "iH6BTT");
	$btnK = array ("text" => "BOT - DATA KODER (ENCRIPTOR)", "callback_data" => "iH6BTK");
	$btnE = array ("text" => "BOT - 《iH•6》 SERVICES RESELLER", "callback_data" => "iH6BTE");
	$btnX = array ("text" => "BOT - CASINO: BETS/LOTTERY", "callback_data" => "iH6BTX");
	$btnN = array ("text" => "BOT - TOR NETWORK OBSERVER", "callback_data" => "iH6BTN");
	$btnM = array ("text" => "BOT - BANK:SAFE,KEEP,CREDIT", "callback_data" => "iH6BTM");
	$btnJ = array ("text" => "BOT - MAP•POINTER/GPS•NAVIGATOR", "callback_data" => "iH6BTJ");
	$btnW = array ("text" => "BOT - WEB DEVELOPER TOOLKIT", "callback_data" => "iH6BTW");
$NBTC = [[$btnA],[$btnC],[$btnB],[$btnH],[$btnG],[$btnR],[$btnM],[$btnU],[$btnS],[$btnL],[$btnP],[$btnF],[$btnO],[$btnD],[$btnT],[$btnK],[$btnE],[$btnW],[$btnN],[$btnX],[$btnQ],[$btnJ]];
	
$RFSBTN = array ("text" => "❌ oтменить заказ ❌", "callback_data" => "ORDNUL");
$PAYBTN = array ("text" => "💰 ПРОВЕРИТЬ ОПЛАТУ 💰", "callback_data" => "ORDPAY");


$PassK[] = array('пропустить');
$yM[] = array('✅ ДA','⛔️ НEТ');
$EdMK[] = array('↪️ Заново','⏏️ Отмена','⏺ Черновик');
$BMK[] = array('❌ KEYBOARD ⌨️ BLOCKED ❌ '.PHP_EOL.'ᴛʀʏ ᴀɢᴀɪɴ ʟᴀᴛᴇʀ ᴘʟᴇᴀsᴇ');
$bkMK[] = array('Я не админ');
$KatK[] = array('КАТАЛОГ'.PHP_EOL.'по категориям','КАТАЛОГ'.PHP_EOL.'по алфавиту');
$KatK[] = array('🎲 РАНДОМНЫЙ БОТ 🎲');

// BUTTONS FOR MAIN DEFAULT BOTS MENUS IN FOOTER KEYBOARDS
if (!empty ($alert)){
$CPMK[] = array('❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️');
$mM[] = array('❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️');
$GM[] = array('❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️');}
$CPMK[] = array('CONTROL PANEL: 🟢N');
$CPoff[] = array('CONTROL PANEL: 🔴FF');
switch ($type) {
	case 'D':
$CPMK[] = array('текст','шрифт','кнопки');
$CPMK[] = array('макеты','стили','анимации');
$CPMK[] = array('стикеры','маски','темы');
$mM[] = array('ДОСТУП'.PHP_EOL.'ограничен');
		break;
	case 'H':
$CPMK[] = array('ПАРСЕР','СЫЩИК','ЧЕРВЬ');
$mM[] = array('ДОСТУП'.PHP_EOL.'ограничен');
		break;
	case 'O':
$CPMK[] = array('ЗАГРУЗИТЬ ФАЙЛ','НАПИСАТЬ ЗАМЕТКУ');
$CPMK[] = array('ПАПКИ','ДОСТУПЫ','СЕЙФ');
$mM[] = array('ДОСТУП'.PHP_EOL.'ограничен');
		break;
	case 'A':
$mAM[] = array('FREE','PRO','TRIAL');
$mAM[] = array('VIP');
$mAM[] = array('партнерство','разработчикам');
$mAM[] = array('условия','справка','контакт');
	    break;
	case 'E':
$CPMK[] = array('уровень','терминал','сделки');
$mM[] = array('НОВЫЙ БОТ');
$mM[] = array('тарифы','возможности','условия');
$mM[] = array('бизнес','работа','реклама');
		break;
	case 'C':
$CPMK[] = array('новая'.PHP_EOL.'ГРУППА','новый'.PHP_EOL.'КАНАЛ');
$CPMK[] = array('новый'.PHP_EOL.'ПОСТ','новый'.PHP_EOL.'КОНКУРС');
$CPMK[] = array('ресурсы','задачи','журнал');
$mM[] = array('проверить подписку'); 
$GM[] = array('☣️ DEALERS','💲•💲•💲','CHANGERS 💹');
$GM[] = array('ℹ️ info','🆘 help','🎮 play','🌐 site','📧 mail');
		break;
	case 'R':
$CPMK[] = array('рассылка'.PHP_EOL.'по группам','рассылка'.PHP_EOL.'подписчикам');
$CPMK[] = array('пост','архив','базы');
$mM[] = array('ОТПИСАТЬСЯ');
$mM[] = array('подписки','настройки','рекламодателям');
		break;
	case 'P':
$CPMK[] = array('НОВЫЕ'.PHP_EOL.'сообщения','журнал:'.PHP_EOL.'ВСЕ ТИКЕТЫ');
$CPMK[] = array('временная'.PHP_EOL.'ПОЧТА','временный'.PHP_EOL.'НОМЕР (СМС)');
		break;
	case 'T':
$mM[] = array('ANDROID'.PHP_EOL.'APPS & MODS','WINDOWS'.PHP_EOL.'ISTALLERS');
$mM[] = array('BROWSER'.PHP_EOL.'EXTENSIONS','SITES & APPS'.PHP_EOL.'SCRIPTS & ENGINES');
$mM[] = array('OPERATION'.PHP_EOL.'SYSTEMS','DATA BASES'.PHP_EOL.'& GUIDEBOOKS');
		break;
	case 'M':
$CPMK[] = array('НОВЫЕ'.PHP_EOL.'сообщения','журнал:'.PHP_EOL.'ВСЕ ТИКЕТЫ');
$CPMK[] = array('временная'.PHP_EOL.'ПОЧТА','временный'.PHP_EOL.'НОМЕР (СМС)');
		break;
	case 'U':
$CPMK[] = array('оповещения','календарь');
$CPMK[] = array('контакты','архив','сейф');
$CPMK[] = array('ДЕСКТОП','БЛОКНОТ','С.У.Б.Д.');
$CPMK[] = array('утилиты','автоматизации','другое');
$mM[] = array('ОСТАВИТЬ СООБЩЕНИЕ');
$mM[] = array('визитка','ссылки','инструкции');
		break;
	case 'L':
$CPMK[] = array('резерв','кошельки','отчеты');
$CPoff[] = array('НОВЫЙ ОБМЕН');
$mM[] = array('НОВЫЙ ОБМЕН');
		break;
	case 'S':
$CPMK[] = array('товары','продажи','курьеры');
$CPoff[] = array('НОВАЯ ПОКУПКА');
$mM[] = array('НОВАЯ ПОКУПКА');
$mM[] = array('вакансии','АВТОНАЙМ','реклама');
$MrcKM[] = array('добавить'.PHP_EOL.'товар','пакетное'.PHP_EOL.'добавление');
$MrcKM[] = array('показать'.PHP_EOL.'все товары','выгрузить'.PHP_EOL.'базу данных','⬅️ Назад');
		break;
	case 'F':
$CPMK[] = array('категории','инвойсы','рассылки');
$mM[] = array('НОВАЯ ПОКУПКА');
		break;}
    if($c>0){
$CPMK[] = array('настройки','расширения');
$CPoff[] = array('профиль','правила','контакты');
$mM[] = array('профиль','правила','контакты');}

// CONSTRUCTION OF STRINGS FOR PREPARING FINAL FOOTER MENUS 
        // MAIN MENU KEYBOARDS
if ($type == 'A'){$mM = $mAM;}
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $mM));
$CPM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $CPMK));
$CPoffM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $CPoff));
       	// SPECIAL ONE-TIME KEYBOARDS
$BanM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $BMK));
$EdM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $EdMK));
$bkM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $bkMK));
$MrcM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $MrcKM));
$PassM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => true,
	'keyboard' => $PassK));
$KatM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $KatK));
	
if ($bot['switcher'] == '0'){ 
if ($bot['master'] == $c){
$ttl = 'ВКЛЮЧИТЬ❇️';$cb='BTNONN';
$BTN = array ("text" => $ttl, "callback_data" => $cb);
$menu = json_encode(array("inline_keyboard" => [[$BTN]]));
sMsg($c,'ВНИМАНИЕ! Бот в режиме "Технических работ". Не забудьте включить его по завершению настройки!',$menu);
}else{
sMsg($c,'Бот временно не функционирует; вероятно, проводятся технические работы. Возвращайтесь немного позднее или попробуйте поискать аналогичные товары/услуги у наших коллег, воспользовавшись каталогом',$KatM);
$m = 'BREAK';}}
	
// VERIFICATION OF USER IN DATABASE
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
    if (mysqli_num_rows ($DBuser) == 0) {
	   $res = strpos($message, '/start');
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
                    sMsg($c, 'You was banned and can not use this bot and others provided by our service platform. You should contact the support service or you can try later', $BanM); 
$m = 'BREAK';}}

// VERIFICATION IF BOT IS ASSOCIATED WITH ITS ADMINISTRATOR
if (empty ($bot['master']) AND $message == '/start'){
    sMsg($c, 'У данного бота не обнаружен администратор. Если им являетесь вы, пришлите в ответном сообщении токен бота или перешлите сообщение от @botfather в котором он содержится', $bkM);
        $temp = 'IFA='.$botID;
    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
    $m = 'BREAK';}

// TOKEN DETECTION IN RECEIVED MESSAGE 
preg_match ('/[0-9]{9,11}:[a-zA-Z0-9_-]{35}/', $message, $tok);

if(! empty ($tok[0]) AND ! empty ($user['temp'])){
	$tkn = $tok[0];
	if ($tkn == $token AND strpos($user['temp'], $botID) === 4){
		mysqli_query($q, "UPDATE bots SET master = '$c' WHERE id = '$botID'");
		mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");
		sMsg($c,'Поздравляем, вы подтвердили что являетесь владельцем данного бота',$CPM);
		$m = 'BREAK';}
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
                $m = 'BREAK';}}}}
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
$iHLtxt = 'Вот, пожалуй, и всё! Осталось последовательно нажать на эти две кнопки ниже. Первая откроется в браузерном окне поверх мессенджера. Если сообщение в нем оповестит об успехе операции, значит все сделано верно и можно, закрыв данное окно нажать на вторую кнопку и перейти к панели управления своим ботом. Если в сообщении будет содержаться информация об ошибке, пытаться исправить ее самостоятельно не стоит; рекомендуется обратиться в нашу службу клиентской поддержки и описать подробно свои действия и текст полученный в открывшемся окне.';
$iHLtxt = 'Вот, пожалуй, и всё! Осталось последовательно нажать на эти две кнопки ниже. Первая откроется в браузерном окне поверх мессенджера. Если сообщение в нем оповестит об успехе операции, значит все сделано верно и можно, закрыв данное окно нажать на вторую кнопку и перейти к панели управления своим ботом. Если в сообщении будет содержаться информация об ошибке, пытаться исправить ее самостоятельно не стоит; рекомендуется обратиться в нашу службу клиентской поддержки и описать подробно свои действия и текст полученный в открывшемся окне.';
$FREETXT = 'Подключайся прямо сейчас и используй стартовый набор функций совершенно бесплатно и неограниченно вне зависимости от типа бота, а, при необходимости, в любой момент, расширяй возможности платными дополнениями, выбирая только нужные тебе, или выгодно приобретя расширения <b>PRO</b> или <b>ViP</b> комплектом';
$TRIALTXT = 'Бесплатно опробуй весь функционал, доступный пользователям тарифа PRO в течение 7 дней или активируй пробный период тарифа ViP на 24 часа, чтобы оценить все возможности и удобства перед оплатой тарифного плана или подключением только необходимых расширений, оставаясь при этом пользователем минимального FREE тарифа.';

// NEW SESSION WITH CONTROL PANEL FOR BOT ADMINISTRATOR
if ($bot['master'] == $c & $message == '/start' OR $message == '⬅️ Назад'){
		sMsg($c,$CPTXT,$CPM);
		$m='BREAK';}
		
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
	       $m = 'BREAK'; }
		
// PUBLIC CHAT MESSAGE DETECTING
if ($c < 0) { $m = 'PUB';}
	
//include ('/iH6/assets/special/KERNEL/GUI/CONTROLLER.php');
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
	
	 case '/start':
	 case 'START':
	 case 'СТАРТ':
	 case 'ПУСК':
	 case 'начать':
	 case 'сначала':
	 case 'заново':
	 case 'запуск':
	 case 'запустить':
	 case 'Поехали!':
	 case 'Активировать':
	 case 'GO':
	 case '▶️':
		 $m = 'START';
		 break;
	 
	 case 'TRMNL':
	 case 'CMDLN':
	 case 'CNSLE':
	 case 'PWRSL':
	 case '/terminal':
	 case '/console':
	 case '/cmdline':
	 case '/powershall':
	 case '/cmd':
	 case 'Terminal':
	 case 'Console':
	 case 'CommandLine':
	 case 'PowerShall':
	 case 'CMD':
		 $m = 'CMD';
		 break;
	
	 case 'BLKBX':
	 case 'BLACKBOX':
	 case 'BACKUP':
	 case '/backup':
	 case 'RZVCP':
	 case '/reservcopy':
		 $m = 'BKP';
		
	 case '/break':
	 case '/close':
	 case '/exit':
	 case '/die':
	 case '/stop':
	 case 'BREAK':
	 case 'СТОП':
	 case 'СБРОС':
	 case 'завершить':
	 case 'выход':
	 case '❌':
	 case '✖️':
	 case '🔚':
	 case '⛔️':
		 $m = 'BREAK';
		 break;
		
	 case '/update':
	 case '/reboot':
	 case '/restart':
	 case '/reload':
	 case 'обновить':
	 case 'обновление':
	 case 'обновления':
	 case 'перезагрузка':
	 case 'ВАЖНОЕ ОБНОВЛЕНИЕ':
	 case 'Я не админ':
		 $m = 'UPD';
		 break;
		
	 case 'Прием!':
		 sMsg($c,'Первый первый, я Бот, как слышно меня, прием!'.PHP_EOL.'Сейчас будет выполнена стандартная проверочная программа:',$menu);
	 case '/test':
	 case 'ТЕСТ':
	 case 'TEST':
	 case 'Demo':
	 case 'проверка':
	 case 'проверка связи':
		 $m = 'TEST';
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
		
	case '/id':
	case '/getid':
	case '/myid':
	case 'ID':
		$m = 'SRV'; 
		$cmd = 'ID';
		break;
}

//include ('/iH6/assets/special/KERNEL/AI/HELLO.php');
//include ('KERNEL/HKEY/Q.php');
	//$DIRX = 'HTTPS://shadowservice.site/iH6/assets/special/ADDON/';

switch ($m) {

	case 'BREAK': 
	    break;
	case 'TEST':
sMsg($c,'Hello, World!',$menu);
       break;

	case 'UPD':
mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");
   case '/start':
	case 'START':
if ($bot['master'] !== $c) {
   sMsg($c, $HIUTXT, $menu); }
	case 'NEW':
include ('NEW.php');
	    break;
	
   case '': 
include ('ID.php');
	case '/botid':
sMsg($c,'BOT <b>ID</b>:  <code>'.$botID.'</code>',$menu);
		 break;
    }

function sMsg($c,$text,$menu){SCA($c,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$c.'&text='.urlencode($text).'&reply_markup='.$menu. '&parse_mode=html&disable_web_page_preview=true');}
function sndP($c,$pic,$t,$kb){SCA($c,'upload_photo'); file_get_contents($GLOBALS['api'].'/sendPhoto?chat_id='.$c.'&photo='.$pic.'&caption='.urlencode($t).'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true'); }
function SCA($c,$act){file_get_contents($GLOBALS['api'].'/sendChatAction?chat_id='.$c.'&action='.$act);}

?>