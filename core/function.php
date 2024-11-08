<?php
function dd($value){
    echo '<pre>';
    var_dump($value);
    die();
}

function active($uri){
    return $_SERVER['REQUEST_URI'] == $uri ? 'active' : '';
}

function getProduct(){
    require 'core/database.php';

$query = 'SELECT * FROM `products`';

$result = $conn->query($query);

if ($result->num_rows > 0){
    return $result->fetch_all(MYSQLI_ASSOC);
    //dd($products);
}

}