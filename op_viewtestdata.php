<?php
 if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
$opddate=array();$opdtestid=array();$testname=array();$testid=array();$patientid=array();$completion=array();$opdid=array();$opdtestid=array();$age=array();$sex=array();

// Check connection 
      $opdidselected = $_POST['popdid'];
     
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
      
      