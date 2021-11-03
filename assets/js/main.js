$(window).on('scroll', function () {
    var scrollTop = $(this).scrollTop()
    var score = '15px'
    if (scrollTop > 1) {
        score = '5px 15px'
    }
    $('#navbar').css('padding', score)
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,

            },
            1000: {
                items: 4,
            }
        }
    });
});

$('.to-top').on('click', function () {
    $('html, body').animate({ scrollTop: '0px' }, 800);
})

$('.jarallax').jarallax();