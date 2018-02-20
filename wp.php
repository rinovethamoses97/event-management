<!DOCTYPE HTML>
<html>
<head>
<title>SSN Events</title>
<link rel="icon" type="image/png" href="logo1.png"/>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="main.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="wp.css"/>
<style>
img
{
  margin-top:10px;	
}
#header
{
  background-color:black;
  opacity:0.85;
  width:100%;
  height:90px;
}
p
{
  font-size:50px;
  color:white;
  margin-left:390px;
  margin-top:-55px;
  
}

body{
	width:100%;
	height:100%;
	margin:0;
	overflow-x:hidden;
	background:url(https://www.crowehorwath.com/uploadedImages/headers/events/header-lg-events.jpg?n=5506);
	background-size:cover;
}
.selection {
    background-color: #ffffff;
    width: 300px;
	height: 170px;
    border: 1px solid #ccc;
    padding: 50px;
	margin-right: 50px;
	margin-left: 100px;
	margin-top: 50px;
	border-radius: 4px;
	opacity: 0.9;
	float: left;

}
input[type=submit] {
		width: 50%;
		background-color: #217AD3;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		position: relative;
        left: 70px;
}
input[type=submit]:hover {
		background-color: #080059;
		color: white;
	}
input[type=button] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	background-color: #017a21;
	cursor: pointer;
	color: white;
	}
	input[type=button]:hover {
		background-color: #005e19;
		color: white;
	}
ul {
  list-style: none;
}  
.container {
	width:350px;
	border:1px solid white;
	background-color:#fff;
	margin: 50px;
	height: 400px;
	padding-right:30px;
	color: black;
	font-family: Verdana;
	border-radius: 15px;
	opacity:0.9;
	text-transform: uppercase;
    font-size:15px;
    
}
.wp {

    position:relative;	 
	margin: 50px;
	display: inline-flex;
	right:100px;
    
}
	
</style>
</head>
<body>

<?php   
 $servername="localhost";
$username="root";
$password="";
$dbname="event";
$conn=mysqli_connect($servername,$username,$password,$dbname);
 if($conn)
{
  // echo "conection established successfully";
 }
$sql="select * from event";
$result=mysqli_query($conn,$sql);

 ?>  
 
<div id="header">
<img src="http://www.ssnexlog.in/logo.png" alt="Logo"/>
<p>SSN College Of Engineering</p>
</div>
<div class="wp">

                 <marquee class="container" direction="up" scrollamount="7" loop="infinite" scrolldelay="0.5" onmouseover="stop()" onmouseout="start()">
<h2 style="text-align:center;margin-left:20px; color:blue">click!to Register</h2>
<b>
				<?php
 while($row=mysqli_fetch_assoc($result))
 {
	 ?>
	 <ul>
	 <li><a href="register.php?id=<?php echo $row['hostingdepartment'].$row['id']?>"><?php echo $row['description']," on ",$row['date']," at ",$row['location'];?></a></li>
	 </ul>
	 <?php
 }

 ?>
 </b>
 </marquee>
 <div class="selection">

<form action="dis.php" method="post">
<select  name="dept" id="dept" class="form-control" autofocus style="width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;">
 <option  selected>Select department</option>
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="MECH">MECH</option>  
</select><br/>
<input class="btn btn-default" type="submit" onclick="check()"/>
</form>
<input type="button" class="btn btn-success"  onclick="direct()" value="ADMIN"/>
</div>
</div>
</body>
<script>
function direct()
{
 location="admin.html";
}
function check()
{
 if(document.getElementById("dept").value=="Select department")
 {
   alert("select a department");
 }
}
</script>
</html>