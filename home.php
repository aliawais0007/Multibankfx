<?php
$allnews = get_news();
$itemc = "";
$item = "";
$itemb = "";
$page = "";
foreach ($allnews as $item) {
    $news .= '
<li class="row mx-0 mex-new-content swiper-slide" style="height: 133.75px;">
                                            <div class="mex-h3 col-1 pl-4 text-left">2020-02-18</div>
                                            <div class="mex-new-desc mex-content col-8"><a
                                                    href="/article/news-detail.php?id=' . $item->id . '"
                                                    class="text-222 mex-clamp-4 text-left pl-3">' . $item->title . '</a></div>
                                            <div class="mex-new-img col-3"><img class="mex-img-cover lazyloadXXX"
                                                    src="' . $item->post_image . '"
                                                    alt="' . $item->main_title . '">
                                            </div>
                                        </li>
';
}
?>
<!DOCTYPE html>
<html lang='en'>

<?php include_from_root('website_template/head.php'); ?>

<body>
    <?php include_from_root('website_template/header_and_menu.php'); ?>
    <style>
        .nav-item:hover .nav-menu.py-3{
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
                <a>
                    <div class="min1 d-none d-md-block" style="background-image:url('/public_files/images/home/home-banner-multibank-est-in-2005-01.jpg');">
                        <div class="animate__animated animate__bounce row flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                            <span class="home-banner-title1">World's No.1 Forex & CFD Broker</span>
                            <span class="home-banner-title2">ESTABLISHED IN 2005</span>
                        </div>
                    </div>
                    <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-1.jpg');">
                        <img src="/public_files/images/home/mobile-banner-1.jpg" />
                        <div class="row flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                            <span class="home-banner-title1">World's No.1 Forex & CFD Broker</span>
                            <span class="home-banner-title2">ESTABLISHED IN 2005</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide home-page" style="overflow: hidden;">
                <a>
                    <div class="animate__animated animate__bounce min1 d-none d-md-block" style="background-image:url('/public_files/images/home/home-banner-multibank-industry-leader-02.jpg');">
                        <div class="row flex-column justify-content-center align-items-center slider-content swiper-zoom-container">
                            <span class="home-banner-title1 text-uppercase">Enjoy the highest level of funds security</span>
                            <span class="home-banner-title2">Trade With The Industry Leader</span>
                        </div>
                    </div>
                    <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-2.jpg');">
                        <img src="/public_files/images/home/mobile-banner-2.jpg" />
                        <div class="row flex-column justify-content-center align-items-center slider-content">
                            <span class="home-banner-title1 text-uppercase">Enjoy the highest level of funds security</span>
                            <span class="home-banner-title2">Trade With The Industry Leader</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide home-page" style="overflow: hidden;">
                <a>
                    <div class="animate__animated animate__bounce min1 d-none d-md-block" style="background-image:url('/public_files/images/home/home-banner-multibank-mt5.jpg');">
                        <div class="row flex-column justify-content-center align-items-center slider-content">
                            <span class="home-banner-title1">Improved trading functionalities</span>
                            <span class="home-banner-title2">MULTIBANK OFFERS MT5 PLATFORM</span>
                        </div>
                    </div>
                    <div class="min2 d-block d-md-none" style="background-image:url('/public_files/images/home/mobile-banner-3.jpg');">
                        <img src="/public_files/images/home/mobile-banner-3.jpg" />
                        <div class="row flex-column justify-content-center align-items-center slider-content">
                            <span class="home-banner-title1">Improved trading functionalities</span>
                            <span class="home-banner-title2">MULTIBANK OFFERS MT5 PLATFORM</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets"></div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="container-fluid hero-container d-none d-md-flex">
            <div class="row hero-box">
                <div>
                    <h4 class="h4-hero-box">Paid <br>Capital</h4><span class="span-hero">$320m</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Leverage <br> Up To</h4><span class="span-hero">500:1</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Tight <br>Spreads</h4><span class="span-hero">0.0 pips</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Globl <br>Awards </h4><span class="span-hero">40+</span>
                </div>
                <div>
                    <h4 class="h4-hero-box">Trading <br>Instruments</h4><span class="span-hero">1000+</span>
                </div>

            </div>
        </div>



        <div class="home-banner-container">
            <div class="row">
                <!-- <span class="home-banner-title1">ESTABLISHED IN 2005</span>
                <span class="home-banner-title2">World's No.1 Forex & CFD Broker</span> -->
                <div class="col-12 d-flex justify-content-center demo-btn-custom ">
                    <div class="row justify-content-center align-items-center flex-column flex-md-row" style="height:100%">
                    <a href="/account/live-account.php" class="home-banner-btn2 text-uppercase" >Open Live Account</a>
                        <a href="/account/demo-account.php" class="home-banner-btn1 text-uppercase">Free Demo Account</a>
                    </div>
                    <!-- <span class="home-banner-small-text">All trading involves risk. Losses can exceed deposits.</span> -->
                </div>


            </div>
        </div>
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

    <section class="bg-gray p0 COP-section">
        <div class="container ">
            <div class="row d-none">
                <div class="col-12">
                    <h3 class="mex-h1 text-1e32a3 mex-m-t-50 mex-m-b-40 text-center ">Our Products</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h3 class="mex-h1 text-1e32a3 text-center" style="margin: 30px 0px 20px 0;">Choose Your Product</h3>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="products/forex.php">
                            <div class="card-img-box">
                                <img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_forex.jpg" alt="Forex">
                            </div>
                            <div class="card-content bg-white card-content-mobile">
                                <div class="mex-h3 text-overflow-1 ">
                                    Forex </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Trade forex on the largest market in the world </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30 d-none d-md-block">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="products/metals.php">
                            <div class="card-img-box">
                                <img alt="Metals" class="card-img mex-img-cover  lazyloadXXX" src="/public_files/images/home/home_product_metals.jpg">
                            </div>
                            <div class="card-content bg-white  card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    Metals
                                </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Trade gold and silver on the tightest spreads
                                </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30 ">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="products/shares.php">
                            <div class="card-img-box">
                                <img alt="Shares" class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_shares.jpg">
                            </div>
                            <div class="card-content bg-white  card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    Shares </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Trade shares of top performing companies from around the world </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30 ">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="products/indices.php">
                            <div class="card-img-box">
                                <img alt="Indices" class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_indices.jpg">
                            </div>
                            <div class="card-content bg-white card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    Indices </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Trade global stock indices such as US Wall Street 30, NASDAQ, and German DAX </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="mx-auto col-12 row justify-content-sm-start justify-content-lg-center"></div>
                <div class="col-4 col-md-6 col-lg-3  mex-m-b-30  ">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="products/commodities.php">
                            <div class="card-img-box">
                                <img alt="Commodities" class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_commodities.jpg">
                            </div>
                            <div class="card-content bg-white  card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    Commodities </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Trade commodity CFDs such as natural gas, crude oil and copper </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="partnership/white-label.php">
                            <div class="card-img-box">
                                <img alt="white label" class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_white_label.jpg">
                            </div>
                            <div class="card-content bg-white  card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    White Label </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    MultiBank Group offers a full white label technology package for institutional customer </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30 d-none d-md-block">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="partnership/prime-of-primes.php">
                            <div class="card-img-box">
                                <img alt="Prime of Primes" class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_prime.jpg">
                            </div>
                            <div class="card-content bg-white  card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    Prime of Primes </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Complete A to Z White Label solution for MultiBank’s institutional partners </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-4 col-md-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr box-animate section-products">
                        <a href="social-trading.php">
                            <div class="card-img-box">
                                <img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_product_social_trading.jpg" alt="Social Trading Platform">
                            </div>
                            <div class="card-content bg-white  card-content-mobile">
                                <div class="mex-h3 text-overflow-1">
                                    Social Trading </div>
                                <div class="mex-content text-overflow-2 mb0 d-md-block d-none">
                                    Join thousands of investors and earn money by following our successful traders! No knowledge or
                                    experience required </div>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
        </div>
        <!--<div class="col-12 py-5 mb-5 d-block d-md-none" style=" display:none !important; background-image: url('public_files/images/home/bg_our_product.png')">-->
        <div class="col-12 py-5 mb-5 d-block d-md-none" style=" display:none !important; ">
            <div class="d-flex mex-h3 text-1e32a3">
                <ul class="mr-2" style="list-style: disc;">
                    <li>Forex</li>
                    <li>Metals</li>
                    <li>Shares</li>
                    <li>Indices</li>
                </ul>
                <ul style="list-style: disc;">
                    <li>Commodities</li>
                    <li>Prime of Primes</li>
                    <li>Social Trading Platform</li>
                </ul>
            </div>
            <a class="btn btn-mex text-fff" style="margin-left: 20px; padding: 10px 20px;" href="products.php">Learn More</a>
        </div>
    </section>
    <!-- <section class="p0 mex-block-full sectiopn-trade-with-confidence d-md-block d-none">
        <div class="mex-h1 text-1e32a3 text-center uppercase mex-m-t-50 mex-m-b-30">Trade with confidence</div>
        <div class="container trade-confidence-container">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-12">
                    <div class="row trade-with-confidence-card ">
                        <img class="mex-img-cover px-0 lazyloadXXX" src="/public_files/images/home/home_trade_start_trading.png " alt="Start Trading">
                        <div class="col-12 both-content mx-lg-4 my-lg-5">
                            <div class="col-lg-8 col-12 px-3 px-3 p-lg-0">
                                <div class="mex-h2 mex-m-b-10 start-trading-mobile-h">Start Trading</div>
                                <div class="mex-content mex-m-b-15 start-trading-mobile-desc">
                                    MultiBank offers a range of award-winning MT4 platforms for you to trade on. </div>
                                <div class="mex-content mex-m-b-15">
                                    <strong>Open an account &amp; start trading today!</strong>
                                </div>
                                <div class="live-account-wrapper">
                                    <a href="/account/live-account.php" class="btn btn-mex-red mex-m-r-15 mex-m-b-15 col-md-6 col-xs-12 start-trading-mobile-btn-1"><i class="fa fa-user mex-m-r-5" aria-hidden="true"></i>Live Account</a>
                                    <a href="/account/demo-account.php" class="btn btn-mex-blue mex-m-r-15 mex-m-b-15 col-md-6 col-xs-12 start-trading-mobile-btn-2"><i class="fa fa-desktop mex-m-r-5" aria-hidden="true"></i>Demo Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row trade-with-confidence-card dnone-mobile">
                        <img style="z-index: -1;" class="mex-img-cover col-12 px-0 lazyloadXXX" src="/public_files/images/home/home_trade_fund_account.jpg" alt="Fund Your Account">
                        <div class="col-12 both-content mx-lg-4 my-lg-5 px-3 px-3 p-lg-0">
                            <div class="mex-h2 mex-m-b-15 text-fff">Fund Your Account</div>
                            <div class="row">
                                <div class="mex-content mex-m-b-15 text-fff col-md-8 col-12 text-md-left">
                                    Choose from a selection of instant, simple and secure payment options for deposits
                                    and withdrawals.
                                </div>
                            </div>
                            <a href="/account/account-funding.php" class="btn btn-mex mex-m-r-15 mex-m-b-15" style="margin-top: 38px;">Deposit Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="d-md-none d-block twc-section">
        <div class="mex-h1 text-1e32a3 text-center uppercase mt-3">Trade with confidence</div>
        <div class="container twc-mobile" style="background-size: cover;">
            <!-- <div class="container" style="background-image: url(public_files/images/home/home_trade_start_trading.png);
                                      background-size: cover;"> -->
            <div class="row">
                <div style="
                        height: 100%;
                        width: 100%;
                        background-color: rgba(255, 255, 255, 0.5);
                        position: absolute;
                        " class="col-12"></div>
                <div class="col-12 py-5  d-block" style="background-size: cover;background-color: rgba(0, 0, 0, 0.5) !important;">
                    <div class="col-lg-8 col-12 p-lg-0  mex-m-b-15 text-left">
                        <h3 class="uppercase mex-m-b-10">Start Trading</h3>
                        <span class="mex-content">MultiBank offers a range of award-winning MT4 platforms for you to
                            trade on.</span>
                    </div>
                    <div class="col-12">
                        <a href="/account/live-account.php" class="btn btn-mex-red mex-m-b-15 " style="min-width: initial; padding: 13px 10px;"><i class="fa fa-user mex-m-r-5" aria-hidden="true"></i>Live Account</a>
                        <a href="/account/demo-account.php" class="btn btn-mex-blue mex-m-b-15" style="min-width: initial; padding: 13px 10px;"><i class="fa fa-desktop mex-m-r-5" aria-hidden="true"></i>Demo Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p0 bg-white d-none d-md-block">
        <div class="col-md-12">
            <h3 class="mex-h1 text-1e32a3 text-center mex-m-t-50 mex-m-b-none " style="margin:30px 0 !important">Bonuses </h3>
            <!-- <p class="lead text-222 mex-m-b-30 text-center">Find out more about our latest bonus and promotions for
                Introducing Brokers &amp; individual clients alike!</p> -->
        </div>
        <div class="swiper-container swiper-container-horizontal" id="swiper-container-2">
            <div class="swiper-wrapper" style="transform: translate3d(-2932px, 0px, 0px); transition-duration: 300ms;">
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 1436px; margin-right: 30px;">
                    <a href="/account/bonus-ib.php">
                        <div class="min1 d-none d-lg-block">
                            <img class="lazyloadXXX" src="/public_files/images/home/home_bonus_5000.jpg" alt="image">
                        </div>
                        <div class="min2 d-block d-lg-none">
                            <img class="lazyloadXXX" src="/public_files/images/home/home_bonus_5000.jpg" alt="image">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 1436px; margin-right: 30px;">
                    <a href="/account/bonus.php">
                        <div class="min1 d-none d-lg-block">
                            <img class=" lazyloadXXX" src="/public_files/images/home/home_bonus_extra.jpg" alt="image">
                        </div>
                        <div class="min2 d-block d-lg-none">
                            <img class="lazyloadXXX" src="/public_files/images/home/home_bonus_extra.jpg" alt="image">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1436px; margin-right: 30px;">
                    <a href="/account/bonus.php">
                        <div class="min1 d-none d-lg-block">
                            <img class=" lazyloadXXX" src="/public_files/images/home/home_bonus_400.jpg" alt="image">
                        </div>
                        <div class="min2 d-block d-lg-none">
                            <img class="lazyloadXXX" src="/public_files/images/home/home_bonus_400.jpg" alt="image">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 1436px; margin-right: 30px;">
                    <a href="/account/bonus-ib.php">
                        <div class="min1 d-none d-lg-block">
                            <img class=" lazyloadXXX" src="/public_files/images/home/home_bonus_5000.jpg" alt="image">
                        </div>
                        <div class="min2 d-block d-lg-none">
                            <img class="lazyloadXXX" src="/public_files/images/home/home_bonus_5000.jpg" alt="image">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 1436px; margin-right: 30px;">
                    <a href="/account/bonus.php">
                        <div class="min1 d-none d-lg-block">
                            <!--<img class="lazyloadXXX" src="/public_files/images/about_us/global_presence/home_bonus_extra.png"-->
                            <!--    alt="image">-->
                        </div>
                        <!-- <div class="min2 d-block d-lg-none"> -->
                            <!--<img class="lazyloadXXX" src="/public_files/images/about_us/global_presence/home_bonus_extra.png"-->
                            <!--    alt="image">-->
                        <!-- </div> -->
                    </a>
                </div>
            </div>
            <!-- <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets">
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
            </div> -->
            <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide">
            </div>
            <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide">
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>

    <!-- downlaod platforms -->
    <!-- <section class="bg-white p0 index-platforms d-md-none" style="background-size: contain;
                                                                background-position: center;
                                                                background-repeat: no-repeat;">
        <div class="container" style="height: 100%;padding: 40px 0;">
            <div class="row">
                <div class="col-xl-10 mx-auto col-lg-12 text-center mex-m-b-15 ">
                    <h3 class="mex-h1 text-1e32a3 text-center">Platforms</h3>
                </div>
                <div class="col-xl-8 col-lg-12 row mx-0 d-flex ">
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <img class="mb-platform-icon mb-2 lazyloadXXX" src="/public_files/images/home/home_platforms_ecn_icon.png" alt="ECN Pro Platform">
                        ECN Pro
                    </div>
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <img class=" mb-platform-icon mb-2 lazyloadXXX" src="/public_files/images/home/home_platforms_multibank_pro_icon.png" alt="MultiBank Pro Platform">
                        MultiBank Pro
                    </div>
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <img class="mb-platform-icon mb-2 lazyloadXXX" src="/public_files/images/home/home_platforms_maximus_icon.png" alt="Maximus Platform">
                        Maximus
                    </div>
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <img class="mb-platform-icon mb-2 lazyloadXXX" src="/public_files/images/home/home_platforms_mt5_platform.png" alt="Maximus Platform">
                        MT5
                    </div>
                    <div class="col-12 mt-4 text-center">
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/download-center.php"><i class="fa fa-bars mr-2"></i>MT4</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/download-center.php"><i class="fa fa-mobile mr-2"></i>Mobile</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.php"><i class="fa fa-desktop mr-2" style="top: 1px; position: relative;"></i> Web Trading</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section-platform pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-12">
            <h2 class="text-center text-uppercase  h2-platform mb-3">Platforms</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 ">
            <nav class = "nav-platform mt-4">
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">             
                <a class="btn custom-btn-plat active" id="nav-home-tab" data-toggle="tab" href="#nav-mt4" role="tab" aria-controls="nav-home" aria-selected="true">MT4</a>
                <a class="btn  custom-btn-plat" id="nav-profile-tab" data-toggle="tab" href="#nav-mt5" role="tab" aria-controls="nav-profile" aria-selected="false">MT5</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-mt4" role="tabpanel" aria-labelledby="nav-home-tab">
               
                <div class="tab-content " id="nav-tabContent">
                  <div class="container tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row platforms-content">
                      <div class="col-md-2 col-12">
                        <img src="/public_files/images/common/ECN-PRO.png" class="img-responsive custom-img-plat">
                      </div>
                      <div class="col-md-9 col-12">
                        <h3>ECN PRO</h3>
                        <p class="d-none d-md-block">Enjoy raw price feed directly through our ECN connection to prime brokers and access the tightest spread in the industry. This account type is available on iOS, Android and Windows.</p>
                        <div class="flex-container">
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $5,000</span></div>


                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</span></div>
                          <!-- <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Available on</span><div><span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span> </div></div> -->

                          <div class="center-span">
                            <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/ecnmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span> 
                          </div>

                        </div>
                      </div>
                    </div>                    
                  </div>

                  <div class="container tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row platforms-content">
                      <div class="col-md-2 col-12">
                        <img src="/public_files/images/common/MAXIMUS.png" class="img-responsive custom-img-plat">
                      </div>
                      <div class="col-md-9 col-12">
                        <h3>MAXIMUS</h3>
                      <p class="d-none d-md-block">This MT4 trading platform is ideal for Introducing Brokers and traders who seek no-frill trading experience.</p>  
                      <div class="flex-container">
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Spreads from 1.4 pips</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Minimum Balance $50</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</span></div>
                          <!-- <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Available on</span><div><span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/maximusmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span></div></div> -->
                          <div class="center-span">
                            <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/maximusmexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span>
                          </div>

                        </div>
                      </div>
                    </div>                
                  </div>
                  <div class="container tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row platforms-content">
                      <div class="col-md-2 col-12">
                        <img src="/public_files/images/common/MultiBank Pro.png" class="img-responsive custom-img-plat">
                      </div>
                      <div class="col-md-9 col-12">
                        <h3>multibank pro</h3>
                        <p class="d-none d-md-block">Ideal for traders looking for a smooth trading experience on the MT4 platform without the high investment commitment.</p>              
                          <div class="flex-container">
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Spreads from 0.8 pips</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Min. Balance $1,000</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Social Trading</span></div>
                          <div class="center-span">
                            <span class="span-img-plat"><a href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/web/uploads/democomp/metatrader4.apk"><img src="/public_files/images/common/ic_android.svg"></a></span> <span class="span-img-plat"> <a href="https://www.multibankfx.com/web/uploads/democomp/demo/promexintgroup4setup.exe"><img src="/public_files/images/common/windows.png"></a></span> <span class="span-img-plat"><a href="https://www.multibankfx.com/mql5"><img src="/public_files/images/common/chrome.png"></a></span> 
                          </div>                        

                        </div>
                      </div>
                    </div>                   
                  </div>
                 
                </div>
                <nav class="nav-1">
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="custom-nav-1-link nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ECN PRO</a>
                    <a class="custom-nav-1-link nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">MAXIMUS</a>
                    <a class="custom-nav-1-link nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">MULTIBANK PRO</a>
                  </div>
                </nav>
              </div>
              <div class="tab-pane fade" id="nav-mt5" role="tabpanel" aria-labelledby="nav-profile-tab">




                <div class="tab-content" id="nav-tabContent-2">
                  <div class="container tab-pane fade show active" id="nav-home-2" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row platforms-content">
                      <div class="col-md-2 col-12">
                        <img src="/public_files/images/common/ECN-PRO.png" class="img-responsive custom-img-plat">
                      </div>
                      <div class="col-md-9 col-12">
                        <h3>ECN PRO</h3>
                        <p class="d-none d-md-block">Enjoy raw price feed directly through our ECN connection to prime brokers and access the tightest spread in the industry. This account type is available on iOS, Android and Windows.</p>
                        <div class="flex-container">
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Min. Balance $5,000</span></div>
                          <div></div>
                          <div class="center-span">
                            <span class="span-img-plat"><a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=MEXIntGroup-Demo,MEXIntGroup-Real"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://download.mql5.com/cdn/mobile/mt5/android?server=MEXIntGroup-Demo,MEXIntGroup-Real"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"> <a href="https://download.mql5.com/cdn/web/mex.international.group/mt5/mexintgroup5setup.exe"><img src="/public_files/images/common/windows.png"></a></span>
                           </div>


                     
                        
                          

                        </div>
                      </div>
                    </div>                 
                 </div>
                  <div class="container tab-pane fade" id="nav-profile-2" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row platforms-content">
                      <div class="col-md-2 col-12">
                        <img src="/public_files/images/common/MAXIMUS.png" class="img-responsive custom-img-plat">
                      </div>
                      <div class="col-md-9 col-12">
                        <h3>maximus</h3>
                        <p class="d-none d-md-block">This MT5 Trading Platform is ideal for Introducing Brokers and traders who seek no-frill trading experience.</p>
                        <div class="flex-container">
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Leverage up to 500:1</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Spread from 0.0 pips</span></div>
                          <div><span><i class="fa fa-check-circle" aria-hidden="true"></i>Min. Balance $50</span></div>      
                          <div></div>
                          <div class="center-span">
                            <span class="span-img-plat"><a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=MEXIntGroup-Demo,MEXIntGroup-Real"><img src="/public_files/images/common/ic_apple@2x.png"></a></span> <span class="span-img-plat"><a href="https://download.mql5.com/cdn/mobile/mt5/android?server=MEXIntGroup-Demo,MEXIntGroup-Real"><img src="/public_files/images/common/playstore.png"></a></span> <span class="span-img-plat"> <a href="https://download.mql5.com/cdn/web/mex.international.group/mt5/mexintgroup5setup.exe"><img src="/public_files/images/common/windows.png"></a></span>
                          </div>
                   
                          
                        
                          

                        </div>
                      </div>
                    </div> 
                  </div>
                  
                 
                </div>
                <nav class="nav-2">
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="custom-nav-2-link nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home-2" role="tab" aria-controls="nav-home" aria-selected="true">ECN  PRO</a>
                    <a class="custom-nav-2-link nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile-2" role="tab" aria-controls="nav-profile" aria-selected="false">MAXIMUS</a>
                  </div>
                </nav>
              </div>
             
            </div>          
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 col-12 text-center text-uppercase">
            <a href="https://www.multibankfx.com/platforms/compare-platforms" class = "btn btn-custom-compare">COMPARE PLATFORMS</a>
          </div>
        </div>
      </div>
    </section>
     <!-- downlaod platforms -->

    <section class="bg-gray mex-p-t-none">
        <div class="container">
            <h1 class="mex-h1 text-1e32a3 text-center mex-m-t-50 mex-m-b-30">About MultiBank Group</h1>
            <div class="row about-custom-mobile d-none d-md-flex">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <section class="mex-block-card bg-white shadow-box-animate">
                        <div class="card-img-box hover-img-zoom">
                            <img class="lower-brightness home-about-multibank card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_about_advantage.png" alt="OUR ADVANTAGES">
                        </div>
                        <div class="card-content-box">
                            <div class=" card-content bg-white text-center">
                                <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                    OUR ADVANTAGES
                                </div>
                                <div class="mex-content text-overflow-2 text-overflow-3-xs">
                                    Learn more about MultiBank’s award-winning platforms and comprehensive partnership
                                    programs </div>
                                <a href="about/why-multibank-group.php" class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN MORE</a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-6">
                    <section class="mex-block-card bg-white shadow-box-animate">
                        <div class="card-img-box hover-img-zoom">
                            <img class="lower-brightness home-about-multibank card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_about_regulations.png" alt="REGULATIONS">
                        </div>
                        <div class="card-content-box">
                            <div class=" card-content bg-white text-center">
                                <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                    REGULATIONS
                                </div>
                                <div class="mex-content text-overflow-2 text-overflow-3-xs">
                                    MultiBank comprises a number of companies which are regulated by top financial
                                    bodies worldwide
                                    including ASIC, BaFin, FMA, CNMV, FSC, and CIMA</div>
                                <a href="about/regulations.php" class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN
                                    MORE</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row d-block d-md-none">
                <div class="col-12 mb-2 mb-md-0">
                    <div class="card">
                        <img alt="Introducing Brokers" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_about_advantage.png" />
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                OUR ADVANTAGES </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="about/why-multibank-group.php" class="btn btn-mex text-white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <div class="card">
                        <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_about_regulations.png" alt="REGULATIONS" />
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                REGULATIONS </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="about/regulations.php" class="btn btn-mex text-white">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <div class="card">
                        <img alt="Introducing Brokers" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_security_of_funds_banner.jpg">
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                SECURITY OF FUNDS </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="about/security-of-funds.php" class="btn btn-mex text-white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="card">
                        <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_milestones_banner.png" alt="REGULATIONS" />
                        <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                MILESTONES </div>
                            <div class="mex-content mb0 text-overflow-3"> <a href="/article/milestones.php" class="btn btn-mex text-white">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt64 pb16 table-background global-presence d-none d-md-block lazyload" id="home_global_presence" style="background-image: url(public_files/images/about_us/global_presence/home_global_presence_bg.jpg)">
        <div class="mex-content">
            <h2 class="mex-h1 text-fff text-center">Global Presence</h2>
        </div>
        <div class="swiper-container swiper-container-horizontal swiper-container-autoheight" id="swiper-container-global-presence">
            <div class="swiper-wrapper mex-m-b-100" style="transition-duration: 0ms; transform: translate3d(-2011.33px, 0px, 0px); height: 402px;">
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="15" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_turkey.jpg" alt="British Virgin Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Turkey
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Financial Technologies
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: MEX Yazilim Teknoloji ve Danismanlik Limited Sti<br>
                                Company Number: 210352-5
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="16" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_british_virgin_islands.jpg" alt="British Virgin Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                British Virgin Islands
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Multibank FX International
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: FSC<br>License Number: SIBA/L/14/1068
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="17" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_british_virgin_islands_mbg.jpg" alt="British Virgin Islands MBG"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                British Virgin Islands
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MBG
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: FSC
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="0" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_cayman_islands.jpg" alt="Cayman Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Cayman Islands
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank Wealth Management
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: CIMA<br>Registration Number: HS-320499<br>Phone: + 1 345 769 1891
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="1" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_hong_kong.jpg" alt="Hong Kong">
                        </div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Hong Kong
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Fintech
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Company Number: 2205192
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_australia.jpg" alt="Australia">
                        </div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Australia
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Exchange
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: ASIC<br>
                                ACN (Company Number): 155 084 058<br>
                                AFSL (License Number): 416279<br>
                                Phone: +61 291954000<br>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_germany.jpg" alt="Germany"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Germany
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Asset Management
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: BaFin<br>
                                HRB (License Number): 73406<br>
                                Phone: +49 69257377474
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-active width-30" data-swiper-slide-index="4" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_austria.jpg" alt="Austria"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Austria
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Asset Management (Austria)
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: FMA
                                <br>License Number: 491129z
                                <br>Phone: +43 720775835<br>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-next width-40" data-swiper-slide-index="5" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_spain.jpg" alt="Spain"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Spain
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Spain
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: CNMV<br>
                                License Number: 120<br>
                                Offices in: Barcelona &amp; Marbella<br>
                                Phone: + 34 931220671
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide width-30" data-swiper-slide-index="6" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_usa.jpg" alt="USA"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                USA
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Multibank Forex Exchange
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Company Number: 3918038<br>Phone: +1 213 992 4748
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="7" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_mexico.jpg" alt="Mexico"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Mexico
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank LATAM
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: Mex Capital Markets SA de CV<br>
                                Registration Number: 825403<br>
                                Phone: +52 558 880 8058
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="8" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_china.jpg" alt="China">
                        </div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                China
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Group
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Toll Free Hotline: 400 120 8619
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="9" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-coverlazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_vietnam.jpg" alt="UAE"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Vietnam
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Multibank Vietnam
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registration Number: 0315953856<br>
                                Phone: +84 28 77 77 65 65
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="10" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_philippines.jpg" alt="UAE"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Philippines
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank Philippines
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: MBFX Business Consultancy<br>
                                Company Number: 1123633<br>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="11" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_malaysia.jpg" alt="UAE"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Malaysia
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank Malaysia
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: MBG Business Consultancy Sdn. Bhd<br>
                                Company Number: 201901042318<br>
                                Phone: +60 32 201 0966
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="12" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_uae2.jpg" alt="UAE"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                UAE
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank MENA
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: Multibank FX International Corporation- Dubai Branch <br>
                                License Number: 825403<br>
                                Phone: +971 4875 1311
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="13" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_kuwai.jpg" alt="British Virgin Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Kuwait
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank Kuwait
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: Multibank International Company<br>
                                License Number: 2019/27087<br>
                                Phone: +971 4875 1311
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="14" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_cyprus.jpg" alt="British Virgin Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Cyprus
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Prime
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Company Number: 2713393<br>Phone: +357 25262058
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="15" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_turkey.jpg" alt="British Virgin Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Turkey
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Financial Technologies
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Registered as: MEX Yazilim Teknoloji ve Danismanlik Limited Sti<br>
                                Company Number: 210352-5
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="16" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_british_virgin_islands.jpg" alt="British Virgin Islands"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                British Virgin Islands
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Multibank FX International
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: FSC<br>License Number: SIBA/L/14/1068
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="17" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box"><img class="card-img mex-img-cover lazyloadXXX" src="/public_files/images/about_us/global_presence/global_presence_british_virgin_islands_mbg.jpg" alt="British Virgin Islands MBG"></div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                British Virgin Islands
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MBG
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: FSC
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box">
                            <!--<img class="card-img mex-img-cover lazyloadXXX"-->
                            <!--    src="/public_files/images/about_us/global_presence/global_presence_cayman_islands.png"-->
                            <!--    alt="Cayman Islands">-->
                        </div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Cayman Islands
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MultiBank Wealth Management
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: CIMA<br>Registration Number: HS-320499<br>Phone: + 1 345 769 1891
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box">
                            <!--<img class="card-img mex-img-cover lazyloadXXX"-->
                            <!--    src="/public_files/images/about_us/global_presence/global_presence_hong_kong.png"-->
                            <!--    alt="Hong Kong">-->
                        </div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Hong Kong
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Fintech
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Company Number: 2205192
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 287.333px;">
                    <section class="mex-block-card-v mex-third">
                        <div class="card-img-box">
                            <!--<img class="card-img mex-img-cover lazyloadXXX"-->
                            <!--    src="/public_files/images/about_us/global_presence/global_presence_australia.png"-->
                            <!--    alt="Australia">-->
                        </div>
                        <div class="card-content bg-white text-center">
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                Australia
                            </div>
                            <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                                MEX Exchange
                            </div>
                            <div class="mex-content mex-clamp-2 mb0">
                                Regulation: ASIC<br>
                                ACN (Company Number): 155 084 058<br>
                                AFSL (License Number): 416279<br>
                                Phone: +61 291954000<br>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
        <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide">
        </div>
    </section>
    <section class="bg-gray d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <section class="mex-block-card bg-white shadow-box-animate">
                        <div class="card-img-box">
                            <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_security_of_funds_banner.jpg" alt="SECURITY OF FUNDS">
                        </div>
                        <div class="card-content-box">
                            <div class=" card-content bg-white text-center">
                                <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                    SECURITY OF FUNDS </div>
                                <div class="mex-content text-overflow-2">
                                    Clients enjoy the highest level of funds security through MultiBank </div>
                                <a href="about/security-of-funds.php" class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN MORE</a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <section class="mex-block-card bg-white shadow-box-animate">
                        <div class="card-img-box">
                            <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/home/home_milestones_banner.png" alt="MILESTONES">
                        </div>
                        <div class="card-content-box">
                            <div class=" card-content bg-white text-center">
                                <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                    MILESTONES </div>
                                <div class="mex-content text-overflow-2">
                                    Learn more about MultiBank’s achievements from over the years </div>
                                <a href="/article/milestones.php" class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN
                                    MORE</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <h2 class=" text-center text-1e32a3 uppercase mb-4 d-block d-md-none" style="padding-top: 15px;">Awards</h2>
    <?php include_from_root('website_template/about_awards.php') ?>
    <!-- <section class="bg-white p0 index-platforms  d-md-flex d-none">
        <img class="d-none d-md-none lazyloadXXX" src="/public_files/images/about_us/global_presence/home_platforms_bg.png" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.1;">
        <div class="container mex-p-t-80 mex-p-b-80">
            <div class="row">
                <div class="col-xl-10 mx-auto col-lg-12 text-center mex-m-b-15 ">
                    <h3 class="mex-h1 text-1e32a3 text-center lower-brightness-pt">Platforms</h3>
                </div>
                <div class=" col-xl-8 col-lg-12 row mx-0 d-md-flex d-none d-md-block">
                    <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                        <div class="platforms_content mex-box-shadow">
                            <h4 class="uppercase  mb16  mb-xs-8  ">
                                <img class=" lazyloadXXX" src="/public_files/images/home/home_platforms_multibank_pro_icon.png" alt="MultiBank Pro Platform">
                                <span>MultiBank Pro
                                    Platform</span>
                            </h4>
                            <p class=" platforms_box_txt mex-clamp-4 mex-content">Ideal for traders looking for an ECN
                                experience with tight spreads and zero platform fees</p>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/multibank-pro.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>MT4</a>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/multibank-pro.php"><i class="fa fa-mobile" aria-hidden="true"></i>Mobile</a>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.php"><i class="fa fa-desktop" style="top: 1px;
    position: relative;"></i> Web Trading</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                        <div class="platforms_content mex-box-shadow">
                            <h4 class="uppercase  mb16  mb-xs-8  ">
                                <img class=" lazyloadXXX" src="/public_files/images/home/home_platforms_maximus_icon.png" alt="Maximus Platform">
                                <span>Maximus Platform</span>
                            </h4>
                            <p class=" platforms_box_txt mex-clamp-4 mex-content">Recommended for traders looking for no
                                restrictions on EA and scalping trading</p>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/maximus.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>MT4</a>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/maximus.php"><i class="fa fa-mobile" aria-hidden="true"></i>Mobile</a>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.php"><i class="fa fa-desktop" style="top: 1px;position: relative;"></i> Web Trading</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                        <div class="platforms_content mex-box-shadow">
                            <h4 class="uppercase  mb16  mb-xs-8  "><img class=" lazyloadXXX" src="/public_files/images/home/home_platforms_mt5_platform.png" alt="MT5 Platform"><span>MT5 Platform</span>
                            </h4>
                            <p class=" platforms_box_txt mex-clamp-4 mex-content">Suitable for traders looking for
                                enhanced
                                trading functionalities such as advanced scripting tools for custom indicators and
                                expert
                                advisors</p>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/mt5-platform.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>MT5</a>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/mt5-platform.php"><i class="fa fa-mobile" aria-hidden="true"></i>Mobile</a>
                            <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.php"><i class="fa fa-desktop" style="top: 1px;position: relative;"></i> Web Trading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="bg-white p0 index-platforms d-none d-md-none">
        <!--<img class=" lazyloadXXX" src="/public_files/images/about_us/global_presence/home_platforms_bg.png"-->
        <!--    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.1;">-->
        <div class="container mex-p-t-80 mex-p-b-80">
            <div class="row">
                <div class="col-xl-10 mx-auto col-lg-12 text-center mex-m-b-15 ">
                    <h3 class="mex-h1 text-1e32a3 text-center ">Platforms</h3>
                </div>
                <div class="col-xl-8 col-lg-12 row mx-0 d-flex ">
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <!--<img class="mb-platform-icon mb-2 lazyloadXXX"-->
                        <!--    src="/public_files/images/about_us/global_presence/home_platforms_ecn_icon.png"-->
                        <!--    alt="ECN Pro Platform">-->
                        ECN Pro<br>Platform
                    </div>
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <!--<img class=" mb-platform-icon mb-2 lazyloadXXX"-->
                        <!--    src="/public_files/images/about_us/global_presence/home_platforms_multibank_pro_icon.png"-->
                        <!--    alt="MultiBank Pro Platform">-->
                        MultiBank Pro<br>Platform
                    </div>
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <!--<img class="mb-platform-icon mb-2 lazyloadXXX" alt="Maximus Platform"-->
                        <!--    src="/public_files/images/about_us/global_presence/home_platforms_maximus_icon.png">-->
                        Maximus<br>Platform
                    </div>
                    <div class="col-3 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16" style="line-height: 20px;">
                        <!--<img class="mb-platform-icon mb-2 lazyloadXXX" alt="Maximus Platform"-->
                        <!--    src="/public_files/images/about_us/global_presence/home_platforms_mt5_platform.png">-->
                        MT5<br>Platform
                    </div>
                    <div class="col-12 d-flex justify-content-center my-4">
                        <a href="platforms.php" class="btn btn-mex text-white">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray p0">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h3 class="mex-h1 mex-m-t-50 mex-m-b-30 text-1e32a3 text-center">Partnership</h3>
                </div>
                <div class="col-12 col-md-12 col-xl-8 mex-m-b-30 d-none d-md-block ">
                    <section class="mex-card-cover box-animate">
                        <a href="/partnership/introducing-brokers">
                            <img alt="Introducing Brokers" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_introducing_broker@2x.png">
                            <div class="card-content text-left">
                                <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                    Introducing Brokers </div>
                                <div class="mex-content mb0 text-overflow-3 col-lg-6 p0 col-12">Join MultiBank’s network
                                    of over 30,000
                                    Introducing Brokers and enjoy the highest levels of personalized customer care.
                                </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                    <section class="mex-card-cover box-animate">
                        <a href="partnership/franchise-program.php">
                            <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_franchise_program@2x.png" alt="Franchise Program">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                    Franchise Program </div>
                                <div class="mex-content mb0 text-overflow-3">
                                    Open offices under the MultiBank name and obtain exclusivity of our products and
                                    services in the
                                    region </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                    <section class="mex-card-cover box-animate">
                        <a href="partnership/white-label.php">
                            <img alt="White Label" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_white_label@2x.png">
                            ">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                    White Label </div>
                                <div class="mex-content mb0 text-overflow-3">
                                    Become MultiBank’s White Label Partner and have your own proprietary trading system,
                                    branded in your
                                    corporate name </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                    <section class="mex-card-cover box-animate">
                        <a href="partnership/prime-of-primes.php">
                            <img alt="Prime of Primes" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_prime_of_primes@2x.png">
                            <div class="card-content text-left">
                                <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                                    Prime of Primes </div>
                                <div class="mex-content mb0 text-overflow-3">
                                    Complete A to Z prime technology solution for MultiBank’s institutional partners
                                </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                    <section class="mex-card-cover box-animate">
                        <a href="partnership/cpa-affiliate-program.php">
                            <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/partnership_cpa_affiliate_program_newx.png" alt="CPA Affiliate Program">
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                    CPA Affiliate Program </div>
                                <div class="mex-content mb0 text-overflow-3">
                                    MultiBank’s CPA Affiliate Program allows digital marketers to earn commission for
                                    every active trader
                                    they introduce </div>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
        </div>
        <div class="row d-block d-md-none">
            <div class="col-12 col-md-12 col-xl-8 mex-m-b-10 custom-card-img">
                <div class="card">
                    <img alt="Introducing Brokers" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_introducing_broker@2x.png">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                        <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                            Introducing Brokers </div>
                        <div class="mex-content mb0 text-overflow-3"> <a href="partnership/introducing-brokers.php" class="btn btn-mex text-white">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img">
                <div class="card">
                    <img class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_franchise_program@2x.png" alt="Franchise Program">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                        <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                            Franchise Program </div>
                        <div class="mex-content mb0 text-overflow-3"> <a href="partnership/franchise-program.php" class="btn btn-mex text-white">Learn
                                More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img">
                <div class="card">
                    <img alt="White Label" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_white_label@2x.png">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                        <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                            White Label </div>
                        <div class="mex-content mb0 text-overflow-3"> <a href="partnership/white-label.php" class="btn btn-mex text-white">Learn More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-10 custom-card-img d-none">
                <div class="card">
                    <img alt="Prime of Primes" class="lower-brightness card-img mex-img-cover lazyloadXXX" src="/public_files/images/partnership/home_partnership_prime_of_primes@2x.png">
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center">
                        <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                            Prime of Primes </div>
                        <div class="mex-content mb0 text-overflow-3"> <a href="partnership/prime-of-primes.php" class="btn btn-mex text-white">Learn
                                More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="table-background plants d-md-flex d-none">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <section class="mex-company-news">
                        <div class="mex-h2 mex-bold text-center uppercase">
                            Company News
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="mex-new-content-box swiper-container-vertical" id="home_company_news_container" style="min-height: 535px; overflow-y: hidden; height: 440px;">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, -267.5px, 0px); transition-duration: 0ms;">
                                        <!-- dynmic news slides -->
                                        <?php echo $news ?>
                                        <!-- dynmic news slides -->
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="text-center mex-p-15 index_sup_a col-12">
                    <a href="/article/company-news.php" class="btn btn-mex ">MORE</a>
                </div>
            </div>
        </div>
    </section>




    <?php include_from_root('website_template/page_footer.php'); ?>




    <style type="text/css">
        .slidebar a span.btn {
            padding: 0;
            background: none;
            margin: 0 0 3px 0;
        } 
    </style>
    <style>
        .top-mb-ic {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            padding: 5px;
        }

        .top-mb-ic.red {
            background-color: #CE0B0B;
        }

        .top-mb-ic.blue {
            background-color: #178ECC;
        }

        .top-mb-ic.black {
            background-color: #333;
        }

        .top-mb-ic.dark-blue {
            background-color: #000032;
        }

        .font-16 {
            font-size: 16px !important;
        }

        .font-14 {
            font-size: 14px !important;
        }

        .footer-contact-ic {
            width: 30%;
            height: auto;
        }

        .top-mb-ic img {
            width: 100%;
            height: auto;
        }

        .mb-header-btn:hover .top-mb-text {
            color: #e2a840 !important;
        }

        @media (max-width: 767px) {
            section.contact-us {
                padding: 40px 0 0 0 !important;
            }
        }

        @media (max-width: 400px) {
            .footer-mb-social-media {
                font-size: 20px !important;
            }

            .hide-400 {
                display: none !important;
            }
        }
    </style>
    <div class="modal-box__email-us">
        <div class="container row">
            <div class="col-12 col-md-7 mx-auto bg-white p-4">
                <span class="btn-modal-close fa fa-times"></span>
                <form action="https://www.multibankfx.com/form/contactus?" name='email_us_form' class='multibank-form row mx-0 w-100 new' method='post' enctype='' id='email_us_form' target='' autocomplete='on'>
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMzowMTozMw==' />
                    <input type='hidden' name='token' value='$2y$10$jw4S1XQRcJWM6S2.CwYGf.Nh7UOTHe8Npg2q.nSFuFIUIoJXiaw0u' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:59:53] https://www.multibankfx.com/article/multibank-honored-best-ecn-broker-asia-2019<br/><br/>[2020-06-27 02:59:54] https://www.multibankfx.com/article/multibank-honored-best-ecn-broker-asia-2019<br/><br/>[2020-06-27 02:59:56] https://www.multibankfx.com/article/multibank-honored-best-ecn-broker-asia-2019<br/><br/>[2020-06-27 03:01:33] https://www.multibankfx.com/article/multibank-fast-n-furious-trading-contest<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/demo-account?web=true' />
                    <div class='col-12 p-0'>
                        <label for='' class='mex-h3'>
                            EMAIL US</label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none' name='label_title' placeholder='' value='' />
                    </div>
                    <div class='d-none'>
                        <label for='' class='m-0 d-none'>
                        </label>
                        <div class='form-check form-check-inline'><input data-message='Account Type is Required.' data-extra-message="/Account type Invalid." class='   ' name='account_type' type='radio' required value='1' checked />
                            <label class='  ' for=''>INDIVIDUAL</label>
                        </div>
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Full Name</label>
                        <input type="text" data-message="Full Name is Required." data-extra-message="Full Name Invalid." data-regex="" class="form-control mb-0" name="name" $field_id_code placeholder="Full Name" required value="" />
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            البريد الإلكتروني</label>
                        <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid." data-regex='' class='form-control mb-0' name='email' placeholder='Email' required value='' />
                    </div>
                    <div class='mex-form-item col-12 p-1 d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <select data-message='Confirm Email is Required.' data-extra-message="Email Mismatched." class='selection-country form-control  mb-0 select_with_country select_with_country' name='country_name' required>
                            <option value='' selected='selected'>Select Country</option>
                            <option data-country_iso_code="AF" data-name='AF' value='AF'>AFGHANISTAN</option>
                            <option data-country_iso_code="AL" data-name='AL' value='AL'>ALBANIA</option>
                            <option data-country_iso_code="DZ" data-name='DZ' value='DZ'>ALGERIA</option>
                            <option data-country_iso_code="AS" data-name='AS' value='AS'>AMERICAN SAMOA</option>
                            <option data-country_iso_code="AD" data-name='AD' value='AD'>ANDORRA</option>
                            <option data-country_iso_code="AO" data-name='AO' value='AO'>ANGOLA</option>
                            <option data-country_iso_code="AI" data-name='AI' value='AI'>ANGUILLA</option>
                            <option data-country_iso_code="AQ" data-name='AQ' value='AQ'>ANTARCTICA</option>
                            <option data-country_iso_code="AG" data-name='AG' value='AG'>ANTIGUA AND BARBUDA</option>
                            <option data-country_iso_code="AR" data-name='AR' value='AR'>ARGENTINA</option>
                            <option data-country_iso_code="AM" data-name='AM' value='AM'>ARMENIA</option>
                            <option data-country_iso_code="AW" data-name='AW' value='AW'>ARUBA</option>
                            <option data-country_iso_code="AU" data-name='AU' value='AU'>AUSTRALIA</option>
                            <option data-country_iso_code="AT" data-name='AT' value='AT'>AUSTRIA</option>
                            <option data-country_iso_code="AZ" data-name='AZ' value='AZ'>AZERBAIJAN</option>
                            <option data-country_iso_code="BS" data-name='BS' value='BS'>BAHAMAS</option>
                            <option data-country_iso_code="BH" data-name='BH' value='BH'>BAHRAIN</option>
                            <option data-country_iso_code="BD" data-name='BD' value='BD'>BANGLADESH</option>
                            <option data-country_iso_code="BB" data-name='BB' value='BB'>BARBADOS</option>
                            <option data-country_iso_code="BY" data-name='BY' value='BY'>BELARUS</option>
                            <option data-country_iso_code="BE" data-name='BE' value='BE'>BELGIUM</option>
                            <option data-country_iso_code="BZ" data-name='BZ' value='BZ'>BELIZE</option>
                            <option data-country_iso_code="BJ" data-name='BJ' value='BJ'>BENIN</option>
                            <option data-country_iso_code="BM" data-name='BM' value='BM'>BERMUDA</option>
                            <option data-country_iso_code="BT" data-name='BT' value='BT'>BHUTAN</option>
                            <option data-country_iso_code="BO" data-name='BO' value='BO'>BOLIVIA</option>
                            <option data-country_iso_code="BA" data-name='BA' value='BA'>BOSNIA AND HERZEGOVINA</option>
                            <option data-country_iso_code="BW" data-name='BW' value='BW'>BOTSWANA</option>
                            <option data-country_iso_code="BV" data-name='BV' value='BV'>BOUVET ISLAND</option>
                            <option data-country_iso_code="BR" data-name='BR' value='BR'>BRAZIL</option>
                            <option data-country_iso_code="IO" data-name='IO' value='IO'>BRITISH INDIAN OCEAN TERRITORY</option>
                            <option data-country_iso_code="BN" data-name='BN' value='BN'>BRUNEI DARUSSALAM</option>
                            <option data-country_iso_code="BG" data-name='BG' value='BG'>BULGARIA</option>
                            <option data-country_iso_code="BF" data-name='BF' value='BF'>BURKINA FASO</option>
                            <option data-country_iso_code="BI" data-name='BI' value='BI'>BURUNDI</option>
                            <option data-country_iso_code="KH" data-name='KH' value='KH'>CAMBODIA</option>
                            <option data-country_iso_code="CM" data-name='CM' value='CM'>CAMEROON</option>
                            <option data-country_iso_code="CA" data-name='CA' value='CA'>CANADA</option>
                            <option data-country_iso_code="CV" data-name='CV' value='CV'>CAPE VERDE</option>
                            <option data-country_iso_code="KY" data-name='KY' value='KY'>CAYMAN ISLANDS</option>
                            <option data-country_iso_code="CF" data-name='CF' value='CF'>CENTRAL AFRICAN REPUBLIC</option>
                            <option data-country_iso_code="TD" data-name='TD' value='TD'>CHAD</option>
                            <option data-country_iso_code="CL" data-name='CL' value='CL'>CHILE</option>
                            <option data-country_iso_code="CN" data-name='CN' value='CN'>CHINA</option>
                            <option data-country_iso_code="CX" data-name='CX' value='CX'>CHRISTMAS ISLAND</option>
                            <option data-country_iso_code="CC" data-name='CC' value='CC'>COCOS (KEELING) ISLANDS</option>
                            <option data-country_iso_code="CO" data-name='CO' value='CO'>COLOMBIA</option>
                            <option data-country_iso_code="KM" data-name='KM' value='KM'>COMOROS</option>
                            <option data-country_iso_code="CG" data-name='CG' value='CG'>CONGO</option>
                            <option data-country_iso_code="CD" data-name='CD' value='CD'>CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                            <option data-country_iso_code="CK" data-name='CK' value='CK'>COOK ISLANDS</option>
                            <option data-country_iso_code="CR" data-name='CR' value='CR'>COSTA RICA</option>
                            <option data-country_iso_code="CI" data-name='CI' value='CI'>COTE D'IVOIRE</option>
                            <option data-country_iso_code="HR" data-name='HR' value='HR'>CROATIA</option>
                            <option data-country_iso_code="CU" data-name='CU' value='CU'>CUBA</option>
                            <option data-country_iso_code="CY" data-name='CY' value='CY'>CYPRUS</option>
                            <option data-country_iso_code="CZ" data-name='CZ' value='CZ'>CZECH REPUBLIC</option>
                            <option data-country_iso_code="DK" data-name='DK' value='DK'>DENMARK</option>
                            <option data-country_iso_code="DJ" data-name='DJ' value='DJ'>DJIBOUTI</option>
                            <option data-country_iso_code="DM" data-name='DM' value='DM'>DOMINICA</option>
                            <option data-country_iso_code="DO" data-name='DO' value='DO'>DOMINICAN REPUBLIC</option>
                            <option data-country_iso_code="EC" data-name='EC' value='EC'>ECUADOR</option>
                            <option data-country_iso_code="EG" data-name='EG' value='EG'>EGYPT</option>
                            <option data-country_iso_code="SV" data-name='SV' value='SV'>EL SALVADOR</option>
                            <option data-country_iso_code="GQ" data-name='GQ' value='GQ'>EQUATORIAL GUINEA</option>
                            <option data-country_iso_code="ER" data-name='ER' value='ER'>ERITREA</option>
                            <option data-country_iso_code="EE" data-name='EE' value='EE'>ESTONIA</option>
                            <option data-country_iso_code="ET" data-name='ET' value='ET'>ETHIOPIA</option>
                            <option data-country_iso_code="FK" data-name='FK' value='FK'>FALKLAND ISLANDS (MALVINAS)</option>
                            <option data-country_iso_code="FO" data-name='FO' value='FO'>FAROE ISLANDS</option>
                            <option data-country_iso_code="FJ" data-name='FJ' value='FJ'>FIJI</option>
                            <option data-country_iso_code="FI" data-name='FI' value='FI'>FINLAND</option>
                            <option data-country_iso_code="FR" data-name='FR' value='FR'>FRANCE</option>
                            <option data-country_iso_code="GF" data-name='GF' value='GF'>FRENCH GUIANA</option>
                            <option data-country_iso_code="PF" data-name='PF' value='PF'>FRENCH POLYNESIA</option>
                            <option data-country_iso_code="TF" data-name='TF' value='TF'>FRENCH SOUTHERN TERRITORIES</option>
                            <option data-country_iso_code="GA" data-name='GA' value='GA'>GABON</option>
                            <option data-country_iso_code="GM" data-name='GM' value='GM'>GAMBIA</option>
                            <option data-country_iso_code="GE" data-name='GE' value='GE'>GEORGIA</option>
                            <option data-country_iso_code="DE" data-name='DE' value='DE'>GERMANY</option>
                            <option data-country_iso_code="GH" data-name='GH' value='GH'>GHANA</option>
                            <option data-country_iso_code="GI" data-name='GI' value='GI'>GIBRALTAR</option>
                            <option data-country_iso_code="GR" data-name='GR' value='GR'>GREECE</option>
                            <option data-country_iso_code="GL" data-name='GL' value='GL'>GREENLAND</option>
                            <option data-country_iso_code="GD" data-name='GD' value='GD'>GRENADA</option>
                            <option data-country_iso_code="GP" data-name='GP' value='GP'>GUADELOUPE</option>
                            <option data-country_iso_code="GU" data-name='GU' value='GU'>GUAM</option>
                            <option data-country_iso_code="GT" data-name='GT' value='GT'>GUATEMALA</option>
                            <option data-country_iso_code="GN" data-name='GN' value='GN'>GUINEA</option>
                            <option data-country_iso_code="GW" data-name='GW' value='GW'>GUINEA-BISSAU</option>
                            <option data-country_iso_code="GY" data-name='GY' value='GY'>GUYANA</option>
                            <option data-country_iso_code="HT" data-name='HT' value='HT'>HAITI</option>
                            <option data-country_iso_code="HM" data-name='HM' value='HM'>HEARD ISLAND AND MCDONALD ISLANDS</option>
                            <option data-country_iso_code="VA" data-name='VA' value='VA'>HOLY SEE (VATICAN CITY STATE)</option>
                            <option data-country_iso_code="HN" data-name='HN' value='HN'>HONDURAS</option>
                            <option data-country_iso_code="HK" data-name='HK' value='HK'>HONG KONG</option>
                            <option data-country_iso_code="HU" data-name='HU' value='HU'>HUNGARY</option>
                            <option data-country_iso_code="IS" data-name='IS' value='IS'>ICELAND</option>
                            <option data-country_iso_code="IN" data-name='IN' value='IN'>INDIA</option>
                            <option data-country_iso_code="ID" data-name='ID' value='ID'>INDONESIA</option>
                            <option data-country_iso_code="IR" data-name='IR' value='IR'>IRAN, ISLAMIC REPUBLIC OF</option>
                            <option data-country_iso_code="IQ" data-name='IQ' value='IQ'>IRAQ</option>
                            <option data-country_iso_code="IE" data-name='IE' value='IE'>IRELAND</option>
                            <option data-country_iso_code="IL" data-name='IL' value='IL'>ISRAEL</option>
                            <option data-country_iso_code="IT" data-name='IT' value='IT'>ITALY</option>
                            <option data-country_iso_code="JM" data-name='JM' value='JM'>JAMAICA</option>
                            <option data-country_iso_code="JP" data-name='JP' value='JP'>JAPAN</option>
                            <option data-country_iso_code="JO" data-name='JO' value='JO'>JORDAN</option>
                            <option data-country_iso_code="KZ" data-name='KZ' value='KZ'>KAZAKHSTAN</option>
                            <option data-country_iso_code="KE" data-name='KE' value='KE'>KENYA</option>
                            <option data-country_iso_code="KI" data-name='KI' value='KI'>KIRIBATI</option>
                            <option data-country_iso_code="KP" data-name='KP' value='KP'>KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                            <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF</option>
                            <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                            <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                            <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                            <option data-country_iso_code="LV" data-name='LV' value='LV'>LATVIA</option>
                            <option data-country_iso_code="LB" data-name='LB' value='LB'>LEBANON</option>
                            <option data-country_iso_code="LS" data-name='LS' value='LS'>LESOTHO</option>
                            <option data-country_iso_code="LR" data-name='LR' value='LR'>LIBERIA</option>
                            <option data-country_iso_code="LY" data-name='LY' value='LY'>LIBYAN ARAB JAMAHIRIYA</option>
                            <option data-country_iso_code="LI" data-name='LI' value='LI'>LIECHTENSTEIN</option>
                            <option data-country_iso_code="LT" data-name='LT' value='LT'>LITHUANIA</option>
                            <option data-country_iso_code="LU" data-name='LU' value='LU'>LUXEMBOURG</option>
                            <option data-country_iso_code="MO" data-name='MO' value='MO'>MACAO</option>
                            <option data-country_iso_code="MK" data-name='MK' value='MK'>MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                            <option data-country_iso_code="MG" data-name='MG' value='MG'>MADAGASCAR</option>
                            <option data-country_iso_code="MW" data-name='MW' value='MW'>MALAWI</option>
                            <option data-country_iso_code="MY" data-name='MY' value='MY'>MALAYSIA</option>
                            <option data-country_iso_code="MV" data-name='MV' value='MV'>MALDIVES</option>
                            <option data-country_iso_code="ML" data-name='ML' value='ML'>MALI</option>
                            <option data-country_iso_code="MT" data-name='MT' value='MT'>MALTA</option>
                            <option data-country_iso_code="MH" data-name='MH' value='MH'>MARSHALL ISLANDS</option>
                            <option data-country_iso_code="MQ" data-name='MQ' value='MQ'>MARTINIQUE</option>
                            <option data-country_iso_code="MR" data-name='MR' value='MR'>MAURITANIA</option>
                            <option data-country_iso_code="MU" data-name='MU' value='MU'>MAURITIUS</option>
                            <option data-country_iso_code="YT" data-name='YT' value='YT'>MAYOTTE</option>
                            <option data-country_iso_code="MX" data-name='MX' value='MX'>MEXICO</option>
                            <option data-country_iso_code="FM" data-name='FM' value='FM'>MICRONESIA, FEDERATED STATES OF</option>
                            <option data-country_iso_code="MD" data-name='MD' value='MD'>MOLDOVA, REPUBLIC OF</option>
                            <option data-country_iso_code="MC" data-name='MC' value='MC'>MONACO</option>
                            <option data-country_iso_code="MN" data-name='MN' value='MN'>MONGOLIA</option>
                            <option data-country_iso_code="ME" data-name='ME' value='ME'>MONTENEGRO</option>
                            <option data-country_iso_code="MS" data-name='MS' value='MS'>MONTSERRAT</option>
                            <option data-country_iso_code="MA" data-name='MA' value='MA'>MOROCCO</option>
                            <option data-country_iso_code="MZ" data-name='MZ' value='MZ'>MOZAMBIQUE</option>
                            <option data-country_iso_code="MM" data-name='MM' value='MM'>MYANMAR</option>
                            <option data-country_iso_code="NA" data-name='NA' value='NA'>NAMIBIA</option>
                            <option data-country_iso_code="NR" data-name='NR' value='NR'>NAURU</option>
                            <option data-country_iso_code="NP" data-name='NP' value='NP'>NEPAL</option>
                            <option data-country_iso_code="NL" data-name='NL' value='NL'>NETHERLANDS</option>
                            <option data-country_iso_code="AN" data-name='AN' value='AN'>NETHERLANDS ANTILLES</option>
                            <option data-country_iso_code="NC" data-name='NC' value='NC'>NEW CALEDONIA</option>
                            <option data-country_iso_code="NZ" data-name='NZ' value='NZ'>NEW ZEALAND</option>
                            <option data-country_iso_code="NI" data-name='NI' value='NI'>NICARAGUA</option>
                            <option data-country_iso_code="NE" data-name='NE' value='NE'>NIGER</option>
                            <option data-country_iso_code="NG" data-name='NG' value='NG'>NIGERIA</option>
                            <option data-country_iso_code="NU" data-name='NU' value='NU'>NIUE</option>
                            <option data-country_iso_code="NF" data-name='NF' value='NF'>NORFOLK ISLAND</option>
                            <option data-country_iso_code="MP" data-name='MP' value='MP'>NORTHERN MARIANA ISLANDS</option>
                            <option data-country_iso_code="NO" data-name='NO' value='NO'>NORWAY</option>
                            <option data-country_iso_code="OM" data-name='OM' value='OM'>OMAN</option>
                            <option data-country_iso_code="PK" data-name='PK' value='PK'>PAKISTAN</option>
                            <option data-country_iso_code="PW" data-name='PW' value='PW'>PALAU</option>
                            <option data-country_iso_code="PS" data-name='PS' value='PS'>PALESTINE, STATE OF</option>
                            <option data-country_iso_code="PA" data-name='PA' value='PA'>PANAMA</option>
                            <option data-country_iso_code="PG" data-name='PG' value='PG'>PAPUA NEW GUINEA</option>
                            <option data-country_iso_code="PY" data-name='PY' value='PY'>PARAGUAY</option>
                            <option data-country_iso_code="PE" data-name='PE' value='PE'>PERU</option>
                            <option data-country_iso_code="PH" data-name='PH' value='PH'>PHILIPPINES</option>
                            <option data-country_iso_code="PN" data-name='PN' value='PN'>PITCAIRN</option>
                            <option data-country_iso_code="PL" data-name='PL' value='PL'>POLAND</option>
                            <option data-country_iso_code="PT" data-name='PT' value='PT'>PORTUGAL</option>
                            <option data-country_iso_code="PR" data-name='PR' value='PR'>PUERTO RICO</option>
                            <option data-country_iso_code="QA" data-name='QA' value='QA'>QATAR</option>
                            <option data-country_iso_code="RE" data-name='RE' value='RE'>REUNION</option>
                            <option data-country_iso_code="RO" data-name='RO' value='RO'>ROMANIA</option>
                            <option data-country_iso_code="RU" data-name='RU' value='RU'>RUSSIAN FEDERATION</option>
                            <option data-country_iso_code="RW" data-name='RW' value='RW'>RWANDA</option>
                            <option data-country_iso_code="SH" data-name='SH' value='SH'>SAINT HELENA</option>
                            <option data-country_iso_code="KN" data-name='KN' value='KN'>SAINT KITTS AND NEVIS</option>
                            <option data-country_iso_code="LC" data-name='LC' value='LC'>SAINT LUCIA</option>
                            <option data-country_iso_code="PM" data-name='PM' value='PM'>SAINT PIERRE AND MIQUELON</option>
                            <option data-country_iso_code="VC" data-name='VC' value='VC'>SAINT VINCENT AND THE GRENADINES</option>
                            <option data-country_iso_code="WS" data-name='WS' value='WS'>SAMOA</option>
                            <option data-country_iso_code="SM" data-name='SM' value='SM'>SAN MARINO</option>
                            <option data-country_iso_code="ST" data-name='ST' value='ST'>SAO TOME AND PRINCIPE</option>
                            <option data-country_iso_code="SA" data-name='SA' value='SA'>SAUDI ARABIA</option>
                            <option data-country_iso_code="SN" data-name='SN' value='SN'>SENEGAL</option>
                            <option data-country_iso_code="RS" data-name='RS' value='RS'>SERBIA</option>
                            <option data-country_iso_code="SC" data-name='SC' value='SC'>SEYCHELLES</option>
                            <option data-country_iso_code="SL" data-name='SL' value='SL'>SIERRA LEONE</option>
                            <option data-country_iso_code="SG" data-name='SG' value='SG'>SINGAPORE</option>
                            <option data-country_iso_code="SK" data-name='SK' value='SK'>SLOVAKIA</option>
                            <option data-country_iso_code="SI" data-name='SI' value='SI'>SLOVENIA</option>
                            <option data-country_iso_code="SB" data-name='SB' value='SB'>SOLOMON ISLANDS</option>
                            <option data-country_iso_code="SO" data-name='SO' value='SO'>SOMALIA</option>
                            <option data-country_iso_code="ZA" data-name='ZA' value='ZA'>SOUTH AFRICA</option>
                            <option data-country_iso_code="GS" data-name='GS' value='GS'>SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                            <option data-country_iso_code="ES" data-name='ES' value='ES'>SPAIN</option>
                            <option data-country_iso_code="LK" data-name='LK' value='LK'>SRI LANKA</option>
                            <option data-country_iso_code="SD" data-name='SD' value='SD'>SUDAN</option>
                            <option data-country_iso_code="SR" data-name='SR' value='SR'>SURINAME</option>
                            <option data-country_iso_code="SJ" data-name='SJ' value='SJ'>SVALBARD AND JAN MAYEN</option>
                            <option data-country_iso_code="SZ" data-name='SZ' value='SZ'>SWAZILAND</option>
                            <option data-country_iso_code="SE" data-name='SE' value='SE'>SWEDEN</option>
                            <option data-country_iso_code="CH" data-name='CH' value='CH'>SWITZERLAND</option>
                            <option data-country_iso_code="SY" data-name='SY' value='SY'>SYRIAN ARAB REPUBLIC</option>
                            <option data-country_iso_code="TW" data-name='TW' value='TW'>TAIWAN, PROVINCE OF CHINA</option>
                            <option data-country_iso_code="TJ" data-name='TJ' value='TJ'>TAJIKISTAN</option>
                            <option data-country_iso_code="TZ" data-name='TZ' value='TZ'>TANZANIA, UNITED REPUBLIC OF</option>
                            <option data-country_iso_code="TH" data-name='TH' value='TH'>THAILAND</option>
                            <option data-country_iso_code="TL" data-name='TL' value='TL'>TIMOR-LESTE</option>
                            <option data-country_iso_code="TG" data-name='TG' value='TG'>TOGO</option>
                            <option data-country_iso_code="TK" data-name='TK' value='TK'>TOKELAU</option>
                            <option data-country_iso_code="TO" data-name='TO' value='TO'>TONGA</option>
                            <option data-country_iso_code="TT" data-name='TT' value='TT'>TRINIDAD AND TOBAGO</option>
                            <option data-country_iso_code="TN" data-name='TN' value='TN'>TUNISIA</option>
                            <option data-country_iso_code="TR" data-name='TR' value='TR'>TURKEY</option>
                            <option data-country_iso_code="TM" data-name='TM' value='TM'>TURKMENISTAN</option>
                            <option data-country_iso_code="TC" data-name='TC' value='TC'>TURKS AND CAICOS ISLANDS</option>
                            <option data-country_iso_code="TV" data-name='TV' value='TV'>TUVALU</option>
                            <option data-country_iso_code="UG" data-name='UG' value='UG'>UGANDA</option>
                            <option data-country_iso_code="UA" data-name='UA' value='UA'>UKRAINE</option>
                            <option data-country_iso_code="AE" data-name='AE' value='AE'>UNITED ARAB EMIRATES</option>
                            <option data-country_iso_code="GB" data-name='GB' value='GB'>UNITED KINGDOM</option>
                            <option data-country_iso_code="US" data-name='US' value='US'>UNITED STATES</option>
                            <option data-country_iso_code="UM" data-name='UM' value='UM'>UNITED STATES MINOR OUTLYING ISLANDS</option>
                            <option data-country_iso_code="UY" data-name='UY' value='UY'>URUGUAY</option>
                            <option data-country_iso_code="UZ" data-name='UZ' value='UZ'>UZBEKISTAN</option>
                            <option data-country_iso_code="VU" data-name='VU' value='VU'>VANUATU</option>
                            <option data-country_iso_code="VE" data-name='VE' value='VE'>VENEZUELA</option>
                            <option data-country_iso_code="VN" data-name='VN' value='VN'>VIET NAM</option>
                            <option data-country_iso_code="VG" data-name='VG' value='VG'>VIRGIN ISLANDS, BRITISH</option>
                            <option data-country_iso_code="VI" data-name='VI' value='VI'>VIRGIN ISLANDS, U.S.</option>
                            <option data-country_iso_code="WF" data-name='WF' value='WF'>WALLIS AND FUTUNA</option>
                            <option data-country_iso_code="EH" data-name='EH' value='EH'>WESTERN SAHARA</option>
                            <option data-country_iso_code="YE" data-name='YE' value='YE'>YEMEN</option>
                            <option data-country_iso_code="ZM" data-name='ZM' value='ZM'>ZAMBIA</option>
                            <option data-country_iso_code="ZW" data-name='ZW' value='ZW'>ZIMBABWE</option>
                        </select><input type="hidden" name="country_code" value="" /></div>
                    <div class='d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none' name='form_key' placeholder='' value='email_us_form' />
                    </div>
                    <div class='mex-form-item col-12 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Phone</label>
                        <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.' data-extra-message="Phone Number Invalid" data-regex='' class='input_with_phone form-control mb-0 input_with_phone' name='phone_display' placeholder='' required value='' />
                        <input type='hidden' name='phone' />
                    </div>
                    <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                        <input type='number' name='phone_sms_verif_code' class='sms_verif_code regCon oth_sp' placeholder='SMS Code' required='required' number='true' autocomplete='off' list='autocompleteOff' />
                    </div>
                    <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                        <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset ' id='button-send-callme_form' type='button' title='Send Code'>Send Code</button>
                    </div>
                    <div class='mex-form-item col-12 mb-3 p-1'>
                        <label for='order_message' class='d-block'>
                        </label>
                        <textarea data-message='Message is Required.' data-extra-message="Message is Invalid." data-regex='' class=' form-control w-100 ta-message' name='message' id='order_message' placeholder=''>Hello, I am interested in learning more about MultiBank products and services. Could you please contact me</textarea>
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-="">SEND</button>
                </form>
            </div>
        </div>
    </div>
    <style>
        .modal-box__email-us {
            width: 100%;
            height: 100vh;

            position: fixed;
            top: 0;
            left: 0;

            display: none;
            justify-content: center;
            align-items: center;

            z-index: 99999;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-box__email-us.show {
            display: flex;
        }

        .modal-box__email-us .btn-modal-close {
            font-size: 20px;

            position: absolute;
            top: 10px;
            right: 10px;

            color: rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }

        #email_us_form .form-control {
            height: 45px;
            background: #FFF;
        }

        #email_us_form .btn-submit {
            background-color: #0390D7;
            border-color: #0390D7;
            min-width: 100px;
        }

        #email_us_form .form-control.ta-message {
            height: 130px;
            border-radius: 0;
        }
    </style>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.email-us-tg').click(function(e) {
                e.preventDefault();
                $('.modal-box__email-us').addClass('show');
            });
            $('.modal-box__email-us .btn-modal-close').click(function(e) {
                e.preventDefault();
                $('.modal-box__email-us').removeClass('show');
            });
        })
    </script>
    <script src="/public_files/static_js/lang_data/en.js" type="text/javascript"></script>
    <script src="/public_files/static_js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/public_files/static_js/lazysizes.min.js" type="text/javascript"></script>
    <script src="/public_files/static_js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/public_files/static_js/intlTelInput.min.js" type="text/javascript"></script>
    <script src="/public_files/static_js/app.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {
            $('.mex-translatable').each(function() {
                var url_parts = location.hostname.split('.');
                if (url_parts.length == 3) {
                    var subdomain = url_parts.shift();

                    if (subdomain == 'ae' && document.documentElement.lang == 'aen') {
                        subdomain = 'aen';
                    }
                    if ($(this).data(subdomain) && (typeof $(this).data(subdomain) !== 'undefined')) {



                        var translation = $(this).data(subdomain);
                        $(this).html(translation);
                    }
                }
            });


            var test_lang = getUrlVars()['test_lang'];
            if (typeof test_lang !== 'undefined') {
                $('a').each(function() {
                    var old_url = $(this).attr("href");
                    if (typeof old_url !== 'undefined') {
                        var newUrl = old_url + '?test_lang=' + test_lang;
                        $(this).attr("href", newUrl);
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var iframe_ibnum = getUrlVars()['ibNum'];
            var is_iframe = getUrlVars()['is_iframe'];
            if (typeof iframe_ibnum === 'string' && typeof is_iframe === 'string') {
                $('a').each(function() {
                    var querystring = 'ibNum=888104724';
                    var href = $(this).attr('href');
                    if (href) {
                        href += (href.match(/\?/) ? '&' : '?') + querystring;
                        $(this).attr('href', href);
                    }
                });
            }
        });
    </script>
    <script src="/public_files/static_js/swiper-4.3.5.min.js" type="text/javascript"></script>
    <script src="/public_files/static_js/app_home.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
        .home-banner-form .btn-contact {
            line-height: 1.1;
        }

        .home-banner-form .btn-partner {
            padding: 5px 0;
            line-height: 1 !important;
        }

        .home-banner-form .mex-h3 {
            line-height: 20px;
        }

        .form-check-label {
            line-height: 1.2;
        }

        .swiper-slide .min1 {
            height: 600px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        @media (min-width: 1441px) and (max-width: 1920px) {
            .home-banner-form {
                top: 220px;
                left: 50%;
                margin-left: 260px;
            }

            .container {
                position: static;
                width: auto;
            }
        }

        @media (min-width: 1281px) and (max-width: 1440px) {
            .swiper-slide .min1 {
                width: 1680px;
                height: 600px;
            }

            .home-banner-form {
                top: 180px;
                margin-left: 230px;
            }

            .home-banner-form .p-1 {
                padding: 0.15rem 0.25rem !important;
            }

            .home-banner-form .cb-partnership {
                padding: 0.25rem 0.25rem 0 0.25rem !important;
            }

            .home-banner-form label {
                line-height: 12px;
            }

            .home-banner-form .bg-dark {
                margin: 0.25rem !important;
            }

            .home-banner-form .btn-contact {
                margin-top: 0.25rem !important;
            }
        }

        @media (min-width: 1201px) and (max-width: 1280px) {
            .home-banner-form {
                top: 190px !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .swiper-slide .min1 {
                width: 1440px;
                height: 600px;
            }

            .home-banner-form {
                top: 170px !important;
                margin-left: 205px;
                width: 27%;
            }

            .bg-000 {
                width: 115%;
            }

            .home-banner-form .p-1 {
                padding: 0.10rem 0.25rem !important;
            }

            .home-banner-form .my-2 {
                margin: 0.20rem 0.25rem !important;
            }

            .home-banner-form .cb-partnership {
                padding: 0.25rem 0.25rem 0 0.25rem !important;
            }

            .home-banner-form label {
                line-height: 12px;
            }

            .home-banner-form .bg-dark {
                margin: 0.15rem 0.25rem !important;
            }

            .home-banner-form .btn-contact {
                margin-top: 0.15rem !important;
                padding: 2px 0 !important;
            }

            .home-banner-form .contact-form-button-container a {
                margin-bottom: 3px !important;
                padding: 0 auto !important;
            }

            .home-banner-form .form-check {
                margin: -10px auto -4px !important;
            }

            .home-banner-form .mex-form-item input,
            .mex-form-item select {
                height: 33px;
            }

            .home-banner-form .contact-form-button-container a {
                padding: 5px 10px !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .home-banner-form {
                top: 150px;
            }
        }

        @media (max-width: 992px) {
            .swiper-slide .min2 {
                background-repeat: no-repeat;
                background-size: contain;
            }

            .swiper-slide .min2 img {
                width: 100%;
                max-width: 100%;
            }

            .home-banner-form {
                margin-top: 15px;
            }
        }

        @media (max-width: 1920px) and (min-width: 1400px) {
            .container .home-banner-form {
                top: 272px;
                margin-left: 388px;
            }
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
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
            $('#home-carousal-banner').slick({
                centerMode: false,
                slidesToShow: 2,
                infinite: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,

            });

        });
    </script>
    <style>
        .home-banner-form .btn-contact {
            line-height: 1.1;
        }

        .home-banner-form .btn-partner {
            padding: 5px 0;
            line-height: 1 !important;
        }

        .form-check-label {
            line-height: 1.2;
        }

        .swiper-slide .min1 {
            height: 600px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        @media (min-width: 992px) and (max-width: 1920px) {
            .home-banner-form {
                top: 260px;
                left: 50%;
                margin-left: 260px;
            }

            .container {
                position: static;
                width: auto;
            }
        }

        @media (min-width: 992px) and (max-width: 1440px) {
            .swiper-slide .min1 {
                width: 1680px;
                height: 600px;
            }

            .home-banner-form {
                top: 245px;
                margin-left: 230px;
            }

            .home-banner-form .p-1 {
                padding: 0.15rem 0.25rem !important;
            }

            .home-banner-form .cb-partnership {
                padding: 0.25rem 0.25rem 0 0.25rem !important;
            }

            .home-banner-form label {
                line-height: 12px;
            }

            .home-banner-form .bg-dark {
                margin: 0.25rem !important;
            }

            .home-banner-form .btn-contact {
                margin-top: 0.25rem !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1280px) {
            .swiper-slide .min1 {
                width: 1440px;
                height: 600px;
            }

            .home-banner-form {
                top: 210px;
                margin-left: 205px;
                width: 27%;
            }

            .bg-000 {
                width: 115%;
            }

            .home-banner-form .p-1 {
                padding: 0.10rem 0.25rem !important;
            }

            .home-banner-form .my-2 {
                margin: 0.20rem 0.25rem !important;
            }

            .home-banner-form .cb-partnership {
                padding: 0.25rem 0.25rem 0 0.25rem !important;
            }

            .home-banner-form label {
                line-height: 12px;
            }

            .home-banner-form .bg-dark {
                margin: 0.15rem 0.25rem !important;
            }

            .home-banner-form .btn-contact {
                margin-top: 0.15rem !important;
                padding: 2px 0 !important;
            }

            .home-banner-form .contact-form-button-container a {
                margin-bottom: 3px !important;
                padding: 0 auto !important;
            }

            .home-banner-form .form-check {
                margin: -10px auto -4px !important;
            }

            .home-banner-form .mex-form-item input,
            .mex-form-item select {
                height: 33px;
            }

            .home-banner-form .contact-form-button-container a {
                padding: 5px 10px !important;
            }
        }

        @media (min-width: 992px) and (max-width: 1024px) {
            .home-banner-form {
                top: 205px;
            }
        }

        @media (max-width: 992px) {
            .swiper-slide .min2 {
                background-repeat: no-repeat;
                background-size: contain;
            }

            .swiper-slide .min2 img {
                width: 100%;
                max-width: 100%;
            }

            .home-banner-form {
                margin-top: 15px;
            }
        }

        #swiper-container-lp .swiper-slide .min1 {
            height: 703px;
        }

        @media (max-width: 1440px) and (min-width: 992px) {
            #swiper-container-lp .swiper-slide .min1 {
                height: 600px;
            }
        }

        @media (max-width: 1280px) and (min-width: 992px) {
            #swiper-container-lp .swiper-slide .min1 {
                height: 600px;
            }
        }
    </style>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer=""></script>



</body>

</html>