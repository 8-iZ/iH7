<?php
	
if (!empty($message)) {
	       $sshBtn = array ("text" => "подключить БД", "callback_data" => "SQLSSH");
	       $ndbBtn = array ("text" => "создать БД", "callback_data" => "SQLNDB");
	       $locBtn = array ("text" => "настроить БД", "callback_data" => "SQLLOC");
	       $newBtn = array ("text" => "новая таблица", "callback_data" => "SQLNEW");
        $menu = json_encode(array ("inline_keyboard" => [[$locBtn,$ndbBtn,$sshBtn],[$newBtn]]));
            sMsg($c,'<b><i>БАЗА ДАННЫХ</i>: <code>"'.$DBn.'"</code></b>',$menu);
        $showtables= mysqli_query($q,"SHOW TABLES FROM $DBn");
        while($table = mysqli_fetch_array($showtables)) { 
            $tableName = $table[0];
            $txt = 'таблица <b>[<i>'.$tableName.'</i>]:</b>';
            $showcolumns = mysqli_query($q,"SELECT COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tableName'");
            if ($showcolumns) {
                    $txt = $txt.PHP_EOL.PHP_EOL;
                    $columnName = mysqli_query($q,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tableName'");
                    $columnData = mysqli_query($q,"SELECT DATA_TYPE, CHARACTER_MAXIMUM_LENGTH FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tableName'");
            while($column = mysqli_fetch_row($showcolumns)) {
                    $col = mysqli_fetch_array($columnName);
                    $txt = $txt.'<i><b>'.$col['COLUMN_NAME'].'</b> (';
                    $column = mysqli_fetch_row($columnData);
                    foreach($column as $key=>$value) {
                        
                        $txt = $txt.$value;}
                    $txt = $txt.')</i>'.PHP_EOL;
        }}
	       $seeBtn = array ("text" => "смотреть", "callback_data" => 'SQLSEE'.$table[0]);
	       $editBtn = array ("text" => "править", "callback_data" => 'SQLEDT'.$table[0]);
	       $delBtn = array ("text" => "удалить", "callback_data" => 'SQLDEL'.$table[0]);
        	$menu = json_encode(array ("inline_keyboard" => [[$seeBtn,$editBtn,$delBtn]]));
            sMsg($c,$txt,$menu);}
} else {

}
	
?>