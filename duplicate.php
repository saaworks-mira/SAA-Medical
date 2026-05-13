
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
   <script src="jquery.maskedinput.js" type="text/javascript"></script>
 
<style>
  
/* li a:hover  {background-color: blue} commented out as per shoba */

 ul > li a {
    color: #337ab7;
}
/*
a.cursor-help {
    cursor:help
  }
*/  
.req .control-label:after {
  content:"*";
  color:red;
  }
  
fieldset {
    border: 1px  groove #000 !important;

   padding: 0 0.4em 1em .7em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
} 
  
  .vtop {margin-top:6%;vertical-align:top}
  .vtop1 {margin-top:1%;}  
  .vtop2 {margin-top:14%;}
  
.cursor-help + .tooltip > .tooltip-inner {
      background-color: #73AD21;
      color: #FFFFFF;
      border: 1px solid green;
      padding: 15px;
      font-size: 14px;
}  
.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}

</style>

<script type="text/javascript">
  
    function getage(dobval) { 
   var dobval=document.getElementById("iddob").value
 
  var today = new Date();
  
   var curr_date = today.getDate();
   var curr_month = today.getMonth() + 1;
   var curr_year = today.getFullYear();

  
   var birth_date = parseInt(dobval.substr(0,2))
   var birth_month = parseInt(dobval.substr(3,2))
   var birth_year = parseInt(dobval.substr(6,4))
 
 
   if (curr_month == birth_month && curr_date >= birth_date){
     var agetemp = parseInt(curr_year-birth_year)}
   
                 
 document.getElementById("idage").value = agetemp;  
  
   if (curr_month == birth_month && curr_date < birth_date){
      var agetemp = parseInt(curr_year-birth_year-1)}
   
 document.getElementById("idage").value = agetemp;  
  
   if (curr_month > birth_month) { 
  var agetemp = parseInt(curr_year-birth_year)}
      
  document.getElementById("idage").value = agetemp; 
  
   if (curr_month < birth_month){ 
     var agetemp = parseInt(curr_year-birth_year-1)}
      
      document.getElementById("idage").value = agetemp;
    }
  
  
  
   function checkdate(elmid,x)  
  {  
    
    var dobinp=document.getElementById(elmid).value 
     
        var dobinpdd=parseInt(dobinp.substr(0,2))
        if (!dobinpdd) {
          document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
        var dobinpmm=parseInt(dobinp.substr(3,2))
         if (!dobinpmm) {document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
        var dobinpyyyy=parseInt(dobinp.substr(6,4))
        if (!dobinpyyyy) {document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
        if (dobinpdd < 1 || dobinpdd > 31) {
            document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
        if (dobinpmm < 1 || dobinpmm > 12) {
             document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
        if (dobinpyyyy < 1920  || dobinpyyyy > 2099) {
            document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
       if (dobinpdd == 31 && !(dobinpmm == 1 || dobinpmm == 3 || dobinpmm == 5 || dobinpmm == 7 || 
                               dobinpmm == 8 || dobinpmm == 10 || dobinpmm == 12)) {
           document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
    
      var leapyear = dobinpyyyy % 4
  if (dobinpmm == 2) {
      if ( dobinpdd > 29) {
                 document.getElementById(thiserrid).innerHTML ="It is feb,correct the date"      
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;}
    
        else {
        if ((dobinpdd==29) && !(leapyear==0)){
         document.getElementById(thiserrid).innerHTML ="It is not leap year,correct the date"      
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
            return false;}; 
              
      }
      }
    
          document.getElementById(thiserrid).innerHTML = " "
         fieldflags[x]="Y"; 
         $('#'+thiserrid).addClass('hidden') 
  }      
  
  function checknumeric(elmid,x) {
  var temp=document.getElementById(elmid).value;
    var   thiserrid=elmid+"err";
      if (isNaN(temp)) { 
        
        document.getElementById(thiserrid).innerHTML = "Invalid!"       
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
      }
   else {
         document.getElementById(thiserrid).innerHTML = " "
         fieldflags[x]="Y"; 
         $('#'+thiserrid).addClass('hidden') 
         }
   
}  
   function checklimit(elmid,flower,fhigher,x) {
         
     
   var  errid=elmid+"err";
 // var varid=this.id
//if ( varid == "yourid declared as input type = number" ) 
        var temp=document.getElementById(elmid).value 
         if (temp < flower || temp > fhigher) {
          document.getElementById(errid).innerHTML = "Enter between" + flower +"and" + fhigher 
              $('#'+errid).removeClass('hidden')
               fieldflags[i]="N";
           }
      else {
         document.getElementById(errid).innerHTML = " "
         fieldflags[x]="Y"; 
         $('#'+errid).addClass('hidden') 
         }
         }  
  
function initallfields() {
           for (i = 0; i < allfields.length; i++) {               // clear all errors
                var idvar=allfields[i]+'err'
               $('#'+idvar).innerHTML=" "
               $('#'+idvar).addClass('hidden')
               fieldflags[i]="N";
                }
      document.getElementById("idpatinpconf").value="";  
     //$('#idpatconfrow').addClass('hidden') // show confirm
     $('#idpatmsgrow').addClass('hidden')
     $('#idname,#idage,#sex,#idht,#idwt,#idallergy,#idhistory').val('');
     
  $('#idbldgrp,#idsex,#idcatg').val('Z'); 
}
  
$(document).ready(function(){
  //  allfields = ["idname","idsex","idage", "iddob","idcatg","idbldgrp","idallergy", "idaddress","idhistory" ,"idht", "idwt"];  24-11-16
  allfields = ["idname","idsex","idage", "iddob","idcatg", "idaddress"];
   fieldflags=[]
   initallfields()
  
//  $("#iddob").mask("99/99/9999",{placeholder:"dd/mm/yyyy"}); 
 
 $('[data-toggle="tooltip"]').tooltip();
  
 $(document).on('keypress','#iddob', function(e){ 
 var thisid=this.id
 if (e.which < 48 || e.which > 57)
    { 
      e.preventDefault();return;  
   }

if (document.getElementById(thisid).selectionStart == 2 || document.getElementById(thisid).selectionStart == 5 ) {
    document.getElementById(thisid).value=document.getElementById(thisid).value+'/';
   }  

}) 

$(document).on('blur','#idname,#idage,#idsex,idname, #iddob, #idcatg,  #idaddress', function(){   
        
   var x   
   
   var element = document.getElementById(this.id); 
   thisid = this.id; thiserrid=thisid+'err';
   x = allfields.indexOf(thisid);
  if(element.tagName == 'INPUT'  || element.tagName == 'TEXTAREA') {
    
       if (!(document.getElementById(thisid).value)) { 
        
           document.getElementById(thiserrid).innerHTML = "Invalid!"
           
           fieldflags[x]="N";
            $('#'+thiserrid).removeClass('hidden') 
           }
        else {
         document.getElementById(thiserrid).innerHTML = ""
         fieldflags[x]="Y";         
         }
   }
    if(element.tagName == 'SELECT') {                                            // added by vikas from here till 
        
            if (document.getElementById(thisid).selectedIndex == 0) {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden') 
             
              fieldflags[i]="N";}
           else {
             
              document.getElementById(thiserrid).innerHTML = " "
              $('#'+thiserrid).addClass('hidden') 
              fieldflags[i]="Y";
             }
   
      }                      
  var varid=this.id
  if ( varid == "idwt" ) {
         checknumeric(varid,x) } 
    
  if ( varid == "iddob" ) {  // if dob
       checkdate(varid,x) } // call checkdate. If invalid
  
    if(varid=="idht"){
    checklimit(varid,1,300,x)
  }
  
     if(varid=="idwt"){
    checklimit(varid,5,250,x)
  }
   if (varid="iddob"){
    getage(varid)
   }
 }) 
  
 

 
$(document).on('click','#idpatbtnconf', function (e) {
  
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {

        document.getElementById('idpatinpconf').value = "N"
// check fields and display error if the filed has never been entered or had focus
//        
       
        for (i = 0; i < allfields.length; i++) {
        var  id2check=allfields[i]
        
         var element = document.getElementById(id2check);
          var thiserrid= id2check +'err';
         if(element.tagName == 'INPUT'  || element.tagName == 'TEXTAREA') {         
           if (!(document.getElementById(id2check).value)) { 
             
              document.getElementById(thiserrid).innerHTML = "Invalid!"
             $('#'+thiserrid).removeClass('hidden') 
              fieldflags[i]="N";}
            else {
              
              document.getElementById(thiserrid).innerHTML = " "
             $('#'+thiserrid).addClass('hidden') 
              fieldflags[i]="Y";
           }
         } 
 // moved the select block inside the for loop. it was outside by mistake        
     if(element.tagName == 'SELECT') {
            if (document.getElementById(id2check).selectedIndex == 0) {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden') 
             
              fieldflags[i]="N";}
           else {
             
              document.getElementById(thiserrid).innerHTML = " "
              $('#'+thiserrid).addClass('hidden') 
              fieldflags[i]="Y";
             }
          }  //endof  select     
        } // end for
      
           
     if (fieldflags.indexOf("N") != -1) {
        return;
     }   
      
      var  elmname=document.getElementById("idname").value         
     var  elmdob=document.getElementById("iddob").value 
     var  elmage=document.getElementById("idage").value 
     var  elmsex=$("select#idsex").val() 
     var  elmcatg=$("select#idcatg").val() 
     var elmaddress = document.getElementById("idaddress").value  
     var elmhistory= document.getElementById("idhistory").value 
     var  elmht=document.getElementById("idht").value 
     var  elmwt=document.getElementById("idwt").value              
     var  elmbldgrp=$("select#idbldgrp").val() 
     if (document.getElementById("idallergy").value == "") {
            var  elmallergy="none"}
       else {
      var  elmallergy=document.getElementById("idallergy").value }
   
       
    $.post("ip_newpatadd.php",
    { pname: elmname, pdob: elmdob, page: elmage, psex: elmsex, pcatg: elmcatg,  
     pbldgrp: elmbldgrp, pht: elmht, pwt: elmwt, pallergy: elmallergy, phistory: elmhistory, paddress: elmaddress},
    function(result, status){
   
    if (status) {
    
      resultdata = JSON.parse(result)
      
      if (!resultdata.succfail) {   // if insert  a problem
       
        msg='Program terminating with error'+ resultdata.msg
        alert(msg)
        alert(result)
         alert(" kindly contact programmer")
           $(document).off()
         return;}  
     
       $("#idpatconfrow").addClass('hidden') 
       document.getElementById("idpatmsg").innerHTML = resultdata.msg;
       $("#idpatmsgrow").removeClass('hidden')  
        }
        
       else {
        msg='Program terminating with error '+ status
        
         alert(msg)
        
         alert(" kindly contact programmer")
       $(document).off()
         return;
      }
     
   })   //  end post     
   } // end if y or Y          
})
 


$(document).on('click','#idpatbtncan, #idpatbtncont',function(){   // if cancel then set option to view and init all fields 
         
          
          location.href = "ashrammed.php";      // put ashrammed.php in quotes. Earlier it was not...vikas
          
 })
})   //ready
        
   

  
</script>
</head>
<body>
  


  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM INPATIENT RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>Patient Profile Entry</strong></h4>
     </div> 
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="ashrammed.php" > <h4 class="pull-right"><strong>Return to Main Menu</strong></h4></a>
     </div>
   </div>
       
    <div class="control-group">&nbsp;</div> 
     <fieldset class="scheduler-border"> 
       <legend class="scheduler-border">ENTRY DETAILS:</legend>
   <div class="row">
     
    <div class="req col-sm-offset-1  col-sm-3">
    <label for="idname">Patient Name:</label>
      
    <input type="text" id="idname" name="name"  class="form-control">
       <span class="text-danger" id="idnameerr"></span> 
     </div>
       
    

       <div class="control-group"></div>
     
   
     <div class="req col-sm-2">
        <label class="control-label" for="iddob">Dt.of Birth:</label>
     <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob" placeholder="dd/mm//yyyy">
       <span class="text-danger" id="iddoberr"></span>
       </div>
     <div class="req col-sm-1">
        <label class="control-label" for="idage">Age:</label>
     <INPUT type ="number" min="1" max="120" class="form-control" id="idage" name ="nmage" >
        <span class="text-danger" id="idageerr"></span>
     </div>
     <div class="req col-sm-1">
        <label class="control-label" for="idsex">Sex:</label>
       <select id="idsex" name="nmsex"  class="form-control">
       <option value="Z"  disabled selected></option>
        <option>M</option>
        <option>F</option>
       </select>
       <span class="text-danger" id="idsexerr"></span>
     </div>
        <div class="req col-sm-1"> 
    <label class="control-label" for ="idcatg">Category:</label>
      <select id="idcatg" name="nmcatg"  class="form-control ">
        <option value="Z"  disabled selected></option>
        <option value="A">A</option>
        <option value="NA">NA</option>
    </select>
       <span class="text-danger" id="idcatgerr"></span>  
    </div> 
       
     
     </div> 
       <div class="control-group">&nbsp;</div>
 <div class="form-group"> 
   <div class="req col-sm-offset-1 col-sm-2"> 
    <label class="control-label" for = "idbldgrp">Bl.Group:</label>     
      <select id="idbldgrp" name="nmbldgrp"  class="form-control ">
        <option value="Z"  disabled selected></option>   <!-- added by vikas --> 
        <option value="NK">Not Known</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
         <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option> 
       </select>
       <span class="text-danger" id="idbldgrperr" ></span>
       
    </div>
   <div class="col-sm-2 ">
        <label class="control-label" for="idht">Ht(cms): </label>
       <INPUT type ="number" min="1" max="300.00" class="form-control" id="idht" name ="nmht" >
       <span class="text-danger" id="idhterr"></span>
     </div>
     <div class="col-sm-1 ">
        <label class=" control-label" for="idwt">Wt:</label>
       <!--INPUT type ="number" max="250.00" class="form-control" id="idwt" name ="nmwt"--commented by vikas and added below --> 
        <INPUT type ="text" class="form-control" id="idwt" name ="nmwt"> 
       <span class="text-danger" id="idwterr"></span>
     </div>
       
   </div> 
    
       <div class="control-group"></div>
<div class="row form-group">        
   
     <div class="req col-sm-offset-1 col-sm-3 form-group">
        <label class="control-label">Address :</label> 
       <textarea class="form-control" rows="4" id="idaddress" name ="nmaddress" value=""></textarea>
       <span class="text-danger" id="idaddresserr" ></span>
       </div>
    
            
      <div class="col-sm-3 form-group">
        <label class="control-label">Allergy:</label>
       <textarea class="form-control" rows="4" id="idallergy" name ="nmallergy"></textarea>
        <span class="text-danger" id="idallergyerr"></span> 
     </div>
     <!-- <div class="control-group"></div> -->
    
    
         
       <div class=" col-sm-5 form-group">
        <label class="control-label">Pt History :</label>
       <textarea class="form-control" rows="8" id="idhistory" name ="nmhistory" value=""></textarea>
       <span class="text-danger" id="idhistoryerr" ></span>
     </div>
      </div>
    
    </fieldset>  
    <div class="control-group">&nbsp;&nbsp;</div> 
    <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button" onclick="location.href='ashrammed.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">
        
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click  Confirm to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
         <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" ></INPUT>
        </div>
       </div> 
       <div class="col-sm-2"> <!-- col-sm/offset-2 col-sm-2 --> 
          
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
    <a class="cursor-help" href="#" data-toggle="tooltip" data-placement="top" title="Information to be provided here">                                                             
          <span class="glyphicon glyphicon-question-sign"></span>  
           </a>          
      </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
       <div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <input type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue">         
       </div>   
 </div>          
 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
      
    </div>
 
</form>
 </div>
</body>
</html>
 
     