<!-- <!DOCTYPE html>
<html>
<head>
    <title>Email Verification Application</title>
</head>
<body>

<h2>Email Verification Application</h2>

<form method="post">
    Enter Email: <input type="text" name="email" required>
    <input type="submit" name="check" value="Verify Email">
</form>

#<?php
#if (isset($_POST['check'])) {
 #   $email = $_POST['email'];

    // Check if email is valid
  #  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   #     echo "<p><b>$email</b> is a <span style='color:green;'>valid</span> email address.</p>";
    #} else {
     #   echo "<p><b>$email</b> is <span style='color:red;'>not valid</span>. Please try again.</p>";
    #}
#}
#?>


</body>
</html>





     -->



     <?php
session_start();

// Step 1: Handle Email Submission
if (isset($_POST["send"])) {
    $email = $_POST["email"];

    if (!empty($email)) {
        $code = rand(100000, 999999); // Generate 6-digit random code

        $_SESSION["email"] = $email;
        $_SESSION["code"] = $code;

        echo "<p>Verification code sent (for demo/testing): <strong>$code</strong></p>";
    } else {
        echo "<p style='color:red;'>Please enter a valid email address.</p>";
    }
}

// Step 2: Handle Code Verification
if (isset($_POST["verify"])) {
    $enteredCode = $_POST["code"];
    $sessionCode = $_SESSION["code"] ?? null;

    if ($enteredCode == $sessionCode) {
        echo "<p style='color:green;'>Verification successful!</p>";
        session_unset();
        session_destroy();
    } else {
        echo "<p style='color:red;'>Incorrect code. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
</head>
<body>
    <h2>Email Verification System (Demo)</h2>

    <!-- Form 1: Email Submission -->
    <form action="" method="post">
        <label>Enter Email:</label><br>
        <input type="email" name="email" required><br>
        <button type="submit" name="send">Send Code</button>
    </form>

    <br><br>

    <!-- Form 2: Code Verification -->
    <form action="" method="post">
        <label>Enter Code:</label><br>
        <input type="text" name="code" required><br>
        <button type="submit" name="verify">Verify Code</button>
    </form>
</body>
</html>



<!-- 
Develop email verification application using PHP. -->