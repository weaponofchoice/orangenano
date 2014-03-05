// Generated by CoffeeScript 1.6.3
var icons, target;

if ($('.accordion').length > 0) {
  target = $('.accordion');
  icons = {
    header: "open",
    activeHeader: "close"
  };
  target.accordion({
    icons: icons,
    header: 'h4',
    animate: 200,
    collapsible: true,
    heightStyle: 'content',
    active: false
  });
}
