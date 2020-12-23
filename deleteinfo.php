<?php
//including the database connection file
include("db.php");
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM members WHERE id=$id");
//redirecting to the display page (index.php in our case)
echo "deleted successfully";
header("Location:members.php");
?>
