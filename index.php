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

?>

<html>
        <?php
         //echo 'software development';
         //include('contents.php');

         include('templates/header.php');
         include('templates/footer.php');

        ?>
</html>