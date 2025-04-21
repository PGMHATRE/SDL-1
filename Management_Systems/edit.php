<?php include 'db.php'; include 'session.php'; ?>

<?php
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM complaints WHERE id=$id");
$data = mysqli_fetch_assoc($res);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $complaint = $_POST['complaint'];

    mysqli_query($conn, "UPDATE complaints SET name='$name', email='$email', complaint='$complaint' WHERE id=$id");
    header("Location: view.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $data['name'] ?>"><br><br>
    Email: <input type="text" name="email" value="<?= $data['email'] ?>"><br><br>
    Complaint: <textarea name="complaint"><?= $data['complaint'] ?></textarea><br><br>
    <input type="submit" name="update" value="Update">
</form>
