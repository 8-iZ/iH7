<?php

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
	
?>