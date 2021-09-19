<!DOCTYPE html>
<html lang="en">
<head>
    
    
        <?php

include('config\db_connect.php');
      
        // how i getting the data from the DB

        // query from the pizza database 
        $sql = ' SELECT title,	ingredients FROM  pizzzzas order by created_at ';

        // make query and getting a result 
        $result = mysqli_query($conn, $sql);
        
        // fetch the rows in the array 
        $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // free result from memory
        mysqli_free_result($result);

        //close the connection always 
            mysqli_close($conn);    

        // $check = explode(',', $pizzas[0]['ingredients']);
        // print_r($check);

        ?>
   
    <!-- shows the header -->
    <?php include('templates/header.php'); ?>
    
    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
        <?php foreach($pizzas as $pizza): ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php  echo htmlspecialchars($pizza['title'])?></h6>
                    <ul>
                        <?php  foreach(explode(',', $pizza['ingredients']) as $ing):?>
                            <li><?php echo htmlspecialchars($ing) ?></li>
                            <?php endforeach;?>
                    </ul>
                </div>
                <div class="card-action right-align">
                    <a href="#" class="brand-text">more info </a>
                </div>

                </div>
            </div>

    
    <?php endforeach; ?>  <!-- alternarive way to do the opening nd closing tags { } -->

    </div>
    </div>
   
    <!-- shows the footer -->
    <?php include('templates/footer.php'); ?>
   



</html>