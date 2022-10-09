<?php

//use Student as GlobalStudent;

//use Student as GlobalStudent;

Class Student {
    public static $grades =["pass","fail",'promoted',"good","v-good"];
    private static $total_students=0;

    public static function moto()
    {
        return "to become a php developer and vue js developer";
    }
    public static function add_stdeunt()
    {
        Self::$total_students++;
    }
    public static function count()
    {
        return Self::$total_students;
    }
}
Class ParttimeStudent extends Student{

}

//$new= new ParttimeStudent;
ParttimeStudent::$grades[]="excellent";
Student::add_stdeunt();
ParttimeStudent::add_stdeunt();

Echo Student::moto()."<br>";
Echo PartTimeStudent::moto()."<br>";

//echo Student::$grades; 
echo implode(',',Student::$grades)."<br>";

echo Student::count()."<br>";
echo ParttimeStudent::count()."<br>";




?>