<?php
session_start();
if(isset($_GET['table'])) {
  if($_GET['table']>0 && $_GET['table']<=10)
  {
    $table = $_GET['table'];
    $_SESSION["table"] = "$table";
  }
  else{
    header('Location: NA.php');
    exit();
  }
} else {
  header('Location: NA.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap-4.5.3/bootstrap-4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-4.5.3/bootstrap-4.5.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>RESTAURANT:Menu</title>
  </head>
  <body>

    <!-- DESKTOP START -->
    <div class="desktop">
    </div>
      <!-- DESKTOP ENDS -->



      <!-- MOBILE START -->
      <div class="mobile">
        <div class="sticky">
          <div class="topnav">
            <a href="#" style="text-decoration:none;color:#fff;font-size:15px;">Table No.: <?php echo $_SESSION["table"]; ?></a>
            <div id="myLinks">
              <a href="#" style="text-decoration:none;color:#fff;font-size:15px;">HOME</a>
              <a href="#" id="cart1" style="text-decoration:none;color:#fff;font-size:15px;">CART</a>
              <a href="#" id="bill" style="text-decoration:none;color:#fff;font-size:15px;">BILL</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>

        <div class="back1">
            <div class="container-fluid" style="padding-top:250px;">
              <h1 style="font-family: Lobster-Regular;font-size:50px;text-align:center;color:rgba(0, 0, 0, 0.5);"><u>Food Corner</u></h1>
            </div>
        </div>

        <div class="DataPortion">
          <div class="container-fluid">
            <h1 style="font-family: Lobster-Regular;font-size:50px;margin-top:80px;text-align:center;color:#fff;">Order Your Favorite Menu<b style="color:red;"> &hearts;...</b></h1>
            <div class="row">
              <div class="col-md-4" style="margin-bottom:50px;">
                <center><img src="assets/veg.jpg" id="veg1" class="dish" style="width:90%;"></center>
              </div>
              <div class="col-md-4" style="margin-bottom:50px;">
                <center><img src="assets/non.jpg" id="nonveg1" class="dish" style="width:90%;"></center>
              </div>
              <div class="col-md-4" style="margin-bottom:50px;">
                <center><img src="assets/softdrink.jpg" id="sdrink1" class="dish" style="width:90%;"></center>
              </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4"  style="margin-bottom:50px;">
                  <center><img src="assets/bev.jpg" id="bev1" class="dish" style="width:90%;"></center>
                </div>
                <div class="col-md-4"  style="margin-bottom:50px;">
                  <center><img src="assets/ice.jpg" id="des1" class="dish" style="width:90%;"></center>
                </div>
                <div class="col-md-2"></div>
            </div>
          </div>
        </div>

        <div class="back2" style="padding-top:100px;">
          <div class="container-fluid">
            <center><div style="background-color:rgba(255, 255, 255, 0.3);width:90%;min-height:300px;padding:20px;border-radius:40px 0px;box-shadow: 0px 0px 20px 5px #888888;border:1px solid #fff;">
            <p style="width:100%;color:#fff;font-size:12px;padding:20px 20px 5px 20px;font-family: Oswald;text-align:justify;">"We may not be able to travel to every country on Earth, but a great way to get a taste of a culture is to sample its signature dishes. Try cooking up a storm in your own kitchen or – when dining out is on the cards again – find a great restaurant and let your taste buds set sail on a culinary adventure across the globe. Here's a selection of popular dishes you shouldn't miss."</p>
            <p style="width:100%;color:#fff;font-size:12px;padding:20px;font-family: Oswald;text-align:justify;">"You might think that there couldn't be anything easier than deep-frying a piece of chicken – but you'd be wrong to assume it's as simple as that. Making the perfect batter, adding just the right amount of seasoning and choosing the best way to fry takes practise. A dish deeply rooted in the American South, a perfect basket of fried chicken is one for the bucket list."</p>
          </div></center>
          </div>
        </div>

        <div class="footer">
          <div class="container-fluid">
            <p style="font-size:30px;color:#fff;margin-top:20px;"><i class="fa fa-facebook-square listelement" aria-hidden="true"></i> <i class="fa fa-twitter-square listelement" aria-hidden="true"></i> <i class="fa fa-instagram listelement" aria-hidden="true"></i></p>
            <p style="font-size:15px;color:#fff;">&copy; 2021 | Food Corner | All rights Reserved. |</p>
          </div>
        </div>
      </div>
      <input type="hidden" id="tableno" value="<?php echo $table; ?>">
      <!-- MOBILE ENDS -->

<!-- MODALS START -->
      <div id="vegModal" class="modal">
        <div class="modal-content">
          <span class="close vegclose" style="text-align: right;"><b class="x">&times;</b></span>
          <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;">ADD TO CART (Veg)</h2>
              <div class="container">
                <div class="row" style="margin-bottom:10px;">
                <?php
                include_once 'admin/includes/config.php';
                $sql = "SELECT * FROM menu WHERE dish_type='V'";
                $result = $conn->query($sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                ?>
                    <div class="col-md-4" ><?php echo $row['dish_name'] ?></div>
                    <div class="col-md-4" ><?php echo $row['dish_cost'] ?> RS.</div>
                    <div class="col-md-4"><button type="button" onclick="add()" class="add-to-cart" data-name="<?php echo $row['dish_name'] ?>" data-price="<?php echo $row['dish_cost'] ?>" name="button" style="padding:7px;background-color:#331e1d;color:#fff;border:none;border-radius:10px;outline:none;width:100px;margin-bottom:10px;">Add To Cart</button></div>
                <?php
                }
                ?>
                  </div>
              </div>
        </div>
      </div>

      <div id="nonvegModal" class="modal">
        <div class="modal-content">
          <span class="close nonvegclose" style="text-align: right;"><b class="x">&times;</b></span>
          <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;">ADD TO CART (Non Veg)</h2>
              <div class="container">
                <div class="row" style="margin-bottom:10px;">
                  <?php
                  include_once 'admin/includes/config.php';
                  $sql = "SELECT * FROM menu WHERE dish_type='N'";
                  $result = $conn->query($sql);
                  while ($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                      <div class="col-md-4"><?php echo $row['dish_name'] ?></div>
                      <div class="col-md-4"><?php echo $row['dish_cost'] ?> RS.</div>
                      <div class="col-md-4"><button type="button" onclick="add()" class="add-to-cart" data-name="<?php echo $row['dish_name'] ?>" data-price="<?php echo $row['dish_cost'] ?>" name="button" style="padding:7px;background-color:#331e1d;color:#fff;border:none;border-radius:10px;outline:none;width:100px;margin-bottom:10px;">Add To Cart</button></div>
                  <?php
                  }
                  ?>
                </div>
              </div>
        </div>
      </div>

      <div id="sdrinkModal" class="modal">
        <div class="modal-content">
          <span class="close sdrinkclose" style="text-align: right;"><b class="x">&times;</b></span>
          <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;">ADD TO CART (Drinks)</h2>
              <div class="container">
                <div class="row" style="margin-bottom:10px;">
                  <?php
                  include_once 'admin/includes/config.php';
                  $sql = "SELECT * FROM menu WHERE dish_type='S'";
                  $result = $conn->query($sql);
                  while ($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                      <div class="col-md-4"><?php echo $row['dish_name'] ?></div>
                      <div class="col-md-4"><?php echo $row['dish_cost'] ?> RS.</div>
                      <div class="col-md-4"><button type="button" onclick="add()" class="add-to-cart" data-name="<?php echo $row['dish_name'] ?>" data-price="<?php echo $row['dish_cost'] ?>" name="button" style="padding:7px;background-color:#331e1d;color:#fff;border:none;border-radius:10px;outline:none;width:100px;margin-bottom:10px;">Add To Cart</button></div>
                  <?php
                  }
                  ?>
                </div>
              </div>
        </div>
      </div>

      <div id="bevModal" class="modal">
        <div class="modal-content">
          <span class="close bevclose" style="text-align: right;"><b class="x">&times;</b></span>
          <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;">ADD TO CART (Beverages)</h2>
              <div class="container">
                <div class="row" style="margin-bottom:10px;">
                  <?php
                  include_once 'admin/includes/config.php';
                  $sql = "SELECT * FROM menu WHERE dish_type='B'";
                  $result = $conn->query($sql);
                  while ($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                      <div class="col-md-4"><?php echo $row['dish_name'] ?></div>
                      <div class="col-md-4"><?php echo $row['dish_cost'] ?> RS.</div>
                      <div class="col-md-4"><button type="button" onclick="add()" class="add-to-cart" data-name="<?php echo $row['dish_name'] ?>" data-price="<?php echo $row['dish_cost'] ?>" name="button" style="padding:7px;background-color:#331e1d;color:#fff;border:none;border-radius:10px;outline:none;width:100px;margin-bottom:10px;">Add To Cart</button></div>
                  <?php
                  }
                  ?>
                </div>
              </div>
        </div>
      </div>

      <div id="desModal" class="modal">
        <div class="modal-content">
          <span class="close desclose" style="text-align: right;"><b class="x">&times;</b></span>
          <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;">ADD TO CART (Dessert)</h2>
              <div class="container">
                <div class="row" style="margin-bottom:10px;">
                  <?php
                  include_once 'admin/includes/config.php';
                  $sql = "SELECT * FROM menu WHERE dish_type='D'";
                  $result = $conn->query($sql);
                  while ($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                      <div class="col-md-4"><?php echo $row['dish_name'] ?></div>
                      <div class="col-md-4"><?php echo $row['dish_cost'] ?> RS.</div>
                      <div class="col-md-4"><button type="button" onclick="add()" class="add-to-cart" data-name="<?php echo $row['dish_name'] ?>" data-price="<?php echo $row['dish_cost'] ?>" name="button" style="padding:7px;background-color:#331e1d;color:#fff;border:none;border-radius:10px;outline:none;width:100px;margin-bottom:10px;">Add To Cart</button></div>
                  <?php
                  }
                  ?>
                </div>
              </div>
        </div>
      </div>


<div class="mobile">
  <div id="cartModal" class="modal">
    <div class="modal-content">
      <span class="close cartclose" style="text-align: right;"><b class="x">&times;</b></span>
      <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> CART</h2>
          <div class="container">
            <table id="show-cart">

            </table>
            <hr/>
            <div style="text-align:right;float:left;">Total Cart: RS <span id="total-cart" style="font-family: 'Oswald', sans-serif;float-left;"></span> <button style="float:right;padding:5px 10px 5px 10px;border:none;background-color:orange;margin-left:100px;" type="button" onclick="sentcart()" id="clear-cart">order</button></div>
          </div>
    </div>
  </div>
</div>

<div class="mobile">
  <div id="billModal" class="modal">
    <div class="modal-content">
      <span class="close billclose" style="text-align: right;"><b class="x">&times;</b></span>
      <h2 style="font-size: 30px;margin-bottom:20px;margin-left:20px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> BILL</h2>
          <div class="container">
            <div class="row">
              <div class="col-4">
                <p style="font-weight:bold;">DISH</p>
              </div>
              <div class="col-4">
                <p style="font-weight:bold;">QTY</p>
              </div>
              <div class="col-4">
                <p style="font-weight:bold;">COST</p>
              </div>
            </div>
            <hr/>
            <?php
            include_once 'admin/includes/config.php';
            $sql = "SELECT * FROM orders WHERE order_table = '$table' AND order_status = 'Serve'";
            $result = $conn->query($sql);
            $total = 0;
            while ($row = mysqli_fetch_assoc($result))
            {
            ?>
            <div class="row">
              <div class="col-4">
                <?php echo $row['order_item'] ?>
              </div>
              <div class="col-4">
                <?php echo $row['order_qty'] ?>
              </div>
              <div class="col-4">
                <?php
                  echo $row['order_per_cost'];
                  $total = $total + $row['order_per_cost'];
                 ?>
              </div>
            </div>
            <hr/>

            <?php
            }
            ?>
            <p>Grand Total: <?php echo $total; ?> </p>
          </div>
    </div>
  </div>
</div>
<!-- MODALS END -->



<!-- JAVASCRIPT START -->
      <!-- 1). VEG MODAL (Start)-->
      <script>
      var vegmodal = document.getElementById('vegModal');
      var veg = document.getElementById("veg1");
      var span1 = document.getElementsByClassName("vegclose")[0];
      veg.onclick = function() {
        vegmodal.style.display = "block";
      }
      span1.onclick = function() {
        vegmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == vegmodal) {
          vegmodal.style.display = "none";
        }
      }
      </script>
      <!-- 1). VEG MODAL (End)-->

      <!-- 2). NON VEG MODAL (Start)-->
      <script>
      var nonvegmodal = document.getElementById('nonvegModal');
      var nonveg = document.getElementById("nonveg1");
      var span2 = document.getElementsByClassName("nonvegclose")[0];
      nonveg.onclick = function() {
        nonvegmodal.style.display = "block";
      }
      span2.onclick = function() {
        nonvegmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == nonvegmodal) {
          nonvegmodal.style.display = "none";
        }
      }
      </script>
      <!-- 2). NON VEG MODAL (End)-->

      <!-- 3). SOFTDRINK MODAL (Start)-->
      <script>
      var sdrinkmodal = document.getElementById('sdrinkModal');
      var sdrink = document.getElementById("sdrink1");
      var span3 = document.getElementsByClassName("sdrinkclose")[0];
      sdrink.onclick = function() {
        sdrinkmodal.style.display = "block";
      }
      span3.onclick = function() {
        sdrinkmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == sdrinkmodal) {
          sdrinkmodal.style.display = "none";
        }
      }
      </script>
      <!-- 3). SOFTDRINK MODAL (End)-->

      <!-- 4). BEVERAGE MODAL (Start)-->
      <script>
      var bevmodal = document.getElementById('bevModal');
      var bev = document.getElementById("bev1");
      var span4 = document.getElementsByClassName("bevclose")[0];
      bev.onclick = function() {
        bevmodal.style.display = "block";
      }
      span4.onclick = function() {
        bevmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == bevmodal) {
          bevmodal.style.display = "none";
        }
      }
      </script>
      <!-- 4). BEVERAGE MODAL (End)-->

      <!-- 5). DESERT MODAL (Start)-->
      <script>
      var desmodal = document.getElementById('desModal');
      var des = document.getElementById("des1");
      var span5 = document.getElementsByClassName("desclose")[0];
      des.onclick = function() {
        desmodal.style.display = "block";
      }
      span5.onclick = function() {
        desmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == desmodal) {
          desmodal.style.display = "none";
        }
      }
      </script>
      <!-- 5). DESERT MODAL (End)-->

      <!-- 6). add to cart (Start)-->
      <script src="js/shoppingCart.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript">
      $(".add-to-cart").click(function(event){
          event.preventDefault();
          var name = $(this).attr("data-name");
          var price = Number($(this).attr("data-price"));

          shoppingCart.addItemToCart(name, price, 1);
          displayCart();
      });

      $("#clear-cart").click(function(event){
          shoppingCart.clearCart();
          displayCart();
      });


        function sentcart(){
          var cartArray = shoppingCart.listCart();
          $.ajax({
            type: "POST",
            url: 'admin/includes/ordersent.php',
            data:{
              cartArray:cartArray
            },
            success: (response) => {
              console.log(response);
            },
            error: (result) => {
              console.log(result);
            }
          })
        }

      function displayCart() {
          var cartArray = shoppingCart.listCart();
          var table = document.getElementById('tableno').value;
          var output = "";
          for (var i in cartArray) {
              output +="<tr style='margin-bottom:20px;'>"
                  +"<td style='width:200px;'> <input type='text' readonly style='background-color:transparent;border:none;outline:none;' name='"
                  +cartArray[i].name+"'value='"
                  +cartArray[i].name+"'> </td>"
                  +"<td style='width:100px;'> <input type='text' readonly style='background-color:transparent;border:none;outline:none;' name='"
                  +cartArray[i].count+"' value='"
                  +cartArray[i].count+" Qty"+"'> </td>"
                  +"<td style='width:100px;'> <input type='text' readonly style='background-color:transparent;border:none;outline:none;' name='"
                  +cartArray[i].price+"' value='"
                  +cartArray[i].price+" RS./per"+"'> </td>"


                  +"<td> <button class='plus-button plus-item' style='border-radius:50%;border:none;outline:none;background-color:Orange;height:30px;width:30px;font-size:20px;' data-name='"
                  +cartArray[i].name+"'>+</button></td>"
                  +"<td> <button class='plus-button subtract-item'  style='border-radius:50%;border:none;outline:none;background-color:Orange;height:30px;width:30px;font-size:20px;' data-name='"
                  +cartArray[i].name+"'>-</button></td>"
                  +"</tr>";
          }

          $("#show-cart").html(output);
          $("#count-cart").html( shoppingCart.countCart() );
          $("#total-cart").html( shoppingCart.totalCart() );
      }

      $("#show-cart").on("click", ".delete-item", function(event){
          var name = $(this).attr("data-name");
          shoppingCart.removeItemFromCartAll(name);
          displayCart();
      });

      $("#show-cart").on("click", ".subtract-item", function(event){
          var name = $(this).attr("data-name");
          shoppingCart.removeItemFromCart(name);
          displayCart();
      });

      $("#show-cart").on("click", ".plus-item", function(event){
          var name = $(this).attr("data-name");
          shoppingCart.addItemToCart(name, 0, 1);
          displayCart();
      });

      $("#show-cart").on("change", ".item-count", function(event){
          var name = $(this).attr("data-name");
          var count = Number($(this).val());
          shoppingCart.setCountForItem(name, count);
          displayCart();
      });
      displayCart();
      </script>
      <!-- 6). add to cart (End)-->

      <!-- 7). cart MODAL (Start)-->
      <script>
      var cartmodal = document.getElementById('cartModal');
      var cart = document.getElementById("cart1");
      var span7 = document.getElementsByClassName("cartclose")[0];
      cart.onclick = function() {
        cartmodal.style.display = "block";
      }
      span7.onclick = function() {
        cartmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == cartmodal) {
          cartmodal.style.display = "none";
        }
      }
      </script>
      <!-- 7). cart MODAL (End)-->

      <!-- 8) item added cart (start) -->
      <script>
      function add(){
        alert("1 Item Added To Cart Successfully.");
      }
      </script>
      <!-- 8) item added cart (end) -->

      <!-- 9) NAV BAR MOBILE (start) -->
      <script>
        function myFunction() {
          var x = document.getElementById("myLinks");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
      </script>
      <!-- 9) NAV BAR MOBILE (end) -->

      <!-- 10). bill MODAL (Start)-->
      <script>
      var billmodal = document.getElementById('billModal');
      var cart = document.getElementById("bill");
      var span8 = document.getElementsByClassName("billclose")[0];
      cart.onclick = function() {
        billmodal.style.display = "block";
      }
      span8.onclick = function() {
        billmodal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == billmodal) {
          billmodal.style.display = "none";
        }
      }
      </script>
      <!-- 10). bill MODAL (End)-->

<!-- JAVASCRIPT ENDS -->
  </body>
</html>
