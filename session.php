<h1>session</h1>
<?php
session_start();
$_SESSION['name']="myname";

echo $_SESSION['name'];

?>