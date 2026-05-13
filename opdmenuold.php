<?php 
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
 <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>2505-->
  
 <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">13/5/2019-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>13/5/2019-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>13/5/2019-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script 13/5/2019 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>  
   <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>13/05/19-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>

<style>
_:-moz-tree-row(hover), ul > li a {
font-size: 16px;
     font-family: Arial, Helvetica, sans-serif;
}
 ul > li a {
   color: #3366ff;
}


.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}
.wdth {
    max-width:80%;
}
</style>

<script type="text/javascript">

$(document).ready(function(){
  
$( "li.dropdown").mouseenter(function(){
    
    $(this).children("ul").show();   

    }); 


$( "li.dropdown").mouseleave(function(){
 
    $(this).children("ul").hide();   

    }); 

$( "ul.dropdown-menu li a").mouseenter(function(){
 
    $(this).css("background-color", "green"); 
    $(this).css("color", "white");   

    }); 
$( "ul.dropdown-menu li a").mouseleave(function(){
 
    $(this).css("background-color", "white"); 
    $(this).css("color", "black");     

    }); 

})
</script>
</head>
<body>
<?php
  /*
  if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
*/
$foundfile = False;
while (!$foundfile) {     
$fnum = rand(1, 1709); 
$strf = sprintf('%05d', $fnum);
$filename = './messages/'.$strf.'.htm';
if (file_exists($filename)) {  
// if (file_get_contents($filename) !== False) {
$foundfile = True;}
}
$contentf = file_get_contents($filename);
//  file_put_contents('newFile.txt',
//                  implode('', file('tagged.txt', FILE_SKIP_EMPTY_LINES)));
?>  
  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <div id="idmessage"><?php echo $contentf; ?></div>
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OUTPATIENT RECORDS</strong></h3>
<hr style="border-top: 5px solid #35AE28 !important; " />

  <p></p>
</div>
<nav class="navbar">
  
  <div class="container-fluid">
   <div class="ctr">
    
     <ul class="nav navbar-nav" style="background-color: white">               
      
     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong>PATIENT DETAILS</strong><span class="caret"></span></a>

        <ul class="dropdown-menu">
          <li><a  href="op_newpat.php">New Patient Entry</a></li>
          <li><a  href="op_viewpat.php">View Patient Detail</a></li>
          <li><a  href="op_editviewpat.php">Edit Patient Profile</a></li>
          
       </ul>
     </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong>PATIENT OPD DETAILS</strong><span class="caret"></span></a>
         <ul class="dropdown-menu">
         <li><a id="drug" href="op_opdvisit.php">OPD Visit Detail Entry</a></li>
            <li><a id="drug" href="op_viewopdvisit.php">View OPD Visit Details</a></li>
           <li><a id="drug" href="op_editopdvisit.php">OPD Visit Edit</a></li> 
        <li><a id="drug" href="op_doctorsreport.php">OPD Doctors' Report</a></li> 
             <li><a id="medres" href="op_medicalresearch.php">OPD RESEARCH DATA</a></li>
        </ul>
     </li>    
     <li class="dropdown"><a id="lab" href="op_newlab.php"><strong>OPD LAB TEST</strong><span class="caret"></span></a>
       <li class="dropdown"><a id="rtmn" href="../ashrammed/ashramptmain.php" ><strong>RETURN TO PATIENT RECORDS MENU</strong></a>
        </li> 
      </ul>   
</div>
</div>
     
</nav>

<div id="idcontainer" class="container">

</div> 
</body>
</html>
