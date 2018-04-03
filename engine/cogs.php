<?php

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



 ?>
