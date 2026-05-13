<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
   <script src="jquery.maskedinput.js" type="text/javascript"></script>
 
<style>
  
/* li a:hover  {background-color: blue} commented out as per shoba */

 ul > li a {
    color: #337ab7;
}
/*
a.cursor-help {
    cursor:help
  }
*/  
.req .control-label:after {
  content:"*";
  color:red;
  }
  
fieldset {
    border: 1px  groove #000 !important;

   padding: 0 0.4em 1em .7em !important;
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
  
  .vtop {margin-top:6%;vertical-align:top}
  .vtop1 {margin-top:1%;}  
  .vtop2 {margin-top:14%;}
  

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
   
</script>
</head>
<body>
  
<?php
	
// if(!isset($_SERVER['HTTP_REFERER'])) {
//     echo "access denied "; exit();
//   } 
	
function customError($errno, $errstr,$errfile,$errline) {
//  echo "<b>File Error:</b> [$errno] $errstr $errline<br>";
//  echo "Ending Script";
 $errdesc = "<b>File Error:</b> [$errno] $errstr $errline<br>"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc);  exit(); 
  die();
}
set_error_handler("customError");	
	 
$allbrandnm=array(); $alltype=array(); $allstrength=array();$allgennm=array(); $allgenid=array();

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
     
//     $sql = "SELECT brandname,strength,type  FROM drug1 ORDER BY brandname";   // get all patient
	$sql = "SELECT brandname,strength,type  FROM drug1 ORDER BY brandname"; 
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drug"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
    
    {
      
      while($row = $result->fetch_assoc()) {$allbrandnm[]=$row["brandname"];$allstrength[]=$row["strength"];$alltype[]=$row["type"];}  // get names and id of all patients
     
    }

?>  

  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong> NEW DRUG Entry</strong></h4>
     </div> 
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="ashrammed.php" > <h4 class="pull-right"><strong>Return to Main Menu</strong></h4></a>
     </div>
   </div>
        <div class="control-group">&nbsp;</div> 
   <!--<div class="row ">
     <div class="col-xs-5 col-sm-10 text-success"><h4 ><strong>First, kindly verify whether Patient Name already exist 
			 from "Verify Patient Name box" and then enter New Name to avoid Duplicate Entries </strong></h4>
     </div>-->
     </div>
       <div class="control-group">&nbsp;&nbsp;</div> 
   <div class="row ">
      
     </div>
   </div>
    <div class="control-group">&nbsp;</div> 
    
   <div class="row">
     
    <div class="col-sm-offset-1  col-sm-3">
    <label class="control-label" for="idbrandname">Drug Name:</label>
      
    <select id="idbrandname" name="brandnm[]"  class="form-control">
        <option value="Z"  selected>Select Drug Name</option> 
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($allbrandnm); $i++) { ?> 
        <option value="<?php echo $allbrandnm[$i];?>"><?php echo $allbrandnm[$i];?></option>
        <?php } ?>
    </select>
     </div>
		 
		  <div id="idallgen" class="col-sm-2"> 
    <label for="idgen" style="color: blue">Select Generic Name:</label>
      <select id="idgen" name="nmgen[]"  class="form-control">
        <option value="Z"  selected>Select Generic Name</option> 
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($allgenid); $i++) { ?> 
        <option value="<?php echo $allgenid[$i]; ?>"><?php echo $allgennm[$i];?></option>
        <?php } ?>
    </select>
    </div> 

         <div class=" col-sm-1">
        <label class="control-label">Packs(nos):</label>
     <INPUT type ="text" maxlength="10"  class="form-control" id="idpkchk" name ="nmpkchk">      
     </div> 
       
    

       <div class="control-group"></div>
     
   
     <div class="col-sm-1">
        <label class="control-label" for="idnopk">Nos/pack:</label>
			 <INPUT type ="text" maxlength="10"  class="form-control" id="idnopk" name ="nmnopk" ></INPUT>
       <span class="text-danger" id="idpkerr"></span>
       </div>
     <div class="col-sm-1">
        <label class="control-label" for="idtot">Total(nos):</label>
     <INPUT type ="number" min="1" max="120" class="form-control" id="idtot" name ="nmtot" >
        <span class="text-danger" id="idtoterr"></span>
     </div>
     <div class="col-sm-1">
        <label class="control-label" for="idtype">Type:</label>
       <select id="idtype" name="nmtype"  class="form-control">
       <option value="Z"  disabled selected></option>
        <option>Tab</option>
        <option>Cap</option>
				<option>Liq</option> 
				 <option>Oint</option>
				 <option>Inj</option>
				 <option>Others</option>
       </select>
       <span class="text-danger" id="idtypeerr"></span>
     </div>
        <div class="col-sm-1"> 
    <label class="control-label" for ="idmode">Mode:</label>
      <select id="idmode" name="nmmode"  class="form-control ">
        <option value="Z"  disabled selected></option>
        <option value="A">Oral</option>
        <option value="NA">Application</option>
			  <option value="NA">IV</option>
    </select>
       <span class="text-danger" id="idmodegerr"></span>  
    </div> 
       
     
     </div> 
       <div class="control-group">&nbsp;</div>
<!--			 <div class="row">
 <div class="form-group"> 
   <div class="col-sm-offset-1 col-sm-2"> 
    <label class="control-label" for = "idbldgrp">Bl.Group:</label>     
      <select id="idbldgrp" name="nmbldgrp"  class="form-control ">
        <option value="Z"  disabled selected></option>   //<!-- added by vikas --> 
    <!--    <option value="NK">Not Known</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
         <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option> 
       </select>
       <span class="text-danger" id="idbldgrperr" ></span>
       
    </div>
   <div class="col-sm-2 ">
        <label class="control-label" for="idht">Ht(cms): </label>
       <INPUT type ="number" min="1" max="300.00" class="form-control" id="idht" name ="nmht" >
       <span class="text-danger" id="idhterr"></span>
     </div>
     <div class="col-sm-1 ">
        <label class=" control-label" for="idwt">Wt:</label>
       <!--INPUT type ="number" max="250.00" class="form-control" id="idwt" name ="nmwt"--commented by vikas and added below  
        <INPUT type ="number" min="5" max="300.00" class="form-control" id="idwt" name ="nmwt"> 
       <span class="text-danger" id="idwterr"></span>
     </div>
		 </div>
   </div> -->
    
       <div class="control-group"></div>
<div class="row form-group">        
   
     <div class="req col-sm-offset-1 col-sm-3 form-group">
        <label class="control-label">Manufacturer Name :</label> 
       <textarea class="form-control"  id="idman" name ="nmman" value=""></textarea>
       <span class="text-danger" id="idmanerr" ></span>
       </div>
    
            
      <div class="col-sm-3 form-group">
        <label class="control-label">Subgroup Name:</label>
       <textarea class="form-control" id="idsg" name ="nmsg"></textarea>
        <span class="text-danger" id="idsgerr"></span> 
     </div>
     <!-- <div class="control-group"></div> -->
    
    
         
       <div class=" col-sm-3 form-group">
        <label class="control-label">Supplier Name :</label>
       <textarea class="form-control"  id="idsupp" name ="nmsupp" value=""></textarea>
       <span class="text-danger" id="idsupperr" ></span>
     </div>
      </div>
    
    
    <div class="control-group">&nbsp;&nbsp;</div> 
    <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
  <input type="button" onclick="location.href='ashrammed.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">
        
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click  Confirm to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
         <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" ></INPUT>
        </div>
       </div> 
       <div class="col-sm-2"> <!-- col-sm/offset-2 col-sm-2 --> 
          
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                                        
                           
      </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
       <div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <input type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue">         
       </div>   
 </div>          
 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
      
    </div>
 
</form>
 </div>
</body>
</html>
 
     