<?php 
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
?>
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

      $purchasedt=array();$drugname=array();$drugid=array();$opnstk=array();$clsstk=array();
     $totalqty=array(); $time=array(); $timefixed=array();$transtype=array();

      $dtofissue=array();$hospitalname=array();$drugname=array();$drugid=array();
      $stkafterissue=array();$opstk=array();$qtyissued=array();  $transtype=array(); $timefixed=array();

        $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for patient load"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   
      $pstartdt = $_POST['pstartdt']; $penddt = $_POST['penddt'];//$istartdt = $_POST['istartdt']; $ienddt = $_POST['ienddt']; 

$todaydt=date("Y/m/d"); $todayyyyy=substr($todaydt,0,4);$todaymm=substr($todaydt,5,2);$todaydd=substr($todaydt,8,2);
      $pstartyyyy=substr($pstartdt,6,4);$pstartmm=substr($pstartdt,3,2);$pstartdd=substr($pstartdt,0,2);

    $pstartdt=$pstartyyyy.$pstartmm.$pstartdd;
 //   $pstartdtclause="purchasedt >=".$pstartdt;
     
   $pendyyyy=substr($penddt,6,4);$pendmm=substr($penddt,3,2);$penddd=substr($penddt,0,2);  

   $penddt=$pendyyyy.$pendmm.$penddd;
  
  
     $sql = "( SELECT drugid, drugname, dtofissue, hospitalname, opstk, qtyissued, stkafterissue, transtype, timefixed FROM issue WHERE hospitalname <> 'OPD Stock Adjusment'  
     AND  dtofissue BETWEEN $pstartdt AND $penddt )
     UNION ALL
     ( SELECT drugid, drugname, purchasedt, 'PUR', opnstk, totalqty, clsstk, transtype, timefixed FROM purchase WHERE purchasedt BETWEEN  $pstartdt AND $penddt) 
       ORDER BY drugid, dtofissue,timefixed";
     $result = $conn->query($sql); // execute sql

     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Patients"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
$rowcount=$result->num_rows;

   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc())
      { 
       
      $drugid[]=$row["drugid"]; 
      $drugname[]=$row["drugname"];
    
     $issuedt[]=$row["dtofissue"];$hospitalname[]=$row["hospitalname"];  
       $opstk[]=$row["opstk"]; $qtyissued[]=$row["qtyissued"];
     $stkafterissue[]=$row["stkafterissue"];$transtype[]=$row["transtype"];$timefixed[]=$row["timefixed"];
      }
   
  
      $succfail=true;
    $fields = array( "succfail" => $succfail, "rowcount" => $rowcount, 
               "dtofissue" => $issuedt,     
       "drugid" => $drugid,  "drugname" => $drugname,
        "dtofissue" => $issuedt, 
     "hospitalname" => $hospitalname,  
     "opstk" => $opstk,  "qtyissued"  => $qtyissued,"stkafterissue" => $stkafterissue, "transtype" => $transtype, "timefixed"  => $timefixed);    
          
      echo json_encode( $fields); $conn->close();
       
    }
   else
   {
     $succfail=true;
    $fields = array( "succfail" => $succfail, "rowcount" => $rowcount);    
      
      echo json_encode( $fields); $conn->close();
         
   }
    
?>
 
     