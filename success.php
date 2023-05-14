<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: loginpage.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>
    <h1>Form Submitted Successfully</h1>
    <p>Thank you for submitting the form. Your data has been processed successfully.</p>
</body>
</html>
