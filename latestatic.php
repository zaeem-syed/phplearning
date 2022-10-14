<?php 

Class Sofa{
    protected static $identity="sofa class";

    public static function  identifier()
    {
          echo "self:" .Self::$identity."<br>";
          echo "static:". static::$identity."<br>";

          echo "get_class:".get_class()."<br>";
          echo "get_called_class:".get_called_class()."<br>";

    }
}

Class LoveSeat extends Sofa{
    protected static $identity="love seat class";
}

Sofa::identifier();
LoveSeat::identifier();

















?>