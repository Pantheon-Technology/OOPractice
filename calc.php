<?php
//Calculator for vid 11
    declare(strict_types = 1);
    include 'includes/autoLoader.link.php';
?>
<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <body>
        <form action="includes/calc.inc.php" method="post">
            <p>My very own calculator</p>
            <input type="number" name="num1" placeholder="First Number">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Devide</option>
                <option value="mul">Multiply</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="submit">Calculate</button>
        </form>
        
    </body>
</html>