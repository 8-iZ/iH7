<?php
$email = $_GET['email'];
?><html>
<head>
<style>
h1 {color:white}
.box {background-color:black}
</style>
</head>
<body>
<div class="box">
<h1><?php 
echo 'Получены личные данные содержащие электронный ящик ' . $email. '. Провожу попытку подписки по данной почте. Ожидайте...';
?></h1></div></body>
<?php
$email = $_GET['email'];

$root = '../../../../';

include ($root.'config/init.php');

$result = mysqli_query($q, "SELECT * FROM users WHERE email = $email");
	if (mysql_num_rows ($result) ! == 0) {
		$user = mysqli_fetch_assoc ($result); 
			$id = $user[id];
			$log = $user[log].PHP_EOL.$time.' unSS '.$email;
				mysqli_query
($q, 'UPDATE `users` SET `email`=$email,`log`=$log WHERE `id`=$id');
				echo 'Вы успешно отписались от отправлений с нашего сервиса на ваш электронный ящик.'
	} else {
		$log = $time.' newSS '.$email;
			mysqli_query
($q, 'INSERT INTO `users`(`email`, `start`, `log`) VALUES ($email,NOW(),$log)');
			echo 'Спасибо! Ваш электронный ящик прошел валидацию и успешно зарегистрирован.'.PHP_EOL.'В будущем вы можете с его помощью авторизоваться в нашей системе.'.PHP_EOL.'Пожалуйста, регулярно проверяйте входящие сообщения, чтобы не пропустить почтовые отправления от нашего сервиса.'; 
			}
?>