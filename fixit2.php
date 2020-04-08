<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit2.php
	Purpose:  What's wrong here? This code should list the complete names and hourly pay of
			  all employees with the last name of Smith. But instead it generates an error.
	Hint: 	  The problem is with the syntax of the SELECT statement
-->
<html>
<head>
	<title>Fixit 2</title>
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
	<h1>Fixit 2 </h1>
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
	$userQuery = "SELECT firstName, hourlyWage FROM personnel WHERE lastName ='Smith'";
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
		 while ($row = mysqli_fetch_assoc($result))
		{
			print (	"<p>".$row['firstName']." Smith's hourly wage is $".
			number_format($row['hourlyWage'], 2)."</p>");
		}

	}
     mysqli_close($connect);   // close the connection
}
?>
</body>
</html>