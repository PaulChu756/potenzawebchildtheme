( function( $ ) {
    
    wp.customize( 'hide_footer_section', function( value ) {
        
        value.bind( function( to ) {
    
            if ( true === to ) {
                $( '#footer-bottom' ).removeClass( 'hidden' );
            } else {
                $( '#footer-bottom' ).addClass( 'hidden' );
            }
    
        });
        
    });
    
    } )( jQuery );