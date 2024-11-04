//category slider
$(document).ready(function () {
    $('.category-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            400: {
                items: 3
            },
            600: {
                items: 4
            },
            800: {
                items: 5
            },
            1000: {
                items: 6
            }
        }
    });

    var owl = $('.category-slider');
    owl.owlCarousel();
    // Go to the next item
    $('.customNextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
});

//shop by category slider
$(document).ready(function () {
    $('.category .category-container-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    var owl = $('.category-container-slider');
    owl.owlCarousel();
    // Go to the next item
    $('.NextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.PrevBtn').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
});

//product sliders
$(document).ready(function () {
    $('.product-cate .cate-products').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: false,
        // autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            800: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
});
