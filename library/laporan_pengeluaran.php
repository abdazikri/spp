<?php
$action=$_GET['action'];
$date=$_POST['date'];
if($action=='tahun'){
    header("location:../index.php?page=laporan_pengeluaran_tahunan&tahun=$date");
}
elseif($action=='bulan'){
    header("location:../index.php?page=laporan_pengeluaran_bulanan&bulan_tahun=$date");
}
elseif($action=='hari'){
    header("location:../index.php?page=laporan_pengeluaran_harian&tanggal=$date");
}
?>