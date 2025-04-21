<?php
include 'db.php';
session_start();

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
    if (mysqli_num_rows($res) == 1) {
        $_SESSION['user'] = $u;
        header("Location: index.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>
