<?php

//connecting the DB with PHP usinf msqli 

$conn =mysqli_connect('localhost', 'hassaan', '5588','helloworld');

//check the connection
if(!$conn){
    echo 'connection error : ' . mysqli_connect_error();
}
else
    echo 'connection successful';


?>
