<?php 
	//ob_start();
 	//session_start();
    include_once '../../config/connect.php';
 
	if (isset($_GET['id_user'])) {
		$id = (int)$_GET['id_user'];

		$sql = "DELETE FROM tbl_user WHERE id_user = $id";
		$del = mysqli_query($conn, $sql);
		if ($del) {
			//$_SESSION['noti'] = 2;
			header("Location:chuyenhuong.php?page=qluser");
		}else{
			echo "<script>alert('Xóa thất bại!');</script>";
			header("Location: chuyenhuong.php?page=qluser");
		}
	}

?>
