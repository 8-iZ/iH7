<?php 

if (preg_match('ltc', $addonList)) {
	include ('free/litecoin/index.php'); }
	
if (preg_match('dbv', $addonList)) {
	include ('free/DBvwr/index.php'); }
	
?>