<?php
  if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
     
        $pname = $_POST['pname'];  $pdob= $_POST['pdob']; $page = $_POST['page'];$psex = $_POST['psex']; 
        $pcatg = $_POST['pcatg']; $pbldgrp = $_POST['pbldgrp']; $pht = $_POST['pht']; $pwt = $_POST['pwt'];
        $paddress = $_POST['paddress']; // added by vikas
        $pallergy = $_POST['pallergy'];$phistory=$_POST['phistory'];

  $patselected = $_POST['pid'];

        $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";


// Create connection//$padmdt = $_POST['padmdt'];
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for Insert/Modify"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }
//-  Security- This statement below should be added for every text field input by the user in every program that
// does an insert or update into a table. 
// This is to prevent the program from crashing in case they enter unusual characters like ???\\\'" etc 

  $pname=$conn->real_escape_string($pname); $paddress=$conn->real_escape_string($paddress);  
  $pallergy=$conn->real_escape_string($pallergy); $phistory=$conn->real_escape_string($phistory);

$conn->autocommit(FALSE);
 $sql= "update opd set name = '$pname',address='$paddress', dob ='$pdob', age ='$page',sex ='$psex',category='$pcatg' where patientid = '$patselected'"; 
       $succfail=true ;
   if (!$conn->query($sql))           
        {
        $operation="Update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
$sql= "update opdissue set patientname = '$pname' where patientid = '$patselected'"; 
       $succfail=true ;
   if (!$conn->query($sql))           
        {
        $operation="Update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  
$sql= "update opdtest set ptname = '$pname', age ='$page', sex ='$psex' where patientid = '$patselected'"; 
       $succfail=true ;
   if (!$conn->query($sql))           
        {
        $operation="Update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  

$sql = "Update patient set name='$pname', address='$paddress', dob ='$pdob', age ='$page',sex ='$psex',category='$pcatg', ht='$pht', wt='$pwt', bldgrp ='$pbldgrp',
allergy ='$pallergy', history='$phistory' where patientid = '$patselected'"; 
 
       
 
       $succfail=true ;
       if ($conn->query($sql))       
        { 
            $errdesc = "Record Update successful. Click on Continue To MAINMENU  OR OPDPHARMACY To PHARMACY" ; $succfail=true;$operation="Update";
            $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
           echo json_encode( $desc); $conn->commit(); $conn->close();
        }
        else 
        {
         $operation="Update Record Fail";
        $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false;  
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); exit();     
        }  

?>
