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
table {
    table-layout: auto;
}  
.hlt {background-color: lightblue;}  
  .font16 {font-size:16px}
input.cvlong {
  width: 150px;
}
input.cvvlong {
  width: 200px;
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
</style>

 
 


<script type="text/javascript"> 
 // entry purpose
  var drugname=[]; var drugid=[];var drugstrength=[]; var drugtype=[]; var lastpricepur=[]; var hospitalname=[]; var hospitalid=[];var opdstk=[];
   var ttax=0; var tdisc=0; var tnet=0; var lastrow=0; var vremarks;var crstk
  //view purpose
    var dtofadj=[];  var vdrugname=[]; var vstrength=[]; var vdrugtype=[];var vhospitalname=[];
   var vqtyadj=[]; var vamount=[]; var totalamt=[]; var issueauth=[];var vrate=[]; var vstkafteradj=[];var vopdstk=[];
       

  
function checkheaders()  {       //   check for inputs for all non table fields. they start with idhdr
   var allgood=true
   $('[id^=idhdr]').each(function(i, selected){ 
     var thisid=this.id    
      if (this.type == "select-one") {
        var thisiderr=thisid+'err'
        if (document.getElementById(thisid).selectedIndex == "0")
        
          { 
                  document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid"
            allgood=false }
         else {document.getElementById(thisiderr).innerHTML = ""}
      }
     if (!document.getElementById(thisid).readOnly) {   // check only enterable fields
      var thisiderr=thisid+'err'
     
      if (this.type == "number") {                      // check if element is number type
     
        if(!(document.getElementById(thisid).value < 0)) {    // if value not > 0 then flad error
         
            
            document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid"
            
            allgood=false
             }
         else {document.getElementById(thisiderr).innerHTML = ""}

      }  // end if number 
       if (this.type == "text") {                      // check if txt type
     
        if(document.getElementById(thisid).value == "") {    // if value not > 0 then flad error
         
            document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid"
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

   var allgood=true
  // 1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net 
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
             if (checkposinarray(drugname, textinp) == -1)
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
    
  $('input[id^=idinp]').each(function(i, selected){       // get all input elements starting with idinp
   // var allgood=true 
    var thisid=this.id
      var thisiderr=thisid+'err'   
      var last2 = thisid.slice(-2); 
     
    if (!document.getElementById(thisid).readOnly) {   // check only enterable fields
      if (this.type == "number") {                      // check if element is number type
        // mandatory fields and other than 04 and 09 and 14
         if(!(document.getElementById(thisid).value > 0)) {    // if value not > 0 then flag error            
          
           document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"            
            allgood=false}
         else {document.getElementById(thisiderr).innerHTML = ""}
         }  // end check of mandatory fields
        
        // end if number 
       // check if text type
      
   
    }   // end if not readonly 
    
    

   
})
  if (!allgood) {return false}         // function will return false even if one field is in error
        else {return true;}
  }
    
   
                             
function addheader()  {  
var desc='<thead id="idthead"><tr><th>Delete</th><th>Drug name</th><th>Strength</th><th>Type</th>'+
'<th>Rate/Pk&nbsp;&nbsp;<a class="info" href="#" data-toggle="tooltip" title="" data-placement="top">'+                                                             
   '<span></span></a></th><th>Adj. Quantity</th><th>Amount</th><th>Curr.Stock</th><th>Stk After Adj</th></tr></thead>';
/*<th>Qty/pack</th>'+
   '<th>Packs</th><th>Free Packs</th>+
    '<th>Unit Price/Pk</th><th>Disc.Unit Pr/Pk</th><th>Gross Price</th>'+
    
    
    
          
     '<th>Tax%</th><th>Tax</th><th>Net Price</th></tr></thead>';*/
      $("#idtable").append(desc);  // add header to the table 
  

} 
function addfirstrow()  {   
// 1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net 
  //   //1 -drug 2-strength 3-type 4-expdt 5-rate 6-qty 7-amount 8-stk   
var temp0='<button type="button" class="btn btn-default btn-sm delete"  style="color:#FF0000;"><span class="glyphicon glyphicon-remove"></span></button>'
  var temp1a='<INPUT type ="text" id="idtextsel-0101" placeholder="Type Drug Name" class="cvvlong  form-control">';
  var temp1b='<span class="centerstrong text-center" id="idtextsel-0101err"></span>'            
  var temp1=temp1a+temp1b 
  var temp2='<INPUT type ="text" id="idinp-0102" class="clname flditem form-control" readonly><span class="centerstrong" id="idinp-0102err"></span>'
  var temp3='<INPUT type ="text" id="idinp-0103" class="clname flditem form-control" readonly><span class="centerstrong" id="idinp-0103err"></span>' 

  var temp4='<INPUT type ="number" id="idinp-0104" maxlength="5" class="clname flditem form-control"readonly><span class="centerstrong" id="idinp-0104err"></span>'               // can it be made date field
  var temp5='<INPUT type ="number" id="idinp-0105" class="clname flditem form-control"readonly ><span class="centerstrong" id="idinp-0105err"></span>'       // stk made readonly
 var temp6='<INPUT type ="number" id="idinp-0106" class="clname flditem form-control" readonly><span class="centerstrong" id="idinp-0106err"></span>'
  var temp7='<INPUT type ="number" id="idinp-0107"  class="clname flditem form-control" readonly><span class="centerstrong" id="idinp-0107err"></span>'
var temp8='<INPUT type ="number" id="idinp-0108"  class="clname flditem form-control" ><span class="centerstrong" id="idinp-0108err"></span>'
  var desc='<tr id="idrow01" class="tblrow">'+'<td id="idcol0100">' +temp0+ '</td>'+ '<td id="idcol0101">' +
           temp1+'</td>'+ '<td id="idcol0102">' +temp2+ '</td>'+ '<td  id="idcol0103">'+temp3+'</td>'+
       '</td>' +'<td  id="idcol0104">'
          +temp4+'</td>'+'<td  id="idcol0105">' +temp5+ '</td>'+ '<td  id="idcol0106">' +temp6 + '</td>'+'<td  id="idcol0107">' +temp7+ '</td>'+'<td  id="idcol0108">' +temp8 + '</td>'+'</tr>'
  

 
   $("#idtable").append(desc);  
} 

function fillhospitaldropdown()  {  

   
  
          var dropdown = document.getElementById("idhdrsup")  
    var dropdown2 = document.getElementById("idviewsup")    
          for(var i = 0; i < (hospitalid.length); i++) {
            var  opt =hospitalname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = hospitalid[i].toString()+'--'+hospitalname[i]; 
                                                                     // format is supplierid and name
           dropdown.appendChild(el);
       /*   var el2 = document.createElement("option");
            el2.textContent=el.textContent
            el2.value=el.value
           dropdown2.appendChild(el2); */
          }      
   
//  var table= $('#idtable').DataTable()        
}   
function populatedrugs()  {

  // get all drugs
      $.post("ph_getissuedrugdata.php", 
        function(result, status){ 
    
        if (status) {
       
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       drugname=fields.drugname; drugid=fields.drugid; drugstrength=fields.drugstrength;  drugtype=fields.drugtype; 
          lastpricepur=fields.lastpricepur; prstk=fields.stock;
          opdstk=fields.opdstk; hospitalname=fields.hospitalname;hospitalid=fields.hospitalid;
    fillhospitaldropdown()
   }  // end good status
      
 })  // end post    
}
  
  
  

function initallfields() {       


 //   $('#idpatconfrow').addClass('hidden') // show confirm
     $('#idpatmsgrow').addClass('hidden')
     
    setTimeout(function(){       // run this after 2 seconds so that all the error fields have been available to the Jquery
       $('[id$=err]').each(function(i, selected){       // initialize error fields
       var thisid=this.id 
       document.getElementById(this.id).innerHTML = ""
        })      
 }, 1500);
//  $('#idhdrinvno').val("") 
  
 
    tgross=0;ttax=0,tnet=0;
  //document.getElementById("idtgross").value=0;
  
 
  var temp='<select size="5" class="cvlong" id="idsel-0101" ></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();  
  document.getElementById("idauth").value="";document.getElementById("idautherr").value="";
  
} 
  
$(document).ready(function(){ 
    lastrow=0     // globals
   addheader() 
   addfirstrow()
   
   populatedrugs()
  
// $("#idview").addClass("hidden");
   var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
 
         $('#idissdtinp,#idviewinpstartdt,#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
    var datestr=dd+'/'+mm+'/'+yyyy;        
   $('#idissdtinp').datepicker('setDate', datestr)  

   $('[data-toggle="tooltip"]').tooltip();
   initallfields() 
    lastrow++
     
$(document).on( "change", '#idhdrsup',function(e) {
  
 if  ($('#idhdrsup').val() == "Z") {
   
           document.getElementById("idhdrsuperr").innerHTML = "&nbsp;&nbsp;Invalid"
                return }
          else {document.getElementById("idhdrsuperr").innerHTML = "";return}
})  

$('table').on('focus', '.flditem', function(e){    // this catches focus on all elements except input for drug dropdown and the dropdown
  var thisid=this.id;                              // so that we can check if the user has selected any item from drug dropdown

  if (thisid.indexOf("idtext") != -1) {return}   // if you are on drug input then return because nothing to check
  var thisrowid=$(this).parents('tr').attr('id')  // get id of dropdown in that row
      var thisselid="idsel-"+ thisrowid.slice(-2)+"01"
       var thistextid="idtextsel-"+ thisrowid.slice(-2)+"01" 
       var thistextiderr=thistextid+'err' 
    if (  $("#"+thisselid).is(":visible"))   // if its open
      {      
       
        var textinp = (document.getElementById(thistextid).value).trim()      
         var pos=checkposinarray(drugname, textinp)   
         
         
    if (checkposinarray(drugname, textinp) == -1) {
       document.getElementById(thistextiderr).innerHTML = "Invalid Drug";  }
     else {
       document.getElementById(thisselid).selectedIndex = pos;
       document.getElementById(thistextiderr).innerHTML = "";
       var idopdstk="idinp-"+ thisrowid.slice(-2)+"07"
       var drugindx = pos; document.getElementById(idopdstk).value=opdstk[drugindx];      
     }   
     $("#"+thisselid).hide()
      }
 }) 


$(document).on( "click keydown", '[id^=idsel-]',function(e) {

  var thisid=this.id
	$('.hlt').removeClass('hlt')
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
   var idprice='idinp-'+rowid+'04'    // price is 
   var idpriceerr='idinp-'+rowid+'04'+'err'
   var idqty='idinp-'+rowid+'05'    // qty is 
   var idqtyerr='idinp-'+rowid+'05'+'err'
   var idamt='idinp-'+rowid+'06'    // amount is 
   var idamterr='idinp-'+rowid+'06'+'err'
   
    var idopdstk='idinp-'+rowid+'07'             //stock
     var idopdstkerr='idinp-'+rowid+'07'+'err' 
      var idclstk='idinp-'+rowid+'08'             //stock
     var idclstkerr='idinp-'+rowid+'08'+'err' 
    
       
    var thistextiderr=thistextid+'err'
    document.getElementById(thistextiderr).innerHTML =""
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
 
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)

      var inpdrugname=drugparts[1].substr(4)
   
      var drugindx= checkposinarray(drugname, inpdrugname) 
 
     document.getElementById(idprice).value=lastpricepur[drugindx];
     document.getElementById(idpriceerr).innerHTML="" 
  
      document.getElementById(idqty).value=""
      document.getElementById(idamt).value=""
     document.getElementById(idopdstk).value=opdstk[drugindx];
      crstk=opdstk[drugindx];
     document.getElementById(idopdstkerr).innerHTML="" 
     document.getElementById(idclstk).value=""
}) 

$(document).on('keydown','input[id^=idtextsel]',  function(e) {  // if user hits downkey then open dropdown
 if (e.type == 'keydown') {
	 	if((e.which != 40) && (e.which != 13) ){return}    
 }

  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6) 
	$('#' + thisselid).show();document.getElementById(thisselid).selectedIndex=0;
	//  vikas june 6  if enter key pressed and if dropdown is open then take the first entry in the dropdown
    if ( (e.which == 13) && ($("#"+thisselid).is(":visible")) ) 
			 {
				 document.getElementById(thisid).value=$('#'+thisselid+' option:eq(0)').text(); 
				 $('#' + thisselid).hide();
				 return;				 		 
			 }
	// till here june 6
	document.getElementById(thisselid).focus();
	
	$('#'+thisselid+' option:eq(0)').addClass('hlt')
// $('#'+thisselid+' option:selected').addClass('hlt');
}) 	

$(document).on('keyup click','input[id^=idtextsel]',  function(e) {
 
 var keyCode = e.keyCode || e.which; 
 if(e.which == 13) {return}
  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    // idsel-0101err or whichever row it is
  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty();
  var txt=document.getElementById(thisid).value;
  
  txt=txt.trim(); //remove spaces before and after text
  var checkinput = /^[0-9a-zA-Z\s.-]+$/; 
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
         drugsfound=true; foundone=true;
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
         var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]+'--lastpricepur'+lastpricepur[i]+'--opdstk'+opdstk[i]; 
                                                                  // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }
      else { 
			 if (foundone) {break;}		

      }        
      }  //end for

  if (!drugsfound) {$('#'+thisselid).hide();document.getElementById(thisiderr).innerHTML="Invalid drug";return; }
  $('#'+thisselid+' option:eq(0)').addClass('hlt')
})
    
$('table').on('click','.delete',function(){
 var rowid=($(this).parents('tr').attr('id')).slice(-2);
    
    /* var grossid='idinp-'+rowid+'06';
  
// reduce tgross ttax and tnet since this row is going to be deleted 
    
// reduce tgross ttax and tnet since this row is going to be deleted 
    tgross=(((tgross*10) - ((document.getElementById(grossid).value)*10))/10).toFixed(2)
   
           document.getElementById("idtgross").value= tgross */
    
    $('.info').attr('data-original-title', "");
$(this).parents('tr').remove();
 if (document.getElementById("idtable").rows.length == 1) {  // 01/28
   addfirstrow()                                           //  01/28
    var temp='<select size="5" class="cvlong" id="idsel-0101" ></select>';
  $( temp).insertAfter("#idtextsel-0101");
  $("#idsel-0101").hide();                                        //  01/28
   
 } 
})

 $('table').on('keydown', '.flditem', function(e){     // row is clopied
  
    var keyCode = e.keyCode || e.which; 
   if ((keyCode == 13) && ((this.id).slice(-2) == '01')) {return;}
 if((e.which == 13) || ((keyCode == 9) && ((this.id).slice(-2) == '06'))){  // e.which == 9 means tab entered and .slice(-2) == 16 means tab
 
  var lastrowid=$(".tblrow:last").attr("id")                              // on element netamt. e,which==13 means enter key has been entered  
  var clickedid=$(this).parents('tr').attr("id");                          
  if (clickedid == lastrowid)  { // copy only if hit enter on last row
   
     if (!checktblinputs()) { alert("invalid data"); return}     // check all inputs. This functions flags all errors. if one is in error dont allow add new row
   
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
}   // end if enter on last row 
  }   // end if enter key
  
// Add some text to the new cells:
//   $("#idtable").append(desc);  
}) 
     
  
$(document).on('blur','input[id^=idinp],[id^=idhdr],#idauth',  function(){
 
      var thisid=this.id
       var thisiderr=thisid+'err' 
       if(thisid == "idhdrsup") {   // its a supplier dropdown      
          if  ($('#idhdrsup').val() == "Z") {
           
           document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
                return }
          else {document.getElementById(thisiderr).innerHTML = "";return}
       } 
  
       if (document.getElementById(thisid).readOnly) {return}   // if its a blur on a readonly then return
      
 //1 -drug 2-strength 3-type 4-rate 5-qty 6-amount 7-prstk 8-clstk     
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
                 
                  document.getElementById(getid07).value=0;
                  
               }      
                
                    
        
       var last2 = thisid.slice(-2);    

         //   //1 -drug 2-strength 3-type 4-rate 5-qty 6-amount 7-opstk  8-clstk 
            
       
            if (last2 == "08"  )  {   // if its blur on 5
           var getid04=thisid.slice(0, -2)+'04'      
          var getid05=thisid.slice(0, -2)+'05'    // id is idinp-0306 then we get idinp-03+06. 6 is no
          var getid06=thisid.slice(0, -2)+'06'    // same for 07 col       7 is packs       
          var getid07=thisid.slice(0,-2)+'07'
          var getid08=thisid.slice(0,-2)+'08'
          
           }
            
          if(document.getElementById(getid08).value<"0")
            {
              
             document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid";
              return
            }
            
            
             document.getElementById(getid05).value= (document.getElementById(getid08).value)- (document.getElementById(getid07).value)
              
        //     alert(document.getElementById(getid05).value);
             
               var oldgross = document.getElementById(getid06).value
            
             
         document.getElementById(getid06).value= ((document.getElementById(getid04).value) *(document.getElementById(getid05).value)).toFixed(2)

  // document.getElementById(getid08).value= (((document.getElementById(getid07).value)*10) - ((document.getElementById(getid05).value)*10))/10
         
                
              var newgross= document.getElementById(getid06).value
             
            
              tgross= (((tgross*10) - (oldgross*10) + (newgross*10))/10).toFixed(2) 
            //  document.getElementById("idtgross").value= tgross
              
              
                 if(document.getElementById(getid07).value=="0")
            {
             document.getElementById(thisiderr).innerHTML = "";
              
            }
      
         
          }                            
        if (!(document.getElementById("idauth").value=="")){
    
    document.getElementById("idautherr").innerHTML = "";
    
    }                                                                          
})                                                                                                                                                                
                                                                                       
       


// the rowcoldata [] goes like [0] for drugname......

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
 
  var rowcoldata=[];

  var rowlength = document.getElementById("idtable").rows.length;
//
   var vhospitalinfo = "OPD Stock Adjusment"; 
   for(var i = 1; i < (rowlength); i++) {     // set this as a 2 dim array with 1st col of each row equal to 0 
       var rowindx=i-1
       rowcoldata[rowindx]=[]
    
       var tempdt=document.getElementById("idissdtinp").value;
       var dtyyyymmdd=tempdt.substr(6,4)+tempdt.substr(3,2)+tempdt.substr(0,2)
      var vissuedt=dtyyyymmdd;     // change to yyyy/mm/dd
         patientid=$('#idhdrpt option:selected').val()                          // vikas
      patientname=$('#idhdrpt option:selected').text()                      // vikas 
     var vauth=document.getElementById("idauth").value   
      var temp=i.toString();
      if (i < 10) {temp='0'+temp; var tempid= 'idrow'+temp}
      else {var tempid='idrow'+temp};
      var tempexp=tempid+' input[id^=idinp-]'
      $('#'+tempexp).each(function(i, selected){
        
       var thisid=this.id
   
        var colindx = parseInt(thisid.substr(8,2)) - 1
     
    
      rowcoldata[rowindx][colindx]=document.getElementById(thisid).value;
     
      })
     
    var vremarks= "Stock changed from " + crstk + " to " + rowcoldata[rowindx][7]
      
      var thisid='idsel-'+temp+'01'
       var vdruginfo=$("#"+thisid+' option:selected').val()
       
       
       var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
//
      var inpdrugname=drugparts[1].substr(4)
      var drugindx= checkposinarray(drugname, inpdrugname) 
 //      var colindx = parseInt(thisid.substr(8,2)) - 1 
        var colindx = 0
       rowcoldata[rowindx][colindx]=vdruginfo ; 
      opdstk[drugindx]=rowcoldata[rowindx][7]
        

    }  // end for
  
  var vissuedt=dtyyyymmdd
//  return
   //  var vgross=document.getElementById("idtgross").value
     var vauth=document.getElementById("idauth").value
   //  var vissuedt = document.getElementById("idissdtinp").value
    // var vinvno=    document.getElementById("idhdrinvno").value;
 
 
    $.post("ph_opdadjdb.php",
    {prowcoldata: rowcoldata, pissuedt:vissuedt,phospitalinfo:vhospitalinfo, pauth:vauth, premarks:"" },
    function(result, status){
    
    
    if (status) {
  
    var  resultdata = JSON.parse(result)
   
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg

         alert(msg)
         alert("kindly contact programmmer")
           $(document).off();$('#idpatbtnconf').prop("disabled",false);
               return;}  
     
        $("#idpatconfrow").addClass('hidden') 
        $("#idpatmsgrow").removeClass('hidden')
        $("#idpatmsg").show()
        document.getElementById("idpatmsg").innerHTML="Data Processed Successfully";
			alert(document.getElementById("idpatmsg").innerHTML)
       $("#idpatmsgrow").addClass('hidden')
			$("#idpatmsg").show()
			$('#idpatbtnconf').prop("disabled",false);
//         $("#idpatmsg").fadeOut(3000, function(){
             $("#idpatconfrow").removeClass('hidden')
             $('#idtable tr').slice(1).remove();
              lastrow=1
              addfirstrow()
 
            initallfields()


    
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
        
         alert("kindly contact programmmer")
          $(document).off();
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
   } 
  
  if (this.id == "idradioentry") {
     $("#idview").addClass("hidden");$("#identry").removeClass("hidden");
      
   }   
  
})

$("input:radio[name=optradio]").change(function() {
     
   if (this.id == "idradioopdpharma") {
    
     location.href="ph_opdpharma.php"
     return false;
   }
      if (this.id == "idradioopdstkadj") {
        
     location.href="ph_opdstkadj.php"
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
<div class="container-fluid">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

  <div id="idcontainer" class="container-fluid">
    <form class="form-horizontal" id="fidpur" name="fnmpur" action="" method="post" role="form"></form>
   <div class="row form-group">
     <div class="col-sm-5 text-success"><h4 ><strong>OPD STK ADJUSTMENT ENTRY</strong></h4></div> 
     
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success" value="STK Adj">
         <a id="rtmn" href="ph_opdpharma.php" > <h4 class="pull-right"><strong>Return to Main Menu</strong></h4></a>
     </div>
    </div>   
      
 
   <div class="row form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioopdpharma"  name="optradio"><strong>OPD Pharmacy</strong></label></div>
          
          
      <div class="col-sm-2">
      <label class="col-sm-offset-1 radio-inline text-success font16"><input type="radio" id="idradioopdstkadj" checked name="optradio"><strong>OPD STK ADJUSTMENT</strong></label></div>
     
    
     </div>
     </div>
    
   <div id="idcontainer" class="container-fluid">
   
 <form class="form-horizontal" id="fidpur" name="fnmpur" action="" method="post" role="form">           
   <div class="row form-group">
     <div id="idhdrallsup" class="col-sm-2"> 
     <label>TRANSACTION NAME</label>
       <INPUT type ="text"  class="form-control" readonly id="idhdrsup"  name ="nmauth" value="OPD Stock Adjusment">
      
       
       <span class="centerstrong" id="idhdrsuperr"></span>
    </div> 
       
     <div id="identerpurdt" class="col-sm-2">
         <label>ADJ. DATE</label>
       
         <div class="input-group date" id="idpurdt" >
           <INPUT onkeydown="return false" id="idissdtinp" type="text" class="form-control"  name ="nmpurdt">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>      
         </div> 
      </div>
      </div>
      <div>
      <table id="idtable" class=" table table-bordered table-responsive">
    </table>
       </div>
     
     
   <!--/div> 
    </div-->   
    
     <!--/fieldset-->
   
<!--<div class="row form-group">   
      <div class= "col-sm-offset-10 col-sm-2 ">
        <label class=" control-label" >Remarks:</label>
           <INPUT type ="text" rows="2" class="form-control" id="idtgross" name ="nminvno" value="" readonly></INPUT>
         </div>
  </div> -->
      <div class="row form-group">   
      <div class= "col-sm-offset-10 col-sm-2 ">
        <label class=" control-label" >Issued authority:</label>
           <INPUT type ="text"  class="form-control" id="idauth" name ="nmauth" value="" ><span class="centerstrong" id="idautherr"></span>
         </div>
  </div> 
      
 

<div class="control-group">&nbsp;&nbsp;</div><div class="control-group">&nbsp;&nbsp;</div> <div class="control-group">&nbsp;&nbsp;</div>  
<div class="control-group">&nbsp;&nbsp;</div><div class="control-group">&nbsp;&nbsp;</div> <div class="control-group">&nbsp;&nbsp;</div> 
   
<div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button" onclick="location.href='auropharmamenu.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">
       </div>       
      
       <div class="col-sm-2"> 
          
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                                        
                           
      </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
    
 </div>             
   </form>
   </div>
           
   </div>
         
   <div class="control-group">&nbsp;</div>
         
      <div>
        <table id="idtablereport" class=" table table-bordered table-responsive table-condensed">
    </table>
         
      </div>
         
     
   
</body>
     