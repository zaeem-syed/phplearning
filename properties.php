<?php 
class Customer {
    //private $first_name;
     private  $last_name;
    // private $age;
    var $country;
    var $age;

    function setFirstname($first_name)
    {
        $this->first_name=$first_name;
    }
    function getFirstname()
    {
        return $this->first_name;
    }
}


$customer= new Customer;
$customer->setFirstname("anna");
//$customer->last_name="malik";
//echo $customer->getFirstname();

$customer->country="usa";
//$customer->last_name="malik";


echo $customer->country. "<br>";

$vars=get_class_vars('Customer');


echo "variables of Class Customer are <br>";
echo "<pre>";
print_r($vars);
echo "</pre>";


$obj_vars=get_object_vars($customer);

echo "variables of  Customer Object  are <br>";
echo "<pre>";
print_r($obj_vars);
echo "</pre>";





//echo $customer->last_name;




?>

<a href="methods.php">Methods</a>