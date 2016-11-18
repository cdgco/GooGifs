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

function yesnoCheck() {
	if (document.getElementById('customCheck').checked) {
		document.getElementById('ifYes').style.display = 'block';
	} else document.getElementById('ifYes').style.display = 'none';
}

function close1() {
	if (document.getElementById('whiteCheck').checked) {
		document.getElementById('ifYes').style.display = 'none';
	} else document.getElementById('ifYes').style.display = 'block';
}
function close2() {
	if (document.getElementById('colorCheck').checked) {
		document.getElementById('ifYes').style.display = 'none';
	} else document.getElementById('ifYes').style.display = 'block';
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