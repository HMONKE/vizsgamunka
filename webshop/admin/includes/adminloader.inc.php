<?php

spl_autoload_register("load");

function load($classname){
    $dir = "classes/";
    $classname = strtolower($classname);
    $ext = ".class.php";

    $path = $dir . $classname . $ext;

    if(!file_exists($path)){
        return false;
    }

    include($path);
}


?>