<?php
  session_start();
  include_once 'config.php';

  if (isset($_SESSION['error']))
  {
    unset($_SESSION['error']);
  }

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = mysqli_query($conn, "SELECT * FROM credits WHERE username = '$username' AND password = '$password'");


  if (mysqli_num_rows($sql) > 0)
  {
    $_SESSION["adm"] = "$username";
    echo "<script type = 'text/javascript'> location.href = '../index.php';</script>";
  }
  else
  {
    $_SESSION['error'] = "USERNAME OR PASSWORD INCORRECT!";
    echo "<script type = 'text/javascript'>location.href = '../cred.php';</script>";
  }
?>
