<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
  <h1>Admin Login</h1>
  <?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the data
    if (empty($username) || empty($password)) {
      echo "Please fill in all fields.";
    } else {
      // Check if the username and password are correct
      if ($username == 'admin' && $password == 'admin') {
        // Set the session variable
        $_SESSION['admin'] = true;

        // Redirect to the admin dashboard page
        header("Location: admin_dashboard.php");
        exit();
      } else {
        echo "Invalid username or password.";
      }
    }
  }
  ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
