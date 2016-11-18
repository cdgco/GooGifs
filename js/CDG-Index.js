	//auto expand textarea
	function adjust_textarea(h) {
		h.style.height = "20px";
		h.style.height = (h.scrollHeight) + "px";
	}
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});

	function yesnoCheck() {
		if (document.getElementById('customCheck').checked) {
			document.getElementById('ifYes').style.display = 'block';
		} else document.getElementById('ifYes').style.display = 'none';
	}
	jQuery(document).ready(function($) {
		var form = $('form[name="form1"]'),
			radio = $('input[name="x"]'),
			choice = '';
		radio.change(function(e) {
			choice = this.value;
			if (choice === 'c') {
				form.attr('action', 'color.php');
			}
			if (choice === 'w') {
				form.attr('action', 'white.php');
			}
			if (choice === 's') {
				form.attr('action', 'custom.php');
			}
		});
	});

	function toggleFullScreen() {
		var doc = window.document;
		var docEl = doc.documentElement;
		var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl.webkitRequestFullScreen || docEl.msRequestFullscreen;
		var cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen || doc.msExitFullscreen;
		if (!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement) {
			requestFullScreen.call(docEl);
		} else {
			cancelFullScreen.call(doc);
		}
	}