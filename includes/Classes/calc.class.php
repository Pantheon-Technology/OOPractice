<?php

class Calc{

    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2){
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculate(){
        switch($this->operator){
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
                echo "Error occured!";
                break;
        }
    }

}

//SCOPE RESOLUTION OPERATOR (::)

class FirstClass{

const EXAMPLE = "I will never change!";

public static function test(){
    $testing = "this is a test!";
    return $testing;
}

}

$a = firstClass::EXAMPLE;
//echo $a;

class SecondClass extends firstClass{

    public static $staticProperty = "I am a static property";

    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo self::$staticProperty; //self acts like this->
    }
}
$b = SecondClass::anotherTest();
//echo $b;
?>