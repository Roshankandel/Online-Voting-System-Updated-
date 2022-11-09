<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
	    $email = $_POST['email'];
		$fathersname = $_POST['fname'];
		$citznum = $_POST['citznum'];
		


		// $sql = "SELECT * FROM voters WHERE id = $id";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// if($password == $row['password']){
		// 	$password = $row['password'];
		// }
		// else{
		// 	$password = password_hash($password, PASSWORD_DEFAULT);
		// }

		$sql = "UPDATE voters SET fullname = '$fullname', email= '$email', fathername='$fathersname',citznum='$citznum' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>