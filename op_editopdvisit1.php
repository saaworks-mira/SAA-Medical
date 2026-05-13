<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">2405--> 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
  
   <!--link rel="stylesheet" href="datepicker/css/datepicker.css"
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>2405-->
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
	 var testid = []; var testname=[];var completion=[];var opddate=[];var opdtestid=[];
	 var sex=[];var deletelist=[];var insertlist=[];var age=[];
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
function initallfields() {
     
      
//      $('#idpatconfrow').addClass('hidden') // show confirm
    
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idallergy,#idcomplaint').val('');
     $('#iddob,#idht,#idwt,#idage,#idbp,#idtemp,#idcomplaint,#idcf,#idpulse,#idresp,#idallergy,#idmedpresc').prop('readonly', false);
	  $('#idtreatdr,#idrefdr').val("Z");
      $('#iddob,#idage').prop('readonly', true); $("#idsex,#idcatg,#idbldgrp").prop("disabled", true);
}  
  
$(document).ready(function(){
  $('#identrypat').hide(); // vikas
	document.getElementById("idtextentrypaterr").innerHTML= ""
	 document.getElementById("idtextentrypat").value= ""	
  initallfields()
	 
$('#idrecord').addClass('hidden')

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

$(document).on('change','#testlist > li > :checkbox',function(){	  // this will process click on a checkbox that is under an li that is under
	var thisid=this.id                                             // the element with id testlist which is the list of all tests
  var checked = $(this).is(':checked');
	var testthisid=thisid.substr(3)
	if (!checked)      // unchecking the box
		{		
			var selid='testsel'+testthisid             // substr 3 because checkbox has id chk+testid. THe checkbox under the li has id 
			var selchkid='testselchk'+testthisid           // testselchk+testid
			var elm='#testsel > #'+selid            
			var elmchk='#testsel > li > #'+selchkid    
			if ($(elmchk).length != 0) {return;}   // if there is a checkbox in the testsel that means it has been completed so cant delete
			  $(elm).remove()
			
		}
  else      // if we are checking it then put in proper place in the testsel list
		{
			
    var testnm=$(this).val()
	 var elm='#testsel > [id^=testsel]'    // all elements that start with id=testsel and are under testsel list. So all the li elements  
	 var len=  $(elm).length;
	 if (len == 0) {
		 var desc='<li id="testsel' + testthisid +'" class="list-group-item"' + '"><a>'+testnm+'</a>'+"</li>"; 
      $('#testsel').append(desc);	
	 }	
	else {	
		$(elm).each(function(index,element) {   // get all of them
		if (testnm == ($(this).text())) {return false;}
		
		if (testnm < ($(this).text())) {
			var desc='<li id="testsel' + testthisid +'" class="list-group-item"' + '"><a>'+testnm+'</a>'+"</li>";  
		 $(this).before(desc)
      return false;
      }
    if (index == len - 1) {
			var desc='<li id="testsel' + testthisid +'" class="list-group-item"' + '"><a>'+testnm+'</a>'+"</li>"; 
      $('#testsel').append(desc);	
		 }
	})
	}
	}		
	
})
$(document).on('change','#idopd',function(){
  $('[id$=err]').each(function(i, selected){ 
     var thisid=this.id 
		 document.getElementById(thisid).innerHTML="";
		 })		 
  var valopt= $('#idopd').val();
     if (valopt == "Z") {    // meaning dont show any patient and clear everything      
       $('#idrecord').addClass('hidden')
       return;
     }

//      var patid=valopt;
      $.post("op_viewopddata.php",
      { pid: valopt},
      function(result, status){ 
     
        if (status) {
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg);$(document).off();
         return;}
      $('#idrecord').removeClass('hidden')
       
         initallfields()
       $('#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idallergy,#idcomplaint').val('');
         
        var temp=fields.sex; $('#idsex').val(temp);temp=fields.catg; $('#idcatg').val(temp);temp=fields.bldgrp; $('#idbldgrp').val(temp);
        var temp=fields.treatdr; $('#idtreatdr').val(temp);temp=fields.refdr; if (temp=="" || temp==" "){$('#idrefdr').val("Z")};
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
          
           $('#idpatconfrow').removeClass('hidden') // show exit
// now get data for tests  
			     // get all maintenance data from maint table using admission id
      
      $.post("op_viewtestdata.php",
      { popdid: valopt},
      function(result, status){
      
      if (status) {
          var fields = JSON.parse(result); 
       
      if (!fields.succfail) { // if Insert or mod was a pralert(result);oblem
        msg='Program terminating with error '+ fields.msg
         alert(msg);$(document).off();
         return;}
        $('#testsel > li').slice(1).remove()
      if (!fields.testsfound)  {      // if no tests found unhide msgrow
         
           $('#idnotestmsgrow').removeClass('hidden')
           document.getElementById("idnotestmsg").innerHTML="No tests found";        
           return;}
        document.getElementById("idnotestmsg").innerHTML="";     // otherwise initialize message with null
        $('#idnotestmsgrowview').addClass('hidden')

         $('#testsel > li').slice(1).remove()      // remove all previous test to fill with the new ones from database
				  var temp='#testlist input[type="checkbox"]'   
         $( temp).attr('checked', false);
       testid.splice(0, testid.length);age.splice(0, age.length);
          testname.splice(0, testname.length);opddate.splice(0, opddate.length);sex.splice(0, sex.length);
         completion.splice(0, completion.length); opdtestid.splice(0, opdtestid.length);
          testid = fields.testid;  testname=fields.testname;
        completion=fields.completion;opddate=fields.opddate;opdtestid=fields.opdtestid;sex=fields.sex;age=fields.age;
				deletelist.splice(0, deletelist.length);  insertlist.splice(0,  insertlist.length); 
				   
          for (var i = 0; i < testid.length; i++) { 

         if (completion[i] == "N") {
      var desc='<li id="testsel' + testid[i] +'" class="list-group-item"' + '"><a>'+testname[i]+'</a>'+"</li>";            
         
     $("#testsel").append(desc); }
     else {
			 
        var lnk=$('#identrypat').val() +'-' + opddate[i].substr(6,2)+ opddate[i].substr(4,2) +opddate[i].substr(0,4) + '-' + testname[i] +'.html';    
       var desc='<li id="testsel' + testid[i] +'" class="list-group-item"' + '">'+'<a href="opdreports/'+lnk+'" target="_blank">'+
           testname[i]+'</a><input id="testselchk'+testid[i]+'" type="checkbox"  checked disabled></li>';               
                
        $("#testsel").append(desc);
			 
      }  
						
  } 
    $('#testsel > li').each(function(i, selected){
	 var thisid=this.id // get id of li 
	 
	 var chkid='chk'+thisid.substr(7)
	 var elm='ul#testlist '+'#'+chkid

	 $(elm).prop('checked', true)
     })
		
 }  // end good status
else {
	msg='Program terminating with error '+ fields.msg
         alert(msg); $(document).off();
         return;}
      })                		 
// till here                 
   }  // end good status
else {
	msg='Program terminating with error '+ fields.msg
         alert(msg);$(document).off();
         return;}				
      
      })  // end post
      

 })      
  $(document).on('blur','#idht,#idwt,#idbp, #idtemp,  #idtreatdr, #idpulse, #idresp',  function(){
          
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
  }
//12 Dec 25 vik
      
          
            var tempinp=document.getElementById(thisid).value
            if ((tempinp.trim().length === 0) || (document.getElementById(thisid).value == "")){ 
              document.getElementById(thisid).value=0
           document.getElementById(thiserrid).innerHTML = ""
           $('#'+thiserrid).addClass('hidden'); return }

           if (document.getElementById(thisid).value == 0){ 
              document.getElementById(thiserrid).innerHTML = ""
             $('#'+thiserrid).addClass('hidden'); return }

          if(thisid=="idht"){
            checklimit(thisid,60,300)
           return
          }
       
     if(thisid=="idwt"){
        checklimit(thisid,5,250)
          return
        }
     
     if(thisid=="idresp"){
        checklimit(thisid,10,200)
      return
      }
   
  if ( thisid == "idbp") {
      checkbp(thisid) 
      return
   }      
  
  if(thisid=="idpulse"){
    checklimit(thisid,20,150)
       return
     }

  if(thisid=="idtemp"){
    checklimit(thisid,80,110)
return
     }
 
// dec 12 vik
}) 
      
$(document).on('click','#idpatbtnconf', function (e) {
    $('#idpatbtnconf').prop("disabled",true);
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {
         
        document.getElementById('idpatinpconf').value = ""
var tempinp=document.getElementById("idwt").value
          if ((tempinp.trim().length === 0) || (document.getElementById("idwt").value== "")){ 
              document.getElementById("idwt").value=0
           document.getElementById("idwterr").innerHTML = ""
           $('#idwterr').addClass('hidden') ;return }

          tempinp=document.getElementById("idtemp").value
          if ((tempinp.trim().length === 0) || (document.getElementById("idtemp").value== "")){ 
              document.getElementById("idtemp").value=0
           document.getElementById("idtemperr").innerHTML = ""
           $('#idtemperr').addClass('hidden') ;return }

           tempinp=document.getElementById("idpulse").value
           if ((tempinp.trim().length === 0) || (document.getElementById("idpulse").value == "")){ 
              document.getElementById("idpulse").value=0
           document.getElementById("idpulseerr").innerHTML = ""
           $('#idpulseerr').addClass('hidden') ;return}
           tempinp=document.getElementById("idresp").value
           if ((tempinp.trim().length === 0) || (document.getElementById("idresp").value == "")){ 
              document.getElementById("idresp").value=0
           document.getElementById("idresperr").innerHTML = ""
           $('#idresperr').addClass('hidden');return }
// dec 12 vik

        fieldsvalid="Y"
       $('[id$=err]').each(function(i, selected){ 
      var temp = document.getElementById(this.id).innerHTML
      
       if (temp.indexOf("Invalid") != -1) {
          fieldsvalid="N" }
    })
        if (fieldsvalid=="N") {
					$('#idpatbtnconf').prop("disabled",false);
          return }
			
			var elm='#testsel > [id^=testsel]'    // all elements that start with id=testsel and are under testsel list. So all the li elements  
	    var len=  $(elm).length 
			var arraysel=[]
		  $(elm).each(function(index,element) { 
				var thisid=this.id
				 arraysel.push(thisid); 				
				var pos=testid.indexOf(thisid.substr(7))	// if present in list of testids
			  if (pos ==-1) {
					var testidnm=thisid.substr(7) +'-'+ $(this).text();
				 insertlist.push(testidnm);
				
			  }				  
       })	
			if (insertlist.length > 0) {var insertpresent='y'} else {var insertpresent='n'} 
			 for (var i = 0; i < testid.length; i++) { 
				 var temp='testsel'+testid[i]
				 var pos=arraysel.indexOf(temp)
				 if (pos ==-1) {
				 deletelist.push(opdtestid[i]);
					
			   }		
			 }	 
				if (deletelist.length > 0) {var deletepresent='y'} else {var deletepresent='n'} 
//	from here shobha	

     var  elmht=document.getElementById("idht").value 
     var  elmwt=document.getElementById("idwt").value              
     var  elmdob=document.getElementById("iddob").value
     var  elmage=document.getElementById("idage").value
       
     var  elmbp=document.getElementById("idbp").value 
     var  elmtemp=document.getElementById("idtemp").value 
     var  elmpulse=document.getElementById("idpulse").value 
     var  elmresp=document.getElementById("idresp").value 
     var  elmcomplaint=document.getElementById("idcomplaint").value 
     var  elmcf=document.getElementById("idcf").value 
     var  elmallergy=document.getElementById("idallergy").value 
     var  elmtreatdr=$("#idtreatdr option:selected").text(); var  elmbldgrp=$("#idbldgrp option:selected").text();
			var  elmsex=$("#idsex option:selected").text();var  elmcatg=$("#idcatg option:selected").text()
     var sel=document.getElementById("idrefdr").selectedIndex;
     if (document.getElementById("idrefdr").options[sel].value == "Z") { var  elmrefdr =""}
         else {  elmrefdr=$("#idrefdr option:selected").text()}
     var elmmedpresc=document.getElementById("idmedpresc").value ; 
      var valopdid= $('#idopd').val();var valopddt= $('#idopd option:selected').text(); 
			var valpatid= $('#identrypat').val();var valpatnm=$("#identrypat option:selected").text();
			var vopddt=valopddt.substr(6,4)+valopddt.substr(3,2)+valopddt.substr(0,2)
			var elmaddress="";
      
    $.post("op_opdupdatedb.php",
    { popdid:valopdid, ppatientid:valpatid, ptname: valpatnm,psex:elmsex,popddt:vopddt,pcatg:elmcatg,pbldgrp:elmbldgrp,pmedpresc:elmmedpresc,
    pht: elmht, pwt: elmwt, pdob: elmdob, page: elmage, pbp: elmbp, ptemp: elmtemp, ppulse: elmpulse,presp:elmresp,pcomplaint: elmcomplaint,
		 psex:elmsex, paddress:elmaddress, 
    pcf:elmcf, pallergy: elmallergy, ptreatdr: elmtreatdr, prefdr: elmrefdr,pinsertlist:insertlist, pdeletelist:deletelist,pinsertpresent:insertpresent, pdeletepresent:deletepresent},
		
    function(result, status){
//    alert(result)
    if (status) {
    
    var  resultdata = JSON.parse(result)
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg);$(document).off()
         alert("kindly contact programmmer")

               return;}  
     
            document.getElementById('idpatinpconf').value = ""
						$('#idpatbtnconf').prop("disabled",false);
            $("#idpatconfrow").addClass('hidden') 
            $("#idpatmsgrow").removeClass('hidden')
						 $("#idpatmsg").show()
            document.getElementById("idpatmsg").innerHTML="  Edit Record  successfull";
            $("#idpatmsg").fadeOut(3000, function(){
             $("#idpatconfrow").removeClass('hidden')
					$("#idopd").find("option:not(:first)").remove();
							document.getElementById("idtextentrypaterr").innerHTML="";document.getElementById("idtextentrypat").value="";
              initallfields();$('#idrecord').addClass('hidden')            
             });         
       
              
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


 

$(document).on('click','#idpatbtncan', function(){   // if cancel then set option to view and init all fields 
         
           document.getElementById("idtextentrypaterr").innerHTML="";document.getElementById("idtextentrypat").value="";
            $("#idopd").find("option:not(:first)").remove();
	             var temp='#testlist input[type="checkbox"]'   
              $( temp).attr('checked', false);
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
     
        
 $sql = "SELECT testid,testname FROM labtest order by testname ASC";   // get all tests
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

	$conn->close();
	
	
?>  
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
	<h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class="form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>EDIT OPD Visit Entry</strong></h4></div> 
     
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>
     </div>
   </div>
   
    <div class="control-group">&nbsp;</div>
      
   <div class="row">
     <div id="idallpats" class="col-sm-3"> 
    <label>PATIENT NAME:</label>
     <INPUT type ="text" id="idtextentrypat" placeholder="Type Patient Name" class="cvvlong  form-control">
      <select select size="5" id="identrypat"  class="form-control">  
     </select>  <span class="text-danger centerstrong" id="idtextentrypaterr"></span>    </div> 
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
            <span class="text-danger" id="idresperr"></span>
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
         <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" ></INPUT>
        </div>
       </div> 
       <div class="col-sm-2">
         
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                    
          </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>      
 </div>          
 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
	 </div> 
</div>
</form>
</div> 
</body>
</html>
     