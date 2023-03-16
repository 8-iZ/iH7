<?php 

include ('verif.php');

include ('catch.php');

if ($c > 0) {

switch ($m) {
	case '/break': break;
	case 'NEW':
	$obj = substr($d, 0, 1);
	$prm = substr($d, -2);
if ($obj == 'C') {
$city = '373'.$prm;
$DBpl = mysqli_query ($q, "SELECT name FROM places WHERE city = '$city'");
for ($set = array (); $row = $DBpl->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
	if($count === 1){
$DBmrc = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$botID'");
for ($set = array (); $row = $DBmrc->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
	$txt = 'Введи наименование нового товара';
	if($count !=== 0){
	$txt = $txt.' или выбери готовый шаблон из ранее созданных';
	if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}

} $txt = $txt.':';
sMsg($c,$txt,$menu);}
$btn1 = array ("text" => "Центр", "callback_data" => "NEWS01");$btn2 = array ("text" => "Ботаника", "callback_data" => "NEWS02");$btn3 = array ("text" => "Рышкановка", "callback_data" => "NEWS03");$btn = [[$btn1,$btn2,$btn3]];$menu = json_encode(array ("inline_keyboard" => $btn));
sMsg($c,'Выбор района:',$menu);}
	break;
	case 'добавить'.PHP_EOL.'товар':
$btn1 = array ("text" => "КИШИНЕВ", "callback_data" => "NEWC01");$btn2 = array ("text" => "БЕЛЬЦЫ", "callback_data" => "NEWC02");$btn = [[$btn1,$btn2]];$menu = json_encode(array ("inline_keyboard" => $btn));
sMsg($c,'ДОБАВЛЕНИЕ НОВОГО ТОВАРА'.PHP_EOL.'➖➖➖➖➖'.PHP_EOL.'Выбор города:',$menu);
	break;
	case 'товары':
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE seller = '$botID' LIMIT 11");
for ($set = array (); $row = $DBmrc->fetch_assoc(); $set[] = $row['id']);
	$count = count($set);
	if($count === 0){$tc='0';}
elseif($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}
elseif($count === 6){$tc='6';} 
elseif($count === 7){$tc='7';}
elseif($count === 8){$tc='8';}
elseif($count === 9){$tc='9';}
elseif($count === 10){$tc='10';}
elseif($count === 11){$tc='11';}
switch ($tc) {   
	case '0':
sMsg($c,'Вы еще не добавили ни одного товара!',$MrcM);
	break;
	case '11':
$marker = '11';
	case '10':
$MrcID10 = $set[9];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID10'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID10;
		$cb2 = 'EDM'.$MrcID10;
		$cb3 = 'DEL'.$MrcID10;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID10.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '9':
$MrcID9 = $set[8];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID9'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID9;
		$cb2 = 'EDM'.$MrcID9;
		$cb3 = 'DEL'.$MrcID9;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID9.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '8':
$MrcID8 = $set[7];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID8'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID8;
		$cb2 = 'EDM'.$MrcID8;
		$cb3 = 'DEL'.$MrcID8;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID8.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '7':
$MrcID7 = $set[6];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID7'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID7;
		$cb2 = 'EDM'.$MrcID7;
		$cb3 = 'DEL'.$MrcID7;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID7.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '6':
$MrcID6 = $set[5];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID6'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID6;
		$cb2 = 'EDM'.$MrcID6;
		$cb3 = 'DEL'.$MrcID6;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID6.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '5':
$MrcID5 = $set[4];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID5'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID5;
		$cb2 = 'EDM'.$MrcID5;
		$cb3 = 'DEL'.$MrcID5;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID5.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '4':
$MrcID4 = $set[3];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID4'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID4;
		$cb2 = 'EDM'.$MrcID4;
		$cb3 = 'DEL'.$MrcID4;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID4.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '3':
$MrcID3 = $set[2];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID3'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID3;
		$cb2 = 'EDM'.$MrcID3;
		$cb3 = 'DEL'.$MrcID3;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID3.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '2':
$MrcID2 = $set[1];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID2'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID2;
		$cb2 = 'EDM'.$MrcID2;
		$cb3 = 'DEL'.$MrcID2;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
$btn = [[$btn1],[$btn2,$btn3]];
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID2.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
	case '1':
$MrcID1 = $set[0];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE id = '$MrcID1'");
	$mrc = mysqli_fetch_assoc($DBmrc);
	$sect = $mrc['sector'];
	$DBsec = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$sect'");
	$sec = mysqli_fetch_assoc($DBsec);
	$sect = $sec['name'];
	$DBsc = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sect'");
	$sector = mysqli_fetch_assoc($DBsc);
	$citi = $mrc['city'];
		$DBcit = mysqli_query ($q, "SELECT name FROM places WHERE sector = '$citi'");
	$cit = mysqli_fetch_assoc($DBcit);
	$citi = $cit['name'];
	$DBct = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$citi'");
	$city = mysqli_fetch_assoc($DBct);
	$agent = $mrc['agent'];
			$DBus = mysqli_query ($q, "SELECT * FROM users WHERE id = '$agent'");
	$usa = mysqli_fetch_assoc($DBus);
		$cb1 = 'SEE'.$MrcID1;
		$cb2 = 'EDM'.$MrcID1;
		$cb3 = 'DEL'.$MrcID1;
$btn1 = array ("text" => "посмотреть данные", "callback_data" => $cb1);
$btn2 = array ("text" => "редактировать", "callback_data" => $cb2);
$btn3 = array ("text" => "удалить", "callback_data" => $cb3);
if ($marker == '11'){
$btn4 = array ("text" => "➖➖➖➖➖", "callback_data" => "BREAK");
$btn5 = array ("text" => "все товары", "callback_data" => "ALLMRC");
$btn6 = array ("text" => "следующие 10", "callback_data" => "NXTIOZ");
$btn= [[$btn1],[$btn2,$btn3],[$btn4],[$btn5,$btn6]];}else{$btn = [[$btn1],[$btn2,$btn3]];}
	$menu = json_encode(array ("inline_keyboard" => $btn));
	sMsg($c,'ID товара: '.$MrcID1.PHP_EOL.'Наименование: '.$mrc['name'].PHP_EOL.'Комплектация(фасовка): '.$mrc['complectation'].PHP_EOL.'Цена: '.$mrc['price'].'$'.PHP_EOL.$city['title'].' : '.$sector['title'].PHP_EOL.'Добавлено: '.$mrc['start'].PHP_EOL.'Агент: '.$usa['first_name'].' '.$usa['last_name'],$menu);
break;}
	break;
	case '🔘 CONTROL PANEL':
sMsg($c,'Панель управления отключена', $CPoffM);
$m = '/new';
	break;
	case '⚫️ CONTROL PANEL':
sMsg($c,'Панель управления включена', $CPM);
	break;
	case 'Я не админ':
mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");
   case '/start':
if ($bot['master'] !== $c) {
sMsg($c, $HIUTXT, $menu); }
	case '/new':
	case 'НОВАЯ ПОКУПКА':
$DBcity = mysqli_query ($q, "SELECT DISTINCT city FROM merches WHERE seller = '$type'");
if (mysqli_num_rows ($DBcity) == 0) {
	sMsg($c, 'Бот пуст, попробуй позже', $menu); } 
elseif (empty ($user['city']) OR $user['city'] == 'NULL'){
	for ($set = array (); $row = $DBcity->fetch_assoc(); $set[] = $row['city']);
	$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
switch ($tc) {   
	case '3':
$city3 = $set[2];
$DBct = mysqli_query ($q, "SELECT * FROM places WHERE city = '$city3'");
	$ct = mysqli_fetch_assoc($DBct);
		$short = $ct['name'];
$DBcb = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
	$cb = mysqli_fetch_assoc($DBcb);
		$tx = $cb['title'];
		$cb = $cb['callback'];
$button3 = array ("text" => $tx, "callback_data" => $cb);
	case '2':
$city2 = $set[1];
$DBct = mysqli_query ($q, "SELECT * FROM places WHERE city = '$city2'");
	$ct = mysqli_fetch_assoc($DBct);
		$short = $ct['name'];
$DBcb = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
	$cb = mysqli_fetch_assoc($DBcb);
		$tx = $cb['title'];
		$cb = $cb['callback'];
$button2 = array ("text" => $tx, "callback_data" => $cb);
	case '1':
$city1 = $set[0];
$DBct = mysqli_query ($q, "SELECT * FROM places WHERE city = '$city1'");
	$ct = mysqli_fetch_assoc($DBct);
		$short = $ct['name'];
$DBcb = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
	$cb = mysqli_fetch_assoc($DBcb);
		$tx = $cb['title'];
		$cb = $cb['callback'];
$button1 = array ("text" => $tx, "callback_data" => $cb);
	break;}
if ($count === 1){$btn = [[$button1]];}
elseif ($count === 2){$btn = [[$button1,$button2]];}
elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
	$menu = json_encode(array ("inline_keyboard" => $btn));
sMsg($c, 'Выберите свой город в меню ниже:', $menu);
} else {
$city = $user['city'];
	$DBcity = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$type' AND city = '$city'");
	$DBor = mysqli_query ($q, "SELECT name FROM places WHERE city = '$city'");
$or = mysqli_fetch_assoc($DBor);
$ors = $or['name'];
$DBors = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$ors'");
$orasDB = mysqli_fetch_assoc($DBors);
$oras = $orasDB['title'];
		if (mysqli_num_rows ($DBcity) == 0) {
sMsg($c, 'Бот пуст, попробуй позже', $menu);
		} else {
for ($set = array (); $row = $DBcity->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
switch ($tc) {   
case '4':
$mrcN4 = $set[3];
$mrc4 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN4'");$mrc = mysqli_fetch_assoc($mrc4);$callback = $mrc['callback'];$button4 = array ("text" => $mrcN4, "callback_data" => $callback);	
	case '3':
$mrcN3 = $set[2];
$mrc3 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN3'");$mrc = mysqli_fetch_assoc($mrc3);$callback = $mrc['callback'];$button3 = array ("text" => $mrcN3, "callback_data" => $callback);	
	case '2':$mrcN2 = $set[1];$mrc2 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN2'");$mrc = mysqli_fetch_assoc($mrc2);$callback = $mrc['callback'];$button2 = array ("text" => $mrcN2, "callback_data" => $callback);	
	case '1':$mrcN1 = $set[0];$mrc1 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN1'");$mrc = mysqli_fetch_assoc($mrc1);$callback = $mrc['callback'];$button1 = array ("text" => $mrcN1, "callback_data" => $callback);break;}
	
if ($count === 1){$btn = [[$button1]];}
elseif ($count === 2){$btn = [[$button1,$button2]];}
elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
elseif ($count === 4){$btn = [[$button1,$button2],[$button3,$button4]];}
$menu = json_encode(array("inline_keyboard" => $btn));

sMsg($c, 'Вы ранее сохранили город: "'.$oras.$mS, $menu);}}
	break;
	case 'ORS':
if (!empty ($data)){
	$result = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
	$ors = mysqli_fetch_assoc($result);
	$oras = $ors['title'];
	$short = $ors['short'];
	$yM[] = array('⛔️ НEТ, и больше не спрашивать');
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => true,
	'keyboard' => $yM));
	sMsg($c, $cS.$oras.'"'.PHP_EOL.'Желаете ли вы сохранить этот город и в дальнейшем пропускать этот шаг в процессе покупки?', $menu);
	$temp = 'ORS='.$short;
	mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
} else {
$citDB = mysqli_query($q, "SELECT * FROM places WHERE name = '$tPrm'");
	$city = mysqli_fetch_assoc($citDB);
	$city = $city['city'];
$orsDB = mysqli_query($q, "SELECT * FROM callbacks WHERE short = '$tPrm'");
	$oras = mysqli_fetch_assoc($orsDB);
	$oras = $oras['title'];
if ($message == '✅ ДA'){
	mysqli_query($q, "UPDATE users SET city = '$city', temp = '' WHERE id = '$c'"); }
elseif ($message == '⛔️ НEТ, и больше не спрашивать'){
	mysqli_query($q, "UPDATE users SET city = 'NULL', temp = '' WHERE id = '$c'");}
elseif ($message == '⛔️ НEТ'){ 
	mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");}
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$type' AND city = '$city'");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['name']);
$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
switch ($tc) {   case '3':$mrcN3 = $set[2];$mrc3 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN3'");$mrc = mysqli_fetch_assoc($mrc3);$callback = $mrc['callback'];$button3 = array ("text" => $mrcN3, "callback_data" => $callback);	case '2':$mrcN2 = $set[1];$mrc2 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN2'");$mrc = mysqli_fetch_assoc($mrc2);$callback = $mrc['callback'];$button2 = array ("text" => $mrcN2, "callback_data" => $callback);	case '1':$mrcN1 = $set[0];$mrc1 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN1'");$mrc = mysqli_fetch_assoc($mrc1);$callback = $mrc['callback'];$button1 = array ("text" => $mrcN1, "callback_data" => $callback);break;}
if ($count === 1){$btn = [[$button1]];}elseif ($count === 2){$btn = [[$button1,$button2]];}elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
$menu = json_encode(array("inline_keyboard" => $btn));
sMsg($c, $cS.$oras.$mS, $menu);}
      break;
   case 'SEL':
$mrcDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
	$cb = mysqli_fetch_assoc($mrcDB);
	$name = $cb['title'];
$result = mysqli_query ($q, "SELECT DISTINCT sector FROM merches WHERE seller = '$type' AND city = '37301' AND name = '$name'");
		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['sector']);
$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}
switch ($tc) {   case '5': $sec5 = $set[4];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec5'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button5 = array ("text" => $title, "callback_data" => $callback);	
case '4': $sec4 = $set[3];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec4'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button4 = array ("text" => $title, "callback_data" => $callback);	
case '3': $sec3 = $set[2];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec3'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button3 = array ("text" => $title, "callback_data" => $callback);	
case '2': $sec2 = $set[1];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec2'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button2 = array ("text" => $title, "callback_data" => $callback);	
case '1': $sec1 = $set[0];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec1'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button1 = array ("text" => $title, "callback_data" => $callback);	
break;}
if ($count === 1){$btn = [[$button1]];}elseif ($count === 2){$btn = [[$button1,$button2]];}elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}elseif ($count === 4){$btn = [[$button1,$button2],[$button3,$button4]];}elseif ($count === 5){$btn = [[$button1],[$button2,$button3],[$button4,$button5]];}
$menu = json_encode(array("inline_keyboard" => $btn));
sMsg($c, $cS.$name.$sS, $menu);
$temp = $botID.'='.$name;
mysqli_query
($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
break;
      case 'SEC':
$usDB = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$us = mysqli_fetch_assoc($usDB);
$temp = $us['temp'];
list($tBot,$tMrc) = explode ('=', $temp);
if (empty($temp) OR $tBot !== $botID){
sMsg($c, 'Данная сессия истекла. Начните новую покупку.', $menu);
} else {
$scDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
$sc = mysqli_fetch_assoc($scDB);
$sector = $sc['title'];
$sct = $sc['short'];
$secDB = mysqli_query ($q, "SELECT * FROM places WHERE name = '$sct'");
$sec = mysqli_fetch_assoc($secDB);
$sect = $sec['sector'];
$temp = $temp.'&'.$sect;
$result = mysqli_query ($q, "SELECT DISTINCT complectation FROM merches WHERE name = '$tMrc' AND seller = '$type' AND sector = '$sect'");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['complectation']);
$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
switch ($tc) {   
case '3':
$wN3 = $set[2];
$mrc3 = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND complectation = '$wN3' LIMIT 1");
$mrc = mysqli_fetch_assoc($mrc3);
$price3 = $mrc['price'];
$flag3 = $wN3.'г => '.$price3.'$';
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$wN3'");
$cb3 = mysqli_fetch_assoc($cbDB);
$callback3 = $cb3['callback'];
$button3 = array ("text" => $flag3, "callback_data" => $callback3);	
case '2':
$wN2 = $set[1];
$mrc2 = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND complectation = '$wN2' LIMIT 1");
$mrc = mysqli_fetch_assoc($mrc2);$price2 = $mrc['price'];
$flag2 = $wN2.'г => '.$price2.'$';
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$wN2'");
$cb2 = mysqli_fetch_assoc($cbDB);
$callback2 = $cb2['callback'];
$button2 = array ("text" => $flag2, "callback_data" => $callback2);
case '1':
$wN1 = $set[0];
$mrc1 = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND complectation = '$wN1' LIMIT 1");
$mrc = mysqli_fetch_assoc($mrc1);$price1 = $mrc['price'];
$flag1 = $wN1.'г => '.$price1.'$';
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$wN1'");
$cb1 = mysqli_fetch_assoc($cbDB);
$callback1 = $cb1['callback'];
$button1 = array ("text" => $flag1, "callback_data" => $callback1);
break;}
if ($count === 1){$btn = [[$button1]];}
elseif ($count === 2){$btn = [[$button1,$button2]];}
elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
elseif ($count === 4){$btn = [[$button1,$button2],[$button3,$button4]];}
elseif ($count === 5){$btn = [[$button1],[$button2,$button3],[$button4,$button5]];}
$menu = json_encode(array("inline_keyboard" => $btn));
sMsg($c, $cS.$sector.$wS, $menu);
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
      break;
case 'FAS':
$fasDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
$fs = mysqli_fetch_assoc($fasDB);
$fas = $fs['title'];
$usDB = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$us = mysqli_fetch_assoc($usDB);
list($tBot,$tMrcAll) = explode ('=', $us['temp']);
list($tMrc,$tSec) = explode ('&', $tMrcAll);
if (empty($us['temp']) OR $tBot !== $botID){
sMsg($c, 'Данная сессия истекла. Начните новую покупку.', $menu);
} else {
$temp = $us['temp'].'&'.$d;
$sec = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$tSec'");
$secSht = mysqli_fetch_assoc($sec);
$short = $secSht['name'];
$sec = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
$sector = mysqli_fetch_assoc($sec);
$LTCBTN = array ("text" => 'Litecoin [LTC]', "callback_data" => "PAYLTC");
$menu = json_encode(array("inline_keyboard" => [[$LTCBTN]]));
sMsg($c, $cS.$tMrc.'"'.PHP_EOL.'Фасовка: "'.$fas.'г"'.PHP_EOL.'Район: "'.$sector['title'].'"'.PHP_EOL.PHP_EOL.'Осталось выбрать подходящий вам способ оплаты:', $menu);
mysqli_query
($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
break;
      case 'PAY':
         if ($d == 'LTC') {
include ('../../../config/payment/litecoin.php');}
$usDB = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$us = mysqli_fetch_assoc($usDB);
list($tBot,$tMrcAll) = explode ('=', $us['temp']);
list($tMrc,$tSec,$tFas) = explode ('&', $tMrcAll);
if (empty($us['temp']) OR $tBot !== $botID){
sMsg($c, 'Данная сессия истекла. Начните новую покупку.', $menu);
} else {
$bcb = 'FAS'.$tFas;
$fasDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$bcb'");
$fs = mysqli_fetch_assoc($fasDB);
$fas = $fs['title'];
$mrcDB = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND sector = '$tSec' AND complectation = '$fas' LIMIT 1");$mrc = mysqli_fetch_assoc($mrcDB);
$order = $mrc['id'];
$pr = $mrc['price'];
$price = round($pr / $cur, 5);
$temp = $us['temp'].'&'.$d;
$sec = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$tSec'");
$secSht = mysqli_fetch_assoc($sec);
$short = $secSht['name'];
$sec = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
$sector = mysqli_fetch_assoc($sec);
$pmDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
$pm = mysqli_fetch_assoc($pmDB);

sMsg($c, $cS.$tMrc.'"'.PHP_EOL.'Фасовка: "'.$fas.'г"'.PHP_EOL.'Район: "'.$sector['title'].'"'.PHP_EOL.'Выбранный метод оплаты: "'.$pm['title'].'"'.PHP_EOL.PHP_EOL.'Для завершения покупки оплатите сумму:', $menu);
sMsg($c, $price, $menu);
sMsg($c, 'на следующий '.$pm['title'].' кошелек:', $menu);
sMsg($c, $ltc, $menu);
$menu = json_encode(array("inline_keyboard" => [[$PAYBTN],[$RFSBTN]]));
sMsg($c, 'После оплаты нажмите кнопку "ПРОВЕРИТЬ ОПЛАТУ"', $menu);
mysqli_query
($q, "UPDATE users SET temp = '' WHERE id = '$c'");
mysqli_query
($q, "UPDATE merches SET status = '7', sold = NOW() WHERE id = '$order'");
mysqli_query
($q, "INSERT INTO orders (user,bot,merch,status) VALUES ('$c','$botID','$order','1')");}
      break;
   case 'ORD':
if (str_contains ($message, 'ДA')){
$result = mysqli_query ($q, "SELECT merch FROM orders WHERE bot = '$botID' AND user = '$c'");
	 $mrc = mysqli_fetch_assoc($result);
	$mrc = $mrc['merch'];
	mysqli_query
($q, "UPDATE orders SET status = '0' WHERE merch = '$mrc'");
mysqli_query
($q, "UPDATE merches SET status = '8' WHERE id = '$mrc'");
mysqli_query
($q, "UPDATE users SET temp = '' WHERE id = '$c'");
	sMsg($c, 'Ваш заказ успешно отменен', $menu);}
elseif (str_contains ($message, 'HET')){ 
	dMsg($c, $message_id);
	dMsg($c, $tPrm); 
	mysqli_query
($q, "UPDATE users SET temp = '' WHERE id = '$c'");
} else {
if ($d == 'NUL') {
$text = $REFTXT;
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => true,
	'keyboard' => $yM));
	} else {
	$text = 'Оплата не обнаружена. Попробуйте снова через пару минут.';
	$menu = json_encode(array("inline_keyboard" => [[$PAYBTN],[$RFSBTN]]));}
      sMsg($c, $text, $menu);
$temp = 'ORD='.$message_id_in;
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
      break;
case 'профиль':
sMsg($c, $MYPTXT, $menu);break;
case 'правила':
$URLBTN = array ("text" => "ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ", "url" => "HTTPS://T.ME/RCODEX");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'Внимательно ознакомьтесь с содержанием регламента магазина перед покупкой. Помните что магазин не несет ответственности за проблемы возникшие в связи с незнанием правил. Совершая покупку вы автоматически подтверждаете, что ознакомились с текстом данного документа:', $M);break;
case 'контакты':
	
	default:
	sMsg($c, 'Команда недоступна на данный момент. Пожалуйста, попробуйте позже', $menu);
	break;}
	
} else {

switch ($m) {
case '/update':
sleep(1);
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $GM));
sMsg($c, 'Привет, чат!', $menu);
sleep(1);
$BTNTTL = '[💲💲💲]'.PHP_EOL.'$HADOW$ERVICE.$ITE';
$URLBTN = array ("text" => $BTNTTL, "url" => "HTTPS://SHADOWSERVICE.SITE");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'Я - бета версия бота-помощника от сервиса:', $M); 
sleep(2);
$URLBTN = array ("text" => "‶𝚒𝚁𝟶𝙽🫀𝙷𝟹𝙰𝚁𝚃 ᘜ″,", "url" => "HTTPS://iH.SHADOWSERVICE.SITE");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'Я создан на движке', $M);
$URLBTN = array ("text" => "🎱𝕚ℤ™︎ 𝙸𝚗𝚌. ᴛᴇᴄʜɴᴏʟᴏɢɪᴇs", "url" => "HTTPS://8iZ.SHADOWSERVICE.SITE");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'разработанном с соблюдением прав пользователей на анонимность и конфиденциальность, официально опубликован в открытом доступе, с открытым исходным кодом, под стандартной лицензией "GNU GENERAL PUBLIC LICENSE"'.PHP_EOL.'Девелопинг и продакшн:', $M);
break;
}}

//include ('../../../kernel/API/kit/extended.php');
function sMsg($c, $text, $menu) {file_get_contents ($GLOBALS['api'] . '/sendMessage?chat_id=' . $c . '&text=' .urlencode($text) . '&reply_markup=' . $menu. '&parse_mode=html&disable_web_page_preview=true'); }
//functionsaCbQ($callback_query_id, $text, $show_alert) {file_get_contents($GLOBALS['api'] . '/answerCallbackQuery?callback_query_id=' . $callback_query_id . '&text=' .urlencode($text). '&show_alert=' . $show_alert);}function editMessageText($chat_id_in, $message_id_in, $text, $menu) {file_get_contents($GLOBALS['api'] . '/editMessageText?chat_id='.$chat_id_in.'&message_id='.$message_id_in.'&text='.urlencode($text). '&reply_markup=' . $menu. '&parse_mode=html&disable_web_page_preview=true');}
function dMsg($c, $mID) {file_get_contents ($GLOBALS['api'] . '/deleteMessage?chat_id='.$c.'&message_id='.$mID.'');}