<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Security</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <link rel="icon" type="../image/png" href="../images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <!-- Welcome to admin user dashboard -->

    <!-- admin menu -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 side-menu">

          </div>
          <div class="col-sm-9 right-module">
            <div class="mini-board">

              <h3>Change password</h3>

              <form class="ui-form" name="myForm" action="" method="post" onsubmit="return changePassword()">
                <p class="error" id="oldpassworderror"></p>
                <input type="password" name="oldpassword" placeholder="old password"><span id="oldpasswordsuccess"></span><br><br>
                <p class="error" id="newpassworderror"></p>
                <input type="password" name="newpassword" placeholder="new password"><span id="oldpasswordsuccess"></span><br><br>
                <p class="error" id="confirmpassworderror"></p>
                <input type="password" name="confirmpassword" placeholder="confirm new password"><span id="oldpasswordsuccess"></span><br><br>
                <input type="submit" name="change-password" value="change password">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
