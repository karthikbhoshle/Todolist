<?php
$name=$_POST['task'];

$bran=$_POST['pr'];
$s=0;

$con = new mysqli("localhost", "root", "", "Todolist") or die("Failed to connect to MySQL: " . mysql_error());
$s="select task from List";
$result=mysqli_query($con,$s);
$num=0;
while($row = mysqli_fetch_assoc($result)) {
		if ($row["task"]==$name)
		{
			$login="UPDATE List
SET Done = '$bran'
WHERE task ='$name' ;";
$check=mysqli_query($con,$login);
$num=1;

	       

 header("Location:index.php");
 
		}
    

}
if($num!=1){

	$login="insert into List Values('$name','$bran');";
$check=mysqli_query($con,$login);
header("Location:index.php");}


?>