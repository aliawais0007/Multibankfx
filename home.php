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
    <div class="swiper-container" id="swiper-container-lp">
        <div class="swiper-wrapper">
            <div class="swiper-slide home-page" style="overflow: hidden;">
                <div class="min1 d-none d-md-block" style="background:url('/public_files/images/home/home-banner-multibank-industry-leader-02.jpg')">
                    <!-- <div id="player" style="pointer-events: none;"></div> -->
                    <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/457QPGzux9M?rel=0?version=3&amp;autoplay=1&amp;controls=0&amp;&amp;showinfo=0&amp;loop=1&amp;modestbranding=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <div class="row flex-nowrap flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                        <div class="col-12 flex-none d-flex justify-content-center flex-column">
                            <span class="home-banner-title1">WORLD'S NO.1 FOREX & CFD BROKER</span>
                            <span class="home-banner-title2">Established In 2005</span>
                        </div>
                        <div class="col-12 d-flex flex-none justify-content-center demo-btn-custom ">
                            <div class="row justify-content-center align-items-center flex-column flex-md-row " style="height:100%">
                                <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">Live Trading<br><span class="banner-btn">Free $100 Credit</span></a>
                                <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Simulated Trading<br><span class="banner-btn">Real Market Conditions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-1.jpg'); width:100%">
                    <img src="/public_files/images/home/mobile-banner-2.jpg" style="width:100%" />
                    <div class="row flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                        <div class="col-12 d-flex justify-content-center flex-column">
                            <span class="home-banner-title1">WORLD'S NO.1 FOREX & CFD BROKER</span>
                            <span class="home-banner-title2">Established In 2005</span>
                        </div>
                        <div class="col-12 d-flex flex-none justify-content-center demo-btn-custom ">
                            <div class="row justify-content-center align-items-center flex-column flex-md-row " style="height:100%">
                                <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">Live Trading<br><span class="banner-btn">Free $100 Credit</span></a>
                                <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Simulated Trading<br><span class="banner-btn">Real Market Conditions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide home-page" style="overflow: hidden;">
                <div class="min1 d-none d-md-block" style="background-image:url('/public_files/images/home/20-bonusbanner.jpg'); width:100%">
                    <div class="row flex-nowrap flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                        <div class="col-12 d-flex justify-content-center flex-column">
                            <span class="home-banner-title1 text-uppercase">20% BONUS ON DEPOSIT </span>
                            <span class="home-banner-title2">Both Tradable & Withdrawable</span>
                        </div>
                        <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                            <div class="row justify-content-center align-items-center flex-column flex-md-row " style="height:100%">
                                <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">Claim Bonus<br><span class="banner-btn">For MT4 & MT5 Platforms</span></a>
                                <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Simulated Trading<br><span class="banner-btn">Everything You Need To Know</span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-2.jpg');width:100%">
                    <img src="/public_files/images/home/20-bonusbanner-1258x1920.jpg" style="width:100%" />
                    <div class="row justify-content-center align-items-center slider-content swiper-zoom-container">
                        <div class="col-12 d-flex justify-content-center flex-column">
                            <span class="home-banner-title1 text-uppercase">20% BONUS ON DEPOSIT</span>
                            <span class="home-banner-title2">Both Tradable And withdrawable</span>
                        </div>
                        <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                            <div class="row justify-content-center align-items-center flex-column flex-md-row " style="height:100%">
                                <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase">Claim Bonus<br><span class="banner-btn">For MT4 & MT5 Platforms</span></a>
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
    <div class="main-banner d-block d-md-none">
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
    </div>
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

    <div class="animate__animated animate__bounce animate__slow container-fluid hero-container d-none d-md-flex">
        <div class="container">
            <div class="row hero-box">
                <div>
                    <h4 class="h4-hero-box">Paid Capital</h4><span class="span-hero">$320m</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Leverage Up To</h4><span class="span-hero">500:1</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Tight Spreads</h4><span class="span-hero">0.0 pips</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Globl Awards </h4><span class="span-hero">40+</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Trading Instruments</h4><span class="span-hero">1000+</span>
                </div>
            </div>
        </div>
    </div>


    <section class="our-product">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h2 class="text-center text-uppercase  h2-product mb-3">OUR PRODUCTS</h2>
                </div>
            </div>
            <div class="row cards-product">
                <div class="col-md-4 col-sm-6 col-12 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-fx.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">Forex</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white ">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-metal.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">METALS</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-shares.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">SHARES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-commodities.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">COMMODITIES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-indices.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">INDICES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-social-trading.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">SOCIAL TRADING</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-white-label.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">WHITE LABEL</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-prime-of-primes.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">PRIME OF PRIMES</h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12 col-sm-6 mb-1">
                    <div class="card flex-row">
                        <div class=" custom-header-product border-0">
                            <img src="/public_files/images/common/product-icons/icon-crypto-wallet.png" class="custom-product-img" alt="">
                        </div>
                        <div class="card-block custom-block-product px-2">
                            <h4 class="card-title">CRYPTO WALLET<span class="card-span">Coming Soon</span></h4>
                            <p class="card-product-p">Have the courage to follow your heart and intuition. They somehow already know what you truly want.</p>
                            <a href="#" class="btn-product text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
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
                    <h2 class="text-center text-uppercase  h2-platform">Platforms</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav class="nav-1">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="custom-nav-1-link nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">MT5</a>
                            <a class="custom-nav-1-link nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">MT4</a>
                            <a class="custom-nav-1-link nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">iMultiBank</a>
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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 mb-3 br-2 d-md-block d-none ">
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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                                        <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>

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
                    <h2 class=" text-uppercase h2-about pb-5">ABOUT MULTIBANK</h3>

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
                    <h2 class="text-center text-uppercase h2-about pb-5">GLOBAL PRESENCE</h3>

                        <div class="basic">
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-uae.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center">United Arab Emirates</h4>
                                    <h5 class="pt-4">MultiBank MENA</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Dubai Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global ">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-turkey.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center">TURKEY</h4>
                                    <h5 class="pt-4">MultiBank TURKEY</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Turkey Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-kuwait.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center">KUWAIT</h4>
                                    <h5 class="pt-4">MultiBank </h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Kuwait Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-germany.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center">GERMANY</h4>
                                    <h5 class="pt-4">MultiBank GERMANY</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>Germany Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more">VIEW ALL OFFICES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card-global">
                                <img class="img-responsive custom-img-plat" src="/public_files/images/common/country/icon-flags/flag-china.png" alt="Card image">
                                <div class="card-body text-center">
                                    <h4 class="card-title text-center">CHINA</h4>
                                    <h5 class="pt-4">MultiBank CHINA</h5>
                                    <p> Registered as: <br>MultiBank FX International Corporation <br>China Branch <br>License Number: 825403 <br>Phone: +971 4 875 1311</p>
                                    <div class="text-center pt-3">
                                        <a href="#" class="btn btn-learn-more">VIEW ALL OFFICES</a>
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
    <section class="about-page-awards " id="about-page-awards" style="padding:30px 0; background-image: none;background-position: top;background-size: cover;">
        <div class="container index-awards">
            <div class="row">
                <div class="col-md-12 text-center mex-m-b-30 d-none d-md-block d-lg-block">

                    <h2 class="mex-h1 text-white text-center mx-auto">Awards</h2>
                    <div class="mex-content mex-content col-md-10 font-24 mx-auto d-none">
                        <p class=" lead text-fff mb15 text-center font-24 ">Find out more about our awards and
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
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships section -->
    <section class="bg-gray p0 section-partnerships">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h3 class="mex-h1 mb-0 text-1e32a3 text-center">Partnership</h3>
                </div>
                <div class="col-12 col-md-12 col-xl-6 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/introducing-brokers">
                            <img alt="Introducing Brokers" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-introducing-brokers.jpg">
                            <div class="card-content text-left">
                                <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                    Introducing Brokers
                                </div>
                            </div>
                            <div class="partnership-cont">
                                <h5>Introducing Brokers</h5>
                                <p> Join MultiBank’s network
                                    of over 30,000
                                    Introducing Brokers and enjoy the highest levels of personalized customer care.
                                </p>
                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-12 col-xl-6 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/franchise-program.php">
                            <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-franchise-program.jpg" alt="Franchise Program">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                    Franchise Program </div>
                            </div>
                            <div class="partnership-cont">
                                <h5>Franchise Program</h5>
                                <p>Open offices under the MultiBank name and obtain exclusivity of our products and
                                    services in the
                                    region
                                </p>
                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/white-label.php">
                            <img alt="White Label" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-white-label.jpg">

                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                    White Label </div>

                            </div>
                            <div class="mex-content mb0 text-overflow-3 partnership-cont">
                                <h5>White Label</h5>
                                <p>Become MultiBank’s White Label Partner and have your own proprietary trading system,
                                    branded in your
                                    corporate name
                                </p>
                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/prime-of-primes.php">
                            <img alt="Prime of Primes" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-prime-of-primes.jpg">
                            <div class="card-content text-left">
                                <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                                    Prime of Primes </div>
                            </div>
                            <div class="partnership-cont">
                                <h5>Prime of Primes</h5>
                                <p>
                                    A to Z prime technology solution for MultiBank’s institutional partners
                                </p>
                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block partnerships-div">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/cpa-affiliate-program.php">
                            <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-cpa-affiliate-program.jpg" alt="CPA Affiliate Program">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                    CPA Affiliate Program </div>
                            </div>
                            <div class="partnership-cont">
                                <h5>CPA Affiliate Progra</h5>
                                <p>MultiBank’s CPA Affiliate Program allows digital marketers to earn commission for
                                    every active trader
                                    they introduce
                                </p>
                                <a href="#" class="btn-product-partnerships text-white">Learn More <i class="fa fa-angle-right text-white"></i></a>
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
                        <img alt="Introducing Brokers" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-introducing-brokers.jpg">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                Introducing Brokers </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="/partnership/introducing-brokers.php" class="btn btn-mex text-white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img">
                    <div class="card">
                        <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-franchise-program.jpg" alt="Franchise Program">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                Franchise Program </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="/partnership/franchise-program.php" class="btn btn-mex text-white">Learn
                                    More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img">
                    <div class="card">
                        <img alt="White Label" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnerships-prime-of-primes.jpg">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                White Label </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="/partnership/white-label.php" class="btn btn-mex text-white">Learn More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img d-none">
                    <div class="card">
                        <img alt="Prime of Primes" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_prime_of_primes@2x.png">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                                Prime of Primes </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="/partnership/prime-of-primes.php" class="btn btn-mex text-white">Learn
                                    More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 text-white text-center">
                    <h2 class="text-uppercase  h2-contact mb-3 ">contact us</h2>
                    <p class="pb-5 pt-3">For any questions or inquiries, please do not hesitate to contact our 24/5 professional multilingual Customer Service</p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 div-call">
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

                    <h4 class="contact-h4 mb-4 mt-5">eMAIL US</h4>
                    <div class="contact-email custom-email">
                        <a class="text-000033" href="mailto:cs@multibankfx.com">cs@multibankfx.com</a>
                    </div>
                    <ul class="contact-social-media d-none d-md-block">
                        <li class="social-contact">
                            <div class="mex-h3 mb-4 mt-5 ">Follow us on</div>
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
                <div class="col-md-8 col-12 div-form">
                    <h4 class="contact-h4 mb-4">Get a Call back</h4>
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
                                    <label class="mb-0 ml-1" for="">INDIVIDUAL</label>
                                </div>
                            </div>
                            <div class="mex-form-item col-6 col-md-3 p-1 cb-partnership font-16" style="
                            margin-bottom: 10px;
                        ">

                                <div class="form-check form-check-inline"><input data-message="" data-extra-message="Full Name Invalid." class="   " name="account_type" type="radio" required="" value="2">
                                    <label class="mb-0 ml-1" for="">PARTNERSHIP</label>
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
                            <div class="text-right" style="position: absolute;
    bottom: -11%;
    /* right: 10%; */
    width: 100%;
    display: flex;
    justify-content: center;">
                                <button type="submit" class="btn btn-custom-compare " onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-785e4eb336bec21b04c19cf7-="">SUBMIT DETAILS </button>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <section>
        <div class="container">
            <div class="col-lg-12 footer">
                <div class="row justify-content-between" style="padding-bottom: 25px; border-bottom: 1px solid #808080;">
                    <div class="col-xs-12 col-sm-12 col-md-8 footer_other_left align-self-center">
                        <a class="footer_logo" href="/home.php" target="_parent">
                            <img alt="logo" data-entity-type="" data-entity-uuid="" src="" width="200" />
                        </a>
                        <a href="https://my.multibankfx.com/en/traders/login" target="_blank"><?php translate('MyMultibank'); ?></a>
                        <a href="/contact.php" target="_parent"><?php translate('Contact Us'); ?></a>
                        <a onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-785e4eb336bec21b04c19cf7-=""><?php translate('Support'); ?></a>
                        <a href="/article/hiring-now-cyprus.php" target="_parent"><?php translate('Career'); ?></a>
                        <a href="/investor-relations.php" target="_parent"><?php translate('Investor Relations'); ?></a>
                    </div>
                    <div class="footer_btn col-xs-12  col-sm-12 col-md-4 align-self-center">
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
                    </div>
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
                            <img class="w-100 h-auto d-block d-lg-none" src="/public_files/images/common/icons/payment_partners-201906.jpg">
                            <div class="footer-icon-list d-none d-lg-block">
                                <img class="footer-icon" alt="nab" src="" style="width: auto; height: 30px;">
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
                <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-phone.png" width="50" /> </span>
            </a>
            <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
                <span>Whatsapp</span>
                <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-whatsapp.png" width="50" /> </span>
            </a>
            <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#177464577a627b637e7576797c716f3974787a">
                <span>Email Us</span>
                <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-email.png" width="50" /> </span>
            </a>
            <!-- <a class="ib-registration-btn chat-btn" onclick="$_REVECHAT_API && $_REVECHAT_API.Button.maximize().Button.maximize()" data-cf-modified-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat.png" width="50" /> </span>
        </a> -->
            <a class="ib-registration-btn chat-btn" onclick="$_REVECHAT_API && $_REVECHAT_API.Button.maximize().Button.maximize()" data-cf-modified-="">
                <span>Live chat</span>
                <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat.png" width="50" /> </span>
            </a>
        </div>
    </div>
    <div class="slidebar-d">
        <a class="get-a-all-btn call-btn slidebar-pn-d" href="">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#177464577a627b637e7576797c716f3974787a">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="$_REVECHAT_API && $_REVECHAT_API.Button.maximize().Button.maximize()" data-cf-modified-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat.png" width="50" /> </span>
        </a>
        <!-- <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/icon-chat.png" width="50" /> </span>
        </a> -->
    </div>
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

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
                        $('#header-pn').prepend('<i class="ti-headphone-alt">&nbsp;</i>')
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
                var lc = document.createElement('script');
                lc.type = 'text/javascript';
                lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0];
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
                var r = $_REVECHAT_API = function(c) {
                    r._.push(c);
                };
                w.__revechat_account = '6598532';
                w.__revechat_version = 2;
                r._ = [];
                var rc = d.createElement('script');
                rc.type = 'text/javascript';
                rc.async = true;
                rc.setAttribute('charset', 'utf-8');
                rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?' + new Date().getTime();
                var s = d.getElementsByTagName('script')[0];
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
            var f = d.getElementsByTagName(s)[0],
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

        var index_swiper = new Swiper('#swiper-container-lp', {
            navigation: {
                nextEl: '#swiper-container-lp .swiper-button-next',
                prevEl: '#swiper-container-lp .swiper-button-prev',
            },
            pagination: {
                clickable: true,
                el: '#swiper-container-lp .swiper-pagination',
            },
            loop: true,
            // autoplay: {
            //     delay: 5000
            // },
            updateOnImagesReady: true,
            paginationClickable: true,
            spaceBetween: 30,
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


        var acc = document.getElementsByClassName("accordion");
        var panel = document.getElementsByClassName('panel-collapse');

        for (var i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                var setClasses = !this.classList.contains('active');
                setClass(acc, 'active', 'remove');
                setClass(panel, 'show', 'remove');

                if (setClasses) {
                    this.classList.toggleClass("active");
                    this.nextElementSibling.classList.toggle("show");
                }
            }
        }

        function setClass(els, className, fnName) {
            for (var i = 0; i < els.length; i++) {
                els[i].classList[fnName](className);
            }
        }
    </script>

    <script type="text/javascript" src="public_files/static_js/app.js"></script>
    <script type="text/javascript" src="public_files/static_js/app_home.js"></script>
    <script src="/public_files/static_js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/home.js"></script>


</body>

</html>