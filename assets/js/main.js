(function($) {
    "use strict";
    $(window).on('load', function(event) {
        $('.js-preloader').delay(500).fadeOut(500);
    });
    $('.searchbtn').on('click', function() {
        $('.search-area').toggleClass('open');
    });
    $(".language-option").each(function() {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function() {
            allOptions.removeClass('selected');
            $(this).addClass('selected');
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })
    $('.user-option').on('click', function() {
        $('.user-menuitem').toggleClass('open');
    });
    $(window).scroll(function() {
        $('.progress-bar').each(function() {
            $(this).find('.progress-content').animate({
                width: $(this).attr('data-percentage')
            }, 2000);
            $(this).find('.progress-number-mark').animate({
                left: $(this).attr('data-percentage')
            }, {
                duration: 2000,
                step: function(now, fx) {
                    var data = Math.round(now);
                    $(this).find('.percent').html(data + '%');
                }
            });
        });
    });
    var hero_slider = new Swiper(".hero-slider-one", {
        spaceBetween: 0,
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        fadeEffect: {
            crossFade: true
        },
        autoplayDisableOnInteraction: true,
        effect: "fade",
        loop: true,
        speed: 1500,
        observer: true,
        observeParents: true,
        navigation: {
            nextEl: ".hero-slide-next",
            prevEl: ".hero-slide-prev"
        },
    });
    var service_slider_one = new Swiper(".service-slider-one", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        slidesPerView: 3,
        speed: 1500,
        freeMode: true,
        observer: true,
        observeParents: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".service-next",
            prevEl: ".service-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1.5,
                centeredSlides: true
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3
            }
        }
    });
    var service_slider = new Swiper(".partner-slider", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        speed: 1500,
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 6
            }
        }
    });
    $('.video-play').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        preloader: true,
    });
    var testimonial_slider_one = new Swiper(".testimonial-slider-one", {
        loop: true,
        spaceBetween: 0,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        slidesPerView: 3,
        speed: 1500,
        centeredSlides: true,
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3
            }
        }
    });
    var testimonial_slider_two = new Swiper(".testimonial-slider-two", {
        loop: true,
        autoplay:true,
        spaceBetween: 0,
        speed: 1500,
        centeredSlides: true,
        pagination: {
            el: ".testimonial-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1.5
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3
            }
        }
    });
    var blog_slider_one = new Swiper(".blog-slider-one", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        slidesPerView: 3,
        speed: 1500,
        navigation: {
            nextEl: ".blog-next",
            prevEl: ".blog-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1.5,
                centeredSlides: true
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 3
            }
        }
    });
    var single_portfolio_slider = new Swiper(".single-portfolio-slider", {
        loop: true,
        autoplay:true,
        spaceBetween: 0,
        speed: 1500,
        centeredSlides: true,
        pagination: {
            el: ".single-portfolio-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1.5
            },
            992: {
                slidesPerView: 2
            },
            1200: {
                slidesPerView: 2.5
            }
        }
    });
    $('.mobile-top-bar').on('click', function() {
        $('.header-top-right').addClass('open')
    });
    $('.close-header-top').on('click', function() {
        $('.header-top-right').removeClass('open')
    });
    var wind = $(window);
    var sticky = $('.header-wrap');
    wind.on('scroll', function() {
        var scroll = wind.scrollTop();
        if (scroll < 100) {
            sticky.removeClass('sticky');
        } else {
            sticky.addClass('sticky');
        }
    });
    $('.mobile-menu a').on('click', function() {
        $('.main-menu-wrap').addClass('open');
        $('.mobile-bar-wrap.style2 .mobile-menu').addClass('open');
    });
    $('.mobile_menu a').on('click', function() {
        $(this).parent().toggleClass('open');
        $('.main-menu-wrap').toggleClass('open');
    });
    $('.menu-close').on('click', function() {
        $('.main-menu-wrap').removeClass('open')
    });
    $('.mobile-top-bar').on('click', function() {
        $('.header-top').addClass('open')
    });
    $('.close-header-top button').on('click', function() {
        $('.header-top').removeClass('open')
    });
    var $offcanvasNav = $('.main-menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="las la-angle-down"></i></span>');
    $offcanvasNavSubMenu.slideUp();
    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if (($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.siblings('ul').slideUp('slow');
            } else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if ($this.is('a') || $this.is('span') || $this.attr('class').match(/\b(menu-expand)\b/)) {
            $this.parent().toggleClass('menu-open');
        } else if ($this.is('li') && $this.attr('class').match(/\b('has-children')\b/)) {
            $this.toggleClass('menu-open');
        }
    });
    AOS.init();
    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
})(jQuery);