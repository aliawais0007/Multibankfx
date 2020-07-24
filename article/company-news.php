<?php

$news = get_news();

foreach ($news as $a){
    echo $a->title;
}
?>