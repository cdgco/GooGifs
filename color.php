<?php include 'publisher-key.php'?>
<!DOCTYPE html>
<!-- 

Copyright 2016 CDG, Co. G.W.S.
Developed By CDG Labs in Oregon.
Powered By Giphy & Google.com

-->

<html>
<head>
	<link href='https://www.google.com/images/branding/product/ico/googleg_lodp.ico' rel='shortcut icon' type='image/png'>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
        <link href='css/CDG-Search.css' rel='stylesheet' type='text/css'>
        <link href='css/CDG-Footer.css' rel='stylesheet' type='text/css' >

	<script type="text/javascript">var switchTo5x=true;</script>
	<script id="st_insights_js" src="https://ws.sharethis.com/button/buttons.js?publisher=%3C?php%20echo%20$pubkey;%20?%3E" type="text/javascript"></script>
	<script src="https://ss.sharethis.com/loader.js" type="text/javascript"></script>

	<title>Google</title>
</head>

<body>
<div class="mainDiv">
<div class="outer">
<div class="middle">
<div class="inner">
	<p style="text-align:center; display:inline-block; font-family: 'Product Sans', Arial, sans-serif;">
		<span id="letterg">G</span>
		<span id="lettero1">o</span>
		<span id="lettero2">o</span>
		<span id="letterg">g</span>
		<span id="letterl">l</span>
		<span id="lettere">e</span>
	</p>

        <div style="height:20px;font-size:1px;">&nbsp;</div>
	
        <form action="/search" class="tsf" id="tsf" method="get" name="f" onsubmit="return q.value!=''" role="search" style="overflow:visible">
		<input name="sclient" type="hidden" value="psy-ab">

		<div id="searchContainer">
			<input id="field" name="q" maxlength="2048" autocomplete="off" title="Search" type="text" value="" aria-label="Search" aria-haspopup="false" role="combobox" aria-autocomplete="both" spellcheck="false" autofocus>
		</div>
        <div style="height:5px;font-size:1px;">&nbsp;</div>

		<div style="padding-top:18px">
			<input aria-label="Google Search" class="button default" name="btnK" type="submit" value="Google Search">
			<input aria-label="I'm Feeling Lucky" class="button default" id="gbqfbb" name="btnI" type="submit" value="I'm Feeling Lucky">
		</div>

		<input name="oq" type="hidden" value="">
		<input name="gs_l" type="hidden" value="">
		<input name="pbx" type="hidden" value="1">
	</form>

</div>
	<div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<script>$.backstretch("<?php print_r($_GET['bg']) ?>");</script>
		<span class="ctr-p" data-jiis="bp" id="body"><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script></span> 
		<script type="text/javascript">stLight.options({publisher: "<?php echo $pubkey; ?>", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
		<script>var options={ "publisher": "<?php echo $pubkey; ?>", "position": "left", "ad": { "visible": false, "openDelay": 0, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "email"]}}; var st_hover_widget = new sharethis.widgets.hoverbuttons(options);</script>
	    </div>
        </div>
    </div>
</div>

	<div class="_hq _ih" id="fbar">
		<div class="fbar">
			<span id="fsr">
				<a class="_Sh" href="https://github.com/cdgco/GooGifs">Fork On Github</a>
				<a class="_Se" href="https://cdgco.github.io">CDG Labs</a></span> <span id="fsl"></span>

			<p class="_Sh" style="float:left"><span id="fsl"></span></p>
			<span id="fsl"><a class="_Sh" href="https://cdgtech.one" style="float:left">&copy; 2016 Complex Design Groups, Co.</a></span>
		</div>
	</div>
</body>
</html>