<?php
include("Connection.php");

mysqli_select_db($con , "Customer_db");

$sql="INSERT INTO customer ('First Name','Last Name','Street Name','City','Postal Code','Date of Birth','Email','Contact No') 
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[street]','$_POST[city]','$_POST[birthday]','$_POST[email]','$_POST[cnumber]')";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>