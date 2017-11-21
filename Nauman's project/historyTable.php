<?php 
	$DBHost = "localhost";
	$DBUser = "root";
	$DBPass = "";
	$DB     = "nauman";
	
?>


<?php 
	
	$pdo = new PDO("mysql:dbname=$DB; host=$DBHost" , $DBUser, $DBPass );
	
	if ($pdo){
		//echo "Connected";
		
		$sql  = "SELECT `id`, `date`, `signInTime`, `signOutTime`, `timeDiff` FROM `hourscalculator` ";
		$stmt = $pdo->prepare($sql);
		
		ECHO "<table class='table table-dark'>";
		ECHO "<thead>";
		ECHO "<tr>";
		ECHO	"<th scope='col'>DATE</th>";
		ECHO	"<th scope='col'>signInTime</th>";
		ECHO	"<th scope='col'>signOutTime</th>";
		ECHO	"<th scope='col'>timeDiff</th>";
		ECHO "</tr>";
		ECHO "</thead>";
		
		if ($stmt){
			if ($stmt->execute()){
				while ($row = $stmt->fetch()){
					ECHO "<tr>";
					ECHO "<td>".$row['date'] ."</td>";
					ECHO "<td>".$row['signInTime'] ."</td>";
					ECHO "<td>".$row['signOutTime'] ."</td>";
					ECHO "<td>".$row['timeDiff'] ."</td>";
					ECHO "</tr>";
					
				}
			}
			
		}
		
		else {
			print_r ($stmt->erroInfo());
		}
		
	}
	ECHO "</table>";
	$pdo = null;
?>



<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<a href="home.php">Visit Home</a>
	</body>
</html>