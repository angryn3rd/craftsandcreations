jQuery(document).ready(function($){     

jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
   autoplay:true,
    autoplayTimeout:3500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

jQuery('.testimonialslide').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    autoplay:true,
    autoplayTimeout:3500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})




});
