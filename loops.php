<?php

$names = ['method', 'bukuru', 'merkizedeki'];

//for($i = 0; $i < count($names); $i++){
    //echo $names[$i] . '<br>';
//}
 
//This is foreach loop
foreach($names as $name){
    echo $name . '<br>';
}

$products = [
    ['name' => 'maize', 'price' => 789],
    ['name' => 'rice', 'price' => 345],
    ['name' => 'banana', 'price' => 123],
    ['name' => 'mango', 'price' => 100]
];

foreach($products as $product){
    echo $product['name'] . ' - ' . $product['price'];
    echo '<br>';
}

$i = 0;
while($i < count($products)){
    echo $products[$i]['name'];
    echo '<br>';
    $i++;
}
?>

<html>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){?>

           <h3><?php echo $product['name']; ?></h3>
           <p>Tsh <?php echo $product['price']; ?></p>
        <?php } ?>
    </ul>
</body>
</html>