<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])) {
	header("Location: login.php");
}

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_pass = $_POST['confirm_pass'];

	if ($password == $confirm_pass) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if(!$result->num_rows >0){
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				echo "<script>alert('Successful Sign Up.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['confirm_pass'] = "";
			} else {
				echo "<script>alert('Error.')</script>";
			}
		} else {
			echo "<script>alert('Email already exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custome CSS File -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">
		<form action="" method="post" class="login-form">
			<p class="login-text">Sign Up</p>

			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username;?>" required>
			</div>

			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email;?>" required>
			</div>

			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password'];?>" required>
			</div>

			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="confirm_pass" value="<?php echo $_POST['confirm_pass'];?>" required>
			</div>

			<div class="input-group">
				<button name="submit" class="btn">Sign Up</button>
			</div>
			<p class="login-para">Have an account? <a href="login.php">Log in Here.</a></p>
		</form>
	</div>
</body>
</html>