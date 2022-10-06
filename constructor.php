<?php

class person {
public $name;





public function __construct($name)
{
    $this->name=$name;
}

public function show()
{
    echo "your name is ".$this->name;
}



}


$obj =new person("zaeem syed");

$obj->show();
//$obj->name="zaeem";






?>