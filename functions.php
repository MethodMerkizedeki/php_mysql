<?php

function name($name = 'mark', $time = ' morning'){
    echo 'good ' . $time  .  $name;
}
name('merkizedeki ', ' night');

function formatProduct($product){
    //echo "{$product['name']} costs {$product['price']} to buy";
    //return "{$product['name']} costs {$product['price']} to buy";
}

$formatted = formatProduct(['name' => 'maize', 'price' => 78]);
// $formatted;

?>