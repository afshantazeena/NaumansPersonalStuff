
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		
		<title>Job Hours</title>
		<meta http-equiv="X-UA-compatible"content="IE-edge" />
<meta name="viewport" content="width=device-width,initial-scale=1"/>

<script type="text/javascript" src="js/jquery-3.2.1.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/toDoList.css" media="all" />


<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />


<script type="text/javascript" src="js/bootstrap.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity    "sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="css/menu.css" media="all" />

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  
  
  <link rel="stylesheet" href="ui/jquery-ui.structure.css" />
  <link rel="stylesheet" type="text/css" href="ui/jquery-ui.js" media="all" />
  <link rel="stylesheet" type="text/css" href="ui/jquery-ui.css" media="all" />
  <link rel="stylesheet" type="text/css" href="ui/jquery-ui.theme.css" media="all" />
  
  <script type="text/javascript" source="ui/jquery-ui.js"></script>
 		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" href="css/home.css" class="css" /> 
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="ui/jquery.timepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="ui/jquery.timepicker.css" />
		
		
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$( "#datepicker" ).datepicker({
					dateFormat:"yy-mm-dd"
				});
				$( "#format" ).on( "change", function() {
					$( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
				});
			} );
		</script>
		<script type="text/javascript"> 
			$(document).ready(function (){
				//	alert('Hello world');
				$('#TIME').timepicker({ 'timeFormat': 'H:i:s' });
				$('#TIME2').timepicker({ 'timeFormat': 'H:i:s' });
				
				
			});
			
			
			
		</script>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #4267B2;"> 
		<!--	<nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
				<a class="navbar-brand" href="#">Nauman Ahmad Bajwa</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
							</li>
					</ul>
					
				</div>
			</nav>
		</div>		<br />
		<div class="container">
			<div class="jumbotron">
				<div class="row"> 
				<h1 class="display-5">Work Hours</h1>
				<button id="addRecord" name="" type="button" class="ml-auto btn btn-light" >  Add Record </button>
				<button id="history" name="" type="button" class="ml-auto btn btn-light" >  History </button>
				</div>
				<p class="lead"></p>
				<hr class="my-4">
				<p></p>
				<form id="form" action="actions/hours.php" method="POST">
					<table>
						<tr>
							<td>Date</td>
							<td><input type="text" name="DA" id="datepicker" ></td>
						</tr>
						<tr>
							<td>Sign In Time</td>
							<td><input type="text" name="SIT" id="TIME" /></td>
						</tr>
						<tr>
							<td>Sign Out Time</td>
							<td><input type="text" name="SOT" id="TIME2" /></td>
						</tr>
						<tr>
							<td>Work Hours</td>
							<td><input type="text" name="TDIFF" id="TIME3"  /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Save" /></td>
						</tr>
					</table>
				</form>
				<div id="nextData"></div>
			</div>
		</div>
		
		<!---------------------------- Start! Code for displaying Successful message---------------------------------->
		
					<div class="container">
				
			</div>
			
					<!---------------------------- End! Code for displaying Successful message---------------------------------->
		
		<!-----------Start! script for finding time difference-------------------->
		<script type="text/javascript">
			$(document).ready(function(){
				//	alert('hello world');
				
				// attach function to a change
				$('#TIME2').change(function(){
					
					
					
					// calculate time 1 
					
					var time1 = $('#TIME').val();
					var hms = time1;  
					var a = hms.split(':'); 
					var minutes = (+a[0]) * 60 + (+a[1]);
					
					
					
					// calculate time 2 
					var time2 = $('#TIME2').val();
					var hms2 = time2; 
					var a2 = hms2.split(':'); 
					var minutes2 = (+a2[0]) * 60 + (+a2[1]);
					
					
					// calculate time difference
					
					var T1 =parseInt(minutes);
					var T2 = parseInt(minutes2);
					var TimeDifference = T2 - T1;
					//	alert(TimeDifference);
					// conversion into Time Format
					
					var MINUTES = TimeDifference % 60 ;
					var Hours   = Math.floor(TimeDifference / 60);
					
					if (Hours < 10 ) {
						var StringHours =  Hours.toString();
						var NewHours    = '0' + StringHours;
						} else {
						var	NewHours    = Hours.toString();
					}
					
					if (MINUTES < 10 ){
					    var StringMinutes = MINUTES.toString();
						var NewMinutes    = '0'+ StringMinutes;
						}else {
						var NewMinutes 	  = MINUTES.toString();
					}
					var newTime = NewHours + ':' + NewMinutes + ':' + '00';
					
					$('#TIME3').val(newTime);
					
				});
				
				
			});
			
		</script>
		
		
		
		
		<!-----------End! script for finding time difference-------------------->
		
		<!--	<input type="button" value="click me" id="btn1" /> -->
		<script type="text/javascript">  
			$(document).ready(function(){
				
				$('#history').click(function(){
					$('#form').slideUp(500);
					$("#nextData").load("historyTable.php");
					
					});
				});
			
			</script>
	</body>
</html>

