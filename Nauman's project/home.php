<?php 
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		
		<title>Home</title>
		<?php include ('includes/head.php');?>
		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" href="css/home.css" class="css" /> 
		
	</head> 
	<body>
		<?php include ('includes/menu.php');?>
		<br/>
		
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-8 col-sm-9 col-xs-10">
						<h1>This is my personal website</h1>
						<p class="lead">It includes all my personal stuff <a href="historyTable.php"> Visit History table</a> .</p>
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">	Login	</button>
						
						
					</div>
					<div class="col-md-4 col-sm-3 col-xs-2">
						<img src="images/n.jpg"  class="img-fluid float-right" alt="" />
					</div>
				</div>
				
			</div>
			<br />
			<div class="row">
				<div class="col-md-4">
					<h2>Goals</h2>
					<p>Priorities your goals. Keep a record of job hours <a href="jobHours.php">job hours</a> and goal priorities. </p>
					<a href="#" class="btn btn-primary">Reset Goals</a>
				</div>
				<div class="col-md-4">
					<h2>Tasks to do</h2>
					<p class="text-justify">accines have reduced and, in some cases, eliminated many diseases that killed or severely disabled people just a few generations ago.</p>
					<a href="toDoList.php" class="btn btn-primary">Reset Tasks</a>
					
				</div>
				<div class="col-md-4">
					<h2>Expenses</h2>
					<p class="text-justify" >Many vaccines can also protect when administered after exposure – examples are rabies, hepatitis B, hepatitis A, measles and varicella</p>
					<a href="#" class="btn btn-primary">View Expenses </a>
					
				</div>
			</div>
		</div>
		
		
		
		<!-- <script type="text/javascript"><?php include ('includes/home.js');?></script> -->
		<script type="text/javascript"> 
			
		</script>
		
		<!-- Button trigger modal -->
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="actions/SignIn.php" method="POST">
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="text" name="EM" class="form-control" id="Email" value=""/>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="PA" class="form-control" id="inputPassword" placeholder="Password"/>
								</div>
							</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Forgot Password</button>
						<button type="submit" class="btn btn-primary">Sign In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		
	</body>
</html>
