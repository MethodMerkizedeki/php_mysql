<?php

//sessions
if(isset($_POST['submit'])){

    //cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: PHP $ MYSQL/index.php');
}
?>

<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "POST">
            <input type="text" name = "name">
            <select name="gender" id="">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="submit" name = "submit" value ="submit">
        </form>
    </body>
</html>