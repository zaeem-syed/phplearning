<?php

use Bicycle as GlobalBicycle;

Class Bicycle{
    
    public $model;
    public $brand;
    public $description="used one";
    private $weight_kg;
    protected $wheels="2";


    public function model()
    {
        return $this->model." ".$this->brand." ".$this->description;
    }

    public function set_weight($weight_kg)
    {
        $this->weight_kg=$weight_kg;
    }
    public function get_weight()
    {
        // $this->weight_lbs();
        return "weight in kg is ".$this->weight_kg."   <br>";
        
    }

    public function weight_lbs()
    {
        $weight_lbs=floatval($this->weight_kg)*2.20462;
        return $weight_lbs. " in lbs <br>";
    }

    public function wheel_details()
    {
        $wheels_total=$this->wheels==1 ?" 1 wheel" :"{$this->wheels} wheels";
        return "total number of wheels ".$wheels_total;
    }

}

Class UniCycle extends Bicycle{
    protected $wheels=1;
}

$new = new Bicycle;
$new->set_weight(1);
echo $new->get_weight()."<br>";
echo $new->weight_lbs()."<br>";
$new->brand="bmx";
$new->model="mountain-bike";

echo $new->model()."<br>";
echo $new->wheel_details()."<br>";
echo "<hr>";

$uni= new UniCycle;
echo $uni->wheel_details()."<br>";
// now setting private property using public functions in derived class 

$uni->set_weight(2)."<br>";
echo $uni->get_weight()."<br>";
echo $uni->weight_lbs()."<br>"








?>