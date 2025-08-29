<?php
$result = "";

if (isset($_POST["username"])) {
  $name = trim($_POST["username"]); // Extra space remove

  if (empty($name)) {
    $result = "<span style='color:red;'>Username is required!</span>";
  } elseif (strlen($name) < 4 || strlen($name) > 8) {
    $result = "<span style='color:red;'>Username must be between 4 to 8 characters.</span>";
  } elseif (strpos($name, "@") === false) {
    $result = "<span style='color:red;'>Username must include '@' sign.</span>";
  } else {
    $safeName = htmlspecialchars($name); // XSS protection
    $result = "<span style='color:green;'>Welcome, $safeName! Login successful ✅</span>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question_01</title>
</head>
<body>
  <h2>Login/Register</h2>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <input type="submit" value="Submit">
  </form>

  <p><?php echo $result; ?></p>
</body>
</html>