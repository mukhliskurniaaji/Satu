<h3>Edit Buku Tamu</h3>

<?php 
	$konek=mysqli_connect('localhost', 'root', 'mukhlis', 'crud');

	//ambil id dari hasil klik edit di tampil_tamu
	$id=$_GET['id'];

	$edit="SELECT * FROM tamu WHERE id=$id";
	$hasils=mysqli_query($konek, $edit);
	$hasil=mysqli_fetch_array($hasils);
?>

	<form method="GET" action="update.php">
		<input type="hidden" name="id" value="<?php echo "$id" ?>">
		Nama : <input type="text" name="nama" value="<?php echo "$hasil[nama]" ?>"><br>
		Komentar : <textarea name="komentar"><?php echo "$hasil[komentar]"; ?></textarea><br>
		<input type="submit" value="Update">
	</form>