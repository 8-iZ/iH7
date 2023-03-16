<?php


	
	// Определим собственный класс исключений для ошибок MySQL
	class MySQL_Exception extends Exception {
		public function __construct($message) {
			parent::__construct($message);
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>MySQL Tables Viewer</title>
<style>
table { 
border-collapse:separate; 
border:none; 
border-spacing:0; 
margin:8px 12px 18px 6px; 
line-height:1.2em; 
margin-left:auto; 
margin-right:auto; 
overflow: auto }
table th { 
font-weight:bold; 
background:#666; color:white; 
border:1px solid #666; 
border-right:1px solid white }
table th:last-child { 
border-right:1px solid #666 }
table caption { 
font-style:italic; 
margin:10px 0 20px 0; 
text-align:center; 
color:#666; 
font-size:1.2em }
tr{ 
border:none }
td { 
border:1px solid #666; 
border-width:1px 1px 0 0 }
td, th { 
padding:15px }
tr td:first-child { 
border-left-width:1px }
tr:last-child td { 
border-bottom-width:1px }
</style>
</head>

<body>

<?php
	try {
		// Запрос к базе данных
		$result = $q->query('SHOW TABLES');
        
        // В случае неудачного запроса генерируем исключение
		if (!$result) throw new MySQL_Exception($q->error);
		
		// Пример вставки данных в таблицу
		$q->query("INSERT INTO customers VALUES (NULL, 'Андрей', 'Петров', '+7-920-555-55-55')");
			
        // Отображаем результаты			
		echo '<p>Таблицы, имеющиеся в базе данных: </p>';		
		while ($row = $result->fetch_row()) {
			// Усложним задачу отобразив структуру таблиц
			echo "<table><caption> {$row[0]} </caption><tr>";
			
			// Получить названия столбцов
			$result1 = $q->query("SELECT * FROM {$row[0]}");
			if (!$result1) throw new MySQL_Exception($q->error);
			
			for($i = 0; $i < $q->field_count; $i++)
			{
				$field_info = $result1->fetch_field();
				echo "<th>{$field_info->name}</th>";
			}
			
			echo '</tr>';
			
			// Получить данные
			while ($row1 = $result1->fetch_row()) {
				echo '<tr>';
				foreach($row1 as $_column) {
					echo "<td>{$_column}</td>";
				}
				echo "</tr>";
			}
			
			echo '</table>';
		}
	}
	catch (Exception $ex) {
		echo 'Ошибка при работе с MySQL: <b style="color:red;">'.$ex->getMessage().'</b>';
	}
?>
</body>
</html>