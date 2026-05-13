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
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>2305-->
  <!--script src="datepicker/js/bootstrap-datepicker.js"></script-->
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script-->
    <!--link rel="stylesheet" href="datepicker/css/datepicker.css"-->
  
     <!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">1505-->
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">


    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>13/5/2019-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>1505-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  
  
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
	getgenericname();       // vikas
	
function getgenericname()  {     // vikas

  // get all drugs
      $.post("op_getgenericname.php", 
        function(result, status){ 
//    alert(result)
        if (status) {
       
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
      genericname=fields.genericname;  
      
   }  // end good status
      
 })  // end post    
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
  
var  x= "http://www.collectedworksofsriaurobindo.com/pharmacy/op_viewopdvisit.php";

  
 var y="http://www.collectedworksofsriaurobindo.com/pharmacy/auropharmamenu.php";

  if (document.referrer == x) {
    $('#idpatbtnopd').removeClass('hidden');
    $('#idpatbtnpharmacy').addClass('hidden');
  }
  else
    if (document.referrer == y)
  {
       $('#idpatbtnpharmacy').removeClass('hidden');
   $('#idpatbtnopd').addClass('hidden');
   
  }
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
    var gnfound=false;
    var gnlen=genericname.length
     for (i = 0; i < (gnlen); i++) {

   	var   pos=genericname[i].search(regvar)  
      if (pos != -1) { //search successful
        gnfound=true;
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
         var  opt = genericname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
      //     el.value = patientid[i]
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }     
      }  //end for
 
  if (!gnfound) {
    $('#'+thisselid).hide(); $("#idopd").find("option:not(:first)").remove();
     document.getElementById(thisiderr).innerHTML="Invalid genericname";} 
})
                 



$(document).on('change','#identrypat',function(){   // get labs from opdtest for that opdid
  
   var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)   
  var thistextiderr=thistextid+'err'    // vikas
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()   // vikas
  document.getElementById(thistextiderr).innerHTML="" 
  
  var valgn= $('#identrypat').val();  // selected value from the opddate dropdown
 
         initallfields()
       
  
          
        var valgn=$('#identrypat option:selected').val()   
 //        var valgn= $('#identrypat').val();  
  
   $.post("op_viewgndata.php",
    {pgn: valgn},
          
    function(resultd, statusd){
//   alert(resultd)
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
      
       var pdrugname=fieldsd.drugname; 
       var pdrugid=fieldsd.drugid;
   //   alert(pdrugid)
      var pdruglen=pdrugid.length
       for (i = 0; i < (pdruglen); i++){
        
      //    var desc='<li class="list-group-item">' +  pdrugname[i]+'</li>';  
    var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + pdrugname[i]+'</li>';
        $("#testlist").append(desc);
         }
/*
  var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'----'+docname[i]+'</li>';  

*/
           
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
      
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }   
   })   //  end post    
                 
   })  // end good status
      
      })  // end post
      
      

 

$(document).on('click','#idpatbtnopd', function(){   // if cancel then set option to view and init all fields 
         
          location.href = "op_viewopdvisit.php";
          
})
  
  $(document).on('click','#idpatbtnpharmacy', function(){   // if cancel then set option to view and init all fields 
    
         location.href = "auropharmamenu.php";
          
})
$(document).on('click','#idpatbtnprint', function(){   // if cancel then set option to view and init all fields 
         
 //             $("#rtmn").addClass('hidden')
	$("div.lgrouptest").addClass('hidden')
              $("#idpatconfrow").addClass('hidden')
              window.print()
							$("div.lgrouptest").removeClass('hidden')
              $("#idpatconfrow").removeClass('hidden')
             
})

//})
  
</script>
</head>
<body>
 <?php
		
  
 
	?>
 
  
  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><a id="rtmn" href="http://medical-sriaurobindoashrammed985614.codeanyapp.com/ashrammed/ashrammedmain.php" ><h3 ><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong></h3></a></h3>
    <hr style="border-top: 5px solid #ff0000 !important; ">

  <p></p>
</div>

<div id="idcontainer" class="container">
<form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>View Generic Name related Drugs Information</strong></h4>
     </div> 
      
       <!-- <div class="text-success">
          <a id="rtmn"  href="op_opdvisit.php" ><h5><strong> Click to OPD VISIT ENTRY</strong></h5></a>                   // shoba 09/07/18.  Removed the Return to the Menu  elemtn and given the href
            </div>                                                                                                            connect tion to SRI AUROBINDO ASHRAM OPD RECORDS so to go to main menu we should click 
       <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>                      RI AUROBINDO ASHRAM OPD RECORDS
        
   </div>-->
    </div>
    <div class="control-group">&nbsp;</div> 
   <div class="row">
     <div id="idalladms" class="col-sm-3"> 
   <label>GENERIC NAME:</label>
       <INPUT type ="text" id="idtextentrypat" placeholder="First Click here to list Generic names" class="cvvlong  form-control"></INPUT>
      <select select size="10" id="identrypat"  class="form-control">  
     </select>  <span class="text-danger centerstrong" id="idtextentrypaterr"></span> 
    </div> 
        
       
  
    
  
     
       <div class="control-group">&nbsp;</div>
      
			 <div class="lgrouptest  col-sm-3">
				 <!-- <label class="control-label">Drugs Available in Pharmacy</label>  -->
        <ul class="list-group" id="testlist">        
      <li class="list-group-item" id="chk0"><font size="3" ><strong>Drugs Available in Pharmacy</strong></font></li>    
        </ul>
        </div>  
   
    <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtnopd" class="btn btn-primary vtop" value= "OPD">         
       </div> 
     
      <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtnpharmacy" class="btn btn-primary vtop" value= "PHARMACY">         
       </div> 
       
       </div>    
 
     

</div>
</form>
   </div>
</body>
</html>  
       