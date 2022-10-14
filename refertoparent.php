<?php 

Class Chef {
public static function cook()
{
    echo "make meal <br>";
}
}
Class JuniorChef extends Chef{
public static function cook()
{
    echo " junior Chef read Receipe <br>";
        parent::Cook()."<br>";
    echo "clean mess up <br>";
}

}
Class Image {
    public static $resezing_enabled=true;

    public static function geometry()
    {
        echo "800*600";
    }

}
Class ProfileImage Extends Image{

    public static function geometry()
    {
        if(Self::$resezing_enabled){
            echo "100*100";

        }
        else {
            parent::geometry();
        }
    }
}




Chef::cook();
JuniorChef::cook();
echo "<hr>";
//Image::$resezing_enabled="false";
//ProfileImage::$resezing_enabled="false";
ProfileImage::geometry()."<br>";
//Image::$resezing_enabled="false";
Image::geometry();
Image::$resezing_enabled=false;
ProfileImage::geometry()."<br>";



















?>