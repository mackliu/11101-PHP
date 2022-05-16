<H1>購物車</H1>

<?php
session_start();
$_SESSION['cart']["CPU"]=3;
$_SESSION['cart']["RAM"]=5;
$_SESSION['cart']["主機板"]=4;
$_SESSION['cart']["鍵盤"]=4;


foreach($_SESSION['cart'] as $prod => $qt)
{
    echo $prod . "->" . $qt . "<br>";
}

?>