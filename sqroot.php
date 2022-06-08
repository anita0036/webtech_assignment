<!DOCTYPE HTML>
<html>
<head>
<title>Square root </title>
</head>
<body>
<h1>Square Root</h1>
<form method="post">
Number :- <input type = "number" id = num name="num"/>
<input type = "submit">
</form>
<?php
$user_input = $_POST["num"];
echo "Squre root of $user_input i.e. $user_input <sup>1/2</sup> :- " . sqrt($user_input);
?>
</body>
</html>
