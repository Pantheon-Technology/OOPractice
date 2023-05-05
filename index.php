<?php declare(strict_types = 1); //FOR VID 10 TRY CATCH ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>OO Practice</title>
    <head>
    <body>
<?php

    //VID 9
    include 'includes/autoLoader.link.php';

    //Lesson 1 (VID 4)
    include "includes/Classes/person.class.php";

    $person01 = new Person();
    echo $person01->owner();

    //Lesson 2 (VID 5) (STILL USING PERSON.INC.PHP FILE)

   $humanOne = new PersonObject();
   $humanOne->createHuman("Myles");
   echo "<p>" . $humanOne->name . "</p>";

   $humanTwo = new PersonObject();
   $humanTwo->createHuman("Aims");
   echo "<p>" . $humanTwo->name . "</p>";

   //playing about
    $humanThree = new PersonObjectTwo();
    $humanThree->createHumanAgain("Dee", "Brown", 55, False);
    echo "<p>" . $humanThree->age . "</p>";

    //Lesson 3 (VID 6) (STILL USING PERSON.INC.PHP FILE)
    $humanFour = new PersonObjectThree("Regan", "Blue", 26, False);
    echo "<p>" . $humanFour->age . "</p>";
    echo "<p>" . $humanFour->name . "</p>";

    echo "<p>" . $humanFour->getName() . "</p>";

    //Playing about
    $test = $humanThree->age + $humanFour->age;
    echo "<p>" . $test . "</p>";
    
    //vid 7 deleting objects
    unset($humanFour);

    //vid 8 (still using file)
    echo drinking::$drinkingAge;
    drinking::setDrinkingAge(18);
    echo "<p>" . drinking::$drinkingAge . "</p>";


    //VID 10
    

    $makeName = new VID10();

    try{
        $makeName->setName(2); //By setting the name to be an int when we declared the variable a string, the try catch will activate.
        echo $makeName->getName();
    }catch(TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
    

?>

    </body>
</html>