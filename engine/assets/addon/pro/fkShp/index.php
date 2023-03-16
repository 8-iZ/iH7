<?php 

switch ($message) {
   case '/start':
      sMsg($chat_id, $h1, $menu);
      break;
   case '/ltc':
      sMsg($chat_id, $ltc, $menu);
      break;
   case 'МЕНЮ':
      $menu = json_encode(array("inline_keyboard" => $mainKb));
      sMsg($chat_id, $H, $menu);
      break;
   case '❌ ВЫ ЗАБЛОКИРОВАННЫ ❌':
      sMsg($chat_id, $updS, $menu);
      break;
}

switch ($data) {
   case 'Kish':
      $text = '🏙 Вы выбрали "Кишинёв".
Выберите желаемый товар из категорий ниже:';
      $menu = json_encode(array("inline_keyboard" => $keshKb));
      sMsg($chat_id_in, $text, $menu);
      break;
   case 'SLEN':
      $text = '🎑 Вы выбрали "Enzo Gold"
Выберите желаемый район';
      $menu = json_encode(array("inline_keyboard" => $distriktKb));
      sMsg($chat_id_in, $text, $menu);
      break;
   case 'SLMF':
      $text = '🎑 Вы выбрали "Mephedrone"
Выберите желаемый район';
      $menu = json_encode(array("inline_keyboard" => $distriktKb));
      sMsg($chat_id_in, $text, $menu);
      break;
   case 'CCRK': case 'CCBT': case 'CCTC': case 'CCCN': case 'SWENOS': case 'SWENLO':
      $X1 = substr($data, 0, 2);
      $X2 = substr($data, -2);
      if ($X1 == 'CC') {
         if ($X2 == 'BT') {
            $txt = $BtkS;
         }
         if ($X2 == 'CN') {
            $txt = $CntS;
         }
         if ($X2 == 'RK') {
            $txt = $RwkS;
         }
         if ($X2 == 'TC') {
            $txt = $TcrS;
         }
         $menu = json_encode(array("inline_keyboard" => $vesKb));
         $txt = $cS.$txt.$wS;
      }
      if ($X1 == 'SW') {
         if ($X2 == 'OS') {
            $txt = $osPrc;
         }
         if ($X2 == 'LO') {
            $txt = $loPrc;
         }
         $txt = $pay1S.$txt.$pay2S;
         $menu = json_encode(array("inline_keyboard" => $payKb));
      }
      sMsg($chat_id_in, $txt, $menu);
      break;
   case 'Obmen':
      $text = '♻️ Внимание! Необходимо отправлять точную запрошенную сумму Ботом для оплаты выбранного продукта одной транзакцией.';
      sMsg($chat_id_in, $text, $menu);
      break;
   case 'Rules':
      $text = 'ВНИМАНИЕ!!!
Если вы по какой либо причине залили меньше или больше, либо что то сделали не по инструкции и бот не выдал вам адрес. Магазин не несет ответственность за потерянные деньги по вашей глупости!';
      sMsg($chat_id_in, $text, $menu);
      break;
   case 'null':
      $text = '❓ Вы точно уверены,
что хотите отменить заказ ❓
❗ При отмене заказа бот
заблокирует возможность
заказа на 1 минуту ❗

❌ После третьего отказа подряд бот заблокирует вас навсегда ❌';
      send_answerCallbackQuery($callback_query['id'], $text, true);
      $text2 = '❓ Вы точно уверены,
что хотите отменить заказ ❓';
      $menu = json_encode(array("inline_keyboard" => $okKb));
      sMsg($chat_id_in, $text2, $menu);
      break;
   case 'PAY':
      $text = '❌ Оплата не была произведена.
Средств на баллансе недостаточно.

Ваш баланс 0.0 LTC';
      sMsg($chat_id_in, $text, $menu);
      break;
   case 'ban':
      $text = '❌ Заказ был отменен';
      sMsg($chat_id_in, $text, $ban);
      break;
   case 'del':
      $text = '';
      editMessageText($chat_id_in, $message_id_in, $text, $menu);
      break;
}
function sMsg($chat_id, $text, $menu) {
   file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' .urlencode($text) . '&reply_markup=' . $menu. '&parse_mode=html&disable_web_page_preview=true');
}
function send_answerCallbackQuery($callback_query_id, $text, $show_alert) {
   file_get_contents($GLOBALS['api'] . '/answerCallbackQuery?callback_query_id=' . $callback_query_id . '&text=' .urlencode($text). '&show_alert=' . $show_alert);
}
function editMessageText($chat_id_in, $message_id_in, $text, $menu) {
   file_get_contents($GLOBALS['api'] . '/editMessageText?chat_id='.$chat_id_in.'&message_id='.$message_id_in.'&text='.urlencode($text). '&reply_markup=' . $menu. '&parse_mode=html&disable_web_page_preview=true');
}
function deleteMessage($chat_id_in, $message_id_in) {
   file_get_contents($GLOBALS['api'] . '/deleteMessage?chat_id='.$chat_id_in.'&message_id='.$message_id_in.'');
}