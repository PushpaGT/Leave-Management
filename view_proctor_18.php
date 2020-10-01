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
		$result = $mysqli->query("SELECT * FROM proctor_18") or die($mysqli->error);
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

                                        

	
		<?php

		$mysqli = new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM proctor_18") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	<h3><b>Proctors of Year 18-21</b></h3>
	<br>
	<div class="content-container">
		<table class="table" border="2">
            <thead>
                <tr>
                    <th>SL_NO</th>
                    <th>STAFF_NAME</th>
                    
                    
                    
                    
                    <th>DESIGNATION</th>
                    <th>MAIL_ID</th>
                    
                </tr>
            </thead>
            <?php
                while($row = $result->fetch_assoc()): ?>
                    <tr>
                            <td><?php echo $row['sl_no']; ?></td>
                        
                        <td><?php echo $row['name']; ?></td>
                        
                        <td><?php echo $row['designation']; ?></td>
                         <td><?php echo $row['mail_id']; ?></td>
                                

                    </tr>
                    <?php endwhile; ?>
            
        </table>
	</div>

	<?php

		function pre_r11( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
</body>
</html>