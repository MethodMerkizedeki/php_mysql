<?php
include('templates/header.php');

// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

if(isset($_POST['submit'])){
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['ingredients']; 
}

//include functions

//include('method.php');
//echo 'end of php';

?>

<html>
    <section class="container grey-text">
     <h4 class="center">Add a Pizza</h4>
     <form action="add.php" class="white" method = "POST">
     <label for="">Your Email:</label>
     <input type="text" name = "email">
     <label for="">Pizza Title</label>
     <input type="text" name = "title">
     <label for="">Ingredients (Comma separated):</label>
     <input type="text" name = "ingredients">
     <div class="center">
     <input type="Submit" name ="submit" value = "submit" class ="btn brand z-depth-0">
     </div>
     </form>
    </section>
</html>

<?php

include('templates/footer.php');
?>