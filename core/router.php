<?php
$requestURL = $_SERVER['REQUEST_URI'];

switch ($requestURL) {
    case '/':
        # code...
        require 'controllers/home.php';
        break;
    case '/shop':
            # code...
        require 'controllers/shop.php';
        break;
    case '/contact':
            # code...
        require 'controllers/contact.php';
        break;
    case '/testimonial':
            # code...
        require 'controllers/testimonial.php';
        break;
    case '/why':
        # code...
        require 'controllers/why.php';
        break;
    case '/admin':
        # code...
        require 'controllers/admin.php';
        break;
    default:
        # code...
        require 'views/404.php';
        break;
}
