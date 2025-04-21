<!DOCTYPE html>
<html>
<head><title>Array Practical</title></head>
<body>

<h2>Search Employee Name</h2>
<form method="post">
    Enter Name: <input type="text" name="name">
    <input type="submit" name="search" value="Search">
</form>

<?php
$employees = array("Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Hannah",
                   "Ian", "Jane", "Kevin", "Laura", "Mike", "Nina", "Oscar", "Pam",
                   "Quinn", "Rick", "Sara", "Tom");

if (isset($_POST['search'])) {
    $name = $_POST['name'];
    if (in_array($name, $employees)) {
        echo "<p>$name is found in the list.</p>";
    } else {
        echo "<p>$name is not found in the list.</p>";
    }
}
?>

<hr>

<h2>Sort Numbers and Find Sum</h2>
<form method="post">
    Enter Numbers (comma separated): <input type="text" name="numbers">
    <input type="submit" name="sort" value="Process">
</form>

<?php
if (isset($_POST['sort'])) {
    $input = $_POST['numbers'];
    $nums = explode(",", $input);      // Convert string to array
    $nums = array_map('intval', $nums); // Convert to integers
    sort($nums);                        // Sort array
    $sum = array_sum($nums);           // Sum of elements

    echo "<p>Sorted Numbers: " . implode(", ", $nums) . "</p>";
    echo "<p>Sum: $sum</p>";
}
?>

</body>
</html>



<!-- 24. Demonstrate the use of arrays by creating a PHP web page e.g. Create an indexed array of 20 elements (e.g. employee_name) and search whether a given name exists in the array. -->