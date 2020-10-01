<?php
session_start();
if (isset($_POST['login']))
{
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $flag=0;
        $_SESSION['username']=$username;
// Create connection
$conn = new mysqli('localhost','root','','miniproject');
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin_login WHERE username='".$username."' and password='".$pass."'";
$result = $conn->query($sql);
$sql1 = ("select type from admin_login where username='".$username."' and password='".$pass."' ");
$res = $conn->query($sql1);
//$r=mysqli_fetch_assoc($res);

 //$result = mysql_query($sql);
  $count = mysql_num_rows($res);


  

  if($res == 1) {


 
    session_register(username);

    $_SESSION['username'] = $_POST['username']; 
  }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MCA Student| View Students</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
      <script src="js/modernizr/modernizr.min.js"></script>
      
       
        <script>
$( document ).ready(function() {
$( function() {

  var dateToday = new Date();
  var dates = $("#from, #to").datepicker({
    dateFormat: "dd/mm/yy",
    defaultDate: "+2d",
    changeMonth: true,
    numberOfMonths: 1,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
        instance = $(this).data("datepicker"),
        date = $.datepicker.parseDate(instance.settings.dateFormat || selectedDate,$.datepicker._defaults.dateFormat,  instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
  

  });

});

});


</script>
       </head>
   <body class="top-navbar-fixed">
       

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbarSTU.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbarSTU.php');?>  
                    <!-- /.left-sidebar -->

                   <div class="container-fluid">
                            
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-2">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboardStudent.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Student</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                         
 
 <p><?php if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
  } ?></p>
         <div class="col-xs-6 col-xs-push-3 well">                 

<form action="insert-leave.php" method="POST">
  <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
  
 <fieldset>
  <div class="col-xs-9">
   
   From:
    <input type="text"   id="from" name="l_from" placeholder="dd/mm/yyyy" class="form-control"  required="">
           
            
   To:
 <input type="text"  id="to" name="l_to" placeholder="dd/mm/yyyy" class="form-control" required="">
            

Reason:
<textarea rows="4" cols="50" type="text" name="m_leave"></textarea>




<button type="submit" class="btn btn-primary" name="submit" alert="submitted">Submit</button>
</div>

  </fieldset>
</form>
</div>
</div>


</div>
</body>
</html>