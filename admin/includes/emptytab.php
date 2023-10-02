<?php
    session_start();
    include_once 'config.php';

    $delete_id = mysqli_real_escape_string($conn, $_POST['table_id']);
    $delete_query = mysqli_query($conn,"DELETE FROM `orders` WHERE order_table='$delete_id'");

      echo "<script type='text/javascript'>
                alert('Empty Table!');
                location.href= '../bill.php';
            </script>";

?>
