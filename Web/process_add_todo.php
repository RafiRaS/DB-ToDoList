<?php
include "function.php";

if (isset($_POST['pesan'], $_POST['tanggal'], $_POST['keterangan'])) {
    $pesan = $_POST['pesan'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    
    $query = "INSERT INTO tabletodo (Pesan, Tanggal, Keterangan) VALUES ('$pesan', '$tanggal', '$keterangan')";
    if (mysqli_query($mysqli, $query)) {
        header("Location: index.php");
    } else {
        echo "Data gagal ditambahkan" . mysqli_error($mysqli);
    }
} else {
    echo "Data tidak lengkap!";
}
?>
