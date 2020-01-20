<?php
session_start();
$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));

if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$select_query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));

	$num=mysqli_num_rows($select_query);

	if ($num ==1) {

		foreach ($select_query as $record) {

			$_SESSION['username']=$record['username'];
			$_SESSION['password']=$record['password'];
			$_SESSION['password']=TRUE;
		}
		echo "<script>window.alert('Login Successful')</script>";
		header("refresh:0;url=table_data.php");
	} else {
		echo "<script>window.alert('Login Failed')</script>";
		header("refresh:0;url=index.php");
	}
	
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row" style="height: 200px;"></div>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<form name="login-form" action="" method="POST">
						<h3>Login</h3>
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username" required><br>
							<input type="password" name="password" class="form-control" placeholder="Password" required><br>
							<input type="submit" name="submit" class="btn btn-primary" value="Login" style="width: 350px;" required>
						</div>
					</form>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>