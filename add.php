<?php

include('templates/config/db_connect.php');

$email = $title = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if(isset($_POST['submit'])){

    //check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required' . '<br>';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address';
        }
    }
    //check title
    if(empty($_POST['title'])){
        $errors['title'] =  'An title is required' . '<br>';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[A-Za-z\s]+$/', $title)){
            $errors['title'] =  'Title must be letters and spaces only';
        }
    }
    //check ingredients
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] =  'At least one ingredients is required' . '<br>';
    } else {
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/,/', $ingredients)){
            $errors['ingredients'] =  'ingredients must be a comma separated list';
        }

        if(array_filter($errors)){
            //echo 'errors in the form';
        } else {

            $emai = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
            
            //create sql
            $sql = "INSERT INTO pizzas(emai, title, ingredients) VALUES('$emai', '$title', '$ingredients')";

            //save to db and check
            if(mysqli_query($conn, $sql)){
                //success
                header('Location: index.php');
            } else {
                //error
                echo 'query error: '. mysqli_error($conn);
            }
        }
    }
} //end of post check

?>

<html>
    <?php include('templates/header.php'); ?>
    <section class="container grey-text">
     <h4 class="center">Add a Pizza</h4>
     <form action="add.php" class="white" method = "POST">
     <label for="">Your Email:</label>
     <input type="text" name = "email" value = "<?php echo htmlspecialchars($email) ?>">
     <div class="red-text"><?php echo $errors['email'];?></div>
     <label for="">Pizza Title</label>
     <input type="text" name = "title" value = "<?php echo htmlspecialchars($title) ?>">
     <div class="red-text"><?php echo $errors['title'];?></div>
     <label for="">Ingredients (Comma separated):</label>
     <input type="text" name = "ingredients" value = "<?php echo htmlspecialchars($ingredients) ?>">
     <div class="red-text"><?php echo $errors['ingredients'];?></div>
     <div class="center">
     <input type="Submit" name ="submit" value = "submit" class ="btn brand z-depth-0">
     </div>
     </form>
    </section>
</html>

<?php

include('templates/footer.php');

?>