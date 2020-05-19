<?php
if (isset($_POST["width"])){
    $w = $_POST["width"];
    $h = $_POST["height"];
    $area = $w * $h;
    echo "area: ".$area;
}else{
    echo "go back to form page";
}

