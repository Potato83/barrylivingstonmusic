$('.event-choose').each(function(){
	$butt = $(this);
	var show = '.' + $butt.attr('id');
	var toHide = show + '-hide';
	//var deSelect = show + '-x';
	$butt.click(function(){
		//$('.event-choose').toggleClass('hi-light');
		// alert(toHide);
		// $(this).toggleClass('active');
		$(toHide).fadeOut(400, function(){
			$(show).fadeIn(400).removeClass('hide');
			//alert(show);
			//$(show).removeClass('hide');
		});
	
	});
});



$('#join a').on('click', function(){
	$('.signup').fadeIn(400).toggleClass('hide');
});

// $('#mail-submit').on('click', function(){
// 	alert('Thanks, you will receive a confirmation email shortly.');
// });

// $('.event-choose').each(function(){
// 	$butt = $(this);

	
// 	$butt.click(function(){
// 		alert('yas');
	
// });

// $('#upco').on('click', function(){
// 	alert('plz');
// });