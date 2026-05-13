
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
  var  patientid;var  patientname;  var testid = []; var testname=[];var completion=[];var opddate=[];var opdtestid=[];
	 var sex=[];var deletelist=[];var insertlist=[];var age=[];
  
  
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
function initallfields() {
     
      
//      $('#idpatconfrow').addClass('hidden') // show confirm
    
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idallergy,#idcomplaint').val('');
     $('#idbldgrp,#idsex,#idcatg,#iddob,#idht,#idwt,#idage,#idbp,#idtemp,#idcomplaint,#idcf,#idpulse,#idresp,#idallergy,#idtreatdr,#idrefdr,#idmedpresc').prop('readonly', true); 
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
          $("#idtestdata").remove();
          $(result).insertBefore( "#id_insert_rec_here");
//          alert($("#idmaintrec").has("input").length)
        /*  if ($("#idmaintrec").has("input").length > 0) 
             {document.getElementById("idhd").innerHTML=""}
             else { 
              document.getElementById("idhd").innerHTML="NO " }*/
         
         }
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
    
        if (status) {
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg);$(document).off();			  
         return;}
        var opddt=fields.opddt;var opdid=fields.opdid;
        populatelist(opddt,opdid,"idopd")      
                 
   }  // end good status
   else {      
        msg='Program terminating with error '+ status
         alert(msg)
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }          
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

?>  

  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM IN-PATIENT RECORDS</strong></h3>
    <hr style="border-top: 5px solid #ff0000 !important; ">

  <p></p>
</div>

<div id="idcontainer" class="container">
<form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>View Patient OPD Information</strong></h4>
     </div> 
      
          <div class="text-success">
          <a id="rtmn"  href="op_opdvisit.php" ><h5><strong> Click to OPD VISIT ENTRY</strong></h5></a>
            </div>
       <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="ashrammed.php" > <h4 class="pull-right"><strong>Return to Main Menu</strong></h4></a>
        
   </div>
    </div>
    <div class="control-group">&nbsp;</div> 
   <div class="row">
     <div id="idalladms" class="col-sm-2"> 
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
     
    
  
     <div id="idrecord">
       <div class="control-group">&nbsp;</div>
     
   <div class="row">
     <div class=" col-sm-2">
        <label class="control-label" for="iddob">Date of Birth:</label>
       <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob"></INPUT>     
     </div>
     <div class=" col-sm-1">
        <label class="control-label" for="idage">Age:</label>
       <INPUT type ="number" min="1" max="120" class="form-control" id="idage" name ="nmage" ></INPUT>
        <span class="text-danger" id="idageerr"></span>
     </div>
      <div class=" col-sm-1">
        <label class="control-label" for="idsex">Sex:</label>
     <INPUT type ="text" maxlength="1"  class="form-control" id="idsex" name ="nmsex"></INPUT>      
     </div>
      <div class=" col-sm-1 ">
        <label class="control-label" for="idht">Ht: </label>
       <INPUT type ="number" min="1" max="210.00" class="form-control" id="idht" name ="nmht" ></INPUT>   
     </div>
     <div class="col-sm-2 ">
        <label class=" control-label" for="idwt">Wt:</label>
       <INPUT type ="number" min="1" max="300.00" class="form-control" id="idwt" name ="nmwt" ></INPUT>
     </div>  
       <div class=" col-sm-1">
        <label class="control-label" for="idcatg">Category:</label>
     <INPUT type ="text" maxlength="2"  class="form-control" id="idcatg" name ="nmsex"></INPUT>      
     </div>
     <div class=" col-sm-1">
        <label class="control-label" for="idbldgrp">Bl.Group::</label>
     <INPUT type ="text" maxlength="2"  class="form-control" id="idbldgrp" name ="nmbldgrp"></INPUT>      
     </div>      
  </div> 
         
<div class="control-group">&nbsp;</div>   
   <div class="row"> 
      <div class="col-sm-2 form-group">
        <label class="control-label">Treat Dr :</label>
       <INPUT type ="text" class="form-control" id="idtreatdr" name ="nmtreatdr" value=""></INPUT>     
     </div>
      
     <div class="col-sm-2 form-group">
        <label class="control-label">Ref Dr :</label>
       <INPUT type ="text" class="form-control" id="idrefdr" name ="nmrefdr" value=""></INPUT>     
     </div>
           
       
        <div class="  col-sm-2">
        <label class="control-label" for="idbp">BP:</label>       
       <INPUT type ="text" maxlength="7" class="form-control" id="idbp" name ="nmbp" value="120/80"></INPUT>                
       </div>
        <div class="col-sm-1">
        <label class="control-label" for="idpulse">PULSE:</label>    
       <INPUT type ="number" min="20" max="320" class="form-control" id="idpulse" name ="nmpulse" value="" ></INPUT>             
        </div>
       <div class=" col-sm-2 ">
        <label class=" control-label" for="idtemp">Temp:</label>
       <INPUT type ="number" step=0.1 min="80" max="110" class="form-control" id="idtemp" name ="nmtemp" value="98.4" ></INPUT>    
        </div> 
          <div class= "col-sm-1 ">
        <label class=" control-label" for="idresp">Resp:</label>
           <INPUT type ="number" step=0.1 min="10" max="200" class="form-control" id="idresp" name ="nmresp" value="" ></INPUT>
         
        </div>
     </div>       
 
<div class="control-group"></div> 
          
   <div class="row">
      <div class="col-sm-3 form-group">
        <label class="control-label">Allergy:</label>
       <textarea class="form-control" rows="4" id="idallergy" name ="nmallergy"></textarea>
         </div> 
     <div class=" col-sm-4 form-group">
        <label class="control-label">Complaint : </label>
       <textarea class="form-control" rows="4" id="idcomplaint" name ="nmcomplaint" value=""></textarea>       
     </div>
     <div class=" col-sm-4 form-group">
        <label class="control-label">Clinical Findings : </label>
       <textarea class="form-control" rows="4" id="idcf" name ="nmcf" value=""></textarea>       
     </div>
        <div class=" col-sm-4 form-group">
        <label class="control-label">Medicine Prescribed :</label>
       <textarea class="form-control" rows="6" id="idmedpresc" name ="nmmp" value=""></textarea>
      <!--<span class="text-danger" id="idcfterr" ></span> -->    
     </div>        
   </div>   
    <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div><div class="control-group">&nbsp;</div>
          <fieldset class="scheduler-border"> 
       <legend class="scheduler-border">DAILY MAINTENANCE DETAILS:</legend>
 <div class="row">
     <div id="idmntheader" class="col-sm-320 text-success"><span class="text-danger" id="idhd"></span>DAILY MAINTENANCE ENTRIES</div> 
   <hr style="border-top: 3px solid #0000ff !important; " />
   </div>         
 <div  id="idmaintrec">  
   <div  id="idtestdata">     
      </div>  
  <div id="id_insert_rec_here" class="control-group">&nbsp;</div> 
   </div> 
          </fieldset>       
 <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary" value= "E x i t">         
       </div> 
   <div class="col-sm-offset-2  col-sm-2">
      <!--input type="button" id="idpatbtnprint" class="btn btn-primary" value="Print this page" onClick="window.print()"--> 
     <input type="button" id="idpatbtnprint" class="btn btn-primary" value="Print this page"> 
       </div> 
 </div> 
          
       
 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
 
     
</div>   
</div>
 </div> 
</form>
   </div>
</div> 
</body>
</html>  
       