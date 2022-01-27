
<?php
/**
* Inisialisasi variabel
*/
$nim = isset($_POST["txtNIM"]) ? $_POST["txtNIM"] : "";
$nama = isset ($_POST["textNAMA"]) ? $_POST ["textNAMA"] : "";
$prodi = isset ($_POST["textPRODI"]) ? $_POST ["textPRODI"] : "";

/**
* Menangkap variabel dan data serta menampilkan ke layar
*/
if ($nama)
{
echo "Hai, perkenalkan nama saya : ".$nama;
}

if ($nim)
{
echo "
dengan NIM ".$nim ;
}

if ($prodi)
{
echo " Saya adalah seorang
mahasiswa dari program studi ".$prodi;
}
?>