<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'sahmin@34' && $password == 'sahmeranhack@store6767') {
    header('Location: dashboard.php');
    exit;
  } else {
    $error = 'Invalid username or password!';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
    }
    
    form {
      margin: 0 auto;
      max-width: 400px;
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      border: none;
      padding: 5px;
      margin-bottom: 10px;
      width: 100%;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: white;
      color: black;
      padding: 10px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }

    input[type="submit"]:hover {
      background-color: #f2f2f2;
    }

    #name {
      margin-top: 20px;
      font-size: 18px;
      text-align: left;
      margin-left: 20px;
    }

    p {
      font-size: 16px;
      color: red;
    }
  </style>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Log In">
  </form>

  <div id="name" style="float:left;">ERROR PAGE SOURCE CODE DIV ./{  LOGIN:  sahmin@34 PASS:  sahmeranhack@store6767  }</div>

  <?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
  <?php } ?>
</body>
</html>
