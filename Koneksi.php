<?php 
 
//membangun koneksi
$username="efimeida_10042";
$password="efimeida_10042";
$database="LOCALHOST/XE";

$conn=oci_connect($username,$password,$database);

if(!$conn){
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	echo "koneksi berhasil";
}


?>