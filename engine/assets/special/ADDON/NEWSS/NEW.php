<?php
	
if ($type == 'A') {
        	$inMK = json_encode(array("inline_keyboard" => [[$btnA],[$btnC],[$btnS],[$btnL],[$btnX],[$btnT],[$btnK],[$btnG],[$btnU],[$btnB],[$btnJ],[$btnW],[$btnD],[$btnF],[$btnR],[$btnO],[$btnH],[$btnP],[$btnM],[$btnN],[$btnE]]));
	        sMsg($c,'Выберите интересующий вас тип сервиса из предложенного ниже списка:',$inMK);
	    }
	    if ($type == 'E' AND $message !== '/start'){
	       mysqli_query($q, "UPDATE users SET temp = 'iH6=BOT' WHERE id = '$c'");
	    $aboutBtn = array ("text" => "что такое \"iR0N H3ART\"?", "callback_data" => "TXTINF");
        	$iHiK = json_encode(array ("inline_keyboard" => [[$aboutBtn]]));
	    sMsg($c,'👋🏻<b>Привет!</b> Сейчас мы попробуем подключить вашего бота к функционалу нашего сервиса используя движок "iR0N H3ART 6". Если все получится, совсем скоро и у твоего Бота появится свое 🫀 сердце!',$iHiK);
	    sMsg($c,'Итак, для начала, напишите как называется ваш проект:',$iHKM);
	    }
	    if ($type == 'L'){
	        sMsg($c,'Пожалуйста, выберите из предложенных ниже вариантов направление обмена:',$menu);
	    }
	    if ($type == 'S'){
        $DBcity = mysqli_query ($q, "SELECT DISTINCT city FROM merches WHERE seller = '$type'");
        if (mysqli_num_rows ($DBcity) == 0) {
	        sMsg($c, 'Бот пуст, попробуй позже', $menu); } 
        elseif ($locSv == '0' OR empty ($user['city']) OR $user['city'] == 'NULL'){
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

sMsg($c, 'Вы ранее сохранили город: "'.$oras.$mS, $menu);}}}
	
?>