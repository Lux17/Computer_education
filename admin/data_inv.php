<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Nama Data</td>
                                            <td>Terarsip</td>
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM inventaris ORDER BY id_inventaris ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_data']; ?></td>
                                        <td>OK</td>
    </tr>
    <?php
        }
    ?>
</table>