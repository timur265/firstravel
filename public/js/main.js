$(window).on('load', function () {
    //script to show page only after loading
    function loading() {
        $('.load').addClass('load-hide');
    }

    //function to show animation when you tap to href for moving to the section
    function smoothScrollToSection() {
        $("a").on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 500);
            e.preventDefault();
            return false;
        });
    }

    //scripts for mobile-menu
    function adaptiveMenu() {
        $('.burger').on('click', function () {
            $('.header-menu').toggleClass('active-header-menu');
            $(this).toggleClass('burger-active');
        });
        $('.header-menu ul li a').on('click', function () {
            $('.header-menu').toggleClass('active-header-menu');
            $('.burger').toggleClass('burger-active');
        })
    }

    //show scroll and call buttons after scroll
    function showScrollAndCallButton() {
        $(document).on('scroll', window, function () {
            if ($(window).scrollTop() > 200) {
                $('.scrollAndCall').addClass('scrollAndCall-show');
            } else {
                $(".scrollAndCall").removeClass('scrollAndCall-show');
            }
        });
    }



    //functions call
    loading(); //animation of loading page
    adaptiveMenu(); //scripts for mobile menu
    showScrollAndCallButton(); //script to show call and scrollTop buttons after scrolling 200px
    smoothScrollToSection(); //smooth scroll to section
});