<!DOCTYPE html>
<html>
    <head>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous">
            </script>
           <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
           <link rel="stylesheet" href="dashboardstyle.css">
           <link rel="stylesheet" href="/resources/demos/style.css">
           <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
           <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
           <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body style=" background-image: url('img/cover_dashboard.jpg'); background-size: cover;">
  
<header id="head"> 
  <!-- <h1>header start here</h1> -->
    
  <img src="StockMarket.png" width="100px;" height="50px;">
  <h1 style="margin-left: 6px;margin-top :0px; margin-right :0px; margin-bottom :0px; ">StockMarket</h1>

</header>

<div id="form_container" style="border:0px solid rgb(22, 14, 14);width: 40%;" class="form-group">
<form action="submitdetails.php" method="POST">
  <div class="container">  
    <label for="name" ><b>Name</b></label>
    <br>
    <input type="text" placeholder="Enter name" id="name" name="Sname" size="3" required class="form-control">
    <label id="errorname" class="errormsg"></label>
    <label id="noerrorname" class="noerror"></label>
    <br>

    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Enter Email" id="emailID" name="Semail" class="form-control" required>
    <label id="erroremail" class="errormsg"></label>
    <label id="noerroremail" class="noerror"></label>
    <br>


    <label for="phone"><b>Phone</b></label>
    <br>
    <input type="number" placeholder="Enter contact details" id="phone" name="Sphone" class="form-control" required>
    <label id="errorphone" class="errormsg"></label>
    <label id="noerrorphone" class="noerror"></label>
    <br>


     <label for="dob"><b>Gender</b></label>
    <br>
    <div id="radio_container">
    <input type="radio" value="M" name="gender" ><label id="cnt">Male</label>
    <input type="radio" value="F" name="gender"><label id="cnt">Female</label>
    <br>
  </div>
  <br>
  <input type="submit" id="main_button" class="btn btn-primary">
</form>
</div>
<button class="Adminbtn" id="admin_button" >Admin</button>
</div>
<footer id="foot">
   <label> <h1 style="color:black; font-size:30px;">Contact Us :+91-998989888</h1></label><br>
   <label> <h1 style="color:black;font-size:30px;" >Email Us :fdfufhdf@gmail.com</h1></label>
  </footer>
  <div id="dialog_admin" title="Admin Login" style="visibility:hidden; background-image:url('img/cover_dashboard.jpg') ;">
      <label for="Username" ><b>User Name</b></label>
      <br>
      <input type="text" placeholder="Enter name" id="Adminname" size="3" required>
      <br>
      <label for="password_admin" ><b>password</b></label>
      <br>
      <input type="password" placeholder="Enter Password" id="Password" size="3" required>
      <br>
      <button id="admin_submit_button">submit</button>
    </div>


<div id="dialog" title="Basic dialog" style="visibility:hidden;">
    <label>
      are you sure your with your email
    </label>
    <button id="dial_sub">submit</button> <button id="dial_res">reset</button>
  </div>
   
  </div>
  <script>

// admin dialog box appearence 
$("#admin_button").click('input',function()
{ 

  $("#dialog_admin").css("visibility","visible");
    $( "#dialog_admin" ).dialog();
})
// Email validation
$('#emailID').blur('input', function() {

	let input=$(this);
	let re =  /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	let is_email=re.test(input.val());
  $("#phone").focus(function()
  {
 
    if(is_email){
      $("#dialog").css("visibility","visible");
    $( "#dialog" ).dialog();
        // input.removeClass("invalid").addClass("valid");
        $('#erroremail').hide();
        // $('#noerroremail').text("ok verified email") ;
               }
	if(!is_email){
       $('#erroremail').text("invalid email") ;
      }
  });

});


//name validation
$('#name').on('input', function() {
	var input=$(this);
	var re = /^([a-zA-Z]{3,16})$/;
	var is_name=re.test(input.val());
	if(is_name){
        input.removeClass("invalid").addClass("valid");
        $('#errorname').hide();
        $('#noerrorname').text("name verified");
             }
	else{
        input.removeClass("valid").addClass("");
        $('#errorname').text("name should not be numeric") ; 
       
      }
});



//phone validation
$('#phone').on('input', function() {
	var input=$(this);
	var re = /(?:\s+|)((0|(?:(\+|)91))(?:\s|-)*(?:(?:\d(?:\s|-)*\d{9})|(?:\d{2}(?:\s|-)*\d{8})|(?:\d{3}(?:\s|-)*\d{7}))|\d{10})(?:\s+|)/;
	var is_name=re.test(input.val());
	if(is_name){
        input.removeClass("invalid").addClass("valid");
        $('#errorphone').hide();
        $('#noerrorphone').text("phone verified");
             }
	else{
        input.removeClass("valid").addClass("");
        $('#errorphone').text("invalid phone") ; 
       
      }
});
  
    //on submit in the dialog box
    $(document).ready(function(){
  $("#dial_sub").click(function(){
    $("#phone").focus();
    $("#dialog").dialog('close');
    //$("#output").css("visibility","visible");
    }); 
    })
    //on reset in the dialog box
    $(document).ready(function(){
  $("#dial_res").click(function(){
    $("#emailID").val("");
    $("#dialog").dialog('close');
  }); 
    })
  
    
    $("#admin_submit_button").click(function() {
      var name = $("#Adminname").val();
      var password = $("#Password").val();
      if(name == "deveshsant" && password == "12345")
      {
        location.href= "admin.php";
      }
      else 
      {
      alert ("Invalid Credentials");

      }
  })



  var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
  </script>

</div>
</body>
</html>

