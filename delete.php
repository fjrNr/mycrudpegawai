<?php 

	require_once('connection.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$id = $_POST['id'];
		$sql = "DELETE FROM tb_pegawai WHERE id=$id";

		if(mysqli_query($con, $sql)){
			$response['success'] = true;
			$response['message'] = 'Data pegawai berhasil dihapus';
		}else{
			$response['success'] = false;
			$response['message'] = 'Data pegawai gagal dihapus';
		}

	}else{
		$response['success'] = false;
		$response['message'] = 'Data pegawai gagal dihapus';
	}
	
	echo json_encode($response);
	mysqli_close($con);

?>