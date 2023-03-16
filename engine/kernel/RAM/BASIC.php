<?php
	
function sMsg($C,$X,$K){SCA($C,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$C.'&text='.urlencode($X).'&reply_markup='.$K.'&parse_mode=html&disable_web_page_preview=true');}
function dMsg($C,$mID){file_get_contents($GLOBALS['api'].'/deleteMessage?chat_id='.$C.'&message_id='.mID);}

function sndP($C,$pic,$X,$K){SCA($C,'upload_photo'); file_get_contents($GLOBALS['api'].'/sendPhoto?chat_id='.$C.'&photo='.$pic.'&caption='.urlencode($X).'&reply_markup='.$K.'&parse_mode=html&disable_web_page_preview=true'); }
function sndS($C,$X){file_get_contents($GLOBALS['api'].'/sendSticker?chat_id='.$C.'&sticker='.$X);}
function sndE($C,$X){SCA($C,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$C.'&text='.urlencode($X).'&reply_markup='.json_encode(array("inline_keyboard" => [[array ("text" => "Подробнее", "url" => $GLOBALS['error'])]])).'&parse_mode=html&disable_web_page_preview=true');}
function sndVo($C,$X){SCA($C,'record_voice'); file_get_contents($GLOBALS['api'].'/sendVoice?chat_id='.$C.'&voice='.$X); }

function dltM($C,$mID){ file_get_contents($GLOBALS['api'].'/deleteMessage?chat_id='.$C.'&message_id='.$mID); }
function fwdM($C,$fcID,$mID){ file_get_contents($GLOBALS['api'].'/forwardMessage?chat_id='.$C.'&from_chat_id='.$fcID.'&message_id='.$mID); }
function edtMT($C,$mID,$X,$K){ file_get_contents($GLOBALS['api'].'/editMessageText?chat_id='.$C.'&message_id='.$mID.'&text='.urlencode($X).'&reply_markup='.$K.'&parse_mode=html&disable_web_page_preview=true'); }
function edtMM($C,$mID,$pic,$X,$K){ file_get_contents($GLOBALS['api'].'/editMessageMedia?chat_id='.$C.'&inline_message_id='.$mID.'&media='.$pic.'&reply_markup='.$K.'&parse_mode=html&disable_web_page_preview=true'); }

function SCA($C,$act){file_get_contents($GLOBALS['api'].'/sendChatAction?chat_id='.$C.'&action='.$act);}
function awrAlt($query_id,$txt){ file_get_contents($GLOBALS['api'].'/answerCallbackQuery?callback_query_id='.$query_id.'&text='.urlencode($txt).'&show_alert=true');}

?>