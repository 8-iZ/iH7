<?php
	
function sMsg($c,$text,$menu){SCA($c,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$c.'&text='.urlencode($text).'&reply_markup='.$menu. '&parse_mode=html&disable_web_page_preview=true');}

function sndP($c,$pic,$t,$kb){SCA($c,'upload_photo'); file_get_contents($GLOBALS['api'].'/sendPhoto?chat_id='.$c.'&photo='.$pic.'&caption='.urlencode($t).'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true'); }

function SCA($c,$act){file_get_contents($GLOBALS['api'].'/sendChatAction?chat_id='.$c.'&action='.$act);}
	
?>