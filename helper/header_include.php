<?php

$document_root = $_SERVER['DOCUMENT_ROOT'];

$url_base_path=$root_path;
$url_base_path =str_replace('/private','',$url_base_path);
$url_base_path =str_replace($document_root,'',$url_base_path);

$request_url = trim($_SERVER['REQUEST_URI']);
$request_url = explode('?',$request_url);
$request_file = $request_url[0];
$request_file =( $request_file=='/' )?'home-blue.php':$request_file;
include $root_path.'database/db_driver.php';

function include_from_root($path)
    {
        global $root_path;
        include($root_path.$path);
}
