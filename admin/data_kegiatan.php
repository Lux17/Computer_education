<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Nama Kegiatan</td>
                                            <td>Hari/Tanggal</td>
                                            <td>Waktu</td>
                                            <td>Tempat Pelaksanaan</td>
                                            <td>Keterangan</td>
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM kegiatan ORDER BY tanggal ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_kegiatan']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['waktu']; ?></td>
                                        <td><?php echo $row['tempat']; ?></td>
                                        <td><?php echo $row['keterangan']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>