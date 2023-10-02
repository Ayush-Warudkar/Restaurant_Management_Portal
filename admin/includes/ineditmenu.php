<?php
    session_start();
    include_once 'config.php';

    $menu = mysqli_real_escape_string($conn, $_POST['menu']);
    $Ndish = mysqli_real_escape_string($conn, $_POST['Name_of_Dish']);
    $Cdish = mysqli_real_escape_string($conn, $_POST['Cost_of_Dish']);
    $menu_id = mysqli_real_escape_string($conn, $_POST['menu_id']);

    $EditQuery = mysqli_query($conn, "UPDATE menu SET dish_type='$menu', dish_name='$Ndish', dish_cost='$Cdish'  WHERE menu_id ='$menu_id'");

      echo "<script>alert('Menu Edited Successfully!');location.href= '../menulist.php';</script>";
?>
