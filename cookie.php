<h1>cookie</h1>
<?php

setcookie("name",'myname',time()+3600);

echo $_COOKIE['name'];
?>