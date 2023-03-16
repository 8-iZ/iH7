<?php

    $DBbot = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$botID'");
      $bot = mysqli_fetch_assoc($DBbot);
      $type = $bot['type'];
      $settings = $bot['settings'];
      $master = $bot['master'];
      $mirror = $bot['mirror'];
    $DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$C'");
      $user = mysqli_fetch_assoc($DBuser);
      $temp = $user['temp'];
      $status = $user['status'];
    
  if (str_starts_with($message, '/')) {
    if(substr_count(rtrim($message),' ')==0){$m = mb_strtoupper(substr($message,1));}
    elseif(substr_count(rtrim($message),' ')==1){list($cmd,$prm)=explode(' ',ltrim($message));$m = mb_strtoupper(substr($cmd,1));
      if(substr_count($prm,'=')==0){$d=$prm;}
      elseif(substr_count($prm,'=')==1){list($d,$p)=explode('=',$prm);}
      else{
        if(substr_count($prm,'&')>0){$prs=explode('&',$prm);}
        elseif(substr_count($prm,',')>0){$prs=explode(',',$prm);}
        foreach ($prs as &$prm){
          list($d,$p)=explode('=',$prm);}}}
    else {list($cmd,$txt)=explode(' ',$message);$m = mb_strtoupper($cmd);$d='TXT';}}

      if($type=='F'){
          $admin='5050388109';include ($iHroot.'/mirror/copy/COPY.'.$mirror.'.BOT');}else{$admin=$master;
      
  if (str_starts_with ($temp,'POST')){
      if(substr_count($temp,' ')==0){$m = $temp;$d = 'NULL';}
      if(substr_count($temp,' ')>0){list($m,$txt)=explode(' ',$temp);$d='TXT';}}
  if (str_starts_with ($temp,'CAPTCHA')){
      $m = 'CAPTCHA';$d = substr($temp,8);}
  if (str_starts_with ($temp,'STICKER')){
      $m = 'STICKER';$d = substr($temp,8);}
    $TXT2STK = $app.'TXT2IMG/sticker.php?text=';
      if($type=='X'){
          if($temp=='Milana'){$m='Milana';}
          if($C==$master){
              
          $DFLT[] = array('Ты чудо, Milana');
          }else{
          $DFLT[] = array('РЕЗЕРВАЦИЯ');
$DFLT[] = array('цены','фото','контакты');
$DFLT[] = array('оставить сообщение');}
}else{
      
if(!empty($alarm)){$DFLT[] = array('ВАЖНОЕ ОПОВЕЩЕНИЕ');}
$DFLT[] = array('СТАРТ');
if($status=='2'){$DFLT[]=array('МАРКЕТ','СЕРВИСЫ');}
$DFLT[] = array('профиль','настроики','помощь');
if($d=='NULL'){$BAKBTN[] = array('ПРОПУСТИТЬ');}}
$PSLBTN[] = array('ВТОРОИ РЯД: 1 КНОПКА');
$PSLBTN[] = array('ВТОРОИ РЯД: 2 КНОПКИ');
$PSLBTN[] = array('ВТОРОИ РЯД: 3 КНОПКИ');
$PFBTN[] = array('1 КН.','2 КН.','3 КН.');
$PSLBTN[] = array('ЗАВЕРШИТЬ','ОТМЕНА');
$PFBTN[] = array('ЗАВЕРШИТЬ','ОТМЕНА');
$PFBTN[] = array('А знаете ли вы?..');
$BTNBTN[] = array('1 КНОПКА В РЯД');
$BTNBTN[] = array('2 КНОПКИ В РЯД');
$BTNBTN[] = array('3 КНОПКИ В РЯД');
$BAKBTN[] = array('ОТМЕНА');
$BTNBTN[] = array('ОТМЕНА');
$WBTN = array ("text" => "БАЗА ЗНАНИЙ", "callback_data" => "WIKBAS");
$WIKIKB = json_encode(array("inline_keyboard" => [[$WBTN]]));
$BTCNFM = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $BTNBTN));
$PSLFM = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $PSLBTN));
$BAKFM = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $BAKBTN));
$PFFM = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $PFBTN));
$menu = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $DFLT));

switch ($message){
  case 'ОТМЕНА':
  case 'НАЗАД':
  case '❌️':
    $m='BAK';$d='';$p='';break;
  case 'ЗАВЕРШИТЬ':
	list($m,$txt)=explode(' ',$temp);
	$d='OK';break;
  case 'А знаете ли вы?..':
    list($p,$cut)=explode(' ',$temp);
    $m='WIK';$d='DYK';break;
}
//sMsg($C,$m,$menu);
switch ($m){
  case 'WIK':
    if ($d == 'DYK'){
        switch($p){
            case 'POST':
                sMsg($C,'<i>...что публикацию можно создать всего одним сообщением, составленным следующим образом:</i>'.PHP_EOL.PHP_EOL.'<code><i><b>/post</b> photo</i>=<b>https://ссылка_на_фото</b>&<i>text</i>=<b>полныи_текст_вашеи_публикации</b>&<b>[название_I_кнопки_I_строки_клавиатуры</b>=><b>ссылка_кнопки</b>][<b>название_II_кнопки</b>=><b>ссылка</b>]&[<b>I_кнопкa_II_строки</b>][<b>II_кнопка</b>]&[<b>третья_строка</b>]&[<b>четвертая-шестая</b>]</code>'.PHP_EOL.PHP_EOL.'<i>, где /post - команда (может быть также заменена универсальным запросом <b>POST</b>), а текст после пробела - список параметров, разделяемых друг от друга символом <b>&</b> и перечисленных в следующем порядке:</i> photo, text, keyboard.',$WIKIKB);
                break;
            
        }
        
    }
    elseif($d=='BAS'){}break;
  case 'POST':
    include ($iHroot.'/assets/addon/pro/POST/base.php');
  case 'ID':
    include ($iHroot.'/assets/addon/dev/HDBK/base.php');
  case 'BREAK':
    mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$C'"); exit;
    break;
  case 'STICKER':
    if(substr_count(rtrim($message),' ')>0){$txt=ltrim(substr($message,9),' ');
    if(str_starts_with($txt,'color=')){ list($color,$alt)=explode('&',substr($txt,6));}
    if(str_starts_with($alt,'bg=')){ 
        list($color,$bg,$text)=explode('&',substr($txt,6));
        $color=substr($color,6);$bg=substr($bg,3);$text=substr($text,3);
    }
    sndE($C,$txt);
    if(!empty($color)){
        if(!empty($bg)){ 
            $stickerURL = $app.'TXT2IMG/sticker.php?color='.$color.'&bg='.$bg.'&text='.$text;
        }else{
            $stickerURL = $app.'TXT2IMG/sticker.php?color='.$color.'&text='.$text;}
    }else{$stickerURL = $app.'TXT2IMG/sticker.php?'.$txt;}
    sMsg($C,$stickerURL,$menu);
    
        sndS($C,$stickerURL);}else{}


    break;
    case 'CAPTCHA':
        if(is_numeric($d) AND strlen($d)==5){
            if($message==$d){sMsg($C,'Каптча успешно проидена',$menu);
    mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$C'");}else{
                
$num = '0123456789'; $str = substr(str_shuffle($num), 0, 5);
$temp = 'CAPTCHA='.$str;
    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
 $captcha = $app.'TXT2IMG/captcha.php?text='.$str;
		            sndP($C,$captcha,'Неверно! Попробуите еще раз',$menu);
            }
        }else{
$num = '0123456789'; $str = substr(str_shuffle($num), 0, 5);
$temp = 'CAPTCHA='.$str;
    mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
 $captcha = $app.'TXT2IMG/captcha.php?text='.$str;
		            sndP($C,$captcha,'Чтобы проити каптчу, ведите цифры с картинки, пожалуиста',$menu);}
		            break;
  case 'NEW':
    sMsg($C,'Твоя текущая активная сессия сброшена. Получаю все актуальные обновления с сервера. Главное меню бота уже было обновлено.'.PHP_EOL. 'Новый сеанс будет запущен через 10 секунд. Ожидай..',$menu);sleep(10);
 break;
  case 'PUB';
  $DFLT[] = array('МАГАЗИНЫ','ОБМЕНЫ');
  $DFLT[] = array('помощь','РУЛЕТКА','контакты');
  $menu = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $DFLT));
  if($type=='G'){mysqli_query($q, "UPDATE bots SET group = '$C' WHERE id = '$botID'");sndE($C,$C);}

  case 'BAK':
    mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$C'");
  case 'START':
  case 'CTAPT':
      if($type=='X'){      sndS($C,$TXT2STK.'привет красавчик');
      sMsg($C,'Я <b>'.$title.'</b> и я рада приветствовать тебя!'.PHP_EOL.'С помощью этого бота ты можешь получить информацию обо мне и моих услугах и забронировать время для встречи, а также оставить мне сообщение если я не в сети или занята...'.PHP_EOL.'Воспользуися меню в нижнеи части чата или просто напиши свое сообщение и если бот не сможет сам распознать ваш запрос, он перешлет мне ваше сообщение и я свяжусь с вами в ближаишее время...',$menu);
   
                }else{
      sndS($C,$TXT2STK.'Дороу БРО!');
    if($type=='@'){
        sMsg($C,'Добро пожаловать на сервис-платформу <a href="https://shadowservice.site">💲💲💲</a>'.PHP_EOL.'Я - G😇D B🤖T, и я поистине всемогущ!'.PHP_EOL.'Надо просто уметь правильно мне "помолиться"..'.PHP_EOL.'Список основных "молитв", их назначение и инструкции по использованию можешь найти в "БАЗЕ ЗНАНИЙ", для того, чтобы что-нибудь купить или завести свою "витрину", рекомендуем посетить наш "МАРКЕТПЛЕЙС", остальные функции и инструменты доступны в разделе "СЕРВИСЫ".',$menu);
    }elseif($type=='G'){
      sMsg($C,'Добро пожаловать на проект <a href="https://t.me/'.$bGr.'">'.$title.'</a>'.PHP_EOL.'Главныи администратор: <a href="https://t.me/HenocpegcmBeHHo_BA">Непосредственно ВА</a>',$menu);
    }}
    break;
    case 'Milana':
    mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$C'");
        fwdM($master,$C,$mID);
        fwdM('5067943657',$C,$mID);
        sMsg($C,'Спасибо за твое обращение. Я свяжусь с тобои в ближаишее время...',$menu);
        break;
    case 'РЕЗЕРВАЦИЯ':
        sMsg($C,'Какое время вы бы хотели зарезервировать?',$BAKFM);
    mysqli_query($q, "UPDATE users SET temp = 'Milana' WHERE id = '$C'");
        break;
    case 'цены':
        sndP($C,'https://vdrug.space/disk/user/5067943657/1678658826-file_0.jpg','',$menu);
        break;
    case 'фото':
    case 'GLR':
        if(empty($data)){
    mysqli_query($q, "UPDATE users SET temp = '1' WHERE id = '$C'");
$NXT = array ("text" => ">", "callback_data" => "GLRNXT");
$BAK = array ("text" => "<", "callback_data" => "GLRBAK");
$NUL = array ("text" => "1", "callback_data" => "GLRNUL");
$menu = json_encode(array("inline_keyboard" => [[$BAK,$NUL,$NXT]])); 
sndP($C,'https://vdrug.space/disk/user/5067943657/1678659162-file_2.jpg','',$menu);
        } else {
            if ($d=='NXT'){
            $photoID = $temp +1;}
            if ($d=='NUL'){
            $photoID = $temp;}
            if ($d=='BAK'){
            $photoID = $temp -1;}
            if ($photoID=='8'){$photoID='1';}
            if ($photoID=='0'){$photoID='7';}
    mysqli_query($q, "UPDATE users SET temp = '$photoID' WHERE id = '$C'");
$NXT = array ("text" => ">", "callback_data" => "GLRNXT");
$BAK = array ("text" => "<", "callback_data" => "GLRBAK");
$NUL = array ("text" => $photoID, "callback_data" => "GLRNUL");
$menu = json_encode(array("inline_keyboard" => [[$BAK,$NUL,$NXT]]));

       if($photoID=='2'){$pic='https://vdrug.space/disk/user/5067943657/1678659165-file_4.jpg';}
       if($photoID=='3'){$pic='https://vdrug.space/disk/user/5067943657/1678659167-file_5.jpg';}
       if($photoID=='4'){$pic='https://vdrug.space/disk/user/5067943657/1678659168-file_6.jpg';}
       if($photoID=='5'){$pic='https://vdrug.space/disk/user/5067943657/1678659172-file_8.jpg';}
       if($photoID=='6'){$pic='https://vdrug.space/disk/user/5067943657/1678659179-file_12.jpg';}
       if($photoID=='7'){$pic='https://vdrug.space/disk/user/5067943657/1678659177-file_11.jpg';}
       if($photoID=='1'){$pic='https://vdrug.space/disk/user/5067943657/1678659162-file_2.jpg';}
         sndP($C,$pic,'',$menu);dltM($C,$mID);}break;
    case 'контакты':
$CHAT = array ("text" => "чат", "url" => "https://t.me/MILANA_CHISINAU");
$LCHK = array ("text" => "личка", "url" => "https://t.me/INTIMUSLUGI228");
$menu = json_encode(array("inline_keyboard" => [[$CHAT,$LCHK]])); 
        sndP($C,$app.'TXT2IMG/sticker.php?text='.$message,'',$menu);
        break;
    case 'оставить сообщение':
        sMsg($C,'Оставь мне сообщение и я свяжусь с тобои в ближаишее время',$BAKFM);
    mysqli_query($q, "UPDATE users SET temp = 'Milana' WHERE id = '$C'");
        break;
  default:
    break;
}}
?>