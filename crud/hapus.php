<?php 
	$konek=mysqli_connect('localhost', 'root', 'mukhlis', 'crud');

	//ambil fariabel yang dikirim dari form
	$id=$_GET['id'];

	$hapus="DELETE FROM tamu WHERE id=$id";
	$hasil=mysqli_query($konek, $hapus);

	if ($hasil) {
		header("location:tampil_tamu.php");
	}else{
		echo "Delete data gagal";
	}
?>
?>