<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: loginpage.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform form processing and validation here
    // ...

    // If the form is valid, proceed with further actions
    // ...

    // Redirect to a success page after form processing
    header("Location: success.php");
    exit;
} else {
    // Display an error message if the form is not submitted
    echo "Error: Form not submitted.";
}
?>

