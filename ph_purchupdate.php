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

    $prowcoldata=array();  
        $ptranstype = $_POST['ttranstype'];$premarks = $_POST['tremarks'];
        $purchaseid = $_POST['tpurchaseid'];$pdrugid = $_POST['tdrugid'];$psupplierid = $_POST['tsupplierid'];
        $ppurchdt = $_POST['tpurchasedt'];$pinvno = $_POST['tinvoiceno'];$prowcoldata = $_POST['trowcoldata'];
        $plastdatepur=$_POST['tlastdatepur']; $plastsuppur=$_POST['tlastsuppur']; $plastpriceperpk=$_POST['tlastpriceperpk']; 
        $pmindatepur=$_POST['tmindatepur']; $pminsuppur=$_POST['tminsuppur']; $pminpricepur=$_POST['tminpricepur'];
        $pmaxdatepur=$_POST['tmaxdatepur']; $pmaxsuppur=$_POST['tmaxsuppur']; $pmaxpricepur=$_POST['tmaxpricepur'];
        $porigqty=$_POST['torigqty'];$porigdrugid=$_POST['torigdrugid'];
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

// start updates here
  $pinvno=$conn->real_escape_string($pinvno);
// create lock          // shoba for gn
$sql = "SELECT purchasedt , invoiceno, supplierid , suppliername , drugid, drugname,genericname,strength,type, batchno, expdt, opnstk,              
   qtyperpack,packs, freepacks, totalqty, clsstk, unitprice, discunitprice, grossprice,taxpercent, tax, 
   netamt, transtype, remarks FROM purchase  where purchaseid='$purchaseid' FOR UPDATE";  

 if (!$conn->query($sql))
        { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }   

/* $prowcoldata[0]=$conn->real_escape_string($prowcoldata[0]); 
   $sql = "update purchase set purchasedt = '$ppurchdt', invoiceno= '$pinvno', supplierid = '$psupplierid', suppliername = '$prowcoldata[0]', drugid= '$pdrugid', 
   drugname= '$prowcoldata[1]',genericname='$prowcoldata[2]',strength= '$prowcoldata[3]',type= '$prowcoldata[4]', batchno= '$prowcoldata[5]', expdt= '$prowcoldata[6]',
   opnstk= '$prowcoldata[7]', qtyperpack= '$prowcoldata[8]',
   packs= '$prowcoldata[9]', freepacks= '$prowcoldata[10]', totalqty= '$prowcoldata[11]', clsstk= '$prowcoldata[12]',
   unitprice= '$prowcoldata[13]', discunitprice= '$prowcoldata[14]', grossprice= '$prowcoldata[15]', 
   taxpercent= '$prowcoldata[16]', tax= '$prowcoldata[17]', netamt= '$prowcoldata[18]', transtype= '$ptranstype',remarks= '$premarks'            
   where purchaseid='$purchaseid'";    */  
 $prowcoldata[0]=$conn->real_escape_string($prowcoldata[0]); 
   $sql = "update purchase set purchasedt = '$ppurchdt', invoiceno= '$pinvno', supplierid = '$psupplierid', suppliername = '$prowcoldata[0]', drugid= '$pdrugid', 
   drugname= '$prowcoldata[1]',genericname= '$prowcoldata[18]',strength= '$prowcoldata[2]',type= '$prowcoldata[3]', batchno= '$prowcoldata[4]', expdt= '$prowcoldata[5]',
   opnstk= '$prowcoldata[6]', qtyperpack= '$prowcoldata[7]',
   packs= '$prowcoldata[8]', freepacks= '$prowcoldata[9]', totalqty= '$prowcoldata[10]', clsstk= '$prowcoldata[11]',
   unitprice= '$prowcoldata[12]', discunitprice= '$prowcoldata[13]', grossprice= '$prowcoldata[14]', 
   taxpercent= '$prowcoldata[15]', tax= '$prowcoldata[16]', netamt= '$prowcoldata[17]', transtype= '$ptranstype',remarks= '$premarks', 
   issueauthority=CONCAT(issueauthority,'-edit')
   where purchaseid='$purchaseid'";   
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  

// now update current
// create lock

   // update drug table with closing stock
 $sql = "SELECT lastpricepur, stock,stockvalue FROM drug1 
         where drugid='$pdrugid'  FOR UPDATE";
 if (!$conn->query($sql))
        { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }    
// update drug table with last pur and min and max values
//$plastpricepur[$i]=round(($plastpriceperpk[$i]/$temp[6]),2);
 $plastpricepur = round(($prowcoldata[14]/$prowcoldata[8]),2);
   $sql = "update drug1 set lastpricepur='$plastpricepur', stock = '$prowcoldata[11]',stockvalue = stock * '$plastpricepur' 
    where drugid='$pdrugid'";
     
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }     
//    
// now last transaction date and price
// update drug table pertaining to previous drug get last purchase
    $sql = "SELECT   purchasedt,  suppliername, unitprice,
      discunitprice FROM purchase  where drugid='$pdrugid' ORDER BY purchasedt  DESC , time DESC LIMIT 1";
         
   $result = $conn->query($sql);
   if (!$result)
        { $operation="Select Purchase Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
    $rowcount=$result->num_rows;
    if ($rowcount == 0) 
      { $operation="No rows found fatal error Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
    
    $row = $result->fetch_assoc();
      $plstlastdatepur=$row["purchasedt"]; $plstlastsuppur=$row["suppliername"]; $plstlastpriceperpk=$row["discunitprice"]; $plastpricepur=round(($plstlastpriceperpk/$prowcoldata[7]),2);
     $plstunitpriceperpk=$row["unitprice"];$plstlastsuppur=$conn->real_escape_string($plstlastsuppur); 
    $sql = "SELECT  lastdatepur,  lastsuppur, lastpriceperpk, nondiscprice,
      lastpricepur FROM drug1  where drugid='$pdrugid'  FOR UPDATE";
        if (!$conn->query($sql))
         { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
         }     

     $sql = "update drug1 set lastdatepur = '$plstlastdatepur', lastpriceperpk = '$plstlastpriceperpk', lastpricepur = '$plastpricepur', lastsuppur = '$plstlastsuppur', nondiscprice = '$plstunitpriceperpk'
       where drugid='$pdrugid'";
     
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update DrugRecord for lastdate Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
// now min price
$sql = "SELECT   purchasedt,  suppliername, 
      discunitprice FROM purchase  where drugid='$pdrugid' ORDER BY discunitprice ASC , time DESC LIMIT 1";
         
   $result = $conn->query($sql);
   if (!$result)
        { $operation="Select Purchase Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
    $rowcount=$result->num_rows;
    if ($rowcount == 0) 
      { $operation="No rows found fatal error Fail for min price from purchase";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
    
     $row = $result->fetch_assoc();
     $plstmindatepur=$row["purchasedt"]; $plstminsuppur=$row["suppliername"]; $plstminpricepur=$row["discunitprice"];
    $plstminsuppur=$conn->real_escape_string($plstminsuppur); 
    
        $sql = "SELECT mindatepur,minpricepur,minsuppur FROM drug1 
         where drugid='$pdrugid'  FOR UPDATE";
        if (!$conn->query($sql))
         { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
         }    
// update drug table with last pur and min and max values
       $sql = "update drug1 set mindatepur = '$plstmindatepur', minpricepur = '$plstminpricepur', minsuppur = '$plstminsuppur'
       where drugid='$pdrugid'";
     
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update DrugRecord for minimum purchase Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }      
// 
// now for the earlier drug;

 if ($porigqty != -1) {   // updter stock
$sql = "SELECT lastpricepur, stock,stockvalue FROM drug1 
         where drugid='$porigdrugid' FOR UPDATE";
    if (!$conn->query($sql))
        { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
 //  $plastpricepur[$i]=round(($plastpriceperpk[$i]/$temp[6]),2);

   $sql = "update drug1 set lastpricepur ='$plastpricepur', stock = '$porigqty',stockvalue= stock*'$plastpricepur' where drugid='$porigdrugid'";              //shoba
     
    if (!$conn->query($sql))
        { $operation="update Drug Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       } 
 // update drug table with last pur  
   $sql = "SELECT   purchasedt,  suppliername, unitprice,
      discunitprice FROM purchase  where drugid='$porigdrugid' ORDER BY purchasedt  DESC , time DESC LIMIT 1";
         
   $result = $conn->query($sql);
   if (!$result)
        { $operation="Select Purchase Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
    $rowcount=$result->num_rows;
    if ($rowcount == 0) {
      $sql = "SELECT  lastdatepur,  lastsuppur, lastpricepur,lastpriceperpk, nondiscprice, mindatepur,  minsuppur, minpricepur,maxdatepur,  maxsuppur, maxpricepur
       FROM drug1  where drugid='$porigdrugid'  FOR UPDATE";
        if (!$conn->query($sql))
         { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
         }       
     $sql = "update drug1 set lastdatepur = 0, lastpricepur = 0, lastpriceperpk = 0, nondiscprice=0, lastsuppur = ' ',mindatepur = 0, minpricepur = 0, minsuppur = ' ',
     maxdatepur = 0, maxpricepur = 0, maxsuppur = ' '
       where drugid='$porigdrugid'";
     
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update DrugRecord Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
    } 
   else 
    {  // there is atleast one row with that drug id in purchase
     $row = $result->fetch_assoc();
     $plstlastdatepur=$row["purchasedt"]; $plstlastsuppur=$row["suppliername"]; $plstlastpriceperpk=$row["discunitprice"]; $plastpricepur=round(($plstlastpriceperpk/$prowcoldata[7]),2);
      $plstunitpriceperpk=$row["unitprice"];$plstlastsuppur=$conn->real_escape_string($plstlastsuppur); 
    $sql = "SELECT  lastdatepur,  lastsuppur, lastpricepur,lastpriceperpk, nondiscprice
       FROM drug1  where drugid='$porigdrugid'  FOR UPDATE";
        if (!$conn->query($sql))
         { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
         }       
     $sql = "update drug1 set lastdatepur = '$plstlastdatepur', lastpricepur = '$plastpricepur', lastpriceperpk = '$plstlastpriceperpk', lastsuppur = '$plstlastsuppur', nondiscprice = '$plstunitpriceperpk'
       where drugid='$porigdrugid'";
    
     //    $sql = "update drug1 set lastdatepur = '$plstlastdatepur', lastpricepur = '$plstlastpricepur', lastpriceperpk = '$plstlastpriceperpk', lastsuppur = '$plstlastsuppur', nondiscprice = '$plstunitpriceperpk'
     //  where drugid='$porigdrugid'";
     
       $succfail=true ; 
    
       if (!$conn->query($sql))
        { $operation="update DrugRecord for lastdate prev drug Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
// now min price
$sql = "SELECT   purchasedt,  suppliername, 
      discunitprice FROM purchase  where drugid='$porigdrugid' ORDER BY discunitprice ASC , time DESC LIMIT 1";
         
   $result = $conn->query($sql);
   if (!$result)
        { $operation="Select Purchase Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }  
     $row = $result->fetch_assoc();
     $plstmindatepur=$row["purchasedt"]; $plstminsuppur=$row["suppliername"]; $plstminpricepur=$row["discunitprice"]; 
   $plstminsuppur=$conn->real_escape_string($plstminsuppur);   
    $sql = "SELECT  mindatepur,  minsuppur, minpricepur
       FROM drug1  where drugid='$porigdrugid'  FOR UPDATE";
        if (!$conn->query($sql))
         { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
         }       
     $sql = "update drug1 set mindatepur = '$plstmindatepur', minpricepur = '$plstminpricepur', lastsuppur = '$plstminsuppur'
       where drugid='$porigdrugid'";
     
       $succfail=true ; 
       if (!$conn->query($sql))
        { $operation="update DrugRecord for minimum for prevdrug Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
  }        
 }  
  $conn->commit();
   $errdesc = "Record update successful. Click on continue button" ; $succfail=true;$operation="Update";
    $desc = array( "succfail" => $succfail, "opration" => $operation,  "msg" => $errdesc); 
     echo json_encode( $desc); $conn->close();   
?>
