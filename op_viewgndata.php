<?php

	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
$alldrugname=array(); $alldrugid=array();
// Check connection 
      $gnselected = $_POST['pgn'];
    
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
  
  $sql = "SELECT drugid, drugname FROM drug1
      where genericname = '$gnselected' and enable='E' ORDER by drugname ASC";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
    //      if (!$conn->query($sql)) 
 if (!$result) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select OPD Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close();
          exit(); 
          }
 if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) { 
         $alldrugid[]=$row["drugid"];
         $alldrugname[]=$row["drugname"];
       
      } 
      $succfail=true;
          $fields = array( "succfail" => $succfail, "drugid" => $alldrugid, "drugname" => $alldrugname);
          echo json_encode( $fields); $conn->close(); }
/*
  
     $result = $conn->query($sql); // execute sql
          if (!$result) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Adm Dates "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close();
          exit(); 
          }
// get all the fields and return to main program
      if ($result->num_rows > 0) 
    {  
      while($row = $result->fetch_assoc()) {$allopddt[]=$row["opddt"];$allopdid[]=$row["opdid"]; }  // get names and id of all patients  
    }
            $succfail=true;
          $fields = array( "succfail" => $succfail, "opdid" => $allopdid, "opddt" => $allopddt);
          echo json_encode( $fields); $conn->close(); 
*/
   
// get all the fields and return to main program
     
   /*      $row = $result->fetch_assoc(); $drugname=$row["drugname"];
            $succfail=true;
          $fields = array( "succfail" => $succfail, "drugname" => $drugname);
          echo json_encode( $fields); $conn->close(); */
/*
$sql = "SELECT  opdtestid,patientid, testid,testname, opddate, completion, age, sex from opdtest where opdid = '$opdidselected' ORDER by testname ASC";
        
     $resulttest = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
       { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Mainttest Record "; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
        exit();
         }      
   if ($resulttest->num_rows > 0) 
    {
      while($rowtest = $resulttest->fetch_assoc()) { 
        $opdtestid[]=$rowtest["opdtestid"]; $patientid[]=$rowtest["patientid"]; $testid[]=$rowtest["testid"];$testname[]=$rowtest["testname"];
         $opddate[]=$rowtest["opddate"];$completion[]=$rowtest["completion"];$age[]=$rowtest["age"];$sex[]=$rowtest["sex"]; 
      } 
      $succfail=true;
          $fields = array( "succfail" => $succfail,  "opdtestid" => $opdtestid, "patientid" => $patientid,  "testid" => $testid, "testname" => $testname, 
           "opddate" => $opddate,  "completion" => $completion, "age" => $age, "sex" => $sex, "testsfound" => true);
          echo json_encode( $fields); $conn->close(); }
    else {
       $succfail=true;
          $fields = array( "succfail" => $succfail, "testsfound" => false);
          echo json_encode( $fields); $conn->close(); 
    }
      
*/
    
?>
  