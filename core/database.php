<?php
// require 'core/function.php';

$conn = new mysqli('127.0.0.1', 'root', '', 'giftos');
//localhost is 127.0.0.1

if ($conn->connect_error){
    die('connection failed');
// } else {
//     dd('connection successful');
}