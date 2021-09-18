<?php

    // if data is sent to the server mesg the client to submitted 

    // if(isset($_GET['submit'])) { //$_GET is an assocaitive global  array when someone GET request it stored the data 
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    // similar to the GET request but it's more secure way to Form request because data is not shown to the URL
    if(isset($_POST['submit'])) { //$_POST is an assocaitive global  array when someone GET request it stored the data 
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['ingredients'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="index.css">

    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    
    <!-- each and everything is on the single page by using the include --> 
    <?php include('header.php'); ?>

    <section class = "conatiner grey-text">
        <h4 class ="center" > Add a Pizza</h4>  

        <form class="white"  action="add.php" method= "POST"> <!-- GET request from the URL --> 

        <label"> Your Email</label>
            <input type="text" name="email">

            <label"> Pizzza Title</label>
            <input type="text" name="title">

            <label"> Ingredients(comma separated):</label>
            <input type="text" name="ingredients">

            <div class="center">
            <input type="submit" name="submit" value= "submit" class="btn brand z-depth-0">
            </div>
        </form>   
</section>
    <?php include('footer.php'); ?>
    


</html>