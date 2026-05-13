<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }  
     
        $pname = $_POST['pname'];  $pdob= $_POST['pdob']; $page = $_POST['page'];$psex = $_POST['psex']; 
        $pcatg = $_POST['pcatg']; $pbldgrp = $_POST['pbldgrp']; $pht = $_POST['pht']; $pwt = $_POST['pwt'];
        $paddress = $_POST['paddress']; // added by vikas
        $pallergy = $_POST['pallergy'];$phistory=$_POST['phistory'];


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

//$page=$conn->real_escape_string($page);$psex=$conn->real_escape_string($psex);$pdob=$conn->real_escape_string($pdob);
//$pht=$conn->real_escape_string($pht);$pwt=$conn->real_escape_string($pwt);$pbldgrp=$conn->real_escape_string($pbldgrp);
$conn->autocommit(FALSE);
$sql = "INSERT INTO patient (name, address, dob, age,sex,category, ht, wt, bldgrp, allergy, history) 
       VALUES ('$pname', '$paddress', '$pdob', '$page','$psex', '$pcatg',  '$pht', '$pwt', '$pbldgrp',
       '$pallergy','$phistory')";  
 
       $succfail=true ;
       if ($conn->query($sql))       
        { $conn->commit();
          $errdesc = "Record Insert successful. Click on Continue to MAINMENU  OR OPDPHARMACY TO PHARMACY" ; $succfail=true;$operation="Insert";
            $desc = array( "succfail" => $succfail, "opration" => $operation, "insertid"  => $conn->insert_id, "msg" => $errdesc); 
           echo json_encode( $desc); $conn->close();
        }

        else 
        {
         $operation="Insert Record Fail";
        $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false;  
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); exit();     
        }  

?>
