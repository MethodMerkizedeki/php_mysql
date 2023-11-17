<?php
include('templates/header.php');

if(isset($_POST['submit'])){

    //check email
    if(empty($_POST['email'])){
        echo 'An email is required' . '<br>';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be a valid email address';
        }
    }
    //check title
    if(empty($_POST['title'])){
        echo 'An title is required' . '<br>';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[A-Za-z\s]+$/', $title)){
            echo 'Title must be letters and spaces only';
        }
    }
    //check ingredients
    if(empty($_POST['ingredients'])){
        echo 'At least one ingredients is required' . '<br>';
    } else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/,/', $ingredients)){
            echo 'ingredients must be a comma separated list';
        }
    }
} //end of post check

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