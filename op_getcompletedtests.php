 <?php

if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   }
	
?>
<?php
 $testid=array(); $testname=array();$patientid=array();$ptname=array();$completion=array();
 $opddate=array();$opdid=array();$alldata=array();$completion=array();$opdtestid=array();$sex=array();$age=array();
 $pstartdt = $_POST['pstartdt']; $penddt = $_POST['penddt']; $ppat = $_POST['ppat'];
   
// Check connection 
        // note patient id is the actually the admission id that is passed
     
    $servername = "localhost";
    $username = "vbamba_pharmacy";
    $password = "offering2her";
    $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) 
    { $errdesc = "Connection failed: " . $conn->connect_error;  
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc); $conn->close();  exit(); 
    }

$pstartyyyy=substr($pstartdt,6,4);$pstartmm=substr($pstartdt,3,2);$pstartdd=substr($pstartdt,0,2);
  $pstartdt=$pstartyyyy.$pstartmm.$pstartdd;
  $pendyyyy=substr($penddt,6,4);$pendmm=substr($penddt,3,2);$penddd=substr($penddt,0,2);  
  $penddt=$pendyyyy.$pendmm.$penddd;
if ($ppat == "Z") {
     $sql = "SELECT  opdtestid,patientid, testid, opdid, opddate, ptname,testname,sex,age, completion FROM opdtest where 
          opddate >= '$pstartdt' AND opddate <= '$penddt'
          ORDER by opddate DESC, ptname ASC, testname ASC"; 
   }
 else {
  $sql = "SELECT  opdtestid,patientid, testid, opdid, opddate, ptname,testname,sex,age,completion FROM opdtest where 
          patientid ='$ppat' AND opddate >= '$pstartdt' AND opddate <= '$penddt'
          ORDER by opddate DESC, testname ASC"; } 
     
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Labs "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close();
          exit(); 
          }
// get all the fields and return to main program
      if ($result->num_rows > 0) 
    {  
      while($row = $result->fetch_assoc()) 
      {$patientid[]=$row["patientid"];$ptname[]=$row["ptname"];$testid[]=$row["testid"];$testname[]=$row["testname"];
       $opdid[]=$row["opdid"];$opddate[]=$row["opddate"]; $opdtestid[]=$row["opdtestid"];$sex[]=$row["sex"]; 
			 $age[]=$row["age"];   $completion[]=$row["completion"];    
     $alldata[]=$row["patientid"]."--".$row["testid"]."--".$row["opddate"]."--".$row["ptname"]."--".
       $row["testname"]."--".$row["opdid"]."--".$row["opdtestid"]."--".$row["age"]."--".$row["sex"];
              }  // get names and id of all patients  
    
            $succfail=true;
          $fields = array( "succfail" => $succfail, "opdid" => $opdid,"opdtestid" => $opdtestid, "opddate" => $opddate, "testsfound" => true,
          "testid" => $testid, "testname" => $testname, "sex" => $sex, "age" => $age, "ptname" => $ptname, "completion" => $completion, 
													"patientid" => $patientid, "alldata" => $alldata);
          echo json_encode( $fields); $conn->close(); }
    else {
       $succfail=true;
          $fields = array( "succfail" => $succfail, "testsfound" => false);
          echo json_encode( $fields); $conn->close(); 
    }
    
?>
  