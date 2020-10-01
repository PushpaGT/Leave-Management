
<?php
$mysqli= new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysql));

//$update = false;


$v_from = '';
$v_to = '';
$m_leave = '';
$assign_by = '';

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$v_from=$_POST['v_from'];
	//$usn=$_POST['usn'];
	$v_to=$_POST['v_to'];
	$m_leave=$_POST['m_leave'];
	//$assign_by=$_POST[''];


	$mysqli->query("INSERT INTO assign_leave (id,v_from, v_to, m_leave) VALUES('$id',$v_from','$v_to','$m_leave')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	//header("location: Permission-students.php");

}
?>