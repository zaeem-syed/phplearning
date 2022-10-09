<?php 
class Vechile {
    var $doors;
    var $wheels;
    var $color;


    function is_good_for_rain()
    {
        return true;
    }

}

Class Car extends Vechile{
    var $doors="4";
    var $wheels="4";
    var $color="white";
    var $convertable;

    function is_good_for_rain()
    {
        if($this->convertable=='false')
        {
            return false;
        }else {
            return true;
        }
    }
}

Class Motorcycle extends Vechile{
    var $doors=0;
    var $wheels=2;

    function is_good_for_rain()
    {
        return false;
    }
}

Class Bus extends Vechile{
    var $doors="3";
    var $wheels="6";
}


$bus =new Bus;
$namebus=get_class($bus);
echo "This Vechile is  ".get_class($bus)." ".$bus->is_good_for_rain()." <br>";
echo "this {$namebus} has ".$bus->doors." Doors<br>"; 
echo "this {$namebus} has ".$bus->wheels." Wheels <br>"; 

if($bus->is_good_for_rain()=='0')
{
    echo "this is not good for rain";
}else {
    echo "this is good for rain ";
}
echo "<br>";
echo "<br>";


$motorcycle= new Motorcycle;
$motor=get_class($motorcycle);
echo "This Vechile is {$motor} <br>";
echo "this {$motor} has ".$motorcycle->doors." Doors <br>";
echo "this {$motor} has ".$motorcycle->wheels."Wheels <br>";
if($motorcycle->is_good_for_rain()=='0')
{
    echo "this is not good for rain";
}else {
    echo "this is good for rain ";
}
 echo "<br>";

$car= new Car;
$motor_car=get_class($car);
$car->convertable="true";
echo "<br>";
echo "This Vechile is {$motor_car} <br>";
echo "this {$motor_car} has ".$car->doors." Doors<br>";
echo "this {$motor_car} has ".$car->wheels."Wheels <br>";
if($bus->is_good_for_rain()=='0')
{
    echo "this is not good for rain";
}else {
    echo "this is good for rain ";
}


?>