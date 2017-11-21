<?php 
	
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>website</title>
		<?php include ('includes/head.php');?>
		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" type="text/css" href="css/clinicstyle.css" media="all" />
		<script src="https://use.fontawesome.com/97a933fe64.js"></script>
		<link href="../css/bootstrap-timepicker.min.css" rel="stylesheet">
		<link rel="icon" href="../img/favicon.ico">
	</head> 
	<body>
		<?php include ('includes/menu.php');?>
		<br/>
		<div class="container">
			<div class="row"> 
				<div class="col-sm-12"> 
					<h1> Doctor Signup</h1>
					<h2 class="text-center">Add Clinic Information</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					
					<div class="form-group">
						<input type="text" class="form-control" id="Name" placeholder="Clinic Name" required="">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number" required="">
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-md-12" style="padding: 0px;">Select Off Days of Clinic</label><br>
						<div class="checkbox-inline">
							<label><input id="Monday" class="OffDays" name="OffDays" type="checkbox" value="Monday">Monday</label>
						</div>
						<div class="checkbox-inline">
							<label><input id="Tuesday" class="OffDays" name="OffDays" type="checkbox" value="Tuesday">Tuesday</label>
						</div>
						<div class="checkbox-inline">
							<label><input id="Wednesday" class="OffDays" name="OffDays" type="checkbox" value="Wednesday">Wednesday</label>
						</div>
						<div class="checkbox-inline">
							<label><input id="Thursday" class="OffDays" name="OffDays" type="checkbox" value="Thursday">Thursday</label>
						</div>
						<br>
						<div class="checkbox-inline">
							<label><input id="Friday" class="OffDays" name="OffDays" type="checkbox" value="Friday">Friday</label>
						</div>
						<div class="checkbox-inline">
							<label><input id="Saturday" class="OffDays" name="OffDays" type="checkbox" value="Saturday">Saturday</label>
						</div>
						<div class="checkbox-inline">
							<label><input id="Sunday" class="OffDays" name="OffDays" type="checkbox" value="Sunday">Sunday</label>
						</div>
					</div>
					</div>
					<div class="col-sm-3"></div>
					
				</div>
			</div>
			<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
			<div class="form-group">
				<div class="input-group bootstrap-timepicker timepicker">
					<input id="StartTime" type="text" class="form-control input-small" placeholder="Start Time of clinic" required="">
					<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
				</div>
			</div>
			<div class="form-group">
			<div class="input-group bootstrap-timepicker timepicker">
				<input id="StartTime" type="text" class="form-control input-small" placeholder="Start Time of clinic" required="">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-time">
						
					</i></span>
			</div>
			</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
					<center><strong><h1> Location</h1></strong></center>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.29442044!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507633624278" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div id="current">Select marker and drag it to your location...</div>
				<div class="form-group">
					<button type="button" class="btn btn-primary btn-lg btn-block" id="btnAddClinic" onclick="return Add();">Finish Singup</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>

	