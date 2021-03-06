<!DOCTYPE html>
<?php $filename = 'config.php';

if (file_exists($filename)) {} 
else { header( 'Location: install' );}

?>
<!-- 

Copyright 2016 CDG, Co. G.W.S.
Developed By CDG Labs in Oregon.
Powered By Giphy & Google.com

-->

<html>
<head>

	<title>CDG Labs</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta name="mobile-web-app-capable" content="yes">
	<meta content="" name="keywords">
	
	<script type="application/x-javascript">
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script>

	<!-- Google Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>

	<!-- Custom CSS Stylesheets -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="css/CDG-Style.css" rel='stylesheet' type='text/css'>

	<!-- Custom Scripts -->
	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <script src="js/CDG-Index.js" type="text/javascript"></script>

<style>
@media screen and (min-width: 0px) and (max-width: 600px) { #content { display: block; } /* show it on small screens */ }
</style>
</head>

<body>
	<div class="main">
		<div class="container">
			<div>
				<div class="heading">
					<h1><b id="mobilehide" style="font-family: 'Product Sans', Arial, sans-serif;">CDG Labs</b> <b style="color:silver;"id="mobilehide">┋&nbsp;</b><em style="font-family: 'Product Sans', Arial, sans-serif;"><b id="letterg">G</b><b id="lettero1">o</b><b id="lettero2">o</b><b id="letterg">G</b><b id="letterl">i</b><b id="lettere">f</b></em></h1>
				</div>

				<div class="form-style-7">
					<form id="form1" method="get" name="form1">
						<ul>
							<li><input required id="whiteCheck" name="x" type="radio" onclick="javascript:yesnoCheck();" value="w"> White Google Logo</li>
    						        <li><input id="colorCheck" name="x" onclick="javascript:yesnocheck2();" type="radio" value="c"> Colored Google Logo</li>

							<li><input id="customCheck" name="x" onclick="javascript:yesnoCheck3();" type="radio" value="s"> Custom Title</li>
							<li style="list-style: none; display: none" id="customtitle">
									<ul>
										<li><input id='yes' name="name" placeholder="Kyle's Google" type="text"> <span>Title</span></li>									<center><li><input id='yes' name="c" placeholder="#FFFFFF" type="color"><span>Title Color</span></li></center>
									</ul>
								<br>
							</li>	
<li style="display: none" id="gifurl">
									<ul>
										<input id='customno' name="bg" onclick="javascript:hidecustomurl();" type="radio"> Random Gif<br>																			
										<input id='customyes' name="bg" onclick="javascript:customcheck();" type="radio"> Custom Gif&nbsp;
									</ul>
								
							</li>
						
<li style="display: none" id="customurl">
									<input name="bg2" placeholder="https://giphy.com/image.gif" id="imageForm" type="url" pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,4}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)(.jpg|.jpeg|.png|.gif)" oninvalid="setCustomValidity('Must be valid URL ending in .gif, .png, or .jpg.')"
    onchange="try{setCustomValidity('')}catch(e){}"><span>Gif / Image Link</span>
							</li>
							<li><input type="submit" value="Submit">
							</li>
						</ul></form>
					
				</div>
<br><div style="height:10px;font-size:1px;">&nbsp;</div>
				<center><img src="img/PoweredBy_Horizontal_Light-Backgrounds.gif" height="20px"></center>
<br>
				<div style="height:10px;font-size:1px;">&nbsp;</div>

					

					<table style="margin:0 auto;" id="footer">
						<tr>
							<td style="white-space:nowrap;">
									<div id="opener">
										<center><a href="#1" id="1" name="1" onclick="click1();">How To Set Title Color</a> | <a href="#2" id="2" name="2" onclick="return click2();">How To Add GIF</a></center>
									</div>

								<div style="margin:0 auto; display:none" id="benefits" >
										<div id="upbutton">
										<center	><a onclick="return hide();">(Close)</a></center>
										</div>

										<div style="height:10px;font-size:1px;">
											&nbsp;
										</div>

										<center><h4 style="display: inline-block; min-width: 350px;font-size: 12px">The form accepts:<br id"content"> <u><a href="http://www.w3schools.com/cssref/css_colorsfull.asp">HEX Codes</a></u> (#FFFFFF), <br id"content"><u><a href="http://www.w3schools.com/cssref/!css_colors.asp">RGB Codes</a></u> (255,255,255), <br id"content"><u><a href="http://www.w3schools.com/tags/ref_colorpicker.asp">Color Pickers</a></u>, <br id"content">and <u><a href="http://www.w3schools.com/cssref/css_colornames.asp">Color Names</a></u> (White).</h4></center>
								</div>

								<div id="benefits2" style="margin:0 auto;display:none;">
									<center>	<div id="upbutton">
											<a onclick="return hide2();">(Close)</a>
										</div></center>

										<div style="height:10px;font-size:1px;">
											&nbsp;
										</div>

									<center>	<h4 style="display: inline-block; min-width: 350px; font-size: 12px">Go to <a href="https://giphy.com">Giphy</a> and choose a GIF.<br id"content"> Underneath GIF, click "Advanced" <br id"content">Copy the "Download Link".<br>
										Paste the link in this page.</h4></center>
								</div>
							</td>
						</tr>
					</table>
				</center>
			</div>
		</div>
	</div>

<script type="text/javascript">
function click1() {
	show();
	hide2();
}

function click2() {
	show2();
	hide();
}
function show() {
	if (document.getElementById('benefits').style.display == 'none') {
		document.getElementById('benefits').style.display = 'inline-block';
	}
	return false;
}

function hide() {
	if (document.getElementById('benefits').style.display == 'inline-block') {
		document.getElementById('benefits').style.display = 'none';
	}
	return false;
}

function show2() {
	if (document.getElementById('benefits2').style.display == 'none') {
		document.getElementById('benefits2').style.display = 'inline-block';
	}
	return false;
}

function hide2() {
	if (document.getElementById('benefits2').style.display == 'inline-block') {
		document.getElementById('benefits2').style.display = 'none';
	}
	return false;
}
</script>
</body>
</html>