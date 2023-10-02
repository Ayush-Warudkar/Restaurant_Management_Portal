<?php
  session_start();
  if(isset($_SESSION['adm'])){
    include_once 'includes/config.php';
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
          <center><a href="order.php"><button type="button" class="mbtn act" style="outline:none;"><i class="fa fa-cutlery" aria-hidden="true"></i> Orders</button></a></center>
          <center><a href="bill.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-money" aria-hidden="true"></i> Bill</button></a></center>
        </div>
        <div class="col-10" style="height:700px;background-color:#dee0df;">
          <div class="admdata">
            <h1 style="text-align:center;font-family: Oswald;margin-top:10px;"><u>ORDERS</u></h1>
            <table border="1" style="margin-left:auto;margin-right:auto;margin-top:20px;text-align:center;">
              <tr>
                <th style="width:500px;">TABLE NO.</th><th style="width:500px;">DETAILS</th>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>1</td><td><button type="submit" name="table_id" value="1" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>2</td><td><button type="submit" name="table_id" value="2" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>3</td><td><button type="submit" name="table_id" value="3" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>4</td><td><button type="submit" name="table_id" value="4" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>5</td><td><button type="submit" name="table_id" value="5" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>6</td><td><button type="submit" name="table_id" value="6" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>7</td><td><button type="submit" name="table_id" value="7" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>8</td><td><button type="submit" name="table_id" value="8" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>9</td><td><button type="submit" name="table_id" value="9" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
              <tr>
                <form action="orderdetail.php" method="get">
                  <td>10</td><td><button type="submit" name="table_id" value="10" class="mbtn" style="padding:2px;width:100px;margin-top:-5px;margin-bottom:-5px;border-radius:5px;border:none;outline:none;">View</button></td>
                </form>
              </tr>
            </table>
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
