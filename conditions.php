<?php

//if statement
/*$age = 30;
if ($age < 18){
    echo 'child';
} elseif($age > 18) {
    echo 'matured';
} else {
    echo 'elder';
}*/

$products = [
    ['name' => 'maize', 'price' => 20],
    ['name' => 'banana', 'price' => 10],
    ['name' => 'mango', 'price' => 15],
    ['name' => 'tomato', 'price' => 5],
    ['name' => 'chill', 'price' => 40],
    ['name' => 'chars', 'price' => 2]
];

// foreach($products as $product){
//     if($product['price'] < 15 && $product['price'] > 2){
//        echo $product['name'] . '<br>';
//     }
// }

foreach($products as $product){
    if($product['price'] > 20 or $product['price'] < 10){
        echo $product['name']. '<br>';
    }
}
?>