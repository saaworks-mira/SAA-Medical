<?php
 if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
$testname=array();$testid=array();

     
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

$sql = "SELECT  testid,testname from labtest";
        
     $resulttest = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
       { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Labs Record "; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
        exit();
         }      
   
      while($rowtest = $resulttest->fetch_assoc()) { 
       $testid[]=$rowtest["testid"];$testname[]=$rowtest["testname"];
      } 
      $succfail=true;
          $fields = array( "succfail" => $succfail,  "labtestid" => $testid, "labtestname" => $testname );     
      echo json_encode( $fields); $conn->close();
?>    
      
      