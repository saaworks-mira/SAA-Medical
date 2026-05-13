<?php

function customError($errno, $errstr,$errfile,$errline) {
//  echo "<b>File Error:</b> [$errno] $errstr $errline<br>";
//  echo "Ending Script";
 $errdesc = "<b>File Error:</b> [$errno] $errstr $errline<br>"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc);  exit(); 
  die();
}
set_error_handler("customError");

        $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";
// Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for Insert/Modify"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }
   $conn->autocommit(TRUE);

   $sql = "INSERT INTO test1 (name)   
   VALUES ('firstone')";    

     $insertid=$conn->insert_id;
       if (!$conn->query($sql))
        { echo "first one failed";  $conn->close(); 
          exit();     
       } 
   $sql = "INSERT INTO test1 (name)   
   VALUES (''secondone')";    

       $succfail=true ; $insertid=$conn->insert_id;
       if (!$conn->query($sql))
        { echo "second one failed";  $conn->close(); 
          exit();     
       }   
//  $conn->commit();
   
?>
