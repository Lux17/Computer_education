<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                        <td>Bulan</td>
                        <td>Tahun</td>
                        <td>Keterangan</td>
                        <td>Jumlah</td>
                        <td>Jenis</td>
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM kas WHERE jenis='pemasukan' ");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['bulan']; ?></td>
                                        <td><?php echo $row['tahun']; ?></td>
                                        <td><?php echo $row['keterangan']; ?></td>
                                        <td>Rp <?php echo $row['jumlah_kas']; ?></td>
                                        <td><?php echo $row['jenis']; ?></td>
    </tr>
    <?php
        }
    ?>

<?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM kas WHERE jenis='pengeluaran' ");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['bulan']; ?></td>
                                        <td><?php echo $row['tahun']; ?></td>
                                        <td><?php echo $row['keterangan']; ?></td>
                                        <td>Rp <?php echo $row['jumlah_kas']; ?></td>
                                        <td><?php echo $row['jenis']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>