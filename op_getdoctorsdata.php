 <?php
 if(!isset($_SERVER['HTTP_REFERER'])) {
   echo "access denied "; exit();
 } 
  $totalcnt=0;
     $name=array(); 
    
        $servername = "localhost";
        $username = "vbamba_pharmacy";
        $password = "offering2her";
        $dbname = "vbamba_pharmacy";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $succfail=true;

// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; $operation="DB Connection for opd load"; 
       $succfail=false;$desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
        echo json_encode( $desc); $conn->close(); exit(); 
       }   

  $pdocinfo = $_POST['pdoc']; $pgetcnt = $_POST['pgetcnt'];                     // get selected data for viewing
  $pstartdt = $_POST['pstartdt']; $penddt = $_POST['penddt'];  
   if ($pgetcnt =="y")
   {$sql = "select count(name) as totalcnt from opd"; }
   else { $sql = "select name from opd"; }
   $whereclause=" where ";
        
    
    $docclause="treatdr=".'"'.$pdocinfo.'"';
    $whereclause=$whereclause.$docclause." AND "; 
 
  //$todaydt=date("Y/m/d"); $todayyyyy=substr($todaydt,0,4);$todaymm=substr($todaydt,5,2);$todaydd=substr($todaydt,8,2);
      $pstartyyyy=substr($pstartdt,6,4);$pstartmm=substr($pstartdt,3,2);$pstartdd=substr($pstartdt,0,2);

    $pstartdt=$pstartyyyy.$pstartmm.$pstartdd;
    $pstartdtclause="opddt >=".$pstartdt;
    $whereclause=$whereclause.$pstartdtclause." AND ";

  
   $pendyyyy=substr($penddt,6,4);$pendmm=substr($penddt,3,2);$penddd=substr($penddt,0,2);  

   $penddt=$pendyyyy.$pendmm.$penddd;
    $penddtclause="opddt <=".$penddt;
   $whereclause=$whereclause.$penddtclause; 
  if ($pgetcnt =="n") {$whereclause=$whereclause." order by name";}
   $sql=$sql.$whereclause; 
 
 
     $result = $conn->query($sql); // execute sql

     if (!$result) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select opd"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   $rowcount=$result->num_rows;

   if ($pgetcnt=="y")   
  
    { $row = $result->fetch_assoc();$succfail=true;
    $fields = array( "succfail" => $succfail, "totalcnt" => $row["totalcnt"] );    
    }
   else {
     while($row = $result->fetch_assoc())
      { 
        $name[]=$row["name"];   
      }  
     $fields = array( "succfail" => $succfail, "name" => $name);  
        }        
    echo json_encode( $fields); $conn->close();
          
?>     