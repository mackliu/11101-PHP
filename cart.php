<H1>購物車</H1>

<?php
setcookie('產品',serialize(['CPU'=>2,"RAM"=>4,"螢幕"=>5,"鍵盤"=>10]),time()+3600);

$cart=unserialize($_COOKIE['產品']);
foreach($cart as $prod => $qt){
    echo $prod."->".$qt."<br>";
}
?>