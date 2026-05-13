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
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 

    $purchaseid=array();
   
        $purchaseid = $_POST['ppurchaseid'];$pinvno = $_POST['pinvoiceno'];
        

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
   $conn->autocommit(FALSE);
  $pinvno=$conn->real_escape_string($pinvno);
   for ($i = 0; $i < count( $purchaseid); $i++) {
   $sql = "update purchase set invoiceno= '$pinvno' where purchaseid='$purchaseid[$i]'";
   $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update PurchaseRecord with Invoice Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
   }

  $conn->commit();
   $errdesc = "Record update successful. Click on continue button" ; $succfail=true;$operation="Update";
    $desc = array( "succfail" => $succfail, "opration" => $operation,  "msg" => $errdesc); 
     echo json_encode( $desc); $conn->close();   
?>
