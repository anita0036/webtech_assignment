
<html>
<head>
<style>
div {
	align:center;
	width:400px;
	height:300px;
border: solid black;
background-color:orange;
 
padding: 20px;
}
 
</style>
</head>
<body>
<div>
<h1>Enter data for Student</h1>
<form  method="post">
Roll number:<br />
<input type="text" name="rno"/>
<br><br>
Name:<br />
<input type="text" name="name"/><br />
<button type="submit" name = "submit ">Submit</button>


</form>
<?php  
if(isset($_POST["rno"])){

$s = "localhost";
$username = "root";
$password = "";
$db = "trial";

$conn = mysqli_connect($s,$username,$password,$db);

$rno = $_POST['rno'];
$name = $_POST["name"];

$query = "INSERT INTO `trial`.`student`(`rno`,`name`) VALUES('$rno','$name');";

$run = mysqli_query($conn,$query);
// if($run){
//     echo "form submitted";
// }
// else{
//     echo"form not submitted";

// }

}










?> 
</div>
</body>
 
</html>