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

 	$('.work a.taphover').on("touchstart", function (e) {
    "use strict"; //satisfy the code inspectors
    var work = $(this); //preselect the link
    if (work.hasClass('hover')) {
        return true;
    } else {
        work.addClass("hover");
        $('.work a.taphover').not(this).removeClass("hover");
        e.preventDefault();
        return false; //extra, and to make sure the function has consistent return points
    }
	});

});