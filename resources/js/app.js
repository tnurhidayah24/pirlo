import './bootstrap';

var owl = $('.part');

// owl Carousel
$(document).ready(function(){
    owl.owlCarousel({
        loop:true,
        items:5,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            1000:{
                items:3,
            }
        }
    });
});
