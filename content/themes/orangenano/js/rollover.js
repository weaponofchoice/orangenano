// Generated by CoffeeScript 1.7.1
if ($('html').length > 0) {
  $(function() {
    $("img.rollover").hover((function() {
      var e;
      e = $(this);
      e.data("originalSrc", e.attr("src"));
      e.attr("src", e.attr("data-rollover"));
    }), function() {
      var e;
      e = $(this);
      e.attr("src", e.data("originalSrc"));
    });
  });
}
