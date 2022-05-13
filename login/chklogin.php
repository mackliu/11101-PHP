<?php

$default_user='mack';
$default_pw='1234';

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$error='';
if($acc!=$default_user || $pw!=$default_pw){
    $error="帳號或密碼錯誤";
    header("location:login.php?error=$error");
}else{
    header("location:memcenter.php?user=$acc");

}

?>