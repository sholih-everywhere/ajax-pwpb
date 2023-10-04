<?php
include "config/config.php";

if (isset($_GET["id"])) {
    $nilai = $_GET["id"];
    $hasil = delete($nilai);

    if ($hasil) {
        header("Location: index.php");
        exit(); // It's a good practice to exit after a header redirect
    } else {
        echo "Hapus Siswa Gagal";
    }
} else {
    echo "Invalid or missing ID parameter";
}
?>
