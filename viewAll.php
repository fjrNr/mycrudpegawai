<?php 

	require_once('connection.php');
	
	//create sql syntax
	$sql = "SELECT * FROM tb_pegawai";

	//execute query
	$query = mysqli_query($con, $sql);

	//create array
	$response = array();
	while($row = mysqli_fetch_assoc($query)){
		array_push($response, 
			array(
			"id" => $row['id'],
			"name" => $row['nama'],
		));
	}

	echo json_encode($response);
	mysqli_close($con);
?>