$(function() {

    function isElementInViewport(elem) {
        var $elem = $(elem);

        // Get the scroll position of the page.
        var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
        var viewportTop = $(scrollElem).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        viewportTop = $(window).scrollTop();
        viewportBottom = viewportTop + $(window).height();

        // Get the position of the element on the page.
        var elemTop = Math.round( $elem.offset().top );
        var elemBottom = elemTop + $elem.height();

        return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
    }

    function assignActiveClassToNav() {
        var scrollDistance = $(window).scrollTop();
        $('section').each(function(i) {
            if ($(this).position().top-300 <= scrollDistance) {
                var $class = $(this).attr("id");
                $('#main-nav a.active').removeClass('active');
                $('#main-nav a.'+$class).addClass('active');
            }
        });
    }

    function setMenuLinks() {
        $(".anchor").on('click', function(event) {
            event.preventDefault();

            var target;

            if ($.attr(this, 'href')) {
                target = $.attr(this, 'href');
            } else {
                target = $(this).data('href');
            }

            $('html, body').animate({
                scrollTop: $(target).offset().top - $('#top-header').outerHeight()
            }, 500);
        })
    }

    function stickyHeader() {
        var main_header = $('#main-header'),
            top_header = $('#top-header'),
            main_header_top = main_header.offset().top,
            main_header_bottom = main_header_top + main_header.height(),
            scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
            viewportTop = $(scrollElem).scrollTop(),
            viewportTop = $(window).scrollTop();

        console.log(viewportTop + ", " + top_header.height() + ", " + main_header_bottom);
        if (viewportTop + 100 >= main_header_bottom) {
            top_header.addClass("sticky");
        } else {
            top_header.removeClass("sticky");
        }
    }

    setMenuLinks();
    assignActiveClassToNav();
    stickyHeader();
    
    $(window).scroll(function(){
        assignActiveClassToNav();
        stickyHeader();
    });

})