<?php

include('templates/config/db_connect.php');

//check GET request id param
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    //get the query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    //print_r($pizza);
}

?>

<html>

<?php include('templates/header.php'); ?>

<div class="container center">
    <?php if($pizza): ?>
         <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
         <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
         <h5>Ingredients:</h5>
         <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
    <?php else: ?>

    <?php endif; ?>
</div>

<?php include('templates/footer.php'); ?>

</html>