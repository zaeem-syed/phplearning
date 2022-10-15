<?php


Class Product {
    public $color;
    public $size;
    public static $instance_count=0;


    public function __construct()
    {
        self::$instance_count++;
    }

    public function __clone()
    {
        
        self::$instance_count++;
        echo "existing product has been copied";
    }    

}
Class Shirt extends Product{

}

$shirt= new Shirt;
$shirt->color="blue";
$shirt->size="medium";

$shirt1=clone $shirt;
$shirt1->color="green";
echo $shirt1->color;

echo Shirt::$instance_count;


$a=1;
//$b=$a;
$b=&$a;
echo "<hr>";
echo "<br> in the first occunrance ".$b;
echo "<hr>";
$a=35;
echo "<br> in the seccond  occunrance ".$b;
echo "<hr>";






?>