<?php 
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");      
    // membuat nama file ekspor "data-anggota.xls"
    header("Content-Disposition: attachment; filename=data-inventaris.xls");    
    // data source
    include 'data_inv.php';
?>