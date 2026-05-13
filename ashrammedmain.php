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
 
$foundfile = False;
while (!$foundfile) {     
$fnum = rand(1, 1709); 
$strf = sprintf('%05d', $fnum);
$filename = './messages/'.$strf.'.htm';
if (file_exists($filename)) {  
$foundfile = True;}
}
$contentf = file_get_contents($filename);    
?>  
  <div class="container">    
<h1> </h1>
</div>
<div class="container">
   <div id="idmessage"><?php echo $contentf; ?></div>
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM MEDICAL RECORDS </strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<nav class="navbar">
  
  <div class="container-fluid">
   <div class="ctr">
    
     <ul class="nav navbar-nav" style="background-color: white">               
      
      
      <li class="dropdown"><a href="opdmenu.php"><strong>OUT-PATIENT DETAIL</strong><span class="caret"></span></a>   <!--class="dropdown-toggle" data-toggle="dropdown"-->

       
     </li>
     <li class="dropdown"><a href="ashrammed.php"><strong>IN-PATIENT DETAIL</strong><span class="caret"></span></a>
        
     </li>    
      
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong>LABORATORY</strong><span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="op_newlab.php">OPD LAB TEST ENTRY/VIEW</a></li>
            <li><a href="ip_newlab.php">INPATIENT LAB TEST ENTRY/ VIEW</a></li>
  
       </ul>
     </li>
    </ul>   
</div>
     
     
</div>
</nav>

<div id="idcontainer" class="container">

</div> 
</body>
</html>
