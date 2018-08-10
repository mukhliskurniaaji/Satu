 

    <!-- form quick search -->
    <form method="get" action="">
        <input type="text" name="search" placeholder="search"> <input type="submit" value="Search">
    </form>

    <!-- menampilkan hasil pencarian -->
    <?php  
        if (isset($_GET['search'])) {
            $konek=mysqli_connect('localhost', 'root', 'mukhlis', 'crud');

            //ambil variabel
            $search=$_GET['search'];
            $cari="SELECT * FROM tamu WHERE nama like '%$search%' or komentar like '%$search%'";
            $hasil=mysqli_query($konek, $cari);
            if (mysqli_num_rows($hasil)>0) {
            ?>

            <table>
                <tr>
                    <th>Nama</th>
                    <th>Komentar</th>
                </tr>
                <?php while ($tamu=mysqli_fetch_array($hasil)){ ; ?>
                    <tr>
                        <td><?php echo $tamu['nama']; ?></td>
                        <td><?php echo $tamu['komentar'];?></td>
                    </tr>
                <?php }; ?>
            </table>
            <?php
        }else{
            echo 'Data not found!';
        }
    }
    ?>