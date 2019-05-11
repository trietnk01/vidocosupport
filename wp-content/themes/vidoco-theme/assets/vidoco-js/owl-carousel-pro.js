jQuery(document).ready(function(){
	jQuery(".owl-carousel-banner").owlCarousel({
        autoplay:false,                    
        loop:false,
        margin:0,                        
        nav:false,
        navText: ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"],
        dots:false,            
        mouseDrag: true,
        touchDrag: true,  
        lazyLoad: true,                              
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            }
        }
    });         
});