<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }  

   
   $pinsertlist=array();$pdeletelist=array();
		 
      $patientid = $_POST['ppatientid']; $ptname = $_POST['ptname'];
        $popdid= $_POST['popdid']; $pdob= $_POST['pdob']; $page = $_POST['page'];$psex = $_POST['psex']; 
        $pcatg = $_POST['pcatg'];$prefdr = $_POST['prefdr']; $ptreatdr = $_POST['ptreatdr'];$pbp= $_POST['pbp'];$presp = $_POST['presp']; 
        $pbldgrp = $_POST['pbldgrp']; $pht = $_POST['pht']; $pwt = $_POST['pwt'];$ptemp = $_POST['ptemp'];$ppulse = $_POST['ppulse'];
         $pcf=$_POST['pcf'];$pmedpresc = $_POST['pmedpresc']; // added by vikas
        $pinsertpresent=$_POST['pinsertpresent'];$pdeletepresent=$_POST['pdeletepresent']; 
       if ($pinsertpresent == "y") { $pinsertlist=$_POST['pinsertlist'];}
      if ($pdeletepresent== "y") {  $pdeletelist=$_POST['pdeletelist'];}
       
       $pcomplaint = $_POST['pcomplaint']; $pallergy = $_POST['pallergy']; $popddt = $_POST['popddt'];$paddress = $_POST['paddress'];
      
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

//-  Security- This statement below should be added for every text field input by the user in every program that
// does an insert or update into a table. 
// This is to prevent the program from crashing in case they enter unusual characters like ???\\\'" etc 

     $pcomplaint=$conn->real_escape_string($pcomplaint);$pallergy=$conn->real_escape_string($pallergy);$paddress=$conn->real_escape_string($paddress);

 $sql= "update opd  set refdr='$prefdr', treatdr='$ptreatdr',  wt='$pwt',bp ='$pbp',  ht ='$pht', temp='$ptemp',  
 pulse = '$ppulse', resp ='$presp', complaint ='$pcomplaint', address='$paddress', findings='$pcf',  allergy ='$pallergy', sex='$psex', age='$page', 
 category='$pcatg', refdr='$prefdr', treatdr='$ptreatdr', medpresc='$pmedpresc'  where opdid = '$popdid'";  
  

 $succfail=true;
 if (!$conn->query($sql))           
        {
        $operation="Update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$sql.$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }      
   $succfail=true;
   if ($pinsertpresent == "y") {
        for ($j = 0; $j< count($pinsertlist); $j++) { 
          $idname = explode("-", $pinsertlist[$j]);

        $sql = "INSERT INTO opdtest (opdid, patientid, testid, opddate, ptname, testname,age,sex) 
         VALUES ('$popdid', '$patientid', '$idname[0]', '$popddt', '$ptname', '$idname[1]','$page','$psex')";   
           if ($conn->query($sql))   { 
             
              continue;
           } 
           else {
           $operation="Insert Record into opdtest Fail";
             $errdesc = "Error: " .  $conn->error." sqlstate ".$sql.$conn->sqlstate; $succfail=false;  
             $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc);
             $conn->close();exit();}
             
           } // end for 
	 }
        if ($pdeletepresent == "y") {
         for ($j = 0; $j< count($pdeletelist); $j++) { 
         $sql= "delete from opdtest where opdtestid='$pdeletelist[$j]'";  
           if ($conn->query($sql))   { 
             
              continue;
           } 
           else {
           $operation="Delete Record opdtest Fail";
             $errdesc = "Error: " .  $conn->error." sqlstate ".$sql.$conn->sqlstate; $succfail=false;  
             $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc);
             $conn->close();exit();}
             
           } // end for 
				 }   
 $conn->commit();
$errdesc = "Record Updates successful".$succfail=true;$operation="Update";
   $desc = array( "succfail" => $succfail, "opration" => $operation,  "msg" => $errdesc); 
   echo json_encode( $desc); $conn->close();
?>
