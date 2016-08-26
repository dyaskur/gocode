<form method="post" action="">
    <input type="text" name="input" value="<? echo isset($_POST["input"]) ? $_POST["input"] : ""; ?>" >
    <input type="submit" value="submit">
</form>
Result:
<?php
$input = $_POST["input"];
$output=2;
for($i = 1; $i<$input; $i++)
{
    $output *=2;
}
echo $output;
