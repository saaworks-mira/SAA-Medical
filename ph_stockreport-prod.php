<?php 
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
?>

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
  var drugname=[]; var drugid=[];var drugstrength=[]; var drugtype=[]; var opstk=[]; var lastpricepur=[];var genericname=[];var subgroup=[];
  var tablereport;  var myvar;
  
  

function checkposinarray(array, elm) {     // checks pos of drug in array  
             var upperCaseNames = drugname.map(function(value) {
             return value.toUpperCase();
              });
            var pos = upperCaseNames.indexOf(elm.toUpperCase());
            return pos
}  

function addheader()  {  
  
  var descreport='<thead id="idviewthead"><tr><th class="text-center">Subgroup Name</th><th class="text-center">Generic name</th><th class="text-center">Drug name</th><th class="text-center">Strength</th>'+
  '<th class="text-center">Type</th><th class="text-center">Stock Position</th><th class="text-center">Unit Price</th>'+
			'<th class="text-center">Total Value</th></tr></thead>';
                  
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
function getstockdata(vdrug,vstartdt)  {

//  $.ajaxSetup({async: false});
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth()+1; //January is 0!
   var yyyy = today.getFullYear();
  if (parseInt(mm) < 10) {mm='0'+mm};if (parseInt(dd) < 10) {dd='0'+dd};
   var datestr=dd+'/'+mm+'/'+yyyy;
    	
  if ( (vstartdt==datestr)  && ( vdrug!="Z") ) { // if for current date and sepcific drug then get  stock from drugmaster
	
      $('#idproc').removeClass('hidden')  
			
        var drugval = vdrug.split('--');
        
		id=drugval[0];var vdrugname=drugval[1].substr(4);var vstrength=drugval[2].substr(8);var vdrugtype=drugval[3].substr(4); var vstk=drugval[4].substr(5);
		var vaunitprice=drugval[5].substr(5);var vsubgroup =drugval[7].substr(8);var vgenericname=drugval[6].substr(11);
	
		//			id=drugval[0]; var vdrugname=drugval[1].substr(4);var vstrength=drugval[2].substr(8);
  //       var vdrugtype=drugval[3].substr(4); var vstk=drugval[4].substr(5); var vaunitprice=drugval[5].substr(5);
		var vcost=(vstk*vaunitprice).toFixed(2);
		
        tablereport.row.add( [vsubgroup,vgenericname,vdrugname,vstrength,vdrugtype,vstk,vaunitprice,vcost])    
               .draw(false); 
		 
             tablereport.draw(); 
		    $('#idproc').addClass('hidden')  
		
		           return;  
         } 
	
	
	 
  if ( (vstartdt==datestr)  && ( vdrug=="Z") ) {// if for all drugs then get all stock  from drug master
	   
      for(var i = 0; i < (drugname.length); i++) {
				 var vcost=(opstk[i]*lastpricepur[i]).toFixed(2);
        tablereport.row.add( [subgroup[i],genericname[i],drugname[i], drugstrength[i], drugtype[i], opstk[i],lastpricepur[i],vcost]) 
				  $('#idproc').removeClass('hidden') 
	         }
  
    tablereport.draw(); 
		 $('#idproc').addClass('hidden') 
	       return;
     }
      
  if ( vdrug!="Z")  { //  if sepcific drug and specific date
		   $('#idproc').removeClass('hidden')     
        var drugval = vdrug.split('--')
        var vdrugid=drugval[0]
       
        $.post("ph_getstockdata.php", {
           pdrug:vdrugid, startdt:vstartdt, palldrugs:"n"},
        function(result, status){ 
        
      
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg  
        alert(msg)
         return;} 
         
        var vstock=fields.clsgstk; var vprice=fields.aunitprice; var vsubgroup=fields.subgroup; var vgenericname=fields.genericname;
					
                          //addedby shoba   
        vdrugname= drugval[1].substr(4); vstrength= drugval[2].substr(8); vdrugtype= drugval[3].substr(4); 
					 var vcost=(vstock*vprice).toFixed(2);vsubgroup=drugval[7].substr(8);vgenericname=drugval[6].substr(11); 
					
             tablereport.row.add( [vsubgroup,vgenericname,vdrugname,vstrength,vdrugtype,vstock,vprice,vcost])    
               .draw(false); 
             tablereport.draw();  
			
            $('#idproc').addClass('hidden')                                 //addedby shoba    
       }  // end good status
      else {   // bad status
      msg='Program terminating with error '+ fields.msg  
        alert(msg)
         return;}      
     })   // end post
        
        
   return;    
    }    //all drugs and specific date
   //all drugs and specific date   
  $('#idproc').removeClass('hidden')  
     $.post("ph_getstockdata.php", {
            palldrugs:"y", startdt:vstartdt},
        function(result, status){ 
     
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg   
        alert(msg)
         return;} 
        var aclsgstk=fields.aclsgstk;var aunitprice=fields.aunitprice;
  
            for(var i = 0; i < (drugid.length); i++) {
             var vcost=(aunitprice[i]*aclsgstk[i]).toFixed(2); 
                                               //addedby shoba   
           tablereport.row.add([subgroup[i],genericname[i],drugname[i],drugstrength[i],drugtype[i],aclsgstk[i],aunitprice[i],vcost])    
               .draw(false);  
            
         }
          
          tablereport.draw(); 
         
           $('idtablereport').show();
			
          $('#idproc').addClass('hidden')                                    //addedby shoba                                           
       }  // end good status
       else {msg='Program terminating with error '+ fields.msg      // bad status
        alert(msg)
         return; }
			
     })   // end post 
     
}  
	
function initallfields() {       
    setTimeout(function(){       // run this after 2 seconds so that all the error fields have been available to the Jquery
       $('[id$=err]').each(function(i, selected){       // initialize error fields
       var thisid=this.id 
       document.getElementById(this.id).innerHTML = ""
        })      
 }, 1500);
} 

$(document).ready(function(){ 
   $('#idproc').addClass('hidden')
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

 tablereport=  $('#idtablereport').DataTable( {
        dom: 'Bfrltip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'colvis', 'print'
        ],
      "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ]
   
    } )
  
 
 $(document).on( "change", '#idviewinpstartdt',function(e) {                // added by shoba since the blinking was working when date changed only when the prog is run again fresh
 
     initallfields()
 })
$(document).on( "change", '#idviewdrug',function(e) {
  
  var thisid=this.id
  var thistextid=thisid.substr(0,2)+'text'+thisid.substr(2)
  var thistextiderr=thistextid+'err'
  document.getElementById(thistextid).value=$('#'+thisid+' option:selected').text()
  document.getElementById(thistextiderr).innerHTML="" 
  $('#'+thisid).hide()
})
$(document).on('focus', '.fldview', function(e){  
  
     var textinp = (document.getElementById("idtextviewdrug").value).trim()
     if (textinp == "") {
      document.getElementById("idtextviewdrugerr").innerHTML = "";$('#idviewdrug').hide();return}
    if (  $("#idviewdrug").is(":visible"))   // if its open
      {      
       var upperCaseNames = drugname.map(function(value) {
         return value.toUpperCase();
        });
       
         
        var pos = upperCaseNames.indexOf(textinp.toUpperCase());

    if(pos === -1) {
       document.getElementById("idtextviewdrugerr").innerHTML = "Invalid Drug";}
     else {document.getElementById("idviewdrug").selectedIndex = 0;document.getElementById("idtextviewdrugerr").innerHTML = "";}   
     $('#idviewdrug').hide()
      }
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
		
  $('#idproc').removeClass('hidden')
 
   if  (document.getElementById("idtextviewdrugerr").innerHTML != "") {return}
   if  (document.getElementById("idtextviewdrug").value == "") 
       {var vdrug="Z";document.getElementById("idtextviewdrugerr").innerHTML = ""}
   else  {var vdrug=$('#idviewdrug').val(); } 
 
   var vstartdt=$('#idviewinpstartdt').val();
    
     tablereport.clear();
    tablereport.draw(); $('idtablereport').hide();
  /* var shown = true;
          myvar=setInterval(function() {
               if(shown) {$('.blink').hide(); shown = false;}
                 else {$('.blink').show(); shown = true;}
                },50); */
             
   getstockdata(vdrug,vstartdt) 

   
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
          <label class="radio-inline text-success font16 "><strong>PHARMACY STOCK POSITION</strong></label></div>
          
     <div class="col-sm-6">
      <a id="rtmn" href="auropharmamenu.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a></div>
     </div>
     </div>

    <div id="idview">
  <div id="idcontainer" class="container-fluid">
    <div class="row form-group">
    
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
      
      
       <div class="col-sm-2"> 
         <label class="control-label"></label>
       <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Search">                                                                                 
      </div>  
           
   </div>
         <div id ="idproc" >
           
   <div class="control-group">&nbsp;</div>
       
      <div><h1><span class="tab blink" ><mark>PROCESSING..PLEASE WAIT.. </mark></span></h1>  
			
				</div>
      </div> 
      <div>
        <table id="idtablereport" class="cell-border table table-bordered table-responsive table-condensed">
        </table>         
      </div>
      
     </div>
   </div>  
     
</body>
     