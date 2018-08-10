<?php 
	$konek=mysqli_connect('localhost', 'root', 'mukhlis', 'crud');

	//ambil fariabel yang dikirim dari form
	$id=$_GET['id'];
	$nama=$_GET['nama'];
	$komentar=$_GET['komentar'];

	$update="UPDATE tamu SET nama='$nama', komentar='$komentar'
				WHERE id='$id'";

	$hasil=mysqli_query($konek, $update);

	if ($hasil) {
		header("location:tampil_tamu.php");
	}else{
		echo "Update data gagal";
	}
?>