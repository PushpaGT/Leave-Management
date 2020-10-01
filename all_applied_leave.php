<?php

//$conn = new mysqli("localhost","root","","miniproject");
$host="localhost";
$username="root";
$pass="";
$db="miniproject";

$conn=mysqli_connect($host,$username,$pass,$db);
if (!$conn) {
  die("Dtabase connection error");
  # code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>All leaves</title>
	<script src="https://ajax.googleeapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<?php
	if(isset($_POST['approved']))
	{
		$status= "Approved";
		$comment=$_POST['comment'];
		$id=$_POST['id'];
		

  	 $query="UPDATE INTO 'leave' set 'status'='$status','comment'='$comment' where 'id'='$id' ";
    
    $res=mysql_query($conn,$query);
    # code...
  
  if ($res) {
    $_SESSION['success']="Row updated successfully";
   
    # code...
  }
  else{

    echo "Dta not inserted,please try again";
  }
}

	
	if(isset($_POST['rejected']))
	{
		$status= "rejected";
		$comment=$_POST['comment'];
		$id=$_POST['id'];
		 $query="UPDATE INTO 'leave' set 'status'='$status','comment'='$comment' where 'id'='$id' ";
    
    $res=mysql_query($conn,$query);
    # code...
  
  if ($res) {
    $_SESSION['success']="Row updated successfully";
   
    # code...
  }
  else{

    echo "Dta not inserted,please try again";
  }
}

	
	

	?>
<?php if(isset($_SESSION['success']))
{
	echo $_SESSION['success'];
} 
?>
<table class="table" border="2">
			
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
                     <th>SEM</th>
                    <th>FROM</th>
                    <th>TO</th>
                    <th>REASON</th>
                    <th>STATUS</th>
                    <th>COMMENT</th>
                    <th>&nbsp;</th>
                	
				</tr>
			</thead>
			

			
		
<?php
$i = 1;
$query  = "Select * from 'leave' t1 join 'admin_login' t2 on t1.id= 't2.username' ";
$res = mysqli_query($conn, $query);
$count = mysqli_num_rows($res);
if($count>0)
{

	while ($row=mysqli_fetch_array($res)) 
	{
		# code...
	

?>
<tr>
                        <td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['sem']; ?></td>
                       <td><?php echo $row['frm']; ?></td>
                        <td><?php echo $row['to']; ?></td>
                        <td><?php echo $row['reason']; ?></td>
                        <td style="color: green;"><?php echo $row['status']; ?></td>
                        <td><form method ="post" action="" >
                        	<textarea name="comment"></textarea></td>
                        	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        	<td>

                        <button type="submit" name="approved" class="btn btn-primary">Approved</button>/td>
                        <button type="submit" name="rejected" class="btn btn-secondary">Reject</button>/td>
                        

						
						
						<!--<td>
                            <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
							<a href="student-accept.php?id=<?php echo $row['id']; ?>" class="btn btn-primary my-2">Accept</a>
							<a href="student-reject.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Reject</a>
						</td>-->

					</tr>
					<?php $i++; } } else{
						echo "No record found!";
					} ?>
					</table>
					</body>

</html>
