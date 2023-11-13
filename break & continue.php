<?php

$products = [
    ['name' => 'maize', 'price' => 20],
    ['name' => 'banana', 'price' => 10],
    ['name' => 'mango', 'price' => 15],
    ['name' => 'tomato', 'price' => 5],
    ['name' => 'chill', 'price' => 40],
    ['name' => 'chars', 'price' => 2]
];

//break
foreach($products as $product){
    if($product['name'] === 'chill'){
        break;
    }
    if($product['price'] > 15){
        continue;
    }
    echo $product['name'] . '<br>'; 
}
?>