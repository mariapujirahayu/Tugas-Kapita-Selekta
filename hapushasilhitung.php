<?php
include('koneksi.php');
$sql = "DELETE FROM data_hasil WHERE tanggal='$_GET[tanggal]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location='hasil.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>