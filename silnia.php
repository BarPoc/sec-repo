<?php
function silnia($n){
    if($n==1){
        return 1;
}
else{
    return $n* silnia($n-1);
}
}
if(isset($_POST['show'])){
    $liczba=$_POST['liczba'];
    echo(silnia($liczba));
}
?>
<form action="silnia.php" method="POST">
    <input type="text" name="liczba" size="10" maxlength="10">
    <input type="submit" name="show">
</form>