<?php

    list($title,$T) = explode('|',$B);
     list($botID,$key) = explode(':',$T);
    
	
         $RR = '../..';
        $iHroot = $R.'/'.$engineDir.'/';
        $iHcore = $iHroot.'kernel/';
        $iHconf = $iHroot.'config/';
        $iHrsrc = $iHroot.'assets/';
        $iHlibs = $iHroot.'library/';
         $BRRD = $RR.'/';
$tdir = $iHconf.'localhost/';
include ($tdir.'core/www.php');
	        
         $WR = $ssl.$domain;
         $error = $WR.'/error';
         $app = $WR.'/'.$engineDir.'/assets/addon/app/';

$apiL = $ssl.'api.'.$TgAH.'/';
$api = $apiL.'bot'.$T;

   
include ($tdir.'core/dirs.php');
include ($tdir.'core/time.php');      

include ($tdir.'connect/q.php');                      
?>