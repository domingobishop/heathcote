/*!
 * Additional JS
 * 
 */

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Removes fixed width from .wp-caption div for images
$(".wp-caption").removeAttr('style');