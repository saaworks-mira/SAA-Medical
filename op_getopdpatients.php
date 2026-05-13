 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
<?php
  
$allpatnm=array(); $allpatid=array(); $alldocname=array(); 

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
     
 $sql = "SELECT  distinct patientid, name FROM opd order by name";   // get all patient
             
     $result = $conn->query($sql); // execute sql
     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Patients"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          echo json_encode( $desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$allpatnm[]=$row["name"];$allpatid[]=$row["patientid"];}; // get names and id of all patients
     
    }
            $succfail=true;
          $fields = array( "succfail" => $succfail, "patientid" => $allpatid, "patientname" => $allpatnm);
          echo json_encode( $fields); $conn->close(); 
    ?>
  