<?php

	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 


 $allopdid=array(); $allopddt=array();

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
       echo json_encode($desc); $conn->close();  exit(); 
    }
  
  $sql = "SELECT opdid, opddt FROM opd where patientid = '$patselected'  ORDER BY opdid DESC";  
     
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
    
?>
  