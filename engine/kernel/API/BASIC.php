<?php


$output = json_decode(file_get_contents('php://input'), TRUE); 
$callback = $output['callback_query']; 

    if  (!empty($callback)) { include ('webhook/callback.php'); }
        else { include ('webhook/request.php'); }

if(!empty($data)){
$C=$ci;$mID=$cmID;
$m = mb_substr($data, 0, 3);
$d = mb_substr($data, 3, 3);
$p = mb_substr($data, 6, 3);
$x = mb_substr($data, 9, 3);
}else{$C=$cID;$m=$message;}

?>