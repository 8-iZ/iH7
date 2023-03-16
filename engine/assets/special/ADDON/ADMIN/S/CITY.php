<?php
	

	$result = mysqli_query ($q, "SELECT DISTINCT city FROM places WHERE country = '373'");
	for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['city']);
	$count = count($set);
if($count === 1){$tc='1';}
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
elseif($count === 12){$tc='12';}
elseif($count === 13){$tc='13';}
elseif($count === 14){$tc='14';}
elseif($count === 15){$tc='15';}
switch ($tc) {   
	case '15':
	$city = $set[14];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn15 = array ("text" => $ttl, "callback_data" => $cb);
	case '14':
	$city = $set[13];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn14 = array ("text" => $ttl, "callback_data" => $cb);
	case '13':
	$city = $set[12];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn13 = array ("text" => $ttl, "callback_data" => $cb);
	case '12':
	$city = $set[11];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn12 = array ("text" => $ttl, "callback_data" => $cb);
	case '11':
	$city = $set[10];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn11 = array ("text" => $ttl, "callback_data" => $cb);
	case '10':
	$city = $set[9];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn10 = array ("text" => $ttl, "callback_data" => $cb);
	case '9':
	$city = $set[18];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn9 = array ("text" => $ttl, "callback_data" => $cb);
	case '8':
	$city = $set[7];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn8 = array ("text" => $ttl, "callback_data" => $cb);
	case '7':
	$city = $set[6];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn7 = array ("text" => $ttl, "callback_data" => $cb);
	case '6':
	$city = $set[5];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn6 = array ("text" => $ttl, "callback_data" => $cb);
	case '5':
	$city = $set[4];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn5 = array ("text" => $ttl, "callback_data" => $cb);
	case '4':
	$city = $set[3];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn4 = array ("text" => $ttl, "callback_data" => $cb);
	case '3':
	$city = $set[2];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn3 = array ("text" => $ttl, "callback_data" => $cb);
	case '2':
	$city = $set[1];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result);
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn2 = array ("text" => $ttl, "callback_data" => $cb);
	case '1':
	$city = $set[0];
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM places WHERE city = '$city' AND sector = '' LIMIT 1");
	$short = mysqli_fetch_assoc($result); qq
	$short = $short[name];
	$cb = 'NEWS'.$short;
	$result = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$short'");
	$ttl = mysqli_fetch_assoc($result);
	$ttl = $ttl['title'];
	$btn1 = array ("text" => $ttl, "callback_data" => $cb);
	break;}
	if($count === 1){$btn=[[$btn1]];}
elseif($count === 2){$btn=[[$btn1,$btn2]];}
elseif($count === 3){$btn=[[$btn1],[$btn2,$btn3]];}
elseif($count === 4){$btn=[[$btn1],[$btn2,$btn3,$btn4]];}
elseif($count === 5){$btn=[[$btn1],[$btn2,$btn3],[$btn4,$btn5]];}
elseif($count === 6){$btn=[[$btn1,$btn2],[$btn3,$btn4],[$btn5,$btn6]];}
elseif($count === 7){$btn=[[$btn1],[$btn2,$btn3,$btn4],[$btn5,$btn6,$btn7];}
elseif($count === 8){$btn=[[$btn1,$btn2],[$btn3,$btn4,$btn5],[$btn6,$btn7,$btn8]];}
elseif($count === 9){$btn=[[$btn1,$btn2,$btn3],[$btn4,$btn5,$btn6],[$btn7,$btn8,$btn9]];}
elseif($count === 10){$btn=[[$btn1],[$btn2,$btn3,$btn4],[$btn5,$btn6,$btn7],[$btn8,$btn9,$btn10]];}
elseif($count === 11){$btn=[[$btn1,$btn2],[$btn3,$btn4,$btn5],[$btn6,$btn7,$btn8],[$btn9,$btn10,$btn11]];}
elseif($count === 12){$btn=[[$btn1,$btn2,$btn3],[$btn4,$btn5,$btn6],[$btn7,$btn8,$btn9],[$btn10,$btn11,$btn12]];}
elseif($count === 13){$btn=[[$btn1],[$btn2,$btn3,$btn4],[$btn5,$btn6,$btn7],[$btn8,$btn9,$btn10],[$btn11,$btn12,$btn13]];}
elseif($count === 14){$btn=[[$btn1,$btn2],[$btn3,$btn4,$btn5],[$btn6,$btn7,$btn8],[$btn9,$btn10,$btn11],[$btn12,$btn13,$btn14]];}
elseif($count === 15){$btn=[[$btn1,$btn2,$btn3],[$btn4,$btn5,$btn6],[$btn7,$btn8,$btn9],[$btn10,$btn11,$btn12],[$btn13,$btn14,$btn15]];}
$menu = json_encode(array ("inline_keyboard" => $btn));
sMsg($c,'ДОБАВЛЕНИЕ НОВОГО ТОВАРА'.PHP_EOL.'➖➖➖➖➖'.PHP_EOL.'Выбор города:',$menu);
	
?>