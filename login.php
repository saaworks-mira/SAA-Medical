<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.js"></script>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<style>
  
/* li a:hover  {background-color: blue} commented out as per shobha */

 ul > li a {
    color: #337ab7;
}

.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}
  .btn-round {border-radius:20px}
  
</style>
<script type="text/javascript">
 
  
$(document).ready(function(){   

 document.getElementById("idlogmsg").innerHTML="";       
 $("#idlogmsgrow").addClass('hidden') 
 
 $("#idusr,#idpsw").focusin(function(){
   document.getElementById("idlogmsg").innerHTML=""; 
   $("#idlogmsgrow").addClass('hidden')  
});
  
 $( "#idbtnlog" ).on('click',function(){           // here form is loaded upon main menu click
   
   vpasswd=document.getElementById("idpsw").value; 
   vuser=document.getElementById("idusr").value; 
   
   if (vuser.length ==0 || vpasswd.length==0) {
      document.getElementById("idlogmsg").innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid userid/password"; 
       $("#idlogmsgrow").removeClass('hidden') 
      }
   else 
     { vuser=vuser.trim();vpasswd=vpasswd.trim();
    $.post("jqusrpw.php",
    { puser:vuser, ppasswd:vpasswd},
    function(result, status){
      resultdata = JSON.parse(result)
    if (status == "success") {         
      if (!resultdata.succfail) { 
//       document.getElementById("idlogmsg").innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid userid/password"; 
         document.getElementById("idlogmsg").innerHTML=resultdata.msg
       $("#idlogmsgrow").removeClass('hidden') 
      }
      else {    // valid user-pw
       document.getElementById("idlogmsg").innerHTML=""; 
      $("#idlogmsgrow").addClass('hidden')  
      $( "#idlogform" ).submit();
       }
    }  // successful ajax call
    } // function
   )    //.post 
  }  
 });
 
}) 

</script>
</head>
<body>
  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM MEDICAL RECORDS </h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>
  
  <div class="control-group">&nbsp;</div>
  <div class="control-group">&nbsp;</div>
  
    
<div id="idlogin" class="container">
   <form id="idlogform" class="form-horizontal" name="nmlogform" action="ashrammed.php" method="post"  role="form">
     
   <div class="row">      
 <label class="control-label text-info col-sm-offset-3 col-sm-1" for="idusr">
   
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login:</label> 
     <div class="col-sm-3 form-group"> 
       <INPUT type ="text" class="form-control" id="idusr" name ="nmusr"></INPUT>
        <div class="help-block with-errors"></div>
            
     </div>
   </div>
   
   <div class="row">      
      <label class="control-label text-info  col-sm-offset-3 col-sm-1" for="idpsw">&nbsp;Password:</label> 
     <div class="col-sm-3 form-group"> 
       <INPUT type ="password" class="form-control" id="idpsw" name ="nmpsw"></INPUT>
        <div class="help-block with-errors"></div>     
     </div>
   </div>
       
     <div class="row form-group">
    <div class="col-sm-offset-4">
    <label class="col-sm-1 control-label"></label>
     <div class="col-sm-2">
       <Input type="button" class="form-control btn btn-success btn-round" name="nmbtnlog" id="idbtnlog"  value= "Log in"></Input>
     </div>
    </div>
    </div>
   <div id="idlogmsgrow" class="row form-group hidden">
       <div  class="col-sm-offset-4 col-sm-4 text-danger"><h4 id="idlogmsg"></h4></div> 
    </div>
       
 
 </form>  
 </div>    
     
</body>
</html>