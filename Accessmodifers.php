<?php 

Class User {
    public  $age;
    public $name;
    private $fee ="400";

    private function nameandage()
    {
        return "calling private method ".$this->name ." ".$this->age;
    }

    protected function ageandname()
    {
       return $this->name. " ".$this->age;
    }

    public function truth()
    {
        return $this->nameandage();
    }

    public function seefee()
    {
        return "$".$this->fee;
    }
}

Class User2 extends User{

    public function callprotected()
    {
        return $this->ageandname();
    }

}


$new =new User2;
$new->age="34";
$new->name="Faisal";

echo $new->callprotected(). "<br>";
echo $new->truth(). "<br>";
$new->fee="250"; // this is creating a new property inside the subclass it is not a part of parent class
echo $new->fee."<br>";
echo "the Fee in parent class is ".$new->seefee();







?>