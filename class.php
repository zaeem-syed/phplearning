<?php 

class Student {

}

class Products{

}


$class_name=get_declared_classes();
echo "Classes ".implode(" ,",$class_name). '<br>';

$classes=['products','student','Student','gender'];
foreach($classes as $class)
{
    if(class_exists($class))
    {
        echo "{$class} is a decleared class <br>";
    }else{
        echo "{$class} is  not a decleared class <br>";
    }
}




?>

<html>
    <a href="instance.php">Instance </a>
</html>