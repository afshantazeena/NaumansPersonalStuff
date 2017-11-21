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
					<h1 class="text-center">Doctor Signup</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-6 ">
					<!---Form---->
					<form>
						<div class="form-group">
							<input type="text" required="required" class="form-control" id="" aria-describedby="emailHelp" placeholder="First Name">
						</div>
						<div class="form-group">
							<input type="text" required="required" class="form-control" id="" aria-describedby="emailHelp" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input type="email" required="required" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
					
							<div class="form-row">
								<div class="form-group col-md-4">
									<select id="inputState" class="form-control">
									<option value="">Choose Country</option>
									<option value="">Pakistan</option>
									<option value="">India</option>
									</select>
								</div>
								<div class="col">
									<input type="text" required="required" class="form-control small_text" placeholder="mobile number">
								</div>
							</div>
						
						
						
						<div class="form-group">
							<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Phone Number">
						</div>
						<div class="form-group">
							<input type="text" required="required" class="form-control" id="" aria-describedby="emailHelp" placeholder="PMDC Number">
						</div>
						
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</form>
					
					
					
					
					
					
					<!---Form---->
				</div>
			</div>
			
		</div>
		
		
		<!-- <script type="text/javascript"><?php include ('includes/home.js');?></script> -->
		
	</body>
</html>
