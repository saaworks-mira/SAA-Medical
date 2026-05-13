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
  

<style>

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
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS </h3>
<hr style="border-top: 5px solid #35AE28 !important; " />

  <p></p>
</div>
<nav class="navbar">
  
  <div class="container-fluid">
   <div class="ctr">
    
     <ul class="nav navbar-nav" style="background-color: white">               
      
     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MASTER<span class="caret"></span></a>

        <ul class="dropdown-menu">
          <li><a href="ph_drugmaster.php">DRUG</a></li>
         <li><a href="ph_editdrugmaster.php">EDIT DRUG DETAIL</a></li>
          
       </ul>
     </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PURCHASE<span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a id="pat" href="ph_purchase.php">PURCHASE ENTRY/VIEW</a></li>
           <li><a href="ph_purchase-edit.php">EDIT PURCHASE</a></li>
         <!-- <li><a href="">PURCHASE ADJUSTMENTS</a></li>
          <li><a href="">VIEW ADMISSION DETAIL</a></li>
           <li><a href="loginedit.php">EDIT ADMISSION DETAIL</a></li> -->
          
            
        </ul>
     </li>    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STOCK TRANSFER<span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a id="pat" href="ph_issue.php">STK TRANSFER  ENTRY / VIEW</a></li>
           
          <li><a href="ph_issue-edit.php">TRANSFER EDIT</a></li>
            <li><a href="ph_mainstkadj.php">MAIN STOCK ADJUSTMENT ENTRY</a></li>
          <li><a href="ph_opdpharma.php">OPD PHARMACY</a></li>        

         
        </ul>
     </li> 
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">REPORTS<span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="ph_purchase.php">PURCHASE/VIEW REPORT</a></li>
            <li><a href="ph_issue.php">ISSUE/VIEW REPORTS</a></li>
           <li><a href="ph_stockreport.php">STOCK  REPORTS</a></li>
           <li><a href="ph_purchase.php">EXPIRY DATE  REPORTS</a></li>
 
       </ul>
    . </li>
       <li class="dropdown"><a id="rtmn" href="../ashrammed/ashrammedmain.php" >RETURN TO MAIN MENU</a>
        </li> 
      </ul>   
</div>
</div>
     
</nav>

<div id="idcontainer" class="container">

</div> 
</body>
</html>
