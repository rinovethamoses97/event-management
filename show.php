<!DOCTYPE HTML>
<html>
<head>
<title>Participants</title>
<link rel="icon" type="image/png" href="logo1.png"/>
<style>
table
{
	font-family: Comic Sans MS;
	width:100%;
    margin-top:0px;
	border:1px solid black;
}
		body
		{
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBtmQtA4OsnF_sa4-OgZCEXhM0_CgwtF3mCiximEYJYKChLJ3U);
		}
	img
	{
		
      width: 100%;
	  height: 300px;
      	  
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
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="event";
$a=$_POST['code'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="select *from register where id='$a'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	echo "no records";
}
?>
<nav>
<ul class="breadcrumb">
  <li><a href="wp.php">Home</a></li>
  <li><a href="admin.html">Admin login</a></li>
  <li>Dashboard</li>
  <li><a href="view.html">View Participants</a></li>
  <li>participants list</li>
</ul>
</nav>

<img src="http://eucys2016.eu/wp-content/uploads/2016/06/banner-eucys-participants_big.jpg" alt="participants"/>
 <table class="table table-hover">
	 <tr>
	 <th>Name</th>
	 <th>College</th>
	 <th>Phone</th>
	 <th>E-mail</th>
	 </tr>
 <?php
 while($row=mysqli_fetch_assoc($result))
 {
	 ?>
	 
	 <tr>
	 <td><?php echo $row['name'];?></td>
	 <td><?php echo $row['college'];?></td>
	 <td><?php echo $row['phone'];?></td>
	 <td><?php echo $row['email'];?></td>
	 </tr>
	 <?php
 }

 ?>
 </table>
</body>
</html>
