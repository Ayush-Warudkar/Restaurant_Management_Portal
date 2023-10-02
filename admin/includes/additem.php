<?php
    session_start();
    include_once 'config.php';

    $menutype = $_POST['menu'];
    $nameD = $_POST['Name_of_Dish'];
    $costD = $_POST['Cost_of_Dish'];

    $sql = "INSERT INTO menu (dish_name,dish_cost,dish_type) VALUES ('$nameD', '$costD', '$menutype')";
    if ($conn->query($sql) === TRUE) {
      echo "<script type = 'text/javascript'>alert('New Menu Added..!'); location.href = '../menuadd.php';</script>";
    } else {
      echo "<script type = 'text/javascript'>alert('Failed!'); location.href = '../menuadd.php';</script>";
    }
?>
