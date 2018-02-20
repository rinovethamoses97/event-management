<!DOCTYPE HTML>
<html>
<head>
<title>Online Registration</title>
<link rel="icon" type="image/png" href="logo1.png"/>
<style>
body {
	font-family: Book Antiqua;
	font-weight: bold;
	background: url(https://s-media-cache-ak0.pinimg.com/736x/85/a6/e8/85a6e8e5b75dd3ebc3ca2129c023110e--study-notes-study-hard.jpg) ;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
input[type=text],input[type=email] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	}
input[type=submit], input[type=button] {
	display: inline;
    background-color: #217AD3;
    color: white;
   padding: 14px 20px;
   margin: 8px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    left: 50px;
   
}
}
input[type=submit]:hover {
		background-color: #02036b;
		
		}
.php {

}
.registerform {
    padding: 50px 50px 70px 50px;	
    background-color: #ffffff;
	opacity: 0.9;
    width: 300px;
    border: 1px solid #ccc;
	margin-right: 50px;
	margin-left: 470px;
	margin-top: 100px;
    border-radius: 4px;
}
.txt {
	
	color: blue;
}
.image {
  padding-left: 500px;
  width: 200px;
  height: 200px;
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
label {
	clear: left;
}
</style>
</head>
<body>
<nav>
<ul class="breadcrumb">
  <li><a href="wp.php">Home</a></li>
  <li>upcoming events</li>
  <li>Registration</li>
</ul>
</nav>
<div class="registerform">
<label class="txt">THE EVENT ID:</label>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="events";
$a=$_GET['id'];
echo $a;
?>
<form action="detail.php" method="post">
Name:<span style="color:red;">*</span><input type="text" name="name" placeholder="Type your name" required><br/>
College/University name:<span style="color:red;">*</span><input type="text" name="college" placeholder="College/University name" required><br/>
Phone no:<span style="color:red;">*</span><input type="text" name="phone" placeholder="Contact number" required><br/>
E-mail:<span style="color:red;">*</span><input type="email" name="email" placeholder="Mail-id" required><br/>
<input type="hidden" name="id" value="<?php echo $a?>"/>
<input type="submit" value="Register"/>
<input type="button" value="Cancel" onClick="back()"/>
</form>
<label>All fields marked with asterisk(<span style="color:red;">*</span>) are required.</label>
<?php
?>
</div>
<script>
function back()
{
window.history.back();
}
</script>
</body>
</html>