<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_barang'];
  $nama = $_POST['nama_barang'];
  $harga = $_POST['harga_barang'];
  $stok = $_POST['stok_barang'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  DATA_BARANG SET NAMA_BARANG ='".$nama."', HARGA_BARANG ='".$harga."', STOK_BARANG ='".$stok."' WHERE ID_BARANG = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data barang berhasil diubah'); window.location.href='data_barang.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data barang gagal diubah'); window.location.href='data_barang.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: data_barang.php'); 
}