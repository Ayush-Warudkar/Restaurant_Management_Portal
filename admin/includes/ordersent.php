<?php
    session_start();
    include_once 'config.php';
    $table = $_SESSION["table"];

    if(isset($_POST['cartArray']))
    {

      $ord = $_POST['cartArray'];
      $count = 0;

      if (is_array($ord))
      {
        for ($i=0;$i<count($ord);$i++)
        {
          $str[] = implode(',', $ord[$i]);
          $count = $count + 1;
        }

        for ($i=0;$i<$count;$i++)
        {
          $perorder[$i] = strval($str[$i]);
        }

        for ($i=0;$i<$count;$i++)
        {
            $abc = explode(",",$perorder[$i]);
            $name = $abc[0];
            $percost = $abc[1];
            $qty = $abc[2];
            $totaldishcost = $abc[3];

            $sql = "INSERT INTO orders (order_item, order_qty, order_per_cost, order_table) VALUES ('$name', '$qty', '$percost', '$table')";
            if ($conn->query($sql) === TRUE)
            {
              echo "<script type = 'text/javascript'>location.href = '../../index.php?table=$table';</script>";
              // $_SESSION["table"] = "";
            }
            else
            {
              echo "<script type = 'text/javascript'>location.href = '../../index.php?table=$table';</script>";
            }
        }
      }
    }
    else{
      echo "no";
    }

?>
