<?php


$words = array('привет', 'хай', 'добрый день');
foreach($words as $item)
     {
      if (preg_match("/$item/",$message)) {sMsg($c,'В предложении есть слово - '.$item,$menu);}
     }

?>