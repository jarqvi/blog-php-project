<?php

//config
define("BASE_URL", "http://localhost:8800/");

function redirect($url) {
    header("Location: " . BASE_URL/*trim(BASE_URL, "/ ")*/ . trim($url, "/ "));
    exit;
}
function asset($file) {
    return trim(BASE_URL, "/ ") . "/" . trim($file, "/ ");
}
function url($url) {
    return trim(BASE_URL, "/ ") . "/" . trim($url, "/ ");
}
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}