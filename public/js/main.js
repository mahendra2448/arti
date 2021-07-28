// For responsive
var mq767 = window.matchMedia( "(max-width: 767px)" ); 
var mq1199 = window.matchMedia( "(max-width: 1199px)" ); 

$(function () {
    $(window).on('scroll', function () {        
        if($(this).scrollTop() > 100) { 
            $('.navbar').addClass('navbar-scrolled');
            $('.img-brand').removeClass('img-brand');
            $('.navbar-brand img').addClass('img-shrink');
        } else {
            $('.navbar').removeClass('navbar-scrolled');
            $('.img-shrink').removeClass('img-shrink');
            $('.navbar-brand img').addClass('img-brand');
        }

        $(".navbar-brand").toggleClass("navbar-brand-shrink", $(this).scrollTop() > 100);
    });
});

//Scroll-section
$('body').scrollspy({ target: '#exp-nav' });

$('.sub-nav li a').on('click', function(){
    $('.sub-nav li a.active').removeClass('active');
    $(this).addClass('active');
});

//Mobile-menu
$('.mobile-menu .m-toggle').on('click', function(){
    $('.mobile-menu').toggleClass('opened');
});
$('.mobile-menu .overlay').on('click', function(){
    $('.mobile-menu.opened').removeClass('opened');
});

// Slick
$(function(){
    $('.testi-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        swipe: true,
        autoplay: false,
        arrows: true,
        prevArrow: "<img class='slick-prev slick-arrow' src='../img/iconified/ic-prev.png' alt='Prev' style='width:30px;height:30px;'>",
        nextArrow: "<img class='slick-next slick-arrow' src='../img/iconified/ic-next.png' alt='Next' style='width:30px;height:30px;'>",
        focusOnSelect: false
    });
    $('.publication').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        swipe: true,
        autoplay: false,
        arrows: true,
        prevArrow: "<img class='slick-prev slick-arrow' src='../img/iconified/ic-prev-2.png' alt='Prev' style='width:30px;height:30px;'>",
        nextArrow: "<img class='slick-next slick-arrow' src='../img/iconified/ic-next-2.png' alt='Next' style='width:30px;height:30px;'>",
        focusOnSelect: false,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.articleSlide, .eduSlide').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        swipe: true,
        autoplay: false,
        arrows: true,
        prevArrow: "<img class='slick-prev slick-arrow' src='../img/iconified/ic-prev-2.png' alt='Prev' style='width:30px;height:30px;'>",
        nextArrow: "<img class='slick-next slick-arrow' src='../img/iconified/ic-next-2.png' alt='Next' style='width:30px;height:30px;'>",
        focusOnSelect: false,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
// request Publikasi's file
$('.title a').on('click', function(){
    var fileTitle = $(this).data('title')
    
    $.ajax({ // AJAX request
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: 'our-experiences/request',
        type: 'POST',
        data: {
            title: fileTitle,
            csrf: $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function(){
            $('#requestBody').append('<div class="text-center text-dark"><h3><i class="fas fa-spin fa-spinner ml-2"></i></h3></div>')
        },
        success: function(response){ 
            $('#requestBody').html(response); // Add response in Modal body
        }
    });
})
// Carousel delay
$('.carousel').carousel({
    interval: 3000,
    cycle: true
})
