<?php


//notice that every class in the seperate folder and have the same formate to be correct
// A template to include all class files dynamically using an autoloader
spl_autoload_register('myautoloader');

function myautoloader($classname) {
    $path = "classes/"; // Directory where classes are stored
    $extension = ".class.php"; // File extension for class files
    $fullpath = $path . $classname . $extension;

    // Check if the file exists before including it
    if (file_exists($fullpath)) {
        include_once $fullpath;
    } else {
        echo "The file for class $classname could not be found.";
    }
}



/*
//for user input in the form that needed
spl_autoload_register('myautoloader');

function myautoloader($classname){

         $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

         if (strpos($url,'includes')!==false){
                  $path='../classes/';
         }
         else {
                  $path = 'classes/';
          }
         $extension ='.class.php';
         require_once $path .$classname . $extension ;
} */


?>
