<?php

$file = 'readme.txt';

if(file_exists($file)){
    //read file
    echo readfile($file) . '<br>';

    //copy file
    copy($file, 'quotes.txt') . '<br>';

    //absolute path
    echo realpath($file) . '<br>';

    //file size
    echo filesize($file) . '<br>';

    //rename the file
    echo rename($file, 'test.txt');
} else {
    echo 'file does not exist';
}

//make directory
mkdir('quotes');

$file = 'quotes.txt';

//opening a file for reading
$handle = fopen($file, 'r');

//read the file
echo fread($handle,filesize($file)) . '<br>';
echo fread($handle, 112) . '<br>';

//read a single line
echo fgets($handle) . '<br>';

//read a single character
echo fgets($handle);

//writing to a file
fwrite($handle, "Everything popular is wrong");

//close the file
fclose($file);

?>