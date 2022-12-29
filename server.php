<?php
$username="efimeida_10042";
$password="efimeida_10042";
$database="LOCALHOST/XE";

$koneksi = oci_connect($username,$password,$database);

$kursor = ocicommit($koneksi);
?>