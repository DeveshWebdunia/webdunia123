 <?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "stockmarket";
	$conn = mysqli_connect($server, $user, $pass, $database);
?> 
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous">
            </script>
           <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
           <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
           <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>admin header</title>
	<script>
 
 $(document).ready(function() {
  $("#customer_button").click(function(){
	$("#clientlist").hide();
	$("#customerlist").show();
    }); 

	$("#client_button").click(function(){
	$("#customerlist").hide();
	$("#clientlist").show();
    }); 	
});
	</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
#head
{
  border :1px solid black ;
  padding :20px;
  background-color :lightgray;
}
.adminbutton{
	width: 130px;
	height :70px;
	margin-top :10px;
	margin-left :0px;
   /* padding: 20px; */
  /* margin: 70px 0 5px 250px;  */
  display: inline-block;
  border: none;
  background:  grey;
  color:white;
}
#client_count
{
	width :250px;
    height :100px;
	padding :20px;
	top :0px;
	right :0px;
	position :absolute;
}
#customer_count
{
	width :250px;
    height :100px;
	padding :20px;
	top :19px;
	right :0px;
	position :absolute;
}
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:15px;
	color:black;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
	display :none;
	position :absolute;
	top :200px;
	left :200px;
}
table.hovertable th {
	background-color: grey;
	border-width: 1px;
	padding: 28px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:white;
}
table.hovertable td {
	border-width: 1px;
	padding: 18px;
	border-style: solid;
	border-color: #a9c6c9;
}
#sidemenu
{
	width :140px;
    height :100%;
	padding :5px;
	border : 0px solid black;
}

    </style>
</head>
<body style=" background-image: url('img/cover_dashboard.jpg'); background-size: cover;">
<header id="head">
  <!-- <h1>header start here</h1> -->
    
  <img src="StockMarket.png" width="100px;" height="50px;">
  <h1 style="margin-left: 6px;margin-top :0px; margin-right :0px; margin-bottom :0px; ">StockMarket</h1>
</header>
<div id="sidemenu">
<button class="adminbutton" id="client_button">client List</button>
<button class="adminbutton" id="customer_button">customers List</button>
</div>
<?php
	$table = "clientlisting";
	// following code is used to select all the data or row from the table
	$sqlQ = "SELECT client_id,name,email,phone,gender FROM $table WHERE status='0' ";
	$res = $conn->query($sqlQ);
	?>

	<table class="hovertable" id ="customerlist">
<tr>
	<th>ID</th><th>name</th><th>email</th><th>phone</th><th>gender</th><th></th><th></th>
</tr>
<?php
	if($res)
	{
		while($row = mysqli_fetch_assoc($res))
		{
	?>
<tr onmouseover="this.style.backgroundColor='grey';" onmouseout="this.style.backgroundColor='white';">
	<td><?php echo $row['client_id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['email'];?></td>
	<td><?php echo $row['phone'];?></td><td><?php echo $row['gender'];?></td>
	<td><a href= deleterow.php?client_id=<?php echo $row['client_id'];?>><button>Delete</button></a></td>
	<td><a href= addrow.php?client_id=<?php echo $row['client_id'];?>><button>Activate</button></a></td>
</tr>
<?php
		}
		
	}
$sql="select count('name') from clientlisting where status= 0";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "<div id='client_count'><h3 style='font-family:cursive;'>Hello Devesh !</h3><h3 style='font-family:cursive;'> NO OF Customers :$row[0]<h3></div><hr>";

$sqlcount="select count('name') from clientlisting where status= 1";
$result=mysqli_query($conn,$sqlcount);
$rowcount=mysqli_fetch_array($result);
echo "<div id='customer_count'><h3 style='font-family:cursive'> NO OF Clients :$rowcount[0]<h3></div>";
//mysqli_close($conn);
?>
<!-- CSS goes in the document HEAD or added to your external stylesheet -->

<?php
	$sqlr = "SELECT* FROM clientlisting WHERE status='1'";
	$result = $conn->query($sqlr);
	?>
	<table class="Clienthovertable" id="clientlist">
<tr>
	<th>ID</th><th>name</th><th>email</th><th>phone</th><th>gender</th><th></th><th></th>
</tr>
<?php
	if($result)
	{
		while($row = mysqli_fetch_assoc($result))
		{
	?>
<tr onmouseover="this.style.backgroundColor='grey';" onmouseout="this.style.backgroundColor='white';">
	<td><?php echo $row['client_id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['email'];?></td>
	<td><?php echo $row['phone'];?></td><td><?php echo $row['gender'];?></td>
	<td><a href= editclient.php?client_id=<?php echo $row['client_id'];?>><button>Edit</button></a></td>
	<td><a href= updaterow.php?client_id=<?php echo $row['client_id'];?>><button>Inactivate</button></a></td>
</tr>
<?php
		}
		
	}
	else 
	{
		echo "<p>Error occurred...exiting...</p>";
		exit();
	}
	?>
<style>
table.Clienthovertable {
	font-family: verdana,arial,sans-serif;
	font-size:15px;
	color:black;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
	display :none;
	position :absolute;
	top :200px;
	left :200px;
		
}
table.Clienthovertable th {
	background-color: grey;
	border-width: 1px;
	padding: 28px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.Clienthovertable tr {
	background-color:white;
}
table.Clienthovertable td {
	border-width: 1px;
	padding: 18px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>
</body>
</html>