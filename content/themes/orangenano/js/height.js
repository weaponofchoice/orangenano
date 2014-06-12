// Generated by CoffeeScript 1.7.1
var container, container_height, header, header_height;

if ($('body').length > 0) {
  header = $('.top');
  header_height = header.height() + 25;
  container = $('#container');
  container_height = container.height();
  container.css("top", header_height);
  $(window).on('resize', function() {
    var viewport;
    viewport = window.innerHeight;
    header = $('.top');
    header_height = header.height() + 25;
    return container.css("top", header_height);
  });
}
