//-----------DOCUMENT.READY----------------

jQuery(document).ready(function($) {

  // --- Hamburger menu
  $('.menu-toggle').click(function() {
    $(this).toggleClass('active');
    $('body').toggleClass('nav-active');
    $('.navigation').toggleClass('opened');
  });

});