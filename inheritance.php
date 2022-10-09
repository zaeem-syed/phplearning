<?php
class Father {

    var $first_name;
    var $last_name;
    var $username;


    function fullname()
    {
        return $this->first_name." ".$this->last_name;
    }

}

Class Child extends Father{

}


$new= new Child;
$new->first_name="Ijaz";
$new->last_name="khan";
$new->username="faisal khan ";
echo $new->fullname(). "<br>";
echo $new->username;
echo get_parent_class($new). "<br>";
echo "this is child class all properties <br>";


$father= new Father;
$father->first_name="Abdul Aziz";
$father->last_name="Khan";
echo $father->fullname()."is the name of father ". "<br>";
echo get_parent_class($father). "<br>";









?>