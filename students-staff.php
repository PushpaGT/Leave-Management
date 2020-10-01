<?php
$conn = new mysqli("localhost","root","","miniproject");
$count = 0;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	    <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Student| Edit </title>
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
	#read-more {
        position: absolute;
        top: 0;
        right: 0;
    }

</style>

<!--
	function myFunction() {
		$.ajax({
			url: "view_notification.php",
			type: "POST",
			processData:false,
			success: function(data){
				$("#notification-count").remove();					
				$("#notification-latest").show();$("#notification-latest").html(data);
			},
			error: function(){}           
		});
	 }
	 
	 $(document).ready(function() {
		$('body').click(function(e){
			if ( e.target.id != 'notification-icon'){
				$("#notification-latest").hide();
			}
		});
	});
		 
	</script>-->
	
</head>
<body class="top-navbar-fixed">
	
	</div>
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
    <nav class="navbar top-navbar bg-white box-shadow">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                            <a class="navbar-brand" href="dashboard.php">
                                BMSCE MCA | Staff
                            </a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- /.navbar-header -->

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                       
                                <li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                            </ul>
                            <!-- /.nav navbar-nav -->

                            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                     
			 
			 <!-- <li> <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="notification-icon.png"/></button></li>-->
				 		
	                         




       
                                    <li><a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    
                        
                            
                            </ul>
                            <!-- /.nav navbar-nav navbar-right -->

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </nav>

    
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbarStaff.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                 <div class="col-md-2">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboardStaff.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Staff</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>


	<div class="container">
	
</div>
	 <div class="main-page">

                     <div class="container-fluid">
                            
                                <div class="col-md-12">
                                	 <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">
                                         <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>


    <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>  

	<!--<div class="row justify-content-center">-->
		<?php
if(isset($_POST['approved']))
{
    $status="Approved";
    $comment=$_POST['comment'];
    $id=$_POST['id'];
    
     $query="UPDATE `assign_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
    
    $res=mysqli_query($conn,$query);
    
    if($res){
        $_SESSION['success']="Row Updated successfully!";
        
    }else{
        echo "Data not Updated, please try again!";
    }

}
if(isset($_POST['rejected']))
{
    $status= "Rejected";
    $comment=$_POST['comment'];
    $id=$_POST['id'];
    
    $query="UPDATE `assign_leave` set `status`='$status', `comment`='$comment' where `id`='$id'";
    
    $res=mysqli_query($conn,$query);
    
    if($res){
        $_SESSION['success']="Row Updated successfully!";
        
    }else{
        echo "Data not Updated, please try again!";
    }
}


?>
<!------end header here --------->
<div class="content-container">

<h3>All Applied Leave Lists</h3>
<?php if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
    ?>
    <div class="col-md-12">
<table class="table table-striped table-hover " >
  <thead>
    <tr>
      
      <th>Sl No.</th>
      <th>User Name</th>
            
       <th>Reason</th>
      
           <th>From</th>
            <th>To</th>
             <th>Status</th>
             <th>Comment</th>
             <th>&nbsp;</th>
           
          
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;

$username=isset($_SESSION['username']);
  $query = "Select * from `assign_leave` t1 join `admin_login` t2 on t1.apply_by = t2.username ORDER BY $i DESC ";
    $res=mysqli_query($conn, $query);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
    while($row=mysqli_fetch_array($res))
    {
  
  ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row['username']; ?></td>
      
      
      <td><?php echo $row['m_leave'];?></td>
 
        
          <td><?php echo $row['l_from'];?></td>
            <td><?php echo $row['l_to'];?></td>
            <td style="color:green;"><?php echo $row['status'];?></td>
            
            <td><form method="post" action="" >
            <textarea name="comment"></textarea></td>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <td> 
            <button type="submit" name="approved" class="btn btn-primary">Approve</button>
            <button type="submit" name="rejected" class="btn btn-primary">X</button>

            </form></td>
    </tr>
    <?php $i++;}}else{
         echo "No record Found!";
        
    } ?>
  </tbody>
</table> 
</div>
</div>
</body>
</html>