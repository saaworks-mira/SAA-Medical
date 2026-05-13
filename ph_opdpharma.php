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
select#idhdrdoc option, select#identrypat option, select#idsel-0101 option { font-size: 16px; font-weight: bold; }
select#idhdrdoc option:first-child {
	font-size: 14px; font-weight: normal;} 
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
  width: 10%;
}  
 
input.cvshort {
    width:75%;
  text-align: center;
  margin: 0 auto;
}
.cvmed {
   width:27%;
  text-align: center;
  margin: 0 auto;
}   
 .cvmed1 {
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

select#idviewpat option:hover {
background-color: yellow;
	}
select#identrypat option:hover {
background-color: yellow;
	}
#idpurbtnsrch {
    position:relative;
    margin-top: 20px;
    
} 
/*	
input[type=checkbox][disabled]  {
   background-color: red;
}
	*/
	.greyclr {color: brown}
/* #idtable th { text-align: center;width:25%; padding-left:0px;padding-right:0px;}   */

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
   
  if ($("#idhdrdoc").val() == "Z") {
			document.getElementById("idhdrdocerr").innerHTML = "Invalid Doctor";return false; }
	else 
		 {document.getElementById("idhdrdocerr").innerHTML = "";} 
	if (document.getElementById("idtextentrypat").value == "") {
		document.getElementById("idtextentrypaterr").innerHTML = "Invalid Patient";return false; }
	if (document.getElementById("idtextentrypaterr").innerHTML != "") {return false;}
	return true;
}  
  function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
}  
  
function checktblinputs()  {       //   check for inputs If not valid then flag error and return false. all inputs start with idsel or idinp

   var allgood=true
  
 $('input[id^=idtextsel]').each(function(i, selected){ 
  
     var thisid=this.id  
     var thisiderr=thisid+'err'  
    
     if (document.getElementById(thisiderr).innerHTML != "")  { allgood=false; }
       else 
       { if (document.getElementById(thisid).value == "") {
        
           document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
         
            allgood=false }
         else 
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
       }
    }
   })
    
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
	// shobha
	$('input[id^=idinp][id$=05]').each(function(i, selected) {    //  this selected all elements ending in 05
		var tempid=this.id; var tempiderr=tempid+'err';document.getElementById(tempiderr).innerHTML = "";
		if(document.getElementById(tempid).value < 0 )
            { 
             document.getElementById(tempiderr).innerHTML = "Invalid due to less stock";
              allgood=false;return;
            }
	})
											
// shobha	
  if (!allgood) {return false}         // function will return false even if one field is in error
        else {return true;}
  }
    
                                
function addheader()  {  
var desc='<thead id="idthead"><tr><th class="cvvshort">Delete</th><th  class="cvmed">Drug name</th><th class="cvmed text-center">Generic Name</th><th>Strength</th><th>Type</th>'+
                                                          
   '<th class="cvmed1"> Quantity</th><th class="cvmed1">Stk After Issue</th></tr></thead>';
        
      $("#idtable").append(desc);  // add header to the table 
   var descreport='<thead id="idviewthead"><tr><th class="text-center">Patient name</th><th class="text-center">Issue date</th><th class="text-center">Doctor Name</th><th class="text-center">Drug name</th>'+
       '<th class="text-center">Generic Name</th><th class="text-center">Strength</th><th class="text-center">Type</th><th class="text-center">Qty Issued</th>'+
     '<th>Rate</th><th> Amount</th><th class="text-center">Op.Stock</th><th class="text-center">Stk After Issue</th><th>Issue Authority</th></tr></thead>'+
      '<tfoot><tr><th colspan="8" style="text-align:right">Page Total:</th><th></th></tr></tfoot>';
  
  
                  
   $("#idtablereport").append(descreport);
} 
 

function addfirstrow()  {   
// 
  //   //1 -drug 2-strength 3-type 4-qty  5-stk   
var temp0='<button type="button" class="btn btn-default btn-sm delete"  style="color:#FF0000;"><span class="glyphicon glyphicon-remove"></span></button>'
  var temp1a='<input type ="text" id="idtextsel-0101" placeholder="Type Drug Name" class=" clname flditem form-control">';
  var temp1b='<span class="centerstrong text-center" id="idtextsel-0101err"></span>'            
  var temp1=temp1a+temp1b 
  var temp6='<input type ="text" id="idinp-0106" class="clname flditem form-control" readonly ><span class="centerstrong" id="idinp-0106err"></span>'
  var temp2='<input type ="text" id="idinp-0102" class=" cshort flditem form-control" readonly><span class="centerstrong" id="idinp-0102err"></span>'
  var temp3='<input type ="text" id="idinp-0103" class=" cshort flditem form-control" readonly><span class="centerstrong" id="idinp-0103err"></span>' 

  var temp4='<input type ="number" id="idinp-0104" maxlength="5" class=" clname flditem form-control"><span class="centerstrong" id="idinp-0104err"></span>'               // can it be made date field
  var temp5='<input type ="number" id="idinp-0105" class=" clname flditem form-control"readonly ><span class="centerstrong" id="idinp-0105err"></span>'       // stk made readonly
 
 
 
  var desc='<tr id="idrow01" class="tblrow">'+'<td id="idcol0100">' +temp0+ '</td>'+ '<td id="idcol0101">' +
           temp1+'</td>'+ '<td  id="idcol0106">' +temp6+ '</td>'+'<td id="idcol0102">' +temp2+ '</td>'+ '<td  id="idcol0103">'+temp3+'</td>'+
       '</td>' +'<td  id="idcol0104">'
          +temp4+'</td>'+'<td  id="idcol0105">' +temp5+ '</td>'+'</tr>'
  

 
   $("#idtable").append(desc);  
} 

function filldrugdropdown()  {  

 // $('#dropdwon1 option').clone().appendTo('#dropdwon2');
       var dropdown2 = document.getElementById("idalldrugs") 
      
          for(var i = 0; i < (drugid.length); i++) {
            var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]+'--generic'+druggenericname[i]; // june 9 vikas
           dropdown2.appendChild(el);  
            
          }  
    

} 
 
     
     function fillpatients() { 
	var ptntlen=patientname.length;    //july26 
	for (var i = 0; i < (ptntlen); i++) {     //july26 
         var dropdown = document.getElementById("identrypat") 
				 var dropdown2 = document.getElementById("idviewpat") 
         var  opt = patientname[i].toUpperCase()     //july26  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = patientid[i]
	// var showdata='id'+patientid[i]+'--'+patientname[i]+'--'+dobview[i]+'--'+ageview[i]+'--'+address[i];
    
    var d = new Date();var curryr = d.getFullYear(); var currmth=d.getMonth()+1; //get curr year and month        
    var dobyear=parseInt(dobview[i].substr(-4));var dobmth= parseInt(dobview[i].substr(-7,2));  //get dob year and month as int
//       alert(tempint+" "+parseInt(ageview[i])+" "+(parseInt(ageview[i])+tempint));
   // alert (dobview[i]);
  //  alert (curryr);
 //   alert (currmth);
     //get dob month as integer
 //   alert (tempmth);
     var displayage= curryr-dobyear;
  //  alert (age);
    if (currmth < dobmth) {
         displayage= displayage-1;}
      
     
  //    alert (ageview[i]);
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
				dropdown2.appendChild(el2);  
           
  }	
	  $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover'
})  
 }	 
/*	var ptntlen=patientname.length;    //july26 
	for (var i = 0; i < (ptntlen); i++) {     //july26 
         var dropdown = document.getElementById("identrypat") 
				 var dropdown2 = document.getElementById("idviewpat") 
         var  opt = patientname[i].toUpperCase()     //july26  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = patientid[i]
	 var showdata=patientname[i]+'--'+dobview[i]+'--'+ageview[i]+'--'+address[i];
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
				dropdown2.appendChild(el2);  
           
  }	
	  $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover'
})  
 }	 */

//
 function getopdissuedata(vpat,vdoc,vdrug,vstartdt,vendt)  {
  
  $.post("ph_getopdissuedata.php", {
    
            ppat:vpat,pdoc:vdoc,pdrug:vdrug,pstartdt:vstartdt,penddt:vendt},
        function(result, status){ 
    
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
// below variables are retunbed from backend and contains all the drugs         
       if (fields.rowcount > 0) {  
 //
       var totalrows=fields.rowcount
       dtofissue=fields.dtofissue;  vpatientname=fields.patientname; vdocname=fields.docname; 
       vdrugname=fields.drugname; vstrength=fields.strength; vdrugtype=fields.type ;
       vqtyissued=fields.qtyissued; vrate=fields.rate; vamount=fields.amount; vopstk=fields.opstk; vstkafterissue=fields.stkafterissue;issueauth=fields.issueauthority;
      vgenericname=fields.genericname; // june 9 vikas
         
        
          for(var i = 0; i < totalrows; i++) {
          
      var trdtddmmyyyy = dtofissue[i].substr(6,2)+'/'+ dtofissue[i].substr(4,2)+'/'+ dtofissue[i].substr(0,4)            
             tablereport.row.add( [
    vpatientname[i],trdtddmmyyyy,vdocname[i],vdrugname[i],vgenericname[i],vstrength[i],vdrugtype[i],vqtyissued[i],
    vrate[i],vamount[i],vopstk[i],vstkafterissue[i],issueauth[i]])
               .draw(false); 
    
         
          }  // end for
      }  // end if rows > 0    
    
             tablereport. draw();  
                   
   }  // end good status
  
       
 })  // end post  
.fail(function(xhr, status, error) {
       alert("fail");alert(xhr.status)
			  alert("kindly contact programmmer")
          $(document).off()
         return;
    })
	
}   
function setnewrowids() {
 
    var rowlength = document.getElementById("idtable").rows.length;   // no of rows currently lets say 5
    var thisrow=document.getElementById("idtable").rows[rowlength-1]  // means you are in row id 4 (starts from 0)
//  var cell1=document.getElementById("idtable").rows[rowlength-1].cells[2].innerHTML ;
     lastrow++
// below set col and row with id of row number and col number for the newly added row 
    var temp=lastrow.toString();
   if (lastrow < 10) {var rowno= '0'+temp}
    else {var rowno=temp};         // convert 4 to '04' 
   var rowid='idrow'+rowno; 
    thisrow.setAttribute("id", rowid); 
    var cellcount=thisrow.cells.length
   for(var i = 0; i < (cellcount); i++) {
//     var temp=i.toString();                  // commented june 9 vikas
 //    if (i < 10) {var colno= '0'+temp}       // commented june 9 vikas
 //    else {var colno=temp};                 // commented june 9 vikas
//    var cellid = "idcol"+ rowno+ colno;  // commented june 9 vikas
     var thiscell=thisrow.cells[i]
//     thiscell.setAttribute("id", cellid);  // commented june 9 vikas
     var colno=$(thiscell).attr('id').slice(-2)   //june 9 vikas
    var cellid = "idcol"+ rowno+ colno;  // june 9 vikas
     thiscell.setAttribute("id", cellid); // june 9 vikas

     var element=thiscell.innerHTML
     var temp=element.substr(0, 500);
     if (temp.indexOf("idsel-") !== -1) {
       
       var selrowcol = "idsel-"+ rowno+ colno;
       var selid = 'id="'+selrowcol+'"'     
       element=element.replace(/id=\"idsel-[0-9]+\"/, selid);  
      
       var selrowcol = "idtextsel-"+ rowno+ colno;
       var selid = 'id="'+selrowcol+'"'        
       element=element.replace(/id=\"idtextsel-[0-9]+\"/, selid);   // replace id of combo box with row number and col no
       
       var seliderr = 'id="'+selrowcol+'err"'
       element=element.replace(/id=\"idtextsel-[0-9]+err\"/, seliderr);   // replace id of combo box with row number and col no
       thiscell.innerHTML= element
     }
       else { 
            var pos=temp.indexOf('id="idinp-') 
            if (pos !== -1) {         
             var inprowcol = "idinp-"+ rowno+ colno;
             var inpid = 'id="'+inprowcol+'"'
             var inpiderr = 'id="'+inprowcol+'err"'
             element=element.replace(/id=\"idinp-[0-9]+\"/, inpid);        
             element=element.replace(/id=\"idinp-[0-9]+err\"/, inpiderr); 
             thiscell.innerHTML= element                    
          } 
        
      }    // end else
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

 
  var temp='<select size="5" class="cvlong font17" id="idsel-0101"></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();  
  document.getElementById("idauth").value="";document.getElementById("idautherr").value="";
  
} 
function dorest() {	 
   document.getElementById("idtextviewdrugerr").innerHTML= ""
   document.getElementById("idtextviewdrug").value= ""	
	   document.getElementById("idtextviewpaterr").innerHTML= ""
		  document.getElementById("idtextentrypaterr").innerHTML= ""
   document.getElementById("idtextviewpat").value= ""	
   document.getElementById("idtextentrypat").value= ""	
         $('#idviewdrug,#idviewpat,#identrypat').hide() 
 $("#idview").addClass("hidden");
   var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
 
         $('#idissdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
     
    var datestr=dd+'/'+mm+'/'+yyyy;        
  
  $('#idissdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker('setDate', datestr)  

      $('#idissdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker('setEndDate', datestr);
	$('#idissdtinp').value=today //shoba 0408
//   

// $('[data-toggle="tooltip"]').tooltip({
//    trigger : 'hover'
// })  
   initallfields() 
    lastrow++
 
 tablereport=  $('#idtablereport').DataTable( {
        dom: 'Bfrltip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'colvis', 'print'
        ],
      "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ],
   "aoColumns": [
            null,
            { "sType": "date-uk" },
            null,  
            null,
            null,           
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        ],
    "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column(9)
                .data()
                .reduce( function (a, b) {
                    return (intVal(a) + intVal(b)).toFixed(2);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 9, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return (intVal(a) + intVal(b)).toFixed(2);
                }, 0 );
 
            // Update footer
            $( api.column(8).footer() ).html(
                'Rs. '+ pageTotal +'   ( Rs. '+ total +' GrandTotal)'
            );
        } 
      
     
    } )
  
jQuery.extend( jQuery.fn.dataTableExt.oSort, {
"date-uk-pre": function ( a ) {
    var ukDatea = a.split('/');
   if (ukDatea.length == 3) {
    return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;}
   else {return ((ukDatea[1]* 12) + ukDatea[0]) * 1;} 
},

"date-uk-asc": function ( a, b ) {
    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
},

"date-uk-desc": function ( a, b ) {
    return ((a < b) ? 1 : ((a > b) ? -1 : 0));
}
});  
	 $('[data-toggle="tooltip"]').tooltip({
    trigger : 'hover'
   })  
 	  
  $("#idtextentrypat").focus();    // since prod 0207 
//aug4	$("#idh1,#idh2").show()  
		$("#identry").show()
}	
  
$(document).ready(function(){ 
	$("#iddrughide").addClass("hidden");  // july 1
		$("#identrypat").hide()  // july13 
		$("#idview").hide() 
//aug4  $("#idradioopt, #identry,#idh1,#idh2").hide()   
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
				
				 $.post("ph_getissuedrugdata.php", 
        function(resultd, statusd){ 
//					 alert(resultd); alert(statusd);
        if (statusd) {
       
       var fieldsd = JSON.parse(resultd); 
      
      if (!fieldsd.succfail) { 
        msg='Program terminating with error '+ fieldsd.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       drugname=fieldsd.drugname;  drugid=fieldsd.drugid; drugstrength=fieldsd.drugstrength;  drugtype=fieldsd.drugtype;
          druggenericname=fieldsd.genericname; // june 9 vikas
					lastpricepur=fieldsd.lastpricepur;
        opdstk=fieldsd.opdstk;	$("#idview").show();
     filldrugdropdown()    // july 1
     dorest()
//aug4		 $("#idradioopt").show()  
   }  // end good status
      
 })  // end post    
	
   }  // end good status
      
 })  // end post   

$(document).on( "blur", '#idtextviewpat, #idviewpat',function(e) { 
	//
	var thisid=this.id; 	   
		 
	    setTimeout(function() {  
  //			var currid=document.activeElement.id;	 commented  since prod 0207
				 
                                var target = e.explicitOriginalTarget||document.activeElement  // since prod 0207   

				var currid=target.id;    // since prod 0207
		if (thisid == "idtextviewpat") {											 
			if ( currid == "idviewpat") {return}
	    }
		if (thisid == "idviewpat") {											 
			if ( currid == "idtextviewpat") {return}
	    }
  
     // if you are on drug input then return because nothing to check
      var dropdownid="idviewpat"
       var thistextid="idtextviewpat" 

//
	    var thistextiderr=thistextid+'err'
	   document.getElementById(thistextiderr).innerHTML = "";
	  if (  $('#idviewpat').is(":visible")) {  // if its open		
	   var textinp = (document.getElementById(thistextid).value).trim()
//	   var dropdownid=thisid.substr(0,2)+thisid.substr(6)
	       if (textinp != "") {  	 
				 var upperCaseNames = patientname.map(function(value) {
         return value.toUpperCase();
        });             
        var pos = upperCaseNames.indexOf(textinp.toUpperCase());
        if(pos === -1) {
           document.getElementById(thistextiderr).innerHTML = "Invalid Patient";}
         else {document.getElementById(dropdownid).selectedIndex = pos;document.getElementById(thistextiderr).innerHTML = "";}
				 }  			 
         $('#'+dropdownid).hide();
		} 
		},500);				
}) 
$(document).on( "blur", '#idtextentrypat, #identrypat',function(e) { 
	//
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
$(document).on( "click keydown", '#idviewdrug,#idviewpat',function(e) {  // if user hits enter on a selection or clicks on it then accept it
  		 $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
	if (e.type == 'keydown') {        
   var keyCode = e.keyCode || e.which; 
   if(e.which != 13 && e.which != 9  ) {return}
	}

  var thisid=this.id             
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  var thistextiderr=thistextid+'err'
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  document.getElementById(thistextiderr).innerHTML="" 
  $('#'+thisid).hide()
})

$(document).on('keyup click','#idtextentrypat, #idtextviewpat',  function(e) {
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
$('#idtable tr').slice(1).remove(); // vik 04/16
})

$(document).on('keydown','#idtextentrypat, #idtextviewpat',  function(e) { // if down arrow pressed  set focus dropdown
	
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
  
   $.post("ph_getpatientdrugs.php",
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
      var premarks=fields.remarks // vikas 020625
       for (i = 0; i < (pdrugid.length); i++) {
         
          if (drugstatus[i] == "D") {   // enlightened 13/10/2017   start here
// june 9 vikas   added genericname below         
          var desc='<li class="list-group-item greyclr" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox"  id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] + '" disabled="disabled">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--'+docname[i]+'--'+premarks[i]+'</li>';     
          }
         else {   // enlightened 13/10/2017  till here
          var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox" id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] + '">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--'+docname[i]+'--'+premarks[i]+'</li>';  
 //        j=j+1; 
         }   // enlightened 13/10/2017    
        $("#testlist").append(desc);
         }
//      }
      $("#idhdrdoc").val(docname[0]);
			    
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
//  $('#'+thisid).hide()
// till here	
  var thisid=this.id  
  var patid=$('#'+thisid+' option:selected').val()
  
   $.post("ph_getpatientdrugs.php",
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
     $('#idtable tr').slice(1).remove(); //vik 04/16/26
            lastrow=1
              addfirstrow()
            initallfields()
       // till here vik 04/16/26
          var rowtotal = document.getElementById("idtable").rows.length;
    /* vik 04/16/26
    if (rowtotal < 3) {
      $('#idtable tr').slice(1).remove();
              lastrow=1
              addfirstrow()
            initallfields()
			}    // 0703
   till here */
       $('#testlist > li').slice(1).remove();
      
       var pdrugname=fields.drugname; var pdrugid=fields.drugid; var pdrugstrength=fields.drugstrength;var pdrugtype=fields.drugtype;
      var pdruggenericname=fields.druggenericname;  // june 9 vikas
       var pqtyissued=fields.qtyissued; var prate=fields.rate; var pamount=fields.amount;var pdtofissue=fields.dtofissue;
      var docname=fields.docname;
      var  drugstatus= fields.drugstatus;       // enlightened 13/10/2017
      var premarks=fields.remarks               // vikas 020625
       for (i = 0; i < (pdrugid.length); i++) {
         
         if (drugstatus[i] == "D") {   // enlightened 13/10/2017   start here
// june 9 vikas   added genericname below           
          var desc='<li class="list-group-item greyclr" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox"  id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] + '" disabled="disabled">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--'+docname[i]+'--'+premarks[i]+'</li>';     
          }
         else {   // enlightened 13/10/2017  till here
          var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + '<input type="checkbox" id="chk' +pdrugid[i]+'" value="' +
          pdrugid[i].toString() + '--name'+ pdrugname[i] + '--strength'+ pdrugstrength[i] +'--type' + pdrugtype[i] +'--generic' + pdruggenericname[i] + '">'+pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--'+docname[i]+'--'+premarks[i]+'</li>';  
 //        j=j+1; 
              }   // enlightened 13/10/2017    
        $("#testlist").append(desc);
         }
//      }
      $("#idhdrdoc").val(docname[0]);
           
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
      
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }   
   })   //  end post      
	
})

$(document).on('keyup click','input[id^=idtextsel],input[id^=idtextviewdrug]',  function(e) {
   if (e.type == 'keyup') {
 var keyCode = e.keyCode || e.which; 
 if(keyCode == 13) {return}}
 
  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    // idsel-0101err or whichever row it is
  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty(); 
  var txt=document.getElementById(thisid).value;
     
  txt=txt.trim(); //remove spaces before and after text
  // july 1 	
	 //july 13
	if (txt == "") {   // july13
//		var len = $('#'+thisselid+' > option').length;
//	  if (len > 0) {   // just show and leave
//			  $("#"+thisselid).show();
//			 $('#'+thisselid+' option:eq(0)').addClass('hlt')
//         document.getElementById(thisiderr).innerHTML=""; 
//				 return
//		    }
//		else {    // clone
//			$("#"+thisselid).empty();
			var temp= "#"+thisselid			 
		 $('#idalldrugs option').clone().appendTo(temp);
		 $("#"+thisselid).show();
		   $('#'+thisselid+' option:eq(0)').addClass('hlt')
			 return;
//		}
	}   // july13

//	$("#"+thisselid).empty()

// july 1
//  var checkinput = /^[0-9a-zA-Z\s.-]+$/; 
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length < 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = "";
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var drugsfound=false; var foundone=false;

     for (i = 0; i < (drugname.length); i++) {

   	var   pos=drugname[i].search(regvar)  
      if (pos != -1) { //search successful
         drugsfound=true;foundone=true;
         
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
         var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]+'--generic'+druggenericname[i];   //june 9 vikas
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el); }
           else { 
			 if (foundone) {break;}
      }     
      }  //end for
   
  //lastpricepur= lastpricepur[i]
  if (!drugsfound) {
    $('#'+thisselid).hide();
     document.getElementById(thisiderr).innerHTML="Invalid drug"; return;}
   $('#'+thisselid+' option:eq(0)').addClass('hlt');
})
$(document).on('keydown','input[id^=idtextsel],input[id^=idtextviewdrug]',  function(e) { 
// if down arrow pressed on text box set focus dropdown and highlight first element. If enter key pressed and dropdown is open then take 
// first element of dropdown.	If its entry then we also get all the data for the first element in dropdown. 
//	So on the text box here we are processing only enterkey and downarrow. 
//	The keyup event will process the input chars typed and opening of the drowdown.
  var keyCode = e.keyCode || e.which; 
	if((keyCode != 40) && (keyCode != 13))
	  {return}
  	
  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6) 
	if(keyCode == 40) { 
		  $('#'+thisselid).show();
	    document.getElementById(thisselid).selectedIndex=0;$('#'+thisselid+' option:eq(0)').addClass('hlt')
	    document.getElementById(thisselid).focus(); // if downarrow pressed
	    return;
		 }
	   var thistextid=thisid;document.getElementById(thisselid).selectedIndex=0;
     document.getElementById(thistextid).value=$('#'+thisselid+' option:selected').text();
	if ((thisid.indexOf('idtextview')) == -1) {       // if its edit and not view then
		 if ($('#'+thisselid).is(":visible")) { 
		  
     var vdruginfo= $('#'+thisselid).val();
 
    var rowid=thisselid.substr(6,2)
    var idstrength='idinp-'+rowid+'02'   // strength is col 2
    var idtype='idinp-'+rowid+'03'        // type is col 3
    var idqty='idinp-'+rowid+'04'          // qty is 
    var idqtyerr='idinp-'+rowid+'04'+'err'
    var idopdstk='idinp-'+rowid+'05'            // stock after issue
    var idopdstkerr='idinp-'+rowid+'05'+'err' 
    var idgeneric='idinp-'+rowid+'06'           // june 9 vikas
    
    
    document.getElementById(idqtyerr).innerHTML =""  
     document.getElementById(idqty).value ="";  
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
       document.getElementById(idgeneric).value=drugparts[4].substr(7)    // june 9 vikas

      var inpdrugname=drugparts[1].substr(4)
      var drugindx= checkposinarray(drugname, inpdrugname) 
     
     document.getElementById(idopdstk).value=opdstk[drugindx];
     $('#'+thisselid).hide()
		 }  // end if visible
	    }	
	 $('#'+thisselid).hide();    // hide the dropdown if enterkey has been input whether for entry or view 
}) 	
$(document).on( "click keydown", '[id^=idsel-]',function(e) { 
	// process when they hit enter on a dropdown selection 
	 	 $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
  if (e.type == 'keydown') {
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13) {return}
	}
  var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  $('#'+thisid).hide()
  var vdruginfo= $('#'+thisid+' option:selected').val();
 
  var rowid=thisid.substr(6,2)
   var idstrength='idinp-'+rowid+'02'   // strength is col 2
   var idtype='idinp-'+rowid+'03'        // type is col 3
  var idqty='idinp-'+rowid+'04'          // qty is 
   var idqtyerr='idinp-'+rowid+'04'+'err'
    var idopdstk='idinp-'+rowid+'05'            // stock after issue
     var idopdstkerr='idinp-'+rowid+'05'+'err' 
     var idgeneric='idinp-'+rowid+'06' // june 9 vikas
    
    document.getElementById(idqtyerr).innerHTML =""  
     document.getElementById(idqty).value ="";  
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
    document.getElementById(idgeneric).value=drugparts[4].substr(7)    // june 9 vikas

      var inpdrugname=drugparts[1].substr(4)
      var drugindx= checkposinarray(drugname, inpdrugname) 
     
     document.getElementById(idopdstk).value=opdstk[drugindx];
  
  
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
     var pos=checkposinarray(drugname, textinp)   
     if (checkposinarray(drugname, textinp) != -1) {
//      if (document.getElementById(lastrowdrugtextid).value != "") {    // if row is not empty then add a new row otherwise put drugname in that row                                                             

// v    
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
     var idopdstkerr='idinp-'+rowid+'05'+'err'
      var idgeneric='idinp-'+rowid+'06'  // june 9 vikas
      
     var inpdrugname=drugparts[1].substr(4)
     document.getElementById(lastrowdrugtextid).value=inpdrugname
      var drugindx= checkposinarray(drugname, inpdrugname) 
 
      document.getElementById(idqtyerr).innerHTML=""; document.getElementById(idopdstkerr).innerHTML="";
      document.getElementById(lastrowdrugtextiderr).innerHTML="";
     
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
      document.getElementById(idgeneric).value=drugparts[4].substr(7)  // june 9 vikas
    
     var thisliid=$(this).parents('li').attr('id') 
     var thisli=document.getElementById(thisliid)
     var newid=thisliid+'--'+lastrowid
     thisli.setAttribute("id", newid);
    
     var temp=document.getElementById(newid).innerHTML;
     var issuedetail = temp.split("----"); 
     var tempqty=issuedetail[1].substr(6);
     var tempqty=parseInt(tempqty)
      document.getElementById(idqty).value=tempqty;
     document.getElementById(idopdstk).value=opdstk[drugindx] - tempqty;
   }
  
  else {    // delete the row  if unchecked
 
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
    var temp='<select size="5" class="cvlong" id="idsel-0101" ></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();                                         //  01/28
   }     
 }  
  } // end delete
})

$(document).on('blur', 'input[id^=idtextsel],[id^=idsel-]', function(e){ 
	       var thisid=this.id; 	   
		     var thisrowid=$(this).parents('tr').attr('id') 
//     alert(e.relatedTarget.id)	;
	    setTimeout(function() {  var target = e.explicitOriginalTarget||document.activeElement  // since prod 0207   

				var currid=target.id;    // since prod 0207	 
//	   alert(currid);
	  // get id of dropdown in that row
		if (thisid.indexOf("idtext") != -1) {											 
      var thisselid="idsel-"+ thisrowid.slice(-2)+"01";// alert(thisselid);
			if ( currid == thisselid) {return}
	    }
		if (thisid.indexOf("idsel") != -1) {
       var thistextid="idtextsel-"+ thisrowid.slice(-2)+"01" 
			if (currid == thistextid) {return}
	    }
  
     // if you are on drug input then return because nothing to check
      var thisselid="idsel-"+ thisrowid.slice(-2)+"01"
       var thistextid="idtextsel-"+ thisrowid.slice(-2)+"01" 
       var thistextiderr=thistextid+'err' 
    if (  $("#"+thisselid).is(":visible"))   // if its open
      {      
       
        var textinp = (document.getElementById(thistextid).value).trim()      
         var pos=checkposinarray(drugname, textinp) 
         
    if (checkposinarray(drugname, textinp) == -1) {
       document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; }
     else {
       document.getElementById(thisselid).selectedIndex = 0;
       document.getElementById(thistextiderr).innerHTML = "";
       var drugindx = pos
			 var vdruginfo= $('#'+thisselid).val();
 
      var rowid=thisselid.substr(6,2)
      var idstrength='idinp-'+rowid+'02'   // strength is col 2
      var idtype='idinp-'+rowid+'03'        // type is col 3
     var idqty='idinp-'+rowid+'04'          // qty is  
    var idopdstk='idinp-'+rowid+'05'            // stock after issue
    var idgeneric='idinp-'+rowid+'06'  // june 9 vikas
      
     
     document.getElementById(idqty).value =0;  
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
       document.getElementById(idgeneric).value=drugparts[4].substr(7)  // june 9 vikas
       var stockid="idinp-"+ thisrowid.slice(-2)+"05" 
       document.getElementById(stockid).value=opdstk[drugindx] 
			 
     }   
     $("#"+thisselid).hide()
      }
	},500);											 
 }) 
$(document).on('blur', '#idtextviewdrug, #idviewdrug', function(e){ 
	       var thisid=this.id; 	   
		 
	    setTimeout(function() {  var target = e.explicitOriginalTarget||document.activeElement  // since prod 0207   

				var currid=target.id;    // since prod 0207 

		if (thisid == "idtextviewdrug") {											 
			if ( currid == "idviewdrug") {return}
	    }
		if (thisid == "idviewdrug") {											 
			if ( currid == "idtextviewdrug") {return}
	    }
  
     // if you are on drug input then return because nothing to check
      var thisselid="idviewdrug"
       var thistextid="idtextviewdrug" 
       var thistextiderr=thistextid+'err' 
    if (  $("#"+thisselid).is(":visible"))   // if its open
      {      
       
        var textinp = (document.getElementById(thistextid).value).trim() 
				if (textinp != "") {  
         var pos=checkposinarray(drugname, textinp) 
         
         if (checkposinarray(drugname, textinp) == -1) {
         document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; }
         else {
       document.getElementById(thisselid).selectedIndex = 0;
       document.getElementById(thistextiderr).innerHTML = "";
       var drugindx = pos
       } 
		}			
     $("#"+thisselid).hide()
      }
	},500);											 
 }) 

    
$('table').on('click','.delete',function(){
    var rowid=($(this).parents('tr').attr('id'))
    var temp='[id$='+rowid+'] input[type="checkbox"]'   
      $( temp).attr('checked', false);
//
      var temp=':checkbox[id$='+rowid+']' 
     $(temp).attr("checked","false");
// vik 020625     
     var temp='[id$='+rowid+'] input[type="checkbox"]'       
     var chkbox = $( temp)                                // this is the checkbox being unchecked
   if (chkbox.length > 0) {
     var parentli=$(chkbox).parents('li')                 // get parent li
     var liid=$(chkbox).parents('li').attr('id')          // // this is the parent li id of the checkbox being unchecked 1953--idrow01
     var liparts = liid.split("--");                      // this gives you 1953

     $(parentli).attr('id', liparts[0]);} //vik 020625   

// $("input[type=checkbox][value=5]").attr("checked","true");  
//     
    // var grossid='idinp-'+rowid+'06';
  
// reduce tgross ttax and tnet since this row is going to be deleted 
    
// reduce tgross ttax and tnet since this row is going to be deleted 
  //  tgross=(((tgross*10) - ((document.getElementById(grossid).value)*10))/10).toFixed(2)
   
 //          document.getElementById("idtgross").value= tgross
    
 
$(this).parents('tr').remove();
 if (document.getElementById("idtable").rows.length == 1) {  // 01/28
   addfirstrow()                                           //  01/28
    var temp='<select size="5" class="cvlong" id="idsel-0101" ></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();                                         //  01/28
   
 } 
})
    

 $('table').on('keydown', '.flditem', function(e){     // row is clopied
    var thisid=this.id;
    var keyCode = e.keyCode || e.which; 
	 if((e.which == 13) && (thisid.indexOf('idtextsel') != -1)) { return;}
 if((e.which == 13) || ((keyCode == 9) && ((this.id).slice(-2) == '05'))){  // e.which == 9 means tab entered and .slice(-2) == 16 means tab
 
  var lastrowid=$(".tblrow:last").attr("id")                              // on element netamt. e,which==13 means enter key has been entered  
  var clickedid=$(this).parents('tr').attr("id");     
  if ((this.id).slice(-2) == '04') {  // enter on qty
	  var getid04=thisid.slice(0, -2)+'04'      
          var getid05=thisid.slice(0, -2)+'05'    // id is idinp-0306 then we get idinp-03+06. 6 is no
          var getrowno=clickedid.slice(-2)
              var thistextid='idtextsel-'+ getrowno+'01';var thistextiderr=thistextid+"err"; 
              var textinp = (document.getElementById(thistextid).value).trim()      
              var pos=checkposinarray(drugname, textinp)   
             if (pos== -1) {
              document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; return; }
             else {       
              var  temp=((opdstk[pos]*10) -  ((document.getElementById(getid04).value)*10))/10;
						 }
							var getid04err=getid04+'err';
		         document.getElementById(getid04err).innerHTML = "";
		         if (temp < 0 ) 
						  { document.getElementById(getid04err).innerHTML = "Invalid due to less stock";return;}
				 }															 
//	                      
  if (clickedid == lastrowid)  { // copy only if hit enter on last row
   
     if (!checktblinputs()) { alert("invalid data"); return}     // check all inputs. This functions flags all errors. if one is in error dont allow add new row
   
    $(".tblrow:last").clone().insertAfter(".tblrow:last")
    setnewrowids() 
    var tempid=lastrow.toString();
				 
        if (lastrow < 10) {var tempid= '0'+tempid}
        var lastrowdrugtextid="idtextsel-"+ tempid +"01"
//		 
//		var x=parseInt(clickedid.slice(-2))+1; 
//		if(x > 9) {var temp=x.toString();} else {var temp = '0'+ x.toString();}
    var nextrowelm='idtextsel-'+tempid+'01';
		 var nextsel='idsel-'+tempid+'01';
    $(".tblrow:last").show()
         glob=0; trycheck(nextrowelm);
		    $("#"+ nextsel).empty();
			var temp1= "#"+nextsel
		 $('#idalldrugs option').clone().appendTo(temp1);$("#"+nextsel).show();
         document.getElementById(nextrowelm).focus();e.preventDefault(); 
}   // end if enter on last row 
  }   // end if enter key
  
// Add some text to the new cells:
//   $("#idtable").append(desc);  
}) 
$("#idhdrdoc").change(function(){ 
	var thisid=this.id; var thisiderr=thisid+'err';
	if ($("#"+thisid).val() == "Z") {
			document.getElementById(thisiderr).innerHTML = "Invalid Doctor"; }
	else 
		 {document.getElementById(thisiderr).innerHTML = "";}  
}) 	               
$(document).on('blur','input[id^=idinp],[id^=idhdrdoc],#idauth', function(){
     
      var thisid=this.id
       var thisiderr=thisid+'err' 
       
        if (thisid == "idhdrdoc") 
					 { if ($("#"+thisid).val() == "Z") {
						  document.getElementById(thisiderr).innerHTML = "Invalid Doctor"; }
						 else 
							{document.getElementById(thisiderr).innerHTML = "";}  
						     
					    } 
												 
       if (document.getElementById(thisid).readOnly) {return}   // if its a blur on a readonly then return
 //     alert($('#identrypat option:selected').text())
//	    alert($('#identrypat option:selected').text())
 //1 -drug 2-strength 3-type 4-expdt 5-rate 6-qty 7-amount 8-stk     
  // check for non mandatory fields which are numeric. they will be 0 if no entry. but they cannot be negative
           var last2 = thisid.slice(-2);  // net price can be 0. its not mandatory 
	         
          if (this.type == "number") { 
              var getrowno=thisid.substr(6,2)
              var tempexp= 'input[id^=idinp-'+getrowno+']'
             
             $(tempexp).each(function(i, selected){
               if(document.getElementById(this.id).value =="")
                 { document.getElementById(this.id).value =0;}
              })
        
 // till here check for non mandatory     
               // all mandatory fields must be > than 0
               document.getElementById(thisiderr).innerHTML = "";  // 01/28
               if(document.getElementById(thisid).value =="")     // all others number types mandatoyry must be > 0
                  {
                   document.getElementById(thisid).value =0;
                    
                  document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid";                  
               }      
                     
       var last2 = thisid.slice(-2);    
            
            if (last2 == "04"  )  {   // if its blur on 4-qty issued
           var getid04=thisid.slice(0, -2)+'04'      
          var getid05=thisid.slice(0, -2)+'05'    // id is idinp-0306 then we get idinp-03+06. 6 is no
         
              var thistextid='idtextsel-'+ getrowno+'01';var thistextiderr=thistextid+"err"; 
              var textinp = (document.getElementById(thistextid).value).trim()      
              var pos=checkposinarray(drugname, textinp)   
             if (checkposinarray(drugname, textinp) == -1) {
              document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; return; }
             else {       
               document.getElementById(getid05).value=((opdstk[pos]*10) -  ((document.getElementById(getid04).value)*10))/10}
							var getid05err=getid05+'err';
						document.getElementById(getid05err).innerHTML = "";
            if(document.getElementById(getid05).value < 0 )
            {
             document.getElementById(thisiderr).innerHTML = "Invalid due to less stock";
              return;
            }
      // end if for recalculate 
      var s=document.getElementById(thisid).value      
      s = s.replace(/^0+/, ''); 
      document.getElementById(thisid).value=s 
     }   
   }  // end if number    
  
if (!(document.getElementById("idauth").value=="")) {
    
    document.getElementById("idautherr").innerHTML = "";
    
}
  
})

$( "#idpatbtndup" ).click(function(e)  {
	
		var alldrugs=[];
	 alldrugs= $('input[id^=idtextsel]')   // get all text boxes for the drugs
         
	if ((alldrugs.length)  > 1) {   // check only if there are more than 1 drug
	for ($i = 0; $i < (alldrugs.length)-1; $i++) {
		for ($j = $i+1; $j < (alldrugs.length); $j++) {
		  if ($(alldrugs[$i]).val() == $(alldrugs[$j]).val() ) {  // get the text of the drugname
				var vardup="duplicate "+$(alldrugs[$i]).val()
				alert(vardup);
				return;
			                                      }
		                   }
	}
// alert("No Duplicates") /commented 04/16/26 vik
	}
alert("No Duplicates") //vik 04/16/26 added vik
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
  
   var tempdt=document.getElementById("idissdtinp").value;                // vikas
   var dtyyyymmdd=tempdt.substr(6,4)+tempdt.substr(3,2)+tempdt.substr(0,2)   // vikas
   var vissuedt=dtyyyymmdd;                                                 // vikas 
    var docname=$('#idhdrdoc option:selected').val()                        // vikas
    var patientidsel=$('#identrypat option:selected').val() 
		var  patientnamesel=$('#identrypat option:selected').text()             // vikas

     var vauth=document.getElementById("idauth").value                       // vikas
      
  var rowcoldata=[];
 
  var rowlength = document.getElementById("idtable").rows.length;
//
//   var vhospitalinfo=$('#idhdrsup option:selected').val()

       var rowindx=0
       rowcoldata[rowindx]=[];var remarks=[];
     
  
    $('[id^=idrow]').each(function(i, selected){     // get all rows
     var thisid=this.id   
     var rowid=thisid.slice(-2)
      var thistextid='idtextsel-'+rowid+'01'
      var textinp = (document.getElementById(thistextid).value).trim()      
      var pos=checkposinarray(drugname, textinp)  
      var inpdrugid=drugid[pos]
      var inpdrugname=drugname[pos]
      var inpstrength=drugstrength[pos]
      var inptype=drugtype[pos]
      var genericname=druggenericname[pos]; //shoba 11
     // var genericname=genericname[pos] //shoba 11
      var colindx = 0 

        var colindx = 0
//       rowcoldata[rowindx][colindx]=vdruginfo ; 
     rowcoldata[rowindx][0]=inpdrugid
     rowcoldata[rowindx][1]=inpdrugname
     rowcoldata[rowindx][2]=inpstrength
     rowcoldata[rowindx][3]=inptype
     var getidqty='idinp-'+rowid+'04'  
     var getidstk='idinp-'+rowid+'05' 
  rowcoldata[rowindx][4]=document.getElementById(getidqty).value;     
  rowcoldata[rowindx][5]=document.getElementById(getidstk).value;    
  var qty = rowcoldata[rowindx][4];   // vikas
      var price=lastpricepur[pos];  // vikas
      var issueamount= price * qty;     
    rowcoldata[rowindx][6]=price;      // vikas
    rowcoldata[rowindx][7]=issueamount; // vikas 
    rowcoldata[rowindx][8]=opdstk[pos]; // vikas  
      rowcoldata[rowindx][9]= genericname;  //shoba 11
      
   //   var genericname= genericname[pos];  //shoba 11       
    //  rowcoldata[rowindx][9]= genericname;  //shoba 11
    remarks[rowindx]=" "; 
     rowindx=rowindx+1;
      rowcoldata[rowindx]=[] 
     }) 
 
    $.post("ph_issueaddpharma.php",
    {prowcoldata: rowcoldata,pissuedt:vissuedt,pdocname:docname, ppatientid:patientidsel, ppatientname:patientnamesel, pauth:vauth, 
		 premarks:remarks})
					 
    .done(function(result, status){

    if (status) {

      try {
           var  resultdata = JSON.parse(result)         
        } catch (e) {
          var  msg='Program ph_issueaddpharma.php terminating with error '+ result
       
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;  
        }
       if (!resultdata.succfail) { 
        var vmsg='Program ph_issueaddpharma.php terminating with error '+ resultdata.msg
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
            $.post("ph_getissuedrugdata.php") 
        .done(function(resultd, statusd){ 
        if (statusd) {
          try {
           var  fieldsd = JSON.parse(resultd)         
           } catch (e) {
         var  msg='Program ph_getissuedrugdata terminating with error '+ resultd
       
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;  
         }
					if (!fieldsd.succfail) { 
          var vmsg='Program terminating with error '+ fieldsd.msg
          alert(vmsg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       drugname=fieldsd.drugname; drugid=fieldsd.drugid; drugstrength=fieldsd.drugstrength;  drugtype=fieldsd.drugtype;
					lastpricepur=fieldsd.lastpricepur; //genericname=fieldsd.genericname;  //shoba 11
        opdstk=fieldsd.opdstk;
 //    filldrugdropdown()    // july 1
     $('#testlist > li').slice(1).remove();
            document.getElementById("idauth").value  ="";
            $('#idhdrdoc').val("Z"); document.getElementById("idtextentrypat").value ="";
   }  // end good status
      
 })  // end post    
  .fail(function(xhr,status, error) {
			var temp="Request ph_getissuedrugdata failed kindly contact programmmer status is "+xhr.status
			  alert(temp)
          $(document).off()
         return;
    })          
        });

    
      }  // end if status
     
   })   //  end post  
 .fail(function(xhr,status, error) {
			var temp="Request ph_issueaddpharma failed kindly contact programmmer status is "+xhr.status
			  alert(temp)
			  $('#idpatbtnconf').prop("disabled",false); //shobha 11/09
         // $(document).off()
         return;
    })
})  



$("input:radio[name=optradio]").change(function() {

   if (this.id == "idradioview") {

     $("#identry").addClass("hidden");
//         tablereport.clear().draw();
         $("#identry").addClass("hidden");        
         $("#idview").removeClass("hidden")
         
   } 
  
  if (this.id == "idradioentry") {
     $("#idview").addClass("hidden");$("#identry").removeClass("hidden");
      
   }   
   if (this.id == "idradioopd") {
      $("#idview").addClass("hidden");$("#identry").addClass("hidden");
        
    location.href="ph_opdstkadj.php"
    
   }
   if (this.id == "idradioeditpharma") {
      $("#idview").addClass("hidden");$("#identry").addClass("hidden");
        
    location.href="ph_editpharma.php"
    
   }
  if (this.id == "idradioopdpt") {
      $("#idview").addClass("hidden");$("#identry").addClass("hidden");
    
    location.href="op_newpat.php" 
  }
  if (this.id == "idradiotrail") {
      $("#idview").addClass("hidden");$("#identry").addClass("hidden");
    
    location.href="ph_opdstockreportaudit.php" 
  }
   if (this.id == "idradioopdedit") {                                           //shoba editchange
      $("#idview").addClass("hidden");$("#identry").addClass("hidden");
    
     location.href="op_editviewpat.php"
   }
})
$(document).on('click','#idpurbtnsrch',  function(){
  
   if  (document.getElementById("idtextviewdrugerr").innerHTML != "") {return}
  
   if  (document.getElementById("idtextviewdrug").value == "") 
       {var vdrug="Z";document.getElementById("idtextviewdrugerr").innerHTML = ""}
   else  {var vdrug=$('#idviewdrug').val();} 
	 if  (document.getElementById("idtextviewpat").value == "") 
	 {var vpat='Z'} else {var vpat=$('#idviewpat').val(); } 
   var vdoc=$('#idviewdoc').val();  
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();
 
     tablereport.clear();
   getopdissuedata(vpat,vdoc,vdrug,vstartdt,venddt)
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
        <div class="col-sm-offset-1 col-sm-1">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioentry" checked name="optradio"><strong>OPD ENTRY</strong></label></div>
                 
          <div class="col-sm-1">
      <label class=" radio-inline text-success font16"><input type="radio" id="idradioview" name="optradio"><strong>OPD VIEW</strong></label></div>
     
      <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioopd" name="optradio"><strong>OPD STK ADJUSTMENT</strong></label></div>
    <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioopdpt" name="optradio"><strong>NEW PATIENT ENTRY</strong></label></div>
        <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioopdedit" name="optradio"><strong>EDIT PATIENT ENTRY</strong></label></div>  <!--shoba editchange-->
      <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioeditpharma" name="optradio"><strong>EDIT OPD ENTRY</strong></label></div>  <!--shoba editchange-->

    <div class="col-sm-1">
      <div class="col-sm-1">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradiotrail" name="optradio"><strong>OPD TRAIL</strong></label></div>
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
         
     <div id="identerissuedt" class="col-sm-2">
         <label>ISSUE DATE</label>
       
         <div class="input-group date" id="idissdt" >
           <input onkeydown="return false" id="idissdtinp" type="text" class="form-control" name ="nmissuedt"></input>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>      
         </div> 
      </div>
          
          <div id="idhdralldoc" class="col-sm-2"> 
     <label>DOCTOR  NAME:</label>
      <select id="idhdrdoc"  class="form-control">
        <option value="Z"  selected>Select Doctor Name</option>   
         <?php  
        // all patients are put here 
       for ($i = 0; $i < count($alldocname); $i++) { ?> 
        <option value="<?php echo $alldocname[$i];?>"><?php echo $alldocname[$i];?></option>
        <?php } ?>
     </select> <span class="centerstrong" id="idhdrdocerr"></span>
    </div> 

   <!--// note added div july 1 -->  
      <div id="iddrughide" class="col-sm-2">   
       <select id="idalldrugs"  class="form-control"> </select>      
       </div>
					<!--div id="idptnthide" class="col-sm-2">   
       <select id="idallptnts"  class="form-control"> </select>      
       </div-->
				<div id="tooltip_container"></div>	
   <!--// till here -->         
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
      
  <div class="row form-group">  
     <div class="col-sm-offset-10 col-sm-2">       
       <input type="button" name="nmpatbtndup" id="idpatbtndup" class="vtop btn btn-primary"  value= "Check Duplicates">                                                                                  
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
       <!--div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <input type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue">         
       </div-->   
 </div>             
 
   </div>
   </div>
   
       <div id="idview">
  <div id="idcontainer" class="container-fluid">
    <div class="row form-group">
       <div id="idviewalldoc" class="col-sm-2"> 
     <label>DOCTOR  NAME:</label>
      <select id="idviewdoc"  class="form-control fldview">
        <option value="Z"  selected>Select Doctor Name</option>   
         <?php  
        // all patients are put here 
       for ($i = 0; $i < count($alldocname); $i++) { ?> 
        <option value="<?php echo $alldocname[$i]; ?>"><?php echo $alldocname[$i];?></option>
        <?php } ?>
     </select> <span class="centerstrong" id="idhdrdocerr"></span>
    </div> 
       
      <div id="idviewallpat" class="col-sm-2"> 
     <label>PATIENT NAME:</label>
      <input type ="text" id="idtextviewpat" placeholder="Enter Patient Name" class="cvvlong  form-control">
      <select select size="5" id="idviewpat"  class="form-control">  
     </select> <span class="centerstrong" id="idtextviewpaterr"></span>
    </div> 
    <div id="idviewalldrug" class="col-sm-3"> 
     <label>DRUG NAME:</label>
      <input type ="text" id="idtextviewdrug" placeholder="Type Drug Name" class="cvwlong  form-control">
      <select select size="5" id="idviewdrug"  class=" cvlong form-control">   
     </select> <span class="centerstrong" id="idtextviewdrugerr"></span>
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
      
        
       <div class="col-sm-1"> 
         <label class="control-label"></label>
       <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Search">                                                                                 
      </div>  
           
   </div>
         
   <div class="control-group">&nbsp;</div>
         
      <div>
        <table id="idtablereport" class=" table table-bordered table-responsive table-condensed">
    </table>
         
      </div>
         
     </div>
   </div>  
<div id="tooltip_containerp"></div>	
</body>
     
