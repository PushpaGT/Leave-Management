<?php
#session_start();
$mysqli= new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysqli));

$update = false;
$ID=0;
$username = '';
$NAME = '';
$SEM = '';
$EMAIL = '';
$PHONE_NUMBER = '';

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$username=$_POST['username'];
	//$usn=$_POST['usn'];
	$sem=$_POST['sem'];
	$email=$_POST['email'];
	$phone_number=$_POST['phone_number'];


	$mysqli->query("INSERT INTO student (id,username,name, sem, email, phone_number) VALUES('$id','$username','$name','$sem','$email','$phone_number')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: stu_add_sem1.php");

}

if (isset($_GET['delete'])){
	$ID = $_GET['delete'];
	$mysqli->query("DELETE FROM student WHERE ID = $ID") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: stu_add_sem1.php");
} 
if (isset($_GET['edit'])){
	$ID = $_GET['edit'];
	#$NAME = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM student WHERE ID = $ID") or die($mysqli->error());
   # if (count($result)==1){
     	 #if (is_array($result) && count($result)==1){

		$row = $result->fetch_array();
		$ID = $row['ID'];
		$username = $row['username'];
		$NAME = $row['NAME'];
		$SEM = $row['SEM'];
		$EMAIL = $row['EMAIL'];
		$PHONE_NUMBER = $row['PHONE_NUMBER'];
	


	#}
} 
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$username = $_POST['username'];
		$name = $_POST['name'];
	
		$sem = $_POST['sem'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];

		$mysqli->query("UPDATE student SET ID='$id',username='$username',name='$name', sem='$sem', email='$email', phone_number='$phone_number' WHERE id = '$id' ") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";

		header("location: stu_add_sem1.php");



	} 

?>