<?php

use Bicycle as GlobalBicycle;
use UniCycle as GlobalUniCycle;

Class Bicycle{
    
    public $model;
    public $brand;
    public $description="used one";
    private $weight_kg;
    protected static $wheels="2";
    public static $instance_count=0;
    public const Categories=['bmx','mountain bike','road','hybrid'];


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

    public static function wheel_details()
    {
        $wheels_total=self::$wheels==1 ?" 1 wheel" : self::$wheels." wheels";
        return "total number of wheels ".$wheels_total;
    }

    public static function create()
    {
        $class_name=get_called_class();
        //return $class_name;
         $obj= new $class_name;
         self::$instance_count++;
         return $obj;
    }

}

Class UniCycle extends Bicycle{
    protected static $wheels=1;

    // public  static function create()
    // {
    //     $new=self::$instance_count++;
    //     return get_class().$new;
    // }
}


$bike= Bicycle::create();
$unibike= Unicycle::create();

echo "<br> instance count of the bicycle ".Bicycle::$instance_count;
echo "<br> instance count of the UniCycle ".UniCycle::$instance_count;














?>