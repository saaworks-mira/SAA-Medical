<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 

  $name=$age=$sex=$refdr="";$testinfo=array();
$ptxtarea = $_POST['ptxtarea']; $patinfo = $_POST['ppatinfo'];$prepdt=$_POST['prepdt']; 
  $refdr=$_POST['prefdr']; 
  $testinfo = explode("--", $patinfo);    // patid--testid--opddate--patname--testname--opdid--opdtestid--age--sex
  $name=$testinfo[3];$age=$testinfo[7];$sex=$testinfo[8]; 
 
?>        
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  
 
<style>

@media print {
   #idadmdt { width: 20% ;}
  .form-control { width: 20% ;
    display: inline; 
  }

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
 
input {
   margin-right:28px;  
}
 .cshort  {max-width:80px;} 
</style>

<body>
<div class="container">    
<h1> </h1>
</div>
<div class="container">
   <img src="mothersymbol.png" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM CLINICAL LABORATORY</strong> </h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

 </div> 
  <div class="container">
 <form class="form-inline">
 <div class=" form-group">
   
   <div class="control-group">&nbsp;</div>       
   <div class="row form-group">
    
    <label for="idname">Patient Name:</label>      
    <input type="text" id="idname" name="name"  class="form-control" value="<?php echo $name; ?> " readonly>
     
        <label class="control-label" for="idage">Age:</label>
     <input type ="text" class="cshort form-control" id="idage"  value="<?php echo $age; ?> " readonly >
     
     
        <label class="control-label" for="idsex">Sex:</label>
     <input type ="text"  class="cshort form-control" id="idsex"  value="<?php echo $sex; ?> " readonly>       
    
      
       </div> 
         <div class="control-group">&nbsp;</div> 
   
   <div class="row form-group">       
        <label class="control-label">Ref Dr :</label>
          <input type ="text" class="form-control" id="idrefdr"  value="<?php echo $refdr; ?> " readonly>     
  
     
        <label class="control-label" for="iddob">Date of Report:</label>
 <input type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmrepdt" 
        placeholder="dd/mm/yyyy" value="<?php echo $prepdt; ?> " readonly>               
        
        </div>
 </div>
    </form> 
     
 <div class="control-group">&nbsp;</div>
    <div class="row  form-group">
			<fieldset>
     <div id="idfile" class="form-control">
			 <?php echo $ptxtarea; ?>			
     </div>
				</fieldset>
    </div>    
  <p></p>
</div>