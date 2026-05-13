<?php
?>

<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  
 
<style>
   .centerstrong {
    font-weight:bold !important;
    text-align: center !important;
    font-family: verdana !important;
    font-size: 16px !important;
    color: red !important;
  }  
 .font16 {font-size:16px}
.lgroupsel {
    max-height: 200px;
    overflow:auto; 
}
#idpurbtnsrch {
    position:relative;
    margin-top: 20px;
    
} 

@media only screen and (max-width: 500px) {
    body {
        background-color: grey;
    }
}
*/

ul.list-group {   
  border: 1px solid #00ff00;   
}  
.list-group-item {   
padding-bottom:6px;
  padding-top:6px;
  border: 1px solid #00ff00;  
/*  border: 1px solid #00ff00;   */
}   
  
 @media print {
  #idadmdt { width: 20% ;}
  [class*="col-sm-"] {
    float: left; 
  }
  
/*  fieldset {page-break-after: always;} */
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
  
.hlt {
    background-color: yellow;
}
.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}
/*	
#idfile {white-space:pre;
		font-family:monospace;} */
</style>


<script type="text/javascript">
      var opdtestid=[];var opddate=[]; var opdid=[];var opdtestidview=[];var opddateview=[]; var opdidview=[];
      var ptname=[];  var patientid=[];var ptnameview=[];  var patientidview=[];var completionview=[];
      var testname=[];  var testid=[]; var alldata=[];  var testnameview=[];  var testidview=[]; var alldataview=[]; 
      var ptnameuniqueview=[];var patientiduniqueview=[]; 
      var thispatienttests;   var templatename; var ondropdown=false;var testscompl=true;
//       CKEDITOR.replace( 'idfile' );
//	CKEDITOR.config.height = 2200;

function initallfields() { 

  $('#idrecord,#idpatmsgrow,#idnotestmsgrow,#idpatconfrow').addClass('hidden') 
  $('#testsel > li').slice(1).remove()   // get all direct children of the UL element(that is all LI). Then except first remove all
  $('#testdone > li').slice(1).remove()
	 $('#testpend > li').slice(1).remove()
  $('#testpat > li').slice(1).remove()
  $('#testpat > li').slice(1).remove()
  
  
//  document.getElementById("idslno").value="";   
   document.getElementById("idref").value=""; 
//  $("#iddivslno,#iddivref,#iddivrepdt").addClass('hidden')
	$("#iddivref,#iddivrepdt").addClass('hidden')
  
  $('#idrecord').removeClass('hidden')
 document.getElementById("idfile").readOnly = false;
  $( "#idfile" ).val('')
  $('#idrecord').addClass('hidden')
//  getallpatsforview();
   $('#idviewpat').hide();
  $('#idview').addClass('hidden')
//    getpendingtests()
    
} 
  
function getallpatsforview()  {
  
  $.post("op_getallpatients.php", 
       
        function(result, status){ 
       
     
        if (status) {
          
       var fields = JSON.parse(result); 
       
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
      if (!fields.testsfound)  {
          $('#testdone > li').slice(1).remove();$('#testpend > li').slice(1).remove();
//          initallfields()
         $('#idnotestmsgrowview').removeClass('hidden')
//         $('#idallpatientsview').addClass('hidden')
         document.getElementById("idnotestmsgview").innerHTML="No Patients found";
          
         return;}
       
        document.getElementById("idnotestmsgview").innerHTML="";
       $('#idnotestmsgrowview').addClass('hidden')
       $('#idallpatientsview').removeClass('hidden')
       
       patientidview.splice(0, patientidview.length);ptnameview.splice(0, ptnameview.length)
       ptnameview=fields.ptname;   patientidview = fields.patientid;    
       ptnameuniqueview = ptnameview.slice();patientiduniqueview = patientidview.slice();   // copy array 
       
                 
   }  // end good status

      })  // end post
                      
}  

function getpendingtests() { 
    
  $.post("op_getpendingtests.php",
      function(result, status){ 
         
        if (status) {
         
       var fields = JSON.parse(result); 
       
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
        $('#testpat > li').slice(1).remove();$('#testsel > li').slice(1).remove()
      if (!fields.testsfound)  {
 //         initallfields()
        
         $('#idnotestmsgrow').removeClass('hidden')
         $('#idallpatients').addClass('hidden')
         document.getElementById("idnotestmsg").innerHTML="No tests Pending";
         return;}
       document.getElementById("idnotestmsg").innerHTML="";$('#idnotestmsgrow').addClass('hidden')
       $('#idallpatients').removeClass('hidden')
       patientid = patientid.splice(0,patientid.length);ptname = ptname.splice(0,ptname.length); 
					opdid = opdid.splice(0,opdid.length);opddate = opddate.splice(0,opddate.length);
       opdtestid = opdtestid.splice(0,opdtestid.length);   
       testid = testid.splice(0,testid.length);testname = testname.splice(0,testname.length);alldata = alldata.splice(0,alldata.length);
       opdtestid=fields.opdtestid;opddate=fields.opddate;  opdid=fields.opdid; 
       ptname=fields.ptname;   patientid = fields.patientid; age=fields.age;sex=fields.sex
       testname=fields.testname;  testid = fields.testid;  alldata=fields.alldata;     
       var ptnameunique=[]; var patientidunique=[];
      ptnameunique = ptnameunique.splice(0,ptnameunique.length);patientidunique  = patientidunique.slice(0,patientidunique.length);  
          
      ptnameunique = ptname.filter(function(elem, index) {
      return index == ptname.indexOf(elem);
     })
     
       patientidunique = patientid.filter(function(elem, index) {
      return index == patientid.indexOf(elem);
     })
    for (var i = 0; i < ptnameunique.length; i++) { 
         
      var desc='<li class="list-group-item"' + '">'+'<a id="' +patientidunique[i]+'">'+ptnameunique[i]+'</a>'+"</li>"; 
    
         
     $("#testpat").append(desc); }     
                 
   }  // end good status
 
      })  // end post
                      
}  
function getcompletedtests(vpat,vstartdt,venddt)  {
 
  $.post("op_getcompletedtests.php", 
       { ppat:vpat, pstartdt:vstartdt,penddt:venddt},        
        function(result, status){ 
//        alert(result)     
        if (status) {
         
       var fields = JSON.parse(result); 
       
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
        $('#testdone > li').slice(1).remove();$('#testpend > li').slice(1).remove();
      if (!fields.testsfound)  {
         
           $('#idnotestmsgrowview').removeClass('hidden')
//           $('#idallpatientsview').addClass('hidden')
           document.getElementById("idnotestmsgview").innerHTML="No tests found";
           
           return;}
        document.getElementById("idnotestmsgview").innerHTML="";
        $('#idnotestmsgrowview').addClass('hidden')
//           $('#idallpatientsview').addClass('hidden')
         $('#testdone > li').slice(1).remove(); 
					 $('#testpend > li').slice(1).remove(); 
       $('#idallpatientsview').removeClass('hidden')
       
      patientidview.splice(0, patientidview.length);ptnameview.splice(0, ptnameview.length);completionview.splice(0, completionview.length)  
          opdidview.splice(0, opdidview.length);opddateview.splice(0, opddateview.length);
       opdtestidview.splice(0, opdtestidview.length);   
       testidview.splice(0,  testidview.length);testnameview.splice(0, testnameview.length);
          alldataview.splice(0, alldataview.length);
       opdtestidview=fields.opdtestid;opddateview=fields.opddate;  opdidview=fields.opdid; completionview=fields.completion; 
       ptnameview=fields.ptname;   patientidview = fields.patientid; ageview=fields.age;sexview=fields.sex
       testnameview=fields.testname;  testidview = fields.testid;  alldataview=fields.alldata; 
   
 // allpatinfo is patid--testid--opddate--ptname--testname--opdid--opdtestid--age--sex         
        var  opdlen=opddateview.length;
       for (var i = 0; i < opdlen; i++) { 
				 if (completionview[i]  == "Y") {
      var lnk=patientidview[i] +'-' + opddateview[i].substr(6,2)+ opddateview[i].substr(4,2) +
          opddateview[i].substr(0,4) + '-' + testnameview[i] +'.html';    
            
       var desc='<li class="list-group-item"' + '">'+'<a href="op_modifylab.php?fn='+lnk+ '" id="'+
           patientidview[i] + '-'+ opddateview[i].substr(6,2)+ opddateview[i].substr(4,2)+opddateview[i].substr(0,4) +'-'+ testnameview[i] +  
          '" target="_blank">' + ptnameview[i] + '--'+testnameview[i] + '--'+opddateview[i].substr(6,2) + '-' + 
            opddateview[i].substr(4,2)+ '-'+ opddateview[i].substr(0,4) +  '</a>'+"</li>";  
      
          $("#testdone").append(desc); }
			else {
			      
       var desc='<li class="list-group-item"' + '">'+'<a id="'+
           patientidview[i] + '-'+ opddateview[i].substr(6,2)+ opddateview[i].substr(4,2)+opddateview[i].substr(0,4) +'-'+ testnameview[i] +  
          '">' + ptnameview[i] + '--'+testnameview[i] + '--'+opddateview[i].substr(6,2) + '-' + 
            opddateview[i].substr(4,2)+ '-'+ opddateview[i].substr(0,4) +  '</a>'+"</li>";  
      
          $("#testpend").append(desc); 	
			}		
       }      
                
                 
   }  // end good status

      })  // end post
                      
}  
  
  
$(document).ready(function(){
  var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
      
       $('#idrepdt,#idviewinpstartdt,#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
     
    var datestr=dd+'/'+mm+'/'+yyyy;        
  
  $('#idrepdt,#idviewinpstartdt,#idviewinpenddt').datepicker('setDate', datestr) 
 $('#idrepdt,#idviewinpstartdt,#idviewinpenddt').datepicker('setEndDate', datestr);
 
  initallfields()
    getallpatsforview();
    getpendingtests()

$(document).on('click','#testdone li a',function(){   // a id contains patid--testid--date--name--testname--opdid--opdtestid--age--sex
  var thisid=this.id;
  $( "#testdone .hlt" ).removeClass('hlt');
  $(this).addClass('hlt');    
})    

$(document).on('click','#testpat li a',function(){   // a id contains patid--testid--date--name--testname--opdid--opdtestid--age--sex
  var thisid=this.id;
  $( "#testpat .hlt" ).removeClass('hlt');
  $(this).addClass('hlt');
  $('#idrecord,#idpatmsgrow,#idnotestmsgrow,#idpatconfrow').addClass('hidden') 
  
  $('#idallpatients').removeClass('hidden')
     var strid=thisid+'--'
     var patienttests = [];
     $('#testsel > li').slice(1).remove()   // remove all except first element which is header of tests pending
      patienttests = alldata.filter(function(elem, index, self) { 
     return elem.indexOf(strid) >= 0  
     })
    for (var i = 0; i < patienttests.length; i++) { 
       var patientinfo = patienttests[i].split("--");  //patid--testid--date--name--testname--opdid--opdtestid--age--sex
      var desc='<li class="list-group-item"' + '">'+'<a id="' +patienttests[i]+'">'+patientinfo[4]+'--'+
       patientinfo[2].substr(6,2)+'/'+patientinfo[2].substr(4,2)+'/'+patientinfo[2].substr(0,4)+'</a>'+"</li>";
                     
     $("#testsel").append(desc); }      
}) 

$(document).on('click','#testsel li a',function(){  
//   $("#iddivslno,#iddivref,#iddivrepdt").removeClass('hidden')
	   $("#iddivref,#iddivrepdt").removeClass('hidden')
var thisid=this.id  // get id 
 $( "#testsel .hlt" ).removeClass('hlt');
  $(this).addClass('hlt');
 thispatienttests=thisid  
 
var testnmdt=this.textContent;
var testinfo = testnmdt.split("--"); // template name --date 
 templatename =testinfo[0]    // get template name
var filen =templatename+'.html'


$('#idrecord').removeClass('hidden')
 document.getElementById("idfile").readOnly = false;
  $( "#idfile" ).val('')
  $('#idrecord,#idpatconfrow').addClass('hidden')
$.ajaxSetup ({
    // Disable caching of AJAX responses
    cache: false
}); 
//  $( "#idfile" ).load( filen,function(response,status,xhr){
//    $.get(filen, function(content,status) { 
			 $.get(filen, function(content,status) { 
    // if you have one tinyMCE box on the page:
 
    if ( status == "error" ) {
      $("#idpatconfrow,#idrecord").addClass('hidden')
             initallfields()
     
     var msg = "Sorry error due to absence of template: ";
      alert( msg + xhr.status + " " + xhr.statusText );
      return;}
   if ( status == "success" ) {
//		 tinyMCE.activeEditor.setContent(content);
		 document.getElementById('idfile').value=content
//
		 var editor = CKEDITOR.instances['idfile'];
    if (editor) { editor.destroy(true); }
//		 
//		 CKEDITOR.instances['idfile'].destroy()
		 CKEDITOR.replace( 'idfile', {
			height: 2500
		} ); 
    $('#idrecord').removeClass('hidden');
     $('#idpatconfrow').removeClass('hidden');
// get treatdr
		 var temp = thispatienttests.split("--");
	var vopdid = temp[5];

	$.post("op_gettreatdr.php", {popdid:vopdid},
        function(result, status){ 
//        alert(result)
        if (status) {
       
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}  
				var vtreatdr=	fields.treatdr;
       document.getElementById("idref").value=vtreatdr; 
     
   }  // end good status
      
 })  // end post    
	
// till here		 
         
    }
	
})
})  

$(document).on( "change", '#idviewpat',function(e) {
   
  var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  var thistextiderr=thistextid+'err'
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  document.getElementById(thistextiderr).innerHTML="" 
  $('#'+thisid).hide()
  $('#testdone > li').slice(1).remove();$('#testpend > li').slice(1).remove()
})  

$(document).on('blur','input[id^=idtextviewpat]',  function(e) { 
  if (!ondropdown) {
		 var textinp = (document.getElementById("idtextviewpat").value).trim()
		 if (textinp == "") {document.getElementById("idtextviewpaterr").innerHTML=""; $('#idviewpat').hide();return;}
     if (  $("#idviewpat").is(":visible")) {  // if its open
       var upperCaseNames = ptnameuniqueview.map(function(value) {
         return value.toUpperCase();
        });
       
        var pos = upperCaseNames.indexOf(textinp.toUpperCase());
        
    if (pos === -1) {
       document.getElementById("idtextviewpaterr").innerHTML = "Invalid Patient"; $('#testdone > li').slice(1).remove();
			$('#testpend > li').slice(1).remove(); }
     else {
       document.getElementById("idviewpat").selectedIndex =0;
     
       document.getElementById("idtextviewpaterr").innerHTML = "";
       }
       
    $("#idviewpat").hide()
     }
   } 
  else {
    ondropdown=false; 
  }
})

$(document).on('mousedown', '#idviewpat',  function(e) {   
  ondropdown=true;             
})

$(document).on('keyup click','input[id^=idtextviewpat]',  function(e) {   // show dropdown on click and char entered
 var keyCode = e.keyCode || e.which; 
 if(e.which == 13) {return}
  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    
  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty();
  var txt=document.getElementById(thisid).value;
      
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length > 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = "";
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var patsfound=false;
    var ptntlen=ptnameuniqueview.length
     for (i = 0; i < (ptntlen); i++) {
    
   	var   pos=ptnameuniqueview[i].search(regvar)  
      if (pos != -1) { //search successful
         patsfound=true;
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
        
         var  opt = ptnameuniqueview[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = patientiduniqueview[i].toString(); 
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }     
      }  //end for

  if (!patsfound) {$('#'+thisselid).hide();document.getElementById(thisiderr).innerHTML="Invalid Patient"; }

})
  
$(document).on('click','#idpatbtnconf', function (e) {
     
     	$('#idpatbtnconf').prop("disabled",true);
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {
       
//       var txtarea=document.getElementById("idfile").value
       var repdt=document.getElementById("idrepdt").value
       var refdr=document.getElementById("idref").value
//        var slno=document.getElementById("idslno").value
        var allpatinfo=[];
         var allpatinfo = thispatienttests.split("--");
//      var txtarea=tinymce.get('idfile').getContent();
//		  alert(txtarea)
			var txtarea=CKEDITOR.instances['idfile'].getData();
       $.post("op_lablayout.php",
       {ppatinfo: thispatienttests, ptxtarea: txtarea, prepdt: repdt, prefdr: refdr}, function(result, status){
       if (status) {
        
         var fulldata=result
// allpatinfo is patid--testid--date--name--testname--opdid--opdtestid--age--sex         
         var combid=allpatinfo[0]+'-'+allpatinfo[2].substr(6,2)+
             allpatinfo[2].substr(4,2)+allpatinfo[2].substr(0,4) 
         var filen=templatename
       
           $.post("op_writelab.php",
           { pfilen: filen, pcombid: combid, popdtestid:allpatinfo[6], pfulldata:fulldata},
      
         function(result, status){
           
          if (status) { 
         var fields = JSON.parse(result); 
         if (!fields.succfail) { 
           msg='Program terminating with error '+ fields.msg
           alert(msg)
           return;}
            $('#idpatbtnconf').prop("disabled",false);
            document.getElementById('idpatinpconf').value = ""
            $("#idpatconfrow").addClass('hidden') 
            $("#idpatmsgrow").removeClass('hidden')
            $("#idpatmsg").show()
            document.getElementById("idpatmsg").innerHTML="      Lab Report created successfully";
						 alert(document.getElementById("idpatmsg").innerHTML);
						 document.getElementById("idpatmsg").innerHTML="";
 //           $("#idpatmsg").fadeOut(4000, function(){
             $("#idpatconfrow").removeClass('hidden')  
              initallfields()
              getpendingtests()
              getallpatsforview()
//             });                 
   
     
       }    // end status for writelab
       else {     // bad status for writelab
         msg='Program terminating with error '+ status
         alert(msg)
          $(document).off()  
         return;
     }       
             
  }) // post template for write lab
 }   // end good status for lablayout
 else {     // bad status for lablayout
         msg='Program terminating with error '+ status
         alert(msg)
          $(document).off()  
         return;
     }            
 })   // post ip_lablayout      
}    // if y
$('#idpatbtnconf').prop("disabled",false);	
})
 
$("input:radio[name=optradio]").click(function() {
   if (this.id == "idradioentry") {
     $("#idview").addClass("hidden");$("#identry").removeClass("hidden");
      
   }    
   if (this.id == "idradioview") {
      $("#idview").removeClass("hidden");$("#identry").addClass("hidden"); 
     
   }
	
  
 })  
  
$(document).on('click','#idpurbtnsrch',  function(){
   
   if  (document.getElementById("idtextviewpaterr").innerHTML != "") {return}
	if  (document.getElementById("idtextviewpat").value == "") 
   { var vpat = "Z"} else { var vpat=$('#idviewpat').val();}    
    var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();
  
     getcompletedtests(vpat,vstartdt,venddt) 
 })

$(document).on('click','#idpatbtncan', function(){   // if cancel then set option to view and init all fields 
//              $("#iddivslno,#iddivref,#iddivrepdt").addClass('hidden')
	            $("#iddivref,#iddivrepdt").addClass('hidden')
              $( "#testpat .hlt" ).removeClass('hlt');
              $( "#testsel .hlt" ).removeClass('hlt');
              $('#idrecord,#idpatmsgrow,#idnotestmsgrow,#idpatconfrow').addClass('hidden') 
              $('#testsel > li').slice(1).remove() 
            
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

 if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
  <div class="container">    
<h1> </h1>
</div>
<div class="container-fluid">
   <img src="ma.jpg" class="img-responsive center-block">
	<h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong> </h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

  <div id="idcontainer" class="container-fluid">
<form id="fidlab" name="fnmlab" action="" method="post" role="form"></form>
 <div class="row form-group">
     <div class="col-sm-5 col-sm-5 text-success"><h4><strong>OPD Lab Test Processing</strong></h4>
     </div> 
	 
     <div class=" col-sm-offset-1  col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 ><strong>Return to OPD Menu</strong></h4></a>
         </div>
	     
	 
	 
	 <div class=" col-sm-3 text-success">
         <a id="rtmn" href="../ashrammed/ashramptmain.php" > <h4 class="pull-right"><strong>Return to Patient Records Menu</strong></h4></a>
     </div>
   </div>
   <div class="row form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioentry" checked name="optradio"><strong>OPD Lab Test Entry</strong></label></div>      
          
          <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioview" name="optradio"><strong>OPD Lab Test View</strong></label></div>
     </div>
    </div>
 
    <div class="control-group">&nbsp;</div> 
    <div id="identry">
        <div  class="container-fluid">
     <form class="form-horizontal" id="fidpur2" name="fnmpur2" action="" method="post" role="form"></form> 
   <div class="row">
     
     <div  id="iddivrepdt" class="col-sm-2">
         <label class="control-label"> Date</label>
       <div class="input-group date"  >
         <input onkeydown="return false" type ="text" class="form-control" id="idrepdt" name ="nmrepdt" >
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
         </div>
     </div>
       <div id="iddivref" class="col-sm-2">
         <label class="control-label"> Ref Dr</label>
         <input type ="text"  class="form-control" id="idref" name ="nmref"  >
     </div>
     </div>
     <div class="control-group">&nbsp;</div>
     <div  id="idallpatients" class="row">
      <div class="lgroupsel  col-sm-offset-1 col-sm-3">
         <!--label class="control-label">Patient Name</label--> 
        <ul id="testpat" class="list-group">
         <li class="list-group-item" id="testhead"><font size="3" color="blue" >Select Patient</font></li>
        </ul>
        </div> 
     
      <div id="idgroupsel" class="lgroupsel  col-sm-3">
         <!--label class="control-label">Tests Pending</label-->    
        <ul id="testsel" class="list-group">
          <li class="list-group-item"><font size="3" color="green" >Select Test</font></li>
        <!--li class="list-group-item" color="green">Select Test</li-->
        </ul>
        </div> 
      
       </div> 
     <div id="idnotestmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-danger"><h4 id="idnotestmsg"></h4></div> 
     </div>      
   <div class="control-group">&nbsp;</div>
     <div id="idrecord">
        <textarea class="form-control" name='editor1' rows="50" id="idfile" name ="nmfile" ></textarea>
			
     </div>  
      <div id="id_insert_rec_here" class="control-group">&nbsp;</div> 
     <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">         
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click Save to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
       <input type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" >
        </div>
       </div> 
       <div class="col-sm-2">     
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Save">        
       </div>
      </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-success"> <h4 id="idpatmsg"></h4></div>
        
 </div> 
</div>

</div> 
 
   <div id="idview">
  <div  class="container-fluid">
    <div class="row form-group">
    <div id="idviewallpat" class="col-sm-offset-1 col-sm-2"> 
     <label>Patient Name:</label>
      <input type ="text" id="idtextviewpat" placeholder="Type Patient Name" class="cvvlong  form-control">
      <select select size="5" id="idviewpat"  class="form-control">   
     </select> <span class="centerstrong" id="idtextviewpaterr"></span>
    </div>   
         
     <div id="identerviewstartdt" class="col-sm-2">
         <label class="control-label">Start Date</label>
       
         <div class="input-group date" id="idviewstartdt" >
     <input id="idviewinpstartdt" onkeydown="return false" type="text" maxlength="10" class="form-control fldview" name ="nmstartdt">
       <span  class="input-group-addon"><span id="idspanstartdt" class="glyphicon glyphicon-calendar"></span></span> 
    
      </div> 
      </div>
       <div id="identerviewenddt" class="col-sm-2">
         <label class="control-label">End Date</label>
       
         <div class="input-group date" id="idviewenddt" >
     <input id="idviewinpenddt" onkeydown="return false" type="text" maxlength="10" class="form-control fldview" name ="nmenddt">
       <span  class="input-group-addon"><span id="idspanenddt" class="glyphicon glyphicon-calendar"></span></span> 
      
      </div> 
      </div>
      
       <div class="col-sm-offset-1 col-sm-2"> 
         <label class="control-label"></label>
       <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Search">                                                                                 
      </div>  
           
   </div>
         
   <div class="control-group">&nbsp;</div>
         
     <div  id="idallpatientsview" class="row">
  
      <div id="idgroupdone" class="lgroupdone  col-sm-offset-1 col-sm-3">
         <label class="control-label">Edit/View Tests Completed</label>    
        <ul id="testdone" class="list-group">
        <li class="list-group-item" color="green" >Select Test</li>
        </ul>
        </div> 
			   <div id="idgrouppend" class="lgrouppend  col-sm-offset-1 col-sm-3">
         <label class="control-label">View Tests Pending</label>    
        <ul id="testpend" class="list-group">
        <li class="list-group-item" color="green" >Pending Test</li>
        </ul>
        </div> 
       </div>
       <div id="idnotestmsgrowview" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-danger"><h4 id="idnotestmsgview"></h4></div> 
     </div>   
      </div> 
       
     </div>
     
</body>

     