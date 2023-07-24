(function($) {

    "use strict";

        $(document).ready(function() {

          $(".user-items .search-item").click(function(){
              $(".search-box").toggleClass('active');
              $(".search-box .search-input").focus();
            });
            $(".close-button").click(function(){
              $(".search-box").toggleClass('active');
            }); 

            var swiper = new Swiper(".main-swiper", {
              slidesPerView: 1,
              spaceBetween: 10,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              breakpoints: {
                900: {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
              },
            });

            var swiper = new Swiper(".thumb-swiper", {
              direction: 'horizontal',
              slidesPerView: 4,
              spaceBetween: 10,
              breakpoints: {
                900: {
                  direction: 'vertical',
                },
              },
            });
            var swiper2 = new Swiper(".large-swiper", {
              spaceBetween: 10,
              effect: 'fade',
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              thumbs: {
                swiper: swiper,
              },
            });

        }); // End of a document

    })(jQuery);