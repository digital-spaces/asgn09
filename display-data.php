<?php

include('include-db-connect.php');

$connect=mysqli_connect(SERVER, USER, PW, DB);


if ($connect) {
  die("ERROR: Cannot connect to database $db on server $server using user name $user('.mysqli_connect_errno().', '.mysqli_connect_error().')");
}

mysqli_close($connect);
