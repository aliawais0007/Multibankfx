<!DOCTYPE html>
<html lang='aen'>
<?php include_from_root('website_template/head.php'); ?>

<body>
    <?php include_from_root('website_template/header_and_menu.php'); ?>
    <style>
        .st-slide-header::after {
            font-size: 24px;
        }

        .st-slide-content {
            display: none;
        }

        .st-slide-header1::after {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            font-size: 40px;
            content: "\e64b";
            font-family: 'themify';
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            transition-duration: 0.3s;
        }

        .st-slide-header1 {
            font-size: 24px;
            line-height: 1.2;
        }

        .st-slide-header1 {
            position: relative;
            background-color: #006ACE;
            cursor: pointer;
        }

        .st-slide-header::after {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            font-size: 40px;
            content: "\e64b";
            font-family: 'themify';
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            transition-duration: 0.3s;
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

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMX9SQ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <section class="st-section pt-0">
        <div class="banner_overlay"></div>
        <img style="object-fit: cover;position:absolute" src="/public_files/images/social_trading/st_faq_banner.jpg" alt="">
        <div class="container text-center mex-p-v-80 row justify-content-end mx-auto">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="mex-h2 mex-m-b-20 text-fff text-left">Frequently Asked Questions</div>
                <div class="text-uppercase text-fff text-left">Everything You Need To Know, All In One Place</div>
                <div class="slider-icons">
                    <div class="slider-icon"><a href="/social-trading/trader.php"><img src="/public_files/images/social_trading/icon_investor.png"><br />TRADER >></a></div>
                    <div class="slider-icon"><a href="/social-trading/investor.php"><img src="/public_files/images/social_trading/icon_signal_provider.png"><br />INVESTOR >></a></div>
                    <div class="slider-icon"><a href="/social-trading/faq.php"><img src="/public_files/images/social_trading/icon_faq.png"><br />FAQ >></a></div>
                    <div class="slider-icon"><a href="/social-trading/leaderboard.php"><img src="/public_files/images/social_trading/icon_leader_board.png"><br />LEADERBOARD >></a></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xs-12 mx-auto">
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">How Do I Become a Signal Provider?</div>
                    <div class="st-slide-content">
                        <ol class="py-2">
                            <li class="mb-3">Open a live Account <a style="color: #006ACE; text-decoration: underline;" href="/social-trading/live-account.php">HERE</a></li>
                            <li class="mb-3">Fund your account</li>
                            <li class="mb-3">Go to <a style="color: #006ACE; text-decoration: underline;" href="https://invest.multibankfx.com">invest.multibankfx.com</a></li>
                            <li class="mb-3">Login with credentials that you recevied via email at step 2</li>
                            <li class="mb-3">Click the button "Create a Master Account"</li>
                        </ol>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">How Do I Become an Investor?</div>
                    <div class="st-slide-content">
                        <ol class="py-2">
                            <li class="mb-3">Open a live Account <a style="color: #006ACE; text-decoration: underline;" href="/social-trading/live-account.php">HERE</a></li>
                            <li class="mb-3">Fund your account</li>
                            <li class="mb-3">Go to <a style="color: #006ACE; text-decoration: underline;" href="https://invest.multibankfx.com">invest.multibankfx.com</a></li>
                            <li class="mb-3">Click the button "Create an Investment Account"</li>
                            <li class="mb-3">Login with credentials that you recevied via email at step 2</li>
                            <li class="mb-3">Go to Leaderboard</li>
                            <li class="mb-3">Choose a Signal Provider that you want to copy</li>
                            <li class="mb-3">Click "Subscribe"</li>
                        </ol>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">How Do I Change My Account Name?</div>
                    <div class="st-slide-content">
                        <ol class="py-2">
                            <li class="mb-3">Login to <a style="color: #006ACE; text-decoration: underline;" href="https://invest.multibankfx.com">invest.multibankfx.com</a></li>
                            <li class="mb-3">Click on your Investment Account or Master Account</li>
                            <li class="mb-3">Go to the Settings tab</li>
                            <li class="mb-3">Click "Change Name" </li>
                        </ol>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">How Do I Unsubscribe from a Master Account?</div>
                    <div class="st-slide-content">
                        <ol class="pt-2">
                            <li class="mb-3">Login to <a style="color: #006ACE; text-decoration: underline;" href="https://invest.multibankfx.com">invest.multibankfx.com</a></li>
                            <li class="mb-3">Click on your Investment Account</li>
                            <li class="mb-3">Go to "My Subscriptions" tab</li>
                            <li class="mb-3">Click "Unsubscribe" button</li>
                        </ol>
                        <div class="ml-3 pb-2">After you unsubscribe, you will no longer copy any new trades of the Master Account you were subscribed to</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">Who Are Signal Providers?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2"><strong>Signal Providers</strong> are experienced traders who share their trading operations, thereby allowing Investors to copy the trading activities of these Signal Providers into their own trading account. Signal Providers trade with real money in their Master Accounts, and all our Signal Providers’ Master Accounts are aggregated and ranked by order of best performance and are displayed in the Leaderboard section of our Social Trading page. On the Leaderboard, all Signal Providers’ trading history and detailed performance statistics will be displayed publicly so as to allow Investors to pick and choose various Signal Providers they’d like to copy, based on their individual investment objectives.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">Does the Leaderboard Display Real-Time Information?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">MultiBank Group guarantees that all Master Accounts displayed on the Leaderboard are traded in real-time with real money using live trading account and not demo accounts. All statistics and data displayed on the Leaderboard are complete, accurate and up to date.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">What do I Need to Start Copy Trading?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">It’s very easy to become and Investor and start copy trading. All you need to do is open a live account with MultiBank FX International Corporation (BVI). Once your account has been opened, deposit funds into your account. Then open an Investment Account on our Social Trading (invest.multibankfx.com). From there, choose the Signal Providers you’d like to copy trades from, and simply click the “Subscribe” button.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">Can I Copy from Multiple Signal Providers?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">Yes, as an Investor, you can copy from as many Signal Providers as you like at the same time. There is no cap on the maximum number of Master Accounts an Investor can subscribe to. </div>
                        <div class="ml-3 pb-2">Investors can also customize the how they copy the trades of various Master Accounts by assigning specific ratios to each Master Account they subscribe to: </div>
                        <ul class="pt-2">
                            <li class="mb-3">Copy trades in proportion to the equity of each Master Account.<br />For example, if an Investor has $1,000 in their trading account and a Signal Provider has $100,000 in their account, if the Signal Provider trades 5 lots, the Investor will trade a proportional 0.05 lots, calculated based on the ratio between the Investor’s equity and Signal Provider’s equity. </li>
                            <li class="mb-3">Copy trades by setting a specific ratio for each Master Account.</li>
                        </ul>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">What are the Fees Charged to Investors for Copy Trading?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">Signal Providers will set their own Payout amount & Payout Interval. Before you subscribe to a Signal Provider and start copying their trades, please check their Fee Structure accordingly. In terms of the Payout Interval, this can be set to anything from daily, weekly or monthly payouts. At the end of each Payout Interval, the profits generated on the Investor’s Account from copying the strategies of a specific Signal Provider will be automatically split between the Investor and Signal Provider based on a higher watermark.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">How Much Can I Make as a Signal Provider?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">Payouts to Signal Providers are calculated based on percentage of profit arising from the Investor’s account, dependant on Payout Interval and in consideration of previously paid out amount based on high watermark.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">As a Signal Provider, Can I Customize My Payout Structure?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">Yes, Signal Providers can set their own Payout structure as they see fit. Signal Providers can personally set the amount and interval of payments for each of their Master Account. Payout Intervals can be set to daily, weekly or monthly Payouts. Payout amount can also be set in proportion to the Investor’s account size. For example, if an Investor has an account with less than $1,000, the Signal Providers can set the Payout amount to be 30% of their profits. If the investor has an account with between $1,000- $10,000, the Signal Provider can set the Payout amount to be 20% of their profits, and so on.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">Are the Payouts Made Automatically?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">Yes, all Payouts to Signal Providers are completely automated and are set based on the Payout Methods of their choice. Signal Providers can personally set the sizes and periods of payments for each of their Master Account.</div>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">As an Investor, How Do I Make Money with Social Trading?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">There are many ways you can make money through MultiBank Group Social Trading, but here are the two most common ways:</div>
                        <ol class="pt-2">
                            <li class="mb-3">Copy the trades of the most profitable Signal Providers who perform with consistent returns and start automating your income </li>
                            <li class="mb-3">Create a balanced portfolio of diversified investments to increase stability of investments and minimize risk</li>
                        </ol>
                    </div>
                    <div class="mex-h2 py-2 px-3 text-fff st-slide-header1 mb-3">How Do I Choose Which Signal Providers to Follow?</div>
                    <div class="st-slide-content">
                        <div class="ml-3 py-2">There are several important indicators that can help Investors analyze which accounts to follow.</div>
                        <div class="ml-3 pb-1">Profitability: The first common indicator to check would be Profitability. Review the Signal Provider’s past trading records and assess their profitability based on past performance.</div>
                        <div class="ml-3 pb-2">Active Account Duration: One important indicator to pay attention to is checking the how long the account has been active for, and how long the account has been earning profits. You can find this through the Leaderboard account statistics, where you can see charts and graphs showing the account’s activity & entire history.</div>
                        <div class="ml-3 pb-2">Maximum Drawdown: Another thing to check for is the maximum drawdown on the account in relation to the profit of the account. This allows Investors to determine the aggressiveness of the Signal Provider’s strategy.</div>
                        <div class="ml-3 pb-4">Other Indicators: There are many other indicators that Investors can watch out for. For example, percentage of profitable trades, percentage of losing trades, Profit Factor, Recovery Factor, etc. If you’d like to learn more about the various indicators, you can find them here:</div>
                        <div class="pb-2 d-flex"><img class="w-75 mx-auto" src="/public_files/images/social_trading/fi_other_indicators.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fff">
        <div class="row container mx-auto">
            <div class="col-lg-6 col-xs-12">
                <p>Follow the Success of Professional Traders</p>
                <p class="text-005190 mex-h2 st-h2">Investing Reimagined</p>
                <p class="st-h4">With MultiBank Group Social Trading, subscribe to one or more Signal Provider's Master Accounts and automatically copy their positions onto your account.
                    See how profitable traders open and close their positions and learn from their success. You are in full control of your account and can also make your own trades on it directly.</p>
                <ul class="text-005190 st-grow-wealth-list fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Earn passive income</li>
                    <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Learn to trade successfully</li>
                    <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Spot & trade on opportunities</li>
                </ul>
                <div class="row ml-0"><a href="https://invest.multibankfx.com" class="btn-st-006AD0 ml-0 text-fff">Join as Investor</a><a href="https://invest.multibankfx.com" class="btn-st-005190 ml-0 text-fff">Join as Signal Provider</a></div>
            </div>
            <div class="col-lg-6 col-xs-12 text-right">
                <img class="w-100" src="/public_files/images/social_trading/fi_investing_reimagined.jpg" />
            </div>
        </div>
    </section>
    <style>
        .st-slide-header1 {
            font-size: 24px;
            line-height: 1.2;
        }

        .st-slide-header::after {
            font-size: 24px;
        }

        .slider-icons {
            margin: 10px 0 0 -15px;
            text-align: left;
        }

        .slider-icons a {
            color: #fff;
            font-size: 18px;
            letter-spacing: -1px;
        }

        .slider-icons .slider-icon {
            display: inline-block;
            text-align: center;
            width: 120px;
        }

        @media only screen and (max-width: 1280px) {
            .slider-icons img {
                max-width: 66px;
                height: auto;
            }

            .slider-icons a {
                font-size: 16px;
            }

            .slider-icons {
                min-width: 430px;
            }

            .slider-icons .slider-icon {
                width: 105px;
            }
        }

        @media only screen and (max-width: 1024px) {
            .slider-icons img {
                max-width: 55px;
            }

            .slider-icons a {
                font-size: 14px;
            }

            .slider-icons {
                min-width: 400px;
            }

            .slider-icons .slider-icon {
                width: 95px;
            }
        }

        @media only screen and (max-width: 860px) {
            .slider-icons {
                margin-left: -10px;
            }

            .slider-icons img {
                max-width: 45px;
            }

            .slider-icons a {
                font-size: 13px;
            }

            .slider-icons {
                min-width: 360px;
            }

            .slider-icons .slider-icon {
                width: 86px;
            }

        }

        @media only screen and (max-width: 576px) {
            .banner_overlay {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                background-color: rgba(11, 34, 83, 0.7);
            }

        }
    </style>

    <?php include_from_root('website_template/page_footer.php'); ?>

    <style type="text/css">
        .slidebar a span.btn {
    padding: 0;
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
                <form action="/form/contactus?" name='email_us_form' class='multibank-form row mx-0 w-100 new' method='post' enctype='' id='email_us_form' target='' autocomplete='on'>
                    <input type='hidden' name='t_date' value='MjAyMC0wNy0yOCAyMTozODo1Mw==' />
                    <input type='hidden' name='token' value='$2y$10$CJReqkizdFWk1xzRUKFtEu1IzJTVo0l.yeWc3zMuTLoe2yC/Rsf5y' />
                    <input type='hidden' name='source' value='[2020-07-26 15:14:06] https://ae.multibankfx.com/<br/><br/>[2020-07-28 16:49:34] https://www.multibankfx.com/social-trading<br/><br/>[2020-07-28 21:38:10] https://ae.multibankfx.com/<br/><br/>[2020-07-28 21:38:15] https://ae.multibankfx.com/social-trading<br/><br/> <br/><br/> posted From: ae.multibankfx.com/social-trading/faq?web=true' />
                    <div class='col-12 p-0'>
                        <label for='' class='mex-h3'>
                            Email US</label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none' name='label_title' placeholder='' value='' />
                    </div>
                    <div class='d-none'>
                        <label for='' class='m-0 d-none'>
                        </label>
                        <div class='form-check form-check-inline'><input data-message='Account Type is Required.' data-extra-message="Account type Invalid." class='   ' name='account_type' type='radio' required value='1' checked />
                            <label class='  ' for=''>INDIVIDUAL</label>
                        </div>
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Full Name</label>
                        <input type="text" data-message="Full Name is Required." data-extra-message="Full Name Invalid." data-regex="" class="form-control mb-0" name="name" placeholder="Full Name" required value="" />
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Email</label>
                        <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid." data-regex='' class='form-control mb-0' name='email' placeholder='Email' required value='' />
                    </div>
                    <div class='mex-form-item col-12 p-1 d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <select data-message='Confirm Email is Required.' data-extra-message="Email Mismatched." class='selection-country form-control  mb-0 select_with_country select_with_country' name='country_name' required>
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
                        <input type='phone' data-ip_country_code='AE' data-message='Phone Number is required.' data-extra-message="Phone Number Invalid" data-regex='' class='input_with_phone form-control mb-0 input_with_phone' name='phone_display' placeholder='' required value='' />
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
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script src="/public_files/static_js/lang_data/aen.js" type="text/javascript"></script>
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
            console.log(typeof is_iframe);
            console.log(typeof iframe_ibnum);
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
    <script type="text/javascript">
        $(document).ready(function() {



        })
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer=""></script>
</body>

</html>