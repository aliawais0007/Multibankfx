<?php

$news = get_news();

foreach ($news as $a){
    echo json_encode($news);
}
?>