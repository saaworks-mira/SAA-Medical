<?php
  
$opddate=array();$opdid=array();$testname=array();$testid=array();$patientid=array();$completion=array();
$alltestid=array();$alltestnm=array();
$testdesc = array("Biochemistry","Haematology","Urine-routine","Urine-culture","Blood-culture","Thyroid-Function",
               "HbsAG"," HbA1C","RA-Factor","WidalTest","Malaria-Test","Stool-Routine","Stool-Culture","Sputum-Test");
// Check connection 
      $opdselected = $_POST['popdid'];
     
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
       echo json_encode($desc); $conn->close(); exit(); 
    }
$sql = "SELECT testid,testname FROM labtest ";   // get all tests
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Tests"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$alltestnm[]=$row["testname"];$alltestid[]=$row["testid"];}  // get names and id of all tests
     
    }
  $sql = "SELECT patientid,opdid,opddate from opdtest
      where opdid = '$opdselected'";   // select that record from dropdown using id
     $result = $conn->query($sql); // execute sql
          if (!$conn->query($sql)) 
         { $errdesc = "Error: " .  $conn->error." sqlstate ".$conn->sqlstate; $succfail=false; $operation="Connection on Select Maint Record "; 
          $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); 
          exit();
          }
// get all the fields and return to main program
         
   if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      { $opddate[]=$row["opddate"];$opdid[]=$row["opdid"];$patientid[]=$row["patientid"];}  
    }
?>           
  <div id="idtestdata">         

<?php  
for ($i = 0; $i < count($opddate); $i++) { ?> 
 <div class="control-group">&nbsp;</div><div class="control-group">&nbsp;</div>  
  

<div class="row">    
   <div class="lgrouptest col-sm-offset-1 col-sm-4">
        <ul class="list-group" id="testlist">
  <!--// note that the li items have testid as id and checkbox has chk+testid as id and testname as value. -->         
        <li class="list-group-item" id="chk0"><font size="3" color="blue" >Select Tests from Below</font></li>
          <?php for ($i = 0; $i < count($alltestid); $i++) { ?> 
         <li class="list-group-item" id="<?php echo $alltestid[$i];?>">
           <input type="checkbox" id="<?php echo "chk".$opdid[$i]."-".$alltestid[$i];?>" 
             value="<?php echo $alltestnm[$i];?>">&nbsp;<?php echo $alltestnm[$i];?></li>
        <?php } ?> 
        
        </ul>
        </div>
 
