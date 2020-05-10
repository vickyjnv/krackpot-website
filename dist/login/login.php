<?php include('../../dashboard/includes/connectionClass.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>KrackPot Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../dashboard/assets/css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="../../dashboard/assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dashboard/assets/images/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image:url('../../dashboard/assets/images/banner.svg');"></div>

				<form action="<?php echo $_SERVER['PHP_SELF']?>" class="login100-form validate-form" method="POST">
					<div class="wrap-input100 validate-input m-b-40" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-40" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit">
							Login
						</button>
					</div>
				</form>


				<?php 
					session_start();
					if(isset($_POST['login'])){
						$username = $_POST['username'];
                    	$password = $_POST['password'];

						$username = mysqli_real_escape_string($connect,$username);
						$password = mysqli_real_escape_string($connect,$password);

						$login_query = "SELECT * FROM login WHERE username = '{$username}' AND password = '{$password}'";
						$login_query_result = mysqli_query($connect,$login_query);

						$getNumRows = mysqli_num_rows($login_query_result);
						if($getNumRows == 1){
							$getUserRow = mysqli_fetch_assoc($login_query_result);
							unset($getUserRow['password']);
							$_SESSION = $getUserRow;	
							header('location:../../dashboard/index.php');
							exit;
						}else{
							echo '<div class="alert alert-danger h2 m-0 p-4" role="alert">
                                    Login Failed!
                                	</div>';
						}
                        /* if($login_query_result){
							if(mysqli_num_rows($login_query_result)>0){
								$row = mysqli_fetch_array($login_query_result,MYSQLI_ASSOC);
								$_SESSION['user_role'] = $row['1'];
								header( "Location: ../../dashboard/index.php");
							}else{
								echo '<div class="alert alert-danger h2 m-0 p-4" role="alert">
                                    	Login Failed!
                                	</div>';
							}
						} */
					}
					
					if(isset($_GET['logout']) && $_GET['logout'] == true){
						session_destroy();
						header("location:login.php");
						exit;
					}
				?>
			</div>
		</div>
	</div>
</body>

</html>