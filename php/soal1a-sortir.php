<form method="post" action="">
    <input type="text" name="input" value="<? echo isset($_POST["input"]) ? $_POST["input"] : ""; ?>" >
    <input type="submit" value="submit">
</form>
Result:
<?php
$arr1 = str_split($_POST["input"]);

arsort($arr1);

echo implode($arr1);

