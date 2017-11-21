<?php 
	
	$DB 	= "nauman";
	$DBHost = "localhost";
	$DBUser = "root";
	$DBPass = "";
	
	
?>

<?php 
	
	//ECHO $_POST['DA'] . ' ' . $_POST['SIT']. ' ' . $_POST['SOT'];
	//$_POST['DA']	 = '2018-11-19';
	//$_POST['SIT']	 = '00:20:00';
	//$_POST['SOT']	 ='04:30:00';
	
	//INSERT INTO `hourscalculator`(`id`, `date`, `signInTime`, `signOutTime`) VALUES ([value-1],[value-2],[value-3],[value-4])
?>

<?php 
	try {
		$conn = new PDO("mysql:host=$DBHost;dbname=$DB", $DBUser, $DBPass);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
		$stmt = $conn->prepare("INSERT INTO `hourscalculator`(`date`, `signInTime`, `signOutTime`, `timeDiff`) VALUES(:date, :signInTime, :signOutTime, :timeDiff)");
		$stmt->execute(array(':date' => $_POST['DA'], ':signInTime' => $_POST['SIT'], ':signOutTime' => $_POST['SOT'], ':timeDiff' => $_POST['TDIFF']));
		$affected_rows = $stmt->rowCount();
		
		
		
		
		// use exec() because no results are returned
		//$conn->exec($sql);
		//echo "New record created successfully and " . $affected_rows . "  have been inserted.";
		header("location:../jobHours.php?status=success");
		
		
	}
	catch(PDOException $e)
    {
		echo $sql . "<br>" . $e->getMessage();
	}
	
	$conn = null;
?>
