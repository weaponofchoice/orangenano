// Generated by CoffeeScript 1.7.1
var menu, trigger;

if ($('#menu-small-nav').length > 0) {
  menu = $('#menu-small-nav');
  trigger = $('#icon-menu');
  trigger.click(function() {
    return menu.toggleClass('active');
  });
}