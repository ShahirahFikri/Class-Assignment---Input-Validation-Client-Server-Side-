<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check CSRF token
  if (!isset($_POST["csrf_token"]) || $_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
    die("Invalid CSRF token");
  }

  // Get the form data
  $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
  $matricNo = htmlspecialchars($_POST["matricnumber"], ENT_QUOTES, 'UTF-8');
  $address = htmlspecialchars($_POST["address"], ENT_QUOTES, 'UTF-8');
  $homeAddress = htmlspecialchars($_POST["homeaddress"], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
  $mobilePhone = htmlspecialchars($_POST["mobilephone"], ENT_QUOTES, 'UTF-8');
  $homePhone = htmlspecialchars($_POST["homephone"], ENT_QUOTES, 'UTF-8');

  // Validate the form data
  $nameRegex = "/^[a-zA-Z\s]+$/";
  $matricNoRegex = "/^\d{7}$/";
  $emailRegex = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";
  $mobilePhoneRegex = "/^\d{10}$/";
  $homePhoneRegex = "/^\d{10}$/";

  if (!preg_match($nameRegex, $name)) {
    $errors[] = "Invalid name. Only letters and spaces are allowed.";
    // Handle the error...
  }

  if (!preg_match($matricNoRegex, $matricNo)) {
    $errors[] = "Invalid Matric No. Please enter exactly 7 digits.";
    // Handle the error...
  }

  if (!preg_match($emailRegex, $email)) {
    $errors[] = "Invalid email address.";
    // Handle the error...
  }

  if (!preg_match($mobilePhoneRegex, $mobilePhone)) {
    $errors[] = "Invalid mobile phone number. Please enter exactly 10 digits.";
    // Handle the error...
  }

  if (!preg_match($homePhoneRegex, $homePhone)) {
    $errors[] = "Invalid home phone number. Please enter exactly 10 digits.";
    // Handle the error...
  }

  // Process the validated form data
  // ...
}

// Generate and store CSRF token
$csrfToken = bin2hex(random_bytes(32));
$_SESSION["csrf_token"] = $csrfToken;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Details</title>
</head>
<style>
/* CSS styles... */
</style>
<body>
  <h2>A. Student Details</h2>
  <div class="container">
    <form action="process_form.php" method="post" id="myForm">
      <!-- CSRF token field -->
      <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">

      <div class="row">
        <div class="col-25">
          <label for="name">Name (Legal/Official):</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="matricnumber">Matric No:</label>
        </div>
        <div class="col-75">
          <input type="text" id="matricnumber" name="matricnumber" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="address">Current Address:</label>
        </div>
        <div class="col-75">
          <textarea id="address" name="address" style="height:200px" required></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="homeaddress">Home Address:</label>
        </div>
        <div class="col-75">
          <textarea id="homeaddress" name="homeaddress" style="height:200px" required></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="email">Email (Gmail Account):</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="mobilephone">Mobile Phone No:</label>
        </div>
        <div class="col-75">
          <input type="tel" id="mobilephone" name="mobilephone" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="homephone">Home Phone No (Emergency):</label>
        </div>
        <div class="col-75">
          <input type="tel" id="homephone" name="homephone" required>
        </div>
      </div>

      <br>

      <div class="row">
        <input type="submit" value="Submit" onclick="validateForm()">
      </div>
    </form>
  </div>

  <script>
    // JavaScript code...

    function validateForm() {
      // Validate the form fields
      // ...
    }
  </script>
</body>
</html>
