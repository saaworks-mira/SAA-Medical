   <?php 
if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
   <script src="jquery.maskedinput.js" type="text/javascript"></script>
 
<style>
  
/* li a:hover  {background-color: blue} commented out as per shoba */

 ul > li a {
    color: #337ab7;
}
/*
a.cursor-help {
    cursor:help
  }
*/  
.req .control-label:after {
  content:"*";
  color:red;
  }
  
fieldset {
    border: 1px  groove #000 !important;

   padding: 0 0.4em 1em .7em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
} 
  
  .vtop {margin-top:6%;vertical-align:top}
  .vtop1 {margin-top:1%;}  
  .vtop2 {margin-top:14%;}
  

.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}

</style>

<script type="text/javascript">
  
   
function initallfields() {
    $('[id$=err]').each(function(i, selected){ 
    document.getElementById(this.id).innerHTML = ""
    $(this.id).addClass('hidden') 
  })    
    
     //$('#idpatconfrow').addClass('hidden') // show confirm
     $('#idpatmsgrow').addClass('hidden')
     $('#idname,#idstrength,#idgen,#idsgr').val('');
   //   $('#idage').val(0);
  $('#idtype').val('Z'); 
}
 // 5th Jan 
$(document).ready(function(){    
   initallfields()
  

	 

$(document).on('blur','#idname,#idtype', function(){   
        
  var thisid = this.id; var thiserrid=thisid+'err';
	if (thisid == "idname") {
 if (document.getElementById(thisid).value == "") {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden')          
						}
		else {
		         document.getElementById(thiserrid).innerHTML = ""
						 $('#'+thiserrid).addClass('hidden')  
		}
	}
	
	if (thisid == "idtype") {
          if (document.getElementById(thisid).selectedIndex == 0) {  
              document.getElementById(thiserrid).innerHTML = "Invalid!"
              $('#'+thiserrid).removeClass('hidden')          
						}
		
		else {
		         document.getElementById(thiserrid).innerHTML = ""
						 $('#'+thiserrid).addClass('hidden')  
		}
		}
           
       
})
  $(document).on('change','#idpat',function(){
  
   var valopt= $('#idpat').val();
  
    if (valopt == "Z") {    // meaning dont show any patient and clear everything      
        document.getElementById("idpat").value="";
        
      
       return;
     }
     
      var patid = valopt;
      $.post("ph_viewdrugdatadb.php",
      { did: patid},
      function(result, status){ 
				
        if (status) {
       var fields = JSON.parse(result); 
           if (!fields.succfail) { // if Insert or mod was a problem
        msg='Program terminating with error '+ fields.msg
         alert(msg)
				 alert("kindly contact programmer")
				 $(document).off()
         return;}     
                        
       document.getElementById("idname").value=fields.drugname;
				
        document.getElementById("idstrength").value=fields.strength;
					
				document.getElementById("idtype").value=fields.type; 
       	
				document.getElementById("idgen").value=fields.genericname; 
        document.getElementById("idsgr").value=fields.subgroup;	
        }
      })
 })
 
$(document).on('click','#idpatbtnconf', function (e) {
	
	$('#idpatbtnconf').prop("disabled",true);                         //shoba   11/06
	var valid=true;
				 if(document.getElementById("idname").value ==""){					 
					 document.getElementById("idnameerr").innerHTML = "Invalid"
					  $("#idnameerr").removeClass('hidden')
						valid=false;
					 $('#idpatbtnconf').prop("disabled",false);                      //shoba   11/06              
				 } 
				 if($("select#idtype").val()  =="Z"){					 
					 document.getElementById("idtypeerr").innerHTML = "Invalid"
					  $("#idtypeerr").removeClass('hidden')
						valid=false;
					 $('#idpatbtnconf').prop("disabled",false);                       //shoba   11/06
				 } 
			 
/*		
       $('[id$=err]').each(function(i, selected){ 
         var temp = document.getElementById(this.id).innerHTML
         if (temp.indexOf("Invalid") != -1) {
           return }
    })
 */      
					if (!valid){
						return;
						$('#idpatbtnconf').prop("disabled",false);
					}
					
 	
     var  elmname=document.getElementById("idname").value; elmname=elmname.trim();         
     var  elmstrength=document.getElementById("idstrength").value; elmstrength=elmstrength.trim(); 
     var  elmgen=document.getElementById("idgen").value;elmgen=elmgen.trim();  
     var  elmtype=$("select#idtype").val();elmtype=elmtype.trim();  
   
		
		 
     var elmsgr = document.getElementById("idsgr").value;elmsgr=elmsgr.trim();  
     
       
    $.post("ph_newdrugadddb.php",
    { pname: elmname, ptype: elmtype, pstrength: elmstrength, pgen:elmgen,psgr: elmsgr},
    function(result, status){
   
    if (status) {
  //   alert(result)
      var resultdata = JSON.parse(result)
      
      if (!resultdata.succfail) {   // if insert  a problem
       
        msg='Program terminating with error'+ resultdata.msg
        alert(msg)
       
         alert(" kindly contact programmer")
           $(document).off()
         return;}  
 //
		      
            $("#idpatconfrow").addClass('hidden') 
            $("#idpatmsgrow").removeClass('hidden')
						$("#idpatmsg").show()
            document.getElementById("idpatmsg").innerHTML="  Added New Drug Successfully";
            $("#idpatmsg").fadeOut(4000, function(){
             $("#idpatconfrow").removeClass('hidden')
						 $('#idname,#idstrength,#idgen,#idsgr').val('');  
             $('#idtype').val('Z');    // 
                        
             });         	
			//
       
        }
        
       else {
        msg='Program terminating with error '+ status
        
         alert(msg)
        
         alert(" kindly contact programmer")
       $(document).off()
         return;
      }
     $('#idpatbtnconf').prop("disabled",false);                             //shoba   11/06
   })   //  end post     
     
})

$(document).on('click','#idpatbtncan, #idpatbtncont',function(){   // if cancel then set option to view and init all fields 
         
          	$('#idpatbtnconf').prop("disabled",false);
          location.href = "opdmenu.php";      // put ashrammed.php in quotes. Earlier it was not...vikas
          
 })
$("input:radio[name=optradio]").change(function() {
     
   if (this.id == "idradioedit") {
    
     location.href="ph_editdrugmaster.php"
     return false;
   }
      
    
  
})     
})
 
<?php
	
 
	 
$allpatnm=array(); $allpatid=array(); 

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
     
     $sql = "SELECT drugid,drugname FROM drug1 ORDER BY drugname";   // get all patient
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Patients"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$allpatnm[]=$row["drugname"];$allpatid[]=$row["drugid"]; }  // get names and id of all patients
     
    }

?>  

   

  
</script>
</head>
<body>
 

 

  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM PHARMACY RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class=" form-group">
	
   <div class="row">
		  
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong> MASTER - NEW ENTRY</strong></h4>
     </div> 
		   <div class=" col-sm-2">
          <label class="radio-inline text-success font16 "><input type="radio" id="idradioedit"   name="optradio"><strong>EDIT DRUG DETAIL</strong></label></div>
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="auropharmamenu.php" > <h4 class="pull-right"><strong>RETURN TO MAIN MENU</strong></h4></a>
     </div>
   </div>
        <div class="control-group">&nbsp;&nbsp;&nbsp;</div> 
     
   <div class="row ">
       <div id="idallpat" class="col-sm-offset-1 col-sm-2"> 
    <label for="idpat" style="color: blue">Existing Drug Name:</label>
      <select id="idpat" name="nmpat[]"  class="form-control">
        <option value="Z"  selected>Select Drug</option> 
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($allpatid); $i++) { ?> 
        <option value="<?php echo $allpatid[$i]; ?>"><?php echo $allpatnm[$i];?></option>
        <?php } ?>
    </select>
    </div> 
	 </div>
   <div class="control-group">&nbsp;&nbsp;</div> 
   
	<div id="iddrug" >
     <fieldset class="scheduler-border"> 
       <legend class="scheduler-border">DRUG  MASTER  ENTRY :</legend>
  <div class="row form-group"> 
     
    <div class="req col-sm-offset-1  col-sm-3">
    <label class="control-label" for="idname">Drug Name:</label>
      
			<Input type="text" id="idname" name="name"  class="form-control"></Input>
       <span class="text-danger" id="idnameerr"></span> 
     </div>
       <div class=" col-sm-offset-1  col-sm-2">
    <label class="control-label" for="idstrength">Strength:</label>
      
				 <Input type="text" id="idstrength" name="strength"  class="form-control"></Input>
       <span class="text-danger" id="idstrengtherr"></span> 
     </div>
		<div class="col-sm-2"> 
    <label class="control-label" for="idtype">Type:</label>
      
   <select id="idtype" name="typenm"  class="form-control ">
        <option value="Z"   selected>Select Type</option>
        <option value="Tab">Tab</option>
        <option value="Cap">Cap</option>
        <option value="Liq">Liq</option>
        <option value="Oint">Oint</option>
         <option value="Inj">Inj</option>
        <option value="Pdr">Pdr</option>
        <option value="drops">drops</option>
		  <option value="Pc">Pc</option>
        <option value="Others">Others</option>
     
       </select>
       <span class="text-danger" id="idtypeerr"></span> 
     </div>
		 
    
    </div>
			<div class=" col-sm-offset-1  col-sm-3">
    <label class="control-label" for="idgen">Generic Name:</label>
      
				<Input type="text" id="idgen" name="gen"  class="form-control"></Input>
       <span class="text-danger" id="idgenerr"></span> 
     </div>
    	<div class="req col-sm-offset-1  col-sm-3">
    <label class="control-label" for="idsgr">Subgroup Name:</label>
      
				<Input type="text" id="idsgr" name="sgr"  class="form-control"></Input>
       <span class="text-danger" id="idsgrerr"></span> 
     </div>

       <div class="control-group"></div>
     
  
           
    </fieldset>  
    <div class="control-group">&nbsp;&nbsp;</div> 
    <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
				 <Input type="button" onclick="location.href='auropharma.php';" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t"></Input>
        
       </div>       
      
       <div class="col-sm-2"> <!-- col-sm/offset-2 col-sm-2 --> 
          
				 <Input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm"></Input>
         </div>                                               
                           
      </div>
 </div> 
	 
	 </div>
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
         
 </div>     

 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
    </form>  
    </div>
 
</body>
</html>
 
     