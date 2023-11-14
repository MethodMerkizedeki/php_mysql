<?php

//local variable

function myfunc(){
    $price = 45;
    echo $price;
}
// myfunc();
// echo $price;

function myfuncTwo($age){
    //echo $age;
}
myfuncTwo(25);
//echo $age;


//global varaible

$name = 'mark';
// function sayhello(){
//     global $name;
//     echo 'hello ' . $name;
// }

//sayhello();

function saybye($name){
    echo 'bye ' . $name;
}
saybye($name);


?>