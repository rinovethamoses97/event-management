<?php
$servername="localhost";
$username="root";
$password="";
$dbname="events";
$a=$_POST['date'];
$b=$_POST['time'];
$c=$_POST['description'];
$d=$_POST['location'];
$e=$_POST['incharge'];
$f=$_POST['hostingdepartment'];
$g=$_POST['about'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="select *from event";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
$count=$count+1;
$b=$b.":00";
$sql="insert into event values('$a','$b','$c','$d','$e','$f','$g','$count')";
$result=mysqli_query($conn,$sql);
$code=$f.$count;
if($result)
{
?>
<script>

	alert("YOUR EVENT WAS SUCCESSFULLY ADDED");
	var a="<?php echo $code?>";
	alert("event code:"+a);
	location="addevent.html";
	</script>
	<?php
}
?>