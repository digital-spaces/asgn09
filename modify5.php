<!DOCTYPE html>
<!--Author:
	Date:
	File:	  modify5.php 
	Purpose:  This program lists the first and last names of all sales employees.
		  Modify this so that, instead of using a loop to display the names, the program simply displays a paragraph that reports
		 the number of sales staff, for example "There are 4 sales staff". Use a MySQL function to obtain the number of sales staff. 
	Hint: 	 There are two different MySQL functions that you can use here: you can modify the SELECT statement to use a MySQL aggregation function,
		 or you can use the MySQL function that returns the number of records in the result set. 
-->
<html>
<head>
	<title>Modify 5</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <style>
      a {
          display: block;
      }
  </style>
</head>
<body>
	<h1>Modify 5 </h1>
<?php

include('include-db-connect.php');


$connect=mysqli_connect(SERVER, USER, PW, DB);

if( !$connect)
{
	die("ERROR: Cannot connect to database $db on server $server
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
else
{
	$userQuery = "SELECT COUNT(firstName) FROM personnel WHERE jobTitle='sales' ";
	$result = mysqli_query($connect, $userQuery);

	if (!$result)
	{
		die("Could not successfully run query ($userQuery) from $db: " . mysqli_error($connect) );
	}

	if (mysqli_num_rows($result) == 0)
	{
		print("No records found with query $userQuery");
	}
	else
	{
        $row = mysqli_fetch_assoc($result);
		 print("<h1>SALES STAFF REPORT</h1>");
     	 print (	"<p>There are ".$row['COUNT(firstName)']." sales staff.</p>");
		}
     mysqli_close($connect);   // close the connection
}
?>
</body>
</html>