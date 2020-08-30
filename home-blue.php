<?php
// $allnews = get_news();
// $itemc = "";
// $item = "";
// $itemb = "";
// $page = "";
// foreach ($allnews as $item) {
//     $news .= '
// <li class="row mx-0 mex-new-content swiper-slide" style="height: 133.75px;">
//                                             <div class="mex-h3 col-1 pl-4 text-left">2020-02-18</div>
//                                             <div class="mex-new-desc mex-content col-8"><a
//                                                     href="/article/news-detail.php?id=' . $item->id . '"
//                                                     class="text-222 mex-clamp-4 text-left pl-3">' . $item->title . '</a></div>
//                                             <div class="mex-new-img col-3"><img class="mex-img-cover lazyloadXXX"
//                                                     src="' . $item->post_image . '"
//                                                     alt="' . $item->main_title . '">
//                                             </div>
//                                         </li>
// ';
// }
?>
<!DOCTYPE html>
<html lang='en'>
<?php include_from_root('website_template/head.php'); ?>

<body>
    <?php include_from_root('website_template/header_and_menu.php'); ?>
    <style>
        .nav-item:hover .nav-menu.py-3 {
            display: block !important;
        }

        .slidebar .get-a-all-btn.call-btn .btn,
        .slidebar .live-account-btn.whatsapp-btn .btn,
        .slidebar .email-us-tg.email-btn .btn,
        .slidebar .ib-registration-btn.chat-btn .btn {
            background: none;
            width: auto;
            height: auto;
            padding: 0;
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            .live-account-wrapper {
                display: flex;
            }
        }

        @media (max-width: 767px) {
            .card-content-mobile .mex-h3 {
                line-height: 1 !important;
                white-space: normal;
                color: white;
                font-size: 14px !important;
                font-family: oswald, Helvetica, Arial, sans-serif;
                text-overflow: ellipsis;
                font-weight: 600;
            }

            .card-content-mobile {
                background-color: #1e32a3 !important;
                position: absolute;
                bottom: 0;
                color: #fff;
                width: 100%;
                text-align: center;
            }

            section.mex-block-card-v.mex-qtr .card-img-box {
                max-height: 205px;
                overflow: hidden;
                background-color: #FFF;
                width: 100%;
                margin: 0;
                padding: 0;
            }

            section.mex-block-card-v.mex-qtr .card-img {
                vertical-align: middle;
                object-fit: cover;
                width: 100%;
                height: 110px;
            }

            section.mex-block-card-v.mex-qtr .card-content {
                padding: 5px;
            }
        }

        .nav-menu-hamburger,
        .nav-menu-mymex {
            width: 35px;
            height: 35px;

            display: flex;
            justify-content: center;
            align-items: center;

            margin: 5px 10px 5px 5px;

            background-color: #000333;
            border-radius: 6px;
        }

        .nav-menu-hamburger .ti-menu {
            transform: translateY(-1px);
        }

        .nav-menu-mymex {
            margin: 5px;
        }

        .nav-menu-mymex img {
            width: 25px;
            height: auto;
        }

        @media screen and (max-width: 1199px) {
            .header-bottom-left-container {
                line-height: inital !important;

                display: flex;
                align-items: center;
            }

            .header-boottom-logo {
                height: auto;
            }

            .header-bottom-left-container a {
                display: flex;
                align-items: center;
            }

            .header-bottom-left-container .header-logo {
                height: 30px;
                padding-left: 15px;
            }
        }
    </style>

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div>
        <div style="background: url(/public_files/images/common/bg_video.jpg);
                    background-size: cover;
                    background-repeat: no-repeat;">
            <video class="embed-responsive-item d-md-block d-none" playsinline="" autoplay="" muted="" loop="true" style="position: absolute;z-index: 0; left: 0; filter:brightness(0.6); width:100%">
                <source src="/public_files/videos/social_trading/vdo-mb-blue-old.mp4" type="video/mp4">
            </video>
        </div>
        <div class="swiper-container" id="swiper-container-lp">
            <div class="swiper-wrapper">
                <div class="swiper-slide home-page" style="overflow: hidden;">
                    <div class="min1 d-none d-md-block" style="background:url('/public_files/images/home/home-banner-multibank-industry-leader-02.jp')">
                        <!-- <div id="player" style="pointer-events: none;"></div> -->
                        <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/457QPGzux9M?rel=0?version=3&amp;autoplay=1&amp;controls=0&amp;&amp;showinfo=0&amp;loop=1&amp;modestbranding=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="row flex-nowrap flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                            <div class="col-12 flex-none d-flex justify-content-center flex-column">
                                <span class="home-banner-title1">WORLD'S NO.1 <span style="color:#BB914A">FOREX</span> & <span style="color:#BB914A">CFD</span> BROKER</span>
                                <span class="home-banner-title2">Established In 2005</span>
                            </div>
                            <div class="col-12 d-flex flex-none justify-content-center demo-btn-custom ">
                                <div class="row justify-content-center align-items-center flex-column flex-md-row button-action" style="height:100%">
                                    <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase"><span>CLAIM YOUR FREE $100</span><span class="banner-btn">Click Here To Open A Live Account</span></a>
                                    <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase"><span>TRY DEMO TRADING</span><span class="banner-btn">$100K Virtual Balance, Real Conditions</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-1.jp'); width:100%;height:100%">
                        <img src="/public_files/images/home/mobile-banner-2.jpg" style="width:100%;height:100%" />
                        <div class="row flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                            <div class="col-12 d-flex justify-content-center flex-column">
                                <span class="home-banner-title1">WORLD'S NO.1 <span style="color:#BB914A">FOREX</span> & <span style="color:#BB914A">CFD</span> BROKER</span>
                                <span class="home-banner-title2">Established In 2005</span>
                            </div>
                            <div class="col-12 d-flex flex-none justify-content-center demo-btn-custom ">
                                <div class="row justify-content-center align-items-center flex-column flex-md-row button-action" style="height:100%">
                                    <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">CLAIM YOUR FREE $100<br><span class="banner-btn">Click Here To Open A Live Account</span></a>
                                    <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">TRY DEMO TRADING<br><span class="banner-btn">$100K Virtual Balance, Real Conditions</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide home-page" style="overflow: hidden;">
                    <div class="min1 d-none d-md-block" style="background-image:url('/public_files/images/home/20-bonusbanner.jp'); width:100%">
                        <div class="row flex-nowrap flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                            <div class="col-12 d-flex justify-content-center flex-column">
                                <span class="home-banner-title1 text-uppercase"><span style="color:#BB914A">20% BONUS</span> ON DEPOSIT </span>
                                <span class="home-banner-title2">Both Tradable & Withdrawable</span>
                            </div>
                            <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                                <div class="row justify-content-center align-items-center flex-column flex-md-row button-action" style="height:100%">
                                    <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase claim-bonus">Claim Bonus<br><span class="banner-btn">For MT4 & MT5 Platforms</span></a>
                                    <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">TRY DEMO Trading<br><span class="banner-btn">$100K Virtual Balance, Real Conditions</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-2.jp');width:100%;height:100%">
                        <img src="/public_files/images/home/20-bonusbanner-1258x1920.jpg" style="width:100%;height:100%" />
                        <div class="row justify-content-center align-items-center slider-content swiper-zoom-container">
                            <div class="col-12 d-flex justify-content-center flex-column">
                                <span class="home-banner-title1 text-uppercase"><span style="color:#BB914A">20% BONUS</span> ON DEPOSIT</span>
                                <span class="home-banner-title2">Both Tradable And withdrawable</span>
                            </div>
                            <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                                <div class="row justify-content-center align-items-center flex-column flex-md-row button-action" style="height:100%">
                                    <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase claim-bonus">Claim Bonus<br><span class="banner-btn">For MT4 & MT5 Platforms</span></a>
                                    <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Learn More<br><span class="banner-btn">Everything You Need To Know</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <div class="swiper-slide home-page" style="overflow: hidden;">
                <div class="min1 d-none d-md-block" style="background-image:url('/public_files/images/home/banner-01.jpg'); width:100%">
                    <div class="row flex-nowrap flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                        <div class="col-12 d-flex justify-content-center flex-column">
                            <span class="home-banner-title1">MULTIBANK OFFERS MT5 PLATFORM</span>
                            <span class="home-banner-title2">Improved trading functionalities</span>
                        </div>
                        <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                            <div class="row justify-content-center align-items-center flex-column flex-md-row " style="height:100%">
                                <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">Live Trading</a>
                                <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-3.jpg');">
                    <img src="/public_files/images/home/mobile-banner-3.jpg" />
                    <div class="row justify-content-center align-items-center slider-content">
                        <div class="col-12 d-flex justify-content-center flex-column">
                            <span class="home-banner-title1">MULTIBANK OFFERS MT5 PLATFORM</span>
                            <span class="home-banner-title2">Improved trading functionalities</span>
                        </div>
                        <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                            <div class="row justify-content-center align-items-center flex-column flex-md-row " style="height:100%">
                                <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">Live Trading</a>
                                <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Simulated Trading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
            <!-- <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets"></div> -->
            <!-- <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div> -->

        </div>
    </div>
    <!-- <div class="main-banner d-block d-md-none">
        <div id="home-carousal-banner" style="height: 150px;">
            <div class="slide-slick">
                <h4 class="text-uppercase">Paid Capital</h4><span class="span-hero">$320m</span>
            </div>
            <div class="slide-slick">
                <h4 class="text-uppercase">Leverage Up To</h4><span class="span-hero">500:1</span>
            </div>
            <div class="slide-slick">
                <h4 class="text-uppercase">Tight Spreads</h4><span class="span-hero">0.0 pips</span>
            </div>
            <div class="slide-slick">
                <h4 class="text-uppercase">Global Awards </h4><span class="span-hero">40+</span>
            </div>
            <div class="slide-slick">
                <h4 class="text-uppercase">Instruments</h4><span class="span-hero">1000+</span>
            </div>
        </div>
    </div> -->
    <style>
        .bmw {
            background-position: left !important;
        }

        @media (max-width: 1440px) and (min-width: 992px) {
            .bmw {
                width: 1500px !important;
            }

        }

        @media (max-width: 1280px) and (min-width: 992px) {
            .bmw {
                width: 1280px !important;
            }

        }

        @media (max-width: 1100px) and (min-width: 992px) {
            .bmw {
                width: 1200px !important;
            }

        }

        @media (max-width: 1024px) and (min-width: 992px) {
            .bmw {
                width: 1100px !important;
            }

        }


        .bmw-furious {
            background-position: left !important;
        }

        @media (max-width: 1440px) and (min-width: 992px) {
            .bmw-furious {
                width: 1440px !important;
            }

        }

        @media (max-width: 1407px) and (min-width: 992px) {
            .bmw-furious {
                width: 1407px !important;
            }
        }

        @media (max-width: 1280px) and (min-width: 992px) {
            .bmw-furious {
                width: 1280px !important;
            }

        }

        @media (max-width: 1250px) and (min-width: 992px) {
            .bmw-furious {
                width: 1250px !important;
            }

        }

        @media (max-width: 1150px) and (min-width: 992px) {
            .bmw-furious {
                width: 1150px !important;
            }

        }


        @media (max-width: 1024px) and (min-width: 992px) {
            .bmw-furious {
                width: 1100px !important;
            }

        }
    </style>
 <div id="section05" class="demo d-block d-sm-none">
        <a href="#products"><span></span></a>
    </div>
    <div id="products" class="container-fluid hero-container d-md-flex">
        <div class="container pl-0 pl-lg-auto">
            <div class="row hero-box " id="home-carousal-banner-1">
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Paid Capital</h4><span class="span-hero">$320m</span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Leverage Up To</h4><span class="span-hero">500:1</span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Tight Spreads</h4><span class="span-hero">0.0 pips</span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Global Awards </h4><span class="span-hero">40+</span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Trading Instruments</h4><span class="span-hero">1000+</span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Rating</h4><span class="span-hero">BBB+</span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Offices Worldwide </h4><span class="span-hero">25 </span>
                </div>
                <div class="slide-slick-1">
                    <h4 class="h4-hero-box">Countries</h4><span class="span-hero">90+</span>
                </div>
            </div>
        </div>
    </div>

   
    <section id="" class="our-product p-auto p-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-center text-uppercase h2-product mb-3 text-1e32a3 ">OUR PRODUCTS</h2>
                </div>
            </div>
            <div class="row cards-product">
                <div class="col-lg-4 col-sm-6 col-12 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">

                            <!-- <svg>
                                <g class="svg-inner" data-name="Group 7" transform="translate(17.723 33.89)">
                                    <path id="Path_9" data-name="Path 9" class="cls-1" d="M158.789,164.895q3.486-4.79,15.3-4.792l12.243-.054V166.7H173.4q-5.056.1-7.424,2.182t-2.635,7.186l23-.055v6.6h-23v15.648H155.3V180.7Q155.3,169.683,158.789,164.895Z" transform="translate(-155.302 -160.049)" />
                                    <path id="Path_10" data-name="Path 10" class="cls-1" d="M198.519,160.049h9.368l7.88,12.085,7.824-12.085h9.263l-12.3,18.578,13.2,19.642h-9.633l-8.039-13.308-8.517,13.308h-9.475L211.4,179.162Z" transform="translate(-163.202 -160.049)" />
                                </g>
                                <g class="svg-outer" data-name="Ellipse 39" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-forex.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">Forex</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right ">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <path class="svg-inner" data-name="Path 5" class="cls-1" d="M533.323,175.066a3.272,3.272,0,0,1-2.872,1.8H504.756a3.279,3.279,0,0,1-2.869-1.8,3.846,3.846,0,0,1,0-3.59l6.424-12.051a3.267,3.267,0,0,1,2.871-1.793h12.842a3.273,3.273,0,0,1,2.873,1.793l6.424,12.051A3.832,3.832,0,0,1,533.323,175.066Zm6.936-16.258-1.146,5.374-5.379,1.146,5.379,1.143,1.146,5.373,1.147-5.373,5.381-1.143-5.381-1.146Zm-41.7-6.273-1.146,5.372-5.381,1.149,5.381,1.142,1.146,5.375L499.7,160.2l5.379-1.142-5.379-1.149Zm27.381-8.529-1.147,5.374-5.379,1.146,5.379,1.144,1.147,5.377,1.145-5.377,5.379-1.142-5.379-1.146Z" transform="translate(-466.091 -123.197)" />
                                <path class="svg-inner" data-name="Path 6" class="cls-1" d="M512.335,201.537l-6.422-12.051a3.272,3.272,0,0,0-2.87-1.793H490.2a3.27,3.27,0,0,0-2.87,1.793l-6.424,12.051a3.841,3.841,0,0,0,0,3.59,3.274,3.274,0,0,0,2.871,1.8h25.689a3.278,3.278,0,0,0,2.87-1.8A3.851,3.851,0,0,0,512.335,201.537Z" transform="translate(-463.954 -131.263)" />
                                <path class="svg-inner" data-name="Path 7" class="cls-1" d="M558.573,201.537l-6.424-12.051a3.271,3.271,0,0,0-2.869-1.793H536.436a3.276,3.276,0,0,0-2.871,1.793l-6.421,12.051a3.85,3.85,0,0,0,0,3.59,3.273,3.273,0,0,0,2.869,1.8H555.7a3.28,3.28,0,0,0,2.873-1.8A3.843,3.843,0,0,0,558.573,201.537Z" transform="translate(-472.49 -131.263)" />
                                <g class="svg-outer" data-name="Ellipse 38" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-metals.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">METALS</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <path class="svg-inner" data-name="Path 12" class="cls-1" d="M818.977,212.4c-.707,0-1.427-.013-2.147-.036v3.185h8.648v-3.469C823.384,212.278,821.225,212.4,818.977,212.4Z" transform="translate(-791.158 -135.764)" />
                                <path class="svg-inner" data-name="Path 13" class="cls-1" d="M861.6,144.016l-13.878,18.251h7.287c-.23,10.3-18.855,29.851-38.144,30.788l-.047,3.557c31.18.984,47.994-19.4,51.251-34.345h7.4Z" transform="translate(-791.155 -123.199)" />
                                <path class="svg-inner" data-name="Path 14" class="cls-1" d="M829.462,211.479v3.639h8.65V209.76A59.481,59.481,0,0,1,829.462,211.479Z" transform="translate(-793.49 -135.337)" />
                                <path class="svg-inner" data-name="Path 15" class="cls-1" d="M842.093,208.372v5.838h8.647v-9.367A53.608,53.608,0,0,1,842.093,208.372Z" transform="translate(-795.821 -134.429)" />
                                <path class="svg-inner" data-name="Path 16" class="cls-1" d="M854.724,202.381v10.248h8.65V196.277A51.218,51.218,0,0,1,854.724,202.381Z" transform="translate(-798.153 -132.847)" />
                                <path class="svg-inner" data-name="Path 17" class="cls-1" d="M867.357,191.949V209.81h8.649v-28.8A49.516,49.516,0,0,1,867.357,191.949Z" transform="translate(-800.486 -130.029)" />
                                <g class="svg-outer" data-name="Ellipse 46" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-shares.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">SHARES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <g class="svg-inner" data-name="Group 39" transform="translate(33.408 24.657)">
                                    <path class="Path_65" data-name="Path 65" class="cls-1" d="M218.118,478.967a1.792,1.792,0,0,1-1.791,1.791h-35.6a1.792,1.792,0,0,1-1.791-1.791h0a1.792,1.792,0,0,1,1.791-1.792h35.6a1.792,1.792,0,0,1,1.791,1.792Z" transform="translate(-178.935 -477.175)" />
                                    <path class="Path_66" data-name="Path 66" class="cls-1" d="M218.118,532.178a1.792,1.792,0,0,1-1.791,1.792h-35.6a1.792,1.792,0,0,1-1.791-1.792h0a1.791,1.791,0,0,1,1.791-1.791h35.6a1.791,1.791,0,0,1,1.791,1.791Z" transform="translate(-178.935 -477.285)" />
                                    <path class="Path_67" data-name="Path 67" class="cls-1" d="M181.328,481.852V529.4h34.406V481.852Zm17.2,35.861a11.378,11.378,0,1,1,11.378-11.378A11.377,11.377,0,0,1,198.531,517.713Z" transform="translate(-178.94 -477.185)" />
                                    <path class="Path_68" data-name="Path 68" class="cls-1" d="M202.37,505.713h.039l-3.882-6.511-3.823,6.511h.04a4.62,4.62,0,0,0-1.175,3.047,4.992,4.992,0,0,0,9.974,0A4.624,4.624,0,0,0,202.37,505.713Z" transform="translate(-178.965 -477.221)" />
                                    <path class="Path_69" data-name="Path 69" class="cls-1" d="M217.574,486.811c0,1.232-1.646,2.231-3.674,2.231H183.156c-2.03,0-3.675-1-3.675-2.231h0c0-1.231,1.646-2.23,3.675-2.23H213.9c2.029,0,3.674,1,3.674,2.23Z" transform="translate(-178.936 -477.19)" />
                                    <path class="Path_70" data-name="Path 70" class="cls-1" d="M217.573,525.482c0,1.231-1.646,2.23-3.674,2.23H183.155c-2.03,0-3.675-1-3.675-2.23h0c0-1.232,1.646-2.23,3.675-2.23H213.9c2.029,0,3.674,1,3.674,2.23Z" transform="translate(-178.936 -477.27)" />
                                    <path class="Path_71" data-name="Path 71" class="cls-1" d="M187.172,505.932h-6.849c-.466,0-.842.684-.842,1.527s.376,1.528.842,1.528h7.136a11.357,11.357,0,0,1-.31-2.6C187.149,506.231,187.166,506.083,187.172,505.932Z" transform="translate(-178.936 -477.235)" />
                                    <path class="Path_72" data-name="Path 72" class="cls-1" d="M216.794,505.932h-6.849c.006.151.023.3.023.452a11.356,11.356,0,0,1-.31,2.6h7.136c.466,0,.842-.684.842-1.528S217.26,505.932,216.794,505.932Z" transform="translate(-178.999 -477.235)" />
                                </g>
                                <g class="svg-outer" data-name="Ellipse 40" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-commodities.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">COMMODITIES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <path class="svg-inner" data-name="Path 19" class="cls-1" d="M1173.7,200.573a9.517,9.517,0,0,1-1.955,1.112c-.647.075-1.3.123-1.956.147V190.5c1.257.017,2.515.09,3.769.191a13.861,13.861,0,0,1,.776-1.775c-1.511-.152-3.031-.254-4.545-.284V177.42h12.766a41.878,41.878,0,0,1-.342,4.753,14.218,14.218,0,0,1,1.931-.514c.161-1.421.272-2.846.294-4.278v.039h9.8a25.206,25.206,0,0,1-.875,5.657,14.087,14.087,0,0,1,4.682,4.085A31.09,31.09,0,0,0,1158.9,147a11.324,11.324,0,0,1,3.343,6.835,10.96,10.96,0,0,1,3.713-2.623c.647-.073,1.3-.123,1.96-.147v11.329a55.415,55.415,0,0,1-7.751-.645,11.843,11.843,0,0,1-1.383,1.581,56.85,56.85,0,0,0,9.134.933v11.213h-12.771a43.481,43.481,0,0,1,1.437-10.5,11.419,11.419,0,0,1-2.131.949,44.882,44.882,0,0,0-1.189,9.595v-.039h-9.8a25.3,25.3,0,0,1,2.559-10.147,11.431,11.431,0,0,1-4.437-3.815,31.09,31.09,0,0,0,36.2,44.71,14.166,14.166,0,0,1-4.09-5.65m20.534-25.023h-9.8a44.674,44.674,0,0,0-2.056-12.833,41.673,41.673,0,0,0,6.314-2.108,25.258,25.258,0,0,1,5.537,14.94m-6.854-16.463a41,41,0,0,1-5.619,1.824,23.463,23.463,0,0,0-5.419-8.744,25.457,25.457,0,0,1,11.038,6.92m-17.591-8.023c.658.024,1.308.073,1.956.147,3.36,1.361,6.266,5.031,8.222,10.1a55.279,55.279,0,0,1-10.177,1.084Zm0,13.2a57.147,57.147,0,0,0,10.8-1.17,43.263,43.263,0,0,1,1.968,12.458h-12.766Zm-26.322,13.057,9.8.027a44.829,44.829,0,0,0,2.056,12.807,42.042,42.042,0,0,0-6.327,2.114,25.283,25.283,0,0,1-5.523-14.948m6.8,16.432a40.5,40.5,0,0,1,5.662-1.841,23.432,23.432,0,0,0,5.431,8.818,25.421,25.421,0,0,1-11.093-6.977m17.646,8.08q-.986-.035-1.953-.145c-3.363-1.362-6.265-5.031-8.226-10.1a55.378,55.378,0,0,1,10.178-1.085Zm0-13.273a57.473,57.473,0,0,0-10.8,1.169,43.58,43.58,0,0,1-1.967-12.347v-.036h12.771Z" transform="translate(-1115.848 -123.448)" />
                                <path class="svg-inner" data-name="Path 20" class="cls-1" d="M1194.58,191.157a12.415,12.415,0,1,0,12.413,12.416,12.417,12.417,0,0,0-12.413-12.416m3.387,17.209a3.953,3.953,0,0,1-2.648,1.21v1.756h-1.468v-1.747a3.849,3.849,0,0,1-3.574-3.354l2.272-.592a1.977,1.977,0,0,0,2.092,1.919,1.623,1.623,0,0,0,1.22-.408,1.394,1.394,0,0,0,.393-.994,1.085,1.085,0,0,0-.393-.911,6.976,6.976,0,0,0-1.739-.79,10.058,10.058,0,0,1-1.89-.833,3.114,3.114,0,0,1-1.11-1.147,3.41,3.41,0,0,1-.427-1.725,3.832,3.832,0,0,1,.762-2.32,3.4,3.4,0,0,1,2.393-1.261v-1.358h1.468v1.358a3.552,3.552,0,0,1,3.191,2.788l-2.025.829c-.4-1.138-1-1.708-1.831-1.708a1.334,1.334,0,0,0-1,.382,1.276,1.276,0,0,0-.375.925,1.041,1.041,0,0,0,.36.854,6.254,6.254,0,0,0,1.556.731,13.606,13.606,0,0,1,2.055.905,3.235,3.235,0,0,1,1.192,1.173,3.386,3.386,0,0,1,.441,1.752,3.7,3.7,0,0,1-.915,2.564" transform="translate(-1124.045 -131.902)" />
                                <path class="svg-inner" data-name="Path 21" class="cls-1" d="M1151.939,145.362a9.749,9.749,0,1,0,9.749,9.75,9.751,9.751,0,0,0-9.749-9.75m2.658,13.516a3.1,3.1,0,0,1-2.077.947v1.381h-1.159v-1.371a3.029,3.029,0,0,1-2.8-2.633l1.786-.468a1.554,1.554,0,0,0,1.644,1.51,1.27,1.27,0,0,0,.961-.324,1.079,1.079,0,0,0,.3-.779.852.852,0,0,0-.3-.715,5.546,5.546,0,0,0-1.365-.62,8.046,8.046,0,0,1-1.489-.652,2.437,2.437,0,0,1-.868-.9,2.623,2.623,0,0,1-.335-1.355,3.006,3.006,0,0,1,.6-1.824,2.668,2.668,0,0,1,1.876-.987v-1.065h1.159v1.065a2.8,2.8,0,0,1,2.5,2.19l-1.588.652c-.313-.9-.8-1.345-1.442-1.345a1.049,1.049,0,0,0-.784.3.992.992,0,0,0-.3.726.815.815,0,0,0,.286.669,5.11,5.11,0,0,0,1.221.576,11.132,11.132,0,0,1,1.614.709,2.5,2.5,0,0,1,.93.923,2.621,2.621,0,0,1,.35,1.373,2.923,2.923,0,0,1-.718,2.017" transform="translate(-1116.664 -123.448)" />
                                <g class="svg-outer" data-name="Ellipse 43" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-indices.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">INDICES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <path class="svg-inner" data-name="Path 663" class="cls-1" d="M1175.081,833.033v-5.827a1.579,1.579,0,1,0-3.158,0v5.827a6.387,6.387,0,1,0,3.158,0Zm1.662,6.191a3.241,3.241,0,1,1-3.241-3.238A3.244,3.244,0,0,1,1176.743,839.224Z" transform="translate(-1120.087 -754.435)" />
                                <path class="svg-inner" data-name="Path 664" class="cls-1" d="M1204.029,819.78a6.249,6.249,0,0,0-3.26.9l-4.121-4.122a1.577,1.577,0,0,0-2.223,0,1.581,1.581,0,0,0,0,2.227l4.124,4.124a6.375,6.375,0,1,0,5.48-3.127Zm2.292,8.688a3.234,3.234,0,0,1-5.524-2.285,3.191,3.191,0,0,1,.945-2.281,3.225,3.225,0,0,1,2.34-.95,3.1,3.1,0,0,1,2.235.931l0,0A3.258,3.258,0,0,1,1206.321,828.468Z" transform="translate(-1128.656 -751.395)" />
                                <path class="svg-inner" data-name="Path 665" class="cls-1" d="M1195.426,774.994a1.557,1.557,0,0,0,2.223,0l4.123-4.125a6.381,6.381,0,1,0-3.126-5.482,6.231,6.231,0,0,0,.9,3.261l-4.12,4.121a1.579,1.579,0,0,0,0,2.225Zm6.374-9.623a3.186,3.186,0,0,1,.953-2.273h0a3.242,3.242,0,0,1,4.584,0,3.261,3.261,0,0,1,0,4.581,3.246,3.246,0,0,1-5.538-2.306Z" transform="translate(-1128.976 -733.173)" />
                                <path class="svg-inner" data-name="Path 666" class="cls-1" d="M1150.859,817.556a1.579,1.579,0,0,0-2.226,0l-4.124,4.124a6.379,6.379,0,1,0,3.126,5.484,6.215,6.215,0,0,0-.9-3.26l4.125-4.121a1.582,1.582,0,0,0,0-2.226Zm-11.911,7.318a3.24,3.24,0,1,1,4.584,4.58h0a3.24,3.24,0,1,1-4.583-4.582Z" transform="translate(-1109.795 -751.714)" />
                                <path class="svg-inner" data-name="Path 667" class="cls-1" d="M1174.23,789.674h-3.809a1.364,1.364,0,1,1,0-2.728h6.708a2.81,2.81,0,0,0,0-5.619h-2.01v-1.185a2.81,2.81,0,0,0-5.62,0v1.244a6.983,6.983,0,0,0,.906,13.907h3.807a1.365,1.365,0,1,1,0,2.73h-6.839a2.81,2.81,0,0,0,0,5.62h2.126v1.232a2.81,2.81,0,0,0,5.62,0v-1.29a6.985,6.985,0,0,0-.889-13.911Z" transform="translate(-1118.907 -739.024)" />
                                <path class="svg-inner" data-name="Path 668" class="cls-1" d="M1171.923,755.862v5.825a1.579,1.579,0,1,0,3.158,0v-5.825a6.386,6.386,0,1,0-3.158,0Zm-1.662-6.193a3.241,3.241,0,1,1,3.242,3.24A3.243,3.243,0,0,1,1170.261,749.669Z" transform="translate(-1120.087 -728.158)" />
                                <path class="svg-inner" data-name="Path 669" class="cls-1" d="M1216.091,790.254a6.417,6.417,0,0,0-6.194,4.8h-5.826a1.58,1.58,0,1,0,0,3.16h5.826a6.387,6.387,0,1,0,6.194-7.964Zm3.238,6.384a3.24,3.24,0,1,1-3.238-3.239A3.243,3.243,0,0,1,1219.329,796.638Z" transform="translate(-1131.376 -743.148)" />
                                <path class="svg-inner" data-name="Path 670" class="cls-1" d="M1132.725,798.218h5.829a1.58,1.58,0,1,0,0-3.16h-5.829a6.383,6.383,0,1,0,0,3.16Zm-2.95-1.58a3.24,3.24,0,1,1-3.241-3.239A3.244,3.244,0,0,1,1129.775,796.638Z" transform="translate(-1105.098 -743.148)" />
                                <path class="svg-inner" data-name="Path 671" class="cls-1" d="M1139.232,770.75a6.237,6.237,0,0,0,3.261-.9l4.119,4.12a1.574,1.574,0,1,0,2.228-2.223l-4.114-4.11a6.4,6.4,0,1,0-5.494,3.111Zm-2.277-8.675a3.235,3.235,0,1,1,2.283,5.517,3.1,3.1,0,0,1-2.28-.931l0,0A3.258,3.258,0,0,1,1136.954,762.075Z" transform="translate(-1109.15 -732.848)" />
                                <g class="svg-outer" data-name="Ellipse 45" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-social-trading.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">SOCIAL TRADING</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <g class="svg-inner" data-name="Group 3518" transform="translate(24.088 26.014)">
                                    <path id="Path_1073" data-name="Path 1073" class="cls-1" d="M547.536,467.253a4.322,4.322,0,0,1,2.444.828c9.356,6.345-13.644,18.121-13.644,18.121s4.454-18.948,11.2-18.949m0-1.312v0h0c-3.38,0-6.524,3.461-9.343,10.286a71,71,0,0,0-3.135,9.675,1.312,1.312,0,0,0,1.875,1.468c1.653-.846,16.163-8.468,16.587-15.366.083-1.36-.335-3.333-2.8-5.008a5.631,5.631,0,0,0-3.18-1.054Z" transform="translate(-498.329 -465.941)" />
                                    <g id="Group_3517" data-name="Group 3517" transform="translate(0 13.176)">
                                        <path id="Path_1074" data-name="Path 1074" class="cls-1" d="M518.974,520.271l-21.909,14.084c-.927.6-2.314.091-3.1-1.128l-9.709-15.1-2.369,1.524c-.913.587-1.018,2.051-.234,3.27l10.222,15.9c.784,1.219,2.159,1.731,3.071,1.145l21.575-13.869a1.646,1.646,0,0,0,.691-1.015l1.868-4.9C519.046,520.213,519.013,520.246,518.974,520.271Z" transform="translate(-481.129 -495.77)" />
                                        <g id="Group_3516" data-name="Group 3516" transform="translate(2.971)">
                                            <path id="Path_1075" data-name="Path 1075" class="cls-1" d="M519.34,488.431c.227-.758.494-1.605.8-2.506l-10.832-.618h0a1.656,1.656,0,0,0-1.127.232l-21.909,14.084c-.927.6-1.043,2.067-.26,3.287l10.222,15.9c.784,1.219,2.171,1.724,3.1,1.128l21.909-14.084a1.681,1.681,0,0,0,.707-1.025L527.7,490.08a3.074,3.074,0,0,0-2.484-3.865l-1.912-.109c-.362,1.025-.686,2.025-.969,2.959a4.017,4.017,0,1,1-2.994-.634" transform="translate(-485.493 -485.293)" />
                                            <path id="Path_1076" data-name="Path 1076" class="cls-1" d="M535.207,489.9h0" transform="translate(-501.358 -486.764)" />
                                            <path id="Path_1077" data-name="Path 1077" class="cls-1" d="M535.208,489.9" transform="translate(-501.359 -486.764)" />
                                            <line id="Line_40" data-name="Line 40" class="cls-1" transform="translate(37.812 0.813)" />
                                            <line id="Line_41" data-name="Line 41" class="cls-1" transform="translate(34.646 0.632)" />
                                            <line id="Line_42" data-name="Line 42" class="cls-1" transform="translate(36.843 3.772)" />
                                        </g>
                                    </g>
                                </g>
                                <g class="svg-outer" data-name="Ellipse 41" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-white-label.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">WHITE LABEL</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <g class="svg-inner" data-name="Group 3520" transform="translate(22.045 22.378)">
                                    <path id="Path_1078" data-name="Path 1078" class="cls-1" d="M823.892,490.257h-7.923a1.212,1.212,0,0,0,0,2.423h.489v18.233H823.4V492.68h.492a1.212,1.212,0,0,0,0-2.423Z" transform="translate(-808.032 -470.065)" />
                                    <path id="Path_1079" data-name="Path 1079" class="cls-1" d="M852.461,490.257h-7.926a1.212,1.212,0,0,0,0,2.423h.491v18.233h6.939V492.68h.5a1.212,1.212,0,0,0,0-2.423Z" transform="translate(-817.149 -470.065)" />
                                    <path id="Path_1080" data-name="Path 1080" class="cls-1" d="M879.872,490.257h-7.924a1.212,1.212,0,0,0,0,2.423h.492v18.233h6.939V492.68h.492a1.212,1.212,0,0,0,0-2.423Z" transform="translate(-825.898 -470.065)" />
                                    <path id="Path_1081" data-name="Path 1081" class="cls-1" d="M866.79,536.981c0,.212-.322.384-.716.384H805.6c-.394,0-.716-.172-.716-.384v-1.766c0-.212.322-.383.716-.383h60.479c.394,0,.716.172.716.383Z" transform="translate(-804.88 -484.291)" />
                                    <path id="Path_1082" data-name="Path 1082" class="cls-1" d="M865.328,531.083c0,.21-.291.383-.652.383h-55.1c-.359,0-.651-.173-.651-.383v-1.768c0-.21.291-.382.651-.382h55.1c.361,0,.652.172.652.382Z" transform="translate(-806.17 -482.408)" />
                                    <path id="Path_1083" data-name="Path 1083" class="cls-1" d="M864.171,525.567c0,.21-.268.383-.6.383H812.731c-.333,0-.6-.174-.6-.383V523.8c0-.21.268-.385.6-.385h50.836c.335,0,.6.175.6.385Z" transform="translate(-807.194 -480.647)" />
                                    <path id="Path_1084" data-name="Path 1084" class="cls-1" d="M837.385,460.678a.549.549,0,0,0-.564,0l-27.866,18.658c-.155.1-.129.189.057.189H865.2c.187,0,.212-.085.057-.189Zm-.282,13.7a2.664,2.664,0,1,1,2.664-2.666,2.666,2.666,0,0,1-2.664,2.666" transform="translate(-806.148 -460.6)" />
                                </g>
                                <g class="svg-outer" data-name="Ellipse 42" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-prime-of-primes.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">PRIME OF PRIMES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-md-row flex-sm-column ">
                        <div class=" custom-header-product border-0">
                            <!-- <svg>
                                <path class="svg-inner" data-name="Path 1086" class="cls-1" d="M207.329,836.847a13.421,13.421,0,0,1,4.362,9.821l0,.749a13.342,13.342,0,0,1-13.341,13.4h-.328l.02,3.956h-8.607l-.02-3.956h-3.527l.019,3.956H177.3l-.019-3.956h-6.277l-.042-8.607h4.269l-.051-10.34-.042-8.611-.046-9.312h-4.268l-.042-8.612h6.278l-.024-4.838h8.609l.022,4.838H189.2l-.023-4.838h8.607l.023,4.88A13,13,0,0,1,210,828.254l0,.707A12.773,12.773,0,0,1,207.329,836.847Zm-4.24,10.57,0-.749a4.83,4.83,0,0,0-4.822-4.795H183.79l.05,10.34h14.472a4.777,4.777,0,0,0,4.777-4.8M183.7,823.951l.046,9.312h13.36a4.285,4.285,0,0,0,4.285-4.3l0-.707a4.335,4.335,0,0,0-4.326-4.3H183.7" transform="translate(-136.7 -784.638)" />
                                <g class="svg-outer" data-name="Ellipse 44" class="cls-2">
                                    <circle class="cls-3" cx="53" cy="53" r="53" />
                                    <circle class="cls-4" cx="53" cy="53" r="52" />
                                </g>
                            </svg> -->
                            <img src="/public_files/images/common/Product-icon-svg/icon-mex-crypto-wallet.svg" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title text-uppercase">MEX Crypto Wallet&nbsp; <span class="card-span"> Coming Soon</span></h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition.
                                 <!-- They somehow already know what you truly want. -->
                                </p>
                            <a href="#" class="btn-product text-left text-md-right">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Platforms Section -->
    <section class="section-platform">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="text-center text-uppercase  h2-platform pb-3 pt-5 pb-md-5 pt-md-5 text-1e32a3 ">Platforms</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav class="nav-1">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="custom-nav-1-link nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">MT5 <hr width="50px" style="border-top:1px solid #BB914A"></a>
                            <a class="custom-nav-1-link nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">MT4 <hr width="50px" style="border-top:1px solid #BB914A"></a>
                            <a class="custom-nav-1-link nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">iMultiBank <hr width="50px" style="border-top:1px solid #BB914A"></a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row platforms-content">
                                <div class="col-md-5 offset-md-1 mb-3 br-1 ">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/ECN-PRO.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">ECN PRO</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $5,000</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                                </ul>


                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span>
                                                <span class="span-img-plat">
                                                    <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a>
                                                </span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/MAXIMUS.png" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title text-center">MAXIMUS</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $50</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 1.4 pips</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                                </ul>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row platforms-content d-md-none d-block platform-slide">
                                <div class="col-12">
                                    <div class="card custom-card-platform ">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/ECN-PRO.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">ECN PRO</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $5,000</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                                </ul>


                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span>
                                                <span class="span-img-plat">
                                                    <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a>
                                                </span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card custom-card-platform ">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/MAXIMUS.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">MAXIMUS</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $50</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 1.4 pips</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                                </ul>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                        </div>
                        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row platforms-content mt-5">
                                <div class="col-md-4  col-12 mb-3 d-md-block d-none">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/ECN-PRO.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">ECN PRO</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $5,000</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</li>

                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>


                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 mb-3 br-2 d-md-block d-none ">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/multibank-pro@2x.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">MutltiBank Pro</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $1,000</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.8 pips</li>

                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>


                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 br-2 d-md-block d-none">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/MAXIMUS.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">Maximus</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $50</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 1.4 pips</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row platforms-content platform-slide-2">
                                <div class="col-12">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/MAXIMUS.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">Maximus</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $50</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 1.4 pips</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/ECN-PRO.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">ECN PRO</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $5,000</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</li>

                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>


                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card custom-card-platform">
                                        <img class="img-responsive custom-img-plat" src="/public_files/images/common/MultiBank Pro.png" alt="Card image">
                                        <div class="card-body ">
                                            <h4 class="card-title text-center">MutltiBank Pro</h4>
                                            <div class="flex-container">
                                                <ul>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $1,000</li>
                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.8 pips</li>

                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</li>


                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</li>
                                            </div>
                                            <div class="center-span">
                                                <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                                            </div>
                                            <div class="text-center pt-5">
                                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row platforms-content mt-5">
                                <div class="col-md-6 offset-md-3 col-12 text-center imulti-custom">
                                    <h4>Multibank institutional</h4>
                                    <p>MultiBank Institutional provides bespoke liquidity, trading & custody solutions to institutions backed by leading-edge trading technologies and infrastructure. Our institutional solutions minimize trading & operational costs, provide risk management and as a result improve your business’ profitability.</p>
                                    <div class="text-center pt-5">
                                        <a href="#" class="btn-product-partnerships ">Learn More <i class="fa fa-angle-right"></i></a>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 col-12 text-center text-uppercase">
                    <a href="https://www.multibankfx.com/platforms/compare-platforms" class="btn btn-custom-compare">COMPARE PLATFORMS</a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- About section -->

    <section class="about-multibank">
        <div class="container">
            <!-- <div class="row pb-3">
                <div class="col-12 col-md-12">
                    <h2 class="text-center text-uppercase h2-about mb-3">ABOUT MULTIBANK</h3>
                </div>
            </div> -->
            <div class="row">

                <div class="col-12 col-md-6 pt-4">
                    <h2 class=" text-uppercase h2-about text-center pt-3 pb-3 pt-md-5 pb-md-5 text-1e32a3  ">ABOUT MULTIBANK</h3>

                        <div class="panel-group custom-pan-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
                                    <h4 class="panel-title">Who We Are</h4>

                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in show">
                                    <div class="panel-body">
                                        <p>MultiBank was established in California, USA in 2005. Since its launch MultiBank has evolved into one of the largest online financial derivatives providers worldwide, with a current paid up capital of over US $322 million.</p>
                                        <a href="#" class="btn-product-2">Learn More <i class="fa fa-angle-right"></i></a>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
                                    <h4 class="panel-title">Regulations</h4>

                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>MultiBank was established in California, USA in 2005. Since its launch MultiBank has evolved into one of the largest online financial derivatives providers worldwide, with a current paid up capital of over US $322 million.</p>
                                        <a href="#" class="btn-product-2">Learn More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
                                    <h4 class="panel-title">Our Advantages</h4>

                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>MultiBank was established in California, USA in 2005. Since its launch MultiBank has evolved into one of the largest online financial derivatives providers worldwide, with a current paid up capital of over US $322 million.</p>
                                        <a href="#" class="btn-product-2">Learn More <i class="fa fa-angle-right"></i></a>

                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
                                    <h4 class="panel-title">security of funds</h4>

                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>MultiBank was established in California, USA in 2005. Since its launch MultiBank has evolved into one of the largest online financial derivatives providers worldwide, with a current paid up capital of over US $322 million.</p>
                                        <a href="#" class="btn-product-2">Learn More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1 pt-4">
                    <h2 class="text-center text-uppercase h2-about-global pb-4 pt-3 pt-md-5 pt-mb-5 text-white">GLOBAL PRESENCE</h3>

                        <div class="basic">
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-uae.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center text-white">United Arab Emirates</h4>
        <hr width="10%" class="awards-hr">

                                    <h5 class="pt-4">MultiBank MENA</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Dubai Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more text-white">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global ">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-turkey.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center text-white">TURKEY</h4>
                                    <hr width="10%" class="awards-hr">

                                    <h5 class="pt-4">MultiBank TURKEY</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Turkey Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more text-white">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-kuwait.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center text-white">KUWAIT</h4>
                                    <hr width="10%" class="awards-hr">

                                    <h5 class="pt-4">MultiBank </h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Kuwait Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more text-white">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-germany.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center text-white">GERMANY</h4>
                                    <hr width="10%" class="awards-hr">

                                    <h5 class="pt-4">MultiBank GERMANY</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Germany Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more text-white">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-china.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center text-white">CHINA</h4>
                                            <hr width="10%" class="awards-hr">

                                    <h5 class="pt-4">MultiBank CHINA</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>China Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more text-white">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="basic">
                        <div><img src="https://images.pexels.com/photos/547114/pexels-photo-547114.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"></div>
                        <div><img src="https://images.pexels.com/photos/552791/pexels-photo-552791.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"></div>
                        <div><img src="https://images.pexels.com/photos/218983/pexels-photo-218983.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"></div>
                        <div><img src="https://images.pexels.com/photos/552766/pexels-photo-552766.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"></div>
                        <div><img src="https://images.pexels.com/photos/531872/pexels-photo-531872.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"></div>
                        <div><img src="https://images.pexels.com/photos/216623/pexels-photo-216623.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"></div>
                    </div> -->
                </div>

            </div>
        </div>

    </section>

    <!-- Awards section -->
    <section class="about-page-awards " id="about-page-awards" style="padding:0px 0; background: transparent radial-gradient(closest-side at 50% 50%, #0818A2 0%, #000832 100%) 0% 0% no-repeat padding-box;">
        <div class="container index-awards">
            <div class="row">
                <div class="col-md-12 text-center mex-m-b-30 ">

                    <h2 class="mex-h1 text-center mx-auto awards-title ">Awards</h2>
                    <div class="mex-content mex-content col-md-10 font-24 mx-auto d-none">
                        <p class=" lead text-fff mb15 text-center font-24 d-none d-md-block d-lg-block">Find out more about our awards and
                            recognitions as
                            industry leader</p>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="swiper-container swiper-container-horizontal" id="swiper-container-awards" style="cursor: grab;">
                        <div class="swiper-wrapper" style="transform: translate3d(-1097px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="34" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/2013Asia.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2013</span>
                                    <span class="mex-content ">Asia Franchise Industry Association</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="35" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_trading_platform_2012.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2012</span>
                                    <span class="mex-content ">Jinrongjie</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="36" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/rtb_china_awards_2012.png">
                                    <span class="mex-h3 mex-m-b-5 ">RTB China Awards 2012</span>
                                    <span class="mex-content ">Global RTB Summit</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="37" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_2012_11china.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2012</span>
                                    <span class="mex-content ">11th China International Investment &amp; Finance
                                        Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="38" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_ecn_broker_2012.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best ECN Broker (Asia) 2012</span>
                                    <span class="mex-content ">Global Banking &amp; Finance Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="39" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_provider_2011.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Service Provider 2011</span>
                                    <span class="mex-content ">Hexun</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30 swiper-slide-prev" data-swiper-slide-index="40" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_provider_2011.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2011</span>
                                    <span class="mex-content ">Hexun</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30 swiper-slide-active" data-swiper-slide-index="0" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/Best_Forex_CFD_Broker_JFEX_Award.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex and CFD Broker 2019</span>
                                    <span class="mex-content ">16th Jordan Forex Expo &amp; Awards</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30 swiper-slide-next" data-swiper-slide-index="1" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-wins-financial-services-provider-asia-award-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/Financial_Services_Provider_of_the_Year_Asia_2019.jpg">
                                    <span class="mex-h3 mex-m-b-5 ">Financial Services Provider of the Year (Asia)
                                        2019</span>
                                    <span class="mex-content ">Global Brands Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="2" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-chosen-best-FX-CFD-broker-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_fx_broker_euas_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best FX &amp; CFD Broker (Europe &amp; Asia)
                                        2019</span>
                                    <span class="mex-content ">International Investor</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-40" data-swiper-slide-index="3" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-wins-ecn-broker-best-forex-platform-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/ecn_broker_eu_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">ECN Broker of the Year (Europe) 2019</span>
                                    <span class="mex-content ">International Business Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="4" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-wins-ecn-broker-best-forex-platform-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_mena_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Platform MENA 2019</span>
                                    <span class="mex-content ">International Business Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="5" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-named-best-financial-derivatives-broker-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/2019best_financial_derivatives_broker_europe.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Financial Derivatives Broker 2019</span>
                                    <span class="mex-content ">Global Banking &amp; Finance Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="6" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-selected-best-forex-broker-forex-expo-dubai-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_broker_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2019</span>
                                    <span class="mex-content ">The Forex Expo Dubai</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="7" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/milestones_multibank-chairman-naser-taher-awarded-ceo-of-the-year-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/2019CEO_of_the_year_financial_services_asia_europe.png">
                                    <span class="mex-h3 mex-m-b-5 ">CEO of the Year (Financial Services) (Asia &amp;
                                        Europe) 2019</span>
                                    <span class="mex-content ">Le Fonti Awards (International Alternative Investment
                                        Review)</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="8" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-honored-best-ecn-broker-asia-2019.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_ecn_broker_asia_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best ECN Broker of the Year (Asia) 2019</span>
                                    <span class="mex-content ">Finance Derivative</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="9" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_education_provider_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Education Provider 2019</span>
                                    <span class="mex-content ">FX Daily Info</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="10" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class=" lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_platform_2018.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform (Hong Kong) 2018</span>
                                    <span class="mex-content ">International Finance Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="11" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_ecn_broker_2018.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best ECN Broker Europe 2018</span>
                                    <span class="mex-content ">International Business Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="12" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_ecn_platform_2018.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex ECN Platform (Europe &amp; Asia)</span>
                                    <span class="mex-content ">Capital Finance International</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="13" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/most_admired_2017.png">
                                    <span class="mex-h3 mex-m-b-5 ">30 Most Admired Companies of 2017</span>
                                    <span class="mex-content ">Insights Success Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="14" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/ceo_of_the_year_2017.png">
                                    <span class="mex-h3 mex-m-b-5 ">Financial Derivatives Broker of the Year (Asia &amp;
                                        Europe)
                                        2017</span>
                                    <span class="mex-content ">International Alternative Investment Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="15" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/ceo_of_the_year_2017.png">
                                    <span class="mex-h3 mex-m-b-5 ">CEO of the Year-- Financial Services (Asia &amp;
                                        Europe) 2017</span>
                                    <span class="mex-content ">International Alternative Investment Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="16" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_platform_2016.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Exchange Platform (Hong Kong) 2016</span>
                                    <span class="mex-content ">Global Brands Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="17" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_ceo_2016.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Financial Services CEO (Hong Kong) 2016</span>
                                    <span class="mex-content ">Global Brands Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="18" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_china_2016.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Platform 2016</span>
                                    <span class="mex-content ">China Forex Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="19" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_execution_broker_2016.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Execution Broker 2016</span>
                                    <span class="mex-content ">China Forex Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="20" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_broker_2015.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2015</span>
                                    <span class="mex-content ">IFeng</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="21" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_platform_2015.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform (Asia &amp; Europe)
                                        2015</span>
                                    <span class="mex-content ">Capital Finance International</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="22" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_broker_europe_2015.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Broker Europe 2015</span>
                                    <span class="mex-content ">International Alternative Investment Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="23" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_platform_2014.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Institutional FX Platform 2014</span>
                                    <span class="mex-content ">7th Saudi Money Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="24" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/top_provider_2014.png">
                                    <span class="mex-h3 mex-m-b-5 ">Top FX Liquidity Provider 2014</span>
                                    <span class="mex-content ">6th Saudi Money Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="25" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/most_secure_broker_2014.png">
                                    <span class="mex-h3 mex-m-b-5 ">Most Secure Broker 2014</span>
                                    <span class="mex-content ">KG Forex World Conference</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="26" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_ecn_broker_2013.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best ECN Forex Broker Asia 2013<br> Best ECN Forex
                                        Broker Europe
                                        2013</span>
                                    <span class="mex-content ">Global Banking &amp; FinanceReview</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="27" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_company_leadership_2013.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Company for Leadership 2013</span>
                                    <span class="mex-content ">International Alternative Investment Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="28" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_broker_2013.png"> <span class="mex-h3 mex-m-b-5 ">Most Secure Forex Broker 2013</span>
                                    <span class="mex-content ">Shanghai Financial Investment Management
                                        Association</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="29" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_broker_2013.png"> <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2013</span>
                                    <span class="mex-content ">Shanghai Financial Investment Management
                                        Association</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="30" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/broker_of_the_year_2013.png">
                                    <span class="mex-h3 mex-m-b-5 ">Broker of the Year 2013</span>
                                    <span class="mex-content ">China International Online Trading Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="31" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/most_powerful_team_2013.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2013</span>
                                    <span class="mex-content ">CNFOL</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="32" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/most_powerful_team_2013.png">
                                    <span class="mex-h3 mex-m-b-5 ">Most Powerful Forex Technical Research &amp;
                                        Development Team
                                        2013</span>
                                    <span class="mex-content ">CNFOL</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="33" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/2013Asia.png"> <span class="mex-h3 mex-m-b-5 ">Most Secure Forex Broker 2013</span>
                                    <span class="mex-content ">Asia Franchise Industry Association</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="34" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/2013Asia.png"> <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2013</span>
                                    <span class="mex-content ">Asia Franchise Industry Association</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="35" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_trading_platform_2012.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2012</span>
                                    <span class="mex-content ">Jinrongjie</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="36" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/rtb_china_awards_2012.png"> <span class="mex-h3 mex-m-b-5 ">RTB China Awards 2012</span>
                                    <span class="mex-content ">Global RTB Summit</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="37" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_2012_11china.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2012</span>
                                    <span class="mex-content ">11th China International Investment &amp; Finance
                                        Expo</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="38" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_ecn_broker_2012.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best ECN Broker (Asia) 2012</span>
                                    <span class="mex-content ">Global Banking &amp; Finance Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30" data-swiper-slide-index="39" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_provider_2011.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Service Provider 2011</span>
                                    <span class="mex-content ">Hexun</span>
                                </a>
                            </div>
                            <div class="swiper-slide width-30 swiper-slide-duplicate-prev" data-swiper-slide-index="40" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_provider_2011.png" alt="best_forex_provider_2011">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2011</span>
                                    <span class="mex-content ">Hexun</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30 swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 136.714px; margin-right: 20px;">
                                <a href="/about/awards.php">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/Best_Forex_CFD_Broker_JFEX_Award.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex and CFD Broker 2019</span>
                                    <span class="mex-content ">16th Jordan Forex Expo &amp; Awards</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30 swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-wins-financial-services-provider-asia-award-2019">
                                    <!--<img class="lazyloadXXX"-->
                                    <!--    src="/public_files/images/about_us/awards/Financial_Services_Provider_of_the_Year_Asia_2019.png">-->

                                    <span class="mex-h3 mex-m-b-5 ">Financial Services Provider of the Year (Asia)
                                        2019</span>
                                    <span class="mex-content ">Global Brands Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="2" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-chosen-best-FX-CFD-broker-2019">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_fx_broker_euas_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best FX &amp; CFD Broker (Europe &amp; Asia)
                                        2019</span>
                                    <span class="mex-content ">International Investor</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="3" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-wins-ecn-broker-best-forex-platform-2019">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/ecn_broker_eu_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">ECN Broker of the Year (Europe) 2019</span>
                                    <span class="mex-content ">International Business Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="4" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-wins-ecn-broker-best-forex-platform-2019">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_mena_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Platform MENA 2019</span>
                                    <span class="mex-content ">International Business Magazine</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="5" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-named-best-financial-derivatives-broker-2019">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/2019best_financial_derivatives_broker_europe.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Financial Derivatives Broker 2019</span>
                                    <span class="mex-content ">Global Banking &amp; Finance Review</span>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate width-30" data-swiper-slide-index="6" style="width: 136.714px; margin-right: 20px;">
                                <a href="/article/multibank-selected-best-forex-broker-forex-expo-dubai-2019">
                                    <img class="lazyloadXXX" src="/public_files/images/about_us/awards/best_forex_broker_2019.png">
                                    <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2019</span>
                                    <span class="mex-content ">The Forex Expo Dubai</span>
                                </a>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide">
                    </div>
                    <!-- <hr width="20%" class="awards-hr"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships section -->
    <section class="p0 section-partnerships">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h3 class="mex-h1 mb-0 mt-0 mb-lg-1 mt-lg-1 pb-5 pt-5 text-center" style="color:#020862">CHOOSE WHERE TO GO NEXT</h3>
                </div>
                <div class="col-12 col-md-12 col-xl-6 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/introducing-brokers">
                            <img alt="Introducing Brokers" class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-introducing-brokers.jpg">
                            <div class="card-content text-left">
                                <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                Introducing Brokers
                                </div>
                            </div>
                            <div class="partnership-cont">
                                <h5 class="text-uppercase"> Introducing Brokers</h5>
                                <p> Join MultiBank’s network
                                    of over 30,000
                                    Introducing Brokers and enjoy the highest levels of personalized customer care.
                                </p>
                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-12 col-xl-6 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/franchise-program.php">
                            <img class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-franchise-program.jpg" alt="Franchise Program">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                Franchise Program </div>
                            </div>
                            <div class="partnership-cont">
                                <h5 class="text-uppercase">Franchise Program</h5>
                                <p>Open offices under the MultiBank name and obtain exclusivity of our products and
                                    services in the
                                    region
                                </p>
                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/white-label.php">
                            <img alt="White Label" class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-white-label.jpg">

                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                WHITE LABEL </div>

                            </div>
                            <div class="mex-content mb0 text-overflow-3 partnership-cont">
                                <h5 class="text-uppercase">WHITE LABEL</h5>
                                <p>Become MultiBank’s White Label Partner and have your own proprietary trading system,
                                    branded in your
                                    corporate name
                                </p>
                                <a href="#" class="btn-product-partnerships">Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/prime-of-primes.php">
                            <img alt="Prime of Primes" class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-prime-of-primes.jpg">
                            <div class="card-content text-left">
                                <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                                PRIME OF PRIMES </div>
                            </div>
                            <div class="partnership-cont">
                                <h5 class="text-uppercase">PRIME OF PRIMES</h5>
                                <p>
                                    A to Z prime technology solution for MultiBank’s institutional partners
                                </p>
                                <a href="#" class="btn-product-partnerships ">Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/cpa-affiliate-program.php">
                            <img class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-cpa-affiliate-program.jpg" alt="CPA Affiliate Program">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                CPA AFFILIATE PROGRAM </div>
                            </div>
                            <div class="partnership-cont">
                                <h5 class="text-uppercase">CPA AFFILIATE PROGRAM</h5>
                                <p>MultiBank’s CPA Affiliate Program allows digital marketers to earn commission for
                                    every active trader
                                    they introduce
                                </p>
                                <a href="#" class="btn-product-partnerships ">Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-block d-md-none">
                <div class="col-12 col-md-12 col-xl-8 mex-m-b-10 custom-card-img">
                    <div class="card">
                        <img alt="Introducing Brokers" class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-introducing-brokers.jpg">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                Introducing Brokers </div>
                            <div class="mex-content mb0 text-overflow-3">
                                <a href="/partnership/introducing-brokers.php" class="btn-product-partnerships">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img">
                    <div class="card">
                        <img class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-franchise-program.jpg" alt="Franchise Program">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                Franchise Program </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="/partnership/franchise-program.php" class="btn-product-partnerships">Learn
                                    More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img">
                    <div class="card">
                        <img alt="White Label" class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-prime-of-primes.jpg">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                White Label </div>
                            <div class="mex-content mb0 text-overflow-3">
                                <a href="/partnership/white-label.php" class="btn-product-partnerships" style="font-size:16px;">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img d-none">
                    <div class="card">
                        <img alt="Prime of Primes" class=" card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_prime_of_primes@2x.png">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                                Prime of Primes </div>
                            <div class="mex-content mb0 text-overflow-3">
                                <a href="/partnership/prime-of-primes.php" class="btn-product-partnerships">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="text-uppercase  h2-contact mb-3 ">contact us</h2>
                    <p class="pb-5 pt-3">For any questions or inquiries, please do not hesitate to contact our 24/5 professional multilingual Customer Service</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-10 offset-1 offset-md-0 div-call">
                    <h4 class="contact-h4 mb-4">CALL US</h4>
                    <div class="mex-form-item col-8" style="margin-bottom: 10px;padding-left: 0 !important;">
                        <label for="" class="d-none">
                        </label>
                        <select class="country-list" id="myselect">
                            <option value="UAE">UAE</option>
                            <option value="SPAIN">SPAIN</option>
                            <option value="INDONESIA">INDONESIA</option>
                            <option value="MALAYSIA">MALAYSIA</option>
                            <option value="USA">USA</option>

                        </select>
                    </div>
                    <!-- <div class="dropdown custom-dropdown">
                        <button type="button" class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          UAE
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">USA</a>
                          <a class="dropdown-item" href="#">SPAIN</a>
                          <a class="dropdown-item" href="#">INDONESIA</a>
                          <a class="dropdown-item" href="#">MALAYSIA</a>

                        </div>
                      </div> -->

                    <ul class="contact-country">
                        <li class="d-block" id="uae"><a href="tel:+60322010966?call"><img alt="uae" class="country-icon" data-entity-type="" data-entity-uuid="" src="./public_files/images/common/country/uae.png">
                                <span> <strong class="country-name">UAE:</strong> +971 4 875 1311</span> </a></li>
                        <li class="d-none" id="usa"><a href="tel:+12139924748?call"><img alt="US" class="country-icon" data-entity-type="" data-entity-uuid="" src="./public_files/images/common/country/usa_big.png">
                                <span> <strong class="country-name">US:</strong> +1 213 992 4748 </span> </a></li>
                        <li class="d-none" id="spain"><a href="tel:+34931220671?call"><img alt="Spain" class="country-icon" data-entity-type="" data-entity-uuid="" src="./public_files/images/common/country/spain_big.png">
                                <span> <strong class="country-name">Spain:</strong> +34 931220671</span></a></li>
                        <li class="d-none" id="indo"><a href="tel:+6202129264151?call"><img alt="Indonesia" class="country-icon" data-entity-type="" data-entity-uuid="" src="./public_files/images/common/country/indonesia_big.png">
                                <span> <strong class="country-name">Indonesia:</strong> +62 02129264151 </span> </a></li>
                        <li class="d-none" id="malay"><a href="tel:+60322010966?call"><img alt="Malaysia" class="country-icon" data-entity-type="" data-entity-uuid="" src="./public_files/images/common/country/malaysia_big.png">
                                <span> <strong class="country-name">Malaysia:</strong> +60 32 201 0966</span> </a></li>


                    </ul>

                    <h4 class="contact-h4 mb-md-4 mb-0 mt-md-5 mt-0">eMAIL US</h4>
                    <div class="contact-email custom-email">
                        <a class="text-000033" href="mailto:cs@multibankfx.com"><i class="fa fa-envelope text-white"></i>cs@multibankfx.com</a>
                    </div>
                    <ul class="contact-social-media">
                        <li class="social-contact">
                            <div class="mex-h3 mb-md-4 mb-2 mt-3 mt-md-5 text-center text-md-left">Follow us</div>
                            <a href="https://www.facebook.com/multibank.official" target="_blank">
                                <span><i class="fa fa-facebook"></i></span>
                            </a>
                            <a href="https://twitter.com/multibankgroup" target="_blank">
                                <span><i class="fa fa-twitter"></i></span>
                            </a>
                            <a href="https://www.youtube.com/c/MultiBankGoup" target="_blank">
                                <span><i class="fa fa-youtube"></i></span>
                            </a>
                            <a href="https://www.linkedin.com/company/multibankgroup/" target="_blank">
                                <span><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a href="https://www.instagram.com/multibank_group/" target="_blank">
                                <span><i class="fa fa-instagram"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 col-10 offset-1 offset-md-0 div-form text-center text-sm-left call-back-form">
                    <h4 class="contact-h4-2 mb-4">Get a Call back</h4>

                    <!-- <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadio1">Individual</label>
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadio1">partnership</label> -->

                    <div style="width: 100%;">
                        <form action="https://www.multibankfx.com/form/callback?" name="call_back_footer_form" class="multibank-form row mx-0 w-100 new" method="post" enctype="" id="call_back_footer_form" target="" autocomplete="on">
                            <input type="hidden" name="t_date" value="MjAyMC0wNi0yNyAwMjo0OToxNA==">
                            <input type="hidden" name="token" value="$2y$10$ckeztx1BOdjmTuHO2vxCAeZMeyHurUeRWV.MLqIXEMw9UcUuRkgo6">
                            <input type="hidden" name="source" value="[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:12] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:13] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:14] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/about/awards?web=true">
                            <div class="mex-form-item col-6 col-md-3 p-1 cb-partnership font-16" style="
                            margin-bottom: 10px;
                        ">

                                <div class="form-check form-check-inline"><input data-message="Account Type is Required." data-extra-message="Full Name Invalid." class="   " name="account_type" type="radio" required="" value="1" checked="">
                                    <label class="mb-0 ml-1 custom-disable" for="">INDIVIDUAL</label>
                                </div>
                            </div>
                            <div class="mex-form-item col-6 col-md-3 p-1 cb-partnership font-16" style="
                            margin-bottom: 10px;
                        ">

                                <div class="form-check form-check-inline"><input data-message="" data-extra-message="Full Name Invalid." class="   " name="account_type" type="radio" required="" value="2">
                                    <label class="mb-0 ml-1 custom-disable" for="">PARTNERSHIP</label>
                                </div>
                            </div>
                            <div class="mex-form-item col-md-11 col-12  p-1" style="
                            margin-bottom: 10px;
                        ">
                                <label for="" class="d-none">
                                </label>
                                <input type="text" data-message="Name is Required." data-extra-message="Full Name Invalid." data-regex="" class=" form-control mb-0" name="name" placeholder="Full Name" required="" value="">
                            </div>
                            <div class="mex-form-item col-md-11 col-12   p-1" style="
                            margin-bottom: 10px;
                        ">
                                <label for="" class="d-none">
                                </label>
                                <input type="email" data-message="Email is Required." data-extra-message="Email is Invalid." data-regex="" class="form-control mb-0" name="email" placeholder="Email" required="" value="">
                            </div>
                            <div class="mex-form-item col-md-11 col-12  p-1" style="
                            margin-bottom: 10px;
                        ">
                                <label for="" class="d-none">
                                </label>
                                <input type="email" data-message="Confirm Email is Required." data-extra-message="Email Mismatched." data-regex="" class="form-control mb-0" name="confirm_email" placeholder="Confirm Email" required="" value="">
                            </div>
                            <div class="d-none">
                                <label for="" class="d-none">
                                </label>

                                <select data-message="Country Name is Required." data-extra-message="Country Name Invalid." class="selection-country form-control &nbsp;mb-0 select_with_country select_with_country" name="country_name" required="">
                                    <option value="" selected="selected">Select Country</option>
                                    <option data-country_iso_code="AF" data-name="AF" value="AF">AFGHANISTAN</option>
                                    <option data-country_iso_code="AL" data-name="AL" value="AL">ALBANIA</option>
                                    <option data-country_iso_code="DZ" data-name="DZ" value="DZ">ALGERIA</option>
                                    <option data-country_iso_code="AS" data-name="AS" value="AS">AMERICAN SAMOA</option>
                                    <option data-country_iso_code="AD" data-name="AD" value="AD">ANDORRA</option>
                                    <option data-country_iso_code="AO" data-name="AO" value="AO">ANGOLA</option>
                                    <option data-country_iso_code="AI" data-name="AI" value="AI">ANGUILLA</option>
                                    <option data-country_iso_code="AQ" data-name="AQ" value="AQ">ANTARCTICA</option>
                                    <option data-country_iso_code="AG" data-name="AG" value="AG">ANTIGUA AND BARBUDA
                                    </option>
                                    <option data-country_iso_code="AR" data-name="AR" value="AR">ARGENTINA</option>
                                    <option data-country_iso_code="AM" data-name="AM" value="AM">ARMENIA</option>
                                    <option data-country_iso_code="AW" data-name="AW" value="AW">ARUBA</option>
                                    <option data-country_iso_code="AU" data-name="AU" value="AU">AUSTRALIA</option>
                                    <option data-country_iso_code="AT" data-name="AT" value="AT">AUSTRIA</option>
                                    <option data-country_iso_code="AZ" data-name="AZ" value="AZ">AZERBAIJAN</option>
                                    <option data-country_iso_code="BS" data-name="BS" value="BS">BAHAMAS</option>
                                    <option data-country_iso_code="BH" data-name="BH" value="BH">BAHRAIN</option>
                                    <option data-country_iso_code="BD" data-name="BD" value="BD">BANGLADESH</option>
                                    <option data-country_iso_code="BB" data-name="BB" value="BB">BARBADOS</option>
                                    <option data-country_iso_code="BY" data-name="BY" value="BY">BELARUS</option>
                                    <option data-country_iso_code="BE" data-name="BE" value="BE">BELGIUM</option>
                                    <option data-country_iso_code="BZ" data-name="BZ" value="BZ">BELIZE</option>
                                    <option data-country_iso_code="BJ" data-name="BJ" value="BJ">BENIN</option>
                                    <option data-country_iso_code="BM" data-name="BM" value="BM">BERMUDA</option>
                                    <option data-country_iso_code="BT" data-name="BT" value="BT">BHUTAN</option>
                                    <option data-country_iso_code="BO" data-name="BO" value="BO">BOLIVIA</option>
                                    <option data-country_iso_code="BA" data-name="BA" value="BA">BOSNIA AND
                                        HERZEGOVINA
                                    </option>
                                    <option data-country_iso_code="BW" data-name="BW" value="BW">BOTSWANA</option>
                                    <option data-country_iso_code="BV" data-name="BV" value="BV">BOUVET ISLAND</option>
                                    <option data-country_iso_code="BR" data-name="BR" value="BR">BRAZIL</option>
                                    <option data-country_iso_code="IO" data-name="IO" value="IO">BRITISH INDIAN OCEAN
                                        TERRITORY
                                    </option>
                                    <option data-country_iso_code="BN" data-name="BN" value="BN">BRUNEI DARUSSALAM
                                    </option>
                                    <option data-country_iso_code="BG" data-name="BG" value="BG">BULGARIA</option>
                                    <option data-country_iso_code="BF" data-name="BF" value="BF">BURKINA FASO</option>
                                    <option data-country_iso_code="BI" data-name="BI" value="BI">BURUNDI</option>
                                    <option data-country_iso_code="KH" data-name="KH" value="KH">CAMBODIA</option>
                                    <option data-country_iso_code="CM" data-name="CM" value="CM">CAMEROON</option>
                                    <option data-country_iso_code="CA" data-name="CA" value="CA">CANADA</option>
                                    <option data-country_iso_code="CV" data-name="CV" value="CV">CAPE VERDE</option>
                                    <option data-country_iso_code="KY" data-name="KY" value="KY">CAYMAN ISLANDS</option>
                                    <option data-country_iso_code="CF" data-name="CF" value="CF">CENTRAL AFRICAN
                                        REPUBLIC
                                    </option>
                                    <option data-country_iso_code="TD" data-name="TD" value="TD">CHAD</option>
                                    <option data-country_iso_code="CL" data-name="CL" value="CL">CHILE</option>
                                    <option data-country_iso_code="CN" data-name="CN" value="CN">CHINA</option>
                                    <option data-country_iso_code="CX" data-name="CX" value="CX">CHRISTMAS ISLAND
                                    </option>
                                    <option data-country_iso_code="CC" data-name="CC" value="CC">COCOS (KEELING)
                                        ISLANDS
                                    </option>
                                    <option data-country_iso_code="CO" data-name="CO" value="CO">COLOMBIA</option>
                                    <option data-country_iso_code="KM" data-name="KM" value="KM">COMOROS</option>
                                    <option data-country_iso_code="CG" data-name="CG" value="CG">CONGO</option>
                                    <option data-country_iso_code="CD" data-name="CD" value="CD">CONGO, THE DEMOCRATIC
                                        REPUBLIC OF THE
                                    </option>
                                    <option data-country_iso_code="CK" data-name="CK" value="CK">COOK ISLANDS</option>
                                    <option data-country_iso_code="CR" data-name="CR" value="CR">COSTA RICA</option>
                                    <option data-country_iso_code="CI" data-name="CI" value="CI">COTE D'IVOIRE</option>
                                    <option data-country_iso_code="HR" data-name="HR" value="HR">CROATIA</option>
                                    <option data-country_iso_code="CU" data-name="CU" value="CU">CUBA</option>
                                    <option data-country_iso_code="CY" data-name="CY" value="CY">CYPRUS</option>
                                    <option data-country_iso_code="CZ" data-name="CZ" value="CZ">CZECH REPUBLIC</option>
                                    <option data-country_iso_code="DK" data-name="DK" value="DK">DENMARK</option>
                                    <option data-country_iso_code="DJ" data-name="DJ" value="DJ">DJIBOUTI</option>
                                    <option data-country_iso_code="DM" data-name="DM" value="DM">DOMINICA</option>
                                    <option data-country_iso_code="DO" data-name="DO" value="DO">DOMINICAN REPUBLIC
                                    </option>
                                    <option data-country_iso_code="EC" data-name="EC" value="EC">ECUADOR</option>
                                    <option data-country_iso_code="EG" data-name="EG" value="EG">EGYPT</option>
                                    <option data-country_iso_code="SV" data-name="SV" value="SV">EL SALVADOR</option>
                                    <option data-country_iso_code="GQ" data-name="GQ" value="GQ">EQUATORIAL GUINEA
                                    </option>
                                    <option data-country_iso_code="ER" data-name="ER" value="ER">ERITREA</option>
                                    <option data-country_iso_code="EE" data-name="EE" value="EE">ESTONIA</option>
                                    <option data-country_iso_code="ET" data-name="ET" value="ET">ETHIOPIA</option>
                                    <option data-country_iso_code="FK" data-name="FK" value="FK">FALKLAND ISLANDS
                                        (MALVINAS)
                                    </option>
                                    <option data-country_iso_code="FO" data-name="FO" value="FO">FAROE ISLANDS</option>
                                    <option data-country_iso_code="FJ" data-name="FJ" value="FJ">FIJI</option>
                                    <option data-country_iso_code="FI" data-name="FI" value="FI">FINLAND</option>
                                    <option data-country_iso_code="FR" data-name="FR" value="FR">FRANCE</option>
                                    <option data-country_iso_code="GF" data-name="GF" value="GF">FRENCH GUIANA</option>
                                    <option data-country_iso_code="PF" data-name="PF" value="PF">FRENCH POLYNESIA
                                    </option>
                                    <option data-country_iso_code="TF" data-name="TF" value="TF">FRENCH SOUTHERN
                                        TERRITORIES
                                    </option>
                                    <option data-country_iso_code="GA" data-name="GA" value="GA">GABON</option>
                                    <option data-country_iso_code="GM" data-name="GM" value="GM">GAMBIA</option>
                                    <option data-country_iso_code="GE" data-name="GE" value="GE">GEORGIA</option>
                                    <option data-country_iso_code="DE" data-name="DE" value="DE">GERMANY</option>
                                    <option data-country_iso_code="GH" data-name="GH" value="GH">GHANA</option>
                                    <option data-country_iso_code="GI" data-name="GI" value="GI">GIBRALTAR</option>
                                    <option data-country_iso_code="GR" data-name="GR" value="GR">GREECE</option>
                                    <option data-country_iso_code="GL" data-name="GL" value="GL">GREENLAND</option>
                                    <option data-country_iso_code="GD" data-name="GD" value="GD">GRENADA</option>
                                    <option data-country_iso_code="GP" data-name="GP" value="GP">GUADELOUPE</option>
                                    <option data-country_iso_code="GU" data-name="GU" value="GU">GUAM</option>
                                    <option data-country_iso_code="GT" data-name="GT" value="GT">GUATEMALA</option>
                                    <option data-country_iso_code="GN" data-name="GN" value="GN">GUINEA</option>
                                    <option data-country_iso_code="GW" data-name="GW" value="GW">GUINEA-BISSAU</option>
                                    <option data-country_iso_code="GY" data-name="GY" value="GY">GUYANA</option>
                                    <option data-country_iso_code="HT" data-name="HT" value="HT">HAITI</option>
                                    <option data-country_iso_code="HM" data-name="HM" value="HM">HEARD ISLAND AND
                                        MCDONALD ISLANDS
                                    </option>
                                    <option data-country_iso_code="VA" data-name="VA" value="VA">HOLY SEE (VATICAN CITY
                                        STATE)
                                    </option>
                                    <option data-country_iso_code="HN" data-name="HN" value="HN">HONDURAS</option>
                                    <option data-country_iso_code="HK" data-name="HK" value="HK">HONG KONG</option>
                                    <option data-country_iso_code="HU" data-name="HU" value="HU">HUNGARY</option>
                                    <option data-country_iso_code="IS" data-name="IS" value="IS">ICELAND</option>
                                    <option data-country_iso_code="IN" data-name="IN" value="IN">INDIA</option>
                                    <option data-country_iso_code="ID" data-name="ID" value="ID">INDONESIA</option>
                                    <option data-country_iso_code="IR" data-name="IR" value="IR">IRAN, ISLAMIC REPUBLIC
                                        OF
                                    </option>
                                    <option data-country_iso_code="IQ" data-name="IQ" value="IQ">IRAQ</option>
                                    <option data-country_iso_code="IE" data-name="IE" value="IE">IRELAND</option>
                                    <option data-country_iso_code="IL" data-name="IL" value="IL">ISRAEL</option>
                                    <option data-country_iso_code="IT" data-name="IT" value="IT">ITALY</option>
                                    <option data-country_iso_code="JM" data-name="JM" value="JM">JAMAICA</option>
                                    <option data-country_iso_code="JP" data-name="JP" value="JP">JAPAN</option>
                                    <option data-country_iso_code="JO" data-name="JO" value="JO">JORDAN</option>
                                    <option data-country_iso_code="KZ" data-name="KZ" value="KZ">KAZAKHSTAN</option>
                                    <option data-country_iso_code="KE" data-name="KE" value="KE">KENYA</option>
                                    <option data-country_iso_code="KI" data-name="KI" value="KI">KIRIBATI</option>
                                    <option data-country_iso_code="KP" data-name="KP" value="KP">KOREA, DEMOCRATIC
                                        PEOPLE'S REPUBLIC OF
                                    </option>
                                    <option data-country_iso_code="KR" data-name="KR" value="KR">KOREA, REPUBLIC OF
                                    </option>
                                    <option data-country_iso_code="KW" data-name="KW" value="KW">KUWAIT</option>
                                    <option data-country_iso_code="KG" data-name="KG" value="KG">KYRGYZSTAN</option>
                                    <option data-country_iso_code="LA" data-name="LA" value="LA">LAO PEOPLE'S DEMOCRATIC
                                        REPUBLIC
                                    </option>
                                    <option data-country_iso_code="LV" data-name="LV" value="LV">LATVIA</option>
                                    <option data-country_iso_code="LB" data-name="LB" value="LB">LEBANON</option>
                                    <option data-country_iso_code="LS" data-name="LS" value="LS">LESOTHO</option>
                                    <option data-country_iso_code="LR" data-name="LR" value="LR">LIBERIA</option>
                                    <option data-country_iso_code="LY" data-name="LY" value="LY">LIBYAN ARAB
                                        JAMAHIRIYA
                                    </option>
                                    <option data-country_iso_code="LI" data-name="LI" value="LI">LIECHTENSTEIN</option>
                                    <option data-country_iso_code="LT" data-name="LT" value="LT">LITHUANIA</option>
                                    <option data-country_iso_code="LU" data-name="LU" value="LU">LUXEMBOURG</option>
                                    <option data-country_iso_code="MO" data-name="MO" value="MO">MACAO</option>
                                    <option data-country_iso_code="MK" data-name="MK" value="MK">MACEDONIA, THE FORMER
                                        YUGOSLAV REPUBLIC OF
                                    </option>
                                    <option data-country_iso_code="MG" data-name="MG" value="MG">MADAGASCAR</option>
                                    <option data-country_iso_code="MW" data-name="MW" value="MW">MALAWI</option>
                                    <option data-country_iso_code="MY" data-name="MY" value="MY">MALAYSIA</option>
                                    <option data-country_iso_code="MV" data-name="MV" value="MV">MALDIVES</option>
                                    <option data-country_iso_code="ML" data-name="ML" value="ML">MALI</option>
                                    <option data-country_iso_code="MT" data-name="MT" value="MT">MALTA</option>
                                    <option data-country_iso_code="MH" data-name="MH" value="MH">MARSHALL ISLANDS
                                    </option>
                                    <option data-country_iso_code="MQ" data-name="MQ" value="MQ">MARTINIQUE</option>
                                    <option data-country_iso_code="MR" data-name="MR" value="MR">MAURITANIA</option>
                                    <option data-country_iso_code="MU" data-name="MU" value="MU">MAURITIUS</option>
                                    <option data-country_iso_code="YT" data-name="YT" value="YT">MAYOTTE</option>
                                    <option data-country_iso_code="MX" data-name="MX" value="MX">MEXICO</option>
                                    <option data-country_iso_code="FM" data-name="FM" value="FM">MICRONESIA, FEDERATED
                                        STATES OF
                                    </option>
                                    <option data-country_iso_code="MD" data-name="MD" value="MD">MOLDOVA, REPUBLIC OF
                                    </option>
                                    <option data-country_iso_code="MC" data-name="MC" value="MC">MONACO</option>
                                    <option data-country_iso_code="MN" data-name="MN" value="MN">MONGOLIA</option>
                                    <option data-country_iso_code="ME" data-name="ME" value="ME">MONTENEGRO</option>
                                    <option data-country_iso_code="MS" data-name="MS" value="MS">MONTSERRAT</option>
                                    <option data-country_iso_code="MA" data-name="MA" value="MA">MOROCCO</option>
                                    <option data-country_iso_code="MZ" data-name="MZ" value="MZ">MOZAMBIQUE</option>
                                    <option data-country_iso_code="MM" data-name="MM" value="MM">MYANMAR</option>
                                    <option data-country_iso_code="NA" data-name="NA" value="NA">NAMIBIA</option>
                                    <option data-country_iso_code="NR" data-name="NR" value="NR">NAURU</option>
                                    <option data-country_iso_code="NP" data-name="NP" value="NP">NEPAL</option>
                                    <option data-country_iso_code="NL" data-name="NL" value="NL">NETHERLANDS</option>
                                    <option data-country_iso_code="AN" data-name="AN" value="AN">NETHERLANDS ANTILLES
                                    </option>
                                    <option data-country_iso_code="NC" data-name="NC" value="NC">NEW CALEDONIA</option>
                                    <option data-country_iso_code="NZ" data-name="NZ" value="NZ">NEW ZEALAND</option>
                                    <option data-country_iso_code="NI" data-name="NI" value="NI">NICARAGUA</option>
                                    <option data-country_iso_code="NE" data-name="NE" value="NE">NIGER</option>
                                    <option data-country_iso_code="NG" data-name="NG" value="NG">NIGERIA</option>
                                    <option data-country_iso_code="NU" data-name="NU" value="NU">NIUE</option>
                                    <option data-country_iso_code="NF" data-name="NF" value="NF">NORFOLK ISLAND</option>
                                    <option data-country_iso_code="MP" data-name="MP" value="MP">NORTHERN MARIANA
                                        ISLANDS
                                    </option>
                                    <option data-country_iso_code="NO" data-name="NO" value="NO">NORWAY</option>
                                    <option data-country_iso_code="OM" data-name="OM" value="OM">OMAN</option>
                                    <option data-country_iso_code="PK" data-name="PK" value="PK">PAKISTAN</option>
                                    <option data-country_iso_code="PW" data-name="PW" value="PW">PALAU</option>
                                    <option data-country_iso_code="PS" data-name="PS" value="PS">PALESTINE, STATE OF
                                    </option>
                                    <option data-country_iso_code="PA" data-name="PA" value="PA">PANAMA</option>
                                    <option data-country_iso_code="PG" data-name="PG" value="PG">PAPUA NEW GUINEA
                                    </option>
                                    <option data-country_iso_code="PY" data-name="PY" value="PY">PARAGUAY</option>
                                    <option data-country_iso_code="PE" data-name="PE" value="PE">PERU</option>
                                    <option data-country_iso_code="PH" data-name="PH" value="PH">PHILIPPINES</option>
                                    <option data-country_iso_code="PN" data-name="PN" value="PN">PITCAIRN</option>
                                    <option data-country_iso_code="PL" data-name="PL" value="PL">POLAND</option>
                                    <option data-country_iso_code="PT" data-name="PT" value="PT">PORTUGAL</option>
                                    <option data-country_iso_code="PR" data-name="PR" value="PR">PUERTO RICO</option>
                                    <option data-country_iso_code="QA" data-name="QA" value="QA">QATAR</option>
                                    <option data-country_iso_code="RE" data-name="RE" value="RE">REUNION</option>
                                    <option data-country_iso_code="RO" data-name="RO" value="RO">ROMANIA</option>
                                    <option data-country_iso_code="RU" data-name="RU" value="RU">RUSSIAN FEDERATION
                                    </option>
                                    <option data-country_iso_code="RW" data-name="RW" value="RW">RWANDA</option>
                                    <option data-country_iso_code="SH" data-name="SH" value="SH">SAINT HELENA</option>
                                    <option data-country_iso_code="KN" data-name="KN" value="KN">SAINT KITTS AND NEVIS
                                    </option>
                                    <option data-country_iso_code="LC" data-name="LC" value="LC">SAINT LUCIA</option>
                                    <option data-country_iso_code="PM" data-name="PM" value="PM">SAINT PIERRE AND
                                        MIQUELON
                                    </option>
                                    <option data-country_iso_code="VC" data-name="VC" value="VC">SAINT VINCENT AND THE
                                        GRENADINES
                                    </option>
                                    <option data-country_iso_code="WS" data-name="WS" value="WS">SAMOA</option>
                                    <option data-country_iso_code="SM" data-name="SM" value="SM">SAN MARINO</option>
                                    <option data-country_iso_code="ST" data-name="ST" value="ST">SAO TOME AND PRINCIPE
                                    </option>
                                    <option data-country_iso_code="SA" data-name="SA" value="SA">SAUDI ARABIA</option>
                                    <option data-country_iso_code="SN" data-name="SN" value="SN">SENEGAL</option>
                                    <option data-country_iso_code="RS" data-name="RS" value="RS">SERBIA</option>
                                    <option data-country_iso_code="SC" data-name="SC" value="SC">SEYCHELLES</option>
                                    <option data-country_iso_code="SL" data-name="SL" value="SL">SIERRA LEONE</option>
                                    <option data-country_iso_code="SG" data-name="SG" value="SG">SINGAPORE</option>
                                    <option data-country_iso_code="SK" data-name="SK" value="SK">SLOVAKIA</option>
                                    <option data-country_iso_code="SI" data-name="SI" value="SI">SLOVENIA</option>
                                    <option data-country_iso_code="SB" data-name="SB" value="SB">SOLOMON ISLANDS
                                    </option>
                                    <option data-country_iso_code="SO" data-name="SO" value="SO">SOMALIA</option>
                                    <option data-country_iso_code="ZA" data-name="ZA" value="ZA">SOUTH AFRICA</option>
                                    <option data-country_iso_code="GS" data-name="GS" value="GS">SOUTH GEORGIA AND THE
                                        SOUTH SANDWICH ISLANDS
                                    </option>
                                    <option data-country_iso_code="ES" data-name="ES" value="ES">SPAIN</option>
                                    <option data-country_iso_code="LK" data-name="LK" value="LK">SRI LANKA</option>
                                    <option data-country_iso_code="SD" data-name="SD" value="SD">SUDAN</option>
                                    <option data-country_iso_code="SR" data-name="SR" value="SR">SURINAME</option>
                                    <option data-country_iso_code="SJ" data-name="SJ" value="SJ">SVALBARD AND JAN
                                        MAYEN
                                    </option>
                                    <option data-country_iso_code="SZ" data-name="SZ" value="SZ">SWAZILAND</option>
                                    <option data-country_iso_code="SE" data-name="SE" value="SE">SWEDEN</option>
                                    <option data-country_iso_code="CH" data-name="CH" value="CH">SWITZERLAND</option>
                                    <option data-country_iso_code="SY" data-name="SY" value="SY">SYRIAN ARAB REPUBLIC
                                    </option>
                                    <option data-country_iso_code="TW" data-name="TW" value="TW">TAIWAN, PROVINCE OF
                                        CHINA
                                    </option>
                                    <option data-country_iso_code="TJ" data-name="TJ" value="TJ">TAJIKISTAN</option>
                                    <option data-country_iso_code="TZ" data-name="TZ" value="TZ">TANZANIA, UNITED
                                        REPUBLIC OF
                                    </option>
                                    <option data-country_iso_code="TH" data-name="TH" value="TH">THAILAND</option>
                                    <option data-country_iso_code="TL" data-name="TL" value="TL">TIMOR-LESTE</option>
                                    <option data-country_iso_code="TG" data-name="TG" value="TG">TOGO</option>
                                    <option data-country_iso_code="TK" data-name="TK" value="TK">TOKELAU</option>
                                    <option data-country_iso_code="TO" data-name="TO" value="TO">TONGA</option>
                                    <option data-country_iso_code="TT" data-name="TT" value="TT">TRINIDAD AND TOBAGO
                                    </option>
                                    <option data-country_iso_code="TN" data-name="TN" value="TN">TUNISIA</option>
                                    <option data-country_iso_code="TR" data-name="TR" value="TR">TURKEY</option>
                                    <option data-country_iso_code="TM" data-name="TM" value="TM">TURKMENISTAN</option>
                                    <option data-country_iso_code="TC" data-name="TC" value="TC">TURKS AND CAICOS
                                        ISLANDS
                                    </option>
                                    <option data-country_iso_code="TV" data-name="TV" value="TV">TUVALU</option>
                                    <option data-country_iso_code="UG" data-name="UG" value="UG">UGANDA</option>
                                    <option data-country_iso_code="UA" data-name="UA" value="UA">UKRAINE</option>
                                    <option data-country_iso_code="AE" data-name="AE" value="AE">UNITED ARAB EMIRATES
                                    </option>
                                    <option data-country_iso_code="GB" data-name="GB" value="GB">UNITED KINGDOM</option>
                                    <option data-country_iso_code="US" data-name="US" value="US">UNITED STATES</option>
                                    <option data-country_iso_code="UM" data-name="UM" value="UM">UNITED STATES MINOR
                                        OUTLYING ISLANDS
                                    </option>
                                    <option data-country_iso_code="UY" data-name="UY" value="UY">URUGUAY</option>
                                    <option data-country_iso_code="UZ" data-name="UZ" value="UZ">UZBEKISTAN</option>
                                    <option data-country_iso_code="VU" data-name="VU" value="VU">VANUATU</option>
                                    <option data-country_iso_code="VE" data-name="VE" value="VE">VENEZUELA</option>
                                    <option data-country_iso_code="VN" data-name="VN" value="VN">VIET NAM</option>
                                    <option data-country_iso_code="VG" data-name="VG" value="VG">VIRGIN ISLANDS,
                                        BRITISH
                                    </option>
                                    <option data-country_iso_code="VI" data-name="VI" value="VI">VIRGIN ISLANDS, U.S.
                                    </option>
                                    <option data-country_iso_code="WF" data-name="WF" value="WF">WALLIS AND FUTUNA
                                    </option>
                                    <option data-country_iso_code="EH" data-name="EH" value="EH">WESTERN SAHARA</option>
                                    <option data-country_iso_code="YE" data-name="YE" value="YE">YEMEN</option>
                                    <option data-country_iso_code="ZM" data-name="ZM" value="ZM">ZAMBIA</option>
                                    <option data-country_iso_code="ZW" data-name="ZW" value="ZW">ZIMBABWE</option>
                                </select><input type="hidden" name="country_code" value=""></div>
                            <!-- <div class="mex-form-item col-md-11 col-12 p-1" style="margin-block: 10p;">
                                <label for="" class="d-none">
                                </label>
                                <input type="phone" data-ip_country_code="IN" data-message="Phone Number is required." data-extra-message="Phone Number Invalid" data-regex="" class="input_with_phone form-control mb-0 input_with_phone" name="phone_display" placeholder="" required="" value="">
                                <input type="hidden" name="phone">
                            </div> -->
                            <div class="mex-form-item col-md-11 col-12 p-1" style="margin-block: 10p;">
                                <label for="" class="d-none">
                                </label>
                                <select class="country-list">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon" selected="">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>

                                <input type="hidden" name="phone">
                            </div>
                            <!-- <div class="mex-form-item col-6 col-md-6 p-1 sms-code-container">
                                <input type="number" name="phone_sms_verif_code" class="sms_verif_code regCon oth_sp" placeholder="SMS Code" required="required" number="true" autocomplete="off" list="autocompleteOff">
                            </div>
                            <div class="mex-form-item col-6 col-md-6 p-1 send-code-container">
                                <button class="btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset " id="button-send-callme_form" type="button" title="Send Code">Send Code                                    </button>
                            </div>  -->
                            <div class="px-1 font-10" style="padding-top:20px; padding-bottom: 30px;">
                                <div class="form-check form-check-inline text-submit">
                                    <label class="form-check-label label-1 " for="terms_conditions">By submitting this form,
                                        you agree to accept the <a href="/terms-conditions.php" target="_blank" class="text-22A0C4" style="padding:0 !important;">Terms &amp; Conditions</a>,
                                        <a href="/privacy-policy.php" target="_blank" class="text-22A0C4" style="padding:0 !important;">Privacy Policy</a>, and <a href="cookie-policy.php" target="_blank" class="text-22A0C4" style="padding:0 !important;">Cookie Policy</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="text-center text-md-right col-12 col-md-11 p-0 d-flex justify-content-md-end justify-content-center">
                                <button type="submit" class="btn btn-custom-compare " onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-785e4eb336bec21b04c19cf7-="">SUBMIT DETAILS </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- News Letter Section -->
    <section class="section-news-letter">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center text-center text-md-left">
                <div class="col-md-5 text-center text-md-left">
                    <h2 class="text-uppercase text-newsletter d-flex align-items-center mb-0  justify-content-center justify-content-md-start mb-3 mb-md-0 tex-white">Subscribe to our newsletter</h2>
                </div>
                <div class="mb-3 mb-md-0 mt-2 mt-md-0 offset-md-0 col-md-4 col-10 d-flex align-items-center text-center text-md-left">
                    <input class="input-newsletter" type="text" width="100%" height="100%" placeholder="Enter Your Email Here" />
                </div>
                <div class="col-md-3 mt-3 mt-md-0 text-center text-md-center">
                    <button class="text-uppercase btn-subscribe btn btn-custom-compare text-white">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer-custom">
        <div class="container">
            <div class="col-lg-12 footer">
                <div class="row justify-content-between" style="padding-bottom: 25px; border-bottom: 1px solid #808080;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 footer_other_left align-self-center">
                        <a class="footer_logo" href="/home.php" target="_parent">
                            <img alt="logo" data-entity-type="" data-entity-uuid="" src="/public_files/images/common/logo-gold.svg" width="200" />
                        </a>
                        <a href="https://my.multibankfx.com/en/traders/login" target="_blank"><?php translate('MyMultibank'); ?></a>
                        <a href="/contact.php" target="_parent"><?php translate('Contact Us'); ?></a>
                        <a onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-785e4eb336bec21b04c19cf7-=""><?php translate('Support'); ?></a>
                        <a href="/article/hiring-now-cyprus.php" target="_parent"><?php translate('Career'); ?></a>
                        <a href="/investor-relations.php" target="_parent"><?php translate('Investor Relations'); ?></a>
                    </div>
                    <!-- <div class="footer_btn col-xs-12  col-sm-12 col-md-4 align-self-center">
                        <a href="https://www.facebook.com/multibank.official" target="_blank">
                            <img alt="facebook" data-entity-type="" data-entity-uuid="" height="30" src="/public_files/images/common/en_foote_btn_01.png" width="30" />
                        </a>
                        <a href="https://twitter.com/multibankgroup" target="_blank">
                            <img alt="twitter" data-entity-type="" data-entity-uuid="" height="30" src="/public_files/images/common/en_foote_btn_02.png" width="30" />
                        </a>
                        <a href="https://www.youtube.com/c/MultiBankGoup" target="_blank">
                            <img alt="youtube" data-entity-type="" data-entity-uuid="" height="30" src="/public_files/images/common/en_foote_btn_03.png" width="30" />
                        </a>
                        <a href="https://www.linkedin.com/company/multibankgroup/" target="_blank">
                            <img alt="linkedin" data-entity-type="" data-entity-uuid="" height="30" src="/public_files/images/common/en_foote_btn_04.png" width="30" />
                        </a>
                        <a href="https://www.instagram.com/multibank_group/" target="_blank">
                            <img alt="instagram" data-entity-type="" data-entity-uuid="" height="30" src="/public_files/images/common/en_foote_btn_05.png" width="30" />
                        </a>
                    </div> -->
                </div>
                <div class="footer_map_content d-none d-md-block" style="margin-top: 0; border-top: none">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/about.php"><strong><?php translate('About us'); ?></strong></a> <a href="/about/why-multibank-group.php" target="_parent"><?php translate('Why Multibank'); ?></a> <a href="/about/global-presence.php" target="_parent"><?php translate('Global Presence'); ?></a> <a href="/mfx/v1/about/regulations.php" target="_parent"><?php translate('Regulations'); ?></a> <a href="/about/security-of-funds.php" target="_parent"><?php translate('Security of Funds'); ?></a> <a href="/article/milestones.php" target="_parent"><?php translate('Milestones'); ?></a> <a href="/about/management.php" target="_parent"><?php translate('Management'); ?></a>
                                    <a href="/about/awards.php" target="_parent"><?php translate('Awards'); ?></a> <a href="/about/sponsorship.php" target="_parent"><?php translate('Sponsorship'); ?></a>
                                    <a href="/article/company-news.php" target="_parent"><?php translate('Company News'); ?></a> <a href="/article/hiring-now-cyprus.php" target="_parent"><?php translate('Career'); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/products.php"><strong><?php translate('Products'); ?></strong></a> <a href="/products/forex.php" target="_parent"><?php translate('Forex'); ?></a> <a href="/products/metals.php" target="_parent"><?php translate('Metals'); ?></a> <a href="/products/shares.php" target="_parent"><?php translate('Shares'); ?></a>
                                    <a href="/products/indices.php" target="_parent"><?php translate('Indices'); ?></a> <a href="/products/commodities.php" target="_parent"><?php translate('Commodities'); ?></a>

                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/platforms.php"><strong><?php translate('Platforms'); ?></strong></a>
                                    <a href="/platforms/compare-platforms.php" target="_parent"><?php translate('Compare Platforms'); ?></a>
                                    <a href="/platforms/ecn-pro.php" target="_parent">ECN Pro</a>
                                    <a href="/platforms/multibank-pro.php" target="_parent"><?php translate('MultiBank Pro'); ?> </a>
                                    <a href="/platforms/maximus.php" target="_parent"><?php translate('Maximus'); ?></a>
                                    <a href="/platforms/mt5-platform.php" target="_parent"><?php translate('MT5 Platform'); ?> </a>
                                    <a href="/platforms/social-trading.php" target="_parent">Social Trading</a>
                                    <a href="/platforms/download-center.php" target="_parent"><?php translate('Download Center'); ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/account.php"><strong><?php translate('Accounts & Funding'); ?></strong></a> <a href="/account/live-account.php" target="_parent"><?php translate('Live Account'); ?> </a> <a href="/demo-competition.php" target="_parent"><?php translate('Demo Account'); ?> </a> <a href="/account/islamic-account.php" target="_parent"><?php translate('Islamic Account'); ?> </a> <a href="/account/account-funding.php" target="_parent"><?php translate('Account Funding'); ?> </a> <a href="/account/withdrawals.php" target="_parent"><?php translate('Withdrawals'); ?></a> <a href="/account/account-forms.php" target="_parent"><?php translate('Account Forms'); ?> </a> <a href="/account/bonus.php" target="_parent"><?php translate('Bonuses'); ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/tools.php"><strong><?php translate('Tools'); ?></strong></a> <a href="/tools/trading-tools.php" target="_parent"><?php translate('Trading Tools'); ?> </a>
                                    <a href="/tools/trading-conditions.php" target="_parent"><?php translate('Trading Conditions'); ?> </a> <a href="/tools/holiday-hours-notices.php" target="_parent"><?php translate('Trading Hours &
                                    Holiday
                                    Notice'); ?></a>
                                    <a href="cfd-expiration-dates.php" target="_parent"><?php translate('CFD Expiration
                                    Dates'); ?></a>

                                    <a href="/scalping-policy.php" target="_parent"><?php translate('Scalping Policy'); ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/investor-relations.php"><strong><?php translate('Partnership'); ?></strong></a> <a href="/partnership/introducing-brokers.php" target="_parent"><?php translate('Introducing
                                    Brokers'); ?> </a>
                                    <a href="/partnership/franchise-program.php" target="_parent"><?php translate('Franchise
                                    Program'); ?> </a>
                                    <a href="/partnership/white-label.php" target="_parent"><?php translate('White Label'); ?> </a> <a href="/partnership/prime-of-primes.php" target="_parent"><?php translate('Prime of Primes'); ?></a> <a href="/partnership/cpa-affiliate-program.php" target="_parent"><?php translate('CPA Affiliate
                                    Program'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer_pa">
                    <div class="container">
                        <div class="row">
                            <img class="w-100 h-auto d-block d-lg-none d-md-none" src="/public_files/images/common/icons/payment-options.png">
                            <div class="footer-icon-list d-lg-block d-md-block d-none">
                                <img class="footer-icon" alt="nab" src="/public_files/images/common/icons/logo_footer_nab_dark.png" style="width: auto; height: 30px;">
                                <img class="footer-icon" alt="neteller" src="/public_files/images/common/icons/logo_footer_neteller.png" style="width: auto; height: 20px;">
                                <img class="footer-icon" alt="skrill" src="/public_files/images/common/icons/logo_footer_skrill.png" style="width: auto; height: 25px;">
                                <img class="footer-icon" alt="swift" src="/public_files/images/common/icons/logo_footer_swift.png" style="width: auto; height: 25px;">
                                <img class="footer-icon" alt="visa" src="/public_files/images/common/icons/logo_footer_visa.png" style="width: auto; height: 25px;">
                                <img class="footer-icon" alt="mastercard" src="/public_files/images/common/icons/logo_footer_mastercard.png" style="width: auto; height: 25px;">
                            </div>
                        </div>
                    </div>
                    <p><a href="/privacy-policy.php" target="_parent"><?php translate('Privacy Policy'); ?> </a> | <a href="/cookie-policy.php" target="_parent"> <?php translate('Cookie
                        Policy'); ?></a> | <a href="/terms-conditions.php" target="_parent"><?php translate('Terms & Conditions'); ?> </a> | <a href="/website-disclaimer.php" target="_parent"> <?php translate('Website Disclaimer'); ?> </a> | <a href="/risk-warning.php" target="_parent"> <?php translate('Risk
                        Warning'); ?></a></p>
                    <p><?php translate('Copyright © : 2005-2020 MEX Group Worldwide Limited. All rights reserved.'); ?> <?php translate('MultiBank Exchange is the
                    trading name of MultiBank Forex Exchange Corporation incorporated in California, USA with Company
                    No. 3918038.'); ?> <?php translate('MultibankFX is the trading name of Multibank FX International Corporation (BVI) Company
                    No. 1377324.'); ?> <?php translate('High Risk Investment Warning: Trading foreign exchange and/or contracts for differences
                    on margin carries a high level of risk, and may not be suitable for all investors.'); ?> <?php translate('The possibility
                    exists that you could sustain a loss in excess of your deposited funds.'); ?> <?php translate('Please refer to specific
                    risk warning for each regulated entity during the account opening process.'); ?></p>
                </div>
            </div>
        </div>
    </section>



    <!-- toggle menuu bottom -->
    <div class="slide-bar-toggle">
        <img src="/public_files/images/home/sidebar_icon/threedots.png" style="width: 30px;" />
    </div>

    <div class="slidebar-parent">
        <div class="slidebar-m">
            <a class="get-a-all-btn call-btn slidebar-pn" href="">
                <span>Make call</span>
                <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-phone-light@2x.png" width="44" /> </span>
            </a>
            <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
                <span>Whatsapp</span>
                <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-whatsapp-light@2x.png" width="44" /> </span>
            </a>
            <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#177464577a627b637e7576797c716f3974787a">
                <span>Email Us</span>
                <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-email-light@2x.png" width="44" /> </span>
            </a>
            <!-- <a class="ib-registration-btn chat-btn" onclick="$_REVECHAT_API && $_REVECHAT_API.Button.maximize().Button.maximize()" data-cf-modified-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat.png" width="50" /> </span>
        </a> -->
            <a class="ib-registration-btn chat-btn" onclick="$_REVECHAT_API && $_REVECHAT_API.Button.maximize().Button.maximize()" data-cf-modified-="">
                <span>Live chat</span>
                <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat-light@2x.png" width="44" /> </span>
            </a>
        </div>
    </div>
    <div class="slidebar-d">
        <a class="get-a-all-btn call-btn slidebar-pn-d" href="">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-phone-light.png" width="44" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-whatsapp-light.png" width="44" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#177464577a627b637e7576797c716f3974787a">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-email-light.png" width="44" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="$_REVECHAT_API && $_REVECHAT_API.Button.maximize().Button.maximize()" data-cf-modified-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat-light.png" width="44" /> </span>
        </a>
        <!-- <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat.png" width="50" /> </span>
        </a> -->
    </div>
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        let tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        let player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '100%',
                width: '100%',
                videoId: '457QPGzux9M',
                loop: true,
                autoplay: true,
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        function onPlayerStateChange(event) {
            event.target.playVideo();
        }
    </script>


    <script>
        $.get("https://ipinfo.io/json", function(response) {
            $.getJSON('/public_files/static_data/contact_no.json', function(contacts) {
                contacts.map((data, index) => {
                    if (data['Country SN'].toLowerCase() == response.country.toLowerCase()) {
                        $('#header-pn').html(`${data.Phone}`);
                        $('#header-pn').prepend('<i class="fa fa-phone">&nbsp;</i>')
                        $('#header-pn, .slidebar-pn').attr('href', `tel:${data.Phone}?call`);
                        $('.slidebar-pn-d').attr('href', `tel:${data.Phone}?call`);
                    }
                });
                if ($('#header-pn').html() == "") {
                    $('#header-pn, .slidebar-pn').html("+1 213 992 4748");
                    $('#header-pn, .slidebar-pn').prepend('<i class="ti-headphone-alt">&nbsp;</i>')
                    $('#header-pn, .slidebar-pn').attr('href', `tel:'+1 213 992 4748?call`);
                    $('.slidebar-pn-d').attr('href', `tel:'+1 213 992 4748?call`);
                }
            });
        }, "jsonp");
    </script>
    <script type="text/javascript" async>
        url = new URL(window.location.href);
        if (!url.searchParams.get('is_iframe')) {
            window.__lc = window.__lc || {};
            window.__lc.license = 3413162;
            window.__lc.chat_between_groups = false;
            window.__lc.group = 2;

            function initliveChat() {
                let lc = document.createElement('script');
                lc.type = 'text/javascript';
                lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                let s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(lc, s);
                window.LC_API = window.LC_API || {};
                LC_API.on_before_load = function() {
                    LC_API.hide_chat_window();
                    LC_API.on_chat_window_minimized = function() {
                        setTimeout(function() {
                            LC_API.hide_chat_window();
                        }, 200);
                    }
                }
            };

            setTimeout(() => initliveChat(), 10000);
        }
    </script>

    <!-- Start of REVE Chat Script-->
    <script type='text/javascript'>
        function initRevchat() {
            window.$_REVECHAT_API || (function(d, w) {
                let r = $_REVECHAT_API = function(c) {
                    r._.push(c);
                };
                w.__revechat_account = '6598532';
                w.__revechat_version = 2;
                r._ = [];
                let rc = d.createElement('script');
                rc.type = 'text/javascript';
                rc.async = true;
                rc.setAttribute('charset', 'utf-8');
                rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?' + new Date().getTime();
                let s = d.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(rc, s);
            })(document, window);
            $_REVECHAT_API && $_REVECHAT_API.Button.hide();
            $_REVECHAT_API && $_REVECHAT_API.Button.onMinimize(function() {
                debugger
                $_REVECHAT_API.Button.hide();
            })
        }

        setTimeout(() => {
            initRevchat();

        }, 5000)
    </script>
    <!-- End of REVE Chat Script -->
    <script type="text/javascript" async>
        function init_google(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            let f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        }
        setTimeout(function() {
            init_google(window, document, 'script', 'dataLayer', 'GTM-KNJQJTN')
        }, 10000)
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->


    <!-- Custom JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/public_files/static_js/swiper-4.3.5.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.basic').slick({
            // fade: true,
            // cssEase: 'ease-in-out',
            arrows: true,
            centerMode: false,
            draggable: true,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            touchThreshold: 1000,
        });
        $('.platform-slide').slick({
            // fade: true,
            arrows: true,
            autoplay: false,
            autoplayspeed: 1000,
            centerPadding: '0',

            centerMode: true
        });
        $('.platform-slide-2').slick({
            // fade: true,
            arrows: true,
            autoplay: false,
            slideToShow: 1,
            SlideToScroll: 1,
            centerPadding: '0',
        });
        $('#home-carousal-banner').slick({
            centerMode: false,
            slidesToShow: 2,
            infinite: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,

        });
        $('#home-carousal-banner-1').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 5,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 2
                    }
                }
            ]

        });

        let index_swiper = new Swiper('#swiper-container-lp', {
            navigation: {
                nextEl: '#swiper-container-lp .swiper-button-next',
                prevEl: '#swiper-container-lp .swiper-button-prev',
            },
            pagination: {
                clickable: true,
                el: '#swiper-container-lp .swiper-pagination',
            },
            loop: true,
            autoplay: {
                delay: 5000
            },
            updateOnImagesReady: true,
            paginationClickable: true,
            spaceBetween: 0,
            centeredSlides: true,
            autoplayDisableOnInteraction: false,
            effect: 'coverflowEffect',
            zoom: {
                maxRatio: 5,
            },
            coverflowEffect: {
                rotate: 30,
                slideShadows: false,
            },
        });

        // banner slider under Hero slider
        let acc = $('.panel-heading');
        let panel = $('.panel-collapse');
        acc.click(function() {
            let currEl = $(this);
            for (let i = 0; i < panel.length; i++) {
                if (!$(panel[i]).is(currEl.next()) && $(panel[i]).hasClass("show")) {
                    $(panel[i]).removeClass("show in");
                }
            }
        })
    </script>
    <script type="text/javascript" src="/public_files/static_js/app_home.js"></script>
    <script src="/public_files/static_js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public_files/static_js/app.js"></script>
    <script type="text/javascript" src="js/home.js"></script>


</body>

</html>