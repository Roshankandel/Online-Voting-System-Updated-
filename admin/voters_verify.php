<?php
	include 'includes/session.php';
	if(isset($_POST['validate'])){
	
		$id = $_POST['id'];
	
		$sql = "SELECT * FROM voters WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
         $voters_id=$row['voters_id'];
        $fullname = $row['fullname'];
		$email= $row['email'];


		$sql = "UPDATE voters SET verified= 1 WHERE id = '$id'";

		if($conn->query($sql)){

			$_SESSION['success'] = 'Voter validated successfully';
            
                $subject = "Voter Application Approval";
                $message = " 

						
							
						Congratulations!, $fullname your voter application is approved
						your voting id is:$voters_id
						Now you can login with the voter id and can vote to your favourite candidate!
						
                ";
                $sender = 'From: krish.spm1999@gmail.com';
                
                
                if(mail($email, $subject, $message, $sender)){ // true  bhayo bhane
                    $_SESSION['success'] = 'Voter id provided to the voter ';
                    
                   
                }else{
                    $_SESSION['error'] = 'Error! unable to send mail';
                }
            
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
elseif(isset($_POST['reject'])){
  $id=$_POST["id"];
  $sql = "SELECT * FROM voters WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
       
        $fullname = $row['fullname'];
		$email= $row['email'];


		$subject = "Voter Application Rejected!!";
		$message = " 

				
					
				Sorry!, Dear $fullname your voter application is Rejected.
				Your Credentials does not Fullfill requirements to be voter.
				
				
		";
		$sender = 'From: krish.spm1999@gmail.com';
		
		
		if(mail($email, $subject, $message, $sender)){ // true  bhayo bhane
			$_SESSION['success'] = 'Voter Application is Rejected ';
			
		   
		}else{
			$_SESSION['error'] = 'Error! unable to send mail';
		}
	}
else{
	$_SESSION['error'] = 'Fill up edit form first';
	// echo 'hello';
}
	header('location: voters.php');

?>