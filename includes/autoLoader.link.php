<?php
//VID 9
    spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
        $path = "Classes/";
        $extension = ".class.php";
        $fullPath = $path . $className . $extension;

        if(!file_exists($fullPath)){
            return false;
        }

        include_once $fullPath;
    }
?>