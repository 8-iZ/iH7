<?php

// VERIFICATION OF BOT IN DATABASE
$DBbot = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$botID'");
    $bot = mysqli_fetch_assoc ($DBbot);
        $type = $bot[type];
        //$type = 'L';
        $alert = $bot['alert'];
        $admin = $bot['master'];
	
?>