(function( $ ) {


 //This will show/hide the navigation list in mobile view.
 $('.menu-toggle').on('click', function(){
   event.preventDefault();
   $('#primary-menu').animate({width:'toggle'},200);
  });

  $('.menu-toggle').on('focusout', function(){
    event.preventDefault();
   });



})( jQuery );

//for tabing section of project pages
jQuery(document).ready(function() {
	jQuery('.tabs .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');
		console.log(currentAttrValue);
        // Show/Hide Tabs
     	jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });
});


//For the mobile resume acordion menu (including the switch)
var acc = document.getElementsByClassName("accordion");
var i;


        for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}   


 
