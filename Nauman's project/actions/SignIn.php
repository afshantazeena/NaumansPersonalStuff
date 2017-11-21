
	<?php 
	$DBHost = "localhost";
	$DBUser = "root";
	$DBPass = "";
	$DB     = "nauman";

?>

<?php 
	
$pdo = new PDO("mysql:dbname=$DB; host=$DBHost" , $DBUser, $DBPass );
	
	if ($pdo){
		echo "Connected";
		
		$sql  = "SELECT * FROM `login`  where `userName`= :userName ";
		$stmt = $pdo->prepare($sql);
		$stmt ->bindParam(":userName", $_POST['EM'] );
		if ($stmt){
				if ($stmt->execute()){
					   $row = $stmt->fetchAll();   // it will return back all rows 
						if (count ($row>0)){
							echo count($row);// the answer will tell the number of matches
						//	ECHO "<pre>";
						//	var_dump($row);
						//	
						//	ECHO "</pre>";
						//	ECHO $row[0][0];
						//	ECHO "<br />";
						//	ECHO $row[0][1];
						//	ECHO "<br />";
						//	ECHO $row[0][2];
						$ID =  $row[0][0];
						$UserName = $row[0][1];
						$UserPass = $row[0][2];
						
						}
					}
				}
	
			}
		
			else {
			print_r ($stmt->erroInfo());
		}
		
	
	$pdo = null;	
	
?>

<?php 
	/*
	ECHO $_POST['EM'];
	ECHO ' ';
	ECHO $_POST['PA'];
	*/
	
?>

<?php 
	if ($_POST['PA'] == $UserPass ){
			header('location:../jobHours.php');
		}else {
		
			header('location:../loginFailure.php');
		
		}	
		
	
?>


