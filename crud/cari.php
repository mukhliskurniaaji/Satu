   

   <!-- form quick search -->
    <form name="form1" method="get" action="">
        Search : <input type="text" name="q" id="q"/> <input type="submit" value="Search"/>
    </form>

    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysqli_connect('localhost', 'root', 'mukhlis', 'crud');
    	$q = $_GET['q'];
    	$sql = "SELECT * FROM tamu WHERE nama like '%$q%' or komentar like '%$q%' ";
    	$result = mysqli_query($conn, $sql);
    	if(mysqli_num_rows($result) > 0){
    		?>
    		<table>
    			<tr>
    				<th>Nama</th>
    				<th>Komentar</th>
    			</tr>
    			<?php
    			while($tamu = mysqli_fetch_array($result)){?>
    			<tr>
    				<td><?php echo $tamu['nama'];?></td>
    				<td><?php echo $tamu['komentar'];?></td>
    			</tr>
    			<?php }?>
    		</table>
    		<?php
    	}else{
    		echo 'Data not found!';
    	}
    }
    ?>