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
// set_error_handler("customError");	 
 
       $servername = "localhost";
    $username = "vbamba_pharmacy";
    $password = "offering2her";
    $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $succfail=true;
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for pharmacy"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   
 $alldrugids=array(); $allclsgstk=array();  $alldrugid=array();$allunitprice=array(); 
 $palldrugs = $_POST['palldrugs']; 
  $startdt=$_POST['startdt'];
  if ($palldrugs != "y") {$pdrugid = $_POST['pdrug'];}  
     
   if ($palldrugs == "y") {
// get all drugs
      $sql = "SELECT drugid, drugname FROM drug1 where enable = 'E' ORDER BY drugname";   // get all patient
     $result = $conn->query($sql); // execute sql
     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Drugs"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
      
      while($row = $result->fetch_assoc()) {$alldrugid[]=$row["drugid"];}
            
// till here     
     for ($i = 0; $i < count($alldrugid); $i++) {
       $temp=getstock($alldrugid[$i],$startdt,$conn);
 
      $stocktemp = explode("--", $temp);
//       $allclsgstk[$i]=getstock($alldrugid[$i],$startdt,$conn);
       $allclsgstk[$i]= $stocktemp[0];$allunitprice[$i]= $stocktemp[1];
     } 
     $succfail=true;

    $fields = array( "succfail" => $succfail, "aclsgstk" =>  $allclsgstk, "aunitprice" =>  $allunitprice);                          
      echo json_encode( $fields); $conn->close(); exit();
   }
else {
  $temp=getstock($pdrugid,$startdt,$conn);
   $stocktemp = explode("--", $temp); 
    $clsgstk=$stocktemp[0];$aunitprice= $stocktemp[1];
//  $clsgstk=getstock($pdrugid,$startdt,$conn);
  $succfail=true;

    $fields = array( "succfail" => $succfail, "clsgstk" => $clsgstk, "aunitprice" =>  $aunitprice);  
                           
      echo json_encode( $fields); $conn->close();exit();
}
function getstock($pdrugid,$startdt, $conn) {
  
  $dataarray=array(); 
   $pdrugid=(int)$pdrugid;
    $pstartyyyy=substr($startdt,6,4);$pstartmm=substr($startdt,3,2);$pstartdd=substr($startdt,0,2);
    $istartdt=$pstartyyyy.$pstartmm.$pstartdd;
    $istartdt=(int) $istartdt;
   $stkafterissue=0; $rate=0;
  
$sql = "SELECT  dtofissue,stkafterissue, rate, time FROM opdissue where 
       drugid='$pdrugid' AND dtofissue <='$istartdt'  Order by time Desc limit 1";
    
     $result = $conn->query($sql); // execute sql
     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Issue"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
  
   if ($result->num_rows ==1)     
    {     
     $row = $result->fetch_assoc(); $dtofissue=$row["dtofissue"];$stkafterissue=$row["stkafterissue"];  
      $rate=$row["rate"];  
    }   
  $stockpricepos=$stkafterissue."--".$rate;
  return $stockpricepos; 
}
       
?>     