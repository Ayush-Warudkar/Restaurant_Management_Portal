<?php
  session_start();
  if(isset($_SESSION['adm'])){
   include_once 'includes/config.php';
   $id = $_GET['edit'];

  }
  else {
    header('Location: menulist.php');
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
          <center><a href="menulist.php"><button type="button" class="mbtn act" style="outline:none;"><i class="fa fa-list-alt" aria-hidden="true"></i> Menu List</button></a></center>
          <center><a href="order.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-cutlery" aria-hidden="true"></i> Orders</button></a></center>
          <center><a href="bill.php"><button type="button" class="mbtn" style="outline:none;"><i class="fa fa-money" aria-hidden="true"></i> Bill</button></a></center>

        </div>
        <div class="col-10" style="height:700px;background-color:#dee0df;">
          <div class="admdata">

            <?php
            $menu_detail = "SELECT * FROM menu WHERE menu_id='$id'";
            $result = $conn->query($menu_detail);

            if($result->num_rows > 0)
            {
             while($row = $result->fetch_assoc())
              {
            ?>

            <div style="border:1px solid #000;padding-bottom:50px;margin-top:100px;">
            <table style="margin-right:auto;margin-left:auto;">
            <form action="includes/ineditmenu.php" method="post" style="border:1px solid #000;height:300px;padding:20px;margin-top:50px;">
              <tr>
              <td><label for="Type">Choose Type of Menu:</label></td>
              <td><select id="menu" name="menu" style="border:none;outline:none;">
                <option value="" disabled selected >Choose Option</option>
                <option value="V" <?php if($row["dish_type"]=="V") echo 'selected="selected"'; ?>  >Vegetarians</option>
                <option value="N" <?php if($row["dish_type"]=="N") echo 'selected="selected"'; ?>  >Non-Vegetarians</option>
                <option value="S" <?php if($row["dish_type"]=="S") echo 'selected="selected"'; ?>  >Soft Drinks</option>
                <option value="B" <?php if($row["dish_type"]=="B") echo 'selected="selected"'; ?>  >Beverages</option>
                <option value="D" <?php if($row["dish_type"]=="D") echo 'selected="selected"'; ?>  >Desserts</option>
              </select></td>
             </tr><br/>
             <tr>
              <td><label for="Dish">Name of Dish:</label></td>
              <td><input type="text" name="Name_of_Dish" value="<?php echo $row["dish_name"]; ?>" placeholder="Enter Name of Dish" style="outline:none;border:none;"></td><br/>
             </tr>
             <tr>
              <td><label for="Cost">Cost of Dish:</label></td>
              <td><input type="number" name="Cost_of_Dish" value="<?php echo $row["dish_cost"]; ?>" placeholder="Enter Cost of Dish" style="outline:none;border:none;"></td><br/>
             </tr>
              <tr>
                <td></td>
                <input type="hidden" name="menu_id" value="<?php echo $row["menu_id"]; ?>">
                <td><button type="submit" name="button" style="outline:none;border:none;background-color:#fcefed;">SUBMIT</button></td>
              </tr>
            </form>
            </table>
            </div>

            <?php
              }
            }
            else
            {
                echo "0 result";
            }
             ?>



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
