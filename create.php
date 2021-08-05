<?php 
	
	require_once('connection.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		//get variable value
		$name = $_POST['name'];
		$position = $_POST['position'];
		$salary = $_POST['salary'];

		//create sql syntax
		$sql = "INSERT INTO tb_pegawai (nama, posisi, gajih) VALUES ('$name', '$position', '$salary')";

		//execute query
		if(mysqli_query($con, $sql)){
			$response['success'] = true;
			$response['message'] = 'Data pegawai berhasil ditambahkan';
		}else{
			$response['success'] = false;
			$response['message'] = 'Data pegawai gagal ditambahkan';
		}
	}else{
		$response['success'] = false;
		$response['message'] = 'Permintaan ditolak';
	}
	echo json_encode($response);
	mysqli_close($con);
?>