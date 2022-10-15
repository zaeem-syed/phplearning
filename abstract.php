<?php 

abstract class parent_class{

    public $property;

    public function __construct($property)
    {
        $this->property=$property;
    }

    public abstract function name();


}

Class Child extends parent_class{
    public  function name(){
        echo "this is name of child";
    }
}   

$object= new Child("this is child class");
echo $object->property;
$object->name();


?>