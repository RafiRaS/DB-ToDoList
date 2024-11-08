<?php
include "function.php";
$hasil = mysqli_query($mysqli, "SELECT * FROM tabletodo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-Do-List</h1>
    <h2>Muhammad Rafi Raihan Sonjaya <br> L0124065 <br>Kelas B</h2>

    <a href="add_todo.php" class="button">Tambah To-Do</a>
    
    <table>
        <tr>
            <th>No</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_array($hasil)) {
            echo "<tr>
            <td>$no</td>
            <td>{$row['Pesan']}</td>
            <td>{$row['Tanggal']}</td>
            <td>{$row['Keterangan']}</td>
            <td>
                <a href='edit_todo.php?id={$row['id']}' class='button'>Edit</a>
                <a href='delete_todo.php?id={$row['id']}' class='button' onclick='return confirm(\"Yakin Mau Hapus?\")'>Hapus</a>
            </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
