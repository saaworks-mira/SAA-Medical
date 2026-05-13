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

$(document).ready(function(){ 
  $('#idno').val('');
  $('#idno').prop('readonly', true); 

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



$(document).on('change','#idviewdoc',  function(){
    document.getElementById("idopd").options.length = 0;
    document.getElementById("idno").value=" ";
}) 
$(document).on('focus','#idno',  function(){
  
   var vdoc=$('#idviewdoc').val();  
   
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();
   var vgetcnt="y"; 
  //  alert(vstartdt); alert(venddt);
//$('#idopd').prop("disabled", true);
   document.getElementById("idopd").options.length = 0;
          if (vdoc != "Z") {
    $.post("op_getdoctorsdata.php", {
            pdoc:vdoc, pgetcnt:vgetcnt, pstartdt:vstartdt, penddt:venddt})
      .done(function(result, status){
 //  alert(result)
        if (status) {
           
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
 //      var totalrows=fields.rowcount
         document.getElementById("idno").value=fields.totalcnt;
                     
   }  // end good status
  
       
 })  // end done 
.fail(function(xhr, status, error) {
       alert("fail");alert(xhr.status);alert(xhr.error)
			  alert("kindly contact programmmer")
          $(document).off()
         return;
    })
}
})

   
$(document).on('click','#idpurbtnsrch',  function(){
 
   var vdoc=$('#idviewdoc').val();  
   var name=[];
   var vstartdt=$('#idviewinpstartdt').val();var venddt=$('#idviewinpenddt').val();
   var vgetcnt="n"; 
//$('#idopd').prop("disabled", true);
   document.getElementById("idopd").options.length = 0;
 /*     var select = document.getElementById('idopd')
      var el = document.createElement("option");
      var opt = "Select Date";           
      el.textContent = opt;
      el.value = "Z";
      select.appendChild(el);
*/
    if (vdoc != "Z") {
    $.post("op_getdoctorsdata.php", {
            pdoc:vdoc, pgetcnt:vgetcnt, pstartdt:vstartdt, penddt:venddt})
      .done(function(result, status){
        if (status) { 
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
        
         return;}
         name=fields.name;    var select = document.getElementById('idopd');
       for(var i = 0; i < (name.length); i++) {
            
            var  opt = name[i]
           var el = document.createElement("option");
          
           el.textContent = opt;
           select.appendChild(el);          
          }
                     
   }  // end good status
  
       
 })  // end done 
.fail(function(xhr, status, error) {
       alert("fail");alert(xhr.status);alert(xhr.error)
			  alert("kindly contact programmmer")
          $(document).off()
         return;
    })
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
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><a id="rtmn" href="http://medical-sriaurobindoashrammed985614.codeanyapp.com/ashrammed/ashrammedmain.php" ><h3 ><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong></h3></a>
    <hr style="border-top: 5px solid #ff0000 !important; ">

  <p></p>
</div>

<div id="idcontainer" class="container">
<form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>View Patient OPD Visit Information</strong></h4>
     </div> 
           
      <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="op_opdvisit.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>
     </div>
</div>
    </div>
    <div class="control-group">&nbsp;</div> 
  
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
    
      <div class=" req col-sm-2">
        <label class="control-label" for="idno">NO. OF PATIENTS:</label> 
        
          <INPUT type ="text" maxlength="7" class="form-control" id="idno" name ="nmno" value="" ></INPUT>       
        
        <div class="col-sm-1"> 
         <label class="control-label"></label>
        <input type="button" name="nmpurbtnsrch" id="idpurbtnsrch" class="btn btn-primary btn-sm"  value= "Detail Search">                                                                                 
        </div>  
      </div>

      <div id="idviewallpat" class="col-sm-3">
         <label class="control-label">PATIENT NAMES:</label>
           <select id="idopd" name="nmadmns[]"  class="form-control">
        <option value="Z"  selected></option>
        </select> 
      </div>
  
                     
     </div>
   </div>  
</body>
     
