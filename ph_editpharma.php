<?php
// echo '1';

// Get the content that is in the buffer and put it in your file //
// file_put_contents('yourpage.html', ob_get_contents());
?>

<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

 
 <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">13.05 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
  
   <!--link rel="stylesheet" href="datepicker/css/datepicker.css"-->
   <!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">1505-->
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>1505-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
 <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>1505-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
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
  .centerstrong {
    font-weight:bold !important;
    text-align: center !important;
    font-family: verdana !important;
    font-size: 16px !important;
    color: red !important;
  }  
	.hlt {background-color: lightblue;}
table {
    table-layout: fixed;
}
  .font16 {font-size:16px}
  .font17 {font-size: 16px;font-weight: bold;}
select#identrypat option, select#idsel-0101 option { font-size: 16px; font-weight: bold; }
select[id^="idsel-"]  option {
 font-size: 16px; font-weight: bold;
}		
input.cvlong {
  width: 200px;
}
input.cvwlong {
  width: 90%;
}  	
input.cvvlong {
  width: 200px;
}  
input.clong {
  width: 110px;
}
.cvvshort {
  width: 7%;
  text-align: center;
  margin: 0 auto;
}  
input.cvid {
  width:2%;
  text-align: center;
  margin: 0 auto;
}   
input.cvshort {
  width:75%;
  text-align: center;
  margin: 0 auto;
}
.cvmed {
   width:21%;
  text-align: center;
  margin: 0 auto;
}   
 .cvmed1 {
   width:9%;
  text-align: center;
  margin: 0 auto;
} 
.cvmed2 {
   width:10%;
  text-align: center;
  margin: 0 auto;
}     
   
/* Tooltip #E2E4FF 800080;#84C0E4  */
   .tooltip.right > .tooltip-inner {
         background-color:	#F5DEB3; 
      color:Black; 
		 font-size:17px;
     margin-left:20px;
  }
 .tooltip.right > .tooltip-arrow {
   width: 15px; 
  height: 0px; 
  border-right:20px solid blue;
	margin-left: 0px;
	}	

select#identrypat option:hover {
background-color: yellow;
	}
	.greyclr {color: brown}

 #idtable { width:99%;} 
 
 
table.dataTable tr.odd { background-color:#cce0ff ; } 
table.dataTable tr.even { background-color:#cce0ff; } 
#idtable th, #idtable td { text-align: center;}  
th.dt-center, td.dt-center { text-align: center; }
  table.dataTable thead th { 
    text-align: center;
    background: #ffcccc;
  }


</style>

<script type="text/javascript"> 
 // entry purpose
  var drugname=[]; var drugid=[];var drugstrength=[]; var drugtype=[]; var lastpricepur=[]; var patientname=[]; var patientid=[]; var prstk=[]; var clstk=[];
  var opdstk=[];var qtyissued; var genericname=[];
  var druggenericname=[]; // june 9 vikas
  var tgross = 0; var ttax=0; var tdisc=0; var tnet=0; var lastrow=0; var newgross=0;
	var ageview=[]; var dobview=[];var address=[];
  //view purpose
    var dtofissue=[];  var vdrugname=[]; var vstrength=[]; var vdrugtype=[];var vpatientname=[];var vopdstk=[]; var vpatientname=[]; var vdocname=[];
  var vgenericname=[]; // june 9 vikas
   var vqtyissued=[]; var vamount=[]; var totalamt=[]; var issueauth=[];var vrate=[]; var vclstk=[];var vprstk=[];    // stkafterissue is now clstk
     
  var visitdrpdwn=false; var currentid; var globalid; var glob;

function trycheck(elmtochk) {
	
    if (($("#"+elmtochk).length > 0) || (glob > 20)) {
			cancelAnimationFrame(globalid);
    }else {
			glob=glob+1
      globalid=window.requestAnimationFrame(trycheck); 
     }
  }	
 function checkheaders()  {       //   check for inputs for all non table fields. they start with idhdr
  /* 
  if ($("#idhdrdoc").val() == "Z") {
			document.getElementById("idhdrdocerr").innerHTML = "Invalid Doctor";return false; }
	else 
		 {document.getElementById("idhdrdocerr").innerHTML = "";} 
 */		 
	if (document.getElementById("idtextentrypat").value == "") {
		document.getElementById("idtextentrypaterr").innerHTML = "Invalid Patient";return false; }
	if (document.getElementById("idtextentrypaterr").innerHTML != "") {return false;}
	return true;
}  
/*
  function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
} 
*/ 
 
function checktblinputs()  {       //   check for inputs If not valid then flag error and return false. all inputs start with idsel or idinp

   var allgood=true
  
 //$('input[id^=idtextsel]').each(function(i, selected){ 
  
 //    var thisid=this.id  
 //    var thisiderr=thisid+'err'  
    
 //    if (document.getElementById(thisiderr).innerHTML != "")  { allgood=false; }
 //      else 
 //      { if (document.getElementById(thisid).value == "") {
        
 //          document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
         
  //          allgood=false }
 /*        else 
         {
 //        
         var thisrowid=$(this).parents('tr').attr('id')  // get id of dropdown in that row
         var thisselid="idsel-"+ thisrowid.slice(-2)+"01"
         if (  $("#"+thisselid).is(":visible"))   // if its open
            {  
             
             var thistextid="idtextsel-"+ thisrowid.slice(-2)+"01" 
             var thistextiderr=thistextid+'err' 
             var textinp = (document.getElementById(thistextid).value).trim()
						 var pos=checkposinarray(drugname, textinp)
             if (pos == -1)
             {document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; allgood=false}
            else {
              document.getElementById(thisselid).selectedIndex = pos;document.getElementById(thistextiderr).innerHTML = "";
                 }   
            $("#"+thisselid).hide()          
            } 
           else {document.getElementById(thisiderr).innerHTML = ""}
       } */
  //  }
 //  })
 /*vik   
  $('input[type="number"][id^=idinp]').each(function(i, selected){       // get all input elements starting with idinp
   // var allgood=true 
    var thisid=this.id
      var thisiderr=thisid+'err'   
      var last2 = thisid.slice(-2); 
     
    if (!document.getElementById(thisid).readOnly) {   // check only enterable fields
  //    if (this.type == "number") {                      // check if element is number type
        // mandatory fields and other than 04 and 09 and 14
         if(!(document.getElementById(thisid).value > 0)) {    // if value not > 0 then flag error            
          
           document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"            
            allgood=false}
         else {document.getElementById(thisiderr).innerHTML = ""}
 //        }  // end check of mandatory fields
        
        // end if number 
       // check if text type
      
   
    }   // end if not readonly 
           
})
*/
	// shobha
//vik	$('input[id^=idinp][id$=05]').each(function(i, selected) {    //  this selected all elements ending in 05
         $('input[id^=idinp][id$=04]').each(function(i, selected) {
		var thisid=this.id; var thisiderr=thisid+'err';
		var inpqty=parseInt(document.getElementById(thisid).value)

	     if (!Number.isInteger(inpqty)) 
                {document.getElementById(thisid).value = 0;inpqty=document.getElementById(thisid).value;
               document.getElementById(thisiderr).innerHTML = "&nbsp;Invalid Must be a number";
                 } 
             else {
               if ((inpqty < 1) || (inpqty > document.getElementById(thisid).max))
                  { document.getElementById(thisid).value = 0  
             document.getElementById(thisiderr).innerHTML = "&nbsp;Invalid Must be between 1 and "+document.getElementById(thisid).max;
                   } 
                }                
 	          
             if (document.getElementById(thisiderr).innerHTML != "") {
              allgood=false;return;
            }
	})
											
// shobha	
  if (!allgood) {return false}         // function will return false even if one field is in error
        else {return true;}
  }
 
 //vik   
                                
function addheader()  {  
var desc='<thead id="idthead"><tr><th class="cvvshort">Delete</th><th  class="cvid">Issue Id</th><th  class="cvmed">Drug name</th><th class="cvmed text-center">Generic Name</th><th>Strength</th><th class="cvvshort">Type</th>'+
                                                          
   '<th class="cvmed1"> Qty Return</th><th class="cvmed2">Current Stk</th></tr></thead>';
        
      $("#idtable").append(desc);  // add header to the table 
   
} 
 

function addfirstrow()  {   
// 
  //   //1 -drug 2-strength 3-type 4-qty  5-stk   
var temp0='<button type="button" class="btn btn-default btn-sm delete"  style="color:#FF0000;"><span class="glyphicon glyphicon-remove"></span></button>'
var temp7='<input type ="text" id="idinp-0107" class="clname flditem form-control" readonly>';
  var temp1a='<input type ="text" id="idtextsel-0101" class=" clname flditem form-control" readonly>';
  var temp1b='<span class="centerstrong text-center" id="idtextsel-0101err"></span>'            
  var temp1=temp1a+temp1b 
 // var temp6='<input type ="text" id="idinp-0106" class="clname flditem form-control" readonly ><span class="centerstrong" id="idinp-0106err"></span>'
  var temp6='<input type ="text" id="idinp-0106" class="clname flditem form-control" readonly >'
 // var temp2='<input type ="text" id="idinp-0102" class=" cshort flditem form-control" readonly><span class="centerstrong" id="idinp-0102err"></span>'
 var temp2='<input type ="text" id="idinp-0102" class=" cshort flditem form-control" readonly>'
//  var temp3='<input type ="text" id="idinp-0103" class=" cshort flditem form-control" readonly><span class="centerstrong" id="idinp-0103err"></span>' 
var temp3='<input type ="text" id="idinp-0103" class=" cshort flditem form-control" readonly>'
  var temp4='<input type ="number" id="idinp-0104" maxlength="5" class=" clname flditem form-control"><span class="centerstrong" id="idinp-0104err"></span>'               // can it be made date field
 // var temp5='<input type ="number" id="idinp-0105" class=" clname flditem form-control"readonly ><span class="centerstrong" id="idinp-0105err"></span>'       // stk made readonly
 var temp5='<input type ="number" id="idinp-0105" class=" clname flditem form-control"readonly >'       // stk made readonly

 
 
  var desc='<tr id="idrow01" class="tblrow">'+'<td id="idcol0100">' +temp0+ '</td>'+ '<td id="idcol0107">' + temp7 +'</td>' + '<td id="idcol0101">' + temp1 +'</td>' + '<td  id="idcol0106">' +temp6+ '</td>'+'<td id="idcol0102">' +temp2+ '</td>'+ '<td  id="idcol0103">'+temp3+'</td>'+
       '</td>' +'<td  id="idcol0104">'
          +temp4+'</td>'+'<td  id="idcol0105">' +temp5+ '</td>'+'</tr>'
  

 
   $("#idtable").append(desc);  
} 
     
     function fillpatients() { 
	var ptntlen=patientname.length;    //july26 
	for (var i = 0; i < (ptntlen); i++) {     //july26 
         var dropdown = document.getElementById("identrypat") 
//				 var dropdown2 = document.getElementById("idviewpat") 
         var  opt = patientname[i].toUpperCase()     //july26  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = patientid[i]
	// var showdata='id'+patientid[i]+'--'+patientname[i]+'--'+dobview[i]+'--'+ageview[i]+'--'+address[i];
    
    var d = new Date();var curryr = d.getFullYear(); var currmth=d.getMonth()+1; //get curr year and month        
    var dobyear=parseInt(dobview[i].substr(-4));var dobmth= parseInt(dobview[i].substr(-7,2));  //get dob year and month as int
     var displayage= curryr-dobyear;
  //  alert (age);
    if (currmth < dobmth) {
         displayage= displayage-1;}
      
     
     var showdata='id'+patientid[i]+'--'+patientname[i]+'--'+dobview[i]+'--'+displayage+'--'+address[i];
      
//                                                                         
				 el.setAttribute('data-toggle',"tooltip");el.setAttribute('data-placement',"right");
         el.setAttribute('title',showdata);el.setAttribute('class',"info");
				 el.setAttribute('data-container',"#tooltip_container");
				dropdown.appendChild(el);  
		    var el2 = document.createElement("option");
		    el2.textContent = opt;el2.value = patientid[i]
				el2.setAttribute('data-toggle',"tooltip");el2.setAttribute('data-placement',"right");
         el2.setAttribute('title',showdata);el2.setAttribute('class',"info");
				 el2.setAttribute('data-container',"#tooltip_containerp");
//				dropdown2.appendChild(el2);  
           
  }	
	  $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover'
})  
 }	 

//
    
function setnewrowids() {
 
    var rowlength = document.getElementById("idtable").rows.length;   // no of rows currently lets say 5
    var thisrow=document.getElementById("idtable").rows[rowlength-1]  // means you are in row id 4 (starts from 0)
//  var cell1=document.getElementById("idtable").rows[rowlength-1].cells[2].innerHTML ;
     lastrow++
 //    alert("lastrow "+lastrow)
// below set col and row with id of row number and col number for the newly added row 
    var temp=lastrow.toString();
   if (lastrow < 10) {var rowno= '0'+temp}
    else {var rowno=temp};         // convert 4 to '04' 
   var rowid='idrow'+rowno; 
 //  alert("rowid "+rowid)
    thisrow.setAttribute("id", rowid); 
    var cellcount=thisrow.cells.length
 //   alert("cellcount "+cellcount)
   for(var i = 0; i < (cellcount); i++) {
     var thiscell=thisrow.cells[i]
//     thiscell.setAttribute("id", cellid);  // commented june 9 vikas
     var colno=$(thiscell).attr('id').slice(-2)   //june 9 vikas
    var cellid = "idcol"+ rowno+ colno;  // june 9 vikas
     thiscell.setAttribute("id", cellid); // june 9 vikas

     var element=thiscell.innerHTML
    var temp=element.substr(0, 500);
      
       var selrowcol = "idtextsel-"+ rowno+ colno;
       var selid = 'id="'+selrowcol+'"'        
       element=element.replace(/id=\"idtextsel-[0-9]+\"/, selid);   // replace id of combo box with row number and col no
       
       var seliderr = 'id="'+selrowcol+'err"'
       element=element.replace(/id=\"idtextsel-[0-9]+err\"/, seliderr);   // replace id of combo box with row number and col no
       thiscell.innerHTML= element
             var pos=temp.indexOf('id="idinp-') 
            if (pos !== -1) {         
             var inprowcol = "idinp-"+ rowno+ colno;
             var inpid = 'id="'+inprowcol+'"'
             var inpiderr = 'id="'+inprowcol+'err"'
             element=element.replace(/id=\"idinp-[0-9]+\"/, inpid);        
             element=element.replace(/id=\"idinp-[0-9]+err\"/, inpiderr); 
             thiscell.innerHTML= element                    
                } 
        
   }  // end for
  
  }  
//  
function initallfields() {       

 //   $('#idpatconfrow').addClass('hidden') // show confirm
     $('#idpatmsgrow').addClass('hidden')
     
    setTimeout(function(){       // run this after 2 seconds so that all the error fields have been available to the Jquery
       $('[id$=err]').each(function(i, selected){       // initialize error fields
       var thisid=this.id 
       document.getElementById(this.id).innerHTML = ""
        })      
 }, 500);

 
  document.getElementById("idauth").value="";document.getElementById("idautherr").value="";
  
} 
function dorest() {	 
   		  document.getElementById("idtextentrypaterr").innerHTML= ""
   	
   document.getElementById("idtextentrypat").value= ""	
         $('#identrypat').hide() 
    initallfields() 
    lastrow++
 
 	  
  $("#idtextentrypat").focus();    // since prod 0207 
//aug4	$("#idh1,#idh2").show()  
		$("#identry").show()
}	
  
$(document).ready(function(){ 
//vik	$("#iddrughide").addClass("hidden");  // july 1
		$("#identrypat").hide()  // july13 
   
    lastrow=0     // globals
   addheader() 
   addfirstrow()

	  $.post("ph_getallpatients.php",
     function(result, status){ 
//         alert(result);alert(status);  
        if (status) {
       
       var fieldsp = JSON.parse(result); 
      
      if (!fieldsp.succfail) { 
        msg='Program terminating with error '+ fieldsp.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       patientname=fieldsp.patientname; patientid=fieldsp.patientid; ageview=fieldsp.ageview; dobview=fieldsp.dobview; 
					address=fieldsp.address; 
        fillpatients()  
				
     dorest()
	
   }  // end good status
      
 })  // end post   
$(document).on( "blur", '#idtextentrypat, #identrypat',function(e) { 
	//
//	alert("here3")
	var thisid=this.id; 	   

	    setTimeout(function() { 
    // var currid=document.activeElement.id;	 commented  since prod 0207
				 
            var target = e.explicitOriginalTarget||document.activeElement  // since prod 0207   

	     var currid=target.id;    // since prod 0207


		if (thisid == "idtextentrypat") {											 
			if ( currid == "identrypat") {

				return;
			}
	    }
		if (thisid == "identrypat") {											 
			if ( currid == "idtextentrypat") {return}
	    }
 
      var dropdownid="identrypat"
       var thistextid="idtextentrypat" 

	    var thistextiderr=thistextid+'err'
//	   document.getElementById(thistextiderr).innerHTML = "";
	   var textinp = (document.getElementById(thistextid).value).trim()    // added 0207    
		if (  $('#identrypat').is(":visible")) {  // if its open											 
	   var textinp = (document.getElementById(thistextid).value).trim()
//	   var dropdownid=thisid.substr(0,2)+thisid.substr(6)
	       if (textinp == "") {  //  if
						  $("#"+dropdownid).hide();
               document.getElementById(thistextiderr).innerHTML = "Invalid Patient";
//				     $('#idtable tr').slice(1).remove();
//              lastrow=1
//              addfirstrow()
//            initallfields()

           $('#testlist > li').slice(1).remove(); 
//            $('#idhdrdoc').val("Z");

             return;
				 }
       else {      // if user has entered chars then check if that text is one of the dropdowns			 
				 var upperCaseNames = patientname.map(function(value) {
         return value.toUpperCase();
        });             
        var pos = upperCaseNames.indexOf(textinp.toUpperCase());
        if(pos === -1) {
           document.getElementById(thistextiderr).innerHTML = "Invalid Patient";}
         else {document.getElementById(dropdownid).selectedIndex = pos;document.getElementById(thistextiderr).innerHTML = "";}   
         $('#'+dropdownid).hide();
      }
	} // if visible		
	else {
	if (textinp == "") { document.getElementById(thistextiderr).innerHTML = "Invalid Patient";}
	}											 
		},500);	
	
}) 

$(document).on('keyup click','#idtextentrypat',  function(e) {
//alert("here2")
	if (e.type == 'keyup') {
 var keyCode = e.keyCode || e.which; 
 if(keyCode == 13) {return}}
  var thisid=this.id;

  var thisselid=thisid.substr(0,2)+thisid.substr(6)    // idsel-0101err or whichever row it is
  var thisiderr=thisid+'err' 
//july14
	  var txt=document.getElementById(thisid).value; 
	 if (txt=="") {$("#"+thisselid).show();
	       $("#"+thisselid+'.hlt').addClass('nohlt');$("#"+thisselid+'.hlt').removeClass('hlt');	// july19
		 $("#"+thisselid+' option').show();
		 $('#'+thisselid+' option:eq(0)').addClass('hlt');						 
		 return
	 }
         txt=txt.trim(); //remove spaces before and after text
	  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length < 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
	  var txtreg='^'+txt
    var regvar=new RegExp(txtreg, 'gi');
    $("#"+thisselid+'.hlt').addClass('nohlt');$("#"+thisselid+'.hlt').removeClass('hlt');	//jul19
   	 $("#"+thisselid).show();
	  var patfound=false;
    $("#"+thisselid+' option').each(function () {
        var text  =this.text
				if (text.search(regvar) == -1) {$(this).hide()} else {$(this).show();patfound=true;}
    })
  if (!patfound) {
    $('#'+thisselid).hide();
     document.getElementById(thisiderr).innerHTML="Invalid Patient"; return;}
   //   $('#'+thisselid+' option:eq(0)').addClass('hlt');       // july19
	$('#'+thisselid).find("option:not(:hidden):eq(0)").addClass('hlt');    // july19
})

$(document).on('keydown','#idtextentrypat',  function(e) { // if down arrow pressed  set focus dropdown

 var keyCode = e.keyCode || e.which; 
	if((keyCode != 40) && (keyCode != 13))
	  {return}
  	
  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6) 
	if(keyCode == 40) { 
		 $('#'+thisselid).show();
	//    document.getElementById(thisselid).selectedIndex=0;$('#'+thisselid+' option:eq(0)').addClass('hlt') // july19
	var seldx=$('#'+thisselid).find("option:not(:hidden):eq(0)").index()     // july19
        $('#'+thisselid+' option:eq(seldx)').addClass('hlt')                        // july19
	    document.getElementById(thisselid).selectedIndex=seldx               // july19
	    document.getElementById(thisselid).focus(); // if downarrow pressed

	    return;
		 }
   var seldx=$('#'+thisselid).find("option:not(:hidden):eq(0)").index()     //july19
  var thistextid=thisid;var thistextiderr=thistextid+'err';
  // document.getElementById(thisselid).selectedIndex=0;   //july19
  //   document.getElementById(thistextid).value=$('#'+thisselid+' option:selected').text();   // july19
         document.getElementById(thisselid).selectedIndex=seldx;           //july19
	 document.getElementById(thistextid).value=$('#'+thisselid+' option:eq(seldx)').text();  //july19
	if ((thisid.indexOf('idtextview')) == -1) {       // if its edit and not view then
		 if ($('#'+thisselid).is(":visible")) {   
      document.getElementById(thistextid).value=$('#'+thisselid+' option:selected').text()
      document.getElementById(thistextiderr).innerHTML="" 
 
    var patid=$('#'+thisselid+' option:selected').val()
  
 //vik  $.post("ph_getpatientdrugs.php",
  $.post("ph_getpatientrecords.php",  
    {ppatid: patid},
    function(result, status){
   
    if (status) {
  
    var  fields = JSON.parse(result)
   
      if (!fields.succfail) { // if Insert or mod was a problem
         if (fields.msg == "No rows") 
           {
						 	var rowtotal = document.getElementById("idtable").rows.length;
						if (rowtotal < 3) {
             $('#idtable tr').slice(1).remove();
              lastrow=1
              addfirstrow()
            initallfields()
						}
           $('#testlist > li').slice(1).remove(); 
             
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
				var rowtotal = document.getElementById("idtable").rows.length;
						if (rowtotal < 3) {
      $('#idtable tr').slice(1).remove();
              lastrow=1
              addfirstrow()
            initallfields()
						}
       $('#testlist > li').slice(1).remove();
      
       var pdrugname=fields.drugname; var pdrugid=fields.drugid; var pdrugstrength=fields.drugstrength;var pdrugtype=fields.drugtype;  
       var pqtyissued=fields.qtyissued; var prate=fields.rate; var pamount=fields.amount;var pdtofissue=fields.dtofissue;
      var docname=fields.docname;
      var  drugstatus= fields.drugstatus;       // enlightened 13/10/2017
      var pdruggenericname=fields.druggenericname; // june 9 vikas
      var popdissueid=fields.opdissueid; var premarks=fields.remarks; var pdrugopdstk=fields.opdstk; //vik
      var pdruglastpricepur=fields.druglastpricepur;
       for (i = 0; i < (pdrugid.length); i++) {
         
          if (drugstatus[i] == "D") {   // enlightened 13/10/2017   start here
// june 9 vikas   added genericname below         
          var desc='<li class="list-group-item greyclr" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox"  id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] +'--'+popdissueid[i].toString()+'--'+pdrugopdstk[i].toString()+'--'+pdruglastpricepur[i]+'--'+premarks[i]+ '" disabled="disabled">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--ID ' + popdissueid[i].toString()+'</li>';     
          }
         else {   // enlightened 13/10/2017  till here
          var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox" id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] +'--'+popdissueid[i].toString()+ '--'+pdrugopdstk[i].toString()+'--'+pdruglastpricepur[i]+'--'+premarks[i]+'">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--ID ' + popdissueid[i].toString()+'</li>';  
 //        j=j+1; 
         }   // enlightened 13/10/2017    
        $("#testlist").append(desc);
         }
//      }
//vik      $("#idhdrdoc").val(docname[0]);
			    
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
      
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }   
   })   //  end post      

     $('#'+thisselid).hide()
		 }  // end if visible
	 }	
	 $('#'+thisselid).hide();    // hide the dropdown if enterkey has been input whether for entry or view 
      
}) 	
$(document).on( "click keydown", '#identrypat',function(e) {  // accept only enter key or click on dropdown
  	 	 $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
  if (e.type == 'keydown') {
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13) { return;}
	}

	 var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  var thistextiderr=thistextid+'err'
	var savetext= document.getElementById(thistextid).value  // added 0703
	$('#'+thisid+' option:selected').tooltip('hide');
	 $('#'+thisid).hide()
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  document.getElementById(thistextiderr).innerHTML="" 
  var thisid=this.id  
  var patid=$('#'+thisid+' option:selected').val()
  
  //vik $.post("ph_getpatientdrugs.php", 
   $.post("ph_getpatientrecords.php",  
    {ppatid: patid},
    function(result, status){
   
    if (status) {
  
    var  fields = JSON.parse(result)
   
      if (!fields.succfail) { // if Insert or mod was a problem
         if (fields.msg == "No rows") 
           {
						var rowtotal = document.getElementById("idtable").rows.length;
						if (rowtotal < 3) {
               $('#idtable tr').slice(1).remove();
                lastrow=1
                addfirstrow()
               initallfields()
				  	}   // 0703
           $('#testlist > li').slice(1).remove(); 
             
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
		      var rowtotal = document.getElementById("idtable").rows.length;
						if (rowtotal < 3) {
      $('#idtable tr').slice(1).remove();
              lastrow=1
              addfirstrow()
            initallfields()
			}    // 0703
       $('#testlist > li').slice(1).remove();
      
       var pdrugname=fields.drugname; var pdrugid=fields.drugid; var pdrugstrength=fields.drugstrength;var pdrugtype=fields.drugtype;
      var pdruggenericname=fields.druggenericname;  // june 9 vikas
       var pqtyissued=fields.qtyissued; var prate=fields.rate; var pamount=fields.amount;var pdtofissue=fields.dtofissue;
      var docname=fields.docname;
      var  drugstatus= fields.drugstatus;       // enlightened 13/10/2017
      var popdissueid=fields.opdissueid; var premarks=fields.remarks; var pdrugopdstk=fields.opdstk; //vik
      var pdruglastpricepur=fields.druglastpricepur;
       for (i = 0; i < (pdrugid.length); i++) {
         
         if (drugstatus[i] == "D") {   // enlightened 13/10/2017   start here
// june 9 vikas   added genericname below           
          var desc='<li class="list-group-item greyclr" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox"  id="chk' +pdrugid[i]+'" value="' +pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] +'--'+popdissueid[i].toString()+ '--'+pdrugopdstk[i]+'--'+pqtyissued[i]+'--'+pdruglastpricepur[i]+'--'+premarks[i]+'" disabled="disabled">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--ID ' + popdissueid[i].toString()+'--'+pdrugid[i].toString()+'--'+premarks[i]+'</li>'; 
          }
         else {   // enlightened 13/10/2017  till here
          var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox" id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] +'--'+popdissueid[i].toString()+'--'+pdrugopdstk[i]+'--'+pqtyissued[i]+'--'+pdruglastpricepur[i]+'--'+premarks[i]+ '">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--ID ' + popdissueid[i].toString()+'--'+ pdrugid[i].toString()+'--'+premarks[i]+'</li>'; 
 //        j=j+1; 
              }   // enlightened 13/10/2017    
        $("#testlist").append(desc);
         }
//      }
//vik     $("#idhdrdoc").val(docname[0]);
           
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
      
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }   
   })   //  end post      
	
})

$(document).on('change','input[id^=idinp][id$=04]', function (e) { 
   
    var thisid=this.id 
 //   if ((thisid.substr(8)) != "04") {return}
     
    var thisiderr=thisid+'err'
    document.getElementById(thisiderr).innerHTML = "";
    var inpqty=parseInt(document.getElementById(thisid).value)
    if (!Number.isInteger(inpqty)) 
    {document.getElementById(thisid).value = 0;inpqty=document.getElementById(thisid).value;
    document.getElementById(thisiderr).innerHTML = "&nbsp;Invalid Must be a number";
    } 
    else {
       if ((inpqty < 1) || (inpqty > document.getElementById(thisid).max))
          { document.getElementById(thisid).value = 0  
             document.getElementById(thisiderr).innerHTML = "&nbsp;Invalid Must be between 1 and "+document.getElementById(thisid).max;
          } 
         }                
                 
   
   var idparts=thisid.split("-");
   var idrow=idparts[1].substr(0,2)
   var idopdstk='idinp-'+idrow+'05'
   var currdrugstk = parseInt($("#"+idopdstk).data("old-val"));
  
   document.getElementById(idopdstk).value=inpqty +currdrugstk //vik
 
                                    
}) 
$(document).on('change','[id^=chk]', function (e) { 
   
    var thisid=this.id 
 
    var lastrowid=$(".tblrow:last").attr("id")
 
    var rowid=lastrowid.slice(-2)
 
    var lastrowdrugtextid="idtextsel-"+ rowid +"01" 
 
     var lastselid=lastrowdrugtextid.substr(0,2)+lastrowdrugtextid.substr(6)
 
      if (  $("#"+lastselid).is(":visible")) {
         $("#"+lastselid).hide();
      }
   if(document.getElementById(thisid).checked) {
  
     var textinp = (document.getElementById(lastrowdrugtextid).value).trim()  
 
     if (textinp != "") {
      $(".tblrow:last").clone().insertAfter(".tblrow:last")
        setnewrowids()  
        var lastrowid=$(".tblrow:last").attr("id")  // these will be the new ids of the new row set by setnewrowids
        var rowid=lastrowid.slice(-2)
        var lastrowdrugtextid="idtextsel-"+ rowid +"01" 
  }
    
     var lastrowdrugtextiderr=lastrowdrugtextid +"err"
     var vdruginfo = $('#'+thisid).val()   //        
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
   
     var idstrength='idinp-'+rowid+'02'   // strength is col 2
     var idtype='idinp-'+rowid+'03'        // type is col 3
     var idqty='idinp-'+rowid+'04'          // qty is 4
     var idqtyerr='idinp-'+rowid+'04'+'err'
     var idopdstk='idinp-'+rowid+'05'            // stock after issue
 //    var idopdstkerr='idinp-'+rowid+'05'+'err'
     var idgeneric='idinp-'+rowid+'06'  // june 9 vikas
     var idopdissueid='idinp-'+rowid+'07'
     var inpdrugname=drugparts[1].substr(4)
    var drugindx=parseInt(drugparts[0]);
    document.getElementById(lastrowdrugtextid).value=inpdrugname
  //    var drugindx= checkposinarray(drugname, inpdrugname) 
 
   document.getElementById(idqtyerr).innerHTML=""; 
 // document.getElementById(idopdstkerr).innerHTML="";
     document.getElementById(lastrowdrugtextiderr).innerHTML="";
 
     document.getElementById(idopdissueid).value=drugparts[5]+'-'+drugparts[0]  //vik
     $('#'+idopdissueid).data("old-val", drugparts[8])   // 
     document.getElementById(idopdstk).value=drugparts[6]                       //vik
     var maxqty = drugparts[7];                    //vik
     if (vdruginfo.includes("Orig")) { // if the remarks shows that returned has been done before 
        var totarray=vdruginfo.split("Orig qty");    // get total qty returned  from remarks  
        var vartemp="Orig qty"+totarray[1]  
        $('#'+idqty).data("old-remarks", vartemp)                         // save text before total qty 
        var retarray=vartemp.split("Totalret ");   // get total returned so far
        var totret=retarray[1]
        
        document.getElementById(idqty).max = maxqty - parseInt(totret)
        }
      else {  $('#'+idqty).data("old-remarks", " ")
      document.getElementById(idqty).max = maxqty
      }

       document.getElementById(idqty).value=0                                 //vik
 //    $('#'+idqty).data("old-val", "0")                                     //vik
      $('#'+idqty).data("old-val", maxqty)                                   // save orig qty issued
       $('#'+idopdstk).data("old-val", drugparts[6])                         //vik save curr drug stk
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
     document.getElementById(idgeneric).value=drugparts[4].substr(7)  // june 9 vikas
    
     var thisliid=$(this).parents('li').attr('id') 
 //    alert("thisliid "+thisliid)
     var thisli=document.getElementById(thisliid)
     var newid=thisliid+'--'+lastrowid
     thisli.setAttribute("id", newid);
    
     var temp=document.getElementById(newid).innerHTML;
     
        }
  
  else {    // delete the row  if unchecked
  //       alert("unchecked")
   var thisliid=$(this).parents('li').attr('id') 
   //
   var thischkid=this.id
    var chkval= $('#'+thischkid).val() 
    var chkparts = chkval.split("--"); 
    var chkdrug=chkparts[1].substr(4)
    var rowtxtid="idtextsel-"+thisliid.slice(-2)+'01'
    var rowdrug=document.getElementById(rowtxtid).value
   
     if (chkdrug == rowdrug) 
    {  
     
    var thisli=document.getElementById(thisliid)
    var pos = thisliid.indexOf("--");
    var rowid=thisliid.substr(pos+2); 
   
    var rowelem = document.getElementById(rowid)
    $(rowelem).remove()
    var newid=thisliid.substr(0,pos);
    thisli.setAttribute("id", newid);
   if (document.getElementById("idtable").rows.length == 1) {  // 01/28
   addfirstrow()                                           //  01/28
    }     
 }  
  } // end delete
})
$('table').on('click','.delete',function(){
    var rowid=($(this).parents('tr').attr('id'))
    
    var temp='[id$='+rowid+'] input[type="checkbox"]'   
      $( temp).attr('checked', false);
//
      var temp=':checkbox[id$='+rowid+']' 
     $(temp).attr("checked","false");
     
     var temp='[id$='+rowid+'] input[type="checkbox"]'       
     var chkbox = $( temp)                                // this is the checkbox being unchecked
   if (chkbox.length > 0) {
     var parentli=$(chkbox).parents('li')                 // get parent li
     var liid=$(chkbox).parents('li').attr('id')          // // this is the parent li id of the checkbox being unchecked 1953--idrow01
     var liparts = liid.split("--");                      // this gives you 1953

     $(parentli).attr('id', liparts[0]);} //vik    
 
$(this).parents('tr').remove();
 if (document.getElementById("idtable").rows.length == 1) {  // 01/28
   addfirstrow()                                           //  01/28
   
 } 
 
})
    
$(document).on('click','#idpatbtnconf', function (e) {
	$('#idpatbtnconf').prop("disabled",true);
   if (document.getElementById("idauth").value == ""){
   document.getElementById("idautherr").innerHTML = "Kindly enter Authority name"
	 $('#idpatbtnconf').prop("disabled",false);
        return;
  }
  else {
    document.getElementById("idautherr").innerHTML = ""
  }

	  
	
   var thisid=this.id
       var thisiderr=thisid+'err' 
   
  var allgood=true;
    if (!checktblinputs()) {allgood=false;}
    if (!checkheaders()) {allgood=false;}
	  
      if (!allgood) {alert("invalid input");$('#idpatbtnconf').prop("disabled",false);return;}
  
    var patientidsel=$('#identrypat option:selected').val() 
		var  patientnamesel=$('#identrypat option:selected').text()             // vikas

     var vauth=document.getElementById("idauth").value                       // vikas
      
  var rowcoldata=[];
 
  var rowlength = document.getElementById("idtable").rows.length;

       var rowindx=0
       rowcoldata[rowindx]=[];var remarks=[];
     
  
    $('[id^=idrow]').each(function(i, selected){     // get all rows
     var thisid=this.id   
     var rowid=thisid.slice(-2)
 // vik 02/22/2025 01 drug name, 02 strength, 03 type 04 qty ret ,05 stock updated, 06 generic name
        var colindx = 0
        var getidissue='idinp-'+rowid+'07'
        var issuedrug1=document.getElementById(getidissue).value
        var issuedrug=issuedrug1.split("-"); 
        rowcoldata[rowindx][0]=parseInt(issuedrug[0]) // this is issue id 02/22/2025
        rowcoldata[rowindx][1]=parseInt(issuedrug[1]) // this is drug id // vik 02/22/2025
        var getidqty='idinp-'+rowid+'04'  // 04 qty
        var getidstk='idinp-'+rowid+'05'  // drug stock
        var tempdrugname='idtextsel-'+rowid+'01'  // 01 name
        var tempdrugstrength='idinp-'+rowid+'02'  // 02 strength
        var tempdrugtype='idinp-'+rowid+'03'  // 03 type
         
        
        var getidstk='idinp-'+rowid+'05'  // drug stock

        rowcoldata[rowindx][2]=document.getElementById(tempdrugname).value
        rowcoldata[rowindx][3]=document.getElementById(tempdrugstrength).value
        rowcoldata[rowindx][4]=document.getElementById(tempdrugtype).value

        rowcoldata[rowindx][5]=parseInt(document.getElementById(getidqty).value)
        rowcoldata[rowindx][6]=parseInt(document.getElementById(getidstk).value)
        var qtyret=document.getElementById(getidqty).value
        var stk=parseInt(document.getElementById(getidstk).value) // drug stk
        var qtybefore = parseInt($("#"+getidqty).data("old-val"));   // this is the original qty before return
        var oldremarks = $("#"+getidqty).data("old-remarks");   // this is the original remarks
        //alert("old remarks "+oldremarks)
        rowcoldata[rowindx][8]=$("#"+getidissue).data("old-val");
        var d=new Date();
        if (oldremarks.includes("Totalret")) {
        var totarray=oldremarks.split("Totalret ");    // get expression after Totalret which is total qty returned
        var totretn=parseInt(totarray[1])+parseInt(qtyret); // accumulate total qty
        var varmonth=d.getMonth()+1
        rowcoldata[rowindx][7]=totarray[0]+"--Returned "+qtyret + " on "+d.getDate()+"-"+varmonth+"-"+d.getFullYear()+"--Totalret "+totretn // remarks

        }
        else {
 //  rowcoldata[rowindx][7]="Orig qty--"+qtybefore+"--Returned "+qtyret+"--" + "on--"+d.getDate()+"-"+d.getMonth()+"-"+d.getFullYear()+"--Totalret "+qtyret // remarks
    var varmonth=d.getMonth()+1
     rowcoldata[rowindx][7]="Orig qty--"+qtybefore+"--Returned "+qtyret+ " on "+d.getDate()+"-"+varmonth+"-"+d.getFullYear()+"--Totalret "+qtyret // remarks

       }
       rowindx=rowindx+1;
      rowcoldata[rowindx]=[] 
     }) 
 
    $.post("ph_issueupdatepharma.php",
    {prowcoldata:rowcoldata, pauth:vauth})
					 
    .done(function(result, status){

    if (status) {

      try {
           var  resultdata = JSON.parse(result)         
        } catch (e) {
          var  msg='Program ph_issueupdatepharma.php terminating with error '+ result
       
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;  
        }
       if (!resultdata.succfail) { 
        var vmsg='Program ph_issueupdatepharma.php terminating with error '+ resultdata.msg
         alert(vmsg)
				  $(document).off()
         return;}
        
        $("#idpatconfrow").addClass('hidden') 
        $("#idpatmsgrow").removeClass('hidden')
        $("#idpatmsg").show()
				$('#idpatbtnconf').prop("disabled",false);
        document.getElementById("idpatmsg").innerHTML="Data Processed Successfully";
        $('#idtable tr').slice(1).remove();
         $("#idpatmsg").fadeOut(1000, function(){
             $("#idpatconfrow").removeClass('hidden')
              lastrow=1
              addfirstrow()
            initallfields()
//            populatedrugs()
 //vik
     $('#testlist > li').slice(1).remove();
 })
   
      }  // end if status
     
   })   //  end post  
 .fail(function(xhr,status, error) {
			var temp="Request failed ph_issueupdatepharma failed kindly contact programmmer status is "+xhr.status
			  alert(temp)
			  $('#idpatbtnconf').prop("disabled",false); //shobha 11/09
         // $(document).off()
         return;
    })
})  



$("input:radio[name=optradio]").change(function() {

   if (this.id == "idradioopdpharma") {
    
     location.href="ph_opdpharma.php"
     return false;
   }
   
   
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
<?php
clearstatcache();
$allpatnm=array(); $allpatid=array(); $alldocname=array(); 

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
     
/*
$sql = "SELECT docname FROM doctors";   // get all doctors
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Doctor"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          $conn->close(); exit();
       }
     if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) { $alldocname[]=$row["docname"];}  // get names and id of all patients
    }

  $conn->close();
 */
?>  
  
  <div class="container">    
<h1> </h1>
</div>
<div id="idh1" class="container-fluid">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

  <div id="idcontainer" class="container-fluid">
    <form class="form-horizontal" id="fidpur1" name="fnmpur1" action="" method="post" role="form"></form>
   <div id="idh2" class="row form-group">
     <div class="col-sm-5 text-success"><h4 ><strong>OPD  ISSUE DETAILS</strong></h4></div> 
     
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="../ashrammed/ashrammedmain.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a>
     </div>
    </div>   
      
 
   <div id="idradioopt" class="row form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioopdpharma"  name="optradio"><strong>OPD Pharmacy</strong></label></div>
          
          
      <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioeditpharma" checked name="optradio"><strong>EDIT OPD ENTRY</strong></label></div>

     </div>
     </div>
    
     </div>
     
     
     <div id="identry">
        <div  class="container-fluid">
     <form class="form-horizontal" id="fidpur2" name="fnmpur2" action="" method="post" role="form"></form>
 
   <div class="row form-group">
     <div id="idhdrallpt" class="col-sm-3"> 
     <label>PATIENT NAME:</label>
     <input type ="text" id="idtextentrypat" placeholder="Type Patient Name" class="cvvlong  form-control">
      <select select size="5" id="identrypat"  class="form-control">  
     </select> <span class="centerstrong" id="idtextentrypaterr"></span>
    </div> 
         
      

   <div id="tooltip_container"></div>	
            
      </div>
          
           <div class="control-group">&nbsp;&nbsp;</div>
      
  <div class= "row form-group">
    <div class= "col-sm-8">
      <table id="idtable" class="  table table-bordered table-responsive table-condensed">
    </table>
      </div>  
    <div class="lgrouptest  col-sm-3">
        <ul class="list-group" id="testlist">
  <!--// note that the li items have testid as id and checkbox has chk+testid as id and testname as value. -->         
        <li class="list-group-item" id="chk0"><font size="3" color="blue" ><strong>Select Drugs from Previous Issue</strong></font></li>        
        </ul>
        </div>   
       </div> 
          
  
      <div class="row form-group">   
      <div class= "col-sm-offset-10 col-sm-2 ">
        <label class=" control-label" >Issue authority:</label>
           <input type ="text"  class="form-control" id="idauth" name ="nmauth" value="" ><span class="centerstrong" id="idautherr"></span>
         </div>
  </div> 
      
<div class="control-group">&nbsp;&nbsp;</div><div class="control-group">&nbsp;&nbsp;</div> <div class="control-group">&nbsp;&nbsp;</div>  
<div class="control-group">&nbsp;&nbsp;</div><div class="control-group">&nbsp;&nbsp;</div> <div class="control-group">&nbsp;&nbsp;</div> 
   
<div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button" onclick="location.href='../ashrammed/ashrammedmain.php';" name="nmpatbtnex" id="idpatbtnex" class="btn btn-primary vtop" value= "E x i t">
       </div>      
	
     <div class="col-sm-2">
  <input type="button" onclick="location.href='../pharmacy/ph_opdpharma.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "Cancel">
       </div>     
       <div class="col-sm-2"> 
          
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                                        
                           
      </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
        </div>             
 
   </div>
   </div>
   
       
<div id="tooltip_containerp"></div>	
</body>
     
