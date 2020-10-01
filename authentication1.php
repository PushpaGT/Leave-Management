<?php
$role= isset($_SESSION['role']);
if($role=='student'){
	   	header('Location:..checking nt\miniprojb\dashboardStudent.php');

   }
?>