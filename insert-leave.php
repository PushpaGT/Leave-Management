<?php
$mysqli= new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysqli));


$id = '';

$l_from = '';
$l_to = '';
$m_leave = '';
$apply_by = '';

$status = '';
$comment = '';


if(isset($_POST['submit'])){
	
	$l_from=$_POST['l_from'];
	$l_to=$_POST['l_to'];
	$m_leave=$_POST['m_leave'];
	$apply_by=$_POST['username'];


	$mysqli->query("INSERT INTO assign_leave (l_from,l_to,m_leave,apply_by) VALUES('$l_from','$l_to','$m_leave','$apply_by')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: Permission-students.php");
	

}?>
