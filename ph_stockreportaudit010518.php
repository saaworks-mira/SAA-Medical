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
.blink {
    position:fixed;
    top: 50%;
    left: 45%;

    width: 900px;
    height: 100px;
    color: blue;

 
}  
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

table.dataTable th, table.dataTable.cell-border tbody td {
    border-top: 1px solid  #708090;
    border-right: 1px solid  #708090;  border-left: 1px solid  #708090;}
  

</style>



<script type="text/javascript"> 
  var drugname=[]; var drugid=[];var drugstrength=[]; var drugtype=[]; var opstk=[];
    var  dtofissue=[];var vhospitalname=[];
				  var vqtyissued=[]; var vclsstk=[];
			var	 transtype=[]; var  timefixed=[];
  
  

function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
}  

function addheader()  {  
  
  var descreport='<thead id="idviewthead"><tr><th class="text-center">Drug id</th><th class="text-center">Drug name</th><th class="text-center">Trans dt</th>'+
  '<th class="text-center">Transaction</th><th class="text-center">opn Stk</th><th class="text-center">Trans Qty</th><th class="text-center">Cls stk</th><th class="text-center">Trans type</th>'+
			'<th class="text-center">Time</th></tr></thead>';
                  
   $("#idtablereport").append(descreport);
} 

function populatedrugs()  {
      
  // get all drugs
      $.post("ph_getalldrugs.php", 
        function(result, status){ 
     
        if (status) {
          
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
// below variables are retunbed from backend and contains all the drugs         
       drugname=fields.drugname; drugid=fields.drugid; drugstrength=fields.drugstrength; drugtype=fields.drugtype;opstk=fields.stock;
       lastpricepur=fields.lastpricepur;subgroup=fields.subgroup;genericname=fields.genericname;
      
   }  // end good status
      
 })  // end post    
}   
function getaudittrail(vstartdt,venddt) {
  $.post("ph_getaudittrail.php", {
            pstartdt:vstartdt,penddt:venddt},
        function(result, status){ 
       
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
// below variables are retunbed from backend and contains all the drugs         
       if (fields.rowcount > 0) {  
        
        vdrugid=fields.drugid; vdrugname=fields.drugname;  
      dtofissue=fields.dtofissue; vhospitalname=fields.hospitalname; 
				 vopstk=fields.opstk; vqtyissued=fields.qtyissued; vclsstk=fields.stkafterissue;
				 transtype=fields.transtype;timefixed=fields.timefixed;
      
    
      
     
           var varvdrugname=vdrugname.length
          for(var i = 0; i < (varvdrugname); i++) {
						
           
		//	var			pdtddmmyyyy=purchasedt[i].substr(6,4)+'/'+ purchasedt[i].substr(4,2)+'/'+ purchasedt[i].substr(0,4)
						
						
      var trdtddmmyyyy = dtofissue[i].substr(6,4)+'/'+ dtofissue[i].substr(4,2)+'/'+ dtofissue[i].substr(0,4)
			
					//	alert(vqtyissued[1])
   // var  vexpdt=expdt[i].substr(2,2)+'/'+expdt[i].substr(0,2)
    
// now add to the report table  
            
           tablereport.row.add( [
    vdrugid[i],vdrugname[i],trdtddmmyyyy,vhospitalname[i],
   vopstk[i],vqtyissued[i],vclsstk[i],transtype[i],timefixed[i]]);
//               .draw(false); 
       
					}
			 }
				
          
    
							 
    else {
			alert("No rows Found");$('#idpurbtnsrch').prop("disabled",false);
		      }

     tablereport. draw();  
   $('#idpurbtnsrch').prop("disabled",false);                
    // end good status
  }
				})    
 }  // end post  
				 				 	
			
	
function initallfields() {       
    setTimeout(function(){       // run this after 2 seconds so that all the error fields have been available to the Jquery
       $('[id$=err]').each(function(i, selected){       // initialize error fields
       var thisid=this.id 
       document.getElementById(this.id).innerHTML = ""
        })      
 }, 1500);
} 

$(document).ready(function(){ 
  // $('#idproc').addClass('hidden')
  $('#idviewdrug').hide()
   addheader() 

   populatedrugs()
   var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
 
         $('#idviewinpstartdt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
    var datestr=dd+'/'+mm+'/'+yyyy;        
   $('#idviewinpstartdt').datepicker('setDate', datestr)  
	 $('#idviewinpstartdt').datepicker('setEndDate', datestr) 
	$('#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
    var datestr=dd+'/'+mm+'/'+yyyy;        
   $('#idviewinpenddt').datepicker('setDate', datestr)  
	 $('#idviewinpenddt').datepicker('setEndDate', datestr) 

 tablereport=  $('#idtablereport').DataTable( {
        dom: 'Bfrltip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'colvis', 'print'
        ],
      "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ]
   
    } )
  
 
 $(document).on( "change", '#idviewinpstartdt','#idviewinpenddt',function(e) {                // added by shoba since the blinking was working when date changed only when the prog is run again fresh
 
     initallfields()
 })



$(document).on('keyup click','input[id^=idtextviewdrug]',  function(e) {   // show dropdown on click and char entered
 var keyCode = e.keyCode || e.which; 
 if(e.which == 13) {return}
  var thisid=this.id;
  var thisselid=thisid.substr(0,2)+thisid.substr(6)    
  var thisiderr=thisid+'err' 
   $("#"+thisselid).empty();
  var txt=document.getElementById(thisid).value;
  
  txt=txt.trim(); //remove spaces before and after text
  var checkinput = /^[0-9a-zA-Z%\s\/.-]+$/; 
  if (!checkinput.test(txt) && txt.length > 0)  { // if input has non-alphabet characters
  	   document.getElementById(thisiderr).innerHTML="invalid input"; $('#'+thisselid).hide();
      return;}
  document.getElementById(thisiderr).innerHTML = "";
  var txtreg='^'+txt

    var regvar=new RegExp(txtreg, 'gi');
    var drugsfound=false;

     for (i = 0; i < (drugname.length); i++) {

   	var   pos=drugname[i].search(regvar)  
      if (pos != -1) { //search successful
         drugsfound=true;
         $("#"+thisselid).show(); 
         document.getElementById(thisiderr).innerHTML=""; 
         var dropdown = document.getElementById(thisselid) 
        
         var  opt = drugname[i];  
           var el = document.createElement("option");
           el.textContent = opt;
           el.value = drugid[i].toString()+'--name'+drugname[i]+'--strength'+drugstrength[i]+'--type'+
						 drugtype[i]+'--stock'+opstk[i]+'--price'+lastpricepur[i]+'--genericname'+genericname[i]+'--subgroup'+subgroup[i];  
                                                                     // format is id123--nameceftum--strengthabc--typetab
           dropdown.appendChild(el);
      }     
    }  //end for

  if (!drugsfound) {$('#'+thisselid).hide();document.getElementById(thisiderr).innerHTML="Invalid drug"; }

})

$(document).on('click','#idpurbtnsrch',  function(){
	  var today = new Date();
		
 // $('#idproc').removeClass('hidden')
 
   
 
   var vstartdt=$('#idviewinpstartdt').val();
    var venddt=$('#idviewinpenddt').val();
     tablereport.clear();
    tablereport.draw(); $('idtablereport').hide();
  
             
   getaudittrail(vstartdt,venddt) 

   
})

})


</script>
</head>
<body>
	<?php
//set_error_handler("customError");
/*if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } */
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
        <div class="col-sm-offset-2 col-sm-3">
          <label class="radio-inline text-success font16 "><strong>PHARMACY STOCK AUDIT TRAIL</strong></label></div>
          
     <div class="col-sm-6">
    <a id="rtmn" href="auropharmamenu.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a>
     </div>
     </div>

    <div id="idview">
  <div id="idcontainer" class="container-fluid">
    <div class="row form-group">
    
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
      
      
       <div class="col-sm-2"> 
         <label class="control-label"></label>
       <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Search">                                                                                 
      </div>  
           
   </div>
        
      <div>
        <table id="idtablereport" class="cell-border table table-bordered table-responsive table-condensed">
        </table>         
      </div>
      
     </div>
   </div>  
     
</body>
     