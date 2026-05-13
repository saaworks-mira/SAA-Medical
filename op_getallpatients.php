 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
<?php
 $testid=array(); $testname=array();$patientid=array();$ptname=array();
 $opddate=array();$opdid=array();$alldata=array();$completion=array();$opdtestid=array();$sex=array();$age=array();
// $pstartdt = $_POST['pstartdt']; $penddt = $_POST['penddt']; 
   
// Check connection 
        // note patient id is the actually the admission id that is passed
     
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

  $sql = "SELECT  distinct patientid, ptname FROM opdtest where completion = 'Y' 
          ORDER by ptname ASC";  
     
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Labs "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close();
          exit(); 
          }
// get all the fields and return to main program
      if ($result->num_rows > 0) 
    {  
      while($row = $result->fetch_assoc()) 
      {$patientid[]=$row["patientid"];$ptname[]=$row["ptname"];
              }  // get names and id of all patients  
    
            $succfail=true;
          $fields = array( "succfail" => $succfail, "ptname" => $ptname, "patientid" => $patientid, "testsfound" => true);
          echo json_encode( $fields); $conn->close(); }
    else {
       $succfail=true;
          $fields = array( "succfail" => $succfail, "testsfound" => false);
          echo json_encode( $fields); $conn->close(); 
    }
    
?>
  