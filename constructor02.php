<?php 

Class Sofa {

public static $instance_count=0;

public $seats=3;
public $arms=2;


public function  __construct()
{
    Self::$instance_count++;
}


}
Class Couch extends Sofa{

    public $seats=2;
    public $arms=0;


}
Class SingleSofa extends Sofa{

    public $seats=1;
}


$sofa= new sofa;
echo "the sofa has ".$sofa->seats." Seats"."<br>";
echo "the sofa has ".$sofa->arms." Arms"."<br>";
echo "<hr>";

$couch = new Couch;

echo "the Couch has ".$couch->seats." Seats"."<br>";
echo "the Couch has ".$couch->arms." Arms"."<br>";
echo "<hr>";


$Single= new SingleSofa;


echo "the Single sofa has ".$Single->seats." Seat"."<br>";
echo "the Single sofa has ".$Single->arms." Arms"."<br>";
echo "<hr>";

echo Sofa::$instance_count;
echo SingleSofa::$instance_count;













?>