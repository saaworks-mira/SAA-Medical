<?php

	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 

// Check connection 
      $opdselected = $_POST['pid'];
     
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
       echo json_encode($desc); $conn->close();  exit(); 
    }
  
  $sql = "SELECT  opdid, patientid, name, address, dob, age,sex,category,opddt, refdr, treatdr, ht, wt, bldgrp, bp, 
       temp,pulse,resp,allergy, complaint,findings,medpresc, patientid FROM opd
      where opdid = '$opdselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select OPD Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close();
          exit(); 
          }
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $opdid=$row["opdid"];$patientid=$row["patientid"];$name=$row["name"];$dob=$row["dob"]; $age=$row["age"];$sex=$row["sex"];
         $catg=$row["category"];$opddt=$row["opddt"];$refdr=$row["refdr"];$treatdr=$row["treatdr"];$resp=$row["resp"];
         $ht=$row["ht"];$wt=$row["wt"];$bldgrp=$row["bldgrp"];$bp=$row["bp"]; $pulse=$row["pulse"];$allergy=$row["allergy"];
          $temp=$row["temp"]; $complaint=$row["complaint"];$cf=$row["findings"];$address=$row["address"]; $patientid=$row["patientid"];
          $medpresc=$row["medpresc"];

            $succfail=true;
          $fields = array( "succfail" => $succfail, "patientid" => $patientid,"opdid" => $opdid,"name" => $name,"dob" => $dob, "age" => $age, "sex" => $sex,
          "catg" => $catg, "opddt" => $opddt, "refdr" => $refdr, "treatdr" => $treatdr, "ht" => $ht, "wt" => $wt, "pulse"=>$pulse,
          "resp"=>$resp, "allergy" => $allergy, "bldgrp" => $bldgrp, "bp" => $bp, "temp" => $temp, "complaint" => $complaint,
           "cf"=>$cf,  "address" => $address,"patientid" => $patientid,"medpresc"=> $medpresc);
          echo json_encode( $fields); $conn->close(); 
    
?>
  