<form method="post" action="">
    <input type="text" name="input" value="<? echo isset($_POST["input"]) ? $_POST["input"] : ""; ?>" >
    <input type="submit" value="submit">
</form>
Result:
<?php
$input = $_POST["input"];
$output =  "bilangan prima";
for($i = 2; $i<$input; $i++)
{
    if ($input % $i == 0)
$output =  "bukan bilangan prima";
break;
}
echo $output;
