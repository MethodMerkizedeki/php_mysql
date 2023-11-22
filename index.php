<?php

//connet to database
$conn = mysqli_connect('localhost', 'method', '201611038', 'mark_pizza');

//check the connection
if(!$conn){
  echo 'connection erroe: ' . mysqli_connect_error();
}

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY title';

//make query or get results
$result = mysqli_query($conn, $sql);

//fetch the resulting row as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free the result form memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//print_r($pizzas); 

//explode(',',$pizzas[0]['ingredients']);

?>

<html>
      
         <?php include('templates/header.php'); ?>

         <h4 class="center grey-text">Pizzas</h4>
         <div class="container">
          <div class="row">
           <?php foreach($pizzas as $pizza): ?>
              <div class="col s6 md3">
                 <div class="card z-depth-0">
                   <div class="card-content center">
                      <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                      <ul><?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                        <li><?php echo htmlspecialchars($ing); ?></li>
                      <?php endforeach; ?>
                      </ul>
                   </div>
                   <div class ="card-action right-align"> 
                     <a href="#" class="brand-text">more info</a>
                   </div>
                 </div>              
              </div>
            <?php endforeach; ?>
          </div>
         </div>
         <?php include('templates/footer.php'); ?>

</html>