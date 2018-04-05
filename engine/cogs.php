<?php

require_once 'infused_cogs.php';

# function to get subscribers
function getSubscribers(){
  global $conn;

  # select administrative accounts
  $sql = "SELECT * FROM subscribers";
  $result = $conn->query($sql);

  $i = 0;

  # get admin accounts into variables
  while($row = $result->fetch_assoc()){
    $email = $row['email'];
    $phone = $row['phone'];

    $i += 1;

    echo "
      <tr>
        <td>".$i."&nbsp</td>
        <td>".$email."</td>
        <td>".$phone."</td>
      </tr>";
  }
}


# call to confirm old password
if (isset($_GET['oldpassword'])) {
  confirmPassword($_GET['oldpassword']);
}

# call to update password
if (isset($_GET['updatepassword'])) {
  $value = updateDB($_GET["updatepassword"], 'password', 'accounts', 'username', 'jane');

  echo $value;
}


# function to confirm password
function confirmPassword($password){

  global $conn;
  $username = 'jane';

  $sql = "SELECT * FROM accounts WHERE username = '$username'";
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()){
    $dbpassword = $row['password'];
  }

  if ($password == $dbpassword) {
    echo 1;
  }else {
    echo 0;
  }
}

# update function
function UpdateDB($value,$clausevalue='', $table = '', $clause = '', $variable = ''){

  global $conn;

  $success = null;

  $sql = "UPDATE $table SET $clausevalue = '$value' WHERE $clause = '$variable'";

  if ($conn->query($sql) == TRUE) {
    $success = TRUE;
  }else{
    $success = FALSE;
  }

  return $success;
}




 ?>
