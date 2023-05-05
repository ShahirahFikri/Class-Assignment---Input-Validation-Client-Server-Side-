<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #f2bd4b;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="/action_page.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required pattern="[a-zA-Z0-9]{4,16}" title="Username must be 4-16 characters long and only contain letters and numbers">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" title="Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number">

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>

</body>
</html>
