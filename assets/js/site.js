(function($) {
    $(document).ready(function() {

        var path = location.pathname.split('/');

        if ( path[1] !== '' ) {
            $('.nav-link[href^="/' + path[1] + '"]').addClass('active');
        } else {
            $('.home').addClass('active');
        }

        $('.menu-section__menu').each(function() {
            $(this).hide();
        });

        $('.menu-section--dropdown-title').click(function() {
            var $this = $(this);
            $this.toggleClass('menu-open');
            $this.next('.menu-section__menu').slideToggle(450);
        });

    });
})(jQuery);
