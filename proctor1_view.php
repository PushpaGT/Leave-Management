<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MCA Admin| View Students</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

	
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
		$result = $mysqli->query("SELECT * FROM proctor_sem1") or die($mysqli->error);
	?>
	                 	<div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                	 <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

		<table class="table" border="2">
			<h3 align="center">PROCTOR LIST </h3>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					
					
					<th>EMAIL</th>
					<th>QUALIFICATION</th>
					<th>DESIGNATION</th>
					<th colspan="1">Action</th>
					
				</tr>
			</thead>
			<?php
				while($row = $result->fetch_assoc()): ?>
					<tr>
							<td><?php echo $row['ID']; ?></td>
						
						<td><?php echo $row['NAME']; ?></td>
						
						
						<td><?php echo $row['EMAIL']; ?></td>
						<td><?php echo $row['QUALIFICATION']; ?></td>
						<td><?php echo $row['DESIGNATION']; ?></td>
						<td>
						<a href="link.php?view=<?php echo $row['ID']; ?>"
							class="btn btn-info">Student List</a>
								</td>

					</tr>
					<?php endwhile; ?>
			
		</table>
	</div>

	<?php

		function pre_r( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
</body>
</html>

