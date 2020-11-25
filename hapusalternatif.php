<?php
include('koneksi.php');
$sql = "DELETE FROM data_alternatif WHERE id_alternatif='$_GET[id]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location='alternatif.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>