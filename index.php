<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Details Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Student Details Form</h1>
  <form method="post" action="index.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="matricnumber">Matric No:</label>
    <input type="text" name="matricnumber" id="matricnumber" required>
    <br>
    <label for="address">Address:</label>
    <textarea name="address" id="address" required></textarea>
    <br>
    <label for="homeaddress">Home Address:</label>
    <textarea name="homeaddress" id="homeaddress" required></textarea>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="mobilephone">Mobile Phone:</label>
    <input type="tel" name="mobilephone" id="mobilephone" required>
    <br>
    <label for="homephone">Home Phone:</label>
    <input type="tel" name="homephone" id="homephone" required>
    <br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $matricNo = $_POST["matricnumber"];
    $address = $_POST["address"];
    $homeAddress = $_POST["homeaddress"];
    $email = $_POST["email"];
    $mobilePhone = $_POST["mobilephone"];
    $homePhone = $_POST["homephone"];

    // Validate the form data
    $nameRegex = "/^[a-zA-Z\s]+$/";
    $matricNoRegex = "/^\d{7}$/";
    $emailRegex = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";
    $mobilePhoneRegex = "/^\d{10}$/";
    $homePhoneRegex = "/^\d{10}$/";

    if (!preg_match($nameRegex, $name)) {
      $errors[] = "Invalid name. Only letters and spaces are allowed.";
      echo "Invalid name. Only letters and spaces are allowed"; 
    }
  }
  ?>
</body>
</html>
