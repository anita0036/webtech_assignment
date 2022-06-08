<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Multiplication</title>
<style>
    body{background-color:lightyellow;}


</style>

</head>

<body >
    <form method="post">
Enter Number <input type="number" id="num" name = "num">
<input type="submit"  id = "sub"name = "sub" value = submit> 
</form>
</body>
</html>


<?php
$num = $_POST["num"];
$revnum = 0;
while ($num > 1)
{
$rem = $num % 10;
$revnum = ($revnum * 10) + $rem;
$num = ($num / 10);

}

echo "Reverse number is: $revnum";

?>

