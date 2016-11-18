<!DOCTYPE html>
<html>
<head>
	<title>Config Test</title>
</head>
<body>
	<center>
		Your ShareThis Publish Key Is Currently Set as: <?php include 'config.php'; echo $pubkey ?><br>
		<br>
		<br>
		If key shows "NOT SET", please go to <a href="http://tools.sharethis.com/account/settings_new">Share This</a> (after creating an account), then copy and paste your publisher key in the file "config.php".<br>
		<br>
		<br>
		<br>
		Your API Key is set as: <?php include 'config.php'; print_r($apikey) ?><br>
		<br>
		<br>
		<br>
		The Search API URL is set as: <?php include 'config.php'; print_r($searchapi) ?><br>
		<br>
		The Random Generator API URL is set as: <?php include 'config.php'; print_r($randomapi) ?><br>
		<br>
		<br>
		If key shows blank, please turn on the Public Beta key in "config.php" or get a personal key at <a href="http://api.giphy.com/submit">Giphy</a>.
		<br>
<br>
		<br>
		<br>
		Your Support email is set as: <?php include 'config.php'; print_r($email) ?>
		<br>
		<br>
		To change value, edit config.php.
	</center>
</body>
</html>