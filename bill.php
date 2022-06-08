<!DOCTYPE HTML>
<html>
<head>
<title>Electricity Bil Calculator </title>
</head>
<body bgcolor = yellow >
<h1>Square Root</h1>
<form method="post">
Number :- <input type = "number" id = "num" name="num"/>
<input type = "submit">
</form>

<?php
$units = $_POST["num"];
$bill = 0;
if ($units <= 50){
    $bill = $units*3.50;
    echo "Your bill amount is $bill Rs.";
    }
    elseif ($units >= 50 and $units <= 150){
    $bill = 50*3.50;
    $bill += (($units-50)*4.00);
    echo "Your bill amount is $bill Rs.";
    }
    elseif ($units >= 150 and $units <= 250){
    $bill = 50*3.50;
    $bill += 100*4.00;
    $bill += (($units-150)*5.20);
    echo "Your bill amount is $bill Rs.";
    }
    elseif ($units >= 250){
    $bill = $units*6.50;
    echo "Your bill amount is $bill Rs.";
    }
    else {
    echo "Enter a valid unit number !!!!!!!";
    echo "Your bill amount is not calculated !!";
    }
    ?>

</body>
</html>
