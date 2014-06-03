// Generated by CoffeeScript 1.7.1
var container, container_height, header, header_height;

if ($('body').length > 0) {
  header = $('#top');
  header_height = header.height() + 25;
  container = $('#container');
  container_height = container.height();
  header.css("height", header_height);
  container.css("top", header_height);
  $(window).on('resize', function() {
    var viewport;
    viewport = window.innerHeight;
    header_height = header.height() + 25;
    header.css("height", header_height);
    return container.css("top", header_height);
  });
}
