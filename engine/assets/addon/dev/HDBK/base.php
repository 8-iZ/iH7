<?php
    sMsg($C,'<i>Ты только что использовал одну из т.н. сервисных команд. Если ты:'.PHP_EOL.'> не знаешь, что это, в точности, значит...'.PHP_EOL.'> не уверен в умении правильно использовать подобные команды...'.PHP_EOL.'> не применял ранее данные инструменты и функции...'.PHP_EOL.'> не осведомлен о всех возможных последствиях и рисках...'.PHP_EOL.'... призываю воздержаться от использования команд данного набора по меньшеи мере до внимательного изучения документации и правил:</i>',$WIKIKB);
    
    if($d=='bot'){if($admin==$C){sMsg($C,'<u><b>ИДЕНТИФИКАЦИОННЫЕ ДАННЫЕ БОТА:</b></u>'.PHP_EOL.'<b>БотID:</b> <code>'.$botID.'</code>'.PHP_EOL.'<b>TOKEN:</b> <code>'.$T.'</code>'.PHP_EOL.'<b>Title:</b> '.$title.PHP_EOL.'<b>Info:</b>',$menu);}else{sMsg($C,'<b>Мои ID:</b> <code>'.$botID.'</code>',$menu);}}
    elseif(ctype_digit($d)){$DBsrc = mysqli_query ($q, "SELECT * FROM users WHERE id = '$d'");
    if (mysqli_num_rows ($DBsrc) == 1) {$found = mysqli_fetch_assoc($DBsrc); if($found['nick']!==''){ sMsg($C,'<u><b>ПОЛЬЗОВАТЕЛЬ '.$d.':</b></u>'.PHP_EOL.'<a href="https://t.me/'.$found['nick'].'">'.$first_name.' '.$last_name.'</a>',$menu);}else{sMsg($C,'<u><b>ПОЛЬЗОВАТЕЛЬ '.$d.':</b></u>'.PHP_EOL.$first_name.' '.$last_name,$menu);}}}
    else{sMsg($C,'Твои ID: <code>'.$uID.'</code>',$menu);}
?>