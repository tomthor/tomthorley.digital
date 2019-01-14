var $menuToggle = jQuery(".menu-toggle");
var $menuBars = jQuery(".menu-bar");
var $mobileMenu = jQuery(".mobile-menu");


$menuToggle.on("click", function(e) {
  $menuToggle.toggleClass("menu-active");
  $menuBars.toggleClass("menu-bar-active");

  if ($mobileMenu.hasClass('hidden')) {

    $mobileMenu.removeClass('hidden');
    setTimeout(function () {
      $mobileMenu.removeClass('visuallyhidden');
    }, 15);

  } else {

    $mobileMenu.addClass('visuallyhidden');

    $mobileMenu.one('transitionend', function(e) {

      $mobileMenu.addClass('hidden');

    });

  }

});
