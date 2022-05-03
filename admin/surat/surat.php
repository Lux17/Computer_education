<?php
// membaca data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];


if($jenis == 0){
    $file = "surat.rtf";
}else{
    $file = "undangan.rtf";
};

// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents($file);
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#nama", $nama, $document);
$document = str_replace("#alamat", $alamat, $document);

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=$file");
header("Content-length: ".strlen($document));
echo $document;
?>