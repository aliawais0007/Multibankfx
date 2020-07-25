<?php

$document_root = $_SERVER['DOCUMENT_ROOT'];

$url_base_path=$root_path;
$url_base_path =str_replace('/private','',$url_base_path);
$url_base_path =str_replace($document_root,'',$url_base_path);

$request_url = trim($_SERVER['REQUEST_URI']);
$posted = preg_replace('? By.*/', '', $request_url);
echo $posted;
$request_file = $request_url;
$request_file =( $request_file=='/' )?'home.php':$request_file;
include $root_path.'database/db_driver.php';
echo $request_url;

function include_from_root($path)
    {
        global $root_path;
        include($root_path.$path);
}
