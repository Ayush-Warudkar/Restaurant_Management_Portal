<?php
    session_start();
    include_once 'config.php';


    $delete_id = mysqli_real_escape_string($conn, $_POST['menu_id']);
    $delete_query = mysqli_query($conn,"DELETE FROM `menu` WHERE `menu`.`menu_id` = '$delete_id'");

      echo "<script type='text/javascript'>
                alert('ENTRY DELETED SUCCESSFULLY!');
                location.href= '../menulist.php';
            </script>";

?>
