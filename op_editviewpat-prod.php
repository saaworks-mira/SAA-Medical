<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
 <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>2405-->
  
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">13/5/2019-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>13/5/2019-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
 <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>13/5/2019-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script 13/5/2019 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>  
 
  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>13/05/19-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>

 
<style>
  
/* li a:hover  {background-color: blue} commented out as per shoba */

@media print {
  [class*="col-sm-"] {
    float: left; 
  }
}
 ul > li a {
    color: #337ab7;
}
.req .control-label:after {
  content:"*";
  color:red;
  }
/*
a.cursor-help {
    cursor:help
  }
*/  
fieldset {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
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
/*
a.cursor-help {
    cursor:help
  }
*/  

.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}
.wdth {
    max-width:80%;
}
</style>

<script type="text/javascript">
	
	 var visitdrpdwn=false; var patientname=[];var patientid=[];
   getpatients() 

function getpatients()  {

  // get all drugs
      $.post("ph_getallpatients.php", 
        function(result, status){ 
    
        if (status) {
       
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       patientname=fields.patientname; patientid=fields.patientid; 
     
   }  // end good status
      
 })  // end post    
}   

	function getage(x) { 
   var dobval=document.getElementById(x).value
 
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
	

	
function checkdate(elmid)   {
	 
		var today = new Date();
     
   var curr_year = today.getFullYear();
    var thisid=elmid; var thiserrid=thisid+'err';
    var dobinp=document.getElementById(elmid).value 
     
        var dobinpdd=parseInt(dobinp.substr(0,2))
        if (!dobinpdd) {
					$('#'+thiserrid).removeClass('hidden')
          document.getElementById(thiserrid).innerHTML = "Invalid!"              
             
            return false;};
        var dobinpmm=parseInt(dobinp.substr(3,2))
         if (!dobinpmm) {document.getElementById(thiserrid).innerHTML = "Invalid!"       
            $('#'+thiserrid).removeClass('hidden') 
            return false;};
        var dobinpyyyy=parseInt(dobinp.substr(6,4))
        if (!dobinpyyyy) {
					$('#'+thiserrid).removeClass('hidden') 
					document.getElementById(thiserrid).innerHTML = "Invalid!"       
            
            return false;};
        if (dobinpdd < 1 || dobinpdd > 31) {
					 $('#'+thiserrid).removeClass('hidden')
            document.getElementById(thiserrid).innerHTML = "Invalid Date!"       
            
            return false;};
        if (dobinpmm < 1 || dobinpmm > 12) {
					 $('#'+thiserrid).removeClass('hidden') 
             document.getElementById(thiserrid).innerHTML = "Invalid Month!"       
           
            return false;};
        if (dobinpyyyy < 1910  || dobinpyyyy > 2099) {
					  $('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML = "Invalid Year!"       
          
            return false;};
		    if (dobinpyyyy > curr_year) {
					$('#'+thiserrid).removeClass('hidden')
            document.getElementById(thiserrid).innerHTML = "Invalid Year!"       
            
					            return false;};
		   
       if (dobinpdd == 31 && !(dobinpmm == 1 || dobinpmm == 3 || dobinpmm == 5 || dobinpmm == 7 || 
                               dobinpmm == 8 || dobinpmm == 10 || dobinpmm == 12)) {
				 $('#'+thiserrid).removeClass('hidden') 
           document.getElementById(thiserrid).innerHTML = "Invalid Year!"       
            
            return false;};
    
      var leapyear = dobinpyyyy % 4
      if (dobinpmm == 2) {
       if ( dobinpdd > 29) {
				  $('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML ="It is feb,correct the date"      
           
            return false;}
    
        else {
        if ((dobinpdd==29) && !(leapyear==0)){
					 $('#'+thiserrid).removeClass('hidden') 
         document.getElementById(thiserrid).innerHTML ="It is not leap year,correct the date"      
           
            return false;}; 
              
      }
   }
    
         document.getElementById(thiserrid).innerHTML = " "
         $('#'+thiserrid).addClass('hidden') 
				 return true;
  }      
  
  function checknumeric(elmid,x) {
  var temp=document.getElementById(elmid).value;
  var   thiserrid=elmid+"err";
      if (isNaN(temp)) { 
         $('#'+thiserrid).removeClass('hidden') 
        document.getElementById(thiserrid).innerHTML = "Invalid!"       
           
      }
   else {
         document.getElementById(thiserrid).innerHTML = ""
         $('#'+thiserrid).addClass('hidden') 
         }
   
}    
function checklimit(elmid,flower,fhigher) {
   var  errid=elmid+"err";
        var temp=document.getElementById(elmid).value 
         if (temp < flower || temp > fhigher) {
					   $('#'+errid).removeClass('hidden')
          document.getElementById(errid).innerHTML = "Invalid : Range is between "+flower+" and "+ fhigher
            
           }
      else {
         document.getElementById(errid).innerHTML = " "
         $('#'+errid).addClass('hidden') 
         }
} 
	
function freezefields() {     // this will freeze all the fields and make it readonly after insert or update when the continue button shows
    $('#iddobchk,#idname,#idage, #iddob, #idht,#idwt, #idallergy,#idhistory,  #idaddress').prop('readonly', true);
         $('#identrypat, #idsex, #idcatg, #idbldgrp').prop('disabled', 'disabled');
}

  
function initallfields() {    
      
  //  $('#idage').prop('readonly', true); 
    
     $('[id$=err]').each(function(i, selected){ 
     var thisid=this.id 
		 document.getElementById(thisid).innerHTML="";
		 })		 
	   $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idallergy,#history,#idaddress').val('');
   //  $('#idbldgrp,#idsex,#idcatg,#iddob,#idht,#idwt,#idage,#idhistory,#idallergy,#idaddress').prop('readonly', true); 
	   
      $('#idrecord').addClass('hidden') // show confirm
     
			
}  
  
$(document).ready(function(){
 document.getElementById('idtextentrypat').value = "";document.getElementById('idtextentrypaterr').innerHTML = "";
	 $('#identrypat').hide()
  initallfields()
  $("#idpatmsgrow").addClass('hidden') 
//  $('[data-toggle="tooltip"]').tooltip();
               
$(document).on( "blur", '#idtextentrypat', function(e) { 
	//
	var thisid=this.id;var thisiderr=thisid+'err'
	document.getElementById(thisiderr).innerHTML = "";
	 var textinp = (document.getElementById(thisid).value).trim()
	 var dropdownid=thisid.substr(0,2)+thisid.substr(6)
	       if (textinp == "") {  //  if
				   if (!visitdrpdwn) {   // if they have entered null or few chars on the input patient and then directly moved to another field 
					                       // and not the dropdown then visitdrpdwn will be false and we will close the dropdown 
						  $("#"+dropdownid).hide();
						 
             return;}
				 }
       else {      // if user has entered chars then check if that text is one of the dropdowns
				  if (!visitdrpdwn) { 
				 var upperCaseNames = patientname.map(function(value) {
         return value.toUpperCase();
        });             
        var pos = upperCaseNames.indexOf(textinp.toUpperCase());
        if(pos === -1) {
           document.getElementById(thisiderr).innerHTML = "This Patient does not exist";}
         else {document.getElementById(dropdownid).selectedIndex = pos;document.getElementById(thisiderr).innerHTML = "";}   
         $('#'+dropdownid).hide();}
      }
			
}); 
$(document).on( "mousedown", '#identrypat', function(e) { 
	visitdrpdwn=true
}); 
$(document).on('keyup click', '#idtextentrypat',  function(e) {
   visitdrpdwn=false
  var thisid=this.id;
    var thisiderr=thisid+'err'
		
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    // idsel-0101err or whichever row it is
  
   $("#"+thisselid).empty();
   var txt=document.getElementById(thisid).value;
  txt=txt.trim(); //remove spaces before and after text
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length < 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = ""
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var patientsfound=false;
     
     for (i = 0; i < (patientname.length); i++) {
  
   	var   pos=patientname[i].search(regvar)  
      if (pos != -1) { //search successful
         patientsfound=true;
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
         var  opt = patientname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = patientid[i]
           dropdown.appendChild(el);
				   $("#"+thisselid).show();                                                           // format is id123--nameceftum--strengthabc--typetab           
      }     
      }  //end for
 
  if (!patientsfound) {
    $('#'+thisselid).hide();
     document.getElementById(thisiderr).innerHTML="Patient does not exist"; }

})	

$(document).on( "change", '#identrypat', function(e) {

  var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  var thistextiderr=thistextid+'err'
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  document.getElementById(thistextiderr).innerHTML="" 
	
  $('#'+thisid).hide()
   
     var valopt= $('#identrypat').val(); 
     
      var patid = valopt;
      $.post("op_viewpatdata.php",
      { pid: patid},
      function(result, status){ 
				
        if (status) {
       var fields = JSON.parse(result); 
           if (!fields.succfail) { // if Insert or mod was a problem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
				 alert("kindly contact programmer")
				 $(document).off()
         return;}
            initallfields()
       $('#idrecord').removeClass('hidden')
      
       
        document.getElementById("idname").value=fields.name;
        document.getElementById("idsex").value=fields.sex;
        document.getElementById("idcatg").value=fields.catg;         
        document.getElementById("idbldgrp").value=fields.bldgrp; 
        document.getElementById("idht").value=fields.ht;
        document.getElementById("idwt").value=fields.wt;         
        document.getElementById("iddob").value=fields.dob; 
        document.getElementById("idage").value=fields.age; 
        document.getElementById("idallergy").value=fields.allergy; 
        document.getElementById("idaddress").value=fields.address;
          document.getElementById("idhistory").value=fields.history;
           $('#idpatconfrow').removeClass('hidden') // show exit
         if (document.getElementById('iddob').value !="")
				{  $('#idage').prop('readonly', true);
				    $('#idname').prop('readonly', true);          //shoba's
				}   
                 
   }  // end good status
      
      })  // end post      
})      
         
	
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

$(document).on('blur','#idname,#idage,#idsex,#iddob, #idcatg,   #idaddress', function(){   
        
  var thisid = this.id; var thiserrid=thisid+'err';
	if(thisid == 'idcatg' || thisid == 'idsex') {
          if (document.getElementById(thisid).selectedIndex == 0) {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden')          
						}
           else {
             
              document.getElementById(thiserrid).innerHTML = " "
              $('#'+thiserrid).addClass('hidden') 
             }
		   return;
       }   
	 if ( thisid == "idaddress" || thisid == "idage") {
    if (document.getElementById(thisid).value == "") { 
			  document.getElementById(thiserrid).innerHTML  = "Invalid " 
              $('#'+thiserrid).removeClass('hidden')
           }
    else {
       document.getElementById(thiserrid).innerHTML = " "
        $('#'+thiserrid).addClass('hidden') 
         }
		 return;
		}
	
	if (thisid == "idname") {
    if (document.getElementById(thisid).value == "") { 
			$('#'+thiserrid).removeClass('hidden')
			  document.getElementById(thiserrid).innerHTML = "Invalid " 
              
           }
      else {
         document.getElementById(thiserrid).innerHTML = " "
         $('#'+thiserrid).addClass('hidden') 
         }
		 return;
		}
  if ( thisid == "idwt" || thisid == "idht") {
       if (document.getElementById(thisid).value == "") { 
          document.getElementById(thiserrid).innerHTML = ""
          $('#'+thiserrid).addClass('hidden')  
         return;}
		   if(thisid=="idht"){
         checklimit(thisid,1,300)
         }
       if(thisid=="idwt"){
         checklimit(thisid,5,250)
        } 
		return;
  }       
    
     if ( thisid == "iddob" ) {  // if dob
			
       if (document.getElementById('iddob').value !="")
			 {if (checkdate(thisid))
			    { document.getElementById('iddoberr').innerHTML = "";document.getElementById('idageerr').innerHTML = ""
						getage(thisid);  $('#idage').prop('readonly', true);}
			 }
			   else{
				$('#idage').prop('readonly', false);
			 document.getElementById("idage").value =""
			 document.getElementById("idageerr").innerHTML = "" 
				document.getElementById("iddoberr").innerHTML = ""}
				
			
	   // call checkdate only when dob is given

		 }
	 
})						 			
 
$(document).on('click','#idpatbtnedit', function (e) {
  
 if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {

        document.getElementById('idpatinpconf').value = ""
								
				  
				 if(document.getElementById("idname").value ==""){					 
					 document.getElementById("idnameerr").innerHTML = "Invalid"
					  $("#idnameerr").removeClass('hidden')
						
				 } 
				 if(document.getElementById("idaddress").value ==""){					 
					 document.getElementById("idaddresserr").innerHTML = "Invalid!"
					  $("#idaddresserr").removeClass('hidden')
						
				 } 
			  if (document.getElementById('idsex').selectedIndex == 0) {  
              document.getElementById('idsexerr').innerHTML = "Invalid!"
              $('idsexerr').removeClass('hidden')  
							
						}
			
			if ((document.getElementById("idage").value =="") || (document.getElementById("idage").value <= 0)) {					 
					 document.getElementById("idageerr").innerHTML = "Invalid!"
					  $("#idageerr").removeClass('hidden')
					
				 } 
		/*	if(document.getElementById("iddob").value ==""){					 
					 document.getElementById("iddoberr").innerHTML = "Invalid"
					  $("#iddoberr").removeClass('hidden')
						
				 } */
			if (document.getElementById('idcatg').selectedIndex == 0) { 				 
					 document.getElementById("idcatgerr").innerHTML = "Invalid"
					  $("#idcatgerr").removeClass('hidden')
				 } 
			var fieldsvalid="Y"
       $('[id$=err]').each(function(i, selected){ 
         var temp = document.getElementById(this.id).innerHTML
         if (temp.indexOf("Invalid") != -1) {
           fieldsvalid="N";return }
    })
        if (fieldsvalid=="N") {			
          return } 
					
  
      var  elmname=document.getElementById("idname").value         
     var  elmdob=document.getElementById("iddob").value 
     var  elmage=document.getElementById("idage").value 
     var  elmsex=document.getElementById("idsex").value 
     var  elmcatg=document.getElementById("idcatg").value 
     var elmaddress=document.getElementById("idaddress").value  
     var elmhistory= document.getElementById("idhistory").value 
     var  elmht=document.getElementById("idht").value 
     var  elmwt=document.getElementById("idwt").value              
     var  elmbldgrp=document.getElementById("idbldgrp").value 
     if (document.getElementById("idallergy").value == "") {
            var  elmallergy="none"}
       else {
      var  elmallergy=document.getElementById("idallergy").value }
   
			 var valopt= $('#identrypat').val();
		
       var patid = valopt;
    $.post("op_patupdate.php",
    {pid: patid, pname: elmname, pdob: elmdob, page: elmage, psex: elmsex, pcatg: elmcatg,  
     pbldgrp: elmbldgrp, pht: elmht, pwt: elmwt, pallergy: elmallergy, phistory: elmhistory, paddress: elmaddress},
    function(result, status){
   alert(result)
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
			 freezefields() 
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


$(document).on('click','#idpatbtncan', function(){   // if cancel then set option to view and init all fields 
         
            document.getElementById('idtextentrypat').value = "";document.getElementById('idtextentrypaterr').innerHTML = "";
         //     document.getElementById("idinpadmdt").value="";
                initallfields()  
              $("#idpatconfrow,#idrecord").addClass('hidden')
          
})
	$(document).on('click','#idpatbtncont',function(){   // if cancel then set option to view and init all fields 
         
          
          location.href = "opdmenu.php";      // put ashrammed.php in quotes. Earlier it was not...vikas
          
 })
$(document).on('click','#idpatbtnprint', function(){   // if cancel then set option to view and init all fields 
         
              $("#rtmn").addClass('hidden')
              $("#idpatconfrow").addClass('hidden')
              window.print()
              $("#idpatconfrow").removeClass('hidden')
              $("#rtmn").removeClass('hidden')
})
$("input:radio[name=optradio]").click(function() {                //shoba editchange
        
    location.href="ph_opdpharma.php"
    
})
})  
  
</script>
</head>
<body>
<?php
	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
	?>


  <div class="container">    
<h1> </h1>
</div>
<div class="container">
	<img src="ma.jpg" class="img-responsive center-block">
	<h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OPD RECORDS </strong></h3>
		<hr style="border-top: 5px solid #ff0000 !important; " >

  <p></p>
</div>

<div id="idcontainer" class="container">
<form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>Edit Patient Profile </strong></h4></div> 
     <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradiopharma" name="optradio"><strong>PHARMACY</strong></label></div>
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>
     </div>
   </div>

    <div class="control-group">&nbsp;</div> 
   <div class="row ">
     <div id="idallpat" class="col-xs-2 col-sm-3"> 
   <label for="idtextentrypat" style="color: blue">Select Patient:</label>
				<INPUT type ="text" id="idtextentrypat" placeholder="Patient Name" class="cvvlong  form-control">
      <select select size="5" id="identrypat"  class="form-control">    
    </select><span class="text-danger" id="idtextentrypaterr"></span> 
    </div> 
<!-- admission here --> 
         
     </div>
  
<!-- admission here instead --> 
     <div class="control-group">&nbsp;</div>
     <div id="idrecord">
			    
     <Fieldset class="scheduler-border"> 
       <legend class="scheduler-border">EDIT PATIENT PROFILE:</legend>
       <div class="row">
       <div class="control-group"></div>
      <div class="req col-sm-2">
        <label class="control-label" for="idname">Name :</label>
			 <INPUT type ="text"  maxlength="30"  class="form-control" id="idname" name ="nmname" ></INPUT>  
				<span class="text-danger" id="idnameerr"></span> 
     </div>
 
     <div class="req col-sm-2">
        <label class="control-label" for="iddob">Date of Birth:</label>
			 <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob" placeholder="dd/mm/yyyy"></INPUT> 
			  <span class="text-danger" id="iddoberr"></span>
     </div>
     <div class="req col-sm-1">
        <label class="control-label" for="idage">Age:</label>
			 <INPUT type ="number" min="1" max="120" class="form-control" id="idage" name ="nmage" ></INPUT>
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
        <div class=" col-sm-1">
        <label class="control-label" for="idht">Ht: </label>
					<INPUT type ="number" min="1" max="300.00" class="form-control" id="idht" name ="nmht" ></INPUT>   
					 <span class="text-danger" id="idhterr"></span>
     </div>
     <div class="col-sm-2">
        <label class=" control-label" for="idwt">Wt:</label>
			 <INPUT type ="number" min="5" max="300.00"  class="form-control" id="idwt" name ="nmwt" ></INPUT>
			  <span class="text-danger" id="idwterr"></span>
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
				 
				  
      <div class="col-sm-2"> 
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
			 </div>
         <div class="control-group">&nbsp;</div>
          <div class="row">
						 <div class="req col-sm-offset-1 col-sm-4 form-group">
        <label class="control-label">Address : </label>
       <textarea class="form-control" rows="5" id="idaddress" name ="nmaddress" ></textarea>
							   <span class="text-danger" id="idaddresserr" ></span>
      </div>
     <div class="col-sm-5 form-group">
        <label class="control-label">Allergy:</label>
       <textarea class="form-control" rows="5" id="idallergy" name ="nmallergy"></textarea>
         </div>     
   </div>  
<div class="control-group">&nbsp;</div>
          <div class="row">
						<div class="col-sm-offset-1 col-sm-6 form-group">
        <label class="control-label" >History:</label>
       <textarea class="form-control" rows="10" id="idhistory" name ="nmhistory"></textarea>
         </div> 
	</div>  
					 </Fieldset>
				 
 <div class="control-group">&nbsp;</div>        
 <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
				 <Input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary" value= "E x i t"> </Input>       
       </div> 
	 <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click  Confirm to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
         <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" ></INPUT>
        </div>
       </div> 
	 <div class="col-sm-offset-2  col-sm-2">
      <INPUT type="button" id="idpatbtnedit" class="btn btn-primary" value="Edit  Patient Profile"></INPUT>         
       </div>
  
 </div> 
    <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
       <div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <INPUT type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue"></INPUT>
		
       </div>   
 </div>            
        </div>
 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
  
             
			
</form>
   
</div>
 
</body>
</html>
     