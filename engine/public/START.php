<?php 
	function isMobile() { 
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);}
	if (isset ($_POST['textbox'])){
		$token = 'NULL';
		preg_match ('/[0-9]{9,11}:[a-zA-Z0-9_-]{35}/', $_POST['textbox'], $tok);
		if(! empty ($tok[0])){
			$token = $tok[0];
				list($botID,$key) = explode(':', $token);
	}}
?>
<!DOCTYPE html>
<html>
<head>
<title>iR0N 🫀 H3ART 6 | START Page</title>
<link rel="stylesheet" type="text/css" href="assets/theme/DEFAULT/style.css" />
<link rel="stylesheet" type="text/css" href="assets/theme/DEFAULT/modal.css" />
<link rel="stylesheet" type="text/css" href="assets/theme/DEFAULT/master.css" />
<style>
.white {color:white}
.green {color:green}
.blue {color:blue}
.red {color:red}
</style>
</head>
<body style="">
<?php if(isMobile()): ?>
	<div class="heart" style ="position:absolute; top:0; left:0;width: 100vw;height:100vw;">
		<div class="box" style="margin: 30% 8%;">
<?php else: ?>
	<div class="heart" style="position:relative;width:100vh;height: 100vh;margin:0 auto; padding:0;">
		<div class="box" style="position:relative;margin:8%;">
<?php endif; ?>
			<img src="public/BRAND/iH.Logo.png" alt="iR0N H3ART 6" class="logo">
			<div class="form">
			    
			    		<?php 
	if (isset ($_POST['info'])): 
?>
<h2>FINE! CONNECTION ALMOST COMPLETE<br>LETS LOOK WHAT WE HAVE NOW</h2>
<?php 
$bot = $_POST['botID'];
$key = $_POST['key'];
$title = $_POST['title'];
$type = $_POST['type'];
$nick = $_POST['botname'].'BOT';
$info = $_POST['info']; ?>
<h4><span class='white'>YOU WANT TO CONNECT BOT</span> @<?php echo $nick; ?><br><span class='white'>WITH ID</span> <?php echo $bot; ?> <span class='white'>IN PROJECT</span> <?php echo $title; ?><br><span class='white'>DESCRIBED AS</span> <?php echo $info; ?> <br><span class='white'>INITIALIZED BY KEY</span> <?php echo $key; ?></h4>
<?php 
include ('../config/init.php');
$DBvld = mysqli_query($q, "SELECT * FROM bots WHERE id = '$bot'");
	if (mysqli_num_rows ($DBvld) == 0) {
		$log = $time.' siteStart';
		if(mysqli_query($q, "INSERT INTO bots (id, title, type, status, nick, info, log, skey,switcher) VALUES ('$bot', '$title', '$type', '2', '$nick', '$info', '$log', '$key',1)")){
			echo '<h3>IФ YOU ФOUND ANY MISTAKE IN INFORMATION TYPED WITH GREEN <br>PRESS THE <span class="red">[CANCEL]</span> BUTTON AND START PROCESS<br>OF CONNECTING YOUR BOT FROM THE BEGINNING<br>AND IF DATA WAS INTRODUCED CORRECTLY OR YOU WILL MAKE CHANGES LATER,<br>CONSISTENTLY CLICK <span class="green">[CONNECT]</span> AND <span class="blue">[SUBMIT]</span> BUTTONS</h3>';
		} else {
			include ('../library/error/local.lib');
			echo $E613;
	}}
mkdir('../../bot/'.$bot, 0777);
$index = fopen('../../bot/'.$bot.'/index.php', 'w');
	fwrite($index, '<?php'.PHP_EOL.PHP_EOL.'$botID = \''.$bot.'\';'.PHP_EOL.'$title = \''.$title.'\';'.PHP_EOL.'$key = \''.$key.'\';'.PHP_EOL.'include (\'../../iH6/config/init.php\');'.PHP_EOL.'$token = $botID.\':\'.$key;'.PHP_EOL.'include (\'../../iH6/assets/special/main.php\');'.PHP_EOL.PHP_EOL.'?>');
	fclose($index); 
$pasport = fopen('../../bot/'.$bot.'/'.$key, 'w');
	fclose($pasport); 
?><br>
<table width="100%"><tr><td width="25%"><a href="#" style="width:100%;height:100%;margin:3px; background-color:RED; color:white;">CANCEL</a></td>
<td width="25%"></td>
<td width="25%"><a href="#modal-one" style="width:100%;height:100%;margin:3px; background-color:GREEN; color:white;">CONNECT</a></td>
<td width="25%"><?php echo '<a href="https://'.$nick.'.t.me" style="width:100%;height:100%;margin:3px; background-color:BLUE; color:white;">SUBMIT</a>'; ?></td>
</tr>
</table>
			<div class="modal" id="modal-one" aria-hidden="true">
				<div class="modal-dialog">
		<div class="modal-header">
WEBHOOK SETTING RESULT:
			<a href="#close" class="btn-close" aria-hidden="true">×</a>
		</div>
		<div class="modal-body">
<?php echo '<iframe src="https://api.telegram.org/bot'.$bot.':'.$key.'/setWebhook?url=https://shadowservice.site/bot/'.$bot.'/index.php" width="100%" height="60px">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>'; ?>
		</div>
	</div>
</div>

<?php
	elseif  (isset ($_POST['token'],$_POST['title']) ): 
?>
		<form action="" method="POST" >
<h1>👌OK! 👁‍🗨FANTASTIC!</h1>
<h3>NOW MARK ☑️ SOME DETAILS<br>AND LAUNCH HIM 🤖 FASTER</h3>
<?php 
$token = $_POST['token'];
	list ($botID, $key) = explode (':', $token);
$title = $_POST['title'];
	echo '<input type="hidden" name="botID" value="'.$botID.'"><input type="hidden" name="key" value="'.$key.'"><input type="hidden" name="title" value="'.$title.'">'; ?>
<table style="width:90%; margin:auto;">
            <tr> <td width="50%"><label for="type" class="formbuilder-select-label"><h3>BOT MAIN FUNCTION:</h3></label>
        <select class="form-control" name="type" id="type" required="required" aria-required="true" style="width:100%; height:40px; text-size:30px">
            <option disabled="null" selected="A">CLICK 👆🏻 TO CHOOSE ✔️</option>
            <option value="C">BOT CHAT/CHANNEL ADMIN</option>
            <option value="H">BOT PERSONAL ASSISTANT</option>
            <option value="R">BOT CHAT &amp; USER SPAMER</option>
            <option value="M">BOT SPAM/PRIVAT MAILBOX</option>
            <option value="S">BOT 24/7/365 AUTO SELLER</option>
            <option value="P">BOT PARSER &amp; SNOOP BOT</option>
            <option value="F">BOT PAYMENT GENERATOR</option>
            <option value="O">BOT CLOUD FILE STORAGE</option>
            <option value="D">BOT TEXT/IMAGE DESIGNER</option>
        </select>
 </td><td width="50%">
        <label for="botname" class="formbuilder-text-label"><h3>BOTNAME:</h3></label>
        <table><tr><td width="10%">
            <input type="text" placeholder="@" class="form-control" name="bn_a" access="true" value="@" maxlength="1" role="1" id="bn_a" title="BOTNAME BEGINS WITH «@» AND THE NEXT SHOULD STAY THE LETTER, NO NUMBER" disabled style="width:100%; height:31px; text-size:30px"> </td>
            <td width="66%"> <input type="text" placeholder="" class="form-control" name="botname" access="false" maxlength="25" id="botname" title="BOTNAME IS UNIQUE COMBINATION OF LETTERS, NUMBERS AND SYMBOL «_»" style="width:100%; height:33px; text-size:30px"> </td>
            <td width="20%"><input type="text" placeholder="BOT" class="form-control" name="bn_b" access="true" value="BOT" maxlength="3" role="1" id="bn_b" title="BOTNAME ENDS WITH «BOT»" disabled style="width:100%; height:31px; text-size:30px"></td></tr></table>
</tr><tr>
        <td><label for="info" class="formbuilder-textarea-label"><h3>BOT INFO:</h3></label></td><td><h6>NOT DESCRIPTION OR ABOUT TEXT<br>BUT MAY BE THE SAME</h6></td></tr>
        <tr><td colspan="2"><textarea type="textarea" placeholder= "THIS BOT USES ENGINE «iR0N H3ART». YOU MAY CONNECT YOUR BOTS TO ENGINE «iR0N H3ART» TOO. JUST VISIT IH.SHADOWSERVICE.SITE" class="form-control" name="info" access="false" maxlength="300" rows="2" id="info" title="NOT DESCRIPTION OR ABOUT TEXT BUT MAY BE THE SAME " required="required" aria-required="true" style="width:100%"></textarea>
</td></tr><tr><td colspan="2"><button type="submit" class="button" style="width:80%">START</button></td></tr></table> </form>
<?php
	elseif (isset ($_POST['email'])) :
?>
<h2>THANK Ю!</h2>
<h3>YOUR E-MAЙL:</h3>
<h4><?php 
	$email = $_POST['email'];
	echo $email;
	include ('config/init.php');
	$result = mysqli_query($q, "SELECT * FROM users WHERE email = $email");
	if (mysql_num_rows ($result) == 0) {
	    $log = $time.' subscrb '.$email;
	mysqli_query($q, "INSERT INTO subscriptions (email, start, log) VALUES ('$email', NOW(), '$log')");
	mysqli_query($q, "INSERT INTO users (email, start, log) VALUES ('$email', NOW(), '$log')");}
?></h4>
<h3>WAS SUCCESSFULLY SUBSCRIBED<br>Ю CAN ЮZ IT FOR L0G1N IN ФUTURE<br>VERIFY YOUR INCOME MESSAGES REGULARY PLEASE</h3>

<?php
	elseif (! isset ($_POST['textbox'])) : 
?>
		<form action="" method="POST">
	<h1>👋🏻 D0P0Y БR0!</h1> 
		<h2>WEЛKAM T0 0UR START 🤟🏻 PAGE</h2>

	<h3>TYPE ⌨️ YOUR SEKRET 🤫 MESSAGE<br>ИN THIS👇🏻 TEXTБOКС AND PRESS THE [BUTTON]</h3>
<table class="tab">
	<tr>
		<td width="25%">
			<label for="token" class="label"><h2>TEXTBOX<span class="blink">:</span></h2></label>
		</td>
		<td width="50%">
			<input type="text" name="textbox" class="textbox" id="textbox">
		</td>
		<td width="25%">
			<span class="blink">👉🏻</span>
			<button type="submit" class="button">BUTTON</button>
			<span class="blink">👈🏻</span>
		</td>
			</tr>
		</table></form>
<?php
	elseif ($token !== 'NULL'): ?>
		<form method="POST">
		<h3>SUDDENLY WE 🔎 FOUND IN YOUR 📨 MESSAGE<br>A TELEGRAM BOT 🤖TOKEN:</h3>
		<h4><?php 
		echo $token; ?></h4>
		<h3>TYPE ⌨️ THE TITLE OF YOUR PROJECT<br>TO APPROVE BOT 🔌 CONNECTING:</h2>
		<?php echo '<input type="hidden" name="token" value="'.$token.'">'; ?>
<table class="tab">
	<tr>
		<td width="15%">
      <label for="title"><h2>TITLE:</h2></label>
		</td>
		<td width="35%">
      <input type="text" name="title" class="textbox" id="title">
		</td>
		<td width="50%">
    		<button type="submit" class="button">I AM SURE I WANT MY 🤖 TO HAVE A ❤️!</button>
		</td>
	</tr>
</table></form>
<?php 
	else: 
?>
		<form method="POST" target="target">
		<h2>WE S0 SORRY 🤷‍♂️, BUT YOUR QUERY<br>NOT ФOUND IN OUR KNOWLEDGEБASE 🧠</h2>
		<h3>OUR 👨‍🔧 SUPPORTS UNДОUBTEDLY<br>CAN HELP YOU<br>BUT YOU SHOULD LEAVE YOUR<br>CONTACT E-MAIL HERE  🔻</h3>
<table class="tab">
	<tr>
		<td width="25%">
      <label for="email"><h3>YOUR <span id="blink">E-MAIL</span>:</h3></label>
		</td>
		<td width="50%">
      <input type="email" name="email" class="textbox" id="email">
		</td>
		<td width="25%">
		<button type="submit" class="btn">SEND ME 📧</button>
		</td>
	</tr>
</table>
	<a href="#" style="width:40%; margin:20px auto;">I DONT NEED HELP MORE !!!</a></form>
<?php endif; ?>
</div>
<table class="footer" width="100%">
	<tr>
		<td width="20%">
			<a href="LICENSE" style="width:90%;background-color:white;color:red">LiCENSE</a>
		</td>
		<td width="20%">
			<a href="https://github.com/NEoBartolo/iH" style="width:90%; background-color:black; color:white">GitHub</a>
		</td>
		<td width="20%">
			<a href="public/GUIDE" style="width:90%;background-color:yellow;color:black">Guide</a>
		</td>
		<td width="20%">
			<a href="#contribuitors" style="width:90%;background-color:violet;color:lime">Contribuitors</a>
		</td>
		<td width="20%">
			<a href="README.md" style="width:90%;background-color:black;color:red">A60u+</a>
		</td>
	</tr>
	<tr>
		<td width="20%">
			<a href="SECURITY.md" style="width:90%;background-color:lime;color:green">SECURiTY</a>
		</td>
		<td width="20%">
			<a href="" style="width:90%;background-color:red;color:white">Release</a>
		</td>
		<td width="20%">
			<a href="install.php" style="width:90%;background-color:indigo;color:white">In$t@113r</a>
		</td>
		<td width="20%">
			<a href="#parteners" style="width:90%;background-color:orange;color:black">Parteners</a>
		</td>
		<td width="20%">
			<a href="mailto:help@shadowservice.site" style="width:90%;background-color:grey;color:blue">E•m@iL U$</a>
		</td>
	</tr>
</table>
			</div>
						<div class="modal" id="parteners" aria-hidden="true">
				<div class="modal-dialog">
		<div class="modal-header">
OUR PARTENERS:
			<a href="#close" class="btn-close" aria-hidden="true">×</a>
		</div>
		<div class="modal-body">
<h3>HERE MAY BE YOUR NAME</h3>
		</div>
	</div>
</div>
<div class="modal" id="contribuitors" aria-hidden="true">
				<div class="modal-dialog">
		<div class="modal-header">
CONTRIBUITORS:
			<a href="#close" class="btn-close" aria-hidden="true">×</a>
		</div>
		<div class="modal-body">
		<table width="100%">
<tr><td width="50%" style="text-align:left"><sup>Inspired & Contributed by:</sup></td><td width="50%" style="text-align:right">BA❤️</td></tr>
<tr><td width="50%" style="text-align:left"><sup>Idea🕯Igniter:</sup></td><td width="50%" style="text-align:right">АДmin [БL●K]</td></tr><tr><td>~ ~ ~</td><td></td></tr>
<tr><td width="50%" style="text-align:left"><sup>Chief Developer 🛠:</sup></td><td width="50%" style="text-align:right">  @RESERVARIOUS</td></tr>
<tr><td width="50%" style="text-align:left"><sup>🪜FinalGit Constructor:</sup></td><td width="50%" style="text-align:right"> BLVCK J03</td></tr>
<tr><td width="50%" style="text-align:left"><sup>LayoutArtist🎨CoDEsigner:</sup></td><td width="50%" style="text-align:right">  Mawa JIAOC</td></tr>
<tr><td width="50%" style="text-align:left"><sup>Original Strings Writer:</sup></td><td width="50%" style="text-align:right">✏️ Eo Bartolo</td></tr>
<tr><td width="50%" style="text-align:left"><sup>Gl🌐bal Loc. Adaptation:</sup></td><td width="50%" style="text-align:right">A.MUSTACHE</td></tr><tr><td>~ ~ ~</td><td></td></tr>
<tr><td width="50%" style="text-align:left"><sup>GeneralSupport:</sup></td><td width="50%" style="text-align:right">ADMIN🎩MUSTACHE</td></tr>
<tr><td width="50%" style="text-align:left"><sup>👑Sponsored&Promoted by:</sup></td><td width="50%" style="text-align:right"> Eobard Bartolo<br></td></tr>
<tr><td width="50%" style="text-align:left"><sup>Published by:</sup></td><td width="50%" style="text-align:right">   🎱iZ Inc. Technologies</td></tr></table>
		</div>
	</div>
</div>
		</body>
	</html>
<?php 



?>