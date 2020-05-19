<?php

$file = fopen("helloworld.txt", 'r');
while (!feof($file)){
    echo fgets($file)."<br>";
}

fclose($file);