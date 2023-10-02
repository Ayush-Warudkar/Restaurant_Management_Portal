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
          <h1 style="text-align:center;font-family: Oswald;margin-top:10px;"><u>MENU LIST</u></h1>
          <div class="admdata" style="overflow:auto;height:400px;margin-top:50px;">

            <table class="table table-striped" >
              <thead>
                <tr class="tableheaddata">
                  <th scope="col">Dish Name</th>
                  <th scope="col">Dish Cost</th>
                  <th scope="col">Dish Category</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <div class="tabl">
              <tbody>
            <?php
            $student = "SELECT * FROM Menu";
            $result = $conn->query($student);

            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
            ?>
            <tr>
              <td><?php echo $row["dish_name"]; ?></td>
              <td><?php echo $row["dish_cost"]; ?></td>
              <?php
               $d = $row["dish_type"];
               if($d == "V")
               {
                 $dish="Vegetarian";
               }
               elseif($d== "N"){
                 $dish="Non Vegetarian";
               }
               elseif($d== "S"){
                 $dish="Soft Drink";
               }
               elseif($d== "B"){
                 $dish="Beverage";
               }
               elseif($d== "D"){
                 $dish="Dessert";
               }
              ?>
              <td><?php echo $dish ?></td>
              <td>
                <form action="EditMenu.php" method="get" style="margin-top:-50px;">
                <button type="submit" name="edit" value="<?php echo $row["menu_id"]; ?>" style="width:50px;text-decoration:none;background-color:transparent;border:1px solid black;outline:none;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                </form>
              </td>

              <td>
                <form action="" id="<?php echo $row["menu_id"]; ?>" method="post" style="margin-top:-50px;" onsubmit="confirmation(<?php echo $row["menu_id"]; ?>)">
                  <input type="hidden" name="menu_id" value="<?php echo $row["menu_id"]; ?>">
                  <button type="submit" style="background:transparent;border:1px solid black;outline:none;width:50px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
              </td>
            </tr>
          </tbody>
            <?php
              }
            }
            else
            {
                echo "DATA NOT FETCHED! CHECK THE SYSTEM OR DATABASE";
            }
            ?>
          </div>
        </table>
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
      <!-- DELETE (START) -->
      <script>
      function confirmation(menu_id){
        if(confirm("Are You Sure Want To Delete?")){
          document.getElementById(menu_id).action = "includes/DeleteMenu.php";
          return true;
        }
        else{
          return false;
        }
      }
      </script>
      <!-- DELETE (END) -->
  </body>
</html>
