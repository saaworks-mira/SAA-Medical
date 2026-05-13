 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
<?php
  

// Check connection 
      $drugselected = $_POST['drugname'];
     
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
  
 $sql = "SELECT strength,type from drug1 where drugname = '$drugselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) //not executed
         { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Connection on Select Adm Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();
          }
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $strength=$row["strength"];$type=$row["type"]; 

            $succfail=true;
          $fields = array( "succfail" => $succfail, "drugid" => $drugselected, "strength" => $strength,"type" => $type);
          echo json_encode( $fields); $conn->close(); 
    ​?>
  