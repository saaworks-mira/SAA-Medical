<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }  
     
        $pname = $_POST['pname']; $pid= $_POST['pid']; $pdob= $_POST['pdob']; $page = $_POST['page'];$psex = $_POST['psex']; 
        $pcatg = $_POST['pcatg'];$prefdr = $_POST['prefdr']; $ptreatdr = $_POST['ptreatdr'];$pbp= $_POST['pbp'];$presp = $_POST['presp']; 
        $pbldgrp = $_POST['pbldgrp']; $pht = $_POST['pht']; $pwt = $_POST['pwt'];$ptemp = $_POST['ptemp'];$ppulse = $_POST['ppulse'];
         $pcf=$_POST['pcf'];$pmedpresc = $_POST['pmedpresc']; // added by vikas
        
       $pcomplaint = $_POST['pcomplaint']; $pallergy = $_POST['pallergy']; $popddt = $_POST['popddt'];
      $plabcount= $_POST['plabcount'];
        if ($plabcount > 0)
        {$parrlab= $_POST['parrlab'];$parrlabname= $_POST['parrlabname'];}
        $i=0;
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

 //    $page=$conn->real_escape_string($page); $pht=$conn->real_escape_string($pht);$pwt=$conn->real_escape_string($pwt);
//      $pbp=$conn->real_escape_string($pbp);$ppulse=$conn->real_escape_string($pulse);$ptemp=$conn->real_escape_string($ptemp);
     $pcomplaint=$conn->real_escape_string($pcomplaint); $pcf=$conn->real_escape_string($pcf);
     $pallergy=$conn->real_escape_string($pallergy);$pmedpresc=$conn->real_escape_string($pmedpresc);


   $sql = "INSERT INTO opd (patientid,  name, dob, age,sex,category,refdr, treatdr, ht, wt, bldgrp, bp,
       temp, pulse,resp, complaint,findings, allergy, medpresc, opddt) 
       VALUES ('$pid', '$pname',  '$pdob', '$page', '$psex', '$pcatg',  '$prefdr', '$ptreatdr', '$pht', '$pwt', '$pbldgrp',
       '$pbp', '$ptemp', '$ppulse', '$presp','$pcomplaint','$pcf', '$pallergy','$pmedpresc', '$popddt')";  

 $succfail=true;
       if ($conn->query($sql))       
         { 
          if ($plabcount > 0) {
          $popdid=$conn->insert_id;   // get maintid the key generated  
         for ($i = 0; $i < count($parrlab); $i++) {
         $labid=$parrlab[$i];  $labname=$parrlabname[$i];
           
         $labname=$conn->real_escape_string($labname); 
         $pname=$conn->real_escape_string($pname);
 
       $succfail=true ;
        $sql = "INSERT INTO opdtest (opdid, patientid, testid, opddate, ptname, testname,age,sex) 
         VALUES ('$popdid', '$pid', '$labid', '$popddt', '$pname','$labname','$page','$psex')";   
           if ($conn->query($sql))   { 
             
              continue;
           } 
           else {
           $operation="Insert Record into opdtest Fail";
             $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false;  
             $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc);
             $conn->close();exit();}
             
           } // end for 
          }  
         }
        else 
        {
         $operation="Insert Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
 $conn->commit();
// $insertid=$conn->insert_id;
   $errdesc = "Record Insert successful. Click on continue button" ; $succfail=true;$operation="Insert";
    $desc = array( "succfail" => $succfail, "opration" => $operation,  "msg" => $errdesc); 
     echo json_encode( $desc); $conn->close();  
?>
