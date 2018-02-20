<!DOCTYPE HTML>
<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="event";
$a=$_POST['name'];
$b=$_POST['college'];
$c=$_POST['phone'];
$d=$_POST['email'];
$e=$_POST['id'];

$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="insert into register values('$a','$b','$c','$d','$e')";
$result=mysqli_query($conn,$sql);
if($result)
{
?>
<script>
alert("you are successfully registered");
location="wp.php";
</script>
<?php
}
else
{
	
}

?>
