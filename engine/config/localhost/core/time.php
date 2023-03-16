<?php 

date_default_timezone_set('Europe/Chisinau');
$datetime = date('d.m.Y H:i:s');
$fulltime = date(DATE_RFC822);
$clock = date('d.m.Y H:i');
$microTime = microtime(true);
$day = date('l');
$uTime = time();
$time = $_SERVER['REQUEST_TIME'];

?>