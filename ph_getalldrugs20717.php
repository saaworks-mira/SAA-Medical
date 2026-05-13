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
  $alldrugnm=array(); $alldrugid=array(); $alldrugtype=array(); $opstk=array(); $lastpricepur=array(); 

       $servername = "localhost";
    $username = "vbamba_pharmacy";
    $password = "offering2her";
    $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for drug load"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   
     
 
     $sql = "SELECT drugid, drugname, strength, type, stock, lastpricepur FROM drug1 where enable = 'E' ORDER BY drugname";   // get all patient
     $result = $conn->query($sql); // execute sql
 // july19   if (!$conn->query($sql)) 
        if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$alldrugnm[]=$row["drugname"];$alldrugid[]=$row["drugid"];
      $alldrugstr[]=$row["strength"];$alldrugtype[]=$row["type"];$opstk[]=$row["stock"];$lastpricepur[]=$row["lastpricepur"];      
                                                
                                           }  // get names and id of all drugs
    
    }
   else
   {$errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs Empty Table"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
   }
   
    $succfail=true;
          $fields = array( "succfail" => $succfail,  
           "drugid" => $alldrugid, "drugname" => $alldrugnm, "drugstrength" => $alldrugstr, "drugtype" => $alldrugtype,
           "lastpricepur" => $lastpricepur, "stock" => $opstk);
          echo json_encode( $fields); $conn->close();
 
?>     