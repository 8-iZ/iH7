<?php
	
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
	
?>