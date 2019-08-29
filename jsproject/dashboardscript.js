
// admin dialog box appearence
$(document).ready(function() { 
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
    //   checking for submit values in dialog box 
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
});
