<?php
if(isset($_POST['nama']))
{
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notp = $_POST['notp'];
    $jm = $_POST['jm'];
    echo "Nama Restora : ".$nama."<br/>";
    echo "Alamat : ".$alamat."<br/>";
    echo "Nama Pemilik : ".$notp."<br/>";
    echo "Jenis Makanan : ".$jm."<br/>";
}
?>