<?php
$username = "admin";
$password = "admin";

if ($_POST['username'] == $username && $_POST['password'] == $password) {
  header("Location: dashboard.php");
  exit();
} else {
  echo "Username or password is incorrect.";
}
?>
