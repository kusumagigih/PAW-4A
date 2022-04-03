<?php
	include 'koneksi.php';
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$data = mysqli_query ($koneksi, "delete from data where id = '$id'");
		header('location:index.php');
	}
?>