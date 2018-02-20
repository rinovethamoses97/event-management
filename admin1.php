<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="image/png" href="logo1.png"/>
<style>
body {
	background: url(http://thebrockharris.com/images/background.jpg);
	background-repeat: no-repeat;
	
}
div {
	 padding: 50px 50px 50px 50px;	
    background-color: #ffffff;
	opacity: 0.85;
    width: 300px;
    border: 1px solid #ccc;
	margin-left: 500px;
	margin-top: 200px;
	box-sizing: border-box;
}
	input[type=button] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	background-color: #217AD3;
	cursor: pointer;
	color: white;
	}
	input[type=button]:hover {
		background-color: #02036b;
		color: white;
	}
	

.btn btn-success {
margin: 200px;
}
ul.breadcrumb {
	margin-top: 10px;
    padding: 10px 16px;
    list-style: none;
    background-color: #000;
    font-size: 17px;
	
}
ul.breadcrumb li {
	display: inline;
	color: #b0c9ab;
	}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: #1c8704;
    content: ">";
	font-weight: bold;
	font-size: 20px;
}
ul.breadcrumb li a {
    color: #fff;
    text-decoration: none;
}
ul.breadcrumb li a:hover {
    color: #eee;
    text-decoration: underline;
	
} 
</style>
<title>Dashboard</title>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="main.js"></script>

</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="event";
$a=$_POST['username'];
$b=$_POST['password'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="select *from admin where username='$a'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row['password']==$b)
{
?>
<nav>
<ul class="breadcrumb">
  <li><a href="wp.php">Home</a></li>
  <li><a href="admin.html">Admin login</a></li>
  <li>Dashboard</li>
</ul>
</nav>
<div>
<input type="button" class="btn btn-success" value="ADD EVENT" onclick="addevent()" style="font-family: Copperplate;
	font-weight: bold;"/>
<input type="button" class="btn btn-success" value="VIEW PARTICIPANT" onclick="view()"  style="font-family: Copperplate;
	font-weight: bold;"/>

	</div>
<?php	
}
else
{
	?>
	<script>
alert("wrong username or password");
location="admin.html";
</script>

<?php
}
?>
</body>
<script>
function addevent()
{
	location="addevent.html";
}
function view()
{
	location="view.html";
}

</script>
</html>