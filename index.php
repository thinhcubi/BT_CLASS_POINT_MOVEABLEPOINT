<?php
include_once"Point.php";
include_once "MoveablePoint.php";

$point = new Point(10,20);
echo $point;
foreach ($point as $item){
    echo $item."<br>";
}

$moveablepoint = new MoveablePoint(10,20,5,6);
echo $moveablepoint;