<?php
	
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
	
?>