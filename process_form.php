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
   
  echo $name . "<br>";
  echo $matricNo . "<br>";
  echo $address . "<br>";
  echo $homeAddress . "<br>";
  echo $email . "<br>";
  echo $mobilePhone . "<br>";
  echo $homePhone . "<br>";

  if (!preg_match($nameRegex, $name)) {
    $errors[] = "Invalid name. Only letters and spaces are allowed.";
    echo "Invalid name. Only letters and spaces are allowed.";
    header("Location: studentdetails.html");
    exit;
  }

  if (!preg_match($matricNoRegex, $matricNo)) {
    $errors[] = "Invalid Matric No. Please enter exactly 7 digits.";
    echo "Invalid Matric No. Please enter exactly 7 digits.";
    header("Location: studentdetails.html");
    exit;
  }

  if (!preg_match($emailRegex, $email)) {
    $errors[] = "Invalid email address.";
    echo "Invalid email address.";
    header("Location: studentdetails.html");
    exit;
  }

  if (!preg_match($mobilePhoneRegex, $mobilePhone)) {
    $errors[] = "Invalid mobile phone number. Please enter exactly 10 digits.";
    echo "Invalid mobile phone number. Please enter exactly 10 digits.";
    header("Location: studentdetails.html");
    exit;
  }

  if (!preg_match($homePhoneRegex, $homePhone)) {
    $errors[] = "Invalid home phone number. Please enter exactly 10 digits.";
    echo "Invalid home phone number. Please enter exactly 10 digits.";
    header("Location: studentdetails.html");
    exit;
  }
}
?>
