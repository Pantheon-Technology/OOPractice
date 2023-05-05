<?php
//Lesson 1 (VID 4)
class Person {

    protected $first = "Myles";
    private $last = "Hoult";
    private $age = "21";

    

        public function owner(){
            $a = $this->first;
            $b = $this->last;

            $c = $a . " " . $b;

            return $c;
        }

}

class Pet extends Person{

public function owner(){
    $p = $this->first;
    $a = "Hello There, ";
    return $a;
}

}

//Lesson 2 (VID 5)
class PersonObject{

    //Properties
    public $name;
    public $eyeColour;
    public $age;
    public $male;

    //Method

    public function createHuman($name){
        $this->name = $name;
    }

}


//Playing about from VID5
class PersonObjectTwo{

    //Properties
    public $name;
    public $eyeColour;
    public $age;
    public $male;

    //Method

    public function createHumanAgain($name, $eyeColour, $age, $male){
        $this->name = $name;
        $this->eyeColour = $eyeColour;
        $this->age = $age;
        $this->male = $male;
    }

}

//Lesson 3 (VID 6)
class PersonObjectThree{

    //Properties
    public $name;
    public $eyeColour;
    public $age;
    public $male;

    public function __construct($name, $eyeColour, $age, $male){
        $this->name = $name;
        $this->eyeColour = $eyeColour;
        $this->age = $age;
        $this->male = $male;
    }

    //Method

    public function createHumanAgain($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}

//Lesson 5 VID 8
class drinking{

public static $drinkingAge = 21;

public static function setDrinkingAge($newDA){
    self::$drinkingAge = $newDA;
}

public function getDA(){
    return self::$drinkingAge;
}

}
//VID 10

class VID10{
    public function setName(string $newName){
        $this->name = $newName;
    }
    public function getName(){
        return $this->name;
    }
}