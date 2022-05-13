<?php


$height=$_GET['height'];
$weight=$_GET['weight'];

$bmi=round($weight/(($height/100)*($height/100)),1);

header("location:result.php?bmi=$bmi");
?>