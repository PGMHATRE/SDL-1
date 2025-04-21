<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head><title>Complaint Form</title></head>
<body>

<h2>Complaint Submission</h2>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Complaint: <textarea name="complaint"></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="button" value="Go to View Page" onclick="window.location.href='view.php'">

</form>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $c = $_POST['complaint'];

    $q = "INSERT INTO complaints (name, email, complaint) VALUES ('$n', '$e', '$c')";
    mysqli_query($conn, $q);

    echo "<p style='color:green;'>Complaint Submitted Successfully!</p>";
}
?>

</body>
</html>
