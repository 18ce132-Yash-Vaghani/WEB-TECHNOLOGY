<?php

	$FName = $_POST['FName'];
	$MName = $_POST['MName'];
        $LName = $_POST['LName'];
  	$Role = $_POST['Role'];
	$ID = $_POST['ID'];
 	$City = $_POST['City'];
        $EMail = $_POST['EMail'];
        $Mob = $_POST['Mob'];


	$conn = new mysqli('localhost','root','', 'test');	
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into registration(FName,MName,LName,Role,ID,City,EMail,Mob)
			values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssi",$FName,$MName,$LName,$Role,$ID,$City,$EMail,$Mob);
		$stmt->execute();
		echo "ALL THE DETAILS ARE REGISTERED SUCCESSFULLY, YOU WILL GET RESPONSE SOON....";
		$stmt->close();
		$conn->close();
}
?>

