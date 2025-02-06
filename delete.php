<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM flowers WHERE id = $id";

if ($conn->query($sql)) {
    header("Location: main.php");
} else {
    echo "Error: " . $conn->error;
}
?>
