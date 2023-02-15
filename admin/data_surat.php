<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                        <td >Nomer Surat</td>
                        <td >Perihal</td>
                        <td >Kepada</td>
                        <td >Tujuan</td>
                        <td >Jenis</th>
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM surat where jenis='Surat Masuk'");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['no_surat']; ?></td>
                                        <td><?php echo $row['perihal']; ?></td>
                                        <td><?php echo $row['kepada']; ?></td>
                                        <td><?php echo $row['tujuan']; ?></td>
                                        <td><?php echo $row['jenis']; ?></td>
    </tr>
    <?php
        }
    ?>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM surat where jenis='Surat Keluar'");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['no_surat']; ?></td>
                                        <td><?php echo $row['perihal']; ?></td>
                                        <td><?php echo $row['kepada']; ?></td>
                                        <td><?php echo $row['tujuan']; ?></td>
                                        <td><?php echo $row['jenis']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>