 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
<?php
  

// Check connection 
      $supselected = $_POST['did'];
     
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
  $supselected=$conn->real_escape_string($supselected);
  $sql = "SELECT  suppliername, address FROM supplier
      where supplierid = '$supselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$result) //not executed
         { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Connection on Select Adm Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();
          }
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $suppliername=$row["suppliername"];$address=$row["address"]; 
       

            $succfail=true;
          $fields = array( "succfail" => $succfail, "did" => $supselected, "suppliername" => $suppliername,"address" => $address);
          echo json_encode( $fields); $conn->close(); 
    
?>
  