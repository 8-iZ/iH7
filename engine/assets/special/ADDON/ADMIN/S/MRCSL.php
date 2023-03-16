<?php
	
	$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE seller = '$botID' LIMIT 11");
        for ($set = array ();
            $row = $DBmrc->fetch_assoc();
            $set[] = $row['id']);
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
	
?>