<?php
    
    if((!empty($_REQUEST['puser'])) && (!empty($_REQUEST['ppasswd']))) { // 
        $puser = $_POST['puser']; $ppasswd = $_POST['ppasswd'];
       $servername = "localhost";
       $username = "vbamba_medical";
        $password = "offering2her";
        $dbname = "vbamba_medical";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
      if ($conn->connect_error) 
       { $errdesc = "Connection failed: " . $conn->connect_error; 
       $succfail=false;$desc = array( "succfail" => $succfail, "msg" => $errdesc); echo json_encode( $desc); $conn->close(); exit(); 
       }
//-  Security- This statement below should be added for every text field input by the user in every program that
// does an insert or update into a table. 
// This is to prevent the program from crashing in case they enter unusual characters like ???\\\'" etc       
       $puser=$conn->real_escape_string($puser); $ppasswd=$conn->real_escape_string($ppasswd);
      $sql = "SELECT * FROM edituser WHERE user_name='$puser' AND password='$ppasswd'";
// for inserts we can use INSERT INTO user_sha1 VALUES ('member1',SHA1('secretpassword') ); it is "divine" password      
     $result = $conn->query($sql); // execute sql
     
          if (!$conn->query($sql)) 
         { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; 
          $desc = array( "succfail" => $succfail, "msg" => $errdesc); echo json_encode($desc); $conn->close(); exit();
          } 
     if ($result->num_rows == 1) 
      
         { $succfail=true;
          $desc = array( "succfail" => $succfail); echo json_encode( $desc);
         }
     else
        
        { $errdesc = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid userid/password"; $succfail=false;   
           $desc = array( "succfail" => $succfail, "msg" => $errdesc); echo json_encode($desc); $conn->close(); exit();
        }    
   }
?>
