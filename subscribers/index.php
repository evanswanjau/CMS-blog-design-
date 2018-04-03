
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subscribers</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
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
              <h3>Bulk sms and email</h3>

              <form class="ui-form" action="" method="post">
                <select name="product">
                  <option value="email">Email</option>
                  <option value="SMS">SMS</option>
                  <option value="both">Both Email and SMS</option>
                </select><br><br>
                <textarea name="message" rows="8" cols="80" placeholder="Enter message here"></textarea><br><br>
                <input type="submit" name="send-message" value="send message">
              </form>
            </div>
            <div class="mini-board excess">

              <h3>Subscribers</h3>

              <table style="width:50%">
                <tr>
                  <th>email</th>
                  <th>phone number</th>
                </tr>
                <?php //getSubscribers(); ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
