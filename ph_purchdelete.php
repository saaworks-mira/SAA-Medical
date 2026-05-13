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
         $prowcoldata=array(); $temp=array();$drug=array(); 
        $purchaseid = $_POST['tpurchaseid'];$ppurchasedt = $_POST['tpurchasedt'];$pdrugid = $_POST['tdrugid'];$psupplierid= $_POST['tsupplierid']; $supplier= $_POST['tsupplier']; $prowcoldata= $_POST['prowcoldata'];
        $porigqty=$_POST['torigqty'];$premarks=$_POST['premarks']; $ptrans=$_POST['ptrans']; 
// last purchase data
        

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

// create lock
$sql = "delete FROM purchase  where purchaseid='$purchaseid'";  

 if (!$conn->query($sql))
        { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }   
  $sql = "SELECT stock FROM drug1 
         where drugid='$pdrugid'  FOR UPDATE";
 if (!$conn->query($sql))
        { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }    
// update drug table with last pur and min and max values
   $sql = "update drug1 set  stock = '$porigqty'
    where drugid='$pdrugid'";
     
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }     

 $prowcoldata[1]=$conn->real_escape_string($prowcoldata[1]);$prowcoldata[3]=$conn->real_escape_string($prowcoldata[3]);
   
     for ($j = 1; $j < count($prowcoldata); $j++) {       // this takes the cols for each row     
        $temp[$j]=$prowcoldata[$j];
    
       }; 

  $sql = "INSERT INTO transdelete (issueid,issuedt,medunitid, medunitname, drugid, drugname,strength,type, batchno, expdt, opnstk,clsstk, qtyperpack,
   packs, freepacks, totalqty,  unitprice, discunitprice, grossprice, taxpercent, tax, netamt,transtype, remarks)   
   VALUES ('$purchaseid', '$ppurchasedt',  '$psupplierid', '$supplier','$pdrugid','$temp[1]','$temp[2]', '$temp[3]',  '$temp[4]', '$temp[5]', 
   '$temp[6]','$temp[11]','$temp[7]','$temp[8]', '$temp[9]', '$temp[10]', '$temp[12]', '$temp[13]', '$temp[14]','$temp[15]','$temp[16]','$temp[17]','$ptrans', '$premarks')";
     $succfail=true; 
//echo $sql;
       if (!$conn->query($sql))
        { $operation="INSERT Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }   
$conn->commit();
   $errdesc = "Record delete successful. Click on continue button" ; $succfail=true;$operation="Update";
    $desc = array( "succfail" => $succfail, "opration" => $operation,  "msg" => $errdesc); 
     echo json_encode( $desc); $conn->close();   
?>
