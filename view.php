<?php 

	require_once('connection.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM tb_pegawai WHERE id = $id";
	$query = mysqli_query($con, $sql);

	$row = mysqli_fetch_assoc($query);
	$response = array(
			"id" => $row['id'],
			"name" => $row['nama'],
			"position" => $row['posisi'],
			"salary" => $row['gajih'],
	);

	echo json_encode($response);
	mysqli_close($con);
?>