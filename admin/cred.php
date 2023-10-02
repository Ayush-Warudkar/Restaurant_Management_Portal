<?php
  session_start();
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
    <div class="sticky">
      <div class="navi" style="padding-top:0px;background-color: rgba(0, 0, 0, 0.5);padding-bottom:10px;">
        <ul style="text-align:right;font-family: Oswald;padding-top:20px;">
        <li><a href="#" style="text-decoration:none;color:#fff;font-size:15px;margin-right:40px;">HOME</a></li>
        </ul>
      </div>
    </div>

    <div class="back1">
        <div class="container-fluid" style="padding-top:30px;">
          <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
              <div class="credbox">
                <form name="regform" class="formmain" action="includes/login.php" method="post">
                  <div style="margin-left:auto;margin-right:auto;">
                    <center><img src="../assets/avatar.png" width=40% alt="login"></center><br/>
                  </div>

                  <label for="username">USER-ID:</label>
                  <input class="forminput" type="text" id="name" name="username" autocomplete="off" oninput="return check()" required><br/>
                  <span id="username" class="text-danger font-weight-bold"></span><br/>

                  <label for="password">PASSWORD:</label>
                  <input class="forminput" type="password" id="psw" name="password" autocomplete="off" required><br/>
                  <span id="pass" class="text-danger font-weight-bold"></span>

                  <button type="submit" name="button" id="send" class="submitbtn">LOGIN</button>
                  <!-- for wrong username password START-->
                  <?php
                    if (isset($_SESSION['error']))
                    {
                    ?>
                    <div style="color:red;text-align:center;">
                    <?php
                    echo $_SESSION['error'];
                    }
                    ?>
                  </div>
                  <!-- for wrong username password ENDS-->
                </form>
              </div>
            </div>
          </div>

        </div>
    </div>

    <div class="footer">
      <div class="container-fluid">
        <p style="font-size:30px;color:#fff;margin-top:20px;"><i class="fa fa-facebook-square listelement" aria-hidden="true"></i> <i class="fa fa-twitter-square listelement" aria-hidden="true"></i> <i class="fa fa-instagram listelement" aria-hidden="true"></i></p>
        <p style="font-size:15px;color:#fff;">&copy; 2021 | Food Corner | All rights Reserved. |</p>
      </div>
    </div>
    </div>

  </body>
</html>
