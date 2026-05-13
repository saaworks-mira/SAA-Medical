<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }  
     
/// for treatdr
  $popdid = $_POST['popdid'];
        $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for OPD"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   
     
	$sql = "SELECT treatdr FROM opd where opdid=$popdid"; 
     $result = $conn->query($sql); // execute sql
     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Treatdr from OPD"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
    
    { $row = $result->fetch_assoc();$refdr=$row["treatdr"];   $succfail=true;
    $fields = array( "succfail" => $succfail, "treatdr" => $refdr);
          echo json_encode( $fields); $conn->close(); }
  else {
    $errdesc = "Error in get OPD: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Treatdr from OPD"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
  }
?>
