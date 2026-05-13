<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
  
   <!--link rel="stylesheet" href="datepicker/css/datepicker.css"-->
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <!--script src="datepicker/js/bootstrap-datepicker.js"></script-->
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script-->
  
  
  
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.min.js"></script>
 
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>

 
<style>
.mycontent-left {
  height:100%;
  border-right:3px solid #0000ff;
}

/*  border: 3px solid #73AD21; */
/*  body {
    background-color: lightskyblue;
}

@media only screen and (max-width: 500px) {
    body {
        background-color: grey;
    }
}
*/
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
 
 @media print {
  #idopddt { width: 20% ;}
  [class*="col-sm-"] {
    float: left; 
  }
  
  fieldset {page-break-after: always;}
}

 ul > li a {
    color: #337ab7;
}
/*
a.cursor-help {
    cursor:help
  }
*/  
fieldset {
    border: 3px solid #0000ff !important;
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
	
		var  patientid = []; var testid = []; var testname=[];var completion=[];var opddate=[];var deletelist=[];var insertlist=[];
       
  function populatelist(arrayname, arrayid, idsel) {
   $('#'+idsel).prop("disabled", false);
   document.getElementById(idsel).options.length = 0;
      var select = document.getElementById(idsel)
      var el = document.createElement("option");
      var opt = "Select Date";           
      el.textContent = opt;
      el.value = "Z";
      select.appendChild(el);  
      
          for(var i = 0; i < (arrayname.length); i++) {
            var  opt = (arrayname[i].substr(6,2)).toString() + '/' + (arrayname[i].substr(4,2)).toString() + 
                '/' + (arrayname[i].substr(0,4)).toString()
           var el = document.createElement("option");
          
           el.textContent = opt;
           el.value = arrayid[i];
           select.appendChild(el);          
          }      

} 
	
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
});
  
function initallfields() {
     
      
//      $('#idpatconfrow').addClass('hidden') // show confirm
    
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idallergy,#idcomplaint').val('');
     $('#idbldgrp,#idsex,#idcatg,#iddob,#idht,#idwt,#idage,#idbp,#idtemp,#idcomplaint,#idcf,#idpulse,#idresp,#idallergy,#idtreatdr,#idrefdr,#idmedpresc').prop('readonly', false); 
      $('#id_insert_rec_here').value="";
     
}  
  
$(document).ready(function(){
   
  initallfields()
  
//  $('[data-toggle="tooltip"]').tooltip();
  $('#idrecord').addClass('hidden')               

$(document).on('change','#idopd',function(){

  var valopt= $('#idopd').val();
     if (valopt == "Z") {    // meaning dont show any patient and clear everything      
       $('#idrecord').addClass('hidden')
       return;
     }

      var patid=valopt;
      $.post("op_viewopddata.php",
      { pid: patid},
      function(result, status){ 
      alert(result)
        if (status) {
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
      $('#idrecord').removeClass('hidden')
       
         initallfields()
       
        document.getElementById("idsex").value=fields.sex;
        document.getElementById("idcatg").value=fields.catg;         
        document.getElementById("idbldgrp").value=fields.bldgrp; 
        document.getElementById("idht").value=fields.ht;
        document.getElementById("idwt").value=fields.wt;         
        document.getElementById("iddob").value=fields.dob; 
        document.getElementById("idage").value=fields.age; 
        document.getElementById("idbp").value=fields.bp ;
        document.getElementById("idtemp").value=fields.temp;
           document.getElementById("idresp").value=fields.resp;
        document.getElementById("idpulse").value=fields.pulse;  
        document.getElementById("idcomplaint").value=fields.complaint; 
           document.getElementById("idcf").value=fields.cf; 
       document.getElementById("idallergy").value=fields.allergy;
           document.getElementById("idmedpresc").value=fields.medpresc;
        document.getElementById("idtreatdr").value=fields.treatdr;
       document.getElementById("idrefdr").value=fields.refdr;
  //     document.getElementById("idopd").value=fields.opddt;     
          
          
           $('#idpatconfrow').removeClass('hidden') // show exit
             
                 
   }  // end good status
      
      })  // end post
      
// get all maintenance data from maint table using admission id
      var patopdid=valopt;
      
      $.post("op_viewtestdata.php",
      { popdid: patopdid},
      function(result, status){
      
      if (status) {
          var fields = JSON.parse(result); 
       
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
        $('#testsel > li').slice(1).remove()
      if (!fields.testsfound)  {      // if no tests found unhide msgrow
         
           $('#idnotestmsgrow').removeClass('hidden')
           document.getElementById("idnotestmsg").innerHTML="No tests found";        
           return;}
        document.getElementById("idnotestmsg").innerHTML="";     // otherwise initialize message with null
        $('#idnotestmsgrowview').addClass('hidden')

         $('#testsel > li').slice(1).remove()      // remove all previous test to fill with the new ones from database
       
      /* var  patientid = fields.patientid; var testid = fields.testid; var testname=fields.testname;
       var completion=fields.completion;var opddate=fields.opddate;*/
				  patientid = patientid.splice(0, patientid.length);  testid = testid.splice(0, testid.length);
          testname = testname.splice(0, testname.length);opddate = opddate.splice(0, opddate.length);
         completion = completion.splice(0, completion.length);
         patientid = fields.patientid;  testid = fields.testid;  testname=fields.testname;
        completion=fields.completion;opddate=fields.opddate;
				deletelist = deletelist.splice(0, deletelist.length);  insertlist =  insertlist.splice(0,  insertlist.length); 
          for (var i = 0; i < patientid.length; i++) { 

         if (completion[i] == "Y") {
     /* var desc='<li class="list-group-item"' + '">'+'<a id="' +patientid[i]+'-'+opddate[i]+'-'+testname[i]
        + '">'+testname[i]+'</a>'+"</li>"; */
    var desc='<li id="testsel' + testid[i] +'" class="list-group-item"' + '"><a>'+testname[i]+'</a>'+"</li>";            
         
   
     $("#testsel").append(desc); }
						
     else {
      var lnk=patientid[i] +'-' + opddate[i].substr(6,2)+ opddate[i].substr(4,2) +opddate[i].substr(0,4) + '-' + testname[i] +'.html';
            
      /* var desc='<li class="list-group-item"' + '">'+'<a href="opdreports/'+lnk+'" target="_blank">'+
           testname[i]+'</a><input type="checkbox"  checked disabled></li>';      */         
       var desc='<li id="testsel' + testid[i] +'" class="list-group-item"' + '">'+'<a href="opdreports/'+lnk+'" target="_blank">'+
           testname[i]+'</a><input id="testselchk'+testid[i]+'" type="checkbox"  checked disabled></li>';               
                         
        $("#testsel").append(desc);
			 
      }  
  } 
   $('#testsel > li').each(function(i, selected){
	 var thisid=this.id // get id of li 
	 
	 var chkid='chk'+thisid.substr(7)
	 var elm='ul#testlist '+'#'+chkid
	 $(elm).attr('checked', true)
     })
		
 }  // end good status
else {
	msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
      })       
         
      })                
      
  $(document).on('change','#idpat',function(){
  
  var valopt= $('#idpat').val();
     if (valopt == "Z") {    // meaning dont show any patient and clear everything      
         document.getElementById("idopd").options.length = 0;
       $('#idrecord').addClass('hidden')
       return;
     }
     $('#idrecord').addClass('hidden')
      var patid=valopt;
      $.post("op_getopddata.php",
      { pid: patid},
      function(result, status){ 
      alert(result)
        if (status) {
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
        var opddt=fields.opddt;var opdid=fields.opdid;
        populatelist(opddt,opdid,"idopd")      
                 
   }  // end good status
      
      })  // end post
      
 })      
 // for changes

 

$(document).on('click','#idpatbtncan', function(){   // if cancel then set option to view and init all fields 
         
             $("select#idpat").val("Z");
              document.getElementById("idinpadmdt").value="";
                initallfields()  
              $("#idpatconfrow,#idrecord").addClass('hidden')
          
})
$(document).on('click','#idpatbtnprint', function(){   // if cancel then set option to view and init all fields 
         
              $("#rtmn").addClass('hidden')
              $("#idpatconfrow").addClass('hidden')
              window.print()
              $("#idpatconfrow").removeClass('hidden')
              $("#rtmn").removeClass('hidden')
})

})
  
</script>
</head>
<body>
  <?php

$alladmnm=array(); $alladmid=array(); 

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
     
        
 $sql = "SELECT  distinct opdid, name FROM opd order by name";   // get all patient
             
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Patients"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          echo json_encode( $desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$allpatnm[]=$row["name"];$allpatid[]=$row["opdid"];}; // get names and id of all patients
     
    }
	$sql = "SELECT docname FROM doctors";   // get all doctors
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
	<h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OUTPATIENT RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class="form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>OPD Entry</strong></h4></div> 
     
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="ashrammed.php" > <h4 class="pull-right"><strong>Return to Main Menu</strong></h4></a>
     </div>
   </div>
   
    <div class="control-group">&nbsp;</div>
      
   <div class="row">
     <div id="idallpats" class="col-sm-2"> 
    <label for="idpat">Patient Name:</label>
      <select id="idpat" name="nmpat[]"  class="form-control">
        <option value="Z"  selected>Select Patient</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($allpatid); $i++) { ?> 
        <option value="<?php echo $allpatid[$i]; ?>"><?php echo $allpatnm[$i];?></option>
        <?php } ?>
    </select>
    </div> 
<!-- admission here --> 
         
     <div id="identeropd" class=" col-sm-3">
         <label class="control-label">OPD Date</label>
       
           <select id="idopd" name="nmadmns[]"  class="form-control">
        <option value="Z"  selected></option>
        </select> 
      </div> 
      
     </div>
<!-- admission here instead -->  
	  <div class="control-group">&nbsp;</div>
   <div id="idrecord">
	 
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
   
                
        <div class=" req col-sm-2">
        <label class="control-label" for="idbp">BP:</label> 
        
          <INPUT type ="text" maxlength="7" class="form-control" id="idbp" name ="nmbp" value="" ></INPUT>       
         <span class="text-danger" id="idbperr"></span> 
          
           
        </div>
          <div class=" req col-sm-1">
        <label class="control-label" for="idpulse">Pulse:</label> 
        
            <INPUT type ="number" min="20" max="200" class="form-control" id="idpulse" name ="nmpulse" value="" ></INPUT>      
         <span class="text-danger" id="idpulseerr"></span>    
     </div>
       <div class="req col-sm-2">
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
      <div id="idgroupsel" class="lgroupsel  col-sm-3">
         <label class="control-label">Tests Pending/Completed</label>    
        <ul id="testsel" class="list-group">
        <li class="list-group-item" id="testhead">Completed Tests checked</li>  
        <!--li class="list-group-item" color="green" >Completed Tests checked</li-->
        </ul>
        </div> 
     <div id="idnotestmsgrow" class="col-sm-3">
       <div  class="text-danger"><h4 id="idnotestmsg"></h4></div> 
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
</div>
</form>
</div> 
</body>
</html>
     