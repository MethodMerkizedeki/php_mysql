<?php

//include functions

//include('method.php');
//echo 'end of php';

//connet to database
$conn = mysqli_connect('localhost', 'method', '201611038', 'mark_pizza');

//check the connection
if(!$conn){
  echo 'connection erroe: ' . mysqli_connect_error();
}

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas';

//make query or get results
$result = mysqli_query($conn, $sql);

//fetch the resulting row as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free the result form memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

print_r($pizzas); 
?>

<html>
        <?php
         //echo 'software development';
         //include('contents.php');

         include('templates/header.php');
         include('templates/footer.php');

        ?>
</html>