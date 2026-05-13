<?php
  if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
  } 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
function customError($errno, $errstr,$errfile,$errline) {
//  echo "<b>File Error:</b> [$errno] $errstr $errline<br>";
//  echo "Ending Script";
 $errdesc = "<b>File Error:</b> [$errno] $errstr $errline<br>"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); 
       echo json_encode($desc);  exit(); 
  die();
}
// set_error_handler("customError");

 
        
         $pcombid = $_POST['pcombid'];$opdtestid = $_POST['popdtestid'];$pfilen= $_POST['pfilen']; 
//        if ($popr == "wrt") {
        
// now update mainttest with completion flag = y
      $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

     if ($conn->connect_error) 
       { $errdesc = "Connection failed: ". $conn->connect_error; $operation="DB Connection for Update Mainttest"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); exit(); 
       } 
      $conn->autocommit(FALSE);   
      $sql = "UPDATE opdtest SET completion='Y'  WHERE opdtestid='$opdtestid'";
           if ($conn->query($sql)) // if update good
            { 
              $reportfile=$pcombid."-".$pfilen.".html";$datarec= $_POST['pfulldata']; 
              $dir = 'opdreports';
               $saved_file=file_put_contents($dir."/".$reportfile, $datarec);            
               if (($saved_file === false) || ($saved_file == -1)) {
                 $operation="File Write";
              $errdesc = "Error: " . $conn->error." File Write ".$reportfile; $succfail=false;  
              $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
               echo json_encode($desc); $conn->close();
               }  // echo discharge successfull including update 
              else {
              $conn->commit();
              $succfail=true;
              $desc = array( "succfail" => $succfail); 
              echo json_encode( $desc); $conn->close(); exit();
                   }
            }   
          else {  
            $operation="Update Opdtest Record Fail";
            $errdesc = "Error: " . $conn->error." sqlstate ".$conn->sqlstate; $succfail=false;  
            $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
            echo json_encode($desc); $conn->close();
             }  // echo discharge successfull including update 
  
        
?>