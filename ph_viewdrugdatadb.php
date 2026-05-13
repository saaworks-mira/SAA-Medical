 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
<?php
  

// Check connection 
      $drugselected = $_POST['did'];
     
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
  $drugselected=$conn->real_escape_string($drugselected);
  $sql = "SELECT  drugname, strength, type, genericname,subgroup,lastpricepur FROM drug1
      where drugid = '$drugselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$result) //not executed
         { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Connection on Select Adm Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();
          }
// get all the fields and return to main program
     
         $row = $result->fetch_assoc(); $drugname=$row["drugname"];$strength=$row["strength"]; $type=$row["type"];$genericname=$row["genericname"];
         $subgroup=$row["subgroup"];$lastpricepur=$row["lastpricepur"];

            $succfail=true;
          $fields = array( "succfail" => $succfail, "did" => $drugselected, "drugname" => $drugname,"strength" => $strength, "type" => $type, "genericname" => $genericname,
          "subgroup" => $subgroup,"lastpricepur"=> $lastpricepur);
          echo json_encode( $fields); $conn->close(); 
    
?>
  