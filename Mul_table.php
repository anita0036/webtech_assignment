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
if(isset($_POST['sub'])){

    $num = $_POST['num'];
    for($i=1;$i<=10;$i++)

    {
        $prod = $num * $i;
        echo "$num * $i = $prod";
        echo "<br>";

        
    }
}


?>


