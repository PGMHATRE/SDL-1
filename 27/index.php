<!DOCTYPE html>
<html>
<head>
    <title>Library Catalogue</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #777;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            width: 250px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2>Add a New Book</h2>
<form method="POST">
    Title: <br><input type="text" name="title" required><br>
    Author: <br><input type="text" name="author" required><br>
    Genre: <br><input type="text" name="genre" required><br>
    Year: <br><input type="number" name="year" required><br>
    <input type="submit" name="add" value="Add Book">
</form>

<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "library");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add book to database
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];

    $sql = "INSERT INTO books (title, author, genre, year)
            VALUES ('$title', '$author', '$genre', '$year')";

    if ($conn->query($sql)) {
        echo "<p style='color:green;'>Book added successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

// Show book catalogue
$result = $conn->query("SELECT * FROM books");

if ($result->num_rows > 0) {
    echo "<h2>Book Catalogue</h2>";
    echo "<table>
            <tr><th>ID</th><th>Title</th><th>Author</th><th>Genre</th><th>Year</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row["id"]}</td>
                <td>{$row["title"]}</td>
                <td>{$row["author"]}</td>
                <td>{$row["genre"]}</td>
                <td>{$row["year"]}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No books found.</p>";
}

$conn->close();
?>

</body>
</html>
