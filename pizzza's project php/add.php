<?php

include('config/db_connect.php');

    $title = $ingredients = $email = '';
    $errors = array('email' =>'', 'title' => '', 'ingredients' => '');
    // if data is sent to the server mesg the client to submitted 

    // if(isset($_GET['submit'])) { //$_GET is an assocaitive global  array when someone GET request it stored the data 
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    // similar to the GET request but it's more secure way to
    // Form request because data is not shown to the URL
   
    if(isset($_POST['submit'])) { 
        
        //$_POST is an assocaitive global  array when someone  POST and 
        //GET request it stored the data in that array 
    
    
    //    //htmlspecialchars is to prevent the Xss Attack of intruders

    // echo  htmlspecialchars($_POST['email']); 
    //     echo htmlspecialchars($_POST['title']);
    //     echo htmlspecialchars($_POST['ingredients']);
     
    // check for the validation using the filters of php  

    // validate the emails
    
    if(empty($_POST['email'])){
        $errors['email'] = 'an Email is required <br />';
    }
    else{ 
        $email = $_POST['email'];
        if(!filter_var( $email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] =  "an email must be valid email address like helloo@gmail.com";
        }
    }

    // validate the title using the filters of php 

    if(empty($_POST['title'])){
        $errors['title'] = 'A title is required <br />';
    }
    else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
        $errors['title'] =  "Title must be the letter and spaces";
        }
    }
   // check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

    // if errors in the form show else redirect the main page

    if(array_filter($errors)){
        // echo "errors in the form"
    }else {

        $email = mysqli_real_escape_string($conn,  $_POST['email']);
        $title = mysqli_real_escape_string($conn,  $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn,  $_POST['ingredients']);

        // inserting into the database using the sql 

        $sql = "INSERT INTO pizzzzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

        // save to databae
        if(mysqli_query($conn, $sql)){
            // if successfull
            header('Location: index.php');
        } else {
            // errors 
            echo 'query error :'.mysqli_error($conn);
        }


        // echo "form is valid";
      
    }


}   // end of the POST request 


?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="index.css">
  
    <!-- each and everything is on the single page by using the include --> 
    <?php include('templates/header.php'); ?>

    <section class = "conatiner grey-text">
        <h4 class ="center" > Add a Pizza</h4>  

        <form class="white"  action="add.php" method= "POST"> <!-- GET request from the URL --> 

        <label"> Your Email</label>
        <input type="text" name="email" value="<?php echo $email ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label"> Pizzza Title</label>
        <input type="text" name="title"  value="<?php echo $title ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>


        <label"> Ingredients(comma separated)</label>
        <input type="text" name="ingredients"  value="<?php echo $ingredients ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>


        <div class="center">
        <input type="submit" name="submit" value= "submit" class="btn brand z-depth-0">
         </div>
    </form>   
</section>
    <?php include('templates/footer.php'); ?>
    
</html>