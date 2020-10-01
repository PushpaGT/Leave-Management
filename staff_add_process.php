<?php
$mysqli= new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysql));

$update = false;
$sl_no=0;
$username = '';
$name = '';
$designation = '';
$mail_id = '';


if(isset($_POST['save'])){
	$sl_no=$_POST['sl_no'];
	$username=$_POST['username'];
	$name=$_POST['name'];
	//$usn=$_POST['usn'];
	$desihnation=$_POST['designation'];
	$mail_id=$_POST['mail_id'];
	


	$mysqli->query("INSERT INTO faculty (sl_no, username, name, designation, mail_id) VALUES('$sl_no',,'$username', '$name','$designation','$mail_id')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: staff_add.php");

}

if (isset($_GET['delete'])){
	$sl_no = $_GET['delete'];
	$mysqli->query("DELETE FROM faculty WHERE sl_no = $sl_no") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: staff_add.php");
} 
if (isset($_GET['edit'])){
	$sl_no = $_GET['edit'];
	#$NAME = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM faculty WHERE sl_no = $sl_no") or die($mysqli->error());
    # if (count($result)==1){
     	 if (is_array($result) && count($result)==1){

		$row = $result->fetch_array();
		$sl_no = $row['sl_no'];
		$NAME = $row['NAME'];
		$designation = $row['designation'];
		$mail_id = $row['mail_id'];
		$PHONE_NUMBER = $row['PHONE_NUMBER'];
	


	}
} 
if (isset($_POST['update'])){
	$sl_no = $_POST['sl_no'];
	$username = $_POST['username'];
		$name = $_POST['name'];

	
		$designation = $_POST['designation'];
		$mail_id = $_POST['mail_id'];
		$phone_number = $_POST['phone_number'];

		$mysqli->query("UPDATE faculty SET sl_no='$sl_no',username='$username', name='$name', designation='$designation', mail_id='$mail_id' WHERE sl_no = $sl_no") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";

		header("location: staff_add.php");



	} 

?>