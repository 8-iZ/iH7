<?php
	
if (!empty ($data)){
        	$result = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
            	$ors = mysqli_fetch_assoc($result);
                	$oras = $ors['title'];
                	$short = $ors['short'];
        	$yM[] = array('⛔️ НEТ, и больше не спрашивать');
                $menu = json_encode( array( 'resize_keyboard' => true, 'one_time_keyboard' => true, 'keyboard' => $yM));
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
	
?>