!function(e){e(".read_more_btn").hover(function(){e(this).parent().toggleClass("service_active")}),e(".menu-item-has-children").click(function(){e(this).toggleClass("dropdown-active")}),e(".dropdown_li").click(function(e){e.preventDefault()}),e(document).on("click",function(){e(".search_form").hide()}),e(".search_form").on("click",function(e){e.stopPropagation()}),e(".search_btn").on("click",function(n){e(".search_form").toggle(),n.stopPropagation()});new Swiper(".swiper-container",{slidesPerView:1,spaceBetween:30,loop:!0,autoplay:{delay:12e3,disableOnInteraction:!1},pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}})}(jQuery);