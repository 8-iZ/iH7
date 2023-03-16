<?php
	

        $sub = substr($d, 0, 2);
        if ($sub == 'BT' AND $type !== 'A'){
            $type = substr($d, -1);
            $newB = $user['temp'];
                mysqli_query($q, "UPDATE bots SET type = '$type' WHERE id = '$newB'");
            $fromDB = mysql_query("SELECT * FROM bots WHERE id = '$newB'");
	        $new = mysqli_fetch_assoc($fromDB);
	            $ttl = $new['name'];
	            $nkey = $new['skey'];
	            $nick = $new['nick'];
            mkdir('../../../bot/'.$newB, 0777);
            $pasport = fopen('../../../bot/'.$newB.'/'.$nkey, 'w');
	            fclose($pasport); 
            $index = fopen('../../../bot/'.$newB.'/index.php', 'w');
	            fwrite($index, '<?php'.PHP_EOL.PHP_EOL.'$botID = \''.$newB.'\';'.PHP_EOL.'$title = \''.$ttl.'\';'.PHP_EOL.'$key = \''.$nkey.'\';'.PHP_EOL.'include (\'../../iH6/config/init.php\');'.PHP_EOL.'$token = $botID.\':\'.$key;'.PHP_EOL.'include (\'../../iH6/assets/special/main.php\');'.PHP_EOL.PHP_EOL.'?>');
	            fclose($index); 
            $url1 = "https://api.telegram.org/bot'.$newB.':'.$nkey.'/setWebhook?url=https://shadowservice.site/bot/'.$newB.'/index.php";
            $url2 = "https://'.$nick.'.t.me" ;
        	    $WHBTN = array ("text" => "1️⃣ ПРОВЕРКА СОЕДИНЕНИЯ", "url" => $url1);
	            $CPBTN = array ("text" => "2️⃣ ПАНЕЛЬ УПРАВЛЕНИЯ", "url" => $url2);
                	$iHLK = json_encode(array ("inline_keyboard" => [[$WHBTN],[$CPBTN]]));
	        sMsg($c,$iHLtxt,$iHLK);}
	    elseif ($sub == 'BT'){
	        $bTp = substr($d,-1);
	        switch ($bTp) {
	            case 'A':
	                sMsg($c,'Данный тип не предназначен для аренды и является служебным ботом нашего сервиса. В данный момент вы исподьзуете бот именно этого типа. Однако для партнеров и реселлеров мы предлагаем публичный бот типа E на стандартных условиях по типу франчайзинг компании',$menu);
	                break;
	            case 'S':
	                
	                break;
	        }
	    }
	
?>