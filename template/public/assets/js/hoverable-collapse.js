(function ($) {
  'use strict';
  //Open submenu on hover in compact sidebar mode and horizontal menu mode
  $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function (ev) {
    var body = $('body');
    var sidebarIconOnly = body.hasClass("sidebar-icon-only");
    var horizontalMenu = body.hasClass("horizontal-menu");
    var sidebarFixed = body.hasClass("sidebar-fixed");
    var $menuItem = $(this);
    if (!('ontouchstart' in document.documentElement)) {
      if (sidebarIconOnly || horizontalMenu) {
        if (sidebarFixed) {
          if (ev.type === 'mouseenter') {
            body.removeClass('sidebar-icon-only');
          }
        } else {
          if (ev.type === 'mouseenter') {
            $menuItem.addClass('hover-open')
          } else {
            $menuItem.removeClass('hover-open')
          }
        }
      }
    } else {
      if (sidebarIconOnly || horizontalMenu) {
        if (ev.type === 'mouseenter') {
          $menuItem.addClass('hover-open')
        } else {
          $menuItem.removeClass('hover-open')
        }
      }
    }
  });
  // Horizontal menu toggle fuction for mobile
  $(".navbar.horizontal-layout .navbar-menu-wrapper .navbar-toggler").on("click", function () {
    $(".navbar.horizontal-layout").toggleClass("header-toggled");
  });
})(jQuery);