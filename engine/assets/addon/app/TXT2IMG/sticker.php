<?php
$hex = $_GET['color'];
$bg = $_GET['bg'];
$txt = $_GET['text'];

if (mb_substr_count($txt,'_')==1){
    list($txt,$txt2)=explode('_',$txt);}
elseif(mb_substr_count($txt,'_')==2){
    list($txt,$txt2,$txt3)=explode('_',$txt);}
elseif(mb_substr_count($txt,'_')==3){
    list($txt,$txt2,$txt3,$txt4)=explode('_',$txt);}
elseif(mb_substr_count($txt,'_')==0){
    if(mb_substr_count($txt,' ')==1){
        list($txt,$txt2)=explode(' ',$txt);}
    elseif(mb_substr_count($txt,' ')==2){
        list($txt,$txt2,$txt3)=explode(' ',$txt);}
    elseif(mb_substr_count($txt,' ')==3){
        list($txt,$txt2,$txt3,$txt4)=explode(' ',$txt);}}

$width = 512;
$txtSize = 500/strlen($txt)*2;
$height = $txtSize*2.2;
if(!empty($txt2)){
  $txt2Size = 500/strlen($txt2)*2;
  $height = $height+$txt2Size;}
if(!empty($txt3)){
$txt3Size = 500/strlen($txt3)*2;
$height = $height+$txt3Size;}
if(!empty($txt4)){
$txt4Size = 500/strlen($txt4)*2;
  $height = 512;
}

$img = imagecreate($width, $height);
 $bl = 0x000000;
$txtAngle = 0;
$txtX = 6; $txtY = 6;
$txtFont = "fonts/B52.ttf";
$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 128, 128, 128);
$black = imagecolorallocate($img, 0, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 128, 0);
$purple = imagecolorallocate($img, 128, 0, 128);
$yellow = imagecolorallocate($img, 255, 255, 0);
$indigo = imagecolorallocate($img, 75, 0, 30);
$royal = imagecolorallocate($img, 65, 105, 225);
$transparent = imagecolorallocatealpha($img, 255, 255, 255, 127);

$shadow = $black;
if(!empty($bg)){
if(str_starts_with($bg,'#')){
list($r, $g, $b) = sscanf($bg, "#%02x%02x%02x");
  $color = imagecolorallocate($img, $r, $g, $b);}else{
    if($bg=='red'){$bg=$red;}
    if($bg=='white'){$bg=$white;}
    if($bg=='grey'){$bg=$grey;}
    if($bg=='black'){$bg=$black;$shadow=$white;}
    if($bg=='green'){$bg=$green;}
    if($bg=='purple'){$bg=$purple;}
    if($bg=='yellow'){$bg=$yellow;}
    if($bg=='indigo'){$bg=$indigo;}
  }}else{$bg = $transparent;}
  
 imagesavealpha($img,true);
imagefill($img, 1, 1, $bg );
imagecolortransparent($img, $bl);
// (C) DRAW BACKGROUND (GREY RECTANGLE)
//imagefilledrectangle($img, 0, 0, $width, $height, $white);

if(!empty($hex)){
if(str_starts_with($hex,'#')){
list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
  $color = imagecolorallocate($img, $r, $g, $b);}else{
    if($hex=='red'){$color=$red;}
    if($hex=='white'){$color=$white;}
    if($hex=='grey'){$color=$grey;}
    if($hex=='black'){$color=$black;}
    if($hex=='green'){$color=$green;}
    if($hex=='purple'){$color=$purple;}
    if($hex=='yellow'){$color=$yellow;}
    if($hex=='indigo'){$color=$indigo;}
  }}else{$color = $blue;}
  
// (D) TEXT BOX DIMENSIONS
$txtBox = imagettfbbox($txtSize, $txtAngle, $txtFont, $txt);
$txtW = max([$txtBox[2], $txtBox[4]]) - min([$txtBox[0], $txtBox[6]]);
$txtH = max([$txtBox[5], $txtBox[7]]) - min([$txtBox[1], $txtBox[3]]);
 
// (E) CENTERING THE TEXT BLOCK
$txtX = CEIL(($width - $txtW) / 2);
$txtX = $txtX<0 ? 0 : $txtX;
$txtY = CEIL(($height - $txtH) / 2);
$txtY = $txtY<0 ? 0 : $txtY;
if(!empty($txt2)){$txtY = $txtSize*1.1+6;}
$sX = $txtX +6;
$sY = $txtY +6;
imagettftext($img, $txtSize, $txtAngle, $sX, $sY, $shadow, $txtFont, $txt);
imagettftext($img, $txtSize, $txtAngle, $txtX, $txtY, $color, $txtFont, $txt);
if(!empty($txt2)){
  imagettftext($img, $txt2Size, $txtAngle, $sX, $sY+$txt2Size*1.1, $shadow, $txtFont, $txt2);
imagettftext($img, $txt2Size, $txtAngle, $txtX, $txtY+$txt2Size*1.1, $color, $txtFont, $txt2);
}
if(!empty($txt3)){
  imagettftext($img, $txt3Size, $txtAngle, $sX, $sY+$txt2Size*1.1+$txt3Size*1.1, $shadow, $txtFont, $txt3);
imagettftext($img, $txt3Size, $txtAngle, $txtX, $txtY+$txt2Size*1.1+$txt3Size*1.1, $color, $txtFont, $txt3);
}
if(!empty($txt4)){
  imagettftext($img, $txt4Size, $txtAngle, $sX, $sY+$txt4Size*1.1+$txt2Size*1.1+$txt3Size*1.1, $shadow, $txtFont, $txt4);
imagettftext($img, $txt4Size, $txtAngle, $txtX, $txtY+$txt4Size*1.1+$txt2Size*1.1+$txt3Size*1.1, $color, $txtFont, $txt4);
}
 
// (F) OUTPUT
header("Content-type: image/webp");
imagepng($img);
imagedestroy($img);

?>