(function($) {    
  if ($.fn.style) {
    return;
  }

  // Escape regex chars with \
  var escape = function(text) {
    return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
  };

  // For those who need them (< IE 9), add support for CSS functions
  var isStyleFuncSupported = !!CSSStyleDeclaration.prototype.getPropertyValue;
  if (!isStyleFuncSupported) {
    CSSStyleDeclaration.prototype.getPropertyValue = function(a) {
      return this.getAttribute(a);
    };
    CSSStyleDeclaration.prototype.setProperty = function(styleName, value, priority) {
      this.setAttribute(styleName, value);
      var priority = typeof priority != 'undefined' ? priority : '';
      if (priority != '') {
        // Add priority manually
        var rule = new RegExp(escape(styleName) + '\\s*:\\s*' + escape(value) +
            '(\\s*;)?', 'gmi');
        this.cssText =
            this.cssText.replace(rule, styleName + ': ' + value + ' !' + priority + ';');
      }
    };
    CSSStyleDeclaration.prototype.removeProperty = function(a) {
      return this.removeAttribute(a);
    };
    CSSStyleDeclaration.prototype.getPropertyPriority = function(styleName) {
      var rule = new RegExp(escape(styleName) + '\\s*:\\s*[^\\s]*\\s*!important(\\s*;)?',
          'gmi');
      return rule.test(this.cssText) ? 'important' : '';
    }
  }

  // The style function
  $.fn.style = function(styleName, value, priority) {
    // DOM node
    var node = this.get(0);
    // Ensure we have a DOM node
    if (typeof node == 'undefined') {
      return this;
    }
    // CSSStyleDeclaration
    var style = this.get(0).style;
    // Getter/Setter
    if (typeof styleName != 'undefined') {
      if (typeof value != 'undefined') {
        // Set style property
        priority = typeof priority != 'undefined' ? priority : '';
        style.setProperty(styleName, value, priority);
        return this;
      } else {
        // Get style property
        return style.getPropertyValue(styleName);
      }
    } else {
      // Get CSSStyleDeclaration
      return style;
    }
  };
})(jQuery);

(function($) {
	//micro plugin per usare in modo semplice animate.js
	$.fn.extend({
	animateCss: function (animationName) {
		var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		$(this).addClass('animated ' + animationName).one(animationEnd, function() {
			$(this).removeClass('animated ' + animationName);
		});
	}
	});
	
	//effetto parallasse
	$('.img-holder').imageScroll();
	

	
	//pulsante nel footer per tornare in alto				
	$('#toTop').click(function() {
		event.preventDefault();
		$('body,html').animate({scrollTop:0},800);
	});	

	$('.post-views-count').unwrap();
	
	var sticky = new Waypoint.Sticky({
	  element: $('#main-menu'),
	  handler: function(direction) {
		console.log("ok" + direction)
		if (direction == 'down')
    		$('#menu-item-168').style('display', 'inline-block', 'important');
		else 
			$('#menu-item-168').style('display', 'none', 'important');
  	}
	})
	$('[data-toggle="tooltip"]').tooltip();
	$('#shareTheLove').popover({html : true});
	
	//attendo fino a quando non sono creati i pulsanti dello slideshow in home e a qual punto avvio lo script per riposizionarli
	$('body').on('DOMNodeInserted', '.rsArrow', function () {
		//recupero dimensione schermo e dimensione container
		var actualWidth = $('.rsContainer').width();
		var screenWidth = $(window).width();
		var trueLeftRight = (screenWidth - actualWidth)/2; 
		$('.rsArrowLeft').css('left',trueLeftRight);
		$('.rsArrowRight').css('right',trueLeftRight);
		
		//$('.rsVisibleNearbyWrap').append('<div class="gradient"></div>');
	});
	$('body').on('DOMNodeInserted', '.rsSlide', function () {
		//tolgo le virgole alle categorie
		//$('.catSlide').text($('.catSlide').text().replace(/\,/g,' '));
		
		//recupero dimensione schermo e dimensione container
		$('.rsSlide').each(function(index, element) {
			var cat = $(this).find('.catSlide').find('a');
			$(cat).each(function(index, element) {
				var classe = encodeURIComponent($(this).text());
				$(this).addClass(classe.replace(/[!\"#$%&'\(\)\*\+,\.\/:;<=>\?\@\[\\\]\^`\{\|\}~]/g, '').toLowerCase());	
			});

			//var title = $(this).find('.currentSlideTitle');
			//var htmlCat = cat.unwrapInner().html();
			//console.log(htmlCat);
			//title.append(cat);
			//cat.appendTo( title );
			//$(this).find('.catSlide').appendTo($(this).find('.currentSlideTitle'));
        }); 
	});
	
	
	
	$( window ).resize(function() {
  		var actualWidth = $('.rsContainer').width();
		var screenWidth = $(window).width();
		var trueLeftRight = (screenWidth - actualWidth)/2; 
		$('.rsArrowLeft').css('left',trueLeftRight);
		$('.rsArrowRight').css('right',trueLeftRight); 
	});


var myDiv1Para = $('.ssba-wrap').remove();
$('#shareTheLove').attr('data-content',myDiv1Para.html());

$('.newsSection .mega_dropdown').prepend('<a class="sectionLinkNews" href="#"><i class="fa fa-newspaper-o"></i> <span>Visualizza tutte le news</span></a>');
$('.newsSection .widget_post_views_counter_list_widget .widgettitle').prepend('<i class="fa fa-eye"></i>');
$('.newsSection .widget_recent_entries .widgettitle').prepend('<i class="fa fa-clock-o"></i>');


})( jQuery );





jQuery.fn.extend({
    unwrapInner: function(selector) {
        return this.each(function() {
            var t = this,
                c = jQuery(t).children(selector);
            if (c.length === 1) {
                c.contents().appendTo(t);
                c.remove();
            }
        });
    }
});