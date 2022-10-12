<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Nama</td>
                                            <td>Nomer Anggota</td>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td>Nomer HP</td>
                                            <td>Prodi</td>
                                            <td>Alamat</td>
                                            <td>Jabatan</td>
                                            <td></td>
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM anggota ORDER BY id ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama']; ?></td>
                                        <td><?php echo $row['no_anggota']; ?></td>
                                        <td><?php echo $row['lahir']; ?></td>
                                        <td><?php echo $row['nomer_hp']; ?></td>
                                        <td><?php echo $row['prodi']; ?></td>
                                        <td><?php echo substr($row['alamat'], 0, 20); ?></td>
                                        <td><?php echo $row['jabatan']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>