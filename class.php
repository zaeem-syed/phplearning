<?php 

class calculation {
public $a,$b,$c;
private $z;


function sum($a,$b)
{
    $this->a=$a;
    $this->b=$b;
    $c=$a+$b;
    return $c;
}

public function setz($z)
{
    $this->z=$z;
}
public function name()
{
    return $this->z;
}



}


$obj =new calculation();
echo $obj->sum(10,5);
$obj->setz("helloworld");

echo $obj->name();











?>