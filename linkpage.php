<?php
function verifyCredentials($username, $password) {
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "assignment");

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize the input
    $username = mysqli_real_escape_string($conn, $username);

    // Query the database to fetch the hashed password for the given username
    $query = "SELECT password FROM users WHERE username=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if a row is returned
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        if (password_verify($password, $hashed_password)) {
            // Valid credentials
            return true;
        }
    }

    // Invalid credentials or other error
    return false;

    // Close the database connection
    mysqli_close($conn);
}
?>


