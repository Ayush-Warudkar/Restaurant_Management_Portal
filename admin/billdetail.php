<?php
  session_start();
  if(isset($_SESSION['adm'])){
    include_once 'includes/config.php';
    if(isset($_GET['table_id'])){
      $table_id = $_GET['table_id'];
    }
    else{
      header('Location: order.php');
    }
  }
  else {
    header('Location: cred.php');
    exit();
  }
 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="../css/bootstrap-4.5.3/bootstrap-4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-4.5.3/bootstrap-4.5.3/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/main.css">
  <title>RESTAURANT:Menu</title>
  <style>
    th, td {
      padding: 15px;
    }
  </style>
</head>
  <body>
    <div class="desktop">
      <div class="navi" style="padding-top:0px;background-color: rgba(0, 0, 0, 0.5);padding-bottom:10px;">
        <ul style="text-align:right;font-family: Oswald;padding-top:20px;">
        <li>
          <form action="includes/logout.php" method="post" style="display:inline">
            <button type="submit" class="listelement" name="logout" style="text-decoration:none;background-color:transparent;border:none;outline:none;color:#dee0df;"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</button>
          </form>
        </li>
        </ul>
      </div>

    <div class="mainbody">
      <div class="container-fluid">
      <div class="row">
        <div class="col-2" style="height:700px;">
          <p style="text-align:center;color:#dee0df;font-size:20px;padding-bottom:30px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> ADMIN</p>
          <center><a href="index.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-home" aria-hidden="true"></i> Home</button></a></center>
          <center><a href="menuadd.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-plus" aria-hidden="true"></i> Menu Add</button></a></center>
          <center><a href="menulist.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-list-alt" aria-hidden="true"></i> Menu List</button></a></center>
          <center><a href="order.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-cutlery" aria-hidden="true"></i> Orders</button></a></center>
          <center><a href="bill.php"><button type="button" class="mbtn act" style="outline:none;"><i class="fa fa-money" aria-hidden="true"></i> Bill</button></a></center>
        </div>
        <div class="col-10" style="height:700px;background-color:#dee0df;">
          <div class="admdata">
            <h1 class="tablename">Table No.<?php echo $table_id ?></h1>
            <table>
              <tr>
                <th style="width:300px;">Dish Name</th>
                <th style="width:100px;">Qty</th>
                <th style="width:100px;"></th>
                <th style="width:100px;">Rs./plate</th>
                <th style="width:100px;"></th>
                <th style="width:200px;">Total Cost of Item</th>
              </tr>
              <?php
              $order = "SELECT * FROM orders where order_table='$table_id'and order_status='Serve'";
              $result = $conn->query($order);
              $bill = 0;
              if($result->num_rows > 0)
              {
                while($row = $result->fetch_assoc())
                {
                  $bill = $bill + ($row["order_per_cost"] * $row["order_qty"]);
              ?>
              <tr>
                <td><?php echo $row["order_item"]; ?></td>
                <td><?php echo $row["order_qty"]; ?></td>
                <td>x</td>
                <td><?php echo $row["order_per_cost"]; ?></td>
                <td>=</td>
                <td><?php echo $row["order_qty"] * $row["order_per_cost"]; ?></td>
              </tr>
              <?php
                }
              }
              else
              {

              }
              ?>
            </table>
            <hr/>
            <div style="font-weight:bold;padding:10px;">
              <?php
              echo "Grand Total: Rs.".$bill;
               ?>
             </div>

          </div>
          <div class="footer">
              <p style="font-size:30px;color:#fff;margin-top:20px;"><i class="fa fa-facebook-square listelement" aria-hidden="true"></i> <i class="fa fa-twitter-square listelement" aria-hidden="true"></i> <i class="fa fa-instagram listelement" aria-hidden="true"></i></p>
              <p style="font-size:15px;color:#fff;">&copy; 2021 | Food Corner | All rights Reserved. |</p>
          </div>
        </div>
      </div>
      </div>
    </div>

    </div>
  </body>
</html>
