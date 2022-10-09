<?php

Class Clock {
    public const SECONDS_IN_DAY=60*60*24;

    public function tommrow()
    {
        return time()+self::SECONDS_IN_DAY;
    }
}

Echo Clock::SECONDS_IN_DAY."<br>";

$clock= new Clock;
echo $clock->tommrow();

?>