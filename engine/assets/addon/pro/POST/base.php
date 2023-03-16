<?php

if ($d == 'OK'){
			$hash = substr(md5(time()), 0, 20); 
		sMsg($C,'Публикация сохранена.'.PHP_EOL.'Уникальныи идентификатор публикации:'.PHP_EOL.'<code>PRINT'.$hash.'</code>',$menu);
			list($url,$text,$kb)=explode('&',$txt);
				$url=substr($url,6); $text = urldecode(substr($text,5));
				$log=$C.' saved '.$hash.' in '.$uTime;
		mysqli_query($q, "INSERT INTO posts (id,author,bot,time,status,url,text,keyboard,log) VALUES ('$hash','$C','$botID','$uTime','1','$url','$text','$kb','$log')");
			mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$C'");
			$KBBTN = str_replace('&','],[',str_replace(']','")',str_replace('[','array ("text" => "',str_replace('=>','", "url" => "',str_replace('][','],[',urldecode($kb))))));
				$menu = json_encode(array("inline_keyboard" => [[$KBBTN]]));
		if($url !== ''){sndP($C,$url,$text,$menu);}else{sMsg($C,$text,$menu);}}
    elseif ($d == 'TXT'){
      if (str_starts_with($txt,'photo=')){
        if(substr_count(urldecode($txt),'&[')==0){
            if(substr_count($message,'В РЯД')==1){
                if($message=='1 КНОПКА В РЯД'){sMsg($C,'<b>Пришлите данные вашеи кнопки в формате:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название кнопки <b>=></b> Ссылка кнопки</u></code>'.PHP_EOL.PHP_EOL.'<b>></b> <i><b>ссылка</b> должна начинаться с <code>http://</code> или <code>https://</code></i>'.PHP_EOL.'<b>></b> <i>название и ссылку отделить друг от друга символом <b><code>-</code></b></i>'.PHP_EOL.'<b>></b> <i>название и ссылку необходимо отправить в одном сообщении</i>',$BAKFM);}
                if($message=='2 КНОПКИ В РЯД'){sMsg($C,'<b>Пришлите данные обеих ваших кнопок в формате:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название первои кнопки <b>=></b> Ссылка первои кнопки</u> <b>&</b> <u>Название второи кнопки <b>=></b> Ссылка второи кнопки</u></code>'.PHP_EOL.PHP_EOL.'<b>></b> <i><b>ссылка</b> должна начинаться с <code>http://</code> или <code>https://</code></i>'.PHP_EOL.'<b>></b> <i>название и ссылку отделять друг от друга символом <b><code>-</code></b></i>'.PHP_EOL.'<b>></b> <i>название и ссылку однои ссылки от названия и ссылки другои отделять символом <b><code>&</code></b></i>'.PHP_EOL.'<b>></b> <i>все данные для обеих кнопок необходимо отправить в одном сообщении</i>',$BAKFM);}
                if($message=='3 КНОПКИ В РЯД'){sMsg($C,'<b>Пришлите данные ваших кнопок в формате:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название первои кнопки <b>=></b> Ссылка первои кнопки</u> <b>&</b> <u>Название второи кнопки <b>=></b> Ссылка второи кнопки</u> <b>&</b> <u>Название третьеи кнопки <b>=></b> Ссылка третьеи кнопки</u></code>'.PHP_EOL.PHP_EOL.'<b>></b> <i><b>ссылка</b> должна начинаться с <code>http://</code> или <code>https://</code></i>'.PHP_EOL.'<b>></b> <i>название и ссылку отделять друг от друга символом <b><code>-</code></b></i>'.PHP_EOL.'<b>></b> <i>название и ссылку однои ссылки от названия и ссылки другои отделять символом <b><code>&</code></b></i>'.PHP_EOL.'<b>></b> <i>данные для всех трех кнопок необходимо отправить в одном сообщении</i>',$BAKFM);}
            }
            else{
                sMsg($C,'<b>Ваша публикация:</b>',$PSLFM);
                list($photo,$text)=explode('&text=',substr($txt,6));
                    $text = urldecode($text);
                if(substr_count($message,'=>')==1){
                    list($ttl,$url)=explode('=>',$message);
                                $ttl=trim($ttl,' ');$url=trim($url,' ');
                        $dbbtn = urlencode('['.$ttl.'=>'.$url.']');
                        $BTN = array ("text" => $ttl, "url" => $url);
                    $menu = json_encode(array("inline_keyboard" => [[$BTN]]));}
                if(substr_count($message,'=>')==2){
                    list($btn1,$btn2)=explode('&',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);
                        list($ttl2,$url2)=explode('=>',$btn2);
                                $ttl1=rtrim($ttl1,' ');$url1=trim($url1,' ');
                                $ttl2=trim($ttl2,' ');$url2=ltrim($url2,' ');
                            $dbbtn = urlencode('['.$ttl1.'=>'.$url1.']['.$ttl2.'=>'.$url2.']');
                                $BTN1 = array ("text" => $ttl1, "url" => $url1);
                                $BTN2 = array ("text" => $ttl2, "url" => $url2);
                            $menu = json_encode(array("inline_keyboard" => [[$BTN1,$BTN2]]));}
                if(substr_count($message,'=>')==3){
                    list($btn1,$btn2,$btn3)=explode('&',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);
                        list($ttl2,$url2)=explode('=>',$btn2);
                        list($ttl3,$url3)=explode('=>',$btn3);
                                $ttl1=rtrim($ttl1,' ');$url1=trim($url1,' ');
                                $ttl2=trim($ttl2,' ');$url2=trim($url2,' ');
                                $ttl3=trim($ttl3,' ');$url3=ltrim($url3,' ');
                            $dbbtn = urlencode('['.$ttl1.'=>'.$url1.']['.$ttl2.'=>'.$url2.']['.$ttl3.'=>'.$url3.']');
                                $BTN1 = array ("text" => $ttl1, "url" => $url1);
                                $BTN2 = array ("text" => $ttl2, "url" => $url2);
                                $BTN3 = array ("text" => $ttl3, "url" => $url3);
                            $menu = json_encode(array("inline_keyboard" => [[$BTN1,$BTN2,$BTN3]]));}
                if($photo !== ''){sndP($C,$photo,$text,$menu);}else{sMsg($C,$text,$menu);}
                        $temp='POST photo='.$photo.'&text='.urlencode($text).'&'.$dbbtn;
			mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
            }}
        elseif(substr_count(urldecode($txt),'&[')==1){
            if(substr_count($message,'ВТОРОИ РЯД:')==1){
                if($message=='ВТОРОИ РЯД: 1 КНОПКА'){sMsg($C,'<b>Пришлите данные вашеи новои кнопки в формате, как и для первого ряда:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название кнопки <b>=></b> Ссылка кнопки</u></code>',$BAKFM);}
                if($message=='ВТОРОИ РЯД: 2 КНОПКИ'){sMsg($C,'<b>Пришлите данные ваших новых кнопок в формате, как и для первого ряда:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название первои кнопки <b>=></b> Ссылка первои кнопки</u> <b>&</b> <u>Название второи кнопки <b>=></b> Ссылка второи кнопки</u></code>',$BAKFM);}
                if($message=='ВТОРОИ РЯД: 3 КНОПКИ'){sMsg($C,'<b>Пришлите данные ваших новых кнопок в формате, как и для первого ряда:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название первои кнопки <b>=></b> Ссылка первои кнопки</u> <b>&</b> <u>Название второи кнопки <b>=></b> Ссылка второи кнопки</u> <b>&</b> <u>Название третьеи кнопки <b>=></b> Ссылка третьеи кнопки</u></code>',$BAKFM);}
            }
            else{
                sMsg($C,'<b>Ваша публикация:</b>',$PFFM);
                list($photo,$text,$btn)=explode('&',$txt);
					$photo = substr($photo,6); $text = urldecode(substr($text,5));$btn=urldecode($btn);
                if(substr_count($btn,'=>')==1){
                    list($ttl,$url)=explode('=>',$btn);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                    $BTN = array ("text" => $ttl, "url" => $url); $ROW1=[$BTN];}
                elseif(substr_count($message,'=>')==2){
                    list($btn1,$btn2)=explode('][',$btn);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');
                    $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW1=[$BTN1,$BTN2];}
                elseif(substr_count($message,'=>')==3){
                    list($btn1,$btn2,$btn3)=explode('][',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                    $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW1=[$BTN1,$BTN2,$BTN3];}
                if(substr_count($message,'=>')==1){
                    list($ttl,$url)=explode('=>',$message);$ttl=rtrim($ttl,' ');$url=ltrim($url,' ');
						$btn = $btn.'&['.$ttl.'=>'.$url.']';
                    $BTN = array ("text" => $ttl, "url" => $url);$ROW2=[$BTN];}
                elseif(substr_count($message,'=>')==2){
                    list($btn1,$btn2)=explode('&',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=rtrim($ttl1,' ');$url1=trim($url1,' ');$ttl2=trim($ttl2,' ');$url2=ltrim($url2,' ');
							$btn = urldecode($btn).'&['.$ttl1.'=>'.$url1.']['.$ttl2.'=>'.$url2.']';
                    $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW2=[$BTN1,$BTN2];}
                elseif(substr_count($message,'=>')==3){
                    list($btn1,$btn2,$btn3)=explode('&',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=rtrim($ttl1,' ');$url1=trim($url1,' ');$ttl2=trim($ttl2,' ');$url2=trim($url2,' ');$ttl3=trim($ttl3,' ');$url3=ltrim($url3,' ');
                            $btn = urldecode($btn).'&['.$ttl1.'=>'.$url1.']['.$ttl2.'=>'.$url2.']['.$ttl3.'=>'.$url3.']';
                    $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW2=[$BTN1,$BTN2,$BTN3];}
                        $temp='POST photo='.$photo.'&text='.urlencode($text).'&'.urlencode($btn);
                        $str='array("inline_keyboard" => [['.str_replace('&','],[',str_replace(']','")',str_replace('[','array ("text" => "',str_replace('=>','", "url" => "',str_replace('][','],[',$btn))))).']])';
                            $menu = json_encode(array("inline_keyboard" => [$ROW1,$ROW2]));
                if($photo !== ''){sndP($C,$photo,$text,$menu);}else{sMsg($C,$text,$menu);}
			mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
            }}
        elseif(substr_count(urldecode($txt),'&[')>1){
            if(substr_count($message,' КН.')==1){
                if($message=='1 КН.'){sMsg($C,'<b>Пришлите данные новои кнопки по примеру уже собранных рядов:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название <b>=></b> Ссылка </u></code>',$BAKFM);}
                if($message=='2 КН.'){sMsg($C,'<b>Пришлите данные ваших новых кнопок по примеру уже собранных рядов:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название <b>=></b> Ссылка </u> <b>&</b> <u>Название <b>=></b> Ссылка </u></code>',$BAKFM);}
                if($message=='3 КН.'){sMsg($C,'<b>Пришлите данные ваших новых кнопок по примеру уже собранных рядов:</b>'.PHP_EOL.PHP_EOL.'<code><u>Название <b>=></b> Ссылка п</u> <b>&</b> <u>Название <b>=></b> Ссылка </u> <b>&</b> <u>Название <b>=></b> Ссылка </u></code>',$BAKFM);}
            }
            else{
			sMsg($C,'<b>Ваша публикация:</b>',$PFFM);
                list($photo,$text,$btn)=explode('&',$txt);
					$photo = substr($photo,6); $text = urldecode(substr($text,5));$btn=urldecode($btn);
                if(substr_count($btn,']&[')==1){
                    list($row1,$row2)=explode('&',$btn);
                    if(substr_count($row1,'=>')==1){
                        list($ttl,$url)=explode('=>',$row1);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW1=[$BTN];}
                    elseif(substr_count($row1,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW1=[$BTN1,$BTN2];}
                    elseif(substr_count($row1,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW1=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row2,'=>')==1){
                        list($ttl,$url)=explode('=>',$row2);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW2=[$BTN];}
                    elseif(substr_count($row2,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW2=[$BTN1,$BTN2];}
                    elseif(substr_count($row2,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW2=[$BTN1,$BTN2,$BTN3];}
                $ROWS='2';}
                if(substr_count($btn,']&[')==2){
                    list($row1,$row2,$row3)=explode('&',$btn);
                    if(substr_count($row1,'=>')==1){
                        list($ttl,$url)=explode('=>',$row1);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW1=[$BTN];}
                    elseif(substr_count($row1,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW1=[$BTN1,$BTN2];}
                    elseif(substr_count($row1,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW1=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row2,'=>')==1){
                        list($ttl,$url)=explode('=>',$row2);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW2=[$BTN];}
                    elseif(substr_count($row2,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW2=[$BTN1,$BTN2];}
                    elseif(substr_count($row2,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW2=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row3,'=>')==1){
                        list($ttl,$url)=explode('=>',$row3);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW3=[$BTN];}
                    elseif(substr_count($row3,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row3);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW3=[$BTN1,$BTN2];}
                    elseif(substr_count($row3,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row3);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW3=[$BTN1,$BTN2,$BTN3];}
                $ROWS='3';}
                if(substr_count($btn,']&[')==3){
                    list($row1,$row2,$row3,$row4)=explode('&',$btn);
                    if(substr_count($row1,'=>')==1){
                        list($ttl,$url)=explode('=>',$row1);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW1=[$BTN];}
                    elseif(substr_count($row1,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW1=[$BTN1,$BTN2];}
                    elseif(substr_count($row1,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW1=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row2,'=>')==1){
                        list($ttl,$url)=explode('=>',$row2);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW2=[$BTN];}
                    elseif(substr_count($row2,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW2=[$BTN1,$BTN2];}
                    elseif(substr_count($row2,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW2=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row3,'=>')==1){
                        list($ttl,$url)=explode('=>',$row3);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW3=[$BTN];}
                    elseif(substr_count($row3,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row3);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW3=[$BTN1,$BTN2];}
                    elseif(substr_count($row3,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row3);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW3=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row4,'=>')==1){
                        list($ttl,$url)=explode('=>',$row4);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW4=[$BTN];}
                    elseif(substr_count($row4,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row4);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW4=[$BTN1,$BTN2];}
                    elseif(substr_count($row4,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row4);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW4=[$BTN1,$BTN2,$BTN3];}
                $ROWS='4';}
                if(substr_count($btn,']&[')==3){
                    list($row1,$row2,$row3,$row4,$row5)=explode('&',$btn);
                    if(substr_count($row1,'=>')==1){
                        list($ttl,$url)=explode('=>',$row1);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW1=[$BTN];}
                    elseif(substr_count($row1,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW1=[$BTN1,$BTN2];}
                    elseif(substr_count($row1,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row1);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW1=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row2,'=>')==1){
                        list($ttl,$url)=explode('=>',$row2);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW2=[$BTN];}
                    elseif(substr_count($row2,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW2=[$BTN1,$BTN2];}
                    elseif(substr_count($row2,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row2);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW2=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row3,'=>')==1){
                        list($ttl,$url)=explode('=>',$row3);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW3=[$BTN];}
                    elseif(substr_count($row3,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row3);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW3=[$BTN1,$BTN2];}
                    elseif(substr_count($row3,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row3);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW3=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row4,'=>')==1){
                        list($ttl,$url)=explode('=>',$row4);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW4=[$BTN];}
                    elseif(substr_count($row4,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row4);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW4=[$BTN1,$BTN2];}
                    elseif(substr_count($row4,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row4);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW4=[$BTN1,$BTN2,$BTN3];}
                    if(substr_count($row5,'=>')==1){
                        list($ttl,$url)=explode('=>',$row5);$ttl=trim($ttl,' [');$url=trim($url,' ]');
                        $BTN = array ("text" => $ttl, "url" => $url);$ROW5=[$BTN];}
                    elseif(substr_count($row5,'=>')==2){
                        list($btn1,$btn2)=explode('][',$row5);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=ltrim($url2,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW5=[$BTN1,$BTN2];}
                    elseif(substr_count($row5,'=>')==3){
                        list($btn1,$btn2,$btn3)=explode('][',$row5);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=trim($ttl1,' [');$url1=trim($url1,' ]');$ttl2=trim($ttl2,' [');$url2=trim($url2,' ]');$ttl3=trim($ttl3,' [');$url3=trim($url3,' ]');
                        $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW5=[$BTN1,$BTN2,$BTN3];}
                $ROWS='5';}
                    
                if(substr_count($message,'=>')==1){
                    list($ttl,$url)=explode('=>',$message);$ttl=rtrim($ttl,' ');$url=ltrim($url,' ');
						$btn = $btn.'&['.$ttl.'=>'.$url.']';
                    $BTN = array ("text" => $ttl, "url" => $url);$ROW=[$BTN];}
                elseif(substr_count($message,'=>')==2){
                    list($btn1,$btn2)=explode('&',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);
                            $ttl1=rtrim($ttl1,' ');$url1=trim($url1,' ');$ttl2=trim($ttl2,' ');$url2=ltrim($url2,' ');
							$btn = urldecode($btn).'&['.$ttl1.'=>'.$url1.']['.$ttl2.'=>'.$url2.']';
                    $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$ROW=[$BTN1,$BTN2];}
                elseif(substr_count($message,'=>')==3){
                    list($btn1,$btn2,$btn3)=explode('&',$message);
                        list($ttl1,$url1)=explode('=>',$btn1);list($ttl2,$url2)=explode('=>',$btn2);list($ttl3,$url3)=explode('=>',$btn3);
                            $ttl1=rtrim($ttl1,' ');$url1=trim($url1,' ');$ttl2=trim($ttl2,' ');$url2=trim($url2,' ');$ttl3=trim($ttl3,' ');$url3=ltrim($url3,' ');
                            $btn = urldecode($btn).'&['.$ttl1.'=>'.$url1.']['.$ttl2.'=>'.$url2.']['.$ttl3.'=>'.$url3.']';
                    $BTN1 = array ("text" => $ttl1, "url" => $url1);$BTN2 = array ("text" => $ttl2, "url" => $url2);$BTN3 = array ("text" => $ttl3, "url" => $url3);$ROW=[$BTN1,$BTN2,$BTN3];}
                        $temp='POST photo='.$photo.'&text='.urlencode($text).'&'.urlencode($btn);
                    $FBTN = str_replace('&','],[',str_replace(']','")',str_replace('[','array ("text" => "',str_replace('=>','", "url" => "',str_replace('][','],[',$btn)))));
                    switch($ROWS){case '2':$KB=[$ROW1,$ROW2,$ROW];break;case '3':$KB=[$ROW1,$ROW2,$ROW3,$ROW];break;case '4':$KB=[$ROW1,$ROW2,$ROW3,$ROW4,$ROW];break;case '5':$KB=[$ROW1,$ROW2,$ROW3,$ROW4,$ROW5,$ROW];break;}
						$menu = json_encode(array("inline_keyboard" => $KB));
                if($photo !== ''){sndP($C,$photo,$text,$menu);}else{sMsg($C,$text,$menu);}
			mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");}
      }}
      elseif(str_starts_with ($txt,'text=')){
        list($cut,$text)=explode('=',$txt);
        if ($message == 'ПРОПУСТИТЬ'){$temp = 'POST photo=&text='.$text;}
        elseif(!empty($photo)){$temp = 'POST photo=https://'.$domain.'/'.$dest.'&text='.$text;}
        elseif(str_starts_with($message,'http')){$temp='POST photo='.$message.'&text='.$text;}
        else{sMsg($C,'UNNOWN COMMAND. PLEASE TRY AGAIN',$BAKFM);exit;}
          mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
          sMsg($C,'Теперь перейдем к сборке рядов кнопок. Выберите количество кнопок первого ряда:',$BTCNFM);}
    }
    elseif($d == 'NULL'){
      $temp = $temp.' text='.urlencode($message);
      mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$C'");
      sMsg($C,'Для того, чтоб публикация была оформлена с изображением в верхней части, прикрепите сжатое изображение к следующему сообщению:',$BAKFM);
    }
    else {
    mysqli_query($q, "UPDATE users SET temp = 'POST' WHERE id = '$C'");
    sMsg($C,'Для того чтоб создать публикацию с кнопками-ссылками, для начала пришлите текст самой публикации:',$BAKFM);}
    break;
    
?>