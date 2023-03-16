<?php

$txt = $_GET['text'];

$txtSize = 560/strlen($txt);
$width = 512;
$height = $txtSize*1.2;
$img = imagecreate($width, $height);
 $bl = 0x000000;
$txtAngle = 0;
$txtX = 6; $txtY = 6;
$txtFont = "fonts/verdana.ttf";
$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 128, 128, 128);
$black = imagecolorallocate($img, 0, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
//$trans = imagecolorallocatealpha($img, 0, 0, 0, 217);
// imagesavealpha($img,true);
//imagefill($img, 1, 1, imagecolorallocatealpha( $img, 255, 255, 255, 127 ) );
//imagecolortransparent($img, $bl);
// (C) DRAW BACKGROUND (GREY RECTANGLE)
imagefilledrectangle($img, 0, 0, $width, $height, $black);
$vert_line = round($width/5);
    $color = imagecolorallocate($img, 219, 212, 212);
    for($i=0; $i < $vert_line; $i++) {
        imageline($img, rand(0,$width), rand(0,$height), rand(0,$height), rand(0,$width), $color);
    }
// (D) TEXT BOX DIMENSIONS
$txtBox = imagettfbbox($txtSize, $txtAngle, $txtFont, $txt);
$txtW = max([$txtBox[2], $txtBox[4]]) - min([$txtBox[0], $txtBox[6]]);
$txtH = max([$txtBox[5], $txtBox[7]]) - min([$txtBox[1], $txtBox[3]]);
 
// (E) CENTERING THE TEXT BLOCK
$txtX = CEIL(($width - $txtW) / 2);
$txtX = $txtX<0 ? 0 : $txtX;
$txtY = CEIL(($height - $txtH) / 2);
$txtY = $txtY<0 ? 0 : $txtY;
imagettftext($img, $txtSize, $txtAngle, $txtX, $txtY, $white, $txtFont, $txt);
 
// (F) OUTPUT
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);

?>