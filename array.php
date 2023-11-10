<?php

//indexed array
$people_one = ['mark','method','merkizedeki'];
//echo $people_one[1];

$people_two = array('dodoma','mwanza','geita');
//echo $people_two[2];

$ages = array(23,24,25,26);
//print_r($ages);

$ages[1] = 90;
//print_r($ages);

$ages[] = 21;
//print_r($ages);

array_push($ages, 56);
//print_r($ages);

//echo count($ages);
$people_three = array_merge($people_one, $people_two);
//print_r($people_three);

//assosiative array (keys and value pairs)

$colors = ['color1' => 'black', 'color2' => 'orange', 'color3' => 'green'];
//echo $colors['color2'];

//print_r($colors);

$names = array('fname' => 'method', 'sname' => 'bukuru', 'surname' => 'merkizedeki');
//print_r($names);

$names['nickname'] = 'macomputer';
//print_r($names);

$names['fname'] = 'mark';
//print_r($names);

//multidimensional array

$name = [
    ['method','mark',66],
    ['bukuru', 'methuselah','macomputer'],
    ['daudi','irene','ivan']
];
print_r($name)


?>