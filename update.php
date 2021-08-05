<?php 

	require_once('connection.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		//POST variable value
		$id = $_POST['id'];
		$name = $_POST['name'];
		$position = $_POST['position'];
		$salary = $_POST['salary'];

		//create sql syntax
		$sql = "UPDATE tb_pegawai SET nama = '$name', posisi = '$position', gajih = '$salary' WHERE id = $id";

		//execute query
		if(mysqli_query($con, $sql)){
			$response['success'] = true;
			$response['message'] = 'Data pegawai berhasil diperbaharui';
		}else{
			$response['success'] = false;
			$response['message'] = 'Data pegawai gagal diperbaharui';
		}
	}else{
		$response['success'] = false;
		$response['message'] = 'Permintaan ditolak';
	}
	echo json_encode($response);
	mysqli_close($con);

?>