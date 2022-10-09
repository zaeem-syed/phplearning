<?php 

Class Bicycle{
    var $model;
    var $brand;
    var $year;
    var $description;
    var $weight_kg;

    function name()
    {
        return $this->model." ".$this->brand. " ".$this->year;
    }
    function weight_lbs($weight_kg)
    {
             return $weight_kg *2.20462;
            
    }

    function set_weightlbs()
    {
            $this->weight_kg= $this->weight_lbs($this->weight_kg);   
            return $this->weight_kg;
    }   

}
$new =new Bicycle;
$new->model="v Pro";
$new->brand="Bmx";
$new->year= "2021";
$new->weight_kg="6.5";
echo $new->weight_kg;
echo $new->name(). "<br>";
echo $new->set_weightlbs()."<br>";
echo $new->weight_kg;





?>