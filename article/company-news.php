<?php
$pagNews = get_news();
$itemc = "";
$item = "";
$itemb = "";

foreach ($pagNews as $list) {

    //  $url=   urlencode('newsdetail.php?title='+$list->title+'&articlebody='+$list->body+'&date='+$list->date+'&feature_image='+$list->featured_image);


    if ($list->classtype == "a") {

        $item = " 
                 

            
                    <div class='col-xs-12 col-sm-12 col-md-5' style= '    height: fit-content;
                    '>
                    <a class='article-block' href='/article/multibank-fast-n-furious-trading-contest-announcement'>
                        <div class='news-con-det-l'>
                            <img src='/multibankfx" . $list->post_image . "'
                                alt='Winners Announced for the MultiBank Fast &amp; Furious Trading Contest'>
                            <p class='news-con-h4 news-con-blue article-big-title'>" . $list->title . "</p>
                            <p class='news-con-date news-con-date-m'>" . $list->date . "</p>
                            <p class='news-con-main'>The top 3 winners of MultiBank’s latest demo trading contest are out! The MultiBank
                                Fast &amp; Furious Trading Contest was a month-long demo trading contest that allowed traders around the
                                world to show off their trading skills on our demo MT4 platform. </p>
                        </div>
                    </a></div>";
    } else if ($list->classtype == "b") {
        $classname1 = "col-xs-12 col-sm-12 col-md-7";
        $classname2 = "";



        $itemb = " 
                   <li>

                    <a class='article-block' href='/article/multibank-fast-n-furious-trading-contest'>
                        <div class='news-con-det-rbox clearfix news-con-det-marnone'>
                            <img src='/multibankfx" . $list->post_image . "' 
                                alt='MultiBank Fast &amp; Furious Trading Contest Starts Jan 6, 2020! '>
                            <div class='news-con-det-rbox-r'>
                                <p class='news-con-h4 news-con-blue article-big-title' >
                                    " . $list->title . "
                                    </p>
                                <p class='news-con-date'>" . $list->date . "</p>
                            </div>
                        </div>
                    </a>
            
                </li>
             

 
                ";
    } else if ($list->classtype == "c") {
        $itemc = " 
        
            <a class='article-block' href='/article/multibank-attends-macau-grand-prix-2019'>
                <div class='news-con-det-sec news-con-det-marnone'>
                    <img data-cfsrc='/public_files/blog/thumbnails/macau_gp_2019_thumbnail.jpg'
                        alt='MultiBank Group Attends Macau Grand Prix 2019'
                        src='/multibankfx" . $list->post_image . "'>
                    <p class='news-con-h4 news-con-blue article-big-title'>" . $list->title . "</p>
                    <p class='news-con-date news-con-date-m'>" . $list->date . "</p>
                    <p class='news-con-main'>In partnership with BMW M Motorsport, MultiBank Group took part in the 2019 Macau
                        Grand Prix in support of BMW Team Schnitzer and returning champion Augusto Farfus in the grand finale of
                        FIA GT World Cup.</p>
                </div>
            </a>
            
            ";
    }
}

?>

<html lang='en'>

<?php include_from_root('website_template/head.php'); ?>
<body>
<?php include_from_root('website_template/header_and_menu.php'); ?>
</body>
</html>