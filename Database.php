<?php
include("Connection.php");

if(mysqli_query($con, "CREATE DATABASE Customer_db")){
    echo "Database created";
}
else{
    echo "Error creating database: " . mysqli_error($con);
}

mysqli_close($con);
?>