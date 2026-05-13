<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }  
$allpat=array(); $allpatid=array();
$page=$pdob=$pht=$paddr=$psex=$pcatg=$pbldgrp=$pwt=$pallergy="";
$allmedsprescid=""; $allmedslist=array(); $medslistid=array();
$alltestslist=array(); $idtestslist=array();$allmaintmeds0=array();$allmaintmedsid0=array();
$alladmn=array(); 

// Check connection 
      $patselected = $_POST['pid'];
   
     
    $servername = "localhost";
    $username = "vbamba_pharmacy";
    $password = "offering2her";
    $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) 
    { $errdesc = "Connection failed: " . $conn->connect_error;  
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc); $conn->close(); exit(); 
    }
  
      $sql = "SELECT address, dob, age, sex, category, ht, wt, bldgrp, allergy FROM patient
      where patientid = '$patselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$result) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select"; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();
          
          } 
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $dob=$row["dob"]; $age=$row["age"];$sex=$row["sex"]; $catg=$row["category"];
         $ht=$row["ht"];$wt=$row["wt"];$bldgrp=$row["bldgrp"]; $allergy=$row["allergy"];
         $address=$row["address"]; // added by vikas
            $succfail=true;
          $fields = array( "succfail" => $succfail, "dob" => $dob, "age" => $age, "sex" => $sex,
          "catg" => $catg, "ht" => $ht, "wt" => $wt, "bldgrp" => $bldgrp, "allergy" => $allergy, "address" => $address);
          echo json_encode( $fields); 
          $conn->close(); exit(); // added by vikas
    
?>
