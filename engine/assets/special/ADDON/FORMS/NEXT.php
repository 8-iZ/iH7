<?php
	
if(strpos($uset['temp'], 'iH6=') !== false){ 
	if(strpos($uset['temp'], 'info=') !== false){ 
	list ($sub1,$sub2) = explode ('&', $user['temp']);
	if ($sub2 == 'info='){
	list ($sub3,$newB) = explode ('=',$sub1);
	if ($sub3 == 'iH6'){
	mysqli_query($q, "UPDATE users SET temp = '$newB' WHERE id = '$c'");
	$menu = json_encode(array ("inline_keyboard" => $NBTK));
	sMsg($c,'Выберите тип наиболее соответствующий вашему боту из списка вариантов ниже:',$menu);
	}}}}
	
if ($bot['master'] == $c AND  $user['temp'] !== ''){
	$temp = $user['temp'];
	list($merch,$obj) = explode ('&',$temp);
	list($new,$mrc) = explode ('=', $merch);
	if ($obj == 'INFO='){
	if ($new == 'NEW'){
$temp = 'NEW='.$mrc.'&COMP=';
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
$txt = 'Введите комплектацию товара:';
$menu = $PassM;
	}}
	if ($obj == 'COMP='){
	if ($new == 'NEW'){
mysqli_query($q, "UPDATE merches SET complectation = '1' WHERE id = '$mrc'");
$temp = 'NEW='.$mrc.'&PRICE=';
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
$txt = 'Введите стоимость товара в долларах:';
$menu = $PassM;
	}}
	if ($obj == 'PRICE='){
	if ($new == 'NEW'){
mysqli_query($q, "UPDATE merches SET status = '6' WHERE id = '$mrc'");
mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");
$txt = 'Черновик успешно сохранен';
$menu = $CPM;
	}}}
	sMsg($c,$txt,$menu);
	
?>