<?php

use Student as GlobalStudent;

Class Student {

    public static $grades=["freshmen","junior","highschool"];
    private static $total_students=0;
    

    public static function moto()
    {
        return "To become a php developer";
    }
    public static function count()
    {
        return Self::$total_students."<br>";
    }

    public static function addstudent()
    {
        self::$total_students++;
    }



}


echo Student::$grades['0'];
echo Student::count();
echo Student::addstudent();
echo Student::count();














?>