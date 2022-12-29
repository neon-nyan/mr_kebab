<?php
require_once 'koneksi.php';
// cek id
if (isset($_GET['id'])) {
  $ID = $_GET['id'];
	$sql = "delete from DATA_BARANG WHERE ID_BARANG='$ID' ";
	$parsesql = oci_parse($conn, $sql);
	$q = oci_execute($parsesql) or die(oci_error());
	
  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data barang berhasil dihapus'); window.location.href='data_barang.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data barang gagal dihapus'); window.location.href='data_barang.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:data_barang.php');
}