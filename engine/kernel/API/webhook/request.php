<?php
$mID = $output['message']['id'];
$message = $output['message']['text'];
$photo = $output['message']['photo'];
$photoID = $output['message']['photo']['file_id'];
$sticker = $output['message']['sticker'];
$userID = $output['message']['from']['id'];
$username	= $output['message']['chat']['username'];
$first_name	= $output['message']['chat']['first_name'];
$last_name	= $output['message']['chat']['last_name']; 
$mdt = $output['message']['date'];
$audio = $output['message']['audio'];
$auFID = $output['message']['audio']['file_id'];
$mfl = $output['message']['document'];
$mfId = $output['message']['document']['file_id'];
$mgf = $output['message']['animation'];
$mgID = $output['message']['animation']['file_id'];
$men = $output['message']['entities'];
$met = $output['message']['entities']['type'];
$meu = $output['message']['entities']['url'];
$mcp = $output['message']['caption'];
$mce = $output['message']['caption_entities'];
$mvi = $output['message']['video'];
$mvID = $output['message']['video']['file_id'];
$mvn = $output['message']['video_note'];
$voice = $output['message']['voice'];
$voFID = $output['message']['voice']['file_id'];
$mID = $output['message']['message_id'];
$cID = $output['message']['chat']['id'];
$chat = $output['message']['chat']['type'];
$ctt = $output['message']['chat']['title'];
$cun = $output['message']['chat']['username'];
$uID = $output['message']['from']['id'];
$ib = $output['message']['from']['is_bot'];
$usn = $output['message']['from']['username'];
$fn = $output['message']['from']['first_name'];
$ln = $output['message']['from']['last_name'];
$lang = $output['message']['from']['language_code'];
$mve = $output['message']['venue'];
$mlc = $output['message']['location'];
$mlo = $output['message']['location']['longitude'];
$mla = $output['message']['location']['latitude'];
$mct = $output['message']['contact'];
$mcID = $output['message']['contact']['user_id'];
$mcpn = $output['message']['contact']['phone_number'];
$mcfn = $output['message']['contact']['first_name'];
$mcln = $output['message']['contact']['last_name'];
$mgm = $output['message']['game'];
$mdc = $output['message']['dice'];
$mde = $output['message']['dice']['emoji'];
$mdv = $output['message']['dice']['value'];
$mpl = $output['message']['poll'];
$gcc = $output['message']['group_chat_created'];
$scc = $output['message']['supergroup_chat_created'];
$ccc = $output['message']['channel_chat_created'];
$nct = $output['message']['new_chat_title'];
$ncp = $output['message']['new_chat_photo'];
$dcp = $output['message']['delete_chat_photo'];
$new = $output['message']['new_chat_members'];
$newID = $output['message']['new_chat_member']['id'];
$nfn = $output['message']['new_chat_member']['first_name'];
$nln = $output['message']['new_chat_member']['last_name'];
$out = $output['message']['left_chat_member'];
$ffID = $output['message']['forward_from']['id'];
$reID = $output['message']['reply_to_message']['message_id'];
?>