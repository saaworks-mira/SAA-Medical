<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.44/css/bootstrap-datetimepicker.min.css"-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.44/js/bootstrap-datetimepicker.min.js"></script-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
 
<style>
 .centerstrong {
    font-weight:bold !important;
    text-align: center !important;
    font-family: verdana !important;
    font-size: 16px !important;
    color: red !important;
  }  

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
/*    padding: 0 1.4em 1.4em 1.4em !important;
*/ 
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
	 .lgrouptest, .lgroupsel {
    max-height: 200px;
    overflow:auto; 
}

  
.lgrouptest  .list-group-item {  
  
  position: relative;  
  display: block;  
  padding: 10px 15px;  
  border: 1px solid #0000ff;  
}  
.lgroupsel .list-group-item {   
  position: relative;  
  display: block;  
  padding: 10px 15px;  
  border: 1px solid #00ff00;  
}  
	
</style>

<script type="text/javascript">
	 var visitdrpdwn=false; var patientname=[]; var patientid=[];    // vikas
	getpatients();       // vikas
	
function getpatients()  {     // vikas

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
   function getage() { 
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
  
    function getdate(elmid)  
	 
  {
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
         if (!dobinpmm) {$('#'+thiserrid).removeClass('hidden');document.getElementById(thiserrid).innerHTML = "Invalid!"       
             
            return false;};
        var dobinpyyyy=parseInt(dobinp.substr(6,4))
        if (!dobinpyyyy) { $('#'+thiserrid).removeClass('hidden') ;document.getElementById(thiserrid).innerHTML = "Invalid!"       
           
            return false;};
        if (dobinpdd < 1 || dobinpdd > 31) {
					 $('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML = "Invalid date!"       
           
            return false;};
        if (dobinpmm < 1 || dobinpmm > 12) {
					  $('#'+thiserrid).removeClass('hidden') 
             document.getElementById(thiserrid).innerHTML = "Invalid month!"       
            
            return false;};
        if (dobinpyyyy < 1910  || dobinpyyyy > 2099) {
					$('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML = "Invalid!"       
            
            return false;};
		    if (dobinpyyyy > curr_year) {
					 $('#'+thiserrid).removeClass('hidden')
            document.getElementById(thiserrid).innerHTML = "Invalid birth year"       
           
					            return false;};
		   
       if (dobinpdd == 31 && !(dobinpmm == 1 || dobinpmm == 3 || dobinpmm == 5 || dobinpmm == 7 || 
                               dobinpmm == 8 || dobinpmm == 10 || dobinpmm == 12)) {
				 $('#'+thiserrid).removeClass('hidden') 
           document.getElementById(thiserrid).innerHTML = "Invalid date!"       
            
            return false;};
    
      var leapyear = dobinpyyyy % 4
      if (dobinpmm == 2) {
       if ( dobinpdd > 29) {
				 $('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML ="Invalid date for feb"      
            
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
  
 function checkbp(elmid) {
    var str = document.getElementById(elmid).value;
    var patt = new RegExp("^[1-9][0-9]{1,2}\/[1-9][0-9]{1,2}$");
   
   var   thiserrid=elmid+"err";
  if (!patt.test(str)) {     
        document.getElementById(thiserrid).innerHTML = "Invalid !"   
            $('#'+thiserrid).removeClass('hidden') 
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
         $('#'+errid).removeClass('hidden')
         document.getElementById(errid).innerHTML = " "
         $('#'+errid).addClass('hidden') 
         }
}  
function freezefields() {     // this will freeze all the fields and make it readonly after insert or update when the continue button shows
  $('#idinpadmdt,#iddob,#idage,#idht,#idwt,#idbp,#idtemp,#idpulse,#idcomplaint,#idallergy,#idcf,#idresp,#idcaseno,#idbed').prop('readonly', true);   
     
     $('#idpat,#idbldgrp,#idsex,#idcatg,#idtreatdr,#idrefdr').prop('disabled', true); 

}
function initseltests() {    // remove all the items except the heading
    $("#testlist input:checkbox").each(function(index,element){ 
     $('#'+this.id).prop('checked', false);
    })
  $('#testsel > li').slice(1).remove()
}  
function initallfields() {
          
      document.getElementById("idpatinpconf").value="";  
      $('#idpatconfrow').addClass('hidden') // show confirm
      $('#idpatmsgrow').addClass('hidden')
 
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idcomplaint,#idallergy').val('');
     $('#iddob,#idage,#idht').prop('readonly', true); 
     var el=document.getElementById("idrefdr");
     el.selectedIndex=0
     var el=document.getElementById("idtreatdr");
     el.selectedIndex=0
     $('[id$=err]').each(function(i, selected){ 

    document.getElementById(this.id).innerHTML = ""
    $(this.id).addClass('hidden') 
  })
     $('#idbldgrp,#idsex,#idcatg').prop('disabled', true); 
     $("#idtreatdr option[value='Z']").prop("disabled",true);
}  
  
$(document).ready(function(){
  var fieldsvalid="Y"
  $('#identrypat').hide(); // vikas
  initallfields()   
  initseltests()
	document.getElementById("idtextentrypaterr").innerHTML= ""
	 document.getElementById("idtextentrypat").value= ""	
//  $("#idmaintchart,#idpatconfrow,#idpatmsgrow").addClass('hidden')
 // $('[data-toggle="tooltip"]').tooltip();

		
$(document).on('change','[id^=chk]', function (e) {  
// note that the checkbox has chk+testid as id and testname as value.    
    var thisid=this.id;  //  get id like chk5 or whatever it is
    var selid="sel"+thisid  // create id for select list so selchk5
    var testid =Number(thisid.substr(3))   // this will get the number 5 i.e testid
    
    if(!document.getElementById(thisid).checked) // if item has been unchecked then remove it
      { $('#'+selid).remove(); }
     else {     // insert in the right position of the selected list
     var desc='<li class="list-group-item" id=' + '"' +selid+  '">'+ document.getElementById(thisid).value+"</li>";  
     var  len=  $("#testsel li").length
    $("#testsel li").each(function(index,element){ 
      var eachid=this.id;
    
    var eachnum =Number(eachid.substr(6))  
  
    if (testid < eachnum) {
      $('#'+eachid).before(desc);
      return false;
      }
    if (index == len - 1) {
     $("#testsel").append(desc);}
      })
   }
})
$(document).on( "blur", '#idtextentrypat', function(e) {      // vikas
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
           document.getElementById(thisiderr).innerHTML = "This Patient does not exist";
					document.getElementById("idsex").value=""
         document.getElementById("idcatg").value=""
        document.getElementById("idht").value=""  //to keep the value empty  
        
					document.getElementById("idage").value=""
					
        document.getElementById("iddob").value=" "
      
        document.getElementById("idallergy").value=""} 
     
         else {document.getElementById(dropdownid).selectedIndex = pos;document.getElementById(thisiderr).innerHTML = "";}   
         $('#'+dropdownid).hide();}
      }
			
}); 

$(document).on( "mousedown", '#identrypat', function(e) {    // vikas
	visitdrpdwn=true
});		
		
$(document).on('keyup click','#idtextentrypat',  function(e) {
   visitdrpdwn=false
  var thisid=this.id;
   
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    // idsel-0101err or whichever row it is
  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty();
  var txt=document.getElementById(thisid).value;
     
  txt=txt.trim(); //remove spaces before and after text
//  var checkinput = /^[0-9a-zA-Z\s.-]+$/; 
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length < 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = "";
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var patientsfound=false;
     
     for (i = 0; i < (patientname.length); i++) {

   	var   pos=patientname[i].search(regvar)  
      if (pos != -1) { //search successful
         patientsfound=true;
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
         var  opt = patientname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = patientid[i]
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }     
      }  //end for
 
  if (!patientsfound) {
    $('#'+thisselid).hide();
     document.getElementById(thisiderr).innerHTML="Invalid Patient"; 
 document.getElementById(thisiderr).innerHTML = "This Patient does not exist";
					document.getElementById("idsex").value=""
         document.getElementById("idcatg").value=""
        document.getElementById("idht").value=""  //to keep the value empty  
        
					document.getElementById("idage").value=""
					
        document.getElementById("iddob").value=" "
      
        document.getElementById("idallergy").value=""} 
})
                 

$(document).on("change",'#identrypat',function(){

	 var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)   // vikas
  var thistextiderr=thistextid+'err'    // vikas
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()   // vikas
  document.getElementById(thistextiderr).innerHTML=""      // vikas
	
  $('#'+thisid).hide()
  var valopt=$('#'+thisid+' option:selected').val()
   
      var patid=valopt;
     $.post("op_newgetpatmaster.php", // $.post("patientmasterdata.php",
      { pid: patid},
      function(result, status){ 
      
        if (status) {
         var fields = JSON.parse(result); 
       
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         alert("kindly contact the programmer")
         return;}
             

        var datenow = new Date();
         
         $('#idinpopddt').datetimepicker({
         format: 'DD.MM.YYYY - hh: mm a',
         minDate: '04.24.1914',
         maxDate: '04.24.2064',
         sideBySide: true, 
         useCurrent: false,     
        defaultDate: datenow
       })  

       
         ptaddress=fields.address    
        
        $('#idbldgrp,#idsex,#idcatg').prop('disabled', false);
					
       $("select#idsex").val(fields.sex);
        $("select#idcatg").val(fields.catg);
        $("select#idbldgrp").val(fields.bldgrp);
         
        document.getElementById("idht").value=fields.ht;  //to keep the value empty  
        if(fields.dob == ""){
					document.getElementById("idage").value=fields.age}
					else{
        document.getElementById("iddob").value=fields.dob; 
        getage()}
        document.getElementById("idallergy").value=fields.allergy; 
       $('#idbldgrp,#idsex,#idcatg').prop('disabled', true);  
        
          
          document.getElementById("idpatinpconf").value="";  
           $('#idpatconfrow').removeClass('hidden') // show confirm  
                 
   }  // end good status
  else {
    msg='Program terminating with error '+ status
         alert(msg)
         return;
  }  
      
      })  // end post
 })      
  
$(document).on('blur','#idtreatdr',  function(){
          
  var thisid = this.id; thiserrid=thisid+'err';
  
  if (thisid == "idtreatdr") {
    if (document.getElementById(thisid).selectedIndex == 0) {      
           document.getElementById(thiserrid).innerHTML = "Invalid !"
            $('#'+thiserrid).removeClass('hidden')
            return;
           }
        else {
         document.getElementById(thiserrid).innerHTML = ""
         $('#'+thiserrid).addClass('hidden')  
         return;
         }
   return; 
  }
	})
/*$(document).on('blur','#idht,#idwt,#idbp, #idtemp,  #idtreatdr, #idpulse, #idresp',  function(){
  if ( thisid == "idwt" || thisid == "idht" || thisid == "idresp" ) {
       if (document.getElementById(thisid).value == "") { 
          document.getElementById(thiserrid).innerHTML = ""
          $('#'+thiserrid).addClass('hidden')  
         return;}
     if(thisid=="idht"){
       checklimit(thisid,60,300)
      } 
     if(thisid=="idwt"){
      checklimit(thisid,5,250)
      }
     if(thisid=="idresp"){
      checklimit(thisid,10,200)
      }
  }       
  if ( thisid == "idbp") {
      checkbp(thisid)
   }      
  
  if(thisid=="idpulse"){
    checklimit(thisid,20,150)
     }
  
  if(thisid=="idtemp"){
    checklimit(thisid,80,110)
     }
 
}) */
 
$(document).on('click','#idpatbtnconf', function (e) {
  
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {
         
        document.getElementById('idpatinpconf').value = ""
       
          if (document.getElementById("idtreatdr").selectedIndex == 0) {      
           document.getElementById("idtreatdrerr").innerHTML = "Invalid !"
            $('#idtreatdrerr').removeClass('hidden')
           
           }
           if (document.getElementById("idbp").value == "") {      
           document.getElementById("idbperr").innerHTML = ""
            $('#idbperr').removeClass('hidden')
           
           }
       if (document.getElementById("idpulse").value == "") {      
           document.getElementById("idpulseerr").innerHTML = ""
            $('#idpulseerr').removeClass('hidden')
            
           }
       if (document.getElementById("idtemp").value == "") {      
           document.getElementById("idtemperr").innerHTML = ""
             $('#idtemperr').removeClass('hidden')
           
           }
        fieldsvalid="Y"
       $('[id$=err]').each(function(i, selected){ 
      var temp = document.getElementById(this.id).innerHTML
      
       if (temp.indexOf("Invalid") != -1) {
          fieldsvalid="N" }
    })
        if (fieldsvalid=="N") {
          return }
       
     var  elmdob=document.getElementById("iddob").value 
     var  elmage=document.getElementById("idage").value 
     var  elmsex=$("select#idsex").val() 
     var  elmcatg=$("select#idcatg").val() 
 //    var elmaddress = ptaddress  
     
     var  elmht=document.getElementById("idht").value 
     var  elmwt=document.getElementById("idwt").value              
     var  elmbldgrp=$("select#idbldgrp").val() 
     var  elmbp=document.getElementById("idbp").value 
     var  elmtemp=document.getElementById("idtemp").value 
     var  elmpulse=document.getElementById("idpulse").value 
     var  elmresp=document.getElementById("idresp").value 
     var  elmcomplaint=document.getElementById("idcomplaint").value 
     var  elmcf=document.getElementById("idcf").value 
		  var  elmmedpresc=document.getElementById("idmedpresc").value 
     var  elmallergy=document.getElementById("idallergy").value 
     var  elmtreatdr=$("#idtreatdr option:selected").text()
     var sel=document.getElementById("idrefdr").selectedIndex;
     if (document.getElementById("idrefdr").options[sel].value == "Z") { var  elmrefdr =" "}
         else {  elmrefdr=$("#idrefdr option:selected").text()}
     var tempdt=document.getElementById("idinpopddt").value;
       var dtyyyymmdd=tempdt.substr(6,4)+tempdt.substr(3,2)+tempdt.substr(0,2)
       var  elmopddt=dtyyyymmdd
     var indxsel2 = document.getElementById("idtextentrypat").selectedIndex;                  
     var elmid=$('#identrypat option:selected').val();
     var elmname=$('#identrypat option:selected').text();
          var arrlab = [];
      var arrlabname = [];
     
       $("#testsel li").each(function(index,element){ 
       var eachid=this.id;     
       arrlab.push(eachid.substr(6))  // store testid

         
         var varlabname=document.getElementById(eachid.substr(3)).value  // get labname
        
         arrlabname.push(varlabname)  // put in array
         
       })
       arrlabname.splice(0, 1);  // remove 1st element
       arrlab.splice(0, 1);  // remove 1st element
       var labcount=arrlab.length;                          
      
    $.post("op_newopdadddb.php",
    { pname: elmname,  pid: elmid, pdob: elmdob, page: elmage, psex: elmsex, pcatg: elmcatg,  
     pbldgrp: elmbldgrp, pht: elmht, pwt: elmwt, pbp: elmbp, ptemp: elmtemp, ppulse: elmpulse,presp:elmresp, ptreatdr: elmtreatdr, 
     prefdr: elmrefdr, popddt: elmopddt, pallergy: elmallergy, pmedpresc: elmmedpresc, pcf:elmcf, 
     pcomplaint: elmcomplaint, parrlab:arrlab, parrlabname:arrlabname, plabcount:labcount},
    function(result, status){
    
    if (status) {
    
    var  resultdata = JSON.parse(result)
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg)
         alert("kindly contact programmmer")
          document.getElementById("idtextentrypat").value="";
              $('#idinpadmdt').val('');
              
              $(document).off()
               return;}  
     
        $("#idpatconfrow").addClass('hidden') 
        
 //      var patremove="idpat option[value='"+elmid+ "']";
 //      $('#'+patremove).remove();   
 //      $("select#idpat").val("Z");
 //       document.getElementById("idinpadmdt").value="";
 //       initallfields()   
        $("#idpatmsgrow").removeClass('hidden')
       document.getElementById("idpatmsg").innerHTML=resultdata.msg;        
       freezefields() 
       
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
         alert(msg)
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }
      
      
     
   })   //  end post     
   } // end if y or Y       
})   
  

$(document).on('click','#idpatbtncan, #idpatbtncont',function(){   // if cancel then set option to view and init all fields 
 /*          
              $("select#idpat").val("Z");
              document.getElementById("idinpadmdt").value="";
                initallfields()  
            
           $("#idclose").addClass('hidden')   
            // $("select#idpat").val("Z");
//              $('#idinpadmdt').val('');
             //   initallfields()  
*/             
          location.href = "opdmenu.php";
          
})
  
}) // ready event
  
</script>
</head>
<body>


<?php

$allpatnm=array(); $allpatid=array(); $alldrs=array(); $alltestnm=array(); $alltestid=array(); 

       $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for patient load"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   
     
 $sql = "SELECT patientid,name FROM patient  order by name";   // get all patient
             
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Patients"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          echo json_encode( $desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$allpatnm[]=$row["name"];$allpatid[]=$row["patientid"]; }  // get names and id of all patients
     
    }

$sql = "SELECT  docname FROM doctors";   // get all doctors
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Doctor"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          $conn->close(); exit();
       }
     if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) { $alldrs[]=$row["docname"];}  // get names and id of all patients
    }
	
	 $sql = "SELECT testid,testname FROM labtest ";   // get all tests
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Tests"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$alltestnm[]=$row["testname"];$alltestid[]=$row["testid"]; }  // get names and id of all tests
     
    }
 
  $conn->close();
?>  

  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
	<h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class="form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>OPD Visit Entry</strong></h4></div> 
      <div class="text-success">
          <a id="rtmn"  href="op_viewopdvisit.php" ><h5><strong> Click to View OPD VISIT </strong></h5></a>
            </div>
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 class="pull-right"><strong>Return to Main Menu</strong></h4></a>
     </div>
   </div>
   
    <div class="control-group">&nbsp;</div>
      
   <div class="row">
    
         <div id="idhdrallpt" class="col-sm-2"> 
     <label>PATIENT NAME:</label>
     <INPUT type ="text" id="idtextentrypat" placeholder="Type Patient Name" class="cvvlong  form-control">
      <select select size="5" id="identrypat"  class="form-control">  
     </select>  <span class="text-danger centerstrong" id="idtextentrypaterr"></span>
    </div> 
					
					 
     <div id="identeradmsn" class="req col-sm-3">
         <label class="control-label">OPD Date</label>
       
         <div class="input-group date" id="idopdt" >
					 <INPUT onkeydown="return false" id="idinpopddt" type="text" class="form-control" name ="nmopddt"></INPUT>
       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> 
      
      </div> 
      </div>
      
     </div>
<!-- admission here instead -->  
       <div class="control-group">&nbsp;</div>
     
    
       <fieldset class="scheduler-border"> 
       <legend class="scheduler-border">NEW OPD :</legend>
    <div class="row">
     
     <div class="col-sm-offset-1 col-sm-2">
        <label class="control-label" for="iddob">Date of Birth:</label>
			 <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob"></INPUT>
       <span class="text-danger" id="iddoberr"></span>
     </div>
     <div class="req  col-sm-1">
        <label class="control-label" for="idage">Age:</label>
			 <INPUT type ="number" min="1" max="120" class="form-control" id="idage" name ="nmage" ></INPUT>
        <span class="text-danger" id="idageerr"></span>
     </div>
     <div class="col-sm-1">
        <label class="control-label" for="idsex">Sex:</label>
       <select id="idsex" name="nmsex[]"  class="form-control">
       <option value="Z"  disabled selected></option>
        <option>M</option>
        <option>F</option>
       </select>
       <span class="text-danger" id="idsexerr"></span>
     </div>
       <div class="col-sm-1 ">
        <label class="control-label" for="idht">Ht(cms) </label>
				 <INPUT type ="number" min="1" max="300.00" class="form-control" id="idht" name ="nmht" ></INPUT>
       <span class="text-danger" id="idhterr"></span>
     </div>
     <div class="col-sm-1 ">
        <label class=" control-label" for="idwt">Wt:</label>
			 <INPUT type ="number" max="250.00" class="form-control" id="idwt" name ="nmwt" ></INPUT>
       <span class="text-danger" id="idwterr"></span>
     </div>
        <div class="col-sm-1"> 
    <label class="control-label" for ="idcatg">Category:</label>
      <select id="idcatg" name="nmcatg[]"  class="form-control ">
        <option value="Z"  disabled selected></option>
        <option value="A">A</option>
        <option value="NA">NA</option>
    </select>
       <span class="text-danger" id="idcatgerr"></span>  
    </div> 
       
     <div class="col-sm-1"> 
    <label class="control-label" for = "idbldgrp">Bl.Group:&nbsp;
    </label>
      <select id="idbldgrp" name="nmbldgrp[]"  class="form-control ">
        <option value="Z"  disabled selected></option>
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
        <div id="idalltreatdr" class="req col-sm-offset-1 col-sm-2"> 
    <label class="control-label">Treating Dr:</label>
      <select id="idtreatdr" name="nmtreatdr[]"  class="form-control">   
        <option value="Z"  selected>Select Dr</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($alldrs); $i++) { ?> 
        <option value="<?php echo $alldrs[$i]; ?>"><?php echo $alldrs[$i];?></option>
        <?php } ?>
    </select>
       <span class="text-danger" id="idtreatdrerr"></span>
    </div> 
       <div id="idallrefdr" class="col-sm-2"> 
    <label for="idrefdr">Ref Dr:</label>
      <select id="idrefdr" name="nmrefdr[]"  class="form-control">   
        <option value="Z"  selected>Select Dr</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($alldrs); $i++) { ?> 
        <option value="<?php echo $alldrs[$i]; ?>"><?php echo $alldrs[$i];?></option>
        <?php } ?>
    </select>
       <span class="text-danger" id="idrefdrerr"></span>
    </div> 
   
                
        <div class=" col-sm-2">
        <label class="control-label" for="idbp">BP:</label> 
        
          <INPUT type ="text" maxlength="7" class="form-control" id="idbp" name ="nmbp" value="" ></INPUT>       
         <span class="text-danger" id="idbperr"></span> 
          
           
        </div>
          <div class="  col-sm-1">
        <label class="control-label" for="idpulse">Pulse:</label> 
        
            <INPUT type ="number" min="20" max="200" class="form-control" id="idpulse" name ="nmpulse" value="" ></INPUT>      
         <span class="text-danger" id="idpulseerr"></span>    
     </div>
       <div class="col-sm-2">
        <label class=" control-label" for="idtemp">Temp:</label>
         <INPUT type ="number" step=0.1 min="80" max="200" class="form-control" id="idtemp" name ="nmtemp" value="" ></INPUT>
         <span class="text-danger" id="idtemperr"></span>
          </div>
         
         <div class= "col-sm-1 ">
        <label class=" control-label" for="idresp">Resp:</label>
           <INPUT type ="number" step=0.1 min="10" max="200" class="form-control" id="idresp" name ="nmresp" value="" ></INPUT>
         
     </div>
       
     </div>       
   
<div class="control-group">&nbsp;</div>     
   <div class="row"> 
     
      <div class="col-sm-offset-1 col-sm-4 form-group">
        <label class="control-label">Complaint :</label>
       <textarea class="form-control" rows="6" id="idcomplaint" name ="nmcomplaint" value=""></textarea>
       <span class="text-danger" id="idcomplainterr" ></span>     
     </div>
     
      <div class="col-sm-4 form-group">
        <label class="control-label">Clinical Findings :</label>
       <textarea class="form-control" rows="6" id="idcf" name ="nmcf" value=""></textarea>
      <!--<span class="text-danger" id="idcfterr" ></span> -->    
     </div>
     </div> 
       <div class="row">
      <div class=" col-sm-offset-1 col-sm-4 form-group">
      
        <label class="col-sm-offset-1control-label">Allergy:</label>
       <textarea class="form-control" rows="6" id="idallergy" name ="nmallergy"></textarea>   
     </div>
     
      
     <div class=" col-sm-4 form-group">
        <label class="control-label">Medicine Prescribed :</label>
       <textarea class="form-control" rows="6" id="idmedpresc" name ="nmmp" value=""></textarea>
      <!--<span class="text-danger" id="idcfterr" ></span> -->    
     </div>
    </div>
				 
				 <div class="control-group">&nbsp;</div>     
        <div class="row">
       <div class="lgrouptest col-sm-offset-1 col-sm-4">
        <ul class="list-group" id="testlist">
  <!--// note that the li items have testid as id and checkbox has chk+testid as id and testname as value. -->         
        <li class="list-group-item" id="chk0"><font size="3" color="blue" >Select Tests from Below</font></li>
          <?php for ($i = 0; $i < count($alltestid); $i++) { ?> 
         <li class="list-group-item" id="<?php echo $alltestid[$i];?>"><input type="checkbox" id="<?php echo "chk".$alltestid[$i];?>" 
             value="<?php echo $alltestnm[$i];?>">&nbsp;<?php echo $alltestnm[$i];?></li>
        <?php } ?> 
        
        </ul>
        </div>
       <div class="lgroupsel  col-sm-4">
        <ul class="list-group" id="testsel">
        <li class="list-group-item" id="selchk0"><font size="3" color="green" >Tests Selected</font></li>
       
        </ul>
        </div>
    </div>
    </fieldset>
            
         
       
    <div class="control-group">&nbsp;</div> 
 <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">         
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click  Confirm to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
         <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="N" name="nmpatinpconf" ></INPUT>
        </div>
       </div> 
       <div class="col-sm-2">
      <!--input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="btn btn-primary" title="Please type Y  before clicking me" 
             value= "Confirm"-->      
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                    
          </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
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
     