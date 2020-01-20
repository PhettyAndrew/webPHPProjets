<?php

$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));

$id=$_GET['id'];

$delete_query=mysqli_query($conn,"DELETE FROM registration WHERE id=$id") or die(mysqli_error($conn));

if ($delete_query) {
	echo "<script>window.alert('1 record deleted')</script>";
	header("refresh:0;url=table_data.php");
} else {
	echo "<script>window.alert('Failed')</script>";
	header("refresh:0;url=table_data.php");
}

?>