<?php
	
switch ($d) {   
  case 'BAZ':
case 'KOD':

break;
case 'XMP':
    sMsg($c, '01;01;ТОВАР #1;1;5[Данные товара #1 которые покупатель получит после оплаты в 5$]'.PHP_EOL.'01;02;ТОВАР #2;3;9[Данные товара #2 в количестве 3 штук в том же городе но в другом районе]'.PHP_EOL.'02;01;ТОВАР #1;2;10[Данные товара #1 но в количестве двух штук и в другом городе]'.PHP_EOL.'03;00;ТОВАР #1;1;5[Тот же самый товар, но в городе без указания районов]'.PHP_EOL.'01;00;ТОВАР #2;0;0[Будет создан шаблон товара #2 в котором будет указан город, остальные поля будут пропущены, товар в продажу не поступит]',$MrcM);
    break;
            case 'OFF':
mysqli_query($q, "UPDATE bots SET switcher = '0' WHERE id = '$botID'");
$ttl = 'ВКЛЮЧИТЬ❇️';$cb='BTNONN';$txt='БОТ ⛔️ ВЫКЛЮЧЕН';
$BTN = array ("text" => $ttl, "callback_data" => $cb);
$menu = json_encode(array("inline_keyboard" => [[$BTN]]));
sMsg($c,$txt,$menu);
break;
            case 'ONN':
mysqli_query($q, "UPDATE bots SET switcher = '1' WHERE id = '$botID'");
$ttl = '🅱️ЫКЛЮЧИТЬ ';$cb = 'BTNOFF';$txt='БОТ ✅ ЗАПУЩЕН';
$BTN = array ("text" => $ttl, "callback_data" => $cb);
$menu = json_encode(array("inline_keyboard" => [[$BTN]]));
sMsg($c,$txt,$menu);
break;
            case 'LSN':
        mysqli_query($q, "UPDATE extensions SET loc_saver = '1' WHERE id = '$botID'");
        $ttl = '🅱️ЫКЛЮЧИТЬ';$cb = 'BTNLSF';$txt='Функция сохранения города с последующим пропуском данного шага : ✅ВКЛЮЧЕНА';
        $BTN = array ("text" => $ttl, "callback_data" => $cb);
        $menu = json_encode(array("inline_keyboard" => [[$BTN]]));
        sMsg($c,$txt,$menu);
                break;
            case 'LSF':
                mysqli_query($q, "UPDATE extensions SET loc_saver = '1' WHERE id = '$botID'");
                    $ttl = 'ВКЛЮЧИТЬ✅';$cb = 'BTNLSN';$txt='Функция сохранения города с последующим пропуском данного шага : ⛔️ВЫКЛЮЧЕНА';
                        $BTN = array ("text" => $ttl, "callback_data" => $cb);
                $menu = json_encode(array("inline_keyboard" => [[$BTN]]));
                sMsg($c,$txt,$menu);
                break;
            case 'RANDBOT':
    	$result = mysqli_query ($q, "SELECT id FROM bots WHERE type = '$type' AND status = '1' AND switcher = '1'");
    	for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['id']);
        	$count = count($set);
        	$rand = rand(1,$count);
        	$randBot = $set[$rand];
        	if ($count === 1) {
            	$countDB = mysql_query("SELECT COUNT(1) FROM bots WHERE status = '1' AND switcher = '1'");
                    $count = mysql_fetch_array( $countDB );
                    $rand = rand(1,$count);
                    	$randBot = $set[$rand];
            if ($randBot == $botID){
                $rand = rand($rand,$count); 
                    $randBot = $set[$rand];}}
            $randDB = mysql_query("SELECT * FROM bots WHERE id = '$randBot'");
                $rBot = mysqli_fetch_assoc($randDB);
            $ttl = $rBot['title'];
            $url = 'https://t.me/'.$rBot['nick'];
                $btn = array ("text" => $ttl, "url" => $url);
	        $menu = json_encode(array ("inline_keyboard" => [[$btn]]));
    	sMsg($c,'ВАШ СЛУЧАЙНЫЙ БОТ:',$menu);
            break;
        case 'ADPADS':
            include ('merch.php');
            break;
            }

?>