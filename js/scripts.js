$(function(){

	console.log("It's working");

	$(function(){
	    $('nav ul li').click(function(){
	       $(this).addClass('current-menu-item');
	    });
	});

	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);
	   $('html, body').stop().animate({
     	'scrollTop': $target.offset().top - 70
		}, 900, 'swing'); 
 	});

});