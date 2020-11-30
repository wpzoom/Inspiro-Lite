(function( $ ) {

    // Variables and DOM Caching.
    var $body = $('body'),
        $customHeader = $body.find('.custom-header'),
        $branding = $customHeader.find('.site-branding'),
        $navigation = $body.find('#site-navigation'),
        $menuScrollDown = $body.find('#scroll-to-content'),
        $sidebar = $body.find('#secondary'),
        $entryContent = $body.find('.entry-content'),
        $formatQuote = $body.find('.format-quote blockquote'),
        hasCustomHeaderMedia = $body.hasClass('has-header-image') || $body.hasClass('has-header-video'),
        isFrontPage = $body.hasClass( 'inspiro-front-page' ) || $body.hasClass( 'home blog' ),
        menuTop = 0,
        resizeTimer,
        navigationHeight,
        navigationOuterHeight;

    // Set properties of navigation.
    function setNavProps() {
        navigationHeight = $navigation.height();
        navigationOuterHeight = $navigation.outerHeight();

        // If Admin bar is present on page, update navigationOuterHeight value.
        if ( $( '#wpadminbar' ).length ) {
            navigationOuterHeight += $( '#wpadminbar' ).outerHeight();
        }
    }

    // Set margins of custom header.
    function adjustHeaderSpacing() {
        if ( $(window).outerWidth() >= 768 ) {
            if ( ! hasCustomHeaderMedia ) {
                $customHeader.css('padding-top', navigationOuterHeight);
            }
        } else {
            $customHeader.css('padding-top', '0');
        }
    }

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

        // If navigation menu is present on page, setNavProps.
        if ( $navigation.length ) {
            setNavProps();
        }

        // If 'Scroll Down' arrow in present on page, calculate scroll offset and bind an event handler to the click event.
        if ( $menuScrollDown.length ) {

            if ( $( 'body' ).hasClass( 'admin-bar' ) ) {
                menuTop -= 32;
            }
            if ( $navigation.length ) {
                menuTop -= 24; // top & bottom padding space when headroom is pinned
            } else {
                navigationHeight = 0;
            }

            $menuScrollDown.on('click', function(e) {
                e.preventDefault();
                $( window ).scrollTo( '#content', {
                    duration: 600,
                    offset: { top: menuTop - navigationHeight }
                });
            });
        }

        adjustHeaderSpacing();
        belowEntryMetaClass( 'blockquote.alignleft, blockquote.alignright' );

        if ( true === supportsFixedBackground() ) {
            document.documentElement.className += ' background-fixed';
        }
    });

    // If navigation menu is present on page, adjust it on screen resize.
    if ( $navigation.length ) {
        // We want to make sure the navigation is where it should be on resize.
        $( window ).on( 'resize', function() {
            setNavProps();
            adjustHeaderSpacing();
        });
    }

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
