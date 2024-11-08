<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah To-Do</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah To-Do</h1>
    <form action="function_add_todo.php" method="post">
        <label for="pesan">Pesan:</label>
        <input type="text" name="pesan" id="pesan" required>
        
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required>
        
        <label for="keterangan">Keterangan:</label>
        <input type="text" name="keterangan" id="keterangan" required>
        
        <button type="submit">Tambah To-Do</button>
    </form>
</body>
</html>
