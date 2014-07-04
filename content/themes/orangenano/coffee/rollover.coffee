if $('html').length > 0
	$ ->
	  $("img.rollover").hover (->
	    e = $(this)
	    e.data "originalSrc", e.attr("src")
	    e.attr "src", e.attr("data-rollover")
	    return
	  ), ->
	    e = $(this)
	    e.attr "src", e.data("originalSrc")
	    return

	  return

	# a preloader could easily go here too 