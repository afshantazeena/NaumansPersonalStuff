<?php 
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<?php include ('includes/head.php');?>
		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" href="css/doctor_sign_up.css" class="css" /> 
		
	</head> 
	<body>
		<?php include ('includes/menu.php');?>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Login</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-6 ">
					<!---Form---->
					<form action="actions/loginAction.php" method="POST">
						<div class="form-group">
							<input type="text" required="required" name="userName" class="form-control" placeholder="User Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="userPassword" id="" aria-describedby="emailHelp" placeholder="Password">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Login"/>
					</form>

					
					
					
					
					
					<!---Form---->
				</div>
			</div>
			
		</div>
		
		
		<!-- <script type="text/javascript"><?php include ('includes/home.js');?></script> -->
		
	</body>
</html>
