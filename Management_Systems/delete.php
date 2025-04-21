<?php include 'db.php'; include 'session.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM complaints WHERE id=$id");
header("Location: view.php");
?>
