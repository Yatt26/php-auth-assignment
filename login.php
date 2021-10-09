<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result -> num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Invalid Email/Password.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custome CSS File -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">
		<form action="" method="post" class="login-form">
			<p class="login-text">Log In</p>
			<div class="input-group">
				<input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Log In</button>
			</div>
			<p class="login-para">Don't have an account? <a href="signup.php">Sign Up Now !</a></p>
		</form>
	</div>
	
</body>
</html>