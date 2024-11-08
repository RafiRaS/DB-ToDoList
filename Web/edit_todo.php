<?php
include "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM tabletodo WHERE id='$id'");
    $row = mysqli_fetch_array($result);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pesan = $_POST['pesan'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE tabletodo SET Pesan='$pesan', Tanggal='$tanggal', Keterangan='$keterangan' WHERE id='$id'";
    if (mysqli_query($mysqli, $query)) {
        header("Location: index.php"); 
    } else {
        echo "Data gagal diedit " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit To-Do</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit To-Do</h1>
    <form action="edit_todo.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="pesan">Pesan:</label>
        <input type="text" name="pesan" id="pesan" value="<?php echo $row['Pesan']; ?>" required>
        
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="<?php echo $row['Tanggal']; ?>" required>
        
        <label for="keterangan">Keterangan:</label>
        <input type="text" name="keterangan" id="keterangan" value="<?php echo $row['Keterangan']; ?>" required>
        
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
