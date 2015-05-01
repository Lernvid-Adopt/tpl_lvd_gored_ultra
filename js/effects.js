$(document).ready(function() {


	// Mainmenu with suffix _menu	
	$('.moduletable_menu ul.menu li a').hover(function(){
		$(this).animate({'padding-left':'30px'},{
			queue:false,
			duration:'fast'
		});
	}, function(){
		$(this).animate({'padding-left':'12px'},{
			queue:false,
			duration:'middle'
		});
	});


	// Searchbox animation
	$("#search").hide({},"fast").show({},"swing"); 


	// Go to top link
	$('a#gotop').click(function(){
	$('html, body').animate({scrollTop:0}, 600); 
		return false; 
	});


	// System Messages
	$('dl#system-message').hide('', function(){
	});
	$("dl#system-message").slideDown({
		duration: 'slow'
	});
	$("dl#system-message").fadeOut({
		duration: 8000
	});

});
