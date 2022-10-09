<?php

use Customer as GlobalCustomer;

class Customer {

private $age;
public $name;

function setage($age)
{
    $this->age=$age;
}
function getage()
{
    return $this->age;
}




}

$name= new Customer();
$name->name="Ali Hassan";
$name->setage("23");
echo $name->name." "."is ".$name->getage()."years old";
$get_class_methods=get_class_methods('Customer');
echo "<pre>";

print_r($get_class_methods);
echo "</pre>";



?>


<a href="challenge_01.php">Challenge</a>