<?php

if(isset($_POST['password'])){
$pass = $_POST['password'];
$acode=$_POST['activation_code'];

$con=mysqli_connect("xxx","xxx","xxx","xxx");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con,"select * from admin_login where activation_code='$acode'")
or die(mysqli_error($con)); 

if (mysqli_num_rows ($query)==1) 
{
$query3 = mysqli_query($con,"update admin_login set password='$pass' where activation_code='$acode'")
or die(mysqli_error($con)); 

echo 'Password Changed';
}
else
{
echo 'Wrong CODE';
}
}
?>

<form action="reset_password.php" method="POST">
<p>New Password:</p>
<input type="password" name="pass" />
<input type="submit"  name="submit" value="Signup!" />

<input type="hidden" name="code" value="<?php echo isset($_GET['activation_code']);?>" />
</form>
