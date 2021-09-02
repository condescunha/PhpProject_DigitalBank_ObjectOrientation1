<?php

spl_autoload_register(
 function(string $classFullName){
    $filePath = $classFullName . ".php";
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    if(file_exists($filePath)){
        require_once $filePath;
    }
 }
);
