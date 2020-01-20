<?php
$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));
session_start();
if (isset($_SESSION['password']) && $_SESSION['password']===TRUE) {
	
} else {
	?>
	<script>window.alert('You must first login');</script>
	<?php
	header("refresh:0;url=index.php");
}

?>

<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<?php include('content.php')?>
<?php include('footer.php')?>