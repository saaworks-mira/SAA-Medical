<?php
 
	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
	


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
  $patselected=$conn->real_escape_string($patselected);
  $sql = "SELECT  name, dob, age,sex,category, ht, wt, bldgrp, history, allergy, address FROM patient
      where patientid = '$patselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) //not executed
         { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Connection on Select Adm Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();
          }
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $name=$row["name"];$dob=$row["dob"]; $age=$row["age"];$sex=$row["sex"];
         $catg=$row["category"];$ht=$row["ht"];$wt=$row["wt"];$bldgrp=$row["bldgrp"];$allergy=$row["allergy"];    
          $history=$row["history"];
         $address=$row["address"]; 

            $succfail=true;
          $fields = array( "succfail" => $succfail, "patid" => $patselected, "name" => $name,"dob" => $dob, "age" => $age, "sex" => $sex,
          "catg" => $catg, "ht" => $ht, "wt" => $wt,"history"=>$history, "allergy" => $allergy, "bldgrp" => $bldgrp,"address" => $address);
          echo json_encode( $fields); $conn->close(); 
    
?>
  