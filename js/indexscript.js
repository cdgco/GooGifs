/*!

Copyright 2016 CDG, Co. G.W.S.
Developed By CDG Labs in Oregon.
Powered By Giphy & Google.com

*/

//auto expand textarea
	      function adjust_textarea(h) {
	         h.style.height = "20px";
	         h.style.height = (h.scrollHeight)+"px";
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