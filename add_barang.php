<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_barang'];
  $nama = $_POST['nama_barang'];
  $harga = $_POST['harga_barang'];
  $stok = $_POST['stok_barang'];
 
  
	$query = "INSERT INTO DATA_BARANG (ID_BARANG,NAMA_BARANG,HARGA_BARANG,STOK_BARANG) VALUES ('".$id."','".$nama."','".$harga."','".$stok."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Barang berhasil ditambahkan'); 
	window.location.href='data_barang.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data transaksi gagal ditambahkan');
	window.location.href='data_barang.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: data_barang.php'); 
}