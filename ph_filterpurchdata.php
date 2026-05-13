 <?php
// if(!isset($_SERVER['HTTP_REFERER'])) {
//   echo "access denied "; exit();
// } 
function customError($errno, $errstr,$errfile,$errline) {
//  echo "<b>File Error:</b> [$errno] $errstr $errline<br>";
//  echo "Ending Script";
 $errdesc = "<b>File Error:</b> [$errno] $errstr $errline<br>"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc);  exit(); 
  die();
}
set_error_handler("customError");	 
 $drugname=array();
      $purchasedt=array();$invoiceno=array();$supplier=array();$drugname=array();$strength=array();$type=array();
      $batchno=array();$expdt=array();$stkinhand=array();$qtyperpack=array(); $packs=array();$freepacks=array(); 
     $totalqty=array();$unitprice=array();$discunitprice=array();$grossprice=array(); $taxpercent=array(); 
    $tax=array(); $netamt=array();
  

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
     
     $sql = "SELECT  purchasedt, invoiceno,  supplier, drugname, strength, type, batchno, expdt, stkinhand,
     qtyperpack, packs, freepacks, totalqty, unitprice, discunitprice, grossprice, taxpercent, tax, netamt FROM purchase";   // get all patient
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {
      $purchasedt[]=$row["purchasedt"];$invoiceno[]=$row["invoiceno"];$supplier[]=$row["supplier"]; $drugname[]=$row["drugname"]; 
      $strength[]=$row["strength"];$type[]=$row["type"];$batchno[]=$row["batchno"];$expdt[]=$row["expdt"];    
     $stkinhand[]=$row["stkinhand"];$qtyperpack[]=$row["qtyperpack"];$packs[]=$row["packs"]; 
     $freepacks[] = $row["freepacks"];$totalqty[]=$row["totalqty"]; 
     $unitprice[]=$row["unitprice"]; $discunitprice[]=$row["discunitprice"]; $grossprice[]=$row["grossprice"];
     $taxpercent[]=$row["taxpercent"];$tax[]=$row["tax"];$netamt[]=$row["netamt"];}
         
    }
   else
   {$errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs Empty Table"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
   }
    $succfail=true;
    $fields = array( "succfail" => $succfail, "purchasedt" => $purchasedt, "supplier" => $supplier, "invoiceno"  => $invoiceno,
     "drugname" => $drugname, "strength"  => $strength, "drugtype" => $type, "batchno"  => $batchno, "expdt" => $expdt, "stkinhand" => $stkinhand,  
     "qtyperpack"  => $qtyperpack, "packs"  => $packs, "freepacks"  => $freepacks, "totalqty"  => $totalqty, "unitprice" => $unitprice,
     "discunitprice" => $discunitprice, "grossprice"  => $grossprice, "taxpercent" => $taxpercent, "tax" => $tax,  "netamt" => $netamt); 
   
      
      echo json_encode( $fields); $conn->close();

 
?>     