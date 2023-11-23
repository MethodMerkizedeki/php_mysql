<?php

//connet to database
$conn = mysqli_connect('localhost', 'method', '201611038', 'mark_pizza');

//check the connection
if(!$conn){
  echo 'connection error: ' . mysqli_connect_error();
}

?>