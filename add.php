<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_transaksi'];
  $nama = $_POST['nama_pembeli'];
  $alamat = $_POST['alamat'];
  $notelp = $_POST['no_telp'];
  $barang = $_POST['id_barang'];
  $qty = $_POST['qty'];
  
	$query = "INSERT INTO TRANSAKSI (ID_TRANSAKSI,NAMA_PEMBELI,ALAMAT,NO_TELP,ID_BARANG,QTY) VALUES ('".$id."','".$nama."','".$alamat."','".$notelp."','".$barang."','".$qty."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data transaksi berhasil ditambahkan'); 
	window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data transaksi gagal ditambahkan');
	window.location.href='transaksi.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}