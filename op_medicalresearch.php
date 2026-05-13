<!DOCTYPE html>
<html lang="en">
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

  <!-- JQuery -->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>

 
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
   .font16 {font-size:16px}
input.cvlong {
  width: 200px;
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
	.greyclr {color: brown}
/* #idtable th { text-align: center;width:25%; padding-left:0px;padding-right:0px;}   */

 /*#idtable { width:85%;} */
 
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
   var vcategory=[]; var vnumbers=[]; var tablegetdatarep; var tabledetailrep;  // vikas
   var vashram=[]; var vnashram=[]; var vsubgroup=[];
//   var vpatientname=[]; var vdrugname=[]; var vamount=[]; var vcategory=[];

function getmrdatano(fsubgroup,fstartdt,fendt)  {
   
   tablegetdatarep.clear().draw().order( [ 0, 'asc' ] );;
  $.post("ph_getmrdatanocc.php", {
    
  psubgroup:fsubgroup,pstartdt:fstartdt,penddt:fendt},
        function(result, status){ 
 //       alert(result)
        if (status) {
           $('#idgraphbtn').removeClass('hidden') ;
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
       vsubgroup=[];  vashram=[];  vnashram=[]; var vtot=[]; var vamt=[]; var vnamt=[];
        
       if (fields.rowcount > 0) {  
          
          vsubgroup=fields.subgroups; vashram=fields.pashram;  vamt=fields.amt; vnashram=fields.pnashram; vnamt=fields.namt;
         var totalrows=vsubgroup.length
//         alert(vamt.length)
        for(var i = 0; i < totalrows; i++) {
          
            vtot[i]=(vashram[i]*10+vnashram[i]*10)/10    
            tablegetdatarep.row.add([
       vsubgroup[i],vashram[i],vamt[i],vnashram[i],vnamt[i],vtot[i]])
//               .draw().order( [ 0, 'asc' ] );
          
    
         
          }  // end for
      }  // end if rows > 
    
             tablegetdatarep.draw().order( [ 0, 'asc' ] );  
                   
   }  // end good status
  
  } )    
   // end post  
    
    
.fail(function(xhr, status, error) {
       alert("fail");alert(xhr.status)
			  alert("kindly contact programmmer")
          $(document).off()
         return;
    })
  }	
  /* shoba 2308 */
function getmrdetail(fsubgroup,fstartdt,fendt)  {
  tabledetailrep.clear().draw().order( [ 0, 'asc' ] );;
 // $.post("ph_getmrdetailvik.php", {
     $.post("ph_getmrdetailsh.php", {
  psubgroup:fsubgroup,pstartdt:fstartdt,penddt:fendt},
        function(result, status){ 
//  alert (result)
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
          
       vsubgroup=[]; var vpatientname=[]; var vdrugname=[]; var vamount=[]; var vcategory=[];
          
       if (fields.rowcount > 0) {  
          
          vsubgroup=fields.subgroups; vpatientname=fields.patientname; vdrugname=fields.drugname; vamount=fields.amount; vcategory=fields.category;
        
        var totalrows = vsubgroup.length
        for(var i = 0; i < totalrows; i++) {
          
             tabledetailrep.row.add([
    vsubgroup[i],vpatientname[i],vcategory[i],vdrugname[i],vamount[i]])
 
    
         
          }  // end for
      }  // end if rows > 
    
           tabledetailrep.draw().order( [ 0, 'asc' ] ); 
                   
   }  // end good status
  
  } )    
   // end post  
    
    
.fail(function(xhr, status, error) {
       alert("fail");alert(xhr.status)
			  alert("kindly contact programmmer")
          $(document).off()
         return;
    })
  }	
 
 
function addheader1()  {  
   /*  var descreport1='<thead id="idviewthead"><tr><th class="text-center">Subgroup Name</th><th class="text-center">Name of Category</th><th class="text-center">Categorywise nos</th> </tr></thead>';*/
  
 // shoba's doubt
 var descreport1='<thead id="idviewthead"><tr><th class="text-center">Subgroup Name</th><th class="text-center">Ashramite nos</th><th class="text-center">Amt for Ashramites</th><th class="text-center">Non-Ashramite nos</th><th class="text-center">Amt for Non-Ashramites</th>><th class="text-center">Total Nos</th></tr></thead>';
 
	//	'<th class="text-center">Total Value</th></tr></thead>';
  $("#idtbldatarep").append(descreport1);
}
  function addheader2()  {  
  
 /*var descreport2='<thead id="idviewthead"><tr><th class="text-center">Subgroup Name</th><th class="text-center">Patient name</th><th class="text-center">Age</th><th class="text-center">Drug name</th><th class="text-center">Strength</th>'+
  '</tr></thead>';*/
	//	'<th class="text-center">Total Value</th></tr></thead>';  //shoba 2808
          var descreport2='<thead id="idviewthead"><tr><th class="text-center">Subgroup Name</th><th class="text-center">Patient name</th><th class="text-center">Category</th><th class="text-center">Drug name</th><th class="text-center">Amount</th>'+
  '</tr></thead>';         
   $("#idtbldtlrep").append(descreport2);
} 
 
// pie chart
function initallfields() {
      var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1; //January is 0!
 var yyyy = today.getFullYear();
 
         $('#idviewinpstartdt,#idviewinpenddt').datepicker({
         format: 'dd/mm/yyyy'    
       })  
     
    var datestr=dd+'/'+mm+'/'+yyyy;        
  
  $('#idviewinpstartdt,#idviewinpenddt').datepicker('setDate', datestr)  
  
$('#idgetdatadiv').addClass('hidden');
 $('#piediv').addClass('hidden');
 $('#piediv2').addClass('hidden');   //shoba adds
 $('#iddetaildiv').addClass('hidden');
 $('#idgraphbtn').addClass('hidden')                                 //shoba 22/08
     $('#idviewinpstartdt,#idviewinpenddt').datepicker('setEndDate', datestr);
	     
}  
  
$(document).ready(function(){
  addheader1() 
  addheader2() 
   initallfields()
//  $('#idgetdatadiv').removeClass('hidden');
//   addfirstrow()
       tablegetdatarep=  $('#idtbldatarep').DataTable( {
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
            null,
            null,
            null
        ] 
  
 } )

 tabledetailrep=  $('#idtbldtlrep').DataTable( {
     
        dom: 'Bfrltip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'colvis', 'print'
        ],
      "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ],
 //shoba2808
   "aoColumns": [
            null,
            null,           
            null,
            null,
            null
        ]

 })

 initallfields()     
		
$(document).on('click', '#idgetdatabtn',  function(e) {
  $('#piediv').addClass('hidden');
   $('#piediv2').addClass('hidden');  //shoba adds
  $('#idgetdatadiv').removeClass('hidden');
 $('#iddetaildiv').addClass('hidden');
                         //shoba 22/08
     var tsubgroup=$('#idsg').val(); 
	 
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();
  
   getmrdatano(tsubgroup,vstartdt,venddt)
})
  
$('#idsg').change(function(){
    
     $('#idgraphbtn').addClass('hidden');  
  })
$('#idviewinpstartdt').focus(function(){
    
     $('#idgraphbtn').addClass('hidden');  
 })
$('#idviewinpenddt').focus(function(){
    
     $('#idgraphbtn').addClass('hidden');  
  })

$(document).on('click', '#idgraphbtn',  function(e) {
//   Chart.defaults.global.legend.display = false;   //here vikas 0825 this will show the colors if you uncomment
  $('#idgetdatadiv').addClass('hidden');
  $('#iddetaildiv').addClass('hidden');
  var vcolor=[]
  if((vsubgroup.length) == 1) {
    $('#idgetdatadiv').addClass('hidden');
  $('#iddetaildiv').addClass('hidden');
  var vcolor=[]
  $('#piediv').removeClass('hidden');
   $('#pieChart').remove(); // this is my <canvas> element
  $('#piediv2').removeClass('hidden');
   $('#pieChart2').remove(); // this is my <canvas> element

   $('#piediv').append('<canvas id="pieChart" ></canvas>');
  
   $('#piediv2').append('<canvas id="pieChart2"></canvas>');
    $('#piediv2').addClass('hidden');
 
   var singlegroup=[];
    singlegroup[0]=vashram[0]
    singlegroup[1]=vnashram[0]
  var letters = '0123456789ABCDEF';
  
 for (var j = 0; j < singlegroup.length; j++) {
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  vcolor[j]=color
}
// till here to get colors 
 document.getElementById("spantxt").innerHTML = "<b>ASHRAMITES/NON-ASHRAMITES<b>";
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Ashramites","Non-Ashramites"],
        datasets: [
            {
                data: singlegroup,
               backgroundColor: vcolor,
              hoverBackgroundColor:vcolor

            }
        ]
    },
    options: {
        responsive: true
    }
})   

  }
  else
  { 
 
  $('#piediv').removeClass('hidden')
   $('#pieChart').remove(); // this is my <canvas> element
  $('#piediv2').removeClass('hidden');
   $('#pieChart2').remove(); // this is my <canvas> element
   
   $('#piediv').append('<canvas id="pieChart" style="width="300" height="300";></canvas>');  //here vikas 0825 this will adjust the size
  
   $('#piediv2').append('<canvas id="pieChart2" style="width="300" height="300";></canvas>');
    $('#piediv2').removeClass('hidden');
  var letters = '0123456789ABCDEF';
  
 for (var j = 0; j < vsubgroup.length; j++) {
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  vcolor[j]=color
}
// till here to get colors 
    document.getElementById("spantxt").innerHTML = "<b>ASHRAMITES<b>";
// document.getElementById("pieChart").innerHTML = "";  document.getElementById("pieChart2").innerHTML = "";  
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: vsubgroup,
        datasets: [
            {
                data: vashram,
               backgroundColor: vcolor,
               hoverBackgroundColor:vcolor

            }
        ]
    },
    options: {
        responsive: true
    }
})   

// till here pie chart  
vcolor=[]
   $('#piediv2').removeClass('hidden');
  var letters = '0123456789ABCDEF';
   
    for (var k = 0; k < vsubgroup.length; k++) {
  var color = '#';
  for (var q = 0; q < 6; q++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  vcolor[k]=color
}
document.getElementById("pieChart2").innerHTML = "";  document.getElementById("pieChart").innerHTML = "";  
var ctxP2 = document.getElementById("pieChart2").getContext('2d');

var myPieChart2 = new Chart(ctxP2, {
    type: 'pie',
    data: {
        labels: vsubgroup,
        datasets: [
            {
                data: vnashram,
               backgroundColor: vcolor,
               hoverBackgroundColor:vcolor

            }
        ]
    },
    options: {
        responsive: true
    }
})  
} 
})                

$(document).on('click', '#iddetailbtn',  function(e) {

    $('#piediv').addClass('hidden');
   $('#piediv2').addClass('hidden');  //shoba adds
 $('#idgetdatadiv').addClass('hidden');
 // $('#idtbldatarep').addClass('hidden');
  $('#iddetaildiv').removeClass('hidden');
  $('#idgraphbtn').addClass('hidden') ;                        //shoba 22/08
     var tsubgroup=$('#idsg').val(); 
	 
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();
//  tabledetailrep.clear().draw();
  //   tablereport.clear();
   getmrdetail(tsubgroup,vstartdt,venddt)
}) 
  
$(document).on('click','#idpatbtnpharmacy', function(){   // if cancel then set option to view and init all fields 
    
         location.href = "auropharmamenu.php";
          
})


  })
</script>
</head>
<body>
 <?php
  $allsg=array(); 

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
		$sql = "SELECT  distinct subgroup FROM drug1 order by subgroup ASC";   // get all doctors
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Doctor"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          $conn->close(); exit();
       }
     if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) { $allsg[]=$row["subgroup"];}  // get names and id of all patients
    }
	 
  $conn->close();
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
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>View subgroup related Informations</strong></h4>
     </div> 
      
       <!-- <div class="text-success">
          <a id="rtmn"  href="op_opdvisit.php" ><h5><strong> Click to OPD VISIT ENTRY</strong></h5></a>                   // shoba 09/07/18.  Removed the Return to the Menu  elemtn and given the href
            </div>      -->                                                                                                       
       <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>                             
   </div>
    </div>
    <div class="control-group">&nbsp;</div> 
    <div class="row form-group">
   <div class="row">
    
  <!--     <div class="col-sm-3"> 
    <label class="control-label" for="idtype">Type:</label>
      
   <select id="idtype" name="typenm"  class="form-control ">
        <option value="Z"   selected>ALL</option>
        <option value="Tab">DIABETIC</option>
        <option value="Cap">HYPERTENDION</option>
        <option value="Liq">CARDIOVASCULAR</option>
        <option value="Oint">CANCER</option>
         <option value="Inj">ARTHRITIS</option>
        <option value="Pdr">VIT- D DEFICIENCY</option>
		    <option value="Others">Others</option>
     
       </select>
       <span class="text-danger" id="idtypeerr"></span> 
     </div>-->
    <div id="idallsg" class="col-sm-3"> 
    <label class="control-label">SUBGROUP NAME:</label>
      <select id="idsg" name="nmsg[]"  class="form-control">   
        <option value="Z"  selected>ALL Subgroup</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($allsg); $i++) { ?> 
        <option value="<?php echo $allsg[$i]; ?>"><?php echo $allsg[$i];?></option>
        <?php } ?>
    </select>
       <span class="text-danger" id="idsgerr"></span>
    </div> 
    
   <div id="identerviewstartdt" class="col-sm-3">
         <label class="control-label">Start Date</label>
       
         <div class="input-group date" id="idviewstartdt" >
     <input id="idviewinpstartdt" onkeydown="return false" type="text" maxlength="10" class="form-control fldview" name ="nmstartdt">
       <span  class="input-group-addon"><span id="idspanstartdt" class="glyphicon glyphicon-calendar"></span></span> 
    
      </div> 
      </div>
       <div id="identerviewenddt" class="col-sm-3">
         <label class="control-label">End Date</label>
       
         <div class="input-group date" id="idviewenddt" >
     <input id="idviewinpenddt" onkeydown="return false" type="text" maxlength="10" class="form-control fldview" name ="nmenddt">
       <span  class="input-group-addon"><span id="idspanenddt" class="glyphicon glyphicon-calendar"></span></span> 
      
      </div> 
      </div>
      
      
   <!--    <div id="idalladms" class="col-sm-4"> 
   <label>subgroup NAME:</label>
       <INPUT type ="text" id="idtextentrypat" placeholder="First Click here to list Generic names" class="cvvlong  form-control"></INPUT>
      <select select size="10" id="identrypat"  class="form-control">  
     </select>  <span class="text-danger centerstrong" id="idtextentrypaterr"></span> 
    </div> -->
       
      
       <div class=" col-sm-1"> 
         <label class="control-label">&nbsp;&nbsp;</label>
       <input type="button" name="nmgetdatabtn" id="idgetdatabtn" class="btn btn-primary btn-sm"  value= "Get Data">                                                                                 
      </div>  
       <div class=" col-sm-1"> 
         <label class="control-label">&nbsp;&nbsp;</label>
       <input type="button" name="nmgraphbtn" id="idgraphbtn" class="btn btn-primary btn-sm"  value= "Graphic view">                                                                                 
      </div>
            <div class=" col-sm-1"> 
         <label class="control-label">&nbsp;</label>
       <input type="button" name="nmdetailbtn" id="iddetailbtn" class="btn btn-primary btn-sm"  value= "Detail Search">                                                                                 
      </div>  
   </div>
      
     </div>
     <div id="piediv"><span id="spantxt" class='text-primary'><strong>Ashramites Chart</strong></span><canvas id="pieChart" ></canvas></div>
   <div id="piediv2"><span class='text-primary'><strong>NON ASHRAMITES</strong></span><canvas id="pieChart2" ></canvas></div>
     <div id="idgetdatadiv">
        <div>
        <table id="idtbldatarep" class=" table table-bordered table-responsive table-condensed">
    </table>
       </div> 
      </div> 
     <div id="iddetaildiv">
     <div>
        <table id="idtbldtlrep" class=" table table-bordered table-responsive table-condensed">
    </table>
       </div> 
      </div> 
          
</div>
</form>
   </div>
</body>
</html>  
       