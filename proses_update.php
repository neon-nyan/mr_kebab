<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_transaksi'];
  $nama = $_POST['nama_pembeli'];
  $alamat = $_POST['alamat'];
  $notelp = $_POST['no_telp'];
  $barang = $_POST['id_barang'];
  $qty = $_POST['qty'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  TRANSAKSI  SET NAMA_PEMBELI ='".$nama."', ALAMAT ='".$alamat."', NO_TELP ='".$notelp."', ID_BARANG ='".$barang."', QTY ='".$qty."' WHERE ID_TRANSAKSI = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	$res = oci_commit($conn);
	if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data transaksi berhasil diubah'); window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data transaksi gagal diubah'); window.location.href='transaksi.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}