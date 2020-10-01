<?php  
$connect = mysqli_connect("localhost", "root", "", "miniproject");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);  
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $item5 = mysqli_real_escape_string($connect, $data[4]);
                $item6 = mysqli_real_escape_string($connect, $data[5]);

                $query = "INSERT into student(ID,username,NAME,SEM,EMAIL,PHONE_NUMBER) values('$item1','$item2','$item3','$item4','$item5','$item6')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
   header("location: stu_import.php");
  }
 }
}

?> 


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| Import </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <style>
 body {
  font: 300 18px/1.5 'Roboto', sans-serif;
  color: #333;
  background: url('../images/bg.jpg') no-repeat;
  background-size: cover;
}

.container {
  max-width: 640px;
  margin: 50px auto;
  padding: 35px;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
  background: #fff;
  border-radius: 10px;
}

.customSelect select {
  width: 100%;
  height: 100%;
  background: none;
  border: none;
  -webkit-appearance: none;
  padding: 0 50px 0 20px;
  cursor: pointer;
  font: 300 18px/1.5 'Roboto', sans-serif;
  text-indent: 5px;
}
.customSelect select:focus {
  outline: none;
}

.customSelect option {
  font: 300 16px/1.5 'Roboto', sans-serif;
}

.customSelect .select {
  position: relative;
  background: #fff;
  border: 1px solid #1cbe9d;
  height: 50px;
  cursor: pointer;
}

.customSelect .select:before {
  content: '';
  background: #1cbe9d;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  width: 40px;
  pointer-events: none;
}

.customSelect .select:after {
  content: '';
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 7px 0;
  border-color: #fff transparent transparent transparent;
  position: absolute;
  right: 11px;
  top: 50%;
  transform: translateY(-50%);
}

.holder {
  border-bottom: 1px dashed #ccc;
  padding: 0 0 30px;
  margin: 0 0 30px;
}

.row {
  margin: 0 0 15px;
}
</style>
</head>
 
  <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Import Data</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Import</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                   

   <div class="container">
       
        <div class="row">
          <div class="select">

  <h3 align="center">Select the file you want to insert</h3><br />
  <form method="post" enctype="multipart/form-data" class="customSelect">
     <div class="row">
      </div>
        <div class="row">
          
   <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
 
</div>
</form>
</div>
</div>
</div>
</body>
</html>



