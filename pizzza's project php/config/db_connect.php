<!-- connect the Database using mysqli -->
    
<?php
    // connect the Database using mysqli 
    $conn =mysqli_connect('localhost', 'hassaan' , '5588', 'pizzas');

    // check connection
    if(!$conn){
        echo 'Connection error : ' .mysqli_connect_error();

    }


?>