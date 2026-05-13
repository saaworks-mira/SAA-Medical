 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
    echo "access denied "; exit();
  }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">1905-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>1905-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>13/5/2019-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>

  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script 13/5/2019 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>  

  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
   <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>13/05/19-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>

   <script src="jquery.maskedinput.js" type="text/javascript"></script>
 
<style>
  
/* li a:hover  {background-color: blue} commented out as per shoba */
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
	
	.hlt {background-color: lightblue;}
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
	 var drugname=[];var drugid=[]; var drugenable=[];var druglastdatepur=[];
	
function loaddrugs() {
	$.post("ph_loaddrugdb.php",
     
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
     
       drugid.splice(0,drugid.length);drugname.splice(0,drugname.length);drugenable.splice(0,drugenable.length);
					druglastdatepur.splice(0,druglastdatepur.length);
				  drugname=fields.drugname;	 drugid=fields.drugid;	drugenable=fields.drugenable;druglastdatepur=fields.druglastdatepur;	
					
					$('#iddrug').empty()
/*					
//					 $('#iddrug').find('option:gt(0)').remove();
        var dropdown2 = document.getElementById("iddrug") 
      
          for(var i = 0; i < (drugid.length); i++) {
            var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i];
           dropdown2.appendChild(el);  
       
       } 
*/					
		}	
		else {
			msg='Program terminating with error '+ fields.msg
         alert(msg)
				 alert("kindly contact programmer")
				 $(document).off()
         return;}
		
   })     
}
function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
}  	
function initallfields() {
    $('[id$=err]').each(function(i, selected){ 
    document.getElementById(this.id).innerHTML = ""
    $(this.id).addClass('hidden')
	
  })    
  	$('#iddrug, #idconfdisable, #idclear').hide() ; document.getElementById("iddrugbtndisable").value = "Disable" 
   
     $('#iddrugmsgrow').addClass('hidden')
     $('#idname,#idtextdrug,#idstrength,#idgen,#idsgr,#idrate').val('');
  
  $('#idtype').val('Z'); 
}

$(document).ready(function(){    
   initallfields()
	 loaddrugs()
	 
$(document).on('blur', '#idtextdrug, #iddrug', function(e){ 
	       var thisid=this.id; 	   
		      var thisselid="iddrug";      // alert(thisselid);
	        var thistextid="idtextdrug"					  
       var thistextiderr=thistextid+'err' 
//     alert(e.relatedTarget.id)	;
	    setTimeout(function() {  
				var currid=document.activeElement.id;	 
//	   alert(currid);
	  // get id of dropdown in that row
		if (thisid.indexOf("idtext") != -1) {											 
     
			if ( currid == thisselid) {return}
	    }
		if (thisid.indexOf("iddrug") != -1) {
      
			if (currid == thistextid) {return;}
	    }
  
     // if you are on drug input then return because nothing to check
    
    if (  $("#"+thisselid).is(":visible"))   // if its open
      {      
       
        var textinp = (document.getElementById(thistextid).value).trim()      
         var pos=checkposinarray(drugname, textinp) 
         
    if (checkposinarray(drugname, textinp) == -1) {
       document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; $('.info').attr('data-original-title', ""); }
     else {
       document.getElementById(thisselid).selectedIndex = 0;
       document.getElementById(thistextiderr).innerHTML = "";
       document.getElementById("idtextdrugerr").innerHTML = ""
  document.getElementById('idtextdrug').value=$('#iddrug'+' option:selected').text()
  var valopt= $('#iddrug').val();
  var drugindx=drugid.indexOf(valopt);
    if ( document.getElementById('idtextdrug').value == "") {    // meaning dont show any iddrugient and clear everything        
       $('#idrecord').addClass('hidden')
       return;
     }
     if (drugenable[drugindx] == "E") {document.getElementById("iddrugbtndisable").value = "Disable"} 
		else {
			 document.getElementById("iddrugbtndisable").value = "Enable";  
		 } 
		
      var iddrugid = valopt;
		
      $.post("ph_viewdrugdatadb.php",
      { did: iddrugid},
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
				var drugindx=drugid.indexOf(valopt);
    
     if (drugenable[drugindx] == "E") {document.getElementById("iddrugbtndisable").value = "Disable"
				$('#idname,#idtextdrug,#idstrength,#idgen,#idsgr').prop('readonly',false);	$('#idtype').prop('disabled',false);
			  $('#iddrugbtnconf').prop('disabled', false);															} 
		else {
			 document.getElementById("iddrugbtndisable").value = "Enable";
			$('#idname,#idtextdrug,#idstrength,#idtype,#idgen,#idsgr').prop('readonly',true);
			$('#iddrugbtnconf').prop('disabled', true); $('#idtype').prop('disabled',true);
		 } 
				
				 document.getElementById('idtextdrug').value=$('#iddrug'+' option:selected').text()		
      // $('#idrecord').removeClass('hidden')
      
					
       
       document.getElementById("idname").value=fields.drugname;
					
				if (druglastdatepur[drugindx] > 0) {   // vikas
					$('#idname').prop('readonly',true);
				}
        document.getElementById("idstrength").value=fields.strength;
					
						
					 $('#idtype').val('Others');  // set it to last option by default. If any match below then it will be set to that matching element
					 var vtype=fields.type; vtype=vtype.toUpperCase();
				   var elm= document.getElementById("idtype");	
						for(i=0; i<elm.options.length;i++){
             var temp= elm.options[i].value;
						 temp=temp.toUpperCase();
             var pos=vtype.indexOf(temp);
						 if (pos!= -1) {
							 var temp=elm.options[i].value;  // get the original without uppercase
							  $('#idtype').val(temp);
							 break;
						 }         
          }  
		  
        document.getElementById("idgen").value=fields.genericname; 
        document.getElementById("idsgr").value=fields.subgroup;
        
           $('#iddrugconfrow').removeClass('hidden') // show exit
            
                 
   }  // end good status
      
      })  // end post
     }   
     $("#"+thisselid).hide()
      }
	},500);											 
 }) 
$(document).on('keydown','#idtextdrug',  function(e) {  // if user hits downkey then open dropdown
 
	if(e.which != 40) {return} 
  var thisselid='iddrug';
	$('#' + thisselid).show();document.getElementById(thisselid).selectedIndex=0;
	document.getElementById(thisselid).focus();
	
	$('#'+thisselid+' option:eq(0)').addClass('hlt')

}) 	
$(document).on('keyup click','#idtextdrug',function(){
	$("#iddrug").empty();

	 var txt=document.getElementById('idtextdrug').value;
  
  txt=txt.trim(); //remove spaces before and after text
	
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length > 0)  { // if input has non-alphabet characters
  	   document.getElementById('idtextdrugerr').innerHTML="invalid input"; $('#iddrug').hide();
      return;}
	
	
  document.getElementById('idtextdrugerr').innerHTML = "";
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var drugsfound=false;

     for (i = 0; i < (drugname.length); i++) {
         
      	var   pos=drugname[i].search(regvar)  
      if (pos != -1) { //search successful
         drugsfound=true;
         $("#iddrug").show(); 
         document.getElementById('idtextdrugerr').innerHTML=""; 
         var dropdown = document.getElementById('iddrug') 
        
         var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i]
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
				
      }     
    }  //end for
     
  if (!drugsfound) {$("#iddrug").hide();document.getElementById('idtextdrugerr').innerHTML="Invalid drug"; return;}
	 
	 $('#iddrug' + ' option:eq(0)').addClass('hlt');
	})

  $(document).on('click keydown','#iddrug',function(e){
		
	 $('.hlt').removeClass('hlt')
	if (e.type == 'keydown') {
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13 && keyCode != 9  ) {return}
	}
 
  document.getElementById('idtextdrug').value=$('#iddrug'+' option:selected').text()	
  $('#iddrug').hide()
		document.getElementById("idtextdrugerr").innerHTML = ""
  
  var valopt= $('#iddrug').val();
  var drugindx=drugid.indexOf(valopt);
    if ( document.getElementById('idtextdrug').value == "") {    // meaning dont show any iddrugient and clear everything        
       $('#idrecord').addClass('hidden')
       return;
     }
     if (drugenable[drugindx] == "E") {document.getElementById("iddrugbtndisable").value = "Disable"} 
		else {
			 document.getElementById("iddrugbtndisable").value = "Enable";  
			 
		 } 
		
      var iddrugid = valopt;
		
      $.post("ph_viewdrugdatadb.php",
      { did: iddrugid},
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
				var drugindx=drugid.indexOf(valopt);
    
     if (drugenable[drugindx] == "E") {document.getElementById("iddrugbtndisable").value = "Disable"
				$('#idname,#idtextdrug,#idstrength,#idgen,#idsgr').prop('readonly',false);	$('#idtype').prop('disabled',false);
			  $('#iddrugbtnconf').prop('disabled', false);															} 
		else {
			 document.getElementById("iddrugbtndisable").value = "Enable";
			$('#idname,#idtextdrug,#idstrength,#idtype,#idgen,#idsgr').prop('readonly',true);
			$('#iddrugbtnconf').prop('disabled', true); $('#idtype').prop('disabled',true);
		 } 
				
				 document.getElementById('idtextdrug').value=$('#iddrug'+' option:selected').text()		
      // $('#idrecord').removeClass('hidden')
      
					
       
       document.getElementById("idname").value=fields.drugname;
				if (druglastdatepur[drugindx] > 0) { // vikas
					$('#idname').prop('readonly',true);   
				}
        document.getElementById("idstrength").value=fields.strength;
					
						
					 $('#idtype').val('Others');  // set it to last option by default. If any match below then it will be set to that matching element
					 var vtype=fields.type; vtype=vtype.toUpperCase();
				   var elm= document.getElementById("idtype");	
						for(i=0; i<elm.options.length;i++){
             var temp= elm.options[i].value;
						 temp=temp.toUpperCase();
             var pos=vtype.indexOf(temp);
						 if (pos!= -1) {
							 var temp=elm.options[i].value;  // get the original without uppercase
							  $('#idtype').val(temp);
							 break;
						 }         
          }  
		  
        document.getElementById("idgen").value=fields.genericname; 
        document.getElementById("idsgr").value=fields.subgroup;
        document.getElementById("idrate").value=fields.lastpricepur;
           $('#iddrugconfrow').removeClass('hidden') // show exit
            $("#idclear").show();
                 
   }  // end good status
      
      })  // end post
})
	 

$(document).on('blur','#idname,#idtype', function(){   
        
  var thisid = this.id; var thiserrid=thisid+'err';
	if (thisid == "idname") {
 if (document.getElementById(thisid).value == "") {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden')          
						}
		else {
		         document.getElementById(thiserrid).innerHTML = ""
						 $('#'+thiserrid).addClass('hidden')  
		}
	}
	
	if (thisid == "idtype") {
          if (document.getElementById(thisid).selectedIndex == 0) {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden')          
						}
		
		else {
		         document.getElementById(thiserrid).innerHTML = ""
						 $('#'+thiserrid).addClass('hidden')  
		}
		}
           
       
})
 
 
$(document).on('click','#iddrugbtnconf', function (e) {
	  var valid=true;
	        if (document.getElementById("idtextdrugerr").innerHTML != "") {
						valid=false;}
				 if(document.getElementById("idname").value ==""){					 
					 document.getElementById("idnameerr").innerHTML = "Invalid"
					  $("#idnameerr").removeClass('hidden')
						valid=false;
				 } 
				 if($("select#idtype").val()  =="Z"){					 
					 document.getElementById("idtypeerr").innerHTML = "Invalid"
					  $("#idtypeerr").removeClass('hidden')
						valid=false;
				 } 
			      
					if (!valid){
						return;
					}
					
 	
     var  elmname=document.getElementById("idname").value         
     var  elmstrength=document.getElementById("idstrength").value 
     var  elmgen=document.getElementById("idgen").value 
     var  elmtype=$("select#idtype").val() 
    var   elmrate=document.getElementById("idrate").value 
		
		 
     var elmsgr = document.getElementById("idsgr").value  
		 
		 var valopt= $('#iddrug').val();
		 
      var iddrugid = valopt
       
    $.post("ph_updatedrugdb.php",
    {pdrugid:iddrugid, pname: elmname, ptype: elmtype, pstrength: elmstrength, pgen:elmgen,psgr: elmsgr,prate:elmrate},
    function(result, status){
  
    if (status) {
     
      var resultdata = JSON.parse(result)
      
      if (!resultdata.succfail) {   // if insert  a problem
       
        msg='Program terminating with error'+ resultdata.msg
        alert(msg)
       
         alert(" kindly contact programmer")
           $(document).off()
         return;}  
 //
		      
            $("#iddrugconfrow").addClass('hidden') 
            $("#iddrugmsgrow").removeClass('hidden')
						 $("#iddrugmsg").show()
            document.getElementById("iddrugmsg").innerHTML="  Updated  Drug Detail Successfully";
			     
            $("#iddrugmsg").fadeOut(1000, function(){
 //            $("#iddrugconfrow").removeClass('hidden')
//						 $('#idname,#idtextdrug,#idstrength,#idgen,#idsgr').val('');  
//             $('#idtype').val('Z'); $('#iddrug').hide();
							loaddrugs()
             }); 
	
        }
        
       else {
        msg='Program terminating with error '+ status
        
         alert(msg)
        
         alert(" kindly contact programmer")
       $(document).off()
         return;
      }
     
   })   //  end post     
     
})
$(document).on('click','#iddrugbtndisable', function (e) {  
	   if ((document.getElementById("idtextdrugerr").innerHTML == "")  && (document.getElementById("idtextdrug").value != "")) {
			  if ($("#iddrug").is(":visible"))  {$("#idconfdisable").hide();return;}
	        else 
	         { $("#idconfdisable").show();} 
	  }
	else
	  { $("#idconfdisable").hide();} 
	})
$(document).on('click','#idconfdisable', function (e) {
		 
		 var valopt= $('#iddrug').val();
		 
      var iddrugid = valopt;
	    if (document.getElementById("iddrugbtndisable").value == "Enable"){  var elenable="E"} else {var elenable="D"}
      
    $.post("ph_endisdrugdb.php",
    {pdrugid:iddrugid, penable: elenable},
    function(result, status){
  
    if (status) {
     
      var resultdata = JSON.parse(result)
      
      if (!resultdata.succfail) {   // if insert  a problem
       
        msg='Program terminating with error'+ resultdata.msg
        alert(msg)
       
         alert(" kindly contact programmer")
           $(document).off()
         return;}  
 //
		      
            $("#iddrugconfrow").addClass('hidden') 
            $("#iddrugmsgrow").removeClass('hidden')
						 $("#iddrugmsg").show()
						 if (elenable == "E") { document.getElementById("iddrugmsg").innerHTML="  Drug Enabled Successfully"; } 
			        else {document.getElementById("iddrugmsg").innerHTML="  Drug Disabled Successfully";}
          
			     
            $("#iddrugmsg").fadeOut(500, function(){
 
							loaddrugs()
							$('#idname,#idtextdrug,#idstrength,#idgen,#idsgr').prop('readonly',false);	$('#idtype').prop('disabled',false);
			        $('#iddrugbtnconf').prop('disabled', false);	
             }); 
	
        }
        
       else {
        msg='Program terminating with error '+ status
        
         alert(msg)
        
         alert(" kindly contact programmer")
       $(document).off()
         return;
      }
     
   })   //  end post     
     
})

	$(document).on('click','#idclear',function(){
		location.href="ph_editdrugmaster.php";
	})
	
$(document).on('click','#iddrugbtncan, #iddrugbtncont',function(){   // if cancel then set option to view and init all fields 
         
          
          location.href = "opdmenu.php";      // put ashrammed.php in quotes. Earlier it was not...vikas
          
 })
$("input:radio[name=optradio]").change(function() {
     
   if (this.id == "idradioentry") {
    
     location.href="ph_drugmaster.php"
     return false;
   }
      
    
  
})     

})


</script>
</head>
<body>

 

  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fiddrug" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
	
   <div class="row">
		  
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong> EDIT DRUG DATA</strong></h4>
     </div> 
		 <div class=" col-sm-2">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioentry"   name="optradio"><strong>NEW DRUG ENTRY</strong></label></div>
		 
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="auropharmamenu.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a>
     </div>
   </div>
        <div class="control-group">&nbsp;</div> 
  
   
  
    <div class="control-group">&nbsp;</div> 

  <div class="row form-group"> 
    
	 <div id="idalldrug" class="col-sm-offset-2 col-sm-3">  
     <label for="idtextdrug">Drug Name:</label>
      <INPUT type ="text" id="idtextdrug" placeholder="Type Drug Name" class="cvvlong  form-control"></INPUT>
      <select select size="5" id="iddrug"  class="form-control">
   
     </select>
     <span class="centerstrong" id="idtextdrugerr"></span>
    </div> 
		 <div class="col-sm-2"> 
      
				 <Input type="button" name="nmiddrugbtndisable" id="iddrugbtndisable" class="vtop2 btn btn-primary"  value= "Disable"></Input>
         </div>  
		 <div class="col-sm-2"> 
				 <Input type="button" name="nmidconfdisable" id="idclear" class="vtop2 btn btn-primary"  value= "Clear for New Edit "></Input>
         </div>  
		 <div class="col-sm-2"> 
				 <Input type="button" name="nmidconfdisable" id="idconfdisable" class="vtop2 btn btn-primary"  value= "Click to Confirm "></Input>
         </div>  
		
</div> 
		<div class="control-group">&nbsp;</div>
	 
	 
     <div id="idrecord">
			    
     <Fieldset class="scheduler-border"> 
       <legend class="scheduler-border">EDIT DRUG:</legend>
       <div class="row">
       <div class="control-group"></div>
      <div class="req col-sm-offset-2 col-sm-3">
        <label class="control-label" for="idname">Drug Name :</label>
			 <INPUT type ="text"  maxlength="30"  class="form-control" id="idname" name ="nmname" ></INPUT>  
				<span class="text-danger" id="idnameerr"></span> 
     </div>
       <div class=" col-sm-2">
    <label class="control-label" for="idstrength">Strength:</label>
      
				 <Input type="text" id="idstrength" name="strength"  class="form-control"></Input>
       <span class="text-danger" id="idstrengtherr"></span> 
     </div>
		<div class="col-sm-2"> 
    <label class="control-label" for="idtype">Type:</label>
     
   <select id="idtype" name="typenm"  class="form-control ">
        <option value="Z" disabled  selected>Select Type</option>
        <option value="Tab">Tab</option>
        <option value="Cap">Cap</option>
        <option value="Liq">Liq</option>
        <option value="Oint">Oint</option>
         <option value="Inj">Inj</option>
        <option value="Pdr">Pdr</option>
		     <option value="Pc">Pc</option>
	 <option value="drops">drops</option>	     
        <option value="Others">Others</option>
     
       </select>
       <span class="text-danger" id="idtypeerr"></span> 
     </div>
		  <div class=" col-sm-2">
    <label class="control-label" for="idrate">Price:</label>
      
				 <Input type="number" id="idrate" name="rate"  class="form-control"></Input>
       <span class="text-danger" id="idstrengtherr"></span> 
     </div>
    
    </div>
			  <div class="control-group">&nbsp;</div> 
			  <div class="control-group">&nbsp;</div> 
			 <div class="row">
			<div class=" col-sm-offset-2  col-sm-3">
    <label class="control-label" for="idgen">Generic Name:</label>
      
				<Input type="text" id="idgen" name="gen"  class="form-control"></Input>
       <span class="text-danger" id="idgenerr"></span> 
     </div>
    	<div class="req col-sm-offset-1  col-sm-3">
    <label class="control-label" for="idsgr">Subgroup Name:</label>
      
				<Input type="text" id="idsgr" name="sgr"  class="form-control"></Input>
       <span class="text-danger" id="idsgrerr"></span> 
     </div>

       <div class="control-group"></div>
     
			 </div>
			 </Fieldset>  
   
    <div class="control-group">&nbsp;&nbsp;</div> 
    <div id="iddrugconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
				 <Input type="button" onclick="location.href='auropharma.php';" name="nmiddrugbtncan" id="iddrugbtncan" class="btn btn-primary vtop" value= "E x i t"></Input>
        
       </div>       
      
       <div class="col-sm-2"> <!-- col-sm/offset-2 col-sm-2 --> 
          
				 <Input type="button" name="nmiddrugbtnconf" id="iddrugbtnconf" class="vtop btn btn-primary"  value= "Confirm"></Input>
         </div>                                               
                        
      </div>
 </div> 
	
 <div id="iddrugmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 col-sm-3 text-success"><h4 id="iddrugmsg"></h4></div>
         
 </div>     

 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div> 
	 </div> 
    </form>  
    </div>
 
</body>
</html>

 