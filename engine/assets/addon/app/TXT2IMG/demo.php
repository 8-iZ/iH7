require_once 'class.php';

//create img object
$img = new TextToImage;

//create image from text
$text = 'Welcome to CodexWorld.\nThe World of Programming.';
$img->createImage($text);

//save image as png format
$img->saveAsPng('codex-text-to-image','images/');

//save image as jpg format
$img->saveAsJpg('codex-text-to-image','images/');