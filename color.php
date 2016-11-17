<?php include 'publisher-key.php'?>
<!DOCTYPE html>
<!-- 

Copyright 2016 CDG, Co. G.W.S.
Developed By CDG Labs in Oregon.
Powered By Giphy & Google.com

-->
<html>
<head>
	<!-- Linked CSS Stylesheets -->
	<link href="css/google.css" rel='stylesheet' type='text/css'>

        <!-- Font For Google Logo -->
	<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>

        <!-- Share Button Scripts -->
        <script type="text/javascript">var switchTo5x=true;</script>
	<script id="st_insights_js" src="https://ws.sharethis.com/button/buttons.js?publisher=<?php echo $pubkey; ?>" type="text/javascript"></script>
	<script src="https://ss.sharethis.com/loader.js" type="text/javascript"></script>

        <!-- Combined File of Google Scripts -->
        <script src="js/google.js" type="text/javascript"></script>

        <!-- Title -->
        <title>Google</title>

	<style type="text/css">
	   body {
	      background-image: url(<?php print_r($_GET['bg']) ?>);
	      background-repeat: no-repeat;
	      background-size: 100% 100%;
	   }
	       
	       /* Letters In Google Logo */

	   #letterg {
	      font-size: 90px;
	      color: #4285F4
	   }
	   #lettero1 {
	      font-size: 90px;
	      color: #EA4335
	   }
	   #lettero2 {
	      font-size: 90px;
	      color: #FBBC05
	   }
	   #letterl {
	      font-size: 90px;
	      color: #34A853
	   }
	   #lettere {
	      font-size: 90px;
	      color: #EA4335
	   }
	</style>

	<title>
	</title>
</head>

<body class="hp vasq" id="gsr">
	<div class="ctr-p" id="viewport">
		<div class="jhp big big" id="searchform">
			<div class="gb_T" id="gb">
				<div id="gbw">
					<div style="top:0;left:0;right:0;width:100%">
					</div>
				</div>
			</div>


			<div class="sfbg nojsv" style="margin-top:-15px">
				<div class="sfbgg">
				</div>
			</div>


			<form action="/search" class="tsf" id="tsf" method="get" name="f" onsubmit="return q.value!=''" role="search" style="overflow:visible">
				<input name="sclient" type="hidden" value="psy-ab">

				<div data-jibp="" data-jiis="uc" id="tophf">
					<input name="safe" type="hidden" value="strict"> 
                                        <input name="site" type="hidden" value=""> 
                                        <input name="source" type="hidden" value="hp">
				</div>


				<div class="tsf-p">
					<div class="sfibbbc">
						<div class="sbtc" id="sbtc">
							<div class="sbibtd">
								<div class="nojsv sfopt" id="sfopt">
									<div class="lsd">
										<div data-jiis="uc" id="ss-bar" style="white-space:nowrap;z-index:98">
										</div>
									</div>
								</div>


								<div class="sfsbc">
									<div class="nojsb">
										<div class="ds" id="sbds">
											<div class="lsbb kpbb" id="sblsbb">
												<button class="lsb" name="btnG" type="submit" value="Search">
                                                                                                        <span class="sbico"></span>
                                                                                                </button>
											</div>
										</div>
									</div>
								</div>


								<div class="sbibod" id="sfdiv">
									<div class="gstl_0 sbib_a" style="height: 38px;">
										<div class="sbib_b" dir="ltr" id="sb_ifc0">
											<div id="gs_lc0" style="position: relative;">
												<input aria-autocomplete="both" aria-haspopup="false" aria-label="Search" autocomplete="off" autofocus="" class="gsfi" dir="ltr" id="lst-ib" maxlength="2048" name="q" role="combobox" spellcheck="false" style="border: none; padding: 0px; margin: 0px; height: auto; width: 100%; position: absolute; z-index: 6; left: 0px; outline: none;" title="Search" type="text" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>


					<div class="jsb" style="padding-top:18px">
						<center>
							<input aria-label="Google Search" name="btnK" type="submit" value="Google Search"> 
                                                        <input aria-label="I'm Feeling Lucky" id="gbqfbb" name="btnI" type="submit" value="I'm Feeling Lucky">
						</center>
					</div>
				</div>
				<input name="oq" type="hidden" value=""><input name="gs_l" type="hidden" value=""><input name="pbx" type="hidden" value="1">
			</form>
		</div>


		<div class="content" data-jiis="cc" id="main">
			<span class="ctr-p" data-jiis="bp" id="body"></span>

			<center>
				<span class="ctr-p" data-jiis="bp" id="body"></span>

                                <!-- Adjust Position Of Google Logo -->
				<div id="lga" style="height:233px;margin-top:175px">
					<span class="ctr-p" data-jiis="bp" id="body"></span>

					<div class="color" id="colorsection">
						<span class="ctr-p" data-jiis="bp" id="body"></span>

						<h1 class="ctr-p" data-jiis="bp" id="body" style="font-family: 'Product Sans', Arial, sans-serif;"><span id="letterg">G</span><span id="lettero1">o</span><span id="lettero2">o</span><span id="letterg">g</span><span id="letterl">l</span><span id="lettere">e</span>
						</h1>
					</div>
					<span class="ctr-p" data-jiis="bp" id="body">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script></span>
				</div>
			</center>

			<!-- Optional Scripts For Share Buttons -->
			<script type="text/javascript">
			         stLight.options({publisher: "<?php echo $pubkey; ?>", doNotHash: false, doNotCopy: false, hashAddressBar: false});
			</script> 
			<script> var options={ "publisher": "<?php echo $pubkey; ?>", "position": "left", "ad": { "visible": false, "openDelay": 0, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "email"]}}; var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
			</script>
		</div>
	</div>
</body>
</html>