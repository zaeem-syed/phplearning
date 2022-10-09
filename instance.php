<?php

use Student as GlobalStudent;

class Student{

}
// class WidgetFactory
// {
//   var $oink = 'moo';
// }

// $WF = new WidgetFactory();
// if (is_a($WF, 'WidgetFactory')) {
//     echo "yes, \$WF is still a WidgetFactory\n";
//   }

 $student1=new Student;

echo get_class($student1). "<br>";

$classes=['products','shape','gender','school','student'];
foreach($classes as $class)
{
    if(is_a($student1,$class))
    {
        echo "student1 is a {$class} <br>";
    }else{
        echo "student 1 is not a {$class} <br>";
    }
}

?>

<a href="properties.php">class Properties</a>