<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, td, tr{
            border: 1px solid black;
        }
        </style>
</head>
<body>
    <form method="post">
        <input type="submit" name="add" value="ADD">
        <input type="submit" name="update" value="Update">

        <br><br>
        <table>
        <tr><td>
        <label for="name">Name: </label>
        <input type="text" name="name"></td>

        <td><label for="dept">Department: </label>
        <input type="text" name="dept"></td>

        <td><label for="sal">Salary: </label>
        <input type="number" name="sal"></td>
</tr>
</table>
        <br><br>
</form>
        
</body>
</html>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'trial');
    if(!$conn){
        echo "Connection unsuccessful:  $mysqli_connect_error()";
        
    }
    else{
       
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $dept = $_POST['dept'];
            $sal = $_POST['sal'];

            $res1 = mysqli_query($conn, "INSERT INTO emp(name, dept, sal) VALUES('$name', '$dept', '$sal')");

            if($res1)
            echo "Data added successfully";
            else
            echo "Data not added successfully";
        }
        else if(isset($_POST['update'])){
            $sal = $_POST['sal'];

            $res3 = mysqli_query($conn, "SELECT * FROM emp WHERE sal>=50000 ORDER BY id DESC");
            while($res2 = mysqli_fetch_array($res3)){
                echo "<tr>";
                echo "<td>".$res2['name']."</td>";
                echo "<td>".$res2['dept']."</td>";
                echo "<td>".$res2['sal']."</td>";
                echo "</tr>";
            }
        }
    }
        