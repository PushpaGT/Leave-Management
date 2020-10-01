<?php 
error_reporting(0);
if($_POST['submit']=='Send')
{
//keep it inside
$email=$_POST['email'];
$code = $_GET['activation_code'];
$con=mysqli_connect("Localhost","root","","miniproject");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query = mysqli_query($con,"select * from admin_login where email='$email'")
or die(mysqli_error($con)); 

 if (mysqli_num_rows ($query)==1) 
 {
$code=rand(100,999);
$message="You activation link is: http://bing.fun2pk.com/resetpass.php?email=$email&activation_code=$code";
mail($email, "ZatWing", $message);
echo 'Email sent';
$query2 = mysqli_query($con,"update admin_login set activation_code='$code' where email='$email' ")
 $res = mysqli_query($conn, $query);


or die(mysqli_error($con)); 
}
else
{
echo 'No user exist with this email id';

}}

?>
<form action="reset_password.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>
<?php
while($row=mysqli_fetch_array($res))
  {

echo $query2['activation_code']; 
}
?>