(function( $ ) {

    // Variables and DOM Caching.
    var $body = $( 'body' ),
        $customHeader = $body.find( '.custom-header' ),
        $branding = $customHeader.find( '.site-branding' ),
        $menuScrollDown = $body.find( '.menu-scroll-down' ),
        $sidebar = $body.find( '#secondary' ),
        $entryContent = $body.find( '.entry-content' ),
        $formatQuote = $body.find( '.format-quote blockquote' ),
        isFrontPage = $body.hasClass( 'inspiro-front-page' ) || $body.hasClass( 'home blog' ),
        menuTop = 0,
        resizeTimer;

    // Add 'below-entry-meta' class to elements.
    function belowEntryMetaClass( param ) {
        var sidebarPos, sidebarPosBottom;

        if ( ! $sidebar.length ) {
            return;
        }

        if ( ! $body.hasClass( 'has-sidebar' ) || (
            $body.hasClass( 'search' ) ||
            $body.hasClass( 'single-attachment' ) ||
            $body.hasClass( 'error404' ) ||
            $body.hasClass( 'inspiro-front-page' )
        ) ) {
            return;
        }

        sidebarPos       = $sidebar.offset();
        sidebarPosBottom = sidebarPos.top + ( $sidebar.height() + 28 );

        $entryContent.find( param ).each( function() {
            var $element = $( this ),
                elementPos = $element.offset(),
                elementPosTop = elementPos.top;

            // Add 'below-entry-meta' to elements below the entry meta.
            if ( elementPosTop > sidebarPosBottom ) {
                $element.addClass( 'below-entry-meta' );
            } else {
                $element.removeClass( 'below-entry-meta' );
            }
        });
    }

    /*
     * Test if inline SVGs are supported.
     * @link https://github.com/Modernizr/Modernizr/
     */
    function supportsInlineSVG() {
        var div = document.createElement( 'div' );
        div.innerHTML = '<svg/>';
        return 'http://www.w3.org/2000/svg' === ( 'undefined' !== typeof SVGRect && div.firstChild && div.firstChild.namespaceURI );
    }

    /**
     * Test if an iOS device.
    */
    function checkiOS() {
        return /iPad|iPhone|iPod/.test(navigator.userAgent) && ! window.MSStream;
    }

    /*
     * Test if background-attachment: fixed is supported.
     * @link http://stackoverflow.com/questions/14115080/detect-support-for-background-attachment-fixed
     */
    function supportsFixedBackground() {
        var el = document.createElement('div'),
            isSupported;

        try {
            if ( ! ( 'backgroundAttachment' in el.style ) || checkiOS() ) {
                return false;
            }
            el.style.backgroundAttachment = 'fixed';
            isSupported = ( 'fixed' === el.style.backgroundAttachment );
            return isSupported;
        }
        catch (e) {
            return false;
        }
    }

    // Fire on document ready.
    $( document ).ready( function() {

        // If 'Scroll Down' arrow in present on page, calculate scroll offset and bind an event handler to the click event.
        if ( $menuScrollDown.length ) {

            if ( $( 'body' ).hasClass( 'admin-bar' ) ) {
                menuTop -= 32;
            }
            if ( $( 'body' ).hasClass( 'blog' ) ) {
                menuTop -= 30; // The div for latest posts has no space above content, add some to account for this.
            }

            $menuScrollDown.on('click', function(e) {
                e.preventDefault();
                $( window ).scrollTo( '#primary', {
                    duration: 600,
                    offset: { top: menuTop }
                });
            });
        }

        belowEntryMetaClass( 'blockquote.alignleft, blockquote.alignright' );
        if ( true === supportsInlineSVG() ) {
            document.documentElement.className = document.documentElement.className.replace( /(\s*)no-svg(\s*)/, '$1svg$2' );
        }

        if ( true === supportsFixedBackground() ) {
            document.documentElement.className += ' background-fixed';
        }
    });

    $( window ).on( 'resize', function() {
        clearTimeout( resizeTimer );
        resizeTimer = setTimeout( function() {
            belowEntryMetaClass( 'blockquote.alignleft, blockquote.alignright' );
        }, 300 );
    });

    // Add header video class after the video is loaded.
    $( document ).on( 'wp-custom-header-video-loaded', function() {
        $body.addClass( 'has-header-video' );
    });

})( jQuery );
