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
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>2505-->
  
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
	 
function initallfields() {
     
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idallergy,#history,#idaddress').val('');
     $('#idbldgrp,#idsex,#idcatg,#iddob,#idht,#idwt,#idage,#idhistory,#idallergy,#idaddress').prop('readonly', true); 
      $('#idrecord').addClass('hidden') // show confirm
			 $('#identrypat').hide() // show confirm
     
}  
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
  
$(document).ready(function(){
   document.getElementById('idtextentrypat').value = ""; document.getElementById('idtextentrypaterr').innerHTML = "";
  initallfields()
  
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
      
       
         // document.getElementById("idname").value=fields.name;
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
            
                 
   }  // end good status
      
      })  // end post
      
})      
      
$(document).on('click','#idpatbtncan', function(){   // if cancel then set option to view and init all fields 
         
            document.getElementById('idtextentrypat').value = ""; document.getElementById('idtextentrypaterr').innerHTML = "";
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
  if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
?>  
  <div class="container">    
<h1> </h1>
</div>
<div class="container">
	<img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OPD RECORDS </h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
<form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>Patient Profile View</strong></h4></div> 
     
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
			    <div class="control-group">&nbsp;</div> 
     <fieldset class="scheduler-border"> 
       <legend class="scheduler-border">VIEW PROFILE:</legend>
       <div class="row">
       <div class="control-group"></div>
     
  
     <div class="col-sm-offset-1 col-sm-2">
        <label class="control-label" for="iddob">Date of Birth:</label>
     <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob">      
     </div>
     <div class=" col-sm-1">
        <label class="control-label" for="idage">Age:</label>
     <INPUT type ="number" min="1" max="120" class="form-control" id="idage" name ="nmage" >
       
     </div>
      <div class=" col-sm-1">
        <label class="control-label" for="idsex">Sex:</label>
     <INPUT type ="text" maxlength="1"  class="form-control" id="idsex" name ="nmsex">      
     </div>
        <div class=" col-sm-1">
        <label class="control-label" for="idht">Ht: </label>
       <INPUT type ="number"  class="form-control" id="idht" name ="nmht" >   
     </div>
     <div class="col-sm-2">
        <label class=" control-label" for="idwt">Wt:</label>
       <INPUT type ="text"  class="form-control" id="idwt" name ="nmwt" >
     </div>  
       <div class=" col-sm-1">
        <label class="control-label" for="idcatg">Category:</label>
     <INPUT type ="text" maxlength="2"  class="form-control" id="idcatg" name ="nmsex">      
     </div>
     <div class=" col-sm-1">
        <label class="control-label" for="idbldgrp">Bl.Group::</label>
     <INPUT type ="text" maxlength="2"  class="form-control" id="idbldgrp" name ="nmbldgrp">      
     </div>
       </div>
				
         <div class="control-group">&nbsp;</div>
          <div class="row">
						 <div class="col-sm-offset-1 col-sm-3 form-group">
        <label class="control-label">Address : </label>
       <textarea class="form-control" rows="5" id="idaddress" name ="nmaddress" ></textarea>
      </div>
     <div class="col-sm-3 form-group">
        <label class="control-label">Allergy:</label>
       <textarea class="form-control" rows="5" id="idallergy" name ="nmallergy"></textarea>
         </div>     
    
<div class="control-group"></div>
          
						<div class=" col-sm-5 form-group">
        <label class="control-label" >History:</label>
       <textarea class="form-control" rows="10" id="idhistory" name ="nmhistory"></textarea>
         </div> 
	</div>  					
				 </Fieldset>
 <div class="control-group">&nbsp;</div>        
 <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary" value= "E x i t">         
       </div> 
   <div class="col-sm-offset-2  col-sm-2">
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
