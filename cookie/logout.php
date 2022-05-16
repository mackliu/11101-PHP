<?php
if(isset($_COOKIE['login'])){
    setcookie("login","",time()-1);
}
header("location:index.php");

?>