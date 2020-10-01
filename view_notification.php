<?php
$conn = new mysqli("localhost","root","","miniproject");

$sql="UPDATE assign_by SET status=1 WHERE status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from assign_by ORDER BY id DESC limit 5";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-username'>". $row["username"] . "</div>" . 
	
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>