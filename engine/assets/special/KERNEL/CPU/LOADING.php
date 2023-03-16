<?php

// OPTIMIZING OF INLINE REQUESTS
if(!empty($data)){
    $m = substr($data, 0, 3);
    $d = substr($data, -3);
    $mID = $message_id_in;
    $c=$chat_id_in;}
else {
    $m = $message;
    $mID = $message_id;
    $c=$chat_id;}
	
?>