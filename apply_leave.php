<?php
session_start();
$host="localhost";
$username="root";
$pass="";
$db="miniproject";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}



// insert query for register page
if(isset($_REQUEST['from']))
{
$from=$_POST['from'];
$to=$_POST['to'];
//$eleave=$_POST['eleave'];
$leave=$_POST['leave'];
//$cleave=$_POST['cleave'];

$assign_by=isset($_POST['user_id']);
$status="Pending";

	 $query= "INSERT INTO `assign_leave` (id,v_from,v_to,m_leave,assign_by,status) VALUES ('','$from','$to','$leave','$assign_by','$status')";
	
	$res=mysqli_query($conn,$query);

	if($res==true){
		$_SESSION['success']= "Leave Applied successfully!";
		//echo "Leave Applied successfully!";
		header('Location:Permission-students.php');
	}else{
		echo "Leave not Applied, please try again!";
	}
	}

?>