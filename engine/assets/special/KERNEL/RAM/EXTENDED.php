<?php

	// ❦ ═━ⵈⵈ━═ ═ •⊰❂⊱• ═ ══ⵈⵈ━═ ❦ 
	// •PR0JECT "IRON♡HEART" ENG1NE•
	// ❦ ═━ⵈⵈ━═ ═ •⊰❂⊱• ═ ══ⵈⵈ━═ ❦ 
	
		// МЕТОДЫ И ФУНКЦИИ
		
function sMsg($c,$text,$menu){SCA($c,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$c.'&text='.urlencode($text).'&reply_markup='.$menu. '&parse_mode=html&disable_web_page_preview=true');}
function sfrM($cID,$t,$kb){SCA($cID,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$cID.'&text='.urlencode($t).'&force_reply=true&reply_markup='.$kb. '&parse_mode=html&disable_web_page_preview=true');}
function sndF($cID,$f){SCA($cID,'upload_document'); file_get_contents($GLOBALS['api'].'/sendDocument?chat_id='.$cID.'&document='.$f); }
function sndVo($cID,$vo){SCA($cID,'record_voice'); file_get_contents($GLOBALS['api'].'/sendVoice?chat_id='.$cID.'&voice='.$vo); }
function sndL($cID,$lat,$lon){file_get_contents($GLOBALS['api'].'/sendLocation?chat_id='.$cID.'&latitude='.$lat.'&longitude'.$lon); }
function sndLL($cID,$lon,$lat,$lv){ file_get_contents($GLOBALS['api'].'/sendLocation?chat_id='.$cID.'&latitude='.$lon.'&latitude'.$lat.'&live_period='.$lv); }
function sndP($cID,$pic,$t,$kb){SCA($cID,'upload_photo'); file_get_contents($GLOBALS['api'].'/sendPhoto?chat_id='.$cID.'&photo='.$pic.'&caption='.urlencode($t).'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true'); }
function sndV($cID,$v,$t,$kb){SCA($cID,'upload_video');  file_get_contents($GLOBALS['api'].'/sendVideo?chat_id='.$cID.'&video='.$v.'&caption='.urlencode($t).'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true'); }
function recV($cID,$v,$t,$kb){SCA($cID,'record_video');  file_get_contents($GLOBALS['api'].'/sendVideo?chat_id='.$cID.'&video='.$v.'&caption='.urlencode($t).'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true'); }
function sndS($cID,$stk){if($usr['graf']!=='off'){file_get_contents($GLOBALS['api'].'/sendSticker?chat_id='.$cID.'&sticker='.$stk.'.webp');}}
function sndC($cID,$pn,$fn,$ln,$rmID,$kb){file_get_contents($GLOBALS['api'].'/sendContact?chat_id='.$cID.'&phone_number='.$pn.'&first_name='.$fn.'&last_name='.$ln.'&reply_to_message_id='.$rmID.'&reply_markup='.$kb);}
function rplM($cID,$t,$mID,$kb){SCA($cID,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$cID.'&text='.urlencode($t).'&reply_to_message_id='.$mID.'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true');

	// ИЗМЕНЕНИЕ И УДАЛЕНИЕ
function dltM($cID,$mID){ file_get_contents($GLOBALS['api'].'/deleteMessage?chat_id='.$cID.'&message_id='.$mID); }
function fwdM($cID,$fcID,$mID){ file_get_contents($GLOBALS['api'].'/forwardMessage?chat_id='.$cID.'&from_chat_id='.$fcID.'&message_id='.$mID); }
function edtMT($cID,$mID,$t){ file_get_contents($GLOBALS['api'].'/editMessageText?chat_id='.$cID.'&message_id='.$mID.'&text='.urlencode($t).'&parse_mode=html&disable_web_page_preview=true'); }
function edMRM($cID,$mID,$kb){ file_get_contents($GLOBALS['api'].'/editMessageReplyMarkup?chat_id='.$cID.'&message_id='.$mID.'&reply_markup='.$kb.'&parse_mode=html&disable_web_page_preview=true'); }
function edMLL($cID,$mID,$lon,$lat){ file_get_contents($GLOBALS['api'].'/editMessageLiveLocation?chat_id='.$cID.'&message_id='.$mID.'&longitude='.$lon.'&latitude'.$lat); }
function stpMLL($cID,$mID){ file_get_contents($GLOBALS['api'].'/stopMessageLiveLocation?chat_id='.$cID.'&message_id='.$mID); }

	// ДЕЙСТВИЯ И РЕАКЦИИ
function setW($x,$bn){ file_get_contents($GLOBALS['AH'].'bot'.$x.'/setWebhook?url='.$GLOBALS['h'].'0b/'.$bn.'/index.php');}
function dltW($x){ file_get_contents($GLOBALS['AH'].'bot'.$x.'/deleteWebhook');}
function sndAM($cID,$t,$kb){file_get_contents($GLOBALS['alarm'].'/sendMessage?chat_id='.$cID.'&text='.urlencode($t).'&reply_markup='.$kb. '&parse_mode=html&disable_web_page_preview=true');}
function awrMdl($cqID,$t){ file_get_contents($GLOBALS['api'].'/answerCallbackQuery?callback_query_id='.$cqID.'&text='.urlencode($t).'&show_alert=false');}
function awrMU($cqID,$t,$url){ file_get_contents($GLOBALS['api'].'/answerCallbackQuery?callback_query_id='.$cqID.'&text='.urlencode($t).'&url='.$url.'&show_alert=false');}
function awrAlt($cqID,$t){ file_get_contents($GLOBALS['api'].'/answerCallbackQuery?callback_query_id='.$cqID.'&text='.urlencode($t).'&show_alert=true');}
function pinCM($cID,$mID){ file_get_contents($GLOBALS['api'].'/pinChatMessage?chat_id='.$cID.'&message_id='.$mID.'&disable_notification=false');}
function offKb($cID){ file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$cID.'&text='.urlencode('Меню в данном чате успешно дезактивированно. Чтобы запустить его снова!, воспользуйтесь командой <code>/turn_on</code>').'&remove_keyboard=true&parse_mode=html'); }
function SCA($c,$act){file_get_contents($GLOBALS['api'].'/sendChatAction?chat_id='.$c.'&action='.$act);}
function kikCM($cID,$uID){file_get_contents($GLOBALS['api'].'/kickChatMember?chat_id='.$cID.'&user_id='.$uID);}
function ubCM($cID,$uID){file_get_contents($GLOBALS['api'].'/unbanChatMember?chat_id='.$cID.'&user_id='.$uID);}
function rstCM($cID,$uID,$prm){file_get_contents($GLOBALS['api'].'/restrictChatMember?chat_id='.$cID.'&user_id='.$uID.'&permissions='.$prm);}
function prmCM($cID,$uID,$can){file_get_contents($GLOBALS['api'].'/promoteChatMember?chat_id='.$cID.'&user_id='.$uID.'&'.$can.'=true');}
function setCACT($cID,$uID,$t){file_get_contents($GLOBALS['api'].'/setChatAdministratorCustomTitle?chat_id='.$cID.'&user_id='.$uID.'&custom_title='.$t);}
function setCP($cID,$prm){file_get_contents($GLOBALS['api'].'/setChatPermissions?chat_id='.$cID.'&permissions='.$prm);}
function setCPic($cID,$pic){file_get_contents($GLOBALS['api'].'/setChatPhoto?chat_id='.$cID.'&photo='.$pic);}
function setCT($cID,$t){file_get_contents($GLOBALS['api'].'/setChatTitle?chat_id='.$cID.'&title='.$t);}
function setCD($cID,$t){file_get_contents($GLOBALS['api'].'/setChatDescription?chat_id='.$cID.'&description='.$t);}
function setMK($cms){file_get_contents($GLOBALS['api'].'/setMyCommands?commands='.$cms);}

	// ДОПОЛНИТЕЛЬНЫЕ ЗАПРОСЫ
function getUPP($uID,$oft,$lmt){file_get_contents($GLOBALS['api'].'/getUserProfilePhotos?user_id='.$uID.'&offset='.$oft.'&limit='.$lmt);}
function getF($fID){file_get_contents($GLOBALS['api'].'/getFile?file_id='.$fID);}
function getC($cID){file_get_contents($GLOBALS['api'].'/getChat?chat_id='.$cID);}
function getCM($cID, $uID){file_get_contents($GLOBALS['api'].'/getChatMember?chat_id='.$cID.'&user_id='.$uID);}
function getCA($cID){file_get_contents($GLOBALS['api'].'/getChatAdministrators?chat_id='.$cID);}
function getCMC($cID){file_get_contents($GLOBALS['api'].'/getChatMembersCount?chat_id='.$cID);}
function getMK(){file_get_contents($GLOBALS['api'].'/getMyCommands');}
	// ЛОГИ И ОТЛАДКА
function svLog($t){file_put_contents(__DIR__ .'/0b/.log', $GLOBALS['log'].$t. PHP_EOL, FILE_APPEND);}
function blkLst($logF,$log){file_put_contents(__DIR__ . '/bot/'.$GLOBALS['i'].'/'.$logF.'.txt', date('Y-m-d H:i:s').'~>'.$log . PHP_EOL, FILE_APPEND);}
	// ИГРЫ И ОПРОСЫ
function sndPP($cID,$plQ,$plOp,$t,$kb){file_get_contents($GLOBALS['api'].'/sendPoll?chat_id='.$cID.'&question='.$plQ.'&options='.$plOp.'&type=regular&is_closed=true');}
function sndPl($cID,$plQ,$plOp,$t,$kb){file_get_contents($GLOBALS['api'].'/sendPoll?chat_id='.$cID.'&question='.$plQ.'&options='.$plOp.'&is_anonymous=true&type=regular&allows_multiple_answers=false&explanation='.$t.'&open_period=600&reply_markup='.$kb);}
function stpPl($cID,$mID,$kb){file_get_contents($GLOBALS['api'].'/stopPoll?chat_id='.$cID.'&message_id='.$mID.'&reply_markup='.$kb);}
function sndQz($cID,$plQ,$plOp,$opID,$t,$kb){file_get_contents($GLOBALS['api'].'/sendPoll?chat_id='.$cID.'&question='.$plQ.'&options='.$plOp.'&is_anonymous=true&type=qiuz&correct_option_id='.$opID.'&explanation='.$t.'&open_period=600&reply_markup='.$kb);}
function sndPMA($cID,$plQ,$plOp,$kb){file_get_contents($GLOBALS['api'].'/sendPoll?chat_id='.$cID.'&question='.$plQ.'&options='.$plOp.'&is_anonymous=true&type=regular&allows_multiple_answers=true&open_period=600&reply_markup='.$kb);}
function sndDK($cID,$kb){file_get_contents($GLOBALS['api'].'/sendDice?chat_id='.$cID.'&emoji="🎲"&reply_markup='.$kb);}
function sndDD($cID,$kb){file_get_contents($GLOBALS['api'].'/sendDice?chat_id='.$cID.'&emoji="🎯"&reply_markup='.$kb);}
function sndDB($cID,$kb){file_get_contents($GLOBALS['api'].'/sendDice?chat_id='.$cID.'&emoji="⚽️"&reply_markup='.$kb);}
function sndDS($cID,$kb){file_get_contents($GLOBALS['api'].'/sendDice?chat_id='.$cID.'&emoji="🎰"&reply_markup='.$kb);}
function sndGm($cID,$gsn,$kb){file_get_contents($GLOBALS['api'].'/sendGame?chat_id='.$cID.'&game_short_name='.$gsn.'&reply_markup='.$kb);}

?>
