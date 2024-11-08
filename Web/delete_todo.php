<?php
include "function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tabletodo WHERE id='$id'";
    
    if (mysqli_query($mysqli, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>
