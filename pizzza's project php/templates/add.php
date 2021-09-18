<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="templates/index.css">

    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <!-- each and everything is on the single page by using the include --> 
    <?php include('templates/header.php'); ?>

    <section class = "conatiner grey-text">
        <h4 class ="center" > Add a Pizza</h4>     
        <form action="" class="white">
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
    <?php include('templates/footer.php'); ?>
    


</html>