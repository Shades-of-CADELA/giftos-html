<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $product_name = $_POST['productname'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $imagePath = '';

    $image = $_FILES['imageupload'];
    // dd($image);

    $allowedFile = ['png', 'jpg', 'jpeg'];

    $imageType = pathinfo($image['name'], PATHINFO_EXTENSION);

    if (in_array($imageType, $allowedFile)) {
        $uploadPath =  __DIR__ . '/../assets/images/' . generateRandomString() . $image['name'];

        if (move_uploaded_file($image["tmp_name"], $uploadPath)) {
            require 'Core/Database.php';
            $imageDir = explode('images/', $uploadPath);
            
            
            $imagePath = '/assets/images/'.$imageDir[1];
            $query = "INSERT INTO `products`(`price`, `product_name`, `image_path`, `description`, `is_new`) VALUES ('$price','$product_name','$imagePath','$description','1')";
            $conn->query($query);
            echo 'upload successfull';
        }
    }

    // var_dump($image);

}


require 'views/admin.php';