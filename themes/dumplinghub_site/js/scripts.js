(function( $ ) {


 //for nav button in mobile

 $(document).ready(function() {
  var $toggleButton = $('.toggle-button');
  $menuWrap = $('.menu-wrap');

  $toggleButton.on('click', function() {
    $(this).toggleClass('button-open');
    $menuWrap.toggleClass('menu-show');
  });
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


 
