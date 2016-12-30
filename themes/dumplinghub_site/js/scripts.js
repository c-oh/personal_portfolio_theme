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
