<?php
	
$country = '373'; 
$city = '37301';

mysqli_query ($q, "TRUNCATE TABLE places");

mysqli_query ($q, "INSERT INTO places (country, city, sector, name) VALUES ('$country', '', '', 'MDA'), 
('$country', '$city', '', 'CHISH'),
('$country', '$city', '3730102', 'BTK'),
('$country', '$city', '3730103', 'RSK'),
('$country', '$city', '3730101', 'CTR'),
('$country', '$city', '3730105', 'BKN'),
('$country', '$city', '3730104', 'CKN'),
('$country', '$city', '3730106', 'TCN'),
('$country', '$city', '3730107', 'SKL'),
('$country', '$city', '3730108', 'PSV'),
('$country', '$city', '3730109', 'KDR'),
('$country', '$city', '3730110', 'BBC'), 
('$country', '37302', '', 'BELTS'), 
('$country', '37311', '', 'TIRAS'), 
('$country', '37312', '', 'BENDR'), 
('$country', '37303', '', 'KOMRT'), 
('$country', '37304', '', 'KAGUL'), 
('$country', '37305', '', 'CDRLG'), 
('$country', '37306', '', 'ORHEI'), 
('$country', '37307', '', 'ANNOI'), 
('$country', '37309', '', 'STRSN'), 
('$country', '37313', '', 'RYBKA'), 
('$country', '37315', '', 'GRGRP'), 
('$country', '37314', '', 'REZIN'), 
('$country', '37308', '', 'SOROK')");
	
?>