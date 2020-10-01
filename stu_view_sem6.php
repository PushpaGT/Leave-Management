<!DOCTYPE html>
<html>
<head>
	</head>
<body>
	


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
		$result = $mysqli->query("SELECT * FROM sem6") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?> 
		  <div class="main-page">

                     <div class="container-fluid">
                           
                                <div class="col-md-12">
                                	 <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-30">

                                        
		<table class="table" border="2">
			<h3 align="center">STUDENT LIST FOR SEMSETER 6</h3>
			
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
</div>
</div>

	<?php

		function pre_r6( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	<!--<div class="container">
	<div class="row justify-control-center">
		<form action="" method="POST">

			

			<div class="form-group">
				<label>Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo $NAME; ?>" placeholder="Enter name">
			</div>
			
			 <div class="form-group">
			 	<label>Sem</label>
			 		<input type="text" name="sem" class="form-control" value="<?php echo $SEM; ?>" placeholder="Enter sem">
			  </div>
			 <div class="form-group">
			 	<label>Email</label>
			 		<input type="text" name="email" class="form-control" value="<?php echo $EMAIL; ?>" placeholder="Enter email">
			  </div>
			 <div class="form-group">
			 	<label>Phone_Number</label>
			 		<input type="text" name="phone_number" class="form-control" value="<?php echo $PHONE_NUMBER; ?>" placeholder=" Enter phone_number">
			  </div>
			
		</form>
	</div>
</div>
</div>-->
</body>
</html>

