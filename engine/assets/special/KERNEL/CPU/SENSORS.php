<?php
	
	if(strpos($user['temp'], 'iH6=') !== false){ 
        	if(strpos($user['temp'], 'info=') !== false){ 
            	list ($sub1,$sub2) = explode ('&', $user['temp']);
            	if ($sub2 == 'info='){
                	list ($sub3,$newB) = explode ('=',$sub1);
                   	if ($sub3 == 'iH6'){
                    	   mysqli_query($q, "UPDATE bots SET info = '$message' WHERE id = '$newB'");
            	           mysqli_query($q, "UPDATE users SET temp = '$newB' WHERE id = '$c'");
	                   $menu = json_encode(array ("inline_keyboard" => $NBTK));
	                   sMsg($c,'Выберите тип наиболее соответствующий вашему боту из списка вариантов ниже:',$menu);
	   }}}}
	   if ($bot['master'] == $c AND  $user['temp'] !== ''){
	       $temp = $user['temp'];
	       list($merch,$obj) = explode ('&',$temp);
	       list($new,$mrc) = explode ('=', $merch);
	       if ($obj == 'TITLE='){
	           if ($new == 'NEW'){
                        mysqli_query($q, "UPDATE merches SET name = '$m' WHERE id = '$mrc'");
                    $temp = 'NEW='.$mrc.'&INFO=';
                        mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
                    $txt = 'Введите описание товара (необязательно, можно пропустить):';
                    $menu = $PassM;
	   }}
	   if ($obj == 'INFO='){
	       if ($new == 'NEW'){
                    mysqli_query($q, "UPDATE merches SET info = '$m' WHERE id = '$mrc'");
                $temp = 'NEW='.$mrc.'&COMP=';
                    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
                $txt = 'Введите комплектацию товара:';
                $menu = $PassM;
           }}
	   if ($obj == 'COMP='){
	       if ($new == 'NEW'){
                    mysqli_query($q, "UPDATE merches SET complectation = '$m' WHERE id = '$mrc'");
                $temp = 'NEW='.$mrc.'&PRICE=';
                    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
                $txt = 'Введите стоимость товара в долларах:';
                $menu = $PassM;
           }}
	   if ($obj == 'PRICE='){
	       if ($new == 'NEW'){
                    mysqli_query($q, "UPDATE merches SET price = '$m' WHERE id = '$mrc'");
                $temp = 'NEW='.$mrc.'&DATA=';
                    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
                $txt = $ADDTXT;
                $menu = $PassM;
    	   }}
        } 
	   elseif($user['temp'] == 'iH6=BOT'){
	       $temp = 'iH6='.$message;
	           mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
	       $txt = 'Теперь пришлите в ответном сообщении токен бота, которого вы желаете подключить к "iR0N H3ART", либо просто перешлите из диалога с @BotFather сообщение, содержащее этот токен';
	       $menu = $iHKM;
	   } else {
	       $txt = 'Команда недоступна на данный момент. Пожалуйста, попробуйте позже';}
	   sMsg($c,$txt,$menu);
	
?>