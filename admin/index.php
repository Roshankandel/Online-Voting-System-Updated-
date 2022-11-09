<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}


	  include 'includes/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/admin_login_style.css" />
    <title>Admin Login</title>

</head>

<body>
    <div class="main_div">
        <div class="box">

            <h1>Admin login</h1>
            <br>
            <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
            <form action="login.php" method="post">

                <div class="input-box">
                    <input type="text" name="username" id="name" autocomplete="off" required />
                    <label for="Username">Username</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="name" autocomplete="off" required />
                    <label for="Password">Password</label>
                </div>
                <input type="submit" value="Login" name="login" />
            </form>
        </div>
    </div>
</body>

</html>