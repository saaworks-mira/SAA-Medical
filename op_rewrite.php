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
set_error_handler("customError");
 $pfilen= $_POST['pfilen']; $reportdata= $_POST['preportdata']; 
        
        $newreport=$pfilen;
        $dir = 'opdreports';
//        unlink($dir."/".$cacheFile);
//        echo stripslashes($datarec);
    if  (file_put_contents($dir."/".$newreport, stripslashes($reportdata)) !== FALSE) { 
 //      if  (file_put_contents("out.html", stripslashes($datarec)) !== FALSE) { 
//      echo substr(stripslashes($datarec),3000);
      $succfail=true;
       $desc = array( "succfail" => $succfail); 
       echo json_encode( $desc); } 
    else { echo "error here";}
?>
