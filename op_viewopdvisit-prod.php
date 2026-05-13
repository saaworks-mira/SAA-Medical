<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
  
   <!--link rel="stylesheet" href="datepicker/css/datepicker.css"
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> 2405
  <!--script src="datepicker/js/bootstrap-datepicker.js"></script-->
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script-->
  
  
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">13/5/2019-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>13/5/2019-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  
 <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>1505-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


   <!--link rel="stylesheet" href="datepicker/css/datepicker.css"-->
   <!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">1505-->
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">


  
  
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
	.lgrouptest .list-group-item {   
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
  var opddate=[];var opdid=[];
 var visitdrpdwn=false; var patientname=[]; var patientid=[];    // vikas
	getpatients();       // vikas
	
function getpatients()  {     // vikas

  // get all drugs
      $.post("op_getopdpatients.php", 
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
    
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idallergy,#idcomplaint,#idtreatdr,#idrefdr').val('');
     $('#idbldgrp,#idsex,#idcatg,#iddob,#idht,#idwt,#idage,#idbp,#idtemp,#idcomplaint,#idcf,#idpulse,#idresp,#idallergy,#idmedpresc').prop('readonly', true); 
    
     
}  
  
$(document).ready(function(){
   $('#identrypat').hide(); // vikas
	document.getElementById("idtextentrypaterr").innerHTML= ""
	 document.getElementById("idtextentrypat").value= ""	
  initallfields()
  
//  $('[data-toggle="tooltip"]').tooltip();
  $('#idrecord').addClass('hidden')               
$(document).on( "blur", '#idtextentrypat', function(e) {      // vikas
	//
	var thisid=this.id;var thisiderr=thisid+'err'
	document.getElementById(thisiderr).innerHTML = "";
	 var textinp = (document.getElementById(thisid).value).trim()
	 var dropdownid=thisid.substr(0,2)+thisid.substr(6)
	       if (textinp == "") {  //  if
					 	$("#idopd").find("option:not(:first)").remove();   //july25
					 $('#idrecord').addClass('hidden')   //july25
				   if (!visitdrpdwn) {   // if they have entered null or few chars on the input patient and then directly moved to another field 
					                       // and not the dropdown then visitdrpdwn will be false and we will close the dropdown 
						  $("#"+dropdownid).hide();
						  $('#idopd').val("Z"); initallfields();
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
					$("#idopd").find("option:not(:first)").remove();initallfields();} 
     
         else {document.getElementById(dropdownid).selectedIndex = pos;document.getElementById(thisiderr).innerHTML = "";}   
         $('#'+dropdownid).hide();}
      }
			
}); 

$(document).on( "mousedown", '#identrypat', function(e) {    // vikas
	visitdrpdwn=true
});		
		
$(document).on('keyup click', '#idtextentrypat',  function(e) {
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
    var ptnmlen=patientname.length
     for (i = 0; i < (ptnmlen); i++) {

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
    $('#'+thisselid).hide(); $("#idopd").find("option:not(:first)").remove();
     document.getElementById(thisiderr).innerHTML="Invalid Patient";} 
})
                 

$(document).on("change",'#identrypat',function(){

	 var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)   // vikas
  var thistextiderr=thistextid+'err'    // vikas
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()   // vikas
  document.getElementById(thistextiderr).innerHTML=""      // vikas
	
  $('#'+thisid).hide()
	var valopt= $('#identrypat').val();
    
     $('#idrecord').addClass('hidden')
   
      $.post("op_getopddata.php",
      { pid: valopt},
      function(result, status){ 
     
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

$(document).on('change','#idopd',function(){   // get labs from opdtest for that opdid
  
  var valopdid= $('#idopd').val();  // selected value from the opddate dropdown
     if (valopdid == "Z") {    // meaning dont show any patient and clear everything      
       $('#idrecord').addClass('hidden')
       return;
     }    
      $.post("op_viewopddata.php",
      { pid: valopdid},
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
// get visit data  
					$('#testlist > li').slice(0).remove();     
  var patid=$('#identrypat option:selected').val()
  
   $.post("ph_getpatientdrugs.php",
    {ppatid: patid},
    function(resultd, statusd){
   
    if (statusd) {
  
    var  fieldsd = JSON.parse(resultd)
   
      if (!fieldsd.succfail) { // if Insert or mod was a problem
         if (fieldsd.msg == "No rows") 
           {
           $('#testlist > li').slice(0).remove();             
             return;
           }
        else
        {
        msg='Program terminating with error '+ fields.msg      
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;}
        }
		   
       $('#testlist > li').slice(1).remove();
      
       var pdrugname=fieldsd.drugname; var pdrugid=fieldsd.drugid; var pdrugstrength=fieldsd.drugstrength;var pdrugtype=fieldsd.drugtype;  
       var pqtyissued=fieldsd.qtyissued; var prate=fieldsd.rate; var pamount=fieldsd.amount;var pdtofissue=fieldsd.dtofissue;
      var docname=fieldsd.docname;
       var pdruglen=pdrugid.length
       for (i = 0; i < (pdruglen); i++) {
        
          var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'----'+docname[i]+'</li>';  

        $("#testlist").append(desc);
         }

           
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
      
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }   
   })   //  end post    
                 
   }  // end good status
      
      })  // end post
      
// get all maintenance data from maint table using admission id
      
      $.post("op_viewtestdata.php",
      { popdid: valopdid},
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
       
       var  tpatientid = fields.patientid; var testid = fields.testid; var testname=fields.testname;
       var completion=fields.completion;var opddate=fields.opddate;
          for (var i = 0; i < tpatientid.length; i++) { 

         if (completion[i] == "N") {
      var desc='<li class="list-group-item"' + '">'+'<a id="' +tpatientid[i]+'-'+opddate[i]+'-'+testname[i]
        + '">'+testname[i]+'</a>'+"</li>"; 
    
         
     $("#testsel").append(desc); }
     else {
      var lnk=tpatientid[i] +'-' + opddate[i].substr(6,2)+ opddate[i].substr(4,2) +opddate[i].substr(0,4) + '-' + testname[i] +'.html';
            
       var desc='<li class="list-group-item"' + '">'+'<a href="opdreports/'+lnk+'" target="_blank">'+
           testname[i]+'</a><input type="checkbox"  checked disabled></li>';               
                
        $("#testsel").append(desc);
      }  
  } 
 //  var filenm='<h4><a id="idfilelink" href="reports/' +  pmnttstid  + '-' + filen + '.html"        
    
 // allpatinfo is patid--testid--date--name--testname--opdid--opdtestid--age--sex
         }
      })
  
			

// july25			
 })      
 

$(document).on('click','#idpatbtncan', function(){   // if cancel then set option to view and init all fields 
         
           $("#idopd").find("option:not(:first)").remove();$("select#idopd").val("Z");
             
                initallfields()  
              $("#idpatconfrow,#idrecord").addClass('hidden')
          
})
$(document).on('click','#idpatbtnprint', function(){   // if cancel then set option to view and init all fields 
         
 //             $("#rtmn").addClass('hidden')
	$("div.lgrouptest").addClass('hidden')
              $("#idpatconfrow").addClass('hidden')
              window.print()
							$("div.lgrouptest").removeClass('hidden')
              $("#idpatconfrow").removeClass('hidden')
             
})

})
  
</script>
</head>
<body>
 <?php
/*	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } */
	?>
 
  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><a id="rtmn" href="http://medical-sriaurobindoashrammed985614.codeanyapp.com/ashrammed/ashrammedmain.php" ><h3 ><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong></h3></a>
    <hr style="border-top: 5px solid #ff0000 !important; ">

  <p></p>
</div>

<div id="idcontainer" class="container">
<form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>View Patient OPD Visit Information</strong></h4>
     </div> 
      
       <!-- <div class="text-success">
          <a id="rtmn"  href="op_opdvisit.php" ><h5><strong> Click to OPD VISIT ENTRY</strong></h5></a>                   // shoba 09/07/18.  Removed the Return to the Menu  elemtn and given the href, connect tion to SRI AUROBINDO ASHRAM OPD RECORDS so to go to main menu we should click RI AUROBINDO ASHRAM OPD RECORDS
            </div>-->          
     
      <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="op_opdvisit.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>
     </div>
     
     
    
       <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="op_viewgenericname.php" > <h4 class="pull-right"><strong>Drug details</strong></h4></a>                      
        
   </div>
    </div>
    <div class="control-group">&nbsp;</div> 
   <div class="row">
     <div id="idalladms" class="col-sm-2"> 
   <label>PATIENT NAME:</label>
     <INPUT type ="text" id="idtextentrypat" placeholder="Type Patient Name" class="cvvlong  form-control">
      <select select size="5" id="identrypat"  class="form-control">  
     </select>  <span class="text-danger centerstrong" id="idtextentrypaterr"></span> 
    </div> 
       
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
        <label class="control-label">Diagnosis:</label>
       <textarea class="form-control" rows="4" id="idallergy" name ="nmallergy"></textarea>
         </div> 
     <div class=" col-sm-4 form-group">
        <label class="control-label">Complaint & Allergy (if any) : </label>
       <textarea class="form-control" rows="4" id="idcomplaint" name ="nmcomplaint" value=""></textarea>       
     </div>
     <div class=" col-sm-4 form-group">
        <label class="control-label">Clinical Findings & Prov.Diagnosis: </label>
       <textarea class="form-control" rows="4" id="idcf" name ="nmcf" value=""></textarea>       
     </div>
	 </div>	 
		<div class="row">
        <div class=" col-sm-3 form-group">
        <label class="control-label">Medicine Prescribed :</label>
       <textarea class="form-control" rows="6" id="idmedpresc" name ="nmmp" value=""></textarea>
      <!--<span class="text-danger" id="idcfterr" ></span> -->    
     </div>   
      
      <div id="idgroupsel" class="lgroupsel  col-sm-3">
         <label class="control-label">Tests Pending/Completed</label>    
        <ul id="testsel" class="list-group">
        <li class="list-group-item" id="testhead">Completed Tests checked</li>  
        <!--li class="list-group-item" color="green" >Completed Tests checked</li-->
        </ul>
        </div> 
     <div id="idnotestmsgrow" class="col-sm-2">
       <div  class="text-danger"><h4 id="idnotestmsg"></h4></div> 
     </div> 
			 <div class="lgrouptest  col-sm-3">
				   <label class="control-label">Drugs Previously Issued</label>  
        <ul class="list-group" id="testlist">        
        <!--li class="list-group-item" id="chk0"><font size="3" color="blue" ><strong>Drugs Previously Issued</strong></font></li-->        
        </ul>
        </div>  
   </div>   
    <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div><div class="control-group">&nbsp;</div>
           
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
</form>
   </div>
</body>
</html>  
       