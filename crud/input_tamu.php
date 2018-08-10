<?php  
	//konek database
	$konek=mysqli_connect('localhost', 'root', 'mukhlis', 'crud');

	//ambil variabel dari form_tamu
	$nama=$_GET['nama'];
	$komentar=$_GET['komentar'];

	$input="INSERT INTO tamu(nama,komentar)
			VALUES('$nama','$komentar')";
	$hasil=mysqli_query($konek, $input);

	//apabila berhasil menginput
	if ($hasil) {
		header("location:tampil_tamu.php");
	}else{
		echo "Input data gagal.";
	}
?>