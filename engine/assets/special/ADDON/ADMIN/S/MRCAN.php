<?php
	
$obj = substr($d, 0, 1);
if ($obj == 'C'){
$prm = substr($d, 1, 2);
$city = '373'.$prm;
mysqli_query ($q, "INSERT INTO merches (seller,agent,city,status) VALUES ('$botID','$c','$city','0'"); 
$DBID = mysqli_query ($q, "SELECT id FROM merches WHERE seller = '$botID' AND agent = '$c' AND status = '0' AND city = '$city' LIMIT 1");
$mrcID = mysqli_fetch_assoc($DBID);
$temp = 'NEW='.$mrcID['id'];
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
$DBct = mysqli_query ($q, "SELECT name FROM places WHERE city = '$city'");
if (mysqli_num_rows ($DBct) == 1) {
$temp = $temp.'&TITLE=';
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
$txt = 'Введи наименование нового товара';
$DBmrc = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$botID' LIMIT 5");
if (mysqli_num_rows ($DBmrc) !== 0){
$txt = $txt.' или выбери один из использованных ранее шаблонов';
for ($set = array (); $row = $DBmrc->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
	if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}
switch ($tc) {   
	case '5':
$mrc5 = $set[4];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc5'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn5 = array ("text" => $mrc5, "callback_data" => $cb);
case '4':
$mrc4 = $set[3];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc4'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn4 = array ("text" => $mrc4, "callback_data" => $cb);
case '3':
$mrc3 = $set[2];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc3'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn3 = array ("text" => $mrc3, "callback_data" => $cb);
case '2':
$mrc2 = $set[1];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc2'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn2 = array ("text" => $mrc2, "callback_data" => $cb);
case '1':
$mrc1 = $set[0];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc1'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn1 = array ("text" => $mrc1, "callback_data" => $cb);
break;}
if ($count === 1){$btn = [[$btn1]];}elseif ($count === 2){$btn = [[$btn1,$btn2]];}elseif ($count === 3){$btn = [[$btn1],[$btn2,$btn3]];}elseif ($count === 4){$btn = [[$btn1,$btn2],[$btn3,$btn4]];}elseif ($count === 5){$btn = [[$btn1],[$btn2,$btn3],[$btn4,$btn5]];}
$CPM = json_encode(array("inline_keyboard" => $btn)); }
$txt = $txt.':'; }
else {
for ($set = array (); $row = $DBct->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
	if($count === 2){$tc='1';}
elseif($count === 3){$tc='2';}
elseif($count === 4){$tc='3';}
elseif($count === 5){$tc='4';}
elseif($count === 6){$tc='5';}
elseif($count === 7){$tc='6';}
elseif($count === 8){$tc='7';} 
elseif($count === 9){$tc='8';}
elseif($count === 10){$tc='9';}
elseif($count === 11){$tc='10';}
elseif($count === 12){$tc='11';}
elseif($count === 13){$tc='12';}
switch ($tc) {   
	case '12':
$sec12 = $set[12];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec12'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec12;
$btn12 = array ("text" => $tit, "callback_data" => $cb);
case '11':
$sec11 = $set[11];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec11'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec11;
$btn11 = array ("text" => $tit, "callback_data" => $cb);
case '10':
$sec10 = $set[10];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec10'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec10;
$btn10 = array ("text" => $tit, "callback_data" => $cb);
case '9':
$sec9 = $set[9];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec9'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec9;
$btn9 = array ("text" => $tit, "callback_data" => $cb);
case '8':
$sec8 = $set[8];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec8'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec8;
$btn8 = array ("text" => $tit, "callback_data" => $cb);
case '7':
$sec7 = $set[7];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec7'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec7;
$btn7 = array ("text" => $tit, "callback_data" => $cb);
case '6':
$sec6 = $set[6];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec6'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec6;
$btn6 = array ("text" => $tit, "callback_data" => $cb);
case '5':
$sec5 = $set[5];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec5'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec5;
$btn5 = array ("text" => $tit, "callback_data" => $cb);
case '4':
$sec4 = $set[4];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec4'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec4;
$btn4 = array ("text" => $tit, "callback_data" => $cb);
case '3':
$sec3 = $set[3];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec3'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec3;
$btn3 = array ("text" => $tit, "callback_data" => $cb);
case '2':
$sec2 = $set[2];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec2'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec2;
$btn2 = array ("text" => $tit, "callback_data" => $cb);
case '1':
$sec1 = $set[1];
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$sec1'");
$mfa = mysqli_fetch_assoc($DBcb);
$tit = $mfa['title'];
$cb = 'NEWS'.$sec1;
$btn1 = array ("text" => $tit, "callback_data" => $cb);
break;}
if ($count === 2){$btn = [[$btn1]];}elseif ($count === 3){$btn = [[$btn1,$btn2]];}elseif ($count === 4){$btn = [[$btn1,$btn2,$btn3]];}elseif ($count === 5){$btn = [[$btn1,$btn2],[$btn3,$btn4]];}elseif ($count === 6){$btn = [[$btn1,$btn2],[$btn3,$btn4,$btn5]];}elseif ($count === 7){$btn = [[$btn1,$btn2,$btn3],[$btn4,$btn5,$btn6]];}elseif ($count === 8){$btn = [[$btn1,$btn2],[$btn3,$btn4],[$btn5,$btn6,$btn7]];}elseif ($count === 9){$btn = [[$btn1,$btn2],[$btn3,$btn4,$btn5],[$btn6,$btn7,$btn8]];}elseif ($count === 10){$btn = [[$btn1,$btn2,$btn3],[$btn4,$btn5,$btn6],[$btn7,$btn8,$btn9]];}elseif ($count === 11){$btn = [[$btn1,$btn2],[$btn3,$btn4],[$btn5,$btn6,$btn7],[$btn8,$btn9,$btn10]];}elseif ($count === 12){$btn = [[$btn1,$btn2],[$btn3,$btn4,$btn5],[$btn6,$btn7,$btn8],[$btn9,$btn10,$btn111]];}elseif ($count === 13){$btn = [[$btn1,$btn2,$btn3],[$btn4,$btn5,$btn6],[$btn7,$btn8,$btn9],[$btn10,$btn11,$btn12]];}
$CPM = json_encode(array("inline_keyboard" => $btn)); 
$txt = 'Выбор района:';}}
elseif ($obj == 'S'){
$prm = substr($d, 1, 3);
$sec = mysqli_query ($q, "SELECT sector FROM places WHERE name = '$prm'");
$sector = mysqli_fetch_assoc($sec);
$sector = $sector['sector'];
$temp = $user['temp'];
list($new,$mrc) = explode ('=',$temp);
if ($new == 'NEW'){
mysqli_query($q, "UPDATE merches SET sector = '$sector' WHERE id = '$mrc'");}
$temp = $temp.'&TITLE=';
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
$txt = 'Введи наименование нового товара';
$DBmrc = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$botID' LIMIT 5");
if (mysqli_num_rows ($DBmrc) !== 0){
$txt = $txt.' или выбери один из использованных ранее шаблонов';
for ($set = array (); $row = $DBmrc->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
	if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}
switch ($tc) {   
	case '5':
$mrc5 = $set[4];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc5'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn5 = array ("text" => $mrc5, "callback_data" => $cb);
case '4':
$mrc4 = $set[3];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc4'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn4 = array ("text" => $mrc4, "callback_data" => $cb);
case '3':
$mrc3 = $set[2];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc3'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn3 = array ("text" => $mrc3, "callback_data" => $cb);
case '2':
$mrc2 = $set[1];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc2'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn2 = array ("text" => $mrc2, "callback_data" => $cb);
case '1':
$mrc1 = $set[0];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$mrc1'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWM'.$cb['short'];
$btn1 = array ("text" => $mrc1, "callback_data" => $cb);
break;}
if ($count === 1){$btn = [[$btn1]];}elseif ($count === 2){$btn = [[$btn1,$btn2]];}elseif ($count === 3){$btn = [[$btn1],[$btn2,$btn3]];}elseif ($count === 4){$btn = [[$btn1,$btn2],[$btn3,$btn4]];}elseif ($count === 5){$btn = [[$btn1],[$btn2,$btn3],[$btn4,$btn5]];}
$CPM = json_encode(array("inline_keyboard" => $btn));}
$txt = $txt.':';}
elseif ($obj == 'M'){
$prm = substr($d, 1, 3);
$DBcb = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$prm'");
$mrc = mysqli_fetch_assoc($DBcb);
$merch = $mrc['title'];
$DBmrc = mysqli_query ($q, "SELECT * FROM merches WHERE name = '$merch' AND seller = '$botID' LIMIT 1");
$mrc = mysqli_fetch_assoc($DBmrc);
$info = $mrc['info'];
$gallery = $mrc['gallery'];
$temp = $user['temp'];
$comp = $mrc['complectation'];
list($nmo,$ttl) = explode ('&',$temp);
list($new,$mrc) = explode ('=',$nmo);
$temp = 'NEW='.$mrc.'&COMP=';
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
if ($new == 'NEW'){
mysqli_query($q, "UPDATE merches SET name = '$merch', info = '$info', gallery = '$gallery' WHERE id = '$mrc'");}
$txt = 'Укажи комплектацию или выбери из ранее использованных вариантов:';
$DBcomp = mysqli_query ($q, "SELECT DISTINCT complectation FROM merches WHERE name = '$merch' AND seller = '$botID'");
for ($set = array (); $row = $DBcomp->fetch_assoc(); $set[] = $row['complectation']);
	$count = count($set);
	if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}
switch ($tc) {   
	case '5':
$comp5 = $set[4];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$comp5'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWW'.$cb['short'];
$btn5 = array ("text" => $comp5, "callback_data" => $cb);
case '4':
$comp4 = $set[3];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$comp4'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWW'.$cb['short'];
$btn4 = array ("text" => $comp4, "callback_data" => $cb);
case '3':
$comp3 = $set[2];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$comp3'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWW'.$cb['short'];
$btn3 = array ("text" => $comp3, "callback_data" => $cb);
case '2':
$comp2 = $set[1];
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$comp2'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWW'.$cb['short'];
$btn2 = array ("text" => $comp2, "callback_data" => $cb);
case '1':
$DBcb = mysqli_query ($q, "SELECT short FROM callbacks WHERE title = '$comp'");
$cb = mysqli_fetch_assoc($DBcb);
$cb = 'NEWW'.$cb['short'];
$btn1 = array ("text" => $comp, "callback_data" => $cb);
break;}
if ($count === 1){$btn = [[$btn1]];}elseif ($count === 2){$btn = [[$btn1,$btn2]];}elseif ($count === 3){$btn = [[$btn1],[$btn2,$btn3]];}elseif ($count === 4){$btn = [[$btn1,$btn2],[$btn3,$btn4]];}elseif ($count === 5){$btn = [[$btn1],[$btn2,$btn3],[$btn4,$btn5]];}
$CPM = json_encode(array("inline_keyboard" => $btn));}
elseif ($obj == 'W'){
$prm = substr($d, 1, 3);
$DBcmp = mysqli_query ($q, "SELECT title FROM callbacks WHERE short = '$prm'");
$cmp = mysqli_fetch_assoc($DBmrc);
$comp = $cmp['title'];
$temp = $user['temp'];
list($new,$mrc) = explode ('=',$temp);
if ($new == 'NEW'){
$DBttl = mysqli_query ($q, "SELECT name FROM merches WHERE id = '$mrc' ");
$ttl = mysqli_fetch_assoc($DBttl);
$title = $ttl['name'];}
$DBprc = mysqli_query ($q, "SELECT price FROM merches WHERE seller = '$botID' AND name = '$title' AND complectation = '$comp' LIMIT 1");
$prc = mysqli_fetch_assoc($DBprc);
$price = $prc['price'];
mysqli_query($q, "UPDATE merches SET complectation = '$comp', price = '$price' WHERE id = '$mrc'");
$txt = $ADDTXT;}
	
?>