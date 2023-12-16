(function($) {
    $(document).ready(function() {

        var path = location.pathname.split('/');

        if ( path[1] !== '' ) {
            $('.nav-link[href^="/' + path[1] + '"]').addClass('active');
        } else {
            $('.home').addClass('active');
        }

    });
})(jQuery);
