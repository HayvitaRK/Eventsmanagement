<?php
	$companyName = $_POST['companyName'];
	$agentName = $_POST['agentName'];
	$EMail = $_POST['EMail'];
	$Address = $_POST['Address'];
	$Telephone = $_POST['Telephone'];
	$Password = $_POST['Password'];
	$Category = $_POST['Category'];
// 	$Image = $_POST['Image'];

	// Database connection
	$conn = new mysqli('localhost','root','','agentslogin');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into ouragents(companyName, agentName, EMail, Address, Telephone, Password,Category) values(?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssiss", $companyName, $agentName, $EMail, $Address, $Telephone, $Password,$Category);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull visit us again!!!...";
		$stmt->close();
		$conn->close();
	}
?>
