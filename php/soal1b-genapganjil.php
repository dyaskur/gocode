<form method="post" action="">
    <input type="text" name="input" value="<? echo isset($_POST["input"]) ? $_POST["input"] : ""; ?>" >
    <input type="submit" value="submit">
</form>
Result:
<?php
$input = $_POST["input"];
if($input == null )
    echo ("Masukkan Angka!");
else if ($input % 2 == 0)
    echo ("bilangan genap");
else
    echo ("bilangan Ganjil ");

