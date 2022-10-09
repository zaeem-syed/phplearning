<?php 

Class User {
    public  $age;
    public $name;

    private function nameandage()
    {
        return $this->name ." ".$this->age;
    }

    protected function ageandname()
    {
       return $this->name. " ".$this->age;
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
echo $new->callprotected();








?>