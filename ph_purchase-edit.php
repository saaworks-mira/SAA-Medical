<?php
// echo '1';

// Get the content that is in the buffer and put it in your file //
// file_put_contents('yourpage.html', ob_get_contents());
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>

<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

 
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">13/5/2019-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
  
   <!--link rel="stylesheet" href="datepicker/css/datepicker.css"-->
  <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
   <!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">1505-->
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>13/5/2019-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
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
    table-layout: auto;
}
   
  .font16 {font-size:16px}
input.cvlong {
  width: 175px;
}
input.clong {
  width: 120px;
}
input.cshort {
  width: 90px;
}  
  input.cvshort {
  width: 80px;
}  
.cvsel {
  width: 175px;
}   
.chead {
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
@media (max-width: 769px) {  
#idviewbtninv 
  {  position:relative;
    margin-top: 10px;
  }
  #lblinv 
  {  position:relative;
    margin-top:10px;
  }
 #idviewinv
  {  position:relative;
    margin-left: -40%;
  }

 #idviewbtnconf, #idviewbtncan
  {  position:relative;
     margin-top:7px;
    margin-left: -80%;
  }
} 
 /* 
table.dataTable tr.odd { background-color:#84C0E4 ; } 
table.dataTable tr.even { background-color: white; }
*/  

th { text-align: center; }
td { text-align: center; }  
  table.dataTable thead th {
   
    text-align: center;
    background: #80dd00;
  }
</style>


<script type="text/javascript"> 
  var drugname=[]; var drugid=[];var drugstrength=[]; var drugtype=[]; var suppliername=[]; var supplierid=[];var druggn=[];
  var lastdatepur=[]; var lastsuppur=[]; var lastpricepur=[]; var lastpriceperpk=[]; var mindatepur=[]; var minsuppur=[]; var minpricepur=[];
  var maxdatepur=[]; var maxsuppur=[];var maxpricepur=[]; var nondiscprice=[];
  // save the original drug data so that if users select another drug then we have to back out original data 
  var saverow="";var saverowid=""; var savesup;  var svclstk=0; var vremarks=""; var svqty=0; var svdrugid=0;var svdrugname="";
  var svrowcoldata=[];var svinvoiceno; var svpurchasedt; var svtextdrugname; var svsupplierinfo;
  var svlastdatepur=0; var svlastsuppur=""; var svlastpriceperpk=0;  var svmindatepur=0; var svminsuppur=""; var svminpricepur=0;
  var svmaxdatepur=0; var svmaxsuppur="";var svmaxpricepur=0; 
  
  // purchase data below
  var purchasedt=[]; var invoiceno=[]; var vdrugname=[];var vdrugid=[]; var vstrength=[]; var vdrugtype=[]; var pursuppliername=[];var vdruggn=[];
  var batchno=[]; var expdt=[]; var stkinhand=[];var qtyperpack=[];var packs=[];var freepacks=[];var purchaseid=[];
   var totalqty=[]; var unitprice=[]; var discunitprice=[];var grossprice=[]; var taxpercent=[];var tax=[];     
  var netamt=[]; var vtranstype=""; var elm2save=""; var row2save="";  var btn2save="";
   var deleterow=false;  
  var tnet=0 
   var strtoday  // aug 2
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
// 1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net 
   var allgood=true
//
        
     var thisid='idtextdrugname'+(saverowid.slice(-2)) 
     var thisiderr=thisid+'err'
     if (document.getElementById(thisiderr).innerHTML != "")  {allgood=false; }
       else 
       { if (document.getElementById(thisid).value == "") {
           document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"
         
            allgood=false }
         else 
         {
 
         var thisselid='iddrugname'+(saverowid.slice(-2)) 
         if (  $("#"+thisselid).is(":visible"))   // if its open
            {  
            var textinp = (document.getElementById(thisid).value).trim()
            var pos = checkposinarray(drugname, textinp)

            if(pos === -1) {
              document.getElementById(thisiderr).innerHTML = "Invalid Drug"; allgood=false}
            else {document.getElementById(thisselid).selectedIndex = 0;document.getElementById(thisiderr).innerHTML = "";}   
            $("#"+thisselid).hide()          
            } 
     
       }
    }
  
//   
     
 var temp='idsupplier'+(saverowid.slice(-2))     // row no
   var selsup=$('#'+temp).val()
   var thisiderr=temp+'err'
    $('#'+thisiderr).removeClass("hidden")
   if (selsup == "Z")
     {         
       document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid"       
       allgood=false }
         else {document.getElementById(thisiderr).innerHTML = ""}
  
 var temp=saverowid+' input[id^=idedit]'
//  $('input[id^=idedit]').each(function(i, selected){       // get all input elements starting
  $('#'+temp).each(function(i, selected){
   
      var thisid=this.id
      var thisiderr=thisid+'err'  
       $('#'+thisiderr).removeClass("hidden")
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
       if (last2 == "09" || last2 == "15" ) {   //  check non mandatory fields--  batch, free packs,  tax
         if((document.getElementById(thisid).value =="")) 
           { document.getElementById(thisid).value =0;document.getElementById(thisiderr).innerHTML = ""} 
           // aug 2
          else {
           
            if((document.getElementById(thisid).value<0)) {    // if value not > 0 then flag error   
             
            document.getElementById(thisiderr).innerHTML = ""   
              document.getElementById(thisid).value=0
           }
            
          }
         // aug 2
       } // end for   9  14
       else 
         {    // mandatory fields and other than 04 and 09 and 14
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

  var descedit='<thead id="idthead"><tr><th class="chead">Edit</th><th>Challan/Inv</th><th>PurchaseDt</th><th>Supplier</th>'+
     '<th>Drug name</th><th>Generic Name</th><th>Strength</th><th>Type</th>'+
'<th>Batch No</th>'+'<th>Exp Date</th><th>Opn Stock</th><th>Qty/Pack</th>'+
   '<th>Packs</th><th>Free Pks</th><th>Total Qty</th>'+'<th>Cls Stock</th>'+
  '<th>Unit Price/Pk&nbsp;&nbsp;<a class="info" href="#" data-toggle="tooltip" title="" data-placement="top right">'+                                                             
   '<span class="glyphicon glyphicon-question-sign"></span></a></th><th>Disc Unit Pr/Pk</th><th>Gross Price</th>'+          
     '<th>Tax%</th><th>Tax</th><th>Net Price</th></tr></thead>';
  $("#idtableedit").append(descedit);  // add header to the table
   
  
} 

function filldrugdropdown()  {  
   
// now populate the drugs  below        
  
  var dropdown2 = document.getElementById("idviewdrug") 
          var druglen=drugid.length
          for(var i = 0; i < (druglen); i++) {
            var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]+'--genericname'+druggn[i]; 
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown2.appendChild(el);
           
          }  
    
//  var table= $('#idtable').DataTable()        
} 
function fillsupplierdropdown()  {  
 
    var dropdown2 = document.getElementById("idviewsup")   
		      var suplen=supplierid.length
          for(var i = 0; i < (suplen); i++) {
            var  opt = suppliername[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = supplierid[i].toString()+'--'+suppliername[i]; 
                                                                     // format is supplierid and name
           dropdown2.appendChild(el);
         
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
       drugname=fields.drugname; drugid=fields.drugid; drugstrength=fields.drugstrength; drugtype=fields.drugtype;druggn=fields.druggn; 
       suppliername=fields.suppliername; supplierid=fields.supplierid; opstk=fields.stock;nondiscprice=fields.nondiscprice;
       lastdatepur=fields.lastdatepur;lastsuppur=fields.lastsuppur; lastpricepur=fields.lastpricepur;lastpriceperpk=fields.lastpriceperpk;
       mindatepur=fields.mindatepur;minsuppur=fields.minsuppur;minpricepur=fields.minpricepur;
       maxdatepur=fields.maxdatepur;maxsuppur=fields.maxsuppur;maxpricepur=fields.maxpricepur;  

  if (!deleterow )        
      fillsupplierdropdown() 
   }  // end good status
      
 })  // end post    
}   
function getpurchasedata(vsup,vdrug,vstartdt,vendt,vexpdt)  {
 var vinvno= document.getElementById("idinpinv").value // feb 3, 2018

  $.post("ph_getpurchdata.php", {
		        pinvno:vinvno, // feb 3, 2018
            psup:vsup,pdrug:vdrug,pstartdt:vstartdt,penddt:vendt,pexpdt:vexpdt},
        function(result, status){ 
//       alert(result)
        if (status) {
        
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
// below variables are retunbed from backend and contains all the drugs 
         tnet=0;tgross=0;ttax=0;
        document.getElementById("idtnet").value=tnet;document.getElementById("idtgross").value=tgross; 
          document.getElementById("idttax").value=ttax;             
       if (fields.rowcount > 0) {  
       vpurchaseid=fields.purchaseid; 
       purchasedt=fields.purchasedt; pursuppliername=fields.suppliername; invoiceno=fields.invoiceno; 
      vdrugid=fields.drugid; vdrugname=fields.drugname; vstrength=fields.strength; vdrugtype=fields.drugtype; vdruggn=fields.genericname;  
      batchno=fields.batchno; expdt=fields.expdt; vopngstk=fields.opngstk;vclsgstk=fields.clsgstk;
      qtyperpack=fields.qtyperpack;packs=fields.packs;freepacks=fields.freepacks;
      totalqty=fields.totalqty;unitprice=fields.unitprice;discunitprice=fields.discunitprice;
      grossprice=fields.grossprice;taxpercent=fields.taxpercent;tax=fields.tax;
     netamt=fields.netamt;   
          var vdruglen=vdrugname.length
          for(var i = 0; i < (vdruglen); i++) {
          
            var rowno=i+1      // first is header row therefore add 1     
            var temprow=rowno.toString();
      if (rowno < 10) {temprow='0'+temprow; var rowid= 'idviewrow'+temprow}
      else {var rowid='idviewrow'+temprow};
 
      var purdtddmmyyyy=purchasedt[i].substr(6,4)+'/'+purchasedt[i].substr(4,2)+'/'+purchasedt[i].substr(0,4)
    var  vexpdt=expdt[i].substr(2,2)+'/'+expdt[i].substr(0,2)
      var tablerow=
     
      '<tr id="'+rowid+'" class="tbleditrow">'+ 
     '<td   id="idcol'+temprow+'edit">'+'<button type="button"  id="ideditbtnedit'+temprow+'"'+
     ' class="btn chead btn-primary btn-sm form-control  flditem">Edit Row</button>'+
     '<button type="button" id="ideditbtnsave'+temprow+'"'+
     ' class="btn btn-primary btn-sm form-control cshort flditem">Save</button>'+
     '<button type="button" id="ideditbtncancel'+temprow+'"'+
     'class="btn btn-primary btn-sm form-control cshort flditem">Cancel</button>'+
    '<button type="button" id="ideditbtndelete'+temprow+'"'+
     'class="btn btn-primary btn-sm form-control cshort flditem">Delete</button>'+      
     '</td>'+
     '<td id="idcol'+temprow+'invoiceno">'+'<INPUT type ="text" value="'+invoiceno[i]+
     '" id="idinvoiceno'+temprow+'" class="clong form-control flditem" readonly>'+
  '<span class="centerstrong" id="ideditinvoiceno'+temprow+'err"></span></td>'+
     '<td id="idcol'+temprow+'purchasedt">'+'<INPUT type ="text" value="'+purdtddmmyyyy+   // dont get time
     '" id="idpurchasedt'+temprow+'" class="clong form-control flditem" readonly >'+
    '<span class="centerstrong" id="ideditpurchasedt'+temprow+'err"></span></td>'+
      
     '<td id="idcol'+temprow+'supplier">'+'<select id="idsupplier'+temprow+
       '" class="cvsel form-control flditem"><option value="Z">Select Supplier</option></select><span class="centerstrong" id="idsupplier'
      +temprow+'err"></span></td>'+    

 //    '<td id="idcol'+temprow+'drugname">'+'<INPUT type ="text" value="'+vdrugname[i]+
 //    '" id="idedit'+temprow+'01" class="cvlong form-control" readonly>'+
 //    '<span class="centerstrong" id="idedit'+temprow+'01err"></span></td>'+
      '<td id="idcol'+temprow+'drugname">'+
          '<INPUT type ="text" id="idtextdrugname'+temprow+'" value="'+vdrugname[i]+'" class="cvlong flditem form-control" readonly>'+
          '<select size="5" id="iddrugname'+temprow+
  '" class="cvsel form-control"></select><span class="centerstrong" id="idtextdrugname'
      +temprow+'err"></span></td>'+  
          
                    '<td id="idcol'+temprow+'genericname">'+'<INPUT type ="text" value="'+vdruggn[i]+
     '" id="idedit'+temprow+'18" class="clong form-control flditem" readonly>'+                                  //shoba for gn
     '<span class="centerstrong" id="idedit'+temprow+'18err"></span></td>' +
   
       
   '<td id="idcol'+temprow+'strength">'+ '<INPUT type ="text" value="'+vstrength[i]+
     '" id="idedit'+temprow+'02" class="cshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'02err"></span></td>'+
   '<td id="idcol'+temprow+'drugtype">'+ '<INPUT type ="text" value="'+vdrugtype[i]+
     '" id="idedit'+temprow+'03" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'03err"></span></td>'+
     '<td id="idcol'+temprow+'batchno">'+'<INPUT type ="text" value="'+batchno[i]+
     '" id="idedit'+temprow+'04" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'04err"></span></td>'+
   '<td id="idcol'+temprow+'expdt">'+'<INPUT type ="text" value="'+vexpdt+ 
     '" id="idedit'+temprow+'05" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'05err"></span></td>'+
     '<td id="idcol'+temprow+'stkinhand">'+'<INPUT type ="text" value="'+vopngstk[i]+
     '" id="idedit'+temprow+'06" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'06err"></span></td>'+
     '<td id="idcol'+temprow+'qtyperpack">'+'<INPUT type ="number" value="'+qtyperpack[i]+
     '" id="idedit'+temprow+'07" class="cvshort form-control flditem" readonly>'+
    '<span class="centerstrong" id="idedit'+temprow+'07err"></span></td>'+
     '<td id="idcol'+temprow+'packs">'+'<INPUT type ="number" value="'+packs[i]+
     '" id="idedit'+temprow+'08" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'08err"></span></td>'+
    '<td id="idcol'+temprow+'freepacks">'+'<INPUT type ="number" value="'+freepacks[i]+
     '" id="idedit'+temprow+'09" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'09err"></span></td>'+
    '<td id="idcol'+temprow+'totalqty">'+'<INPUT type ="number" value="'+totalqty[i]+
     '" id="idedit'+temprow+'10" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'10err"></span></td>'+
     '<td id="idcol'+temprow+'clsstk">'+'<INPUT type ="number" value="'+vclsgstk[i]+
     '" id="idedit'+temprow+'11" class="cvshort form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'11err"></span></td>'+ 
    '<td id="idcol'+temprow+'unitprice">'+'<INPUT type ="number" value="'+unitprice[i]+
     '" id="idedit'+temprow+'12" class="clong form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'12err"></span></td>'+
    '<td id="idcol'+temprow+'discunitprice">'+'<INPUT type ="number" value="'+discunitprice[i]+
     '" id="idedit'+temprow+'13" class="clong form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'13err"></span></td>'+
     '<td id="idcol"'+temprow+'grossprice">'+'<INPUT type ="number" value="'+grossprice[i]+
     '" id="idedit'+temprow+'14" class="clong form-control flditem" readonly>'+
    '<span class="centerstrong" id="idedit'+temprow+'14err"></span></td>'+
    '<td id="idcol'+temprow+'taxpercent">'+'<INPUT type ="number" value="'+taxpercent[i]+
     '" id="idedit'+temprow+'15" class="cvshort form-control flditem" readonly>'+
    '<span class="centerstrong" id="idedit'+temprow+'15err"></span></td>'+
    '<td id="idcol'+temprow+'tax">'+'<INPUT type ="number" value="'+tax[i]+
     '" id="idedit'+temprow+'16" class="clong form-control flditem" readonly>'+
    '<span class="centerstrong" id="idedit'+temprow+'16err"></span></td>'+
  '<td id="idcol'+temprow+'netamt">'+'<INPUT type ="number" value="'+netamt[i]+
     '" id="idedit'+temprow+'17" class="clong form-control flditem" readonly>'+
     '<span class="centerstrong" id="idedit'+temprow+'17err"></span></td></tr>';
     
            
           $("#idtableedit").append(tablerow);
            var tempid='iddrugname'+temprow;
            $('#'+tempid).hide();   // hide dropdown
           $('[id^=ideditbtnsave],[id^=ideditbtncancel],[id^=ideditbtndelete]').hide();
           tnet=((tnet*10)+(netamt[i]*10))/10; tgross=((tgross*10)+(grossprice[i]*10))/10; ttax=((ttax*10)+(tax[i]*10))/10
          }  // end for
         document.getElementById("idtnet").value=(Math.round(tnet)).toFixed(2);document.getElementById("idtgross").value=(Math.round(tgross)).toFixed(2); document.getElementById("idttax").value=(Math.round(ttax)).toFixed(2);                                           
          
           
// do the loop again to fill in supplier dropdown for each of the returned rows
          for(var i = 0; i < (vdrugname.length); i++) {
          var rowno=i+1
            var temprow=rowno.toString();
      if (rowno < 10) {temprow='0'+temprow;}
      var suppdropdownid="idsupplier"+temprow
      var selectsupplier=pursuppliername[i]
      createsuppdropdown(suppdropdownid,selectsupplier) 
       $('#'+suppdropdownid).prop('disabled', 'disabled');
      
          }  // end second for
         $('.info').attr('data-original-title', "")
// now show the invoice button in case use needs to change invoiceno
        
         if (vsup !="Z") { 
            $('#idinvsection').show(); }
         else { $('#idinvsection').hide();}
        
         
      }  // end if rows > 0  
		else {
			alert("No rows Found");$('#idpurbtnsrch').prop("disabled",false);
		      }
		$('#idpurbtnsrch').prop("disabled",false);
   }  // end good status
  
       
 })  // end post  
          
}  

function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
}  
function createsuppdropdown(suppdropdownid,selectsupplier) {
  
    var dropdown2 = document.getElementById(suppdropdownid)  
//     $('#'+dropdown2).html( $("idviewsup").html() );
  
          for(var i = 0; i < (supplierid.length); i++) {
            var  opt = suppliername[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = supplierid[i].toString()+'--'+suppliername[i]; 
           if (opt == selectsupplier){
              var  indxselected = i;
           }                                                         // format is supplierid and name
           dropdown2.appendChild(el);          
          } 
      var myInterval = setInterval(function () {
          if ($(document).find(dropdown2).length != 0) 
             { clearInterval(myInterval);}
             }, 800);
          dropdown2.selectedIndex = indxselected+1;
         
} 
  
function createdrugdropdown(drugdropdownid,purdrugid) {
  
    var dropdown2 = document.getElementById(drugdropdownid)  
    
 for(var i = 0; i < (drugid.length); i++) {
          
            var  opt = drugname[i]; 
           
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]+'--genericname'+druggn[i];;       // shoba for gn
                                                                  // format is id123--nameceftum--strengthabc--typetab
           if (drugid[i] == purdrugid){
               var  indxselected = i;
                   }  
           dropdown2.appendChild(el);
          }  
           var myInterval = setInterval(function () {
          if ($(document).find(dropdown2).length != 0) 
             { clearInterval(myInterval);}
             }, 800);
          dropdown2.selectedIndex = indxselected+1;
}  

function saverowdata(thisrowid)  {
   
 //  var thisrowid=$(this).parents('tr').attr('id')
   var temp='idinvoiceno'+(thisrowid.slice(-2))
  svinvoiceno=$('#'+temp).val();
  var temp='idpurchasedt'+(thisrowid.slice(-2))
    svpurchasedt=$('#'+temp).val(); 
   var tempsup='idsupplier'+(thisrowid.slice(-2))
   svsupplierinfo=$('#'+tempsup).val();
  var tempdrug='iddrugname'+(thisrowid.slice(-2)) 
     var thistextid="idtextdrugname"+ thisrowid.slice(-2)    
      svtextdrugname = (document.getElementById(thistextid).value).trim()   
  
   var temp=thisrowid+' input[id^=idedit]'
      $('#'+temp).each(function(i, selected){
       var thisid=this.id
       var indx=parseInt(thisid.slice(-2)) 
       svrowcoldata[indx]=document.getElementById(thisid).value;
    })         
      
}  
function initallfields() {       
  $('#idpatconfrow').addClass('hidden') // show confirm
//     $('#idpatmsgrow').addClass('hidden')
     
    setTimeout(function(){       // run this after 2 seconds so that all the error fields have been available to the Jquery
       $('[id$=err]').each(function(i, selected){       // initialize error fields
       var thisid=this.id 
       document.getElementById(this.id).innerHTML = ""
        })      
 }, 1500);
 
  $('.info').attr('data-original-title', ""); saverowid="";saverow="";$('.info').attr('data-original-title', "")    // hide drug dropdown
        document.getElementById("idtextviewdrugerr").innerHTML= ""
     
         $('#idviewdrug').hide()
        
 //        $("#idpatmsgrow").addClass('hidden')
         
} 

  
$(document).ready(function(){ 
  
   addheader() 
  
   populatedrugs()

   var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
 
         $('#idviewinpstartdt,#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
    var datestr=dd+'/'+mm+'/'+yyyy;        
   $('#idviewinpstartdt,#idviewinpenddt').datepicker('setDate', datestr)  

      $('#idviewinpstartdt,#idviewinpenddt').datepicker('setEndDate', datestr);

     $('#idviewinpexpdt').datepicker({ 
         format: 'mm/yy',
       viewMode: 1,
       minViewMode: 1
       })  
   $('[data-toggle="tooltip"]').tooltip();
   initallfields() 
   $("#idpatmsgrow").hide()

function checkdate(thisid) {
var d = new Date();
  var curryr = (d.getFullYear() % 100);
  var temp=document.getElementById(thisid).value
  var thiserrid=thisid+'err'
  if ( (parseInt(temp.slice(-2)) < curryr) || (parseInt(temp.substr(0,2)) == 0) || (parseInt(temp.substr(0,2)) > 12) ) {
     document.getElementById(thiserrid).innerHTML="<b>Invalid Month/Year</b>" } 
  else {document.getElementById(thiserrid).innerHTML=""}
}
$(document).on('blur','input[id^=idedit]',  function(){  
 //   alert("here")
     var  thisid=this.id
     var  thisiderr=thisid+"err"
     // aug 2 2018
     var temprowid=$(this).parents('tr').attr('id') 
  var rownum=temprowid.slice(-2)
  var purchdt='idpurchasedt'+rownum
 
 var datestr=document.getElementById(purchdt).value  
 if (datestr=="") {$('#'+purchdt).datepicker('setDate', strtoday)}
 // aug 2 2018
  
       if (document.getElementById(thisid).readOnly) {return}   // if its a blur on a readonly then return
      
 //1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net      
  // check for non mandatory fields which are numeric. they will be 0 if no entry. but they cannot be negative
           var last2 = thisid.slice(-2);  // net price can be 0. its not mandatory 
          if (this.type == "number") { 

               if(document.getElementById(this.id).value =="") 
                 { document.getElementById(this.id).value =0;}
 
            
            if (last2 == "15" || last2 == "09" ) {  // tax and freepacks  and  are non mandatory numeric fields which can be therefore 0
              if((document.getElementById(thisid).value =="") || 
                 (document.getElementById(thisid).value<0) )
                 // if null then set field to 0 since its not mandatory
                { document.getElementById(thisid).value =0;document.getElementById(thisiderr).innerHTML = "";}
                               
             }   // end 14 or 09 and all numeric non mandatory fields
 // till here check for non mandatory     
            else {   // all mandatory fields must be > than 0
               document.getElementById(thisiderr).innerHTML = "";  // 01/28
               if((document.getElementById(thisid).value =="") || (!(document.getElementById(thisid).value>0)) ) {   // all others number types mandatoyry must be > 0       
                   document.getElementById(thisid).value =0;
                   document.getElementById(thisiderr).innerHTML = "&nbsp;&nbsp;Invalid";
                  }
                 // aug 2 2018
              else {
                var getid07=thisid.slice(0, -2)+'07';var getid07err=getid07+'err';
                var getid08=thisid.slice(0, -2)+'08';var getid08err=getid08+'err';
                if (document.getElementById(getid07).value>0) {document.getElementById(getid07err).value =""}
                 if (document.getElementById(getid08).value>0) {document.getElementById(getid08err).value =""}                
              }
          // aug 2        
               }  // end if 14 or 9         
        
       var last2 = thisid.slice(-2);  
/*
INSERT INTO purchase (purchasedt,invoiceno, supplier, drugid, drugname,strength,type, batchno, expdt, stkinhand, qtyperpack,
   packs, freepacks, totalqty, unitprice, discunitprice, grossprice, taxpercent, tax, netprice) 
*/
            
 // recalc if blur on 6-no/pk 7-packs 10-unitprice  12-tax%  14-disc%  
  //   1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net 
       
            if (last2 == "07" || last2 == "08" || last2 == "09" || last2 == "12" || last2 == "15"    )  {   // if its blur on 6 or 7 then recalculate 8 if both are not null
             
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
          
  //1 -drug 2-strength 3-type 4-batch 5-dt 6-stock 7-no/pk 8-packs 9-freepacks  10-qty  11-unitprice 12-Discounted/price 13-gross  14-tax% 15-taxamt  16-net      
        document.getElementById(getid10).value= (document.getElementById(getid07).value) *
      (   ((document.getElementById(getid08).value)*10 + (document.getElementById(getid09).value)*10)/10        )   // qty calc
         document.getElementById(getid11).value= 
        (((document.getElementById(getid10).value)*10) + ((document.getElementById(getid06).value)*10))/10          // clos stock
         
         var temp89=((((document.getElementById(getid08).value)*10)+(document.getElementById(getid09).value)*10)/10) // to include free pack coloumn
        //    document.getElementById(getid12).value =  (document.getElementById(getid13).value / temp89).toFixed(2)        // discounted price
            var  oldgross= document.getElementById(getid14).value   // store old gross since we are going to change it next line with new
            document.getElementById(getid14).value= ((document.getElementById(getid08).value) *
                                                     (document.getElementById(getid12).value)).toFixed(2)
 //             alert(document.getElementById(getid14).value)
            document.getElementById(getid13).value =  (((document.getElementById(getid14).value)*10) / (temp89*10)).toFixed(2)        // discounted price
          var newgross= document.getElementById(getid14).value
         tgross=(((tgross*10) - (oldgross*10) + (newgross*10))/10).toFixed(2)   // tgross equals tgross-old+new
       
           document.getElementById("idtgross").value=tgross
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
           document.getElementById("idtnet").value=tnet
           
            var getid17err=getid17+'err'
           if(!(newnet>0)) {    // if value not > 0 then flad error  
            
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
            document.getElementById(thisiderr).innerHTML = ""}
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
$(document).on('change','[id^=idsupplier]',function(){
   var thisid=this.id
   if(thisid.indexOf("err") != -1) {return}
   var thisiderr=thisid+'err'
  var vsup= $('#'+thisid).val();
    if (vsup == "Z") {    
       $('#'+thisiderr).removeClass("hidden");
       document.getElementById(thisiderr).innerHTML = "Choose Supplier"
     }
     else {document.getElementById(thisiderr).innerHTML = ""}
})
$(document).on('blur', '#idtextviewdrug,#idviewdrug', function(e){ 
	       var thisid=this.id; 	   
//     alert(e.relatedTarget.id)	;
	    setTimeout(function() {  var currid=document.activeElement.id;	 

		if (thisid.indexOf("idtextview") != -1) {											 
      var thisselid="idviewdrug"
			if ( currid == thisselid) {return}
	    }
		if (thisid.indexOf("idviewdrug") != -1) {
       var thistextid="idtextviewdrug"
			if (currid == thistextid) {return}
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
       document.getElementById(thistextiderr).innerHTML = "";}
     }   
     $("#"+thisselid).hide()
      }
	},300);	

 }) 
$(document).on('blur', 'input[id^=idtextdrugname],[id^=iddrugname]', function(e){ 
	       var thisid=this.id; 	   
		     var thisrowid=$(this).parents('tr').attr('id') 
//     alert(e.relatedTarget.id)	;
	    setTimeout(function() {  var currid=document.activeElement.id;	 

		if (thisid.indexOf("idtext") != -1) {											 
      var thisselid="iddrugname"+ thisrowid.slice(-2);// alert(thisselid);
			if ( currid == thisselid) {return}
	    }
		if (thisid.indexOf("iddrugname") != -1) {
       var thistextid="idtextdrugname"+ thisrowid.slice(-2)
			if (currid == thistextid) {return}
	    }
  
     // if you are on drug input then return because nothing to check
      var thisselid="iddrugname"+ thisrowid.slice(-2);// alert(thisselid);
      var thistextid="idtextdrugname"+ thisrowid.slice(-2)
       var thistextiderr=thistextid+'err' 
    if (  $("#"+thisselid).is(":visible"))   // if its open
      {      
       
        var textinp = (document.getElementById(thistextid).value).trim()      
         var pos=checkposinarray(drugname, textinp) 
         
    if (checkposinarray(drugname, textinp) == -1) {
       document.getElementById(thistextiderr).innerHTML = "Invalid Drug"; $('.info').attr('data-original-title', ""); }
     else {
       document.getElementById(thisselid).selectedIndex = 0;
       document.getElementById(thistextiderr).innerHTML = "";
       var drugindx = pos
       var vdruginfo= $('#'+thisselid).val();
       var rowid=thisrowid.slice(-2)
       var idgenericname='idedit'+rowid+'18'                                                              // shoba for gn
       var idstrength='idedit'+rowid+'02'   // strength is col 2
       var idtype='idedit'+rowid+'03'        // type is col 3
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
     var druginp=drugparts[1].substr(4)
     var idopnstk='idedit'+rowid+'06';     
     var getid11='idedit'+rowid+'11';var getid10='idedit'+rowid+'10';var getid12='idedit'+rowid+'12';var getid13='idedit'+rowid+'13';             
     var getid07='idedit'+rowid+'07';var getid08='idedit'+rowid+'08';var getid09='idedit'+rowid+'09';var getid14='idedit'+rowid+'14';                  
     var getid16='idedit'+rowid+'16';var getid17='idedit'+rowid+'17';var getid18='idedit'+rowid+'18'                                           //shoba for gn
 
	  document.getElementById(getid12).value=nondiscprice[drugindx];
     document.getElementById(getid07).value=0;document.getElementById(getid08).value=0;document.getElementById(getid09).value=0;
      document.getElementById(idopnstk).value=opstk[drugindx]    // take opn stock of the new selected drug
      document.getElementById(getid10).value=0 ; document.getElementById(getid11).value=0 ; document.getElementById(getid13).value=0 ; 
     document.getElementById(getid14).value=0 ; document.getElementById(getid16).value=0 ; document.getElementById(getid17).value=0; 
  
  // recalculate closing stock of new drug
  
//        (((document.getElementById(getid10).value)*10) + ((document.getElementById(getid06).value)*10))/10 
 //      var drugindx=drugparts[0].substr(2)
       
//     document.getElementById(idprice).value=lastpricepur[drugindx];
//     document.getElementById(idpriceerr).innerHTML="" 
     
     if (minpricepur[drugindx] == 0) {var vtitle="No Data available"}
      else{
        var temp =  minsuppur[drugindx];
        var tempsup=temp.replace(/[0-9]*--/, ' ');
        var temp=mindatepur[drugindx];
        var tempdt=temp.substr(6,2)+'/'+temp.substr(4,2)+'/'+temp.substr(0,4);
        
        var vtitle='The lowest price ' + minpricepur[drugindx] + ' from '+ tempsup + ' on '+ tempdt;}
     $('.info').attr('data-original-title', vtitle)

     }   
     $("#"+thisselid).hide()
      }
	},500);											 
 }) 

$(document).on('keydown','input[id^=idtext]',  function(e) {  // if user hits downkey then open dropdown
 if (e.type == 'keydown') {
//	if(e.which != 40) {return} commented vikas june 6 and replaced by line below below
	 	if((e.which != 40) && (e.which != 13) ){return}    // now accept even enter key vikas june 6
 }

  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6) 
	$('#' + thisselid).show();document.getElementById(thisselid).selectedIndex=0;
	//  vikas june 6  if enter key pressed and if dropdown is open then take the first entry in the dropdown
    if ( (e.which == 13) && ($("#"+thisselid).is(":visible")) ) 
			 {
				 document.getElementById(thisid).value=$('#'+thisselid+' option:eq(0)').text(); 
				 
				 if (thisid.indexOf('idtextview') == -1) {  // if not view
				 var thistextid = thisid
				 var thistextiderr=thistextid+'err'
        document.getElementById(thistextiderr).innerHTML =""
        var vdruginfo= $('#'+thisselid+' option:eq(0)').val();
        var rowid=thisid.substr(14,2)
        var idstrength='idedit'+rowid+'02'   // strength is col 2
			
        var idtype='idedit'+rowid+'03'        // type is col 3
        var idgenericname='idedit'+rowid+'18' 
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
            document.getElementById(idgenericname).value=drugparts[4].substr(11)                             //shoba for gn
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
     var druginp=drugparts[1].substr(4)
     var drugindx = checkposinarray(drugname, druginp)
     var idopnstk='idedit'+rowid+'06';     
     var getid11='idedit'+rowid+'11';var getid10='idedit'+rowid+'10';var getid12='idedit'+rowid+'12';var getid13='idedit'+rowid+'13';
     var getid07='idedit'+rowid+'07';var getid08='idedit'+rowid+'08';var getid09='idedit'+rowid+'09';var getid14='idedit'+rowid+'14';
     var getid16='idedit'+rowid+'16';var getid17='idedit'+rowid+'17';
//  document.getElementById(getid12).value=lastpriceperpk[drugindx];
	  document.getElementById(getid12).value=nondiscprice[drugindx];
     document.getElementById(getid07).value=0;document.getElementById(getid08).value=0;document.getElementById(getid09).value=0;
      document.getElementById(idopnstk).value=opstk[drugindx]    // take opn stock of the new selected drug
      document.getElementById(getid10).value=0 ; document.getElementById(getid11).value=0 ; document.getElementById(getid13).value=0 ; 
     document.getElementById(getid14).value=0 ; document.getElementById(getid16).value=0 ; document.getElementById(getid17).value=0; 
       
     if (minpricepur[drugindx] == 0) {var vtitle="No Data available"}
      else {
        var temp =  minsuppur[drugindx];
        var tempsup=temp.replace(/[0-9]*--/, ' ');
        var temp=mindatepur[drugindx];
        var tempdt=temp.substr(6,2)+'/'+temp.substr(4,2)+'/'+temp.substr(0,4);
        
        var vtitle='The lowest price ' + minpricepur[drugindx] + ' from '+ tempsup + ' on '+ tempdt;}
     $('.info').attr('data-original-title', vtitle)
	}  // end if not view 
				 $('#' + thisselid).hide();
				 return;				 		 
			 }
	// till here june 6
	$('#'+thisselid+' option:eq(0)').addClass('hlt')
	document.getElementById(thisselid).focus();
	
 
}) 	
$(document).on('keyup click','input[id^=idtext]',  function(e) {   // show dropdown on click and char entered
	//  vikas june 6  if enter key pressed and if dropdown is open then take the first entrey in the dropdown
 if (e.type == 'keyup') {
	var keyCode = e.keyCode || e.which; 
 if(keyCode == 13) {return} }
// till here	
  var thisid=this.id;
  if (document.getElementById(thisid).readOnly) {return};
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    // idsel-0101err or whichever row it is
  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty();
  var txt=document.getElementById(thisid).value;
  
  txt=txt.trim(); //remove spaces before and after text
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length > 0)  { // if input has non-alphabet characters
  	  document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = "";
 // txt=txt.replace(/\//g, "\\/");
//  txt=txt.replace(/\%/g, "\\%");
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
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+drugtype[i]+'--genericname'+druggn[i]; //shoba for gn
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }  
			 else { 
			 if (foundone) {break;}}  
      }  //end for

  if (!drugsfound) {$('#'+thisselid).hide();document.getElementById(thisiderr).innerHTML="Invalid drug"; return;}
	 $('#'+thisselid+' option:eq(0)').addClass('hlt');
})

$(document).on('click keydown','[id^=iddrugname]',function(e){
	
	 $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
	if (e.type == 'keydown') {
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13 && keyCode != 9  ) {return}
	}
	
	 var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  $('#'+thisid).hide()
  var thistextiderr=thistextid+'err'
  document.getElementById(thistextiderr).innerHTML =""
  var vdruginfo= $('#'+thisid).val();
  var rowid=thisid.substr(10,2)
   var idstrength='idedit'+rowid+'02'   // strength is col 2
   var idtype='idedit'+rowid+'03'        // type is col 3
   var idgenericname='idedit'+rowid+'18' 
     var drugparts = vdruginfo.split("--");  // format is id123--nameceftum--strengthabc--typetab
   document.getElementById(idgenericname).value=drugparts[4].substr(11)                                     //shoba for gn
     document.getElementById(idstrength).value=drugparts[2].substr(8)
     document.getElementById(idtype).value=drugparts[3].substr(4)
     var druginp=drugparts[1].substr(4)
     var drugindx = checkposinarray(drugname, druginp)
     var idopnstk='idedit'+rowid+'06';     
     var getid11='idedit'+rowid+'11';var getid10='idedit'+rowid+'10';var getid12='idedit'+rowid+'12';var getid13='idedit'+rowid+'13';
     var getid07='idedit'+rowid+'07';var getid08='idedit'+rowid+'08';var getid09='idedit'+rowid+'09';var getid14='idedit'+rowid+'14';
     var getid16='idedit'+rowid+'16';var getid17='idedit'+rowid+'17';
//  document.getElementById(getid12).value=lastpriceperpk[drugindx];
	  document.getElementById(getid12).value=nondiscprice[drugindx];
     document.getElementById(getid07).value=0;document.getElementById(getid08).value=0;document.getElementById(getid09).value=0;
      document.getElementById(idopnstk).value=opstk[drugindx]    // take opn stock of the new selected drug
      document.getElementById(getid10).value=0 ; document.getElementById(getid11).value=0 ; document.getElementById(getid13).value=0 ; 
     document.getElementById(getid14).value=0 ; document.getElementById(getid16).value=0 ; document.getElementById(getid17).value=0; 
  
  // recalculate closing stock of new drug
  
//        (((document.getElementById(getid10).value)*10) + ((document.getElementById(getid06).value)*10))/10 
 //      var drugindx=drugparts[0].substr(2)
       
//     document.getElementById(idprice).value=lastpricepur[drugindx];
//     document.getElementById(idpriceerr).innerHTML="" 
     
     if (minpricepur[drugindx] == 0) {var vtitle="No Data available"}
      else{
        var temp =  minsuppur[drugindx];
        var tempsup=temp.replace(/[0-9]*--/, ' ');
        var temp=mindatepur[drugindx];
        var tempdt=temp.substr(6,2)+'/'+temp.substr(4,2)+'/'+temp.substr(0,4);
        
        var vtitle='The lowest price ' + minpricepur[drugindx] + ' from '+ tempsup + ' on '+ tempdt;}
     $('.info').attr('data-original-title', vtitle)

      
})
$(document).on('click keydown','#idviewdrug',function(e){ 
	  $('.hlt').addClass('nohlt');$('.hlt').removeClass('hlt');
	if (e.type == 'keydown') {
   var keyCode = e.keyCode || e.which; 
   if(keyCode != 13 && keyCode != 9  ) {return;}
	}	
	
  var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
	var thistextiderr=thistextid+'err'
  document.getElementById(thistextiderr).innerHTML =""
  $('#'+thisid).hide()
})
$(document).on('click','#idpatbtnconf, #idpatbtncan', function (e) {
	if (this.id == "idpatbtncan")  {
		$(elm2save).prop("disabled",false);  $('#idpatconfrow').addClass('hidden'); 
		return;
	} 
	if (btn2save == "save") {
    confirmdata(row2save, elm2save);}
	else {confirmdel(row2save, elm2save);}
})  
$(document).on('click','[id^=ideditbtnsave]', function (e) {
 if (elm2save !="") {$(elm2save).prop("disabled",false);}
  	var thiselm=$(this);var thisrowid=$(this).parents('tr').attr('id')
	$(thiselm).prop("disabled",true); //june 10
  if (saverowid !=thisrowid) {return}  
   var allgood=true;
    if (!checktblinputs()) {allgood=false;}
   
    if (!allgood) {alert("invalid input");
    $(thiselm).prop("disabled",false);           // aug 2 2018
    return}
    // aug 2 2018
  var rownum=thisrowid.slice(-2)
  var purchdt='idpurchasedt'+rownum
 
 var datestr=document.getElementById(purchdt).value  
 if (datestr=="") {$('#'+purchdt).datepicker('setDate', strtoday)}
 var temp='input[id^=idedit'+rownum
     $(temp).attr("readonly", true); 
 // aug 2 2018
  $('#idpatconfrow').removeClass('hidden'); elm2save=thiselm; row2save=thisrowid; btn2save="save";
	     document.getElementById("idpatbtnconf").focus();
})   // till here 

function confirmdata(rowtosave, elmtosave) {	
	thisrowid=rowtosave;var thiselm=elmtosave;
  var rowcoldata=[];
   var temp='idinvoiceno'+(thisrowid.slice(-2))
   var pinvoiceno=$('#'+temp).val();
  var temp='idpurchasedt'+(thisrowid.slice(-2))
   var ppurchasedt=$('#'+temp).val();
   var ppurchasedt=ppurchasedt.substr(6,4)+ppurchasedt.substr(3,2)+ppurchasedt.substr(0,2)
   
   var tempsup='idsupplier'+(thisrowid.slice(-2))
   var psupplierinfo=$('#'+tempsup).val();
   var temparray = psupplierinfo.split("--");  // format is id123--supplier    
   var psupplier=temparray[1]
   var psupplierid=temparray[0]
   rowcoldata[0]=psupplier
   
   var temp=parseInt(saverowid.slice(-2)) - 1
   var ppurchaseid=vpurchaseid[temp]
   var temp=thisrowid+' input[id^=idedit]'
      $('#'+temp).each(function(i, selected){
       var thisid=this.id

        if (thisid.slice(-2) == "05") {
         var temp=document.getElementById(thisid).value;
          var indx=5
         rowcoldata[indx]=temp.substr(3,2) + temp.substr(0,2)  
        }
        else 
        {
         var indx=parseInt(thisid.slice(-2)) 
         rowcoldata[indx]=document.getElementById(thisid).value;
       
        }
       
  })         
// check min pricing
     var tempdrug='iddrugname'+(thisrowid.slice(-2)) 
//
     var thistextid="idtextdrugname"+ thisrowid.slice(-2)    
     var textinp = (document.getElementById(thistextid).value).trim()
     var drugindx=checkposinarray(drugname, textinp)
     
     
     var pdrugname=drugname[drugindx];
   var pdruggn=druggn[drugindx];                                                         //shoba for gn
     var pdrugstrength=drugstrength[drugindx]
     var pdrugtype=drugtype[drugindx]
     var pdrugid=drugid[drugindx]
     opstk[drugindx]=rowcoldata[11];
   
     rowcoldata[1]=pdrugname;rowcoldata[2]=pdrugstrength;rowcoldata[3]=pdrugtype;
  
  rowcoldata[18]=pdruggn;                                                                //shoba for gn
     if ((svclstk == rowcoldata[11])  && (pdrugid == svdrugid))   // if there is no change in the closing stock and drug id is same
     {vtranstype="PUR";vremarks=""} 
         else {vtranstype="ADJ";vremarks="Closing Stock changed from "+svclstk+" to "+rowcoldata[11];}
     svclstk=""
    if ((minpricepur[drugindx] == 0) || (minpricepur[drugindx] >  rowcoldata[13])) {        
      var vminpricepur= rowcoldata[13]; var vminsuppur=psupplier;var vmindatepur=ppurchasedt;              // new minimums for this drug are set by this transaction
      minpricepur[drugindx]= vminpricepur; minsuppur[drugindx]=vminsuppur;mindatepur[drugindx]=vmindatepur;}
     else {vminpricepur= minpricepur[drugindx]; vminsuppur=minsuppur[drugindx];vmindatepur=mindatepur[drugindx];}
     if ((maxpricepur[drugindx] == 0) || (maxpricepur[drugindx] < rowcoldata[13])) {        
      var vmaxpricepur= rowcoldata[13]; var vmaxsuppur=psupplier; var vmaxdatepur=ppurchasedt;
      maxpricepur[drugindx]= vmaxpricepur; maxsuppur[drugindx]=vmaxsuppur;maxdatepur[drugindx]=vmaxdatepur;}
      else {vmaxpricepur= maxpricepur[drugindx]; vmaxsuppur=maxsuppur[drugindx];vmaxdatepur=maxdatepur[drugindx];}  
    
     if (lastpriceperpk[drugindx] == 0) {     // means no purchase entry yet for this drug
        lastdatepur[drugindx]=parseInt(ppurchasedt);lastsuppur[drugindx]=psupplier; lastpriceperpk[drugindx]=rowcoldata[13];
        var vlastdatepur=parseInt(ppurchasedt);vlastsuppur=psupplier; vlastpriceperpk=rowcoldata[13]; }
     else 
         {
        if ( ppurchasedt < lastdatepur[drugindx] ) {var vlastpriceperpk= lastpriceperpk[drugindx]; var vlastsuppur=lastsuppur[drugindx]; var vlastdatepur=lastdatepur[drugindx];
          }
          else { lastdatepur[drugindx]=parseInt(ppurchasedt);lastsuppur[drugindx]=psupplier; 
                                                   lastpriceperpk[drugindx]=rowcoldata[13];
        var vlastdatepur=parseInt(ppurchasedt);vlastsuppur=psupplier; vlastpriceperpk=rowcoldata[13]; } 
         }       
     var origqty=-1;   // if same drug id is selected then we origqty will remain -1. This will be checked in backend            
    if (pdrugid != svdrugid) {
 //      alert("here");alert(svdrugname);alert(svdrugid);
       var origdrugindx = checkposinarray(drugname, svdrugname)
       opstk[origdrugindx]= opstk[origdrugindx]-svqty          // reduce stock of original drug
       origqty=opstk[origdrugindx];         // pass original qty and original drugindx to update database too
    }
    $.post("ph_purchupdate.php",
    { trowcoldata: rowcoldata, tpurchaseid:ppurchaseid, tpurchasedt:ppurchasedt, tinvoiceno:pinvoiceno, tdrugid:pdrugid, 
     tsupplierid:psupplierid, tlastdatepur:vlastdatepur,ttranstype:vtranstype,tremarks:vremarks,
      tlastsuppur:vlastsuppur, tlastpriceperpk:vlastpriceperpk,tmindatepur:vmindatepur, torigqty:origqty,torigdrugid:svdrugid,
      tminsuppur:vminsuppur, tminpricepur:vminpricepur, tmaxdatepur:vmaxdatepur, 
     tmaxsuppur:vmaxsuppur, tmaxpricepur:vmaxpricepur},
    function(result, status){
  
    if (status) {
    alert(result)
    var  resultdata = JSON.parse(result)
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;} 

        document.getElementById("idpatmsg").innerHTML="Data Updated Successfully";
			  alert(document.getElementById("idpatmsg").innerHTML)

           document.getElementById("idpatmsg").innerHTML="";

  var suppdropdownid='idsupplier'+(saverowid.slice(-2))  
   $('#'+suppdropdownid).prop('disabled', 'disabled');    // restore the prev selected elements in the dropdown
  var drugdropdownid='iddrugname'+(saverowid.slice(-2))
   $('#'+drugdropdownid).hide() 
   var textdrug='idtextdrugname'+(saverowid.slice(-2))
   $('#'+textdrug).attr("readonly", true);
  var purchdt='idpurchasedt'+(saverowid.slice(-2))
   $('#'+purchdt).datepicker('remove')   
   var tempdt='idedit'+(saverowid.slice(-2))+'05'
   $('#'+tempdt).datepicker('remove')   
 $('#'+purchdt).attr("readonly", true); 
    var temp= '#'+thisrowid+' input[id^=idedit]:not([readonly])' 
   $(temp).attr("readonly", true); 
     var temp='idinvoiceno'+(thisrowid.slice(-2))
     $('#'+temp).attr("readonly", true);  
 $('#'+purchdt).attr("readonly", true);  
 var idsave= 'ideditbtnsave'+(saverowid.slice(-2))
  var idcancel= 'ideditbtncancel'+(saverowid.slice(-2))
  var iddelete= 'ideditbtndelete'+(saverowid.slice(-2))
  $("#"+idsave).prop("disabled",false); // aug 2
  $("#"+idsave).hide()
  $("#"+idcancel).hide()
  $("#"+iddelete).hide()
 initallfields()  
 
 document.getElementById("idinpinv").value=""
 
 populatedrugs() 
 $('#idpatconfrow').addClass('hidden'); elm2save="";row2save="";btn2save="";
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
         alert(msg)
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }
           
   })   //  end post   
   
}
// delete option
$(document).on('click','[id^=ideditbtndelete]', function (e) {
		var thiselm=$(this); $(thiselm).prop("disabled",true); //june 10
	if (elm2save !="") { $(elm2save).prop("disabled",false);}

   var thisrowid=$(this).parents('tr').attr('id')
   btn2save="del";$('#idpatconfrow').removeClass('hidden'); elm2save=thiselm; row2save=thisrowid; btn2save="del"
	     document.getElementById("idpatbtnconf").focus();
}) 
function confirmdel(rowtosave, elmtosave) {
		thisrowid=rowtosave;var thiselm=elmtosave;
    
   var rowid=thisrowid.slice(-2) 
   var temp=parseInt(rowid) - 1
   var ppurchaseid=vpurchaseid[temp]
   
  var rowcoldata=[];
  
     var psuppinfo=svsupplierinfo
   var temparray = psuppinfo.split("--");  // format is id123--supplier    
   var psupplier=temparray[1]
   var psupplierid=temparray[0]
   rowcoldata[0]=psupplier
   
   var temp=parseInt(saverowid.slice(-2)) - 1
  
  
   var temp=thisrowid+' input[id^=idedit]'
      $('#'+temp).each(function(i, selected){
       var thisid=this.id

         var indx=parseInt(thisid.slice(-2)) 
         rowcoldata[indx]=document.getElementById(thisid).value;
       
  }) 

     var textinp = svtextdrugname    // 26/3 
      svrowcoldata[1]=textinp;
     
     var drugindx=checkposinarray(drugname, textinp)     
     
     var pdrugid=drugid[drugindx]
//     var temp='idedit'+rowid+'10'
   var temp=svrowcoldata[10];
 //    opstk[drugindx]=opstk[drugindx] - document.getElementById(temp).value;
   opstk[drugindx]=opstk[drugindx] - temp;
     var origqty=opstk[drugindx];
    $.post("ph_purchdelete.php",
    { tpurchaseid:ppurchaseid, tdrugid:pdrugid, tpurchasedt:svpurchasedt, tinvoiceno:svinvoiceno, tsupplierid:psupplierid, tsupplier:psupplier, prowcoldata:svrowcoldata, ptrans:'PUR', premarks:'NONE',
      torigqty:origqty},
    function(result, status){
 
    if (status) {
    
    var  resultdata = JSON.parse(result)
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;} 
    
        document.getElementById("idpatmsg").innerHTML="Record Deleted Successfully";
			 alert(document.getElementById("idpatmsg").innerHTML);
			document.getElementById("idpatmsg").innerHTML="";
          document.getElementById("idinpinverror").innerHTML="";
         document.getElementById("idinpinv").value=""; 
        
      var vsup=$('#idviewsup').val();
       if  (document.getElementById("idtextviewdrug").value == "") 
          {var vdrug="Z";document.getElementById("idtextviewdrugerr").innerHTML = ""}
       else  {var vdrug=$('#idviewdrug').val();} 
       var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();var vexpdt=$('#idviewinpexpdt').val();
        $('#idtableedit tr').slice(1).remove();saverowid="";
 //     initallfields()
      getpurchasedata(vsup,vdrug,vstartdt,venddt,vexpdt)
      deleterow=true
       populatedrugs() 
			  $('#idpatconfrow').addClass('hidden'); elm2save="";row2save=""; btn2save="";
      deleterow=false;
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
         alert(msg)
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }
      
      
     
   })   //  end post   
   
}

//
$(document).on('click','[id^=ideditbtnedit]',  function(){
 
   $('#idinvsection').addClass("hidden")
  if (saverowid !="") { return}          // means user is already in edit mode and has not  cancelled.
	
  var thisrowid = $(this).parents('tr').attr('id')
	// put current stock below 17th may
	var rowno=thisrowid.slice(-2)
	var thistextid="idtextdrugname"+ thisrowid.slice(-2)    
  var textinp = (document.getElementById(thistextid).value).trim()
  var drugindx=checkposinarray(drugname, textinp)
	
	var temp= 'idedit'+rowno+'11';
  var trnsclsstk= parseInt(document.getElementById(temp).value) 
	var openingstock = parseInt(opstk[drugindx]) 
	if (trnsclsstk != openingstock) {alert("Stock has changed and transaction has been made on this drug. Please do Stock Adj");return;}
// till here	 
  saverowid=thisrowid;  
  saverowdata(thisrowid);
 
  var  suppdropdownid='idsupplier'+(saverowid.slice(-2))
  var  drugdropdownid='iddrugname'+(saverowid.slice(-2))     
  savesupp=  $('#'+suppdropdownid).val();

   var  temp='idtextdrugname'+(saverowid.slice(-2)) 
    $("#"+temp).attr("readonly", false); 
    
 var temp='idinvoiceno'+(thisrowid.slice(-2))
 $('#'+temp).attr("readonly", false); 
 $('input[id^=idedit]').attr("readonly", true);   // make all readonly

  $('[id^=ideditbtnsave]').hide(); $('[id^=ideditbtncancel]').hide();$('[id^=ideditbtndelete]').hide() //  hide all cancel and save buttoms
var  thisid=this.id

var idsave= 'ideditbtnsave'+thisid.slice(-2)         // unhide cancel and save for this row
var idcancel= 'ideditbtncancel'+thisid.slice(-2)
var iddelete= 'ideditbtndelete'+thisid.slice(-2)
$("#"+idsave).show()
$("#"+idcancel).show()
$("#"+iddelete).show()

// var thisrowid=$(this).parents('tr').attr('id')
// saverow= document.getElementById(thisrowid).outerHTML

var rowno=thisrowid.slice(-2)
var temp= '#'+thisrowid+' input[id^=idedit'+']' 
$(temp).attr("readonly", false);    // make all input elements enterable in that row
var temp= "input[id$="+rowno+'02],input[id$='+rowno+'03],input[id$='+rowno+'06],input[id$='+rowno+'10],input[id$='+rowno+'11],input[id$='+rowno+'13],input[id$='+rowno+'14],input[id$='+rowno+'16],input[id$='+rowno+'17],input[id$='+rowno+'18]';
$(temp).attr("readonly", true);    // calculated fields make readonly

// save original data from drug table relating to the drug in the edit row
 var temp= "input[id$="+rowno+'11]';var temp1= "input[id$="+rowno+'10]';
 svclstk=$(temp).val();svqty=$(temp1).val();
  
// var thistextid="idtextdrugname"+ thisrowid.slice(-2)    
// var textinp = (document.getElementById(thistextid).value).trim()
// var drugindx=checkposinarray(drugname, textinp)
  svdrugname=drugname[drugindx];
  svdrugid=drugid[drugindx] 
/*  svlastdatepur=lastdatepur[tempvar]; svlastsuppur=lastsuppur[tempvar]; 
  svlastpricepur=lastpricepur[tempvar]; svmindatepur=mindatepur[tempvar]; svminsuppur=minsuppur[tempvar]; svminpricepur=minpricepur[tempvar];
  svmaxdatepur=maxdatepur[tempvar]; svmaxsuppur=maxsuppur[tempvar];svmaxpricepur=maxpricepur[tempvar];*/
// till here 
var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
  var datestrtoday=dd+'/'+mm+'/'+yyyy;   
  strtoday=datestrtoday  //aug 2
 var purchdt='idpurchasedt'+rowno
 $('#'+purchdt).attr("readonly", false); 
 
 var datestr=document.getElementById(purchdt).value  
 $('#'+purchdt).datepicker({
         format: 'dd/mm/yyyy'    
       })  
         
   $('#'+purchdt).datepicker('setDate', datestr)       
    $('#'+purchdt).datepicker('setEndDate', datestrtoday);
   
   var tempdt= 'idedit'+rowno+'05';
   var dateexp=document.getElementById(tempdt).value 
  $('#'+tempdt).datepicker({
         format: 'mm/yy',
       viewMode: 1,
       minViewMode: 1    
       })   
   $('#'+tempdt).datepicker('setDate', dateexp)
   
   var suppdropdownid='idsupplier'+rowno
   $('#'+suppdropdownid).prop('disabled', false);
   
})  
 

$(document).on('click','[id^=ideditbtncancel]',  function(){
//  var thiselm=$(this);$(thiselm).prop("disabled",true);
	$('#idpatconfrow').addClass('hidden'); 
	if (elm2save !="") {$(elm2save).prop("disabled",false);}	
  var thisid=this.id

  var thisrowid=$(this).parents('tr').attr('id')
  if (saverowid !=thisrowid) {return}    // means user has clicked on cancel on some other row and not on the row that he was editing

 
   var temp='idinvoiceno'+(thisrowid.slice(-2))
   $('#'+temp).val(svinvoiceno);
   $('#'+temp).attr("readonly", true); 
  var temp='idpurchasedt'+(thisrowid.slice(-2))
    $('#'+temp).val(svpurchasedt); 
   var tempsup='idsupplier'+(thisrowid.slice(-2))
   $('#'+tempsup).val(svsupplierinfo);
    var thistextid="idtextdrugname"+ thisrowid.slice(-2)    
     document.getElementById(thistextid).value=svtextdrugname;
  var thistextiderr=thistextid+'err'   
     document.getElementById(thistextiderr).innerHTML='';
   $('#'+thistextid).attr("readonly", true);
     var temp=thisrowid+' input[id^=idedit]'
      $('#'+temp).each(function(i, selected){
       var thisid=this.id
       var indx=parseInt(thisid.slice(-2)) 
       document.getElementById(thisid).value=svrowcoldata[indx];
       var thisiderr=this.id+'err'
      
       document.getElementById(thisid).innerHTML="" ;
    })        
// till here  
  var suppdropdownid='idsupplier'+(thisid.slice(-2))
//   $('#'+suppdropdownid).val(savesupp)
   $('#'+suppdropdownid).prop('disabled', 'disabled');    // restore the prev selected elements in the dropdown

  var idsave= 'ideditbtnsave'+thisid.slice(-2)
  var idcancel= 'ideditbtncancel'+thisid.slice(-2)
  var iddelete= 'ideditbtndelete'+thisid.slice(-2)
   var temp='idinvoiceno'+(thisrowid.slice(-2))
   var purchdt='idpurchasedt'+(thisrowid.slice(-2))
  $('#'+purchdt).attr("readonly", true); 
   var temp= '#'+thisrowid+' input[id^=idedit]:not([readonly])' 
   $(temp).attr("readonly", true); 
	var temp= '#'+thisrowid+' span[id$=err]' 
	$(temp).html("")
  $("#"+idsave).hide()
  $("#"+idcancel).hide()
  $("#"+iddelete).hide()
  saverowid="";saverow="";saveclsstk="";
    
  $('#idinvsection').removeClass("hidden")
  document.getElementById("idinpinv").value=""; document.getElementById("idinpinverror").innerHTML = "";
 
})  


$(document).on('click','#idpurbtnsrch',  function(){
	 $('#idpurbtnsrch').prop("disabled",true);
//  document.getElementById("idinpinv").value="";  feb 3 2018
	document.getElementById("idinpinverror").innerHTML="";
   var vsup=$('#idviewsup').val();
   if  (document.getElementById("idtextviewdrugerr").innerHTML != "") {return}
   if  (document.getElementById("idtextviewdrug").value == "") 
       {var vdrug="Z";document.getElementById("idtextviewdrugerr").innerHTML = ""}
   else  {var vdrug=$('#idviewdrug').val();} 
   
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();var vexpdt=$('#idviewinpexpdt').val();
   if (document.getElementById('idviewinpexpdterr').innerHTML == "") {
     $('#idtableedit tr').slice(1).remove();
     initallfields()
    getpurchasedata(vsup,vdrug,vstartdt,venddt,vexpdt)
  
   }
})

$(document).on('click','#idviewbtncan',  function(){
  $('[id^=ideditbtnedit]').removeClass("disabled")
  $('#idinvsection').removeClass("hidden")
  document.getElementById("idinpbill").value=""; document.getElementById("idinpbillerror").innerHTML = "";
})
$(document).on('click','#idviewbtnconf',  function(){
	$('#idviewbtnconf').prop("disabled",true);
   if (document.getElementById("idinpbillerror").innerHTML != "") {return}  // already error is there
   var newinvno= document.getElementById("idinpbill").value
   if (newinvno == "") {
        document.getElementById("idinpbillerror").innerHTML = "Invalid Invoice";return}  // already error is there
  
  // update database
   $.post("ph_purchinvupdate.php",
    { ppurchaseid: vpurchaseid, pinvoiceno:newinvno},
    function(result, status){
//    alert(result)
    if (status) {
    
    var  resultdata = JSON.parse(result)
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
           return;}     
        
        document.getElementById("idpatmsg").innerHTML="Invoice Updated Successfully";
			  alert(document.getElementById("idpatmsg").innerHTML);
			  document.getElementById("idpatmsg").innerHTML="";
       
           initallfields()  
           $('#idinvsection').removeClass("hidden") 
          document.getElementById("idinpbill").value=""; document.getElementById("idinpbillerror").innerHTML="";
        
           $('[id^=idinvoiceno]').each(function(i, selected){       // initialize error fields
            var thisid=this.id 
            var temp=document.getElementById(thisid).value; 
             var invchallan=temp+'/'+newinvno;
             $('#'+thisid).val(invchallan)
        })      
                
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
          <label class="radio-inline text-success font16 "><strong>PURCHASE EDIT</strong></label></div>
          
     <div class="col-sm-8">
      <a id="rtmn" href="auropharmamenu.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a></div>
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
    <div id="idviewalldrug" class="col-sm-2"> 
     <label>DRUG NAME:</label>
			<INPUT type ="text" id="idtextviewdrug" placeholder="Type Drug Name" class="cvvlong  form-control"></INPUT>
      <select select size="5" id="idviewdrug"  class="form-control">   
     </select> <span class="centerstrong" id="idtextviewdrugerr"></span>
    </div>   
         
     <div id="identerviewstartdt" class="col-sm-2">
         <label class="control-label">Start Date</label>
       
         <div class="input-group date" id="idviewstartdt" >
					 <INPUT id="idviewinpstartdt" onkeydown="return false" type="text" maxlength="10" class="form-control fldview" name ="nmstartdt"></INPUT>
       <span  class="input-group-addon"><span id="idspanstartdt" class="glyphicon glyphicon-calendar"></span></span> 
    
      </div> 
      </div>
       <div id="identerviewenddt" class="col-sm-2">
         <label class="control-label">End Date</label>
       
         <div class="input-group date" id="idviewenddt" >
					 <INPUT id="idviewinpenddt" onkeydown="return false" type="text" maxlength="10" class="form-control fldview" name ="nmenddt"></INPUT>
       <span  class="input-group-addon"><span id="idspanenddt" class="glyphicon glyphicon-calendar"></span></span> 
      
      </div> 
      </div>
				 <div id="idallinv" class="col-sm-1"> 
     <label>INV NO:</label>
					 <INPUT type ="text" id="idinpinv" placeholder="Enter Invoice:" class="form-control"></INPUT>
       <span class="centerstrong" id="idtextviewdrugerr"></span>
				<span class="centerstrong" id="idinpinverror"></span>
    </div>   
				 
				<!--  <div class="col-sm-1">       
         <label id="lblinv" class="control-label">INVOICE NO:</label>
      
      	<div class="col-sm-2">
      <INPUT type ="text" id="idinpinv" placeholder="Enter Invoice:" class="form-control">
         <span class="centerstrong" id="idinpinverror"></span>
      </div>-->
					
      <div class="col-sm-2 form-group">
         <label class="control-label">Exp Date</label>
				<INPUT id="idviewinpexpdt" type="text" maxlength="5" class="cshort form-control fldview" placeholder="mm/yy"></INPUT>
     <span class="centerstrong" id="idviewinpexpdterr"></span>
      </div> 
			
        
       <div class="col-sm-1"> 
         <label class="control-label"></label>
       <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Search">                                                                                 
      </div>  
           
   </div>
		
          <!--/div-- this one vikas commented out--> 
     
			
    <div id="idinvsection" class="row form-group">              
      
      <div class="col-sm-2">       
         <label id="lblinv" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD BILL NO:</label>
       </div> 
   <div class="col-sm-1">
		 <INPUT type ="text" id="idinpbill" placeholder="Enter Invoice:" class="form-control"></INPUT>
         <span class="centerstrong" id="idinpbillerror"></span>
      </div>
         <div class="col-sm-1"> 
         
					 <INPUT type="button" name="nmpurbtnconf" id="idviewbtnconf" class="btn btn-primary btn-sm"  value= "Confirm"></INPUT>                                                                             
      </div> 
        
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button" onclick="location.href='auropharmamenu.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">
        </div>
			</div>  
   
    <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
     </div>  
   <div class="control-group">&nbsp;</div>
         
      <div>
        
         <table id="idtableedit" class=" table table-bordered table-responsive table-condensed">
    </table>
          
      </div>
   <div class="row form-group">   
      <div class= "col-sm-offset-10 col-sm-2 ">
        <label class=" control-label" >Total Gross Price:</label>
           <INPUT type ="text"  class="form-control" id="idtgross" name ="nminvno" value="" readonly></INPUT>
         </div>
  </div> 
  <div class="row">    
      <div class= "col-sm-offset-10 col-sm-2">
        <label class=" control-label" >Total Tax:</label>
           <INPUT type ="text" step=0.1 min="10" max="200" class="form-control" id="idttax" name ="nmtax" value="" readonly></INPUT>
         </div>
  </div> 
  
  <div class="row">    
    <div class= "col-sm-offset-10 col-sm-2">
   <label class=" control-label" >Total Net Price:</label>
           <INPUT type ="text"  class="form-control" id="idtnet" name ="nmnp" value="" readonly></INPUT>
         </div>
    </div>
   <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button"  name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click  Confirm to accept or Click  Exit to cancel :</div>
       </div> 
       <div class="col-sm-2"> 
          
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                                        
                           
      </div>
 </div> 		     
             
     </div>
   </div>  
     
</body>