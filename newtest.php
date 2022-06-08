<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPswd = '';
$dbName = 'trial';

$conn = mysqli_connect($dbServer, $dbUser, $dbPswd, $dbName);
if(!$conn){
    echo "Connection failed: $mysqli_connect_error()";
}

?>

<html>
    <body>
    <form method="post">

        <br><br>
        <table>
        <tr><td>
        <label for="name">Name: </label>
        <input type="text" name="name"></td>

        <td><label for="pswd">Password: </label>
        <input type="text" name="pswd"></td>
        </tr>
        </table>
        <input type="submit" name="add" value="ADD">

        <br><br>
</form>
<br><br>
<form method="post">
<br><br>
        <table>
        <tr><td>
        <label for="name">Name: </label>
        <input type="text" name="name"></td>

        <td><label for="pswdold">Password Old: </label>
        <input type="text" name="pswdold"></td>

        <td><label for="pswdnew">Password New: </label>
        <input type="text" name="pswdnew"></td>
</tr>
</table>
        <br><br>
<input type="submit" name="update" value="Update">
</body>
</html>

<?php
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $pswd = $_POST['pswd'];
    
        $res1 = mysqli_query($conn, "INSERT INTO up1(name, pswd) VALUES('$name', '$pswd')");

        if($res1)
            echo "Data added successfully";
        else
            echo "Data not added successfully";
    }
    else if(isset($_POST['update'])){
        $name = $_POST['name'];
        $pswdold = $_POST['pswdold'];
        $pswdnew = $_POST['pswdnew'];

        $res2 = mysqli_query($conn, "UPDATE up1 SET pswd='$pswdnew' WHERE pswd='$pswdold' and name='$name'");

        if($res2){
            echo "$name, you password has been updated to: $pswdnew";
        }
        else
         echo "Failed to update password";
    }


