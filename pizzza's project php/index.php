<!DOCTYPE html>
<html lang="en">
<head>
    <!-- connect the Database using mysqli -->
    
        <?php
        
        $conn =mysqli_connect('localhost', 'hassaan' , '5588', 'pizzas');

        // check connection
        if(!$conn){
             echo 'Connection error : ' .mysqli_connect_error();

        }

        // how i getting the data from the DB

        // query from the pizza database 
        $sql = ' SELECT title,	ingredients, id FROM  pizzzzas ';

        // make query and getting a result 
        $result = mysqli_query($conn, $sql);
        
        // fetch the rows in the array 
        $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

        print_r($pizzas);

        ?>
   
    <!-- shows the header -->
    <?php include('templates/header.php'); ?>
   
    <!-- shows the footer -->
    <?php include('templates/footer.php'); ?>
   



</html>