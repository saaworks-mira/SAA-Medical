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
  
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    table-layout: auto;
}  
  .font16 {font-size:16px}
input.cvlong {
  width: 150px;
}
input.cvvlong {
  width: 280px;
}  
input.cvwlong {
  width: 90%;
}  	
input.clong {
  width: 110px;
}
input.cshort {
  width: 85px;
}  
  input.cvshort {
  width: 70px;
}  
/* Tooltip #E2E4FF 800080;#84C0E4  */
  .info + .tooltip > .tooltip-inner {
      background-color: #73AD21; 
      color: #FFFFFF; 
      border: 1px solid green; 
      padding: 15px;
      font-size: 20px;
  }
#idpurbtnsrch {
    position:relative;
    margin-top: 20px;
    
} 
	@media print {
  [class*="col-sm-"] {
    float: left; 
  }
}
 ul > li a {
    color: #337ab7;
}
 /* 
table.dataTable tr.odd { background-color:#84C0E4 ; } 
table.dataTable tr.even { background-color: white; }
*/  
#idtable th { text-align: center; }    
table.dataTable tr.odd { background-color:#cce0ff ; } 
table.dataTable tr.even { background-color:#cce0ff; } 
#idtable.th, #idtable.td { text-align: center; }  
th.dt-center, td.dt-center { text-align: center; }
  table.dataTable thead th { 
    text-align: center;
    background: #ffcccc;
  }

table.dataTable th, table.dataTable.cell-border tbody td {
    border-top: 1px solid  #708090;
    border-right: 1px solid  #708090;  border-left: 1px solid  #708090;}


</style>

<script type="text/javascript"> 
  var drugname=[]; var drugid=[];var drugstrength=[]; var drugtype=[]; var suppliername=[]; var supplierid=[];
  var lastdatepur=[]; var lastsuppur=[]; var lastpricepur=[];  var lastpriceperpk=[]; var mindatepur=[]; var minsuppur=[]; var minpricepur=[];
  var maxdatepur=[]; var maxsuppur=[];var maxpricepur=[]; var opstk=[]; var nondiscprice=[];
  var tablereport; var idsel; var idview; var idtextview; var idtextsel;
  
  // purchase data below
  var purchasedt=[]; var invoiceno=[]; var vdrugname=[]; var vstrength=[]; var vdrugtype=[];var pursuppliername=[];
  var batchno=[]; var expdt=[]; var opngstk=[];var qtyperpack=[];var packs=[];var freepacks=[];var vopngstk=[]; var vclsgstk=[];
   var totalqty=[]; var unitprice=[]; var discunitprice=[];var grossprice=[]; var taxpercent=[];var tax=[];     
  var netamt=[]; var issueauthority=[];    
  var tgross=0;var ttax=0;var tnet=0;  var tnetdisplay=0;var lastrow=0
	var globalid; var glob; 
	
function trycheck(elmtochk) {
    if (($("#"+elmtochk).length > 0) || (glob > 20)) {
			cancelAnimationFrame(globalid);
    }else {
			glob=glob+1
      globalid=window.requestAnimationFrame(trycheck); 
     }
  }	  
function checkheaders()  {       //   check for inputs for all non table fields. they start with idhdr
   var allgood=true
   $('[id^=idhdr]').each(function(i, selected){ 
     var thisid=this.id    
      if (this.type == "select-one") {
        var thisiderr=thisid+'err'
        if (document.getElementById(thisid).selectedIndex == "0")
          { document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
            allgood=false }
         else {document.getElementById(thisiderr).innerHTML = ""}
      }
     if (!document.getElementById(thisid).readOnly) {   // check only enterable fields
      var thisiderr=thisid+'err'
     
      if (this.type == "number") {                      // check if element is number type
     
        if(!(document.getElementById(thisid).value>0)) {    // if value not > 0 then flad error
               
            document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
            allgood=false
             }
         else {document.getElementById(thisiderr).innerHTML = ""}

      }  // end if number 
       if (this.type == "text") {                      // check if txt type
     
        if(document.getElementById(thisid).value == "") {    // if value not > 0 then flad error
          
            document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
            allgood=false
             }
         else {document.getElementById(thisiderr).innerHTML = ""}

      }  // end if text
    }   // end if not readonly 
   }) 
    if (!allgood) {return false}         // function will return false even if one field is in error
        else {return true;}
}  
function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
}  
function checktblinputs()  {       //   check for inputs If not valid then flag error and return false. all inputs start with idsel or idinp
// 1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net 
   var allgood=true
   $('input[id^=idtextsel]').each(function(i, selected){ 
     var thisid=this.id  
     var thisiderr=thisid+'err'  
    
     if (document.getElementById(thisiderr).innerHTML != "")  {allgood=false; }
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
             if (checkposinarray(drugname, textinp) == -1)
             {document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; allgood=false}
            else {
              document.getElementById(thisselid).selectedIndex = 0;document.getElementById(thistextiderr).innerHTML = "";
                 }   
            $("#"+thisselid).hide()          
            } 
           else {document.getElementById(thisiderr).innerHTML = ""}
       }
    }
   })
	 
	 function disableautocompletion(){ 
    var passwordControl = document.getElementById(idtextsel);
    passwordControl.setAttribute("autocomplete", "off");
}
    
  $('input[id^=idinp]').each(function(i, selected){       // get all input elements starting with idinp
      var thisid=this.id
      var thisiderr=thisid+'err'   
      var last2 = thisid.slice(-2); 
      if (last2 == "17"  ) {     // net amt must be > 0. its a readonly field
        if(!(document.getElementById(thisid).value>0)) {    // if value not > 0 then flad error
               
            document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
            
            allgood=false
             }
         else {document.getElementById(thisiderr).innerHTML = ""}
      }
    if (!document.getElementById(thisid).readOnly) {   // check only enterable fields
      if (this.type == "number") {                      // check if element is number type
       if (last2 == "09" ) {   //  check non mandatory numeric fields--  free packs,  tax
         if((document.getElementById(thisid).value =="")) 
           { document.getElementById(thisid).value =0;document.getElementById(thisiderr).innerHTML = ""}         
       } // end for 4  9  14
       else 
         {    // mandatory numeric fields 
         if(!(document.getElementById(thisid).value>0)) {    // if value not > 0 then flag error            
            document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"            
            allgood=false}
         else {document.getElementById(thisiderr).innerHTML = ""}
         }  // end check of mandatory fields
        
      }  // end if number 
      if(last2 == "04" || last2 == "05")  { // check if text type
       if(last2 == "04") {
         if(document.getElementById(thisid).value == "") {    // if null 
            document.getElementById(thisiderr).innerHTML = ""}
        }
       else { 
          var re = new RegExp("^[0-9][0-9]\/[0-9][0-9]$");
             if (!re.test(document.getElementById(thisid).value)) {
                allgood=false;document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"}
            }
   }
    }   // end if not readonly 
    
    
})
   if (!allgood) {return false}         // function will return false even if one field is in error
        else {return true;}
}
	
	
function addheader()  {  
  
var desc='<thead id="idthead"><tr><th>Delete</th><th>Drug name</th><th>Strength</th><th>Type</th>'
+'<th>Batch No</th>'+'<th>Exp Date</th><th>Opn Stock</th><th>Qty/Pack</th>'+
   '<th>Packs</th><th>Free Packs</th><th>Total Qty</th><th>Cls Stock</th>'+
  '<th>Unit Price/Pk&nbsp;&nbsp;<a class="info" href="#" data-toggle="tooltip" title="" data-placement="top">'+                                                             
   '<span class="glyphicon glyphicon-question-sign"></span></a></th><th>Disc Unit Pr/Pk</th><th>Gross Price</th>'+          
     '<th>Tax%</th><th>Tax</th><th>Net Price</th></tr></thead>';
  $("#idtable").append(desc);  // add header to the table
  
  
  var descreport='<thead id="idviewthead"><tr><th class="text-center">Drug name</th><th class="text-center">Strength</th><th class="text-center">Type</th><th class="text-center">Purchasedt</th>'+
'<th class="text-center">Supplier</th><th class="text-center">Challan No\/ Invoiceno</th><th class="text-center">Batch No</th><th class="text-center">Exp Dt</th><th class="text-center">Opn Stock</th><th class="text-center">Qty/Pack</th><th class="text-center">Packs</th>'+
 '<th>Free Packs</th><th>Total Qty</th><th>Cls Stock</th><th>Unit Price/Qty</th><th class="text-center">Disc Price</th><th class="text-center">Gross Price</th>'+
   '<th class="text-center">Tax Percent</th><th class="text-center">Tax</th><th class="text-center">Net Amt</th><th>Purchase Authority</th></tr></thead>'+
      '<tfoot><tr><th colspan="19" style="text-align:right">Page Total:</th><th></th></tr></tfoot>';
                  
   $("#idtablereport").append(descreport);
 
  
} 
function addfirstrow()  {   
// 1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net 
var temp0='<button type="button" class="btn btn-default btn-sm delete"  style="color:#FF0000;"><span class="glyphicon glyphicon-remove"></span></button>'
  var temp1a='<input type ="text" id="idtextsel-0101" placeholder="Type Drug Name" class="cvvlong scclass flditem form-control">';
  var temp1b='<span class="centerstrong text-center" id="idtextsel-0101err"></span>'            
  var temp1=temp1a+temp1b 
  var temp2='<input type ="text" id="idinp-0102" class="cshort flditem form-control" readonly><span class="centerstrong" id="idinp-0102err"></span>'
  var temp3='<input type ="text" id="idinp-0103" class="cshort flditem form-control" readonly><span class="centerstrong" id="idinp-0103err"></span>' 
  var temp4='<input type ="text" id="idinp-0104" class="clong flditem form-control"><span class="centerstrong" id="idinp-0104err"></span>'                 // made batcxh text field
  var temp5='<input type ="text" id="idinp-0105" maxlength="5" class="cshort flditem form-control placeholder="mm/yy"><span class="centerstrong" id="idinp-0105err"></span>'               // can it be made date field
  var temp6='<input type ="number" id="idinp-0106" class="clong flditem form-control" readonly><span class="centerstrong" id="idinp-0106err"></span>'       // stk made readonly
  var temp7='<input type ="number" id="idinp-0107" class="cshort flditem form-control"><span class="centerstrong" id="idinp-0107err"></span>'
  var temp8='<input type ="number" id="idinp-0108"  class="cshort flditem form-control"><span class="centerstrong" id="idinp-0108err"></span>'
  var temp9='<input type ="number" id="idinp-0109" class=" cshort flditem form-control"><span class="text-danger" id="idinp-0109err"></span>'
 var temp10='<input type ="number" id="idinp-0110" class="clong flditem form-control" readonly><span class="centerstrong" id="idinp-0110err"></span>'
 var temp11='<input type ="number" id="idinp-0111" class=" clong flditem form-control" readonly><span class="centerstrong" id="idinp-0111err"></span>'
 var temp12='<input type ="number" id="idinp-0112" class=" clong flditem form-control"><span class="centerstrong" id="idinp-0112err"></span>'
 var temp13='<input type ="number" id="idinp-0113" class="clong flditem form-control" readonly><span class="centerstrong" id="idinp-0113err"></span>'                   // dis.price  is made readable
 var temp14='<input type ="number" id="idinp-0114" class=" clong flditem form-control" readonly><span class="centerstrong" id="idinp-0114err"></span>'
 var temp15='<input type ="number" id="idinp-0115" class="cshort flditem form-control" value=12  ><span class="centerstrong" id="idinp-0115err"></span>'
 var temp16='<input type ="number" id="idinp-0116" class="clong flditem form-control" readonly><span class="centerstrong" id="idinp-0116err"></span>'
 var temp17='<input type ="number" id="idinp-0117" class="clong flditem form-control" readonly><span class="centerstrong" id="idinp-0117err"></span>'
        
 // append first row 
  var desc='<tr id="idrow01" class="tblrow">'+'<td id="idcol0100">' +temp0+ '</td>'+ '<td id="idcol0101">' +
           temp1+'</td>'+ '<td id="idcol0102">' +temp2+ '</td>'+ '<td  id="idcol0103">'+temp3+'</td>'+
      '<td  id="idcol0104">'+   temp4+ '</td>' +'<td  id="idcol0105">'
          +temp5+'</td>'+'<td  id="idcol0106">' +temp6+ '</td>'+ '<td   id="idcol0107">' +temp7+ '</td>'
        +'<td  id="idcol0108">' +temp8+ '</td>'+'<td  id="idcol0109">'
         +temp9+ '</td>'+'<td id="idcol0110">' +temp10+'</td>'+'<td id="idcol0111">' +temp11+'</td>'+'<td id="idcol0112">'  
        +temp12+ '</td>'+'<td id="idcol0113">' +temp13+ '</td>'+'<td id="idcol0114">'
        +temp14+ '</td>'+'<td id="idcol0115">' +temp15+ '</td>'+'<td id="idcol0116">' +temp16+ '</td><td id="idcol0117">' +temp17+ '</td></tr>'
         
 
   $("#idtable").append(desc);  
  
} 


function fillsupplierdropdown()  {  
  $('#idhdrsup').find('option:gt(0)').remove(); $('#idviewsup').find('option:gt(0)').remove();
   var dropdown = document.getElementById("idhdrsup")  
    var dropdown2 = document.getElementById("idviewsup")    
          for(var i = 0; i < (supplierid.length); i++) {
           
            var  opt = suppliername[i];
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = supplierid[i].toString()+'--'+suppliername[i]; 
                                                                     // format is supplierid and name
           dropdown.appendChild(el);
          var el2 = document.createElement("option");
            el2.textContent=el.textContent
            el2.value=el.value
           dropdown2.appendChild(el2); 
          }      
    
//  var table= $('#idtable').DataTable()        
}   
function populatedrugs()  {
      
  // get all drugs
      $.post("ph_getdrugdata.php", 
        function(result, status){ 
      
        if (status) {
          
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       drugname=fields.drugname; drugid=fields.drugid; drugstrength=fields.drugstrength; drugtype=fields.drugtype 
       suppliername=fields.suppliername; supplierid=fields.supplierid; opstk=fields.stock;nondiscprice=fields.nondiscprice;
       lastdatepur=fields.lastdatepur;lastsuppur=fields.lastsuppur; lastpriceperpk=fields.lastpriceperpk;
       mindatepur=fields.mindatepur;minsuppur=fields.minsuppur;minpricepur=fields.minpricepur;
       maxdatepur=fields.maxdatepur;maxsuppur=fields.maxsuppur;maxpricepur=fields.maxpricepur;   
      fillsupplierdropdown()
//
			var dropdown2 = document.getElementById("idalldrugs") 
			 $("#idalldrugs").empty();
          var druglen=drugid.length;
          for(var i = 0; i < (druglen); i++) {
            var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i];
           dropdown2.appendChild(el);          
          }  
//			
   }  // end good status
      
 })  // end post    
}   
function getpurchasedata(vsup,vdrug,vstartdt,vendt,vexpdt)  {
  $.post("ph_getpurchdata.php", {
            psup:vsup,pdrug:vdrug,pstartdt:vstartdt,penddt:vendt,pexpdt:vexpdt},
        function(result, status){ 
      
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
// below variables are retunbed from backend and contains all the drugs         
       if (fields.rowcount > 0) {  
        
       purchasedt=fields.purchasedt; pursuppliername=fields.suppliername; invoiceno=fields.invoiceno; 
       vdrugname=fields.drugname; vstrength=fields.strength; vdrugtype=fields.drugtype 
      batchno=fields.batchno; expdt=fields.expdt; vopngstk=fields.opngstk;vclsgstk=fields.clsgstk;
      qtyperpack=fields.qtyperpack;packs=fields.packs;freepacks=fields.freepacks;
      totalqty=fields.totalqty;unitprice=fields.unitprice;discunitprice=fields.discunitprice;
      grossprice=fields.grossprice;taxpercent=fields.taxpercent;tax=fields.tax;
     netamt=fields.netamt; issueauthority=fields.issueauthority;   
          var druglen=vdrugname.length
          for(var i = 0; i < (druglen); i++) {
          
      var purdtddmmyyyy=purchasedt[i].substr(6,4)+'/'+purchasedt[i].substr(4,2)+'/'+purchasedt[i].substr(0,4)
    var  vexpdt=expdt[i].substr(2,2)+'/'+expdt[i].substr(0,2)
    
// now add to the report table  
            
             tablereport.row.add( [
    vdrugname[i],vstrength[i],vdrugtype[i],purdtddmmyyyy,pursuppliername[i],invoiceno[i],batchno[i],vexpdt,vopngstk[i],qtyperpack[i],
    packs[i],freepacks[i],totalqty[i],vclsgstk[i],unitprice[i],discunitprice[i],grossprice[i],taxpercent[i],tax[i],netamt[i],issueauthority[i]])
               .draw(false); 
    
         
          }  // end for
      }  // end if rows > 0    
    else {
			alert("No rows Found");$('#idpurbtnsrch').prop("disabled",false);
		      }
     tablereport. draw();  
   $('#idpurbtnsrch').prop("disabled",false);                
   }  // end good status
  
       
 })  // end post  
          
}  
function initallfields() {       
//    $('#idpatconfrow').addClass('hidden') // show confirm
     $('#idpatmsgrow').addClass('hidden')
      $('#idpatbtnconf,#idpurbtnsrch').prop("disabled",false); 
    setTimeout(function(){       // run this after 2 seconds so that all the error fields have been available to the Jquery
       $('[id$=err]').each(function(i, selected){       // initialize error fields
       var thisid=this.id 
       document.getElementById(this.id).innerHTML = ""
        })      
 }, 1500);
  $('#idhdrinvno').val("") 
  $('#idhdrsup').val("Z") 
 
    tgross=0;ttax=0,tnet=0;
  document.getElementById("idtgross").value=0;
  document.getElementById("idttax").value=0;
  document.getElementById("idtnet").value=0;  
  $('.info').attr('data-original-title', "");
  var temp='<select size="5" class="cvlong scclass" id="idsel-0101" ></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();  
} 


$(document).ready(function(){ 
  	$("#iddrughide").addClass("hidden");  
   lastrow=0     // globals
   addheader() 
   addfirstrow()
   
   populatedrugs()
   fillsupplierdropdown() 
   var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
 
         $('#idpurdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
    var datestr=dd+'/'+mm+'/'+yyyy;        
   $('#idpurdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker('setDate', datestr)  
//    $('#idpurdtinp').datepicker('setStartDate', '03/31/2014');
      $('#idpurdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker('setEndDate', datestr);
//   

     $('#idviewinpexpdt').datepicker({ 
         format: 'mm/yy',
       viewMode: 1,
       minViewMode: 1
       })  
   $('[data-toggle="tooltip"]').tooltip();
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
            null,
            null,  
            { "sType": "date-uk" },
            null,
            null,
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
                .column( 19 )
                .data()
                .reduce( function (a, b) {
                    return (intVal(a) + intVal(b)).toFixed(2);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 19, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return (intVal(a) + intVal(b)).toFixed(2);
                }, 0 );
 
            // Update footer
            $( api.column( 19 ).footer() ).html(                                      
                'Rs. '+pageTotal +'   ( Rs. '+ Math.round(total) +' GrandTotal)'   
            );
        }
    } );
  
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
} );  
 
//     getpurchasedata("n","","","","","")
   
    
     $('#idview').addClass("hidden")
     
$(document).on( "change", '#idhdrsup',function(e) {
  
 if  ($('#idhdrsup').val() == "Z") {
           document.getElementById("idhdrsuperr").innerHTML = "&nbsp;&nbsp;Invalid"
                return }
          else {document.getElementById("idhdrsuperr").innerHTML = "";return}
})  


$(document).on('blur', 'input[id^=idtextsel],[id^=idsel-]', function(e){ 
	       var thisid=this.id; 	   
		     var thisrowid=$(this).parents('tr').attr('id') 
       
	    setTimeout(function() {  
			var target = e.explicitOriginalTarget||document.activeElement 
			var	currid=target.id;
//	   alert(currid);
	  // get id of dropdown in that row
		if (thisid.indexOf("idtext") != -1) {											 
      var thisselid="idsel-"+ thisrowid.slice(-2)+"01";// alert(thisselid);
			if ( currid == thisselid) {return}
	    }
		if (thisid.indexOf("idsel") != -1) {
       var thistextid="idtextsel-"+ thisrowid.slice(-2)+"01" 
			if (currid == thistextid) {return;}
	    }
  
     // if you are on drug input then return because nothing to check
      var thisselid="idsel-"+ thisrowid.slice(-2)+"01"
       var thistextid="idtextsel-"+ thisrowid.slice(-2)+"01" 
       var thistextiderr=thistextid+'err' 
    if (  $("#"+thisselid).is(":visible"))   // if its open
      {      
       
        var textinp = (document.getElementById(thistextid).value).trim()      
         var pos=checkposinarray(drugname, textinp) 
         
    if (pos == -1) {
       document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; $('.info').attr('data-original-title', ""); }
     else {
       document.getElementById(thisselid).selectedIndex = 0;
       document.getElementById(thistextiderr).innerHTML = "";
       var drugindx = pos
			 var vdruginfo= $('#'+thisselid).val();
			 
       var rowid=thisselid.substr(6,2)
       var idstrength='idinp-'+rowid+'02'   // strength is col 2
       var idtype='idinp-'+rowid+'03'        // type is col 3
       var idprice='idinp-'+rowid+'12'    // price is 11
       var idpriceerr='idinp-'+rowid+'12'+'err'
    
     $('.info').attr('data-original-title', ""); 
       
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
//
      var inpdrugname=drugparts[1].substr(4)
       var stockid="idinp-"+ thisrowid.slice(-2)+"06" 
       document.getElementById(stockid).value=opstk[drugindx]
     if (minpricepur[drugindx] == 0) {var vtitle="No Data available"}
      else{
        var temp =  minsuppur[drugindx];
        var tempsup=temp.replace(/[0-9]*--/, ' ');
        var temp=mindatepur[drugindx];
        var tempdt=temp.substr(6,2)+'/'+temp.substr(4,2)+'/'+temp.substr(0,4);
        
        var vtitle='The lowest price ' + minpricepur[drugindx] + ' from '+ tempsup + ' on '+ tempdt;}
     $('.info').attr('data-original-title', vtitle)
		  var vdrugid=drugid[drugindx]
      $.post("ph_getqtyperpk.php", 
        {pdrugid:vdrugid}, 
        function(result, status){ 
        
        if (status) {
          
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
    var  pqtyperpack=fields.qtyperpack;
		var qtyid="idinp-"+ thisrowid.slice(-2)+"07" 
       document.getElementById(qtyid).value=""			
			 if (pqtyperpack > 0) { 	
       document.getElementById(qtyid).value=pqtyperpack}
   }  // end good status
      
 })  // end post 
     }   
     $("#"+thisselid).hide()
      }
	},1);											 
 }) 

$(document).on( "click keydown", '[id^=idsel-]',function(e) {  // if user hits enter on a selection or clicks on it then accept it
	 var thisid=this.id
	 var thisselid=thisid.substr(0,2)+thisid.substr(6) 
	  $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
	if (e.type == 'keydown') {
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13 && keyCode != 9  ) {return}
	}
 
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
	
  $('#'+thisid).hide()
  var vdruginfo= $('#'+thisid).val();
  var rowid=thisid.substr(6,2)
   var idstrength='idinp-'+rowid+'02'   // strength is col 2
   var idtype='idinp-'+rowid+'03'        // type is col 3
   var idprice='idinp-'+rowid+'12'    // price is 11
   var idpriceerr='idinp-'+rowid+'12'+'err'
   
     $('.info').attr('data-original-title', ""); 
       
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
//

      var inpdrugname=drugparts[1].substr(4)
      var drugindx= checkposinarray(drugname, inpdrugname) 
//      var stockid="idinp-"+ thisid.slice(-2)+"06" // vikas bug fix 21/06/
			var stockid="idinp-"+ thisid.substr(6,2)+"06"  // vikas bug fix 21/06/
//      alert(thisid)    
//      alert(stockid)                                                                       //SHOBA  21/05
//			alert(idtype)
       document.getElementById(stockid).value=opstk[drugindx]
//     
//     var  = (document.getElementById(thisid).selectedIndex)
     
//     document.getElementById(idprice).value=lastpriceperpk[drugindx];
			  document.getElementById(idprice).value=nondiscprice[drugindx];
     document.getElementById(idpriceerr).innerHTML="" 
     
     if (minpricepur[drugindx] == 0) {var vtitle="No Data available"}
      else{
        var temp =  minsuppur[drugindx];
        var tempsup=temp.replace(/[0-9]*--/, ' ');
        var temp=mindatepur[drugindx];
        var tempdt=temp.substr(6,2)+'/'+temp.substr(4,2)+'/'+temp.substr(0,4);
        
        var vtitle='The lowest price ' + minpricepur[drugindx] + ' from '+ tempsup + ' on '+ tempdt;}
     $('.info').attr('data-original-title', vtitle)
     var vdrugid=drugid[drugindx]
      $.post("ph_getqtyperpk.php", 
        {pdrugid:vdrugid}, 
        function(result, status){ 
        
        if (status) {
          
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
    var  pqtyperpack=fields.qtyperpack;
		var qtyid="idinp-"+ rowid.slice(-2)+"07" 
       document.getElementById(qtyid).value=""			
			 if (pqtyperpack > 0) { 	
       document.getElementById(qtyid).value=pqtyperpack}
   }  // end good status
      
 })  // end post 
})  
$(document).on('blur', '#idtextviewdrug, #idviewdrug', function(e){ 
	       var thisid=this.id; 	   
		 
	    setTimeout(function() {   	var target = e.explicitOriginalTarget||document.activeElement 
			var	currid=target.id;	 

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
         
      if (pos == -1) {
       document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; }
     else {
       document.getElementById(thisselid).selectedIndex = 0;
       document.getElementById(thistextiderr).innerHTML = "";
       
       }  
		}		
     $("#"+thisselid).hide()
      }
	},1);											 
 }) 
$(document).on( "click keydown", '#idviewdrug',function(e) {  // if user hits enter on a selection or clicks on it then accept it
  	 $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
	if (e.type == 'keydown') {        
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13 && keyCode != 9  ) {return}
	}

  var thisid=this.id             
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  var thistextiderr=thistextid+'err'
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  document.getElementById(thistextiderr).innerHTML="" 
  $('#'+thisid).hide()
})
$(document).on('keydown','input[id^=idtextsel],input[id^=idtextviewdrug]',  function(e) {  // if user hits downkey then open dropdown
 
//	if(e.which != 40) {return}  commented vikas june 6 and replaced by line below below
	if((e.which != 40) && (e.which != 13) ){return}    // now accept even enter key vikas june 6

  var thisid=this.id; 
  var thisselid=thisid.substr(0,2)+thisid.substr(6) 
	$('#' + thisselid).show();document.getElementById(thisselid).selectedIndex=0;
	//  vikas june 6  if enter key pressed and if dropdown is open then take the first entrey in the dropdown
    if ( (e.which == 13) && ($("#"+thisselid).is(":visible")) ) 
			 {
				 document.getElementById(thisid).value=$('#'+thisselid+' option:eq(0)').text(); 
				 $('#' + thisselid).hide();
				  if (thisid.indexOf('idtextview') == -1) {  
				 var vdruginfo= $('#'+thisselid+' option:eq(0)').val();
         var rowid=thisselid.substr(6,2)
         var idstrength='idinp-'+rowid+'02'   // strength is col 2
         var idtype='idinp-'+rowid+'03'        // type is col 3
         var idprice='idinp-'+rowid+'12'    // price is 11
         var idpriceerr='idinp-'+rowid+'12'+'err'
    
         $('.info').attr('data-original-title', ""); 
    var thistextid= thisid  
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
//
      var inpdrugname=drugparts[1].substr(4)
      var drugindx= checkposinarray(drugname, inpdrugname) 
//       var stockid="idinp-"+ thisid.slice(-2)+"06"  // bug fix    21/06
			var stockid="idinp-"+ thisid.substr(10,2)     // bug fix 21/06
       document.getElementById(stockid).value=opstk[drugindx]
//     
//     var  = (document.getElementById(thisid).selectedIndex)
     
//     document.getElementById(idprice).value=lastpriceperpk[drugindx];
			  document.getElementById(idprice).value=nondiscprice[drugindx];
     document.getElementById(idpriceerr).innerHTML="" 
     
     if (minpricepur[drugindx] == 0) {var vtitle="No Data available"}
      else{
        var temp =  minsuppur[drugindx];
        var tempsup=temp.replace(/[0-9]*--/, ' ');
        var temp=mindatepur[drugindx];
        var tempdt=temp.substr(6,2)+'/'+temp.substr(4,2)+'/'+temp.substr(0,4);
        
        var vtitle='The lowest price ' + minpricepur[drugindx] + ' from '+ tempsup + ' on '+ tempdt;}
     $('.info').attr('data-original-title', vtitle)
	}  // end if not view
				 return;				 		 
			 }
	// till here june 6
	document.getElementById(thisselid).focus();
	
	$('#'+thisselid+' option:eq(0)').addClass('hlt')
// $('#'+thisselid+' option:selected').addClass('hlt');
}) 	
$(document).on('keyup click','input[id^=idtextsel],input[id^=idtextviewdrug]',  function(e) {   // show dropdown on click and char entered
//disableautocompletion()
 if (e.type == 'keyup') {
	var keyCode = e.keyCode || e.which; 
 if(keyCode == 13) {return} }

  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6) 

  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty();
  var txt=document.getElementById(thisid).value;
  
  txt=txt.trim(); //remove spaces before and after text
//
	if (txt == "") {
		var temp= "#"+thisselid
		 $('#idalldrugs option').clone().appendTo(temp);
		  $("#"+thisselid).show();
		   $('#'+thisselid+' option:eq(0)').addClass('hlt')
			 return;
	 }
//	
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length > 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = "";
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var drugsfound=false;var foundone=false;
     var druglen=drugname.length
     for (i = 0; i < (druglen); i++) {

   	var   pos=drugname[i].search(regvar)  
      if (pos != -1) { //search successful
         drugsfound=true; var foundone=true;
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
        
         var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]; 
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }   
      else { 
			 if (foundone) {break;}}  
      }  //end for

  if (!drugsfound) {$('#'+thisselid).hide();document.getElementById(thisiderr).innerHTML="Invalid drug";return;}
	
     $('#'+thisselid+' option:eq(0)').addClass('hlt');

})
 $('table').on('click','.delete',function(){
     var rowid=($(this).parents('tr').attr('id')).slice(-2);
    
     var grossid='idinp-'+rowid+'14';var taxid='idinp-'+rowid+'16';var netid='idinp-'+rowid+'17';
  
// reduce tgross ttax and tnet since this row is going to be deleted 
    tgross=(((tgross*10) - ((document.getElementById(grossid).value)*10))/10).toFixed(2)
   
           document.getElementById("idtgross").value= tgross
    ttax=(((ttax*10) - ((document.getElementById(taxid).value)*10))/10).toFixed(2)
    document.getElementById("idttax").value=ttax
    tnet=(((tnet*10) - ((document.getElementById(netid).value)*10))/10).toFixed(2)
    tnetdisplay=(Math.round(tnet)).toFixed(2); 
    document.getElementById("idtnet").value= tnetdisplay
    $('.info').attr('data-original-title', "");
$(this).parents('tr').remove();
  
 if (document.getElementById("idtable").rows.length == 1) {  // 01/28
      
   addfirstrow()                                           //  01/28
//
  var temp='<select size="5" class="cvlong" id="idsel-0101" ></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();  
//   
//   populatedrugs()                                        //  01/28
   
 } 
})

// $('table').on('keydown','.clong, .cshort',function(e){     // row is copied
 $('table').on('keydown', '.flditem', function(e){     // row is clopied
  
// here before adding a new row we make sure ALL rows have good data. This is done by checktblinputs function. If it returns true then
// this means its all good and we proceed to add new row and set the id for all elements in the new row. 
  var keyCode = e.keyCode || e.which; 
	if ((keyCode == 13)  && ((this.id).slice(-2) == '01')) {return;}  // added by vikas june 6. If enter key on dropdown then dont validate row
 if((keyCode == 13) || ((keyCode == 9) && ((this.id).slice(-2) == '17'))) { // either enter key (code 13) or tab (code 16) entered on netamt
  var lastrowid=$(".tblrow:last").attr("id")                              // make sure we are on last row  
  var clickedid=$(this).parents('tr').attr("id");                          
  if (clickedid == lastrowid)  { // copy only if hit enter on last row
// added by vikas 27 May
		if((keyCode == 13) && ((this.id).slice(-2) == '12')) {
			 var temp=this.id; $( "#"+temp ).trigger( "blur" );
			 }
// till here		
     if (!checktblinputs()) {alert("invalid data"); return}     // check all inputs. This functions flags all errors. if one is in error dont allow add new row
   
    $(".tblrow:last").clone().insertAfter(".tblrow:last")
    
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
     var temp=i.toString();
     if (i < 10) {var colno= '0'+temp}
     else {var colno=temp};     
     var cellid = "idcol"+ rowno+ colno; 
     var thiscell=thisrow.cells[i]
     thiscell.setAttribute("id", cellid);  // till here setting the id of row and col
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
	var tempid=lastrow.toString();
				 
        if (lastrow < 10) {var tempid= '0'+tempid}
        var lastrowdrugtextid="idtextsel-"+ tempid +"01"
        var nextrowelm='idtextsel-'+tempid+'01';
        $(".tblrow:last").show()
         glob=0; trycheck(nextrowelm);
         document.getElementById(nextrowelm).focus();e.preventDefault(); 
}   // end if enter on last row 
  }   // end if enter key
  
// Add some text to the new cells:
//   $("#idtable").append(desc);  
}) 


// $(document).on('keypress','input[id$=05], #idviewinpexpdt',  function(e) {
$(document).on('keypress','input[id$=05]',  function(e) {

  var thisid=this.id
  var len=document.getElementById(thisid).value.length
// if (e.which < 48 || e.which > 57 || len > 4)
 if (!(e.which < 48 || e.which > 57))
    {

      if (len > 4)
    { 

      e.preventDefault();return;  
    }
 var currstr=document.getElementById(thisid).value;
 if ((len ==4) && (currstr.indexOf("/") == -1))
    { var newstr=currstr.substr(0,2)+'/'+currstr.substr(2);
     document.getElementById(thisid).value=newstr;
    }
 else {
  var k=document.getElementById(thisid).selectionStart
  var prefix=currstr.substr(0,k)
  var suffix=currstr.substr(k,len-k)
  var prefix = prefix.replace("/", "");
  var suffix = suffix.replace("/", "");
  var newstr=prefix+(String.fromCharCode(e.which))+suffix
  if ((newstr.length) > 1)                   
     {newstr=newstr.substr(0,2)+'/'+newstr.substr(2)}
   document.getElementById(thisid).value=newstr;
 }
  
if (newstr.length == 5 ) {
  checkdate(thisid)

  }
     
   e.preventDefault();return;
 }  
  if (e.which !== 8 &&
        e.which !== 46 && e.which !== 37 && e.which !== 39  && e.which !== 0
    ) {

        e.preventDefault();return;
    }
})

function checkdate(thisid) {
var d = new Date();
  var curryr = (d.getFullYear() % 100);
  var temp=document.getElementById(thisid).value
  var thiserrid=thisid+'err'
  if ( (parseInt(temp.slice(-2)) < curryr) || (parseInt(temp.substr(0,2)) == 0) || (parseInt(temp.substr(0,2)) > 12) ) {
     document.getElementById(thiserrid).innerHTML="<b>Invalid Month/Year</b>" } 
  else {document.getElementById(thiserrid).innerHTML=""}
}
  

 $(document).on('blur','input[id^=idinp],[id^=idhdr]',  function(){
       var thisid=this.id
       var thisiderr=thisid+'err' 
       if(thisid == "idhdrsup") {   // its a supplier dropdown      
          if  ($('#idhdrsup').val() == "Z") {
           document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
                return }
          else {document.getElementById(thisiderr).innerHTML = "";return}
       } 
  
       if (document.getElementById(thisid).readOnly) {return}   // if its a blur on a readonly then return
      
 //1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty 11-clos stock 12-unitprice 13-Discounted/price 13-gross  14-tax% 15-taxamt  16-net      
  // check for non mandatory fields which are numeric. they will be 0 if no entry. but they cannot be negative
           var last2 = thisid.slice(-2);  // net price can be 0. its not mandatory 
          if (this.type == "number") { 
              var getrowno=thisid.substr(6,2)
        //      var tempexp= 'input[id^=idinp-'+getrowno+']'
              var tempexp=':input[type="number"][id^=idinp-'+getrowno+']'
             $(tempexp).each(function(i, selected){
               if(document.getElementById(this.id).value =="") 
                 { document.getElementById(this.id).value =0;}
              })
            if (last2 == "09" ) {  // tax and freepacks  and discprice are non mandatory numeric fields which can be therefore 0
              if((document.getElementById(thisid).value =="") || 
                 (document.getElementById(thisid).value<0) )
                 // if null then set field to 0 since its not mandatory
                { document.getElementById(thisid).value =0;document.getElementById(thisiderr).innerHTML = "";}
                               
             }   // end for all numeric non mandatory fields
 // till here check for non mandatory     
            else {   // all mandatory fields must be > than 0
               document.getElementById(thisiderr).innerHTML = "";  // 01/28
               if((document.getElementById(thisid).value =="") || (!(document.getElementById(thisid).value>0)) ) {   // all others number types mandatoyry must be > 0       
                   document.getElementById(thisid).value =0;
                   document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid";
                  }
                  
               }           
        
       var last2 = thisid.slice(-2);  

 // recalc if blur on 6-no/pk 7-packs 10-unitprice  12-tax%  14-disc%  
         //1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty 11-clsstock 12-unitprice 13-Discounted/price 14-gross  15-tax% 16-taxamt  17-net 
       
            if (last2 == "07" || last2 == "08"|| last2 == "09" || last2 == "12" || last2 == "13"|| last2 == "15"    )  {   // if its blur on 6 or 7 then recalculate 8 if both are not null
          var getid06=thisid.slice(0, -2)+'06'    
          var getid07=thisid.slice(0, -2)+'07'          
           var getid08=thisid.slice(0, -2)+'08'    
           var getid09=thisid.slice(0, -2)+'09'    
            var getid10=thisid.slice(0, -2)+'10'    
           
           var getid11=thisid.slice(0, -2)+'11'    
           var getid12=thisid.slice(0, -2)+'12'    
            var getid13=thisid.slice(0, -2)+'13'    
            var getid14=thisid.slice(0, -2)+'14'    
             var getid15=thisid.slice(0, -2)+'15'   
             var getid16=thisid.slice(0, -2)+'16'   
             var getid17=thisid.slice(0, -2)+'17' 

  //1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty 11-clsstock 12-unitprice 13-Discounted/price 14-gross  15-tax% 16-taxamt  17-net      
        document.getElementById(getid10).value= (document.getElementById(getid07).value) *
      (   ((document.getElementById(getid08).value)*10 + (document.getElementById(getid09).value)*10)/10        )   // qty calc
        document.getElementById(getid11).value= 
        (((document.getElementById(getid10).value)*10) + ((document.getElementById(getid06).value)*10))/10          // clos stock
         
         var temp89=((((document.getElementById(getid08).value)*10)+(document.getElementById(getid09).value)*10)/10) // to include free pack coloumn
        //    document.getElementById(getid12).value =  (document.getElementById(getid13).value / temp89).toFixed(2)        // discounted price
            var  oldgross= document.getElementById(getid14).value   // store old gross since we are going to change it next line with new
            document.getElementById(getid14).value= ((document.getElementById(getid08).value) * (document.getElementById(getid12).value)).toFixed(2)   // no of packs * non disc price= gross
            document.getElementById(getid13).value =  (((document.getElementById(getid14).value)*10) / (temp89*10)).toFixed(2)        // discounted price
          var newgross= document.getElementById(getid14).value
         tgross=(((tgross*10) - (oldgross*10) + (newgross*10))/10).toFixed(2)   // tgross equals tgross-old+new
        
           document.getElementById("idtgross").value= String(tgross)
     var oldtax= document.getElementById(getid16).value      
     document.getElementById(getid16).value= ((((document.getElementById(getid15).value)/100)
                                             * (document.getElementById(getid14).value))).toFixed(2)   // tax amt        
     var newtax= document.getElementById(getid16).value        
       ttax=(((ttax*10) - (oldtax*10) + (newtax*10))/10).toFixed(2)      
           document.getElementById("idttax").value=ttax                       
           var oldnet=document.getElementById(getid17).value       
           document.getElementById(getid17).value=(((document.getElementById(getid14).value*10)  +  (document.getElementById(getid16).value)*10)/10).toFixed(2)                       // calculate net amt vikas  
           var newnet=document.getElementById(getid17).value 
           tnet=(((tnet*10) - (oldnet*10) + (newnet*10))/10).toFixed(2) 
            tnetdisplay=(Math.round(tnet)).toFixed(2); 
            document.getElementById("idtnet").value= tnetdisplay
           
            var getid17err=getid17+'err'
           if(!(newnet>0)) {    // if value not > 0 then flag error  
            
            document.getElementById(getid17err).innerHTML = "&nbsp;&nbsp;Invalid  "       
             }
            else {  document.getElementById(getid17err).innerHTML = "" } 
       }  // end if for recalculate 
      var s=document.getElementById(thisid).value      
      s = s.replace(/^0+/, ''); 
      document.getElementById(thisid).value=s       
   }  // end if number    
  if (this.type == "text") { 
     document.getElementById(thisiderr).innerHTML = ""
   if(last2 == "04" || last2 == "05")  { // check if text type
       if(last2 == "04") {
         if(document.getElementById(thisid).value == "") {    // if null 
            document.getElementById(thisid).value == " "; document.getElementById(thisiderr).innerHTML = ""}
        }
       else { 
          var re = new RegExp("^[0-9][0-9]\/[0-9][0-9]$");
             if (!re.test(document.getElementById(thisid).value)) {
              document.getElementById(thisiderr).innerHTML = "Invalid Date"}
              else {checkdate(thisid)}
            }
   }
  }  // end if text
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
  var allgood=true;
    if (!checktblinputs()) {allgood=false;}
    if (!checkheaders()) {allgood=false;}
      if (!allgood) {alert("invalid input");$('#idpatbtnconf').prop("disabled",false);return;}
//     tgross=tgross.toFixed(2)
     document.getElementById("idtgross").value=tgross
  var rowcoldata=[];
  var vlastdatepur=[]; var vlastsuppur=[]; var vlastpricepur=[];  var vmindatepur=[]; var vminsuppur=[]; var vminpricepur=[];
  var vmaxdatepur=[]; var vmaxsuppur=[];var vmaxpricepur=[]; 
  var rowlength = document.getElementById("idtable").rows.length;
//
   var vsupplierinfo=$('#idhdrsup option:selected').val()
   for(var i = 1; i < (rowlength); i++) {     // set this as a 2 dim array with 1st col of each row equal to 0 
       var rowindx=i-1
       rowcoldata[rowindx]=[]
       vlastsuppur[rowindx]=vsupplierinfo     // last supplier info
       var tempdt=document.getElementById("idpurdtinp").value;
       var dtyyyymmdd=tempdt.substr(6,4)+tempdt.substr(3,2)+tempdt.substr(0,2)
     vlastdatepur[rowindx]=  dtyyyymmdd;    // change to yyyy/mm/dd
       
      var temp=i.toString();
      if (i < 10) {temp='0'+temp; var tempid= 'idrow'+temp}
      else {var tempid='idrow'+temp};
      var tempexp=tempid+' input[id^=idinp-]'
      $('#'+tempexp).each(function(i, selected){
       var thisid=this.id

        var colindx = parseInt(thisid.substr(8,2)) - 1
        if (thisid.slice(-2) == "05") {
         var temp=document.getElementById(thisid).value;
        rowcoldata[rowindx][colindx]=temp.substr(3,2) + temp.substr(0,2)  
        }
        else {
       rowcoldata[rowindx][colindx]=document.getElementById(thisid).value;}
    
      if (thisid.slice(-2) == "13") {vlastpricepur[rowindx]=document.getElementById(thisid).value;}  // last price
      })

      var thisid='idsel-'+temp+'01'
     
 
       var vdruginfo=$("#"+thisid+' option:selected').val()
       
       var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
//
      var inpdrugname=drugparts[1].substr(4)
      var drugindx= checkposinarray(drugname, inpdrugname) 
 //      var colindx = parseInt(thisid.substr(8,2)) - 1 
        var colindx = 0
       rowcoldata[rowindx][colindx]=vdruginfo 
        opstk[drugindx]=rowcoldata[rowindx][10];
 //      var drugindx=(document.getElementById(thisid).selectedIndex)      // this is the index of the drug in the drug array passed into this program           
// set min and max values below       
     
     var tempprice=parseInt(vlastpricepur[rowindx])
    lastpriceperpk[drugindx]= tempprice; lastsuppur[drugindx]=vlastsuppur[rowindx];lastdatepur[drugindx]=vlastdatepur[rowindx]; 
    if ((minpricepur[drugindx] == 0) || (minpricepur[drugindx] > tempprice)) {        
      vminpricepur[rowindx]= tempprice; vminsuppur[rowindx]=vlastsuppur[rowindx];vmindatepur[rowindx]=vlastdatepur[rowindx];
      minpricepur[drugindx]= tempprice; minsuppur[drugindx]=vlastsuppur[rowindx];mindatepur[drugindx]=vlastdatepur[rowindx];}
     else {vminpricepur[rowindx]= minpricepur[drugindx]; vminsuppur[rowindx]=minsuppur[drugindx];vmindatepur[rowindx]=mindatepur[drugindx];}
     if ((maxpricepur[drugindx] == 0) || (maxpricepur[drugindx] < tempprice)) {        
      vmaxpricepur[rowindx]= tempprice; vmaxsuppur[rowindx]=vlastsuppur[rowindx];vmaxdatepur[rowindx]=vlastdatepur[rowindx];
      maxpricepur[drugindx]= tempprice; maxsuppur[drugindx]=vlastsuppur[rowindx];maxdatepur[drugindx]=vlastdatepur[rowindx];}
      else {vmaxpricepur[rowindx]= maxpricepur[drugindx]; vmaxsuppur[rowindx]=maxsuppur[drugindx];vmaxdatepur[rowindx]=maxdatepur[drugindx];}
     
//       }
//    }) 
        
    }  // end for
//  return
 
    
     var vpurchdt=dtyyyymmdd
     var vinvno=    document.getElementById("idhdrinvno").value;
     var vauth=document.getElementById("idauth").value
  
    $.post("ph_purchadd.php",
    { prowcoldata: rowcoldata, ppurchdt:vpurchdt,pinvno:vinvno,psupplierinfo:vsupplierinfo, plastdatepur:vlastdatepur,
      plastsuppur:vlastsuppur, plastpriceperpk:vlastpricepur,pmindatepur:vmindatepur,
      pminsuppur:vminsuppur, pminpricepur:vminpricepur, pmaxdatepur:vmaxdatepur, pauth:vauth,
      pmaxsuppur:vmaxsuppur, pmaxpricepur:vmaxpricepur},
    function(resultp, statusp){
    
    if (statusp) {
    
    var  resultdata = JSON.parse(resultp)
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;}  
     
        $("#idpatconfrow").addClass('hidden') 
        $('#idpatmsgrow').removeClass('hidden');$("#idpatmsg").removeClass('hidden')

        document.getElementById("idpatmsg").innerHTML="Data Processed Successfully";
			 alert(document.getElementById("idpatmsg").innerHTML)

            document.getElementById("idpatmsg").innerHTML="";
			 $("#idpatmsgrow").addClass('hidden');$("#idpatmsg").addClass('hidden');
             $("#idpatconfrow").removeClass('hidden')
             $('#idtable tr').slice(1).remove();
              lastrow=1
              addfirstrow()
            initallfields()
//            populatedrugs()
						$.post("ph_getdrugdata.php", 
        function(result, status){ 
      
        if (status) {
          
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       drugname=fields.drugname; drugid=fields.drugid; drugstrength=fields.drugstrength; drugtype=fields.drugtype 
       suppliername=fields.suppliername; supplierid=fields.supplierid; opstk=fields.stock;nondiscprice=fields.nondiscprice;
       lastdatepur=fields.lastdatepur;lastsuppur=fields.lastsuppur; lastpriceperpk=fields.lastpriceperpk;
       mindatepur=fields.mindatepur;minsuppur=fields.minsuppur;minpricepur=fields.minpricepur;
       maxdatepur=fields.maxdatepur;maxsuppur=fields.maxsuppur;maxpricepur=fields.maxpricepur;   
//
				$('#idpatbtnconf').prop("disabled",false);
//			
   }  // end good status
      
 })  // end post    
				


    
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
         alert(msg)
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }
      
      
     
   })   //  end post      
	  
})  

$("input:radio[name=optradio]").click(function() {

   if (this.id == "idradioview") {
     $("#identry").addClass("hidden");
         tablereport.clear().draw();
         $("#identry").addClass("hidden");        
         $("#idview").removeClass("hidden")
         document.getElementById("idtextviewdrugerr").innerHTML= ""
         document.getElementById("idtextviewdrug").value= ""
         $('#idviewdrug').hide()
   } 
  
  if (this.id == "idradioentry") {
     $("#idview").addClass("hidden");$("#identry").removeClass("hidden");
      
   }   
  
})

$(document).on('click','#idpurbtnsrch',  function(){
     $('#idpurbtnsrch').prop("disabled",true);
   if  (document.getElementById("idtextviewdrugerr").innerHTML != "") {return}
   if  (document.getElementById("idtextviewdrug").value == "") 
       {var vdrug="Z";document.getElementById("idtextviewdrugerr").innerHTML = ""}
   else  {var vdrug=$('#idviewdrug').val();} 
   var vsup=$('#idviewsup').val();  
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();var vexpdt=$('#idviewinpexpdt').val();
     var sel=$('#idviewexp').val() 
     if (sel !="Z") {
      var today = new Date(); var yyyy = today.getFullYear();    
      var mm = today.getMonth()+1; //January is 0!
       
       var yy = yyyy-2000
       var yy=parseInt(yy);
       mm=parseInt(mm+parseInt(sel))
       if (mm > 12) {yy=yy+1; mm=mm-12}
       if (mm < 10) {var strmm= '0'+mm}
          else {var strmm=mm};
       if (yy < 10) {var stryy= '0'+mm}
          else {var stryy=yy};
       vexpdt=strmm+'/'+stryy
     }
      
   
/*
var firstElement = $('tbody > tr').first();

    table.rows(firstElement.nextAll('tr')).remove().draw();
*/
     tablereport.clear();
     
//   $('#idtableview tr').slice(1).remove(); 
    getpurchasedata(vsup,vdrug,vstartdt,venddt,vexpdt)
  
})

})


</script>
</head>
<body>
 <?php

//if(!isset($_SERVER['HTTP_REFERER'])) {
//     echo "access denied "; exit();
//   }
	
?>
  
  <div class="container-fluid">    
<h1> </h1>
</div>
<div class="container-fluid">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

  <div  class="container-fluid">
 
   <div class="row form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioentry" checked name="optradio"><strong>PURCHASE ENTRY</strong></label></div>
          
          
          <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioview" name="optradio"><strong>PURCHASE VIEW</strong></label></div>
     
     <div class="col-sm-6">
      <a id="rtmn" href="auropharmamenu.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a></div>
     </div>
     </div>

   <div id="identry">
  <div id="idcontainer" class="container-fluid">
   
 <form class="form-horizontal" id="fidpur" name="fnmpur" action="" method="post" role="form">
               
    <div class="control-group">&nbsp;</div>
         
   <div class="row form-group">
     <div id="idhdrallsup" class="col-sm-2"> 
     <label>SUPPLIER NAME:</label>
      <select id="idhdrsup"  class="form-control">
        <option value="Z">Select Supplier</option>    
     </select> <span class="centerstrong" id="idhdrsuperr"></span>
    </div> 
         
     <div id="identerpurdt" class="col-sm-3">
         <label>PURCHASE DATE</label>
       
         <div class="input-group date" id="idpurdt" >
           <input onkeydown="return false" id="idpurdtinp" type="text" maxlength="10" class="form-control" name ="nmpurdt">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>      
         </div> 
      </div>
     
       <div class= "col-sm-3">
        <label>INVOICE NO:</label>
           <input type ="text"  class="form-control" id="idhdrinvno" name ="nminvno" value="" >
              <span class="centerstrong" id="idhdrinvnoerr"></span>
         </div>
				  <div id="iddrughide" class="col-sm-2">   
       <select id="idalldrugs"  class="form-control"> </select>      
       </div> 
        </div>
      
     <!--fieldset class="scheduler-border">         
       <legend class="scheduler-border"></legend-->
   <!--div class = "table-responsive"-->
    <!--div class="row form-group">
   <div class= "col-sm-12"-->
    <div>
      <table id="idtable" class=" table table-bordered table-responsive table-condensed">
    </table>
       </div>
     
     
   <!--/div> 
    </div-->   
    
     <!--/fieldset-->
   
  <div class="row form-group">   
      <div class= "col-sm-offset-10 col-sm-2 ">
        <label class=" control-label" >Total Gross Price:</label>
           <input type ="text"  class="form-control" id="idtgross" name ="nminvno" value="" readonly>
         </div>
  </div> 
  <div class="row">    
      <div class= "col-sm-offset-10 col-sm-2">
        <label class=" control-label" >Total Tax:</label>
           <input type ="text" step=0.1 min="10" max="200" class="form-control" id="idttax" name ="nmtax" value="" readonly>
         </div>
  </div> 
 
  <div class="row">    
    <div class= "col-sm-offset-10 col-sm-2">
   <label class=" control-label" >Total Net Price:</label>
           <input type ="text"  class="form-control" id="idtnet" name ="nmnp" value="" readonly>
         </div>
    </div>
   <div class="row form-group">   
      <div class= "col-sm-offset-10 col-sm-2 ">
        <label class=" control-label" >Issued authority:</label>
           <input type ="text"  class="form-control" id="idauth" name ="nmauth" value="" ><span class="centerstrong" id="idautherr"></span>
         </div>
  </div>           

<div class="control-group">&nbsp;&nbsp;</div><div class="control-group">&nbsp;&nbsp;</div> <div class="control-group">&nbsp;&nbsp;</div>  
<div class="control-group">&nbsp;&nbsp;</div><div class="control-group">&nbsp;&nbsp;</div> <div class="control-group">&nbsp;&nbsp;</div> 
   
<div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button" onclick="location.href='ashrammed.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">
        
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
   </form>
    </div>
   </div>  
    
    <div id="idview">
  <div id="idcontainer" class="container-fluid">
    <div class="row form-group">
     <div id="idviewallsup" class="col-sm-2"> 
     <label>SUPPLIER NAME:</label>
      <select id="idviewsup"  class="form-control fldview">
        <option value="Z">Select Supplier</option>    
     </select> <span class="centerstrong" id="idviewsuperr"></span>
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
         <label class="control-label">Exp Date</label>
        <input id="idviewinpexpdt" type="text" maxlength="5" class="cshort fldview form-control" placeholder="mm/yy"></input>
     <span class="centerstrong" id="idviewinpexpdterr"></span>
      </div> 
        
        <div class="col-sm-1">
         <label class="control-label">Expiring In</label>
     <Select id="idviewexp"   class="form-control fldview">  <!-- placeholder="mm/yy">-->
        <option value="Z">Select</option> 
        <option value="1">1 mth</option>
        <option value="2">2 mths</option>
        <option value="3">3 mths</option>
        <option value="4">4 mths</option>
        <option value="5">5 mths</option>
         <option value="6">6 mths</option>
       
     <span class="centerstrong" id="idviewexperr"></span>
          </Select>
        </div>
       <div class="col-sm-1"> 
         <label class="control-label"></label>
       <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Search">                                                                                 
      </div>  
           
   </div>
         
   <div class="control-group">&nbsp;</div>
         
      <div>
        <table id="idtablereport" class="cell-border table table-bordered table-responsive table-condensed">
    </table>
         
      </div>
         
     </div>
   </div>  
     
</body>
     