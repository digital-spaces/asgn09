<?php
$page_title = 'MySQL Query';

include_once('initialize.php');
check_db_connection($connect);

$userQuery = emp_ID_equals_query(); // ADD QUERY

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

print("<h1>UPDATE</h1>");
print("<p>The employee update has been completed.</p>");

mysqli_close($connect);
include_once("includes/footer.php");
?>
