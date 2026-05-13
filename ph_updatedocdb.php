<?php
  if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
     
        
 $pname = $_POST['pname'];  $pphone= $_POST['pphone'];$pspec= $_POST['pspec'];$docselected = $_POST['did'];

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
 $conn->autocommit(FALSE);
   $pname=$conn->real_escape_string($pname); $pphone=$conn->real_escape_string($pphone);   $pspec=$conn->real_escape_string($pspec); 
  
 //$sql= "update drug1 set drugname = '$pname',type='$ptype', strength ='$pstrength', genericname ='$pgen',subgroup ='$psgr',lastpricepur='$prate' where drugid = '$drugselected'"; 

 $sql= "update doctors set docname = '$pname',phone='$pphone',spec='$pspec' where docid = '$docselected'"; 
       $succfail=true ;
   if (!$conn->query($sql))           
        {
        $operation="Update Record Fail";
       $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();     
        }  



        else {
    $conn->commit();    
   $errdesc = "Record update successful. Click on continue button" ; $succfail=true;$operation="Update";
    $desc = array( "succfail" => $succfail, "opration" => $operation,  "msg" => $errdesc); 
     echo json_encode( $desc); $conn->close();   
        }

?>
