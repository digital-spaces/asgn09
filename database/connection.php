<?php
// local using variables
// $server = "localhost";
// $user = "wbip";
// $pw = "wbip123";
// $db = "test";

// siteground
// define('SERVER', 'localhost');
// define('USER', "morganf7_admin");
// define('PW', "01202425");
// define('DB', "morganf7_test");

// local using constants

define('SERVER', "localhost");
define('USER', "wbip");
define('PW', "wbip123");
define('DB', "test3");

global $connect;
$connect = mysqli_connect(SERVER, USER, PW, DB);

//function close() {
//    mysqli_close($connect);
//}
