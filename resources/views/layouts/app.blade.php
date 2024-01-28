<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- STYLES -->
    <link rel="shortcut icon" href="{{ asset('/media/images/logo/SHREE.svg') }}" type="image/x-icon">
    <link rel="mask-icon" type="image/x-icon" href="{{ asset('/media/images/logo/SHREE.svg') }}" color="#111">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://codepen.io/semen-balahonov/pen/WLjPxv">
    <link rel="canonical" href="https://codepen.io/supah/pen/rNKraQJ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="canonical" href="https://codepen.io/samsurysites/pen/PobRYb">
    <link rel="canonical" href="https://codepen.io/mcjbent/pen/xxwOeNx">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Nav/Nav.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Intro/Intro.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/hmeheader/hmeheader.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/3D/3D.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Studio/Studio.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Footer/Footer.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Card/Card.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Label/Label.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Contacts/Contacts.scss') }}">
    <link rel="stylesheet" href="{{ asset('/css/Beat/Beat.scss') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/j3.js') }}"></script>
    <script type="module" src="{{ asset('/js/app.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-486Y8DS628"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-486Y8DS628');
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>

<body translate="no" class="antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        @include('layouts.navigation')

        <!-- Page Content -->
        <main>

            @yield('content')
        </main>
        <style>
            @font-face {
                font-family: Chunky_italic;
                src: url(../media//fonts/Chunky_Funks_Italic.otf);
            }

            @font-face {
                font-family: Chunky;
                src: url(../media//fonts/Chunky_Funks.otf);
            }

            body {
                font-family: Chunky, sans-serif !important;
            }

            h1,
            h4,
            .button1,
            .button {
                font-family: Chunky_italic, sans-serif !important;
                font-weight: bold;
            }

            .affix {
                padding: 0;
                backdrop-filter: blur(20px);
                background-color: #111111ad;
                transition: all 0.4s ease;
            }

            .affix img {
                padding-top: 10px;
                width: 48px;
                height: 48px;

                background: transparent;
                transition: 0.4s;
            }


            .site-footer {
                background: linear-gradient(45deg, #000000 70%, #000);
                padding: 45px 0 20px;
                font-size: 15px;
                line-height: 24px;
                color: #737373;
            }

            .site-footer hr {
                border-top-color: #bbb;
                opacity: 0.5
            }

            .site-footer hr.small {
                margin: 20px 0
            }

            .site-footer h6 {
                color: #fff;
                font-size: 16px;
                text-transform: uppercase;
                margin-top: 5px;
                letter-spacing: 2px
            }

            .site-footer a {
                color: #e9e9e9;
                text-decoration: none;
                transition: .5s;
            }

            .site-footer a:hover {
                cursor: pointer;
                color: #FF8C00;
                text-decoration: none;
                transition: .5s;
            }

            .footer-links {
                padding-left: 0;
                list-style: none
            }

            .footer-links li {
                display: block
            }

            .footer-links a {
                color: #737373
            }

            .footer-links a:active,
            .footer-links a:focus,
            .footer-links a:hover {
                color: #FF8C00;
                text-decoration: none;
            }

            .footer-links.inline li {
                display: inline-block
            }

            .site-footer .social-icons {
                text-align: right
            }

            .site-footer .social-icons a {
                width: 40px;
                height: 40px;
                line-height: 40px;
                margin-left: 6px;
                margin-right: 0;
                border-radius: 100%;
                background-color: #33353d
            }

            .copyright-text {
                margin: 0
            }

            @media (max-width:991px) {
                .site-footer [class^=col-] {
                    margin-bottom: 30px
                }
            }

            @media (max-width:767px) {
                .site-footer {
                    padding-bottom: 0
                }

                .site-footer .copyright-text,
                .site-footer .social-icons {
                    text-align: center
                }
            }

            .social-icons {
                display: flex;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none
            }

            .social-icons li {
                display: flex;
                margin-bottom: 4px
            }

            .social-icons li.title {
                margin-right: 15px;
                text-transform: uppercase;
                color: #96a2b2;
                font-weight: 700;
                font-size: 13px
            }

            .social-icons a {
                background-color: #eceeef00;
                color: #818a91;
                font-size: 16px;
                display: inline-block;
                line-height: 44px;
                width: 44px;
                height: 44px;
                text-align: center;
                margin-right: 8px;
                border-radius: 100%;
                -webkit-transition: all .2s linear;
                -o-transition: all .2s linear;
                transition: all .2s linear
            }

            .social-icons a:active,
            .social-icons a:focus,
            .social-icons a:hover {
                color: #ffffff;
                background-color: #ffffff
            }

            .social-icons.size-sm a {
                line-height: 34px;
                height: 34px;
                width: 34px;
                font-size: 14px
            }

            .social-icons a.facebook:hover {
                background-color: #FF8C00
            }

            .social-icons a.twitter:hover {
                background-color: #FF8C00
            }

            .social-icons a.linkedin:hover {
                background-color: #FF8C00
            }

            .social-icons a.dribbble:hover {
                background-color: #FF8C00
            }

            .social-icons a.youtube:hover {
                background-color: #FF8C00
            }

            .social-icons a.instagram:hover {
                background-color: #FF8C00
            }

            .social-icons a.svg:hover {
                background-color: #FF8C00
            }

            .social-icons a.tiktok:hover {
                background-color: #FF8C00
            }

            .social-icons a.tiktok svg:hover {
                fill: #ffffff;
            }

            .social-icons a svg {
                fill: #ffffff;

            }

            .social-icons a svg path {
                fill: #ffffff;

            }

            .social-icons a.spotify:hover {
                background-color: #FF8C00
            }

            @media (max-width:767px) {
                .social-icons li.title {
                    display: block;
                    margin-right: 0;
                    font-weight: 600
                }
            }

            .site-footer .social-icons a {
                width: 40px;
                height: 40px;
                line-height: 40px;
                margin-left: 6px;
                margin-right: 0;
                border-radius: 100%;
                background-color: #000000;
            }

            .social-icons a {
                background-color: #ffffff00;
                color: #ffffff;
                font-size: 16px;
                display: inline-block;
                line-height: 44px;
                width: 44px;
                height: 44px;
                text-align: center;
                margin-right: 8px;
                border-radius: 100%;
                -webkit-transition: all .2s linear;
                -o-transition: all .2s linear;
                transition: all .2s linear;
            }
        </style>
        <footer class="site-footer">
            <div class="containerr">
                <div class=""style="display: flex; justify-content: flex-end;">
                    <div
                        style="margin-right: auto;
                            margin-left: 50px;
                            display: flex;
                            justify-content: flex-start;">
                        <a href="/">
                            <img src="{{ asset('/media/images/logo/SHREE.svg') }}" alt="" width="74px"
                                height="74px">
                        </a>
                    </div>

                    <div style="display: flex;">
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/studio">STUDIO</a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/services">SERVICES</a></h6>

                        </div>

                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/label">LABEL</a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href="/contact">CONTACT</a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href=""><button id="ru" class="translate"
                                        style="background: transparent; border: 0; cursor: pointer;"><img
                                            src="{{ asset('/media/images/image 12 (1).png') }}" width="40px"
                                            height="25px" alt=""></button></a></h6>

                        </div>
                        <div class="" style="display: flex; flex-direction: column; margin: 25px;">
                            <h6><a href=""><button id="en" class="translate"
                                        style="background: transparent; border: 0; cursor: pointer;"><img
                                            src="{{ asset('/media/images/image 13.png') }}" width="40px"
                                            height="25px" alt=""></button></a></h6>

                        </div>
                    </div>

                </div>

            </div>
            <div class="containerr" style=" margin: 25px;">
                <div class="" style=" display: flex; justify-content: space-between;">
                    <div class="" style="display: flex; flex-direction: column; ">
                        <p class="copyright-text">Copyright © 2017 All Rights Reserved by
                            <a href="#">Scanfcode</a>.
                        </p>
                    </div>

                    <div class="" style="display: flex; flex-direction: column;">
                        <ul class="social-icons">
                            @foreach ($socialNetworks as $item)
                                <li>
                                    <a class="{{ $item->name }}" href="#"
                                        style="display: flex; justify-content: center; align-items: center; text-decoration: none; cursor: pointer;">
                                        {!! $item->icon !!}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"
        integrity="sha512-K9tDZvc8nQXR1DMuT97sct9f40dilGp97vx7EXjswJA+/mKqJZ8vcZLifZDP+9t08osMLuiIjd4jZ0SM011Q+w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.vantajs.com/dist/vanta.fog.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.js"></script>
    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-6bce046e7128ddf9391ccf7acbecbf7ce0cbd7b6defbeb2e217a867f51485d25.js">
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-44fe83e49b63affec96918c9af88c0d80b209a862cf87ac46bc933074b8c557d.js">
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js">
    </script>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>

    <script id="rendered-js">
        var mainSwiper = new Swiper('.main-slider', {
            slidesPerView: 3,
            spaceBetween: 15,
            centeredSlides: false,
            nextButton: '.uploaded-in-next',
            prevButton: '.uploaded-in-prev'
        });
        var mainSecondSwiper = new Swiper('.block-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            nextButton: '.next-btn',
            prevButton: '.prev-btn'
        });
    </script>
    
          <script>
        let aaaddd = document.getElementById('aaaddd')
        let dodo = document.getElementById('dodo')
        let droooo = document.querySelectorAll('.app-app-app')

        aaaddd.onclick = function() {
          // document.getElementById("dodo").style.display = "block";
          document.getElementById("dodo").style.opacity = "1";
          document.getElementById("dodo").style.transform = "translate(0px, 0%)";
          // console.log('sss')
        }
      </script>

    <script>
        const animItems = document.querySelectorAll('._anim-items');

        if (animItems.length > 0) {
            window.addEventListener('scroll', animOnScroll);

            function animOnScroll() {
                for (let index = 0; index < animItems.length; index++) {
                    const animItem = animItems[index];
                    const animItemHeight = animItem.offsetHeight;
                    const animItemOffset = offset(animItem).top;
                    const animStart = 4;

                    let animItemPoint = window.innerHeight - animItemHeight / animStart;
                    if (animItemHeight > window.innerHeight) {
                        animItemPoint = window.innerHeight - window.innerHeight / animStart;
                    }

                    if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                        animItem.classList.add('_active');
                    } else {
                        if (!animItem.classList.contains('_anim-no-hide')) {
                            animItem.classList.remove('_active');
                        }

                    }
                }
            }

            function offset(el) {
                const rect = el.getBoundingClientRect(),
                    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                return {
                    top: rect.top + scrollTop,
                    left: rect.left + scrollLeft
                }
            }
            setTimeout(() => {
                animOnScroll();
            }, 300);


        }
    </script>
    <script id="rendered-js">
        //     function cursorParallax(items) {
        //         var req;
        //         var raf = window.requestAnimationFrame || window.webkitRequestAnimationFrame;
        //         var mouseX = 0;
        //         var mouseY = 0;
        //         var xPos = 0;
        //         var yPos = 0;
        //         var dX = 0;
        //         var dY = 0;
        //         var middle;

        //         const _resize = () => {
        //             middle = window.innerWidth / 2;
        //         };

        //         const setMousePosition = e => {
        //             mouseX = e.clientX - middle;
        //             mouseY = e.clientY - middle;
        //         };

        //         const animate = () => {
        //             dX = mouseX - xPos;
        //             dY = mouseY - yPos;
        //             xPos += dX / 10;
        //             yPos += dY / 10;
        //             for (let item of items) {
        //                 item.el.style.transform =
        //                     `rotate(0.0001deg) matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,${-xPos * item.speed},${-yPos * item.speed},0,1)`;
        //             }
        //             req = raf(animate);
        //         };

        //         document.addEventListener("mousemove", setMousePosition);
        //         window.addEventListener("resize", _resize);
        //         _resize();
        //         animate();
        //     }

        //     /*-- --*/
        //     cursorParallax([{
        //             el: document.querySelector(".img-0"),
        //             speed: .09
        //         },

        //         {
        //             el: document.querySelector(".img-1"),
        //             speed: .25
        //         },

        //         {
        //             el: document.querySelector(".img-2"),
        //             speed: .30
        //         },

        //         {
        //             el: document.querySelector(".img-3"),
        //             speed: .35
        //         }
        //     ]);
        //     //# sourceURL=pen.js
        // 
    </script>

    <script id="rendered-js">
        const items = document.querySelectorAll('.item');

        const expand = (item, i) => {
            items.forEach((it, ind) => {
                if (i === ind) return;
                it.clicked = false;
            });
            gsap.to(items, {
                width: item.clicked ? '15vw' : '8vw',
                duration: 2,
                ease: 'elastic(1, .6)'
            });


            item.clicked = !item.clicked;
            gsap.to(item, {
                width: item.clicked ? '42vw' : '15vw',
                duration: 2.5,
                ease: 'elastic(1, .3)'
            });

        };

        items.forEach((item, i) => {
            item.clicked = false;
            item.addEventListener('click', () => expand(item, i));
        });
        //# sourceURL=pen.js
    </script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            scale: 1.4,
            glare: true,
            reverse: true,
            "max-glare": 0.5

        });
        VanillaTilt.init(document.querySelectorAll(".card-1"), {
            scale: 1.4,
            glare: true,
            reverse: true,
            "max-glare": 0.5

        });
    </script>

    <script id="rendered-js">
        var mainSwiper = new Swiper('.main-slider', {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            nextButton: '.uploaded-in-next',
            prevButton: '.uploaded-in-prev'
        });


        var mainSecondSwiper = new Swiper('.block-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            nextButton: '.next-btn',
            prevButton: '.prev-btn'
        });
        //# sourceURL=pen.js
    </script>

    <script id="rendered-js">
        var mainSwiper = new Swiper('.main-slider3', {
            slidesPerView: 3,
            spaceBetween: 15,
            centeredSlides: false,
            nextButton: '.uploaded-in-next',
            prevButton: '.uploaded-in-prev'
        });


        var mainSecondSwiper = new Swiper('.block-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            nextButton: '.next-btn',
            prevButton: '.prev-btn'
        });
        //# sourceURL=pen.js
    </script>

    <script id="rendered-js">
        var mainSwiper = new Swiper('.main-slider2', {
            slidesPerView: 2,
            spaceBetween: 15,
            centeredSlides: false,
            nextButton: '.uploaded-in-next',
            prevButton: '.uploaded-in-prev'
        });


        var mainSecondSwiper = new Swiper('.block-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            nextButton: '.next-btn',
            prevButton: '.prev-btn'
        });
        //# sourceURL=pen.js
    </script>

    <script id="rendered-js">
        var mainSwiper = new Swiper('.main-slider1', {
            slidesPerView: 1,
            spaceBetween: 15,
            centeredSlides: false,
            nextButton: '.uploaded-in-next',
            prevButton: '.uploaded-in-prev'
        });


        var mainSecondSwiper = new Swiper('.block-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            nextButton: '.next-btn',
            prevButton: '.prev-btn'
        });
        //# sourceURL=pen.js
    </script>

    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheadera",
            mouseControls: true,
            touchControls: true,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0xff8a2b,
            midtoneColor: 0x9564ff,
            lowlightColor: 0xff780f,
            baseColor: 0xa06cff,
            speed: 1.60,
            zoom: 1
        })
    </script>

    <script id="rendered-js">
        VANTA.FOG({
            el: "#GB-hmeheader",
            mouseControls: true,
            touchControls: true,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0x0,
            midtoneColor: 0xFF7C13,
            lowlightColor: 0xFF7C13,
            baseColor: 0xFF7C13,
            speed: 1.60
        });

        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                // console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>


    <script>
        $('.zar').click(function() {
            $('#sing').toggle(({
                'transition': 'all .5s',
            }))
            $('#register').show(({
                'transition': 'all .5s',
            }))
            $('.avt').css({
                'color': 'white',
                'transition': 'all .5s',
            })
            $('.zar').css({
                'color': '#FF8C00',
                'transition': 'all .5s',
            })
        })
        $('.avt').click(function() {
            $('#sing').show(({
                'transition': 'all .5s',
            }))
            $('#register').toggle(({
                'transition': 'all .5s',
            }))
            $('.avt').css({
                'color': '#FF8C00',
                'transition': 'all .5s',
            })
            $('.zar').css({
                'color': 'white',
                'transition': 'all .5s',
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $("#menu").on("click", "a", function(event) {
                event.preventDefault();
                var id = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({
                    scrollTop: top
                }, 500);
            });
        });
    </script>

</body>

</html>
