<?php
// getting values from dashboard.php
 $name = (isset($_POST['Sname']) ? $_POST['Sname'] : '');
 $phone = (isset($_POST['Sphone']) ? $_POST['Sphone'] : '');
 $email = (isset($_POST['Semail']) ? $_POST['Semail'] : '');
 $gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
if (!empty($name)  && !empty($email) && !empty($phone) && !empty($gender)) {
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
      //  executing query
     $INSERT = "INSERT Into clientlisting( name , email, phone, gender) values( ?, ?, ?, ?)";
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssis", $name, $email, $phone, $gender);
      $stmt->execute();
      $rnum = $stmt->num_rows;
     // redirecting to locations ;
      header("location:dashboard.php");
      if ($rnum==0) {
        $stmt->close();
       }
    }
    $conn->close(); //closing connection 
}
else 
{
   header("location:dashboard.php");
}
?>