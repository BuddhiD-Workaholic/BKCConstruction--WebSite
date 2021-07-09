//Jquery Methods Starts

/* Tooltip Starts --> Flag */
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});


/* Tooltip Ends --> Submitted*/
function SubmitVA(data){
$(document).ready(function(){
  $("#NewsSub").click(function(){
   var newTooltip = data + 'Values are Submitted';
$('[data-toggle="tooltip"]').attr('data-original-title', newTooltip).parent().find('.tooltip-inner').html(newTooltip);
  });
});
}

/*Mode button Starts*/
function func(){
  $(document).ready(function(){
    $(".BtnModel").click(function(){
      $("#ModalBod").modal();
    });
  });
}
/*Mode button Ends*/

/*Input Validation - News Later*/
$('#txtEFAddres').on('input', function() {
	var input=$(this);
	var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var is_email=re.test(input.val());
	if(is_email){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

/*Input Validation - Job*/
$(function () {  
$('#AgeRe').click (function () {  
if ($('#chkterms').is(':checked')) { }  
else {  
var S = confirm("Read our terms and conditions!");
if(S == true){
window.open("Images/Terms_And_Conditions.pdf");	
}
}})  
}); 

$('#txtName').on('input', function() {
	var input=$(this);
	var is_name=input.val();
	if((is_name != '') || (is_name!= null)){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

$('#txtPNum').on('input', function() {
	var input=$(this);
	var re =/^()+$/;
	var is_num=re.test(input.val());
	if(is_num){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

$('#txtLNIC').on('input', function() {
	var input=$(this);
	var re =/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var is_email=re.test(input.val());
	if(is_email){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

$('#txtCV').on('input', function() {
	var input=$(this);
	var CV=input.val();
	if((CV != '') || (CV!= null)){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

/*Input Validation - Contact*/
$('#txtFName').on('input', function() {
	var input=$(this);
	var is_Fname=input.val();
	if((is_Fname != '') || (is_Fname!= null)){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

$('#contact_email').on('input', function() {
	var input=$(this);
	var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var is_email=re.test(input.val());
	if(is_email){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

$('#txtSubject').on('input', function() {
	var input=$(this);
	var is_Sub=input.val();
	if((is_Sub != '') || (is_Sub!= null)){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});

$('#txtMessage').keyup(function(event) {
	var input=$(this);
	var message=$(this).val();
	console.log(message);
	if((message != '') || (message!= null)){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}	
});


//Jquery Methods Ends



//Ajax Methods Starts
function showHintF(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("Results").innerHTML = "";
    return;
  }

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Results").innerHTML = this.responseText;
    }
 };
	
  xhttp.open("GET", "JobData.php?F="+str, true); 
  xhttp.send();   
}

$(document).ready(function(){
   $.ajax({
        url:'readJob.php',
        type:'GET', 
        data:"parameter=some_parameter",
       success:function(data)
       {
              $("#Results").html(data);
           }
    });
});
//Ajax Methods Ends
