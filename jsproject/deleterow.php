<?php 
// on clicking a delete button in admin.php
	$server = "localhost";
	$user = "root";
	$pass = "";
    $database = "stockmarket";
    $conn = mysqli_connect($server, $user, $pass, $database);
    $Drow = $_GET['client_id'];
    // executing query 
    $sql ="DELETE FROM clientlisting WHERE client_id = '$Drow' "; 
    if(mysqli_query($conn,$sql))
    { 
        header("location:admin.php");
    }
    ?> 

