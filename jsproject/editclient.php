<html>
<head>  
    <title>
        edit client module 
    </title>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
    input[type=text], input[type=number],input[type=email],select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  }
  input[type=file]
  {
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: transparent;

  }
  #update_btn
{
  width: 10%;
  padding: 10px;
  display: inline-block;
  border: none;
  background:  grey;
  color:white;
}
.container
{
    padding: 16px;
}
.imagebox
{
    border :0px solid black;
    width :200px;
    height :250px;
    position :absolute;
    margin-left :150px;
    margin-top :100px;
}
label
{
    color :white;
    font-family: cursive;
    font-size:20px;
}
    </style>

<script>
var stateObject = {//data for options 
"India": { 
           "Delhi":    ["new Delhi", "North Delhi"],
           "Kerala": ["Thiruvananthapuram", "Palakkad"],
            "Goa": ["North Goa", "South Goa"],
            "Madhya Pradesh": ["ujjain", "indore"],
         },
"Australia": {
          "South Australia": ["Dunstan", "Mitchell"],
          "Victoria": ["Altona", "Euroa"]
             }, 
"Canada": {
         "Alberta": ["Acadia", "Bighorn"],
         "Columbia": ["Washington", ""]
          },
                }

window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
</head>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "stockmarket";
$conn = mysqli_connect($server, $user, $pass, $database);
$recordID = $_GET['client_id'];
$sql ="SELECT  name, email, phone FROM clientlisting WHERE client_id = '$recordID' ";
$result1=mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($result1);
    $name= $result['name'];
    $email= $result['email'];
    $phone= $result['phone'];
     session_start();
     $_SESSION['updateid']=$recordID;  
?>
<body style=" background-image: url('img/cover_dashboard.jpg'); background-size: cover;">
    <div class="imagebox">
    <!-- <input type='file' onchange="readURL(this);" /> -->
    <img id="imageTobox" src=""  alt="select image" />
    </div>
    <form enctype="multipart/form-data" style="border:0px solid rgb(22, 14, 14);width: 50% ;float :right;" action="submitupdatedetails.php" method="post" class="form-group">
        <div class="container">
      <label for="name"><b>name</b></label><br>  <input type="text" name="name" placeholder="enter name" value="<?php echo $name;?>" class="form-control"><br>
      <label for="name"><b>phone</b></label> <br><input type="number" name="phone" placeholder="enter phone number" value="<?php echo $phone;?>" class="form-control"><br>
      <label for="name"><b>email</b></label><br> <input type="email" name="email" placeholder="enter email" value="<?php echo $email;?>" class="form-control"><br>
      <label for="name"><b>Country</b></label><br>
      <select name="state" id="countySel" size="1" class="form-control">
       <option value="" selected="selected">Select Country</option>
      </select>
      <br>
      <label for="state"><b>select state</b></label><br>
      <select name="country" id="stateSel" size="1" class="form-control">
      <option value="" selected="selected">Please select Country first</option>
      </select>
      <br> 
      <label for="city"><b>select city</b></label><br>
      <select name="city" id="districtSel" size="1" class="form-control">
      <option value="" selected="selected">Please select State first</option>
      </select>
      <br> 
      <label for="name"><b>pincode</b></label> <br><input type="number" name="pincode" placeholder="enter pincode"> <br>
      <input type='file' onchange="readURL(this);"  name="image" />
       <br>
      <input type="submit" value="update" id="update_btn" name="updateit" class="form-control">
    </div>
    </form>
    <script>
             function readURL(input) {
             if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageTobox')
                        .attr('src', e.target.result)
                        .width(199)
                        .height(227);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
</body>
</html>