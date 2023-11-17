<?php
include('templates/header.php');

if(isset($_POST['submit'])){

    //check email
    if(empty($_POST['email'])){
        echo 'An email is required' . '<br>';
    } else {
        echo htmlspecialchars($_POST['email']);
    }
    //check title
    if(empty($_POST['title'])){
        echo 'An title is required' . '<br>';
    } else {
        echo htmlspecialchars($_POST['title']);
    }
    //check ingredients
    if(empty($_POST['ingredients'])){
        echo 'At least one ingredients is required' . '<br>';
    } else {
        echo htmlspecialchars($_POST['ingredients']);
    }
}

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