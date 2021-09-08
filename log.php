<?php
$log=$POST['log'];
$pass=$POST['pass'];

if($log==Jacek && $pass==owca){
    echo("Zalogowany");
}
else{
    echo("Kappa");
}

?>
<form action="" method="POST">
    <input type="text" name="log">
    <input type="text" name="pass">
    <input type="submit" name="show">