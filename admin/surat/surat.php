<?php
// membaca data dari form
// $nomer = $_POST['nomer'];
$number = $_POST['number'];
$lampiran = $_POST['lampiran'];
$perihal = $_POST['perihal'];
$jabatan = $_POST['jabatan'];
$nama = $_POST['nama'];
$acara = $_POST['acara'];
$tgl = $_POST['tgl'];
$pukul = $_POST['pukul'];
$tempat = $_POST['tempat'];
$ketuplak = $_POST['ketuplak'];
$noceketu = $_POST['noceketu'];
$sekertaris= $_POST['sekertaris'];
$nocesek = $_POST['nocesek'];
$ketum = $_POST['ketum'];
$nocetum = $_POST['nocetum'];
$titimangsa = $_POST['titimangsa'];
$jenis = $_POST['jenis'];


if($jenis == 0){
    $file = "Surat Pemberitahuan Acara.rtf";
}elseif($jenis == 1){
    $file = "Surat Permohonan.rtf";
}
elseif($jenis == 2){
    $file = "Surat Peminjaman.rtf";
}
elseif($jenis == 3){
    $file = "Surat Undangan.rtf";
}
else{
    $file = "Surat Dana Sponsor.rtf"; 
};

// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents($file);
// isi dokumen dinyatakan dalam bentuk string
// $document = str_replace("#nomer", $nomer, $document);
$document = str_replace("#number", $number, $document);
$document = str_replace("#pukul", $pukul, $document);
$document = str_replace("#lampiran", $lampiran, $document);
$document = str_replace("#perihal", $perihal, $document);
$document = str_replace("#jabatan", $jabatan, $document);
$document = str_replace("#nama", $nama, $document);
$document = str_replace("#acara", $acara, $document);
$document = str_replace("#tgl", $tgl, $document);
$document = str_replace("#tempat", $tempat, $document);
$document = str_replace("#titimangsa", $titimangsa, $document);
$document = str_replace("#ketuplak", $ketuplak, $document);
$document = str_replace("#noceketu", $noceketu, $document);
$document = str_replace("#sekertaris", $sekertaris, $document);
$document = str_replace("#nocesek", $nocesek, $document);
$document = str_replace("#ketum", $ketum, $document);
$document = str_replace("#nocetum", $nocetum, $document);

// header untuk membuka file output RTF dengan MS. Word
// $doc = str_replace(".rtf",".docx", $file); 
header("Content-type: application/msword");
header("Content-disposition: inline; filename=$file");
header("Content-length: ".strlen($document));
echo $document;
?>