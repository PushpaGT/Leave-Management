<?php 

$user = "root"; 
$password = ""; 
$host = "localhost"; 
$database= "miniproject";
//$mysqli = new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysqli));


$connection = mysqli_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysqli_error());
}
mysqli_select_db($database, $connection);


$truncatetable= mysqli_query("TRUNCATE TABLE student");

if($truncatetable !== FALSE)
{
	header("location: stu_add_sem1.php");
   echo("All rows have been deleted.");
}
else
{
   echo("No rows have been deleted.");
}

?>