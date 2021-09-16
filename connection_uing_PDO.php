<?php

    $dbname = "helloworld";
    $dbuser = "hassaan";
    $dbpass = "5588";
    $dbhost = "localhost";


    try{
        // make a PDO object for the new constructor method 
        $pdo = new PDO("mysql:host=" .$dbhost . ";dbname=" .$dbname, $dbuser, $dbpass);
        // errotr handling for failure to communicate
    } 
    catch (PDOException $err){
        echo "Database connection problem :" . $err->getMessage();
        exit(); // if dailed 
    }

?>