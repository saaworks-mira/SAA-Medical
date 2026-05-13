 <?php
 if(!isset($_SERVER['HTTP_REFERER'])) {
   echo "access denied "; exit();
 } 
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
    $succfail=true;

// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for drug load"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   

   $pchktime = $_POST['pchktime']; $pchkdrugid = $_POST['pchkdrugid'];       
    
   $sql = "SELECT time FROM opdissue where time > '$pchktime' AND drugid = '$pchkdrugid' ";  
   
     $result = $conn->query($sql); // execute sql

     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select opd"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
    $succfail=true;
   if ($result->num_rows > 0)  {           
      $fields = array( "succfail" => $succfail, "txnfound" => true);          
      echo json_encode( $fields); $conn->close(); }
    else
      {       
      $fields = array( "succfail" => $succfail, "txnfound" => false);          
      echo json_encode( $fields); $conn->close(); }    
?>     