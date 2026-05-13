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
    $plastdatepur=array(); $plastsuppur=array(); $plastpricepur=array(); $pmindatepur=array(); $pminsuppur=array(); $pminpricepur=array();
    $pmaxdatepur=array(); $pmaxsuppur=array();$pmaxpricepur=array(); $plastpriceperpk=array(); 
   
        $ppurchdt = $_POST['ppurchdt'];$pinvno = $_POST['pinvno'];$prowcoldata = $_POST['prowcoldata'];
        $plastdatepur=$_POST['plastdatepur']; $plastsuppur=$_POST['plastsuppur'];  $plastpriceperpk=$_POST['plastpriceperpk'];
        $pmindatepur=$_POST['pmindatepur']; $pminsuppur=$_POST['pminsuppur']; $pminpricepur=$_POST['pminpricepur'];
        $pmaxdatepur=$_POST['pmaxdatepur']; $pmaxsuppur=$_POST['pmaxsuppur']; $pmaxpricepur=$_POST['pmaxpricepur'];
        $psupplierinfo = $_POST['psupplierinfo'];   $pauth = $_POST['pauth'];

              
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
 for ($i = 0; $i < count($prowcoldata); $i++) {
       $drug = explode("--", $prowcoldata[$i][0]);
       $drugid=$drug[0];
       $drugnm=substr($drug[1],4);
//       $drugstr=$conn->real_escape_string(substr($drug[2],8));
//       $drugtype=$conn->real_escape_string(substr($drug[3],4));
      
       for ($j = 1; $j < count($prowcoldata[$i]); $j++) {       // this takes the cols for each row
         $tempsave=$prowcoldata[$i][$j];
        $temp[$j]=$tempsave;
       } 
   // supplier info is format id--name
   $pos=strrpos($psupplierinfo,"--");$psuppliername=substr($psupplierinfo,$pos+2);$psupplierid=substr($psupplierinfo,0,$pos);
   $psupplierid=(int)$psupplierid; $pinvno=$conn->real_escape_string($pinvno);
   $sql = "INSERT INTO purchase (purchasedt,invoiceno, supplierid, suppliername, drugid, drugname,strength,type, batchno, expdt, opnstk,qtyperpack,
   packs, freepacks, totalqty, clsstk,  unitprice, discunitprice, grossprice, taxpercent, tax, netamt, issueauthority, timefixed)   
   VALUES ('$ppurchdt', '$pinvno', '$psupplierid', '$psuppliername','$drugid','$drugnm','$temp[1]','$temp[2]', '$temp[3]',  '$temp[4]', '$temp[5]',  '$temp[6]',
  '$temp[7]','$temp[8]', '$temp[9]', '$temp[10]', '$temp[11]','$temp[12]', '$temp[13]', '$temp[14]','$temp[15]','$temp[16]', '$pauth', NOW())"; 
    
  

       $succfail=true ; $insertid=$conn->insert_id;
       if (!$conn->query($sql))
        { $operation="Insert Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       } 
   // update drug table with the min and max and last purchase prices and the respective supplier
  
// update drug table with last pur and min and max values
 $sql = "SELECT lastdatepur,lastpricepur,lastpriceperpk, nondiscprice,lastsuppur,mindatepur,minpricepur,minsuppur,stock,stockvalue,maxdatepur,maxpricepur,maxsuppur FROM drug1
 where drugid='$drugid' FOR UPDATE";
 if (!$conn->query($sql))
        { $operation="update Lock Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }     
   $plastpricepur[$i]=round(($plastpriceperpk[$i]/$temp[6]),2);
   $sql = "update drug1 set lastdatepur = '$plastdatepur[$i]', lastpricepur = '$plastpricepur[$i]',  lastpriceperpk = '$plastpriceperpk[$i]', lastsuppur = '$plastsuppur[$i]',
    mindatepur = '$pmindatepur[$i]', minpricepur = '$pminpricepur[$i]', minsuppur = '$pminsuppur[$i]', stock = stock+'$temp[9]',stockvalue=stock* '$plastpricepur[$i]', nondiscprice = '$temp[11]',
    maxdatepur = '$pmaxdatepur[$i]', maxpricepur = '$pmaxpricepur[$i]', maxsuppur = '$pmaxsuppur[$i]'  where drugid='$drugid'";
     
       $succfail=true ;
       if (!$conn->query($sql))
        { $operation="update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
       }     
// till here update   
    continue;  // next row insert
 }   
  $conn->commit();
   $errdesc = "Record Insert successful. Click on continue button" ; $succfail=true;$operation="Insert";
    $desc = array( "succfail" => $succfail, "opration" => $operation, "insertid"  => $conn->insert_id, "msg" => $errdesc); 
     echo json_encode( $desc); $conn->close();   
?>
