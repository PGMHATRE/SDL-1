<?php include 'db.php'; include 'session.php'; ?>

<a href="logout.php">Logout</a><br><br>

<form method="GET">
    <input type="text" name="search" placeholder="Search by name/email">
    <input type="submit" value="Search">
</form>

<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
</tr>

<?php
if (isset($_GET['search'])) {
    $term = $_GET['search'];
    $q = "SELECT * FROM complaints WHERE name LIKE '%$term%' OR email LIKE '%$term%'";
} else {
    $q = "SELECT * FROM complaints";
}

$res = mysqli_query($conn, $q);
while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr>
        <td>{$r['id']}</td>
        <td>{$r['name']}</td>
        <td>{$r['email']}</td>
        <td>
            <a href='edit.php?id={$r['id']}'>Edit</a> |
            <a href='delete.php?id={$r['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>
