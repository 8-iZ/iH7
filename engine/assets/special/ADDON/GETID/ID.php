<?php
	
$BAZBTN = array ("text" => "БАЗА ЗНАНИЙ", "callback_data" => "BTNBAZ");
        	$BAZM = json_encode(array ("inline_keyboard" => [[$BAZBTN]]));
        sMsg($c,'<b>👋🏻Дороу, БРо!</b>'.PHP_EOL.'Ты только что использовал одну из <i>служебных команд</i>. Более подробную информацию о служебных командах, скрытых возможностях и инструментах для разработчиков содержит наша',$BAZM);
		sMsg($c,'USER <b>ID</b>:  <code>'.$c.'</code>',$menu);
	
?>