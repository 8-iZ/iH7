<?php
	
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