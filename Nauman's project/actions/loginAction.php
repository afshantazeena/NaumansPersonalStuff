<?php 
	
	ECHO $_POST["userName"] . ' ' .  $_POST["userPassword"] ;  


?>


<?php 
	$DBHost = "localhost";
	$DBUser = "root";
	$DBPass = "";
	$DB     = "database";

?>

<?php 
	if (isset($_POST['data'])) {
			
			// Things to do if the data has been posted
	

	
	}

	class LISTT {
				public function get($var){
					if(property_exists($this , $var)){ 
						return $this-> $var;
						}
						return false;
					}
				}
	
	
	$pdo = new PDO("mysql:dbname=$DB; host=$DBHost" , $DBUser, $DBPass );
	echo "<pre>";
	if ($pdo){
	//	echo "Connected";
		
		$sql  = "SELECT `ID`, `item`, `market_rate`, `tp`, `quantity` FROM `list`  where `item`= :item ";
		$stmt = $pdo->prepare($sql);
		$stmt ->bindParam(":item", $data['item'] );
		if ($stmt){
				if ($stmt->execute()){
					   $row = $stmt->fetchAll();   // it will return back all rows 
						if (count ($row>0)){
							echo count($row); // the answer will tell the number of matches 
						}
					}
				}
	
			}
		
			else {
			print_r ($stmt->erroInfo());
		}
		
	
	$pdo = null;
?>