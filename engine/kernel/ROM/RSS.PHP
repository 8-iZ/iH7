<?php

function startelement($parser, $name, $attrs) {
global $tag, $rss;
if ($name == 'rss')
$rss = '^rss';
elseif ($name == 'rdf:rdf')
$rss = '^rdf:rdf';

$tag .= '^' . $name;
}

function endelement($parser, $name) {
global $tag;
global $itemcount, $items;
if ($name == 'item') {
$itemcount++;
if (!isset($items[$itemcount])) $items[$itemcount] = array('title' => '', 'link' => '', 'desc' => '', 'pubdate' => '');
}

$tag = substr($tag, 0, strrpos($tag, '^'));
}

function characterdata($parser, $data) {
global $tag, $chantitle, $chanlink, $chandesc, $rss, $imgtitle, $imglink, $imgurl;
global $items, $itemcount;

$rsschannel = '';
if ($data) {
if ($tag == $rss . '^channel^title') {
$chantitle .= $data;
} elseif ($tag == $rss . '^channel^link') {
$chanlink .= $data;
} elseif ($tag == $rss . '^channel^description') {
$chandesc .= $data;
}
if ($rss == '^rss') $rsschannel = '^channel';

if ($tag == $rss . $rsschannel . '^item^title') {
$items[$itemcount]['title'] .= $data;
} elseif ($tag == $rss . $rsschannel . '^item^link') {
$items[$itemcount]['link'] .= $data;
} elseif ($tag == $rss . $rsschannel . '^item^description') {
$items[$itemcount]['desc'] .= $data;
} elseif ($tag == $rss . $rsschannel . '^item^pubdate') {
$items[$itemcount]['pubdate'] .= $data;
} elseif ($tag == $rss . $rsschannel . '^image^title') {
$imgtitle .= $data;
} elseif ($tag == $rss . $rsschannel . '^image^link') {
$imglink .= $data;
} elseif ($tag == $rss . $rsschannel . '^image^url') {
$imgurl .= $data;
}
}

}

function parserss($url) {
global $tag, $chantitle, $chanlink, $chandesc, $rss, $items, $itemcount, $imgtitle, $imglink, $imgurl;
$chantitle = '';
$chanlink = '';
$chandesc = '';
$imgtitle = '';
$imglink = '';
$imgurl = '';
$tag = '';
$rss = '';

global $items, $itemcount;

$itemcount = 0;
$items = array(0 => array('title' => '', 'link' => '', 'desc' => '', 'pubdate' => ''));

$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "startelement", "endelement");
xml_set_character_data_handler($xml_parser, "characterdata");

@$fp = fopen($url, "r");
$data = "";
while (true) {
@$datas = fread($fp, 4096);
if (strlen($datas) == 0) {
break;
}
$data .= $datas;
}

@fclose($fp);

if ($data != '') {
$xmlresult = xml_parse($xml_parser, $data);
$xmlerror = xml_error_string(xml_get_error_code($xml_parser));
$xmlcrtline = xml_get_current_line_number($xml_parser);

if ($xmlresult)
displaydata();
else
print("error parsing this feed !<br />error: $xmlerror , at line: $xmlcrtline");
} else {
print("error while retriving feed $url");
}

xml_parser_free($xml_parser);
}

function displaydata() {
global $chantitle, $chanlink, $chandesc, $rss, $items, $itemcount, $imgtitle, $imglink, $imgurl;
global $items, $itemcount;
?>
<html><head><title><?= $chantitle ?></title></head>
<body>
<div>
<a href="<?= $chanlink ?>"><img src="<?= $imgurl ?>" alt="<?= $imgtitle ?>" border="0" /></a>
<h1><?= $chantitle ?></h1>
<h3><?= $chandesc ?></h3>
</div>
<hr />
<?php
for($i = 0;$i < count($items)-1;$i++) {
echo "<h4>".$items[$i]['title']."</h4>";
echo "<h5>".$items[$i]['pubdate']."</h5>";
echo "<a href='".$items[$i]['link']."'>".$items[$i]['desc']."</a>";
}
?>
</body></html>

<?php }

$url="http://xmlhack.ru/index.rdf";
parserss($url);
?>