 <!--Footer-->
 <footer id="footer">

     <div class="site-footer footr_mail">
         <div class="container">
             <!--Footer Links-->
             <div class="footer-top">
                 <div class="row">
                     <div class=" col-sm-12 col-md-4 col-lg-3 contact-box">
                         <img src="assets/art_imgs/FINAL-LOGO.png" alt="logo" class="img-fluid mb-3">

                         <p>Lorem ipsum dolor sit amet. Eos molestias tempora est vitae aliquam est deserunt necessitatibus aut sapiente atque ut consequatur explicabo. Ut repellendus dolore ab ullam dolores qui ducimus fuga qui quibusdam molestias.</p>
                     </div>

                     <div class=" col-sm-12 col-md-2 col-lg-2 contact-box">
                         <h4 class="h4">Product</h4>
                         <ul>
                             <li><a href="#">Privacy Policy</a></li>
                             <li><a href="#">Terms and Conditions</a></li>
                             <li><a href="#">Privacy policy</a></li>
                             <li><a href="#">Shipping and Returns Policy</a></li>

                         </ul>
                     </div>
                     <div class="col-12 col-sm-12 col-md-2 col-lg-2 contact-box">
                         <h4 class="h4">Information</h4>
                         <ul>
                             <li><a href="#">FAQ</a></li>
                             <li><a href="#">More</a></li>
                             <li><a href="#">Support</a></li>

                         </ul>
                     </div>
                     <div class="col-12 col-sm-12 col-md-2 col-lg-2 contact-box">
                         <h4 class="h4">Company</h4>
                         <ul>
                             <li><a href="#">About us</a></li>
                             <li><a href="#">Contact us</a></li>

                         </ul>

                     </div>
                     <div class="col-12 col-sm-12 col-md-2 col-lg-3 contact-box subscribe_sec">
                         <h4 class="h4">Subscribe</h4>
                         <form action="#" method="post">
                             <div class="input-group">
                                 <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                 <span class="input-group__btn">
                                     <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button>
                                 </span>
                             </div>
                         </form>
                         <p class="pt-3">Lorem ipsum dolor sit amet. Est autem rerum 33 voluptatem nulla sit unde sapiente ut aliquid tempore.</p>
                     </div>
                 </div>
             </div>
             <!--End Footer Links-->
             <hr>
             <div class="footer-bottom">
                 <div class="row">
                     <!--Footer Copyright-->
                     <div class=" col-sm-12 col-md-4 col-lg-3  text-sm-center ">
                         <a href="" class="text-dark">All Rights Reserved@ ARTDROP, 2022</a>
                     </div>

                     <div class=" col-sm-12 col-md-4 col-lg-6  text-sm-center ">
                         <ul class="d-flex justify-content-center align-items-center">
                             <li>
                                 <a href="#" class="text-dark">Terms </a>
                             </li>
                             <li class="offset-1">
                                 <a href="#" class="text-dark">Privacy</a>
                             </li>
                         </ul>
                     </div>

                     <div class=" col-sm-12 col-md-4 col-lg-3  text-sm-center ">
                         <div class="footer-social icons_sty">
                             <ul class="list--inline site-footer__social-icons social-icons">
                                 <li><a class="social-icons__link" href="#" target="_blank" title=" Facebook"><i class="icon icon-linkedin"></i></a></li>
                                 <li><a class="social-icons__link" href="#" target="_blank" title=" Twitter"><i class="icon icon-facebook"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                 <li><a class="social-icons__link" href="#" target="_blank" title=" Pinterest"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Pinterest</span></a></li>

                             </ul>
                         </div>
                     </div>
                     <!--End Footer Copyright-->

                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--End Footer-->
 <!--Scoll Top-->
 <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
 <!--End Scoll Top-->



 <!-- Including Jquery -->
 <!-- <script src="assets/js/vendor/jquery-3.3.1.min.js"></script> -->
 <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
 <script src="assets/js/vendor/jquery.cookie.js"></script>
 <script src="assets/js/vendor/wow.min.js"></script>
 <!-- Including Javascript -->
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/plugins.js"></script>
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/lazysizes.js"></script>
 <script src="assets/js/main.js"></script>
 <!--For Newsletter Popup-->
 <!-- <script>
            jQuery(document).ready(function() {
                jQuery('.closepopup').on('click', function() {
                    jQuery('#popup-container').fadeOut();
                    jQuery('#modalOverly').fadeOut();
                });

                var visits = jQuery.cookie('visits') || 0;
                visits++;
                jQuery.cookie('visits', visits, {
                    expires: 1,
                    path: '/'
                });
                console.debug(jQuery.cookie('visits'));
                if (jQuery.cookie('visits') > 1) {
                    jQuery('#modalOverly').hide();
                    jQuery('#popup-container').hide();
                } else {
                    var pageHeight = jQuery(document).height();
                    jQuery('<div id="modalOverly"></div>').insertBefore('body');
                    jQuery('#modalOverly').css("height", pageHeight);
                    jQuery('#popup-container').show();
                }
                if (jQuery.cookie('noShowWelcome')) {
                    jQuery('#popup-container').hide();
                    jQuery('#active-popup').hide();
                }
            });

            jQuery(document).mouseup(function(e) {
                var container = jQuery('#popup-container');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.fadeOut();
                    jQuery('#modalOverly').fadeIn(200);
                    jQuery('#modalOverly').hide();
                }
            });
        </script> -->
 <!--End For Newsletter Popup-->

 <!-- off canvus side bar -->
 <script>
     function openNav() {
         $('#mySidenav').css('display', 'block');
         document.getElementById("mySidenav").style.width = "400px";
         // document.getElementById("main").style.marginLeft = "250px";
     }

     function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         document.getElementById("main").style.marginLeft = "0";
     }

     $(document).ready(function() {
         document.getElementById("mySidenav").style.width = "0";
     });
 </script>

 <script>
     $('#main_slider').slick({

         slidesToShow: 3,
         slidesToScroll: 1,
         arrows: true,
         dots: false,
         centerMode: true,
         variableWidth: true,
         infinite: true,
         focusOnSelect: true,
         cssEase: 'linear',
         touchMove: true,
         prevArrow: '<button class="slick-prev"> < </button>',
         nextArrow: '<button class="slick-next"> > </button>',

         //         responsive: [                        
         //             {
         //               breakpoint: 576,
         //               settings: {
         //                 centerMode: false,
         //                 variableWidth: false,
         //               }
         //             },
         //         ]
     });


     var imgs = $('#main_slider img');
     imgs.each(function() {
         var item = $(this).closest('.item');
         item.css({
             'background-image': 'url(' + $(this).attr('src') + ')',
             'background-position': 'center',
             '-webkit-background-size': 'cover',
             'background-size': 'cover',
         });
         $(this).hide();
     });

     // discount sec slider 

     $(document).ready(function() {
         $('.center-slider').slick({
             slidesToShow: 3,
             slidesToScroll: 1,
             centerMode: false,
             arrows: true,
             dots: true,
             speed: 300,
             centerPadding: '30px',
             infinite: true,
             autoplaySpeed: 500000,
             autoplay: true
         });
     });

     // top slider

     $(document).ready(function() {
         if ($(window).width() < 500) {
             $('.center-slider_new').slick({
                 slidesToShow: 3,
                 slidesToScroll: 1,
                 centerMode: true,
                 arrows: true,
                 dots: false,
                 speed: 300,
                 centerPadding: '20px',
                 infinite: true,
                 autoplaySpeed: 500000,
                 autoplay: true
             });
         } else {
             $('.center-slider_new').slick({
                 slidesToShow: 5,
                 slidesToScroll: 1,
                 centerMode: true,
                 arrows: true,
                 dots: false,
                 speed: 300,
                 centerPadding: '20px',
                 infinite: true,
                 autoplaySpeed: 500000,
                 autoplay: true
             });
         }

     });


     //  counter scripts

     (function($) {
         $.fn.countTo = function(options) {
             options = options || {};

             return $(this).each(function() {
                 // set options for current element
                 var settings = $.extend({}, $.fn.countTo.defaults, {
                     from: $(this).data('from'),
                     to: $(this).data('to'),
                     speed: $(this).data('speed'),
                     refreshInterval: $(this).data('refresh-interval'),
                     decimals: $(this).data('decimals')
                 }, options);

                 // how many times to update the value, and how much to increment the value on each update
                 var loops = Math.ceil(settings.speed / settings.refreshInterval),
                     increment = (settings.to - settings.from) / loops;

                 // references & variables that will change with each update
                 var self = this,
                     $self = $(this),
                     loopCount = 0,
                     value = settings.from,
                     data = $self.data('countTo') || {};

                 $self.data('countTo', data);

                 // if an existing interval can be found, clear it first
                 if (data.interval) {
                     clearInterval(data.interval);
                 }
                 data.interval = setInterval(updateTimer, settings.refreshInterval);

                 // initialize the element with the starting value
                 render(value);

                 function updateTimer() {
                     value += increment;
                     loopCount++;

                     render(value);

                     if (typeof(settings.onUpdate) == 'function') {
                         settings.onUpdate.call(self, value);
                     }

                     if (loopCount >= loops) {
                         // remove the interval
                         $self.removeData('countTo');
                         clearInterval(data.interval);
                         value = settings.to;

                         if (typeof(settings.onComplete) == 'function') {
                             settings.onComplete.call(self, value);
                         }
                     }
                 }

                 function render(value) {
                     var formattedValue = settings.formatter.call(self, value, settings);
                     $self.html(formattedValue);
                 }
             });
         };

         $.fn.countTo.defaults = {
             from: 0, // the number the element should start at
             to: 0, // the number the element should end at
             speed: 1000, // how long it should take to count between the target numbers
             refreshInterval: 100, // how often the element should be updated
             decimals: 0, // the number of decimal places to show
             formatter: formatter, // handler for formatting the value before rendering
             onUpdate: null, // callback method for every time the element is updated
             onComplete: null // callback method for when the element finishes updating
         };

         function formatter(value, settings) {
             return value.toFixed(settings.decimals);
         }
     }(jQuery));

     jQuery(function($) {
         // custom formatting example
         $('.count-number').data('countToOptions', {
             formatter: function(value, options) {
                 return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
             }
         });

         // start all the timers
         $('.timer').each(count);

         function count(options) {
             var $this = $(this);
             options = $.extend({}, options || {}, $this.data('countToOptions') || {});
             $this.countTo(options);
         }
     });


     //  single image slider
     {
         const sliders = document.querySelectorAll(".slider");
         // interval between switching images
         // can't be less than your animation duration in css!
         const interval = 50000;
         // if you don't want to first animation last longer than other animations  
         // set animDuration (in miliseconds) to your value of animation duration in css
         const animDuration = 600;

         for (let i = 0; i < sliders.length; ++i) {
             const slider = sliders[i];
             const dots = slider.querySelector(".dots");
             const sliderImgs = slider.querySelectorAll(".img");

             let currImg = 0;
             let prevImg = sliderImgs.length - 1;
             let intrvl;
             let timeout;

             // Creates dots and add listeners to them
             for (let i = 0; i < sliderImgs.length; ++i) {
                 const dot = document.createElement("div");
                 dot.classList.add("dot");
                 dots.appendChild(dot);
                 dot.addEventListener("click", dotClick.bind(null, i), false);
             }

             const allDots = dots.querySelectorAll(".dot");
             allDots[0].classList.add("active-dot");

             sliderImgs[0].style.left = "0";
             timeout = setTimeout(() => {
                 animateSlider();
                 sliderImgs[0].style.left = "";
                 intrvl = setInterval(animateSlider, interval);
             }, interval - animDuration);

             /**
              * Animates images
              * @param {number} [nextImg] - index of next image to show
              * @param {boolean} [right = false] - animate to right
              */
             function animateSlider(nextImg, right) {
                 if (!nextImg)
                     nextImg = currImg + 1 < sliderImgs.length ? currImg + 2 : 1;

                 --nextImg;
                 sliderImgs[prevImg].style.animationName = "";

                 if (!right) {
                     sliderImgs[nextImg].style.animationName = "leftNext";
                     sliderImgs[currImg].style.animationName = "leftCurr";
                 } else {
                     sliderImgs[nextImg].style.animationName = "rightNext";
                     sliderImgs[currImg].style.animationName = "rightCurr";
                 }

                 prevImg = currImg;
                 currImg = nextImg;

                 currDot = allDots[currImg];
                 currDot.classList.add("active-dot");
                 prevDot = allDots[prevImg];
                 prevDot.classList.remove("active-dot");
             }

             /**
              * Decides if animate to left or right and highlights clicked dot
              * @param {number} num - index of clicked dot
              */
             function dotClick(num) {
                 if (num == currImg)
                     return false;

                 clearTimeout(timeout);
                 clearInterval(intrvl);

                 if (num > currImg)
                     animateSlider(num + 1);
                 else
                     animateSlider(num + 1, true);

                 intrvl = setInterval(animateSlider, interval);
             }
         }
     }


     //  dashboard 

     $("#menu-toggle").click(function(e) {
         e.preventDefault();
         $("#wrapper").toggleClass("toggled");
     });


     //  new scroll back to top
     $(document).ready(function() {
         $(window).scroll(function() {
             if ($(this).scrollTop() > 50) {
                 $('#back-to-top').fadeIn();
             } else {
                 $('#back-to-top').fadeOut();
             }
         });
         // scroll body to 0px on click
         $('#back-to-top').click(function() {
             $('body,html').animate({
                 scrollTop: 0
             }, 400);
             return false;
         });
     });
 </script>


 </div>
 </body>


 </html>