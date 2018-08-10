<h3>Daftar Hadir</h3>

<p><a href="form_tamu.php">Input Tamu</a></p>

<?php  
	$konek=mysqli_connect('localhost', 'root', 'mukhlis', 'crud');
	$tampil="SELECT * FROM tamu ORDER BY id";
	$hasils=mysqli_query($konek, $tampil);
	$total=mysqli_num_rows($hasils);
?>

	<table>
		<tr>
			<th>Nama</th>
			<th>Komentar</th>
			<th>Aksi</th>
		</tr>
		<?php while($hasil=mysqli_fetch_array($hasils)) { ?>
		<tr>
			<td><?php echo "$hasil[nama]"; ?></td>
			<td><?php echo "$hasil[komentar]"; ?></td>
			<td><?php echo "<a href='edit.php?id=$hasil[id]'>Edit</a> | <a href='hapus.php?id=$hasil[id]'>Hapus</a>"; ?></td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<?php echo "Humlah tamu ada $total orang"; ?>