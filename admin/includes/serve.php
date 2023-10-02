<?php
    session_start();
    include_once 'config.php';

    $id = mysqli_real_escape_string($conn, $_POST['order_id']);
    $table_id = mysqli_real_escape_string($conn, $_POST['tableno']);

    $EditQuery = mysqli_query($conn, "UPDATE orders SET order_status='Serve' WHERE order_id ='$id'");

      echo "<script>alert('Served Successfully!');location.href= '../orderdetail.php?table_id=$table_id';</script>";
?>
