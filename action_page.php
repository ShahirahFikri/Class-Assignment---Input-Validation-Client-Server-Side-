<?php
$host = "localhost"; 
$username = "root";
$password = "";
$database = "assignment";

// Start a PHP session
session_start();

// Connect to MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $input_name = $_POST["name"];
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Sanitize the input values
    $sanitized_name = mysqli_real_escape_string($conn, $input_name);
    $sanitized_username = mysqli_real_escape_string($conn, $input_username);

    // Prepare the password as a hashed value
    $hashed_password = password_hash($input_password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO assignment (name, username, password) VALUES ('$sanitized_name', '$sanitized_username', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        // Redirect the user to the protected page
        header("Location: loginpage.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

