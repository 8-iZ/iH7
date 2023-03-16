<?php

$adminerUrl = $app.'Adminer/adminer/index.php?server='.$DBh.'&username='.$DBu.'&db='.$DBn;
    $ADMINER = array ("text" => 'Adminer', "url" => $adminerUrl);
    
if(!empty($data)){
    if(str_starts_with($data,'DBE')){ $d = substr($data,3,3);
        switch($d){
            case 'FUL':
                $result = mysqli_query ($q, "SHOW TABLES");
	            while ($row = $result->fetch_row()) {
		            $table = $row[0];
    		        $DBtbls = 'Таблица <b>'.$table.'</b>:';
$tab = mysqli_query ($q, "SHOW COLUMNS FROM $table"); 
while ($col = $tab->fetch_row()) {
$DBtbls = $DBtbls.PHP_EOL.'-- <i>'.$col[0].'</i> : ['.$col[1].'; '.$col[2].'; '.$col[3].'; '.$col[4].'; '.$col[5].']'; 
    }
    $DBEVWT='DBEVWT'.$table;
    $VWB = array ("text" => 'смотреть', "callback_data" => $DBEVWT);
    $EDB = array ("text" => 'править', "callback_data" => 'DBEEDT'.$table);
    $DLB = array ("text" => 'удалить', "callback_data" => 'DBEDLT'.$table);
$TabM = json_encode(array("inline_keyboard" => [[$VWB,$EDB,$DLB]]));
        sMsg($C,$DBtbls,$TabM);
		    
		}
		break;
		case 'VWT':
		    
        $table = substr($data,6);
        $DBtbls = 'Таблица <b>'.$table.'</b>:';
$tab = mysqli_query ($q, "SELECT * FROM $table"); 
while ($col = $tab->fetch_row()) {
    $DBtbls = $DBtbls.PHP_EOL.'-- <i>'.$col[0].'</i> : '.$col[1];
//foreach ($col as $key => $value) {$DBtbls = $DBtbls.$value;}
    
}
    
    $EDB = array ("text" => 'править', "callback_data" => 'DBEEDT'.$table);
    $DLB = array ("text" => 'удалить', "callback_data" => 'DBEDLT'.$table);
$TabM = json_encode(array("inline_keyboard" => [[$EDB,$DLB]]));
        sMsg($C,$DBtbls,$TabM);
		    
		
		break;}
    }
}else{

$DBtbls = '<b>Таблицы БАЗЫ ДАННЫХ:</b>';
$result = mysqli_query ($q, "SHOW TABLES");
	while ($row = $result->fetch_row()) {
		 $DBtbls = $DBtbls.PHP_EOL.'-- <i>'.$row[0].'</i>';}
		 $DBtbls = $DBtbls.PHP_EOL.PHP_EOL.'| <i>Также cуществует возможность использования альтернативного веб-редактора <b>"Adminer"</b></i>';
    $FUL = array ("text" => 'развернуть', "callback_data" => 'DBEFULL');
    $NEW = array ("text" => 'новая', "callback_data" => 'DBENEW');
$MM = json_encode(array("inline_keyboard" => [[$FUL,$NEW],[$ADMINER]]));
sMsg($C,$DBtbls,$MM);
}
		?>