<!DOCTYPE HTML>
<html>
<head>
<title>Days Calculator </title>
</head>
<body bgcolor = yellow >
<h1>Square Root</h1>
<form method="post">
Enter Day :- <input type = "number" id = "num" name="num"/>
<input type = "submit">
</form>

<?php
$day = $_POST["num"];
switch($day){
    case 1:
    echo "Monday";
    break;
    case 2:
    echo "Tuesday";
    break;
    case 3:
    echo "Wednesday";
    break;
    case 4:
    echo "Thursday";
    break;
    case 5:
    echo "Friday";
    break;
    case 6:
    echo "Saturday";
    break;
    case 7:
    echo "Sunday";
    break;
    default:
    echo "Invalid number for choosing the week day !!!";
    }
    ?>
    

</body>
</html>
