<?php
function dd($value){
    echo '<pre>';
    var_dump($value);
    die();
}

function active($uri){
    return $_SERVER['REQUEST_URI'] == $uri ? 'active' : '';
}