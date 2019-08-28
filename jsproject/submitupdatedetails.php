<?php
session_start();
print_r($_FILES);
$clientid=$_SESSION['updateid'];
//echo $clientid;
//$id=$_GET['client_id'];

 $name = (isset($_POST['name']) ? $_POST['name'] : '');
 $phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
 $email = (isset($_POST['email']) ? $_POST['email'] : '');
 $country = (isset($_POST['country']) ? $_POST['country'] : '');
 $state = (isset($_POST['state']) ? $_POST['state'] : '');
 $city = (isset($_POST['city']) ? $_POST['city'] : '');
 $pincode = (isset($_POST['pincode']) ? $_POST['pincode'] : '');
 $image = $_FILES['image']['name'];
 $target = "upload/".basename($image);
 
if (!empty($name)  && !empty($email) && !empty($phone) && !empty($country)&& !empty($state)&& !empty($city)&& !empty($pincode)&& !empty($target))
 {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "stockmarket";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    echo "connection created";
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {

    $sql ="UPDATE clientlisting SET name = '$name' ,email = '$email' ,phone = '$phone' ,country = '$country',state = '$state' ,city = '$city' ,pincode = '$pincode',url = '$target' WHERE client_id = '$clientid'"; 
    if(mysqli_query($conn,$sql))
    { 
        header("location:admin.php");
    }
else 
{
    header("location:dashboard.php");
}

    }
}
 ?>