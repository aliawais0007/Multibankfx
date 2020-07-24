<?php

$news = get_news();

foreach ($news as $a){
    return "<h1>$a->$title</h1>";
}
?>