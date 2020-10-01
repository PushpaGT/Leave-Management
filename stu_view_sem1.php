<!DOCTYPE html>
<html>
<head>
	
	</head>

<body class="top-navbar-fixed">
	



	<?php
			if (isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif ?>

	<div class="container">
	<?php

		$mysqli = new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM student") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	 <div class="main-page">

                     <div class="container-fluid">
                            
                                <div class="col-md-6">
                                	 <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        

	
		<table class="table" border="2">
			<h3 align="center">STUDENT LIST FOR SEMSETER 1</h3>
			<thead>
				<tr><th>ID</th>
                    <th>USN</th>
					<th>NAME</th>
					<th>SEM</th>
					
					<th>EMAIL</th>
					<th>PHONE NUMBER</th>
					
				</tr>
			</thead>
			<?php
				while($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['username']; ?></td>
						<td><?php echo $row['NAME']; ?></td>
						<td><?php echo $row['SEM']; ?></td>
						
					
						<td><?php echo $row['EMAIL']; ?></td>
						<td><?php echo $row['PHONE_NUMBER']; ?></td>
								

					</tr>
					<?php endwhile; ?>
			
		</table>
	</div>
	<?php

		function pre_r1( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
</body>
</html>

