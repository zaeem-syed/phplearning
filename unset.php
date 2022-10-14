<?php


Class Product {

public static $instance_count=0;

public function __construct()
{
    //Logger::log('create a new product');
    self::$instance_count++;
}

public function __destruct()
{
    //Logger::log('deleteing a product');
    //self::$instance_count--;
    echo "bye";
}

}
Class Shirt extends Product{

}



$shirt= new Shirt;
$product= new Product;
echo Product::$instance_count;








?>