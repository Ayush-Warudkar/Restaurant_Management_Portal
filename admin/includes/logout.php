<?php
  session_start();


  if (isset($_POST['logout']))
  {
    include_once 'config.php';
    session_unset();
    session_destroy();
  }
  header("location: ../cred.php");
 ?>
