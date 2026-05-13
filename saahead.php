<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  $name=$age=$sex=$refdr=$case=$bed="";
$ptxtarea = $_POST['ptxtarea']; 
$admid = $_POST['admid'];   // note patient id is the actually the admission id that is passed
     
    $servername = "localhost";
    $username = "shoba";
    $password = "offering2her";
    $dbname = "medical";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) 
    { $errdesc = "Connection failed: " . $conn->connect_error;  
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc); $conn->close();  exit(); 
    }
  $sql = "SELECT  admissionid, caseno, bedno, name, age, sex, refdr FROM admission      
      where admissionid = '$admid'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Adm Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close();
          exit(); 
          }
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $case=$row["caseno"];$bed=$row["bedno"];$name=$row["name"]; $age=$row["age"]; $sex=$row["sex"];
         $refdr=$row["refdr"];
       
?>        
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
 
<style>
  
 @media print {
  #idadmdt { width: 20% ;}
  [class*="col-sm-"] {
    float: left; 
  }
  
  fieldset {page-break-after: always;}
}

 ul > li a {
    color: #337ab7;
}

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

</style>

<body>
<div class="container">    
<h1> </h1>
</div>
<div class="container">
   <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM CLINICAL LABORATORY </h3>
<hr style="border-top: 5px solid #ff0000 !important; " />
<!-- start here for adm details--> 
 <div class=" form-group">
   
   <div class="control-group">&nbsp;</div>       
   <div class="row">
      <div class="col-sm-2">
    <label for="idsn">Sl No:</label>      
    <input type="text" id="idsn" name="sn"  class="form-control" value= " " >
     </div>
   <div class="col-sm-3">
    <label for="idname">Patient Name:</label>      
    <input type="text" id="idname" name="name"  class="form-control" value="<?php echo $name; ?> " readonly>
     </div>
     <div class=" col-sm-1">
        <label class="control-label" for="idage">Age:</label>
     <INPUT type ="text" class="form-control" id="idage"  value="<?php echo $age; ?> " readonly >
     </div>
      <div class=" col-sm-1">
        <label class="control-label" for="idsex">Sex:</label>
     <INPUT type ="text"  class="form-control" id="idsex"  value="<?php echo $sex; ?> " readonly>      
     </div>   
    <div class= "col-sm-2">
        <label class=" control-label" for="idcaseno">CASE NO:</label>
           <INPUT type ="text" class="form-control" id="idcaseno"  value="<?php echo $case; ?> " readonly ></INPUT>    
        </div>
      
         </div> 
         <div class="control-group">&nbsp;</div>       
   <div class="row">
        <div class="col-sm-3 form-group">
        <label class="control-label">Ref Dr :</label>
          <INPUT type ="text" class="form-control" id="idrefdr"  value="<?php echo $refdr; ?> " readonly></INPUT>     
     </div>
      <div class="req col-sm-2">
        <label class="control-label" for="iddt">Date:</label>
        <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob" placeholder="dd/mm/yyyy"></INPUT>
     
     </div>
        </div>
    
<!-- till here -->    
 <div class="control-group">&nbsp;</div>
     <div id="idrecord">
        <textarea class="form-control" rows="40" id="idfile"  ><?php echo $ptxtarea; ?></textarea>
     </div>  
  <p></p>
</div>
<?php } ?>