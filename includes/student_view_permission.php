<?php
session_start();
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','miniproject');
// Establish database connection.
try
{
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
if(strlen($_SESSION['username'])==0)
    {   
header('location:index.php');
}
else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SE | Student Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('includes/topbarStaff.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbarStaff.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            

<div class="container">
<h3>Leave Lists </h3>
<div class="col-md-6">
<table class="table table-striped table-hover ">
  <thead>
    <tr>          
        <th>Username</th>

          
     <th>Medical Leave</th>
       
       <th>Valid From</th>
        <th>Valid To</th>
        <th>Status<th>
    </tr>
  </thead>
  <tbody>
    <?php
//session_start();
$conn = new mysqli("localhost","root","","miniproject");
//$result = $mysqli->query("SELECT * FROM assign_leave") or die($mysqli->error);

?>

 <?php 
  $i=1;
  $user_id=isset($_SESSION['user_id']);
  $query = "Select * from `applied_leave` t1 join `admin_login` t2 on t1.apply_by = t2.user_id ";
  $res = mysqli_query($conn, $query);
  $count = mysqli_num_rows($res);
  if($count>0)
  {
  while($row=mysqli_fetch_array($res))
  {
  
  ?>
    <tr>
  
  <td ><?php echo $row['username'];?></td>
      
      
    <td><?php echo $row['m_leave'];?></td>
     
      <td><?php echo $row['l_from'];?></td>
        <td><?php echo $row['l_to'];?></td>
        <td><?php echo $row['status'];?></td>
    </tr>
  <?php $i++;}}else{
     echo "No record Found!";
    
  } ?>


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
    </body>
</html>
<?php } ?>
