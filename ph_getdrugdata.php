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
  $alldrugnm=array(); $alldruggn=array();$alldrugid=array(); $alldrugtype=array(); $alldrugstr=array(); $allsuppliernm=array(); $allsupplierid=array();
  $lastdatepur=array(); $lastsuppur=array(); $lastpricepur=array(); $lastpriceperpk=array(); $mindatepur=array(); $minsuppur=array(); $minpricepur=array();
   $maxdatepur=array(); $maxsuppur=array(); $maxpricepur=array();$opstk=array();$nondiscprice=array();

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
     
 
     $sql = "SELECT drugid, drugname, strength, type, genericname, lastdatepur, lastsuppur, lastpricepur, nondiscprice, lastpriceperpk, mindatepur, minsuppur, minpricepur,
      maxdatepur, maxsuppur, maxpricepur,stock FROM drug1 where enable = 'E' ORDER BY drugname";   // get all patient
     $result = $conn->query($sql); // execute sql
 //    if (!$conn->query($sql))
      if (!$result)  
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$alldrugnm[]=$row["drugname"];$alldrugid[]=$row["drugid"]; 
      $alldrugstr[]=$row["strength"];$alldrugtype[]=$row["type"];$alldruggn[]=$row["genericname"];
      $lastdatepur[]=$row["lastdatepur"]; $lastsuppur[]=$row["lastsuppur"]; $lastpricepur[]=$row["lastpricepur"];   $lastpriceperpk[]=$row["lastpriceperpk"];
      $mindatepur[]=$row["mindatepur"]; $minsuppur[]=$row["minsuppur"]; $minpricepur[]=$row["minpricepur"];
      $maxdatepur[]=$row["maxdatepur"]; $maxsuppur[]=$row["maxsuppur"]; $maxpricepur[]=$row["maxpricepur"]; $opstk[]=$row["stock"]; $nondiscprice[]=$row["nondiscprice"]; 
                                                
                                           }  // get names and id of all drugs
    
    }
   else
   {$errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs Empty Table"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
   }
   $sql = "SELECT supplierid, suppliername FROM supplier ORDER BY suppliername";   // get all patient
     $result = $conn->query($sql); // execute sql
     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$allsuppliernm[]=$row["suppliername"];$allsupplierid[]=$row["supplierid"];                                   
                                           }  // get names and id of all drugs   
    }
   else
   {$errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select supplier Empty Table"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
   }
    $succfail=true;
          $fields = array( "succfail" => $succfail,  "supplierid" => $allsupplierid, "suppliername" => $allsuppliernm,
           "drugid" => $alldrugid, "drugname" => $alldrugnm, "drugstrength" => $alldrugstr, "drugtype" => $alldrugtype,"druggn"=>$alldruggn,
     "lastdatepur" => $lastdatepur, "lastsuppur" => $lastsuppur, "lastpricepur" => $lastpricepur, "lastpriceperpk" =>  $lastpriceperpk,
     "mindatepur" => $mindatepur, "minsuppur" => $minsuppur, "minpricepur"  =>  $minpricepur, "nondiscprice" =>  $nondiscprice,
      "maxdatepur"  => $maxdatepur, "maxsuppur" => $maxsuppur,  "maxpricepur" => $maxpricepur,"stock" => $opstk);
          echo json_encode( $fields); $conn->close();
 
?>     