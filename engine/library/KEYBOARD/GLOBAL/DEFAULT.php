<?php

       	// SPECIAL ONE-TIME KEYBOARDS
$BanM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $BMK));
$EdM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $EdMK));
$bkM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $bkMK));
$MrcM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $MrcKM));
$PassM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => true,
	'keyboard' => $PassK));
$KatM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $KatK));
	
?>