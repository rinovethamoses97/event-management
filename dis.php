<!DOCTYPE HTML>
<html>
<head>
<title>Upcoming Events</title>
<link rel="icon" type="image/png" href="logo1.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table
{
	width:100%;
    margin-top:50px;
	border:1px solid black;
	text-transform: uppercase;
	}
	img
	{
		margin-left:500px;		
		}
		body
		{
			background-color:#e6fff2;

		}
		input[type=submit] {
			
		background-color: #217AD3;
		color: white;
		/*padding: 14px 20px ;*/
		margin: 8px 0; 
		border: none;
		height:30px;
		width:100px;
		border-radius: 4px;

		cursor: pointer;
		position: relative;
        
}
input[type=submit]:hover {
		background-color: #02036b;
		
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
div
		{
			position:absolute;
			background-color: white;
		    width:50%;
		    height:600px;
		    top:10px;
		    left:370px;
		    text-align:center;
            display:none;		
            background-color:#e6fff2;
            border-radius: 25px;
            border:1px solid black; 
            z-index:1;
 		}
		
		.close {
    color: #929090;
    float: right;
    font-size: 30px;
    font-weight: bold;
    padding-right: 25px;
    padding-top:2px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}		
		
</style>
</head>
<body>
<img src="http://gibsoncountyin.org/wp-content/uploads/2017/04/upcoming-events.png" alt="upcoming events"/>

<nav>
<ul class="breadcrumb">
  <li><a href="wp.php">Home</a></li>
  <li>upcoming events</li>
</ul>
</nav>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="event";
$a=$_POST['dept'];
if($a=="Select department")
{
	header('Location:wp.php');
}
else
{
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  // echo "conection established successfully";
 }
 $sql="select *from event where hostingdepartment='$a'";
 $result=mysqli_query($conn,$sql);
 ?>
 <table class="table table-hover">
	 <tr>
	 <th>DATE</th>
	 <th>TIME</th>
	 <th>DESCRIPTION</th>
	 <th>LOCATION</th>
	 <th>FACULTY IN-CHARGE</th>
	 <th>TO REGISTER</th>
	 <th>ABOUT</th>
	 </tr>
 <?php
 while($row=mysqli_fetch_assoc($result))
 {
 	if($row['date']>=date("Y-m-d"))
	 {
	 ?>
	  <div id="div<?php echo $row['id'] ?>">
	 <span class="close" id="<?php echo $row['id'] ?>" onclick="hide(this.id)">&times</span>
	 <h1>ABOUT</h1>
  <h2> <strong><?php echo $row['about']?></strong></h2>
 </div>
	 
	 <tr id="<?php echo $row['id'] ?>" onclick="visible(this.id)">
	 <td><?php echo $row['date'];?></td>
	 <td><?php echo $row['time'];?></td>
	 <td><?php echo $row['description'];?></td>
	 <td><?php echo $row['location'];?></td>
	 <td><?php echo $row['incharge'];?></td>
	 <td>
	 <form action="register.php" method="get">
	 <input type="hidden" name="id" value="<?php echo $row['hostingdepartment']?><?php echo $row['id']?>"/>
	 <input type="submit" value="Register"/>
	 </form>
	  </td>
	 <td>
	 <input type="submit" value="About" id="<?php echo $row['id'] ?>" onclick="visible(this.id)"/></td> 
	 </tr>
	 <?php
 }
 }
}
 ?>
 </table>
 <script>
 function visible(a)
 {
    $("div").hide();	
 	document.getElementById("div"+a).style.display="block";
 }
 function hide(b)
 {
   document.getElementById("div"+b).style.display="none";	
 }
 function rino()
 {
 	alert("rf");
 }
 </script>
</body>
</html>