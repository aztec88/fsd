//MAIN HEADER
(function( $ ){

    $('.read_more_btn').hover(function(){
        $(this).parent().toggleClass('service_active');
    });
    $('.menu-item-has-children').click(function(){
        $(this).toggleClass('dropdown-active');
    });
    $('.dropdown_li').click(function(e){
        e.preventDefault();
    });
    
    $(document).on("click", function () {
        $(".search_form").hide();
    });

    $(".search_form").on("click", function (e) {
        e.stopPropagation();
    });

    $(".search_btn").on("click", function (e) {
        $(".search_form").toggle();
        e.stopPropagation();
    });

    //SLIDER
    var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 12000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    });

})(jQuery);

