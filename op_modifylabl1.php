<?php // 
?>
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=z3gaa15n5uh8rm94y1onj2wj3mji7umrqe26n2r79xa9crk6"></script>

  <script>tinymce.init({
        height: "2300",
 selector:'div#idfilem' });</script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
 
<style>
  
 @media print {
  #idadmdt { width: 20% ;}
  [class*="col-sm-"] {
    float: left; 
  }
 
	.form-control { width: 20% ;}  
}

 ul > li a {
    color: #337ab7;
}

fieldset {
    border: 3px solid #0000ff !important;
    padding: 0 1.4em 1.4em 1.4em !important;
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
  
.navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .ctr {
  text-align: center;
}
input {
   margin-right:28px;  
}
 .cshort  {max-width:80px;} 
</style>


<script type="text/javascript">  
	 var insertid;
function loadreport ()  {
      insertid=document.getElementById("idreport").firstElementChild.id
     var filen='opdreports/'+insertid.substr(8)+'.html'
     
     filen += '?_=' + (new Date()).getTime();
//    var temp = filen+ ' #idfile';
    $( '#'+insertid ).load(filen, function(response,status,xhr){
        if (status) { 
//          alert(content)
          
 //          tinymce.editors['idfilem'].hide();
//           $('#idfilem').prop('readonly', true); 
//          document.getElementById("idsnm").value = document.getElementById("idsn").value
          document.getElementById("idnamem").value = document.getElementById("idname").value
          document.getElementById("idagem").value = document.getElementById("idage").value
           document.getElementById("idsexm").value = document.getElementById("idsex").value
          document.getElementById("iddobm").value = document.getElementById("iddob").value
          document.getElementById("idrefdrm").value =  document.getElementById("idrefdr").value
          
//          document.getElementById("idsnm").readOnly = true;
          document.getElementById("idnamem").readOnly = true;
          document.getElementById("idagem").readOnly = true;
           document.getElementById("idsexm").readOnly = true;
          document.getElementById("iddobm").readOnly = true;
          document.getElementById("idrefdrm").readOnly = true;
          document.getElementById("idfilem").innerHTML= document.getElementById("idfile").innerHTML
           $( '#'+insertid ).hide()
          tinyMCE.activeEditor.setContent(document.getElementById("idfile").innerHTML);
          $('.mce-toolbar').hide();
          tinymce.activeEditor.getBody().setAttribute('contenteditable', false);
//          $('#idfilem').prop("readonly",true);
         $( '#idpatmsgrow' ).addClass("hidden")
          $( '#idpatconfrow' ).addClass("hidden")
          $( '#idpateditrow' ).removeClass("hidden")
        } 
     })  // end load
     
}
$(document).ready(function(){
 loadreport()
//    $('#idsn,#iddob,#idfile').prop('readonly', true); 
})
$(document).on('click','#idpatbtnconf', function (e) {	
  	$('#idpatbtnconf').prop("disabled",true);
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {
        $('.mce-toolbar').hide();
//			alert(document.getElementById("idfilem").innerHTML)
			var content=tinyMCE.get('idfilem').getContent()
//			alert(content)
//			tinyMCE.activeEditor.setContent(document.getElementById("idfilem").innerHTML);
          tinymce.activeEditor.getBody().setAttribute('contenteditable', false);
//			   $("#"+insertid).show();
//			   document.getElementById("idfile").innerHTML= tinyMCE.activeEditor.getContent(); 
//		       $("#"+insertid).hide();
        var temp=$("#idfilem").html() 
//        var insertid=document.getElementById("idreport").firstElementChild.id       
        $("#"+insertid).find('#idfile').html(content)
        
/*         var temp=document.getElementById("idsn").value        
         $("#"+insertid).find('#idsn').attr({ "value" : temp });
           
         
          var temp=document.getElementById("iddob").value 
          $("#"+insertid).find('#iddob').attr({ "value" : temp });
      
      var temp=document.getElementById("idrefdr").value 
          $("#"+insertid).find('#idrefdr').attr({ "value" : temp });
*/         
       
     
//			 var insertid=document.getElementById("idreport").firstElementChild.id  
			 var reportdata= document.getElementById(insertid).innerHTML 
//			 alert(reportdata)
       var reportname=insertid.substr(8)+'.html';     // ger report name
   
     $.post("op_rewrite.php",
           { pfilen: reportname, preportdata:reportdata},

         function(result, status){
         
          if (status) { 
           
         var fields = JSON.parse(result); 
         if (!fields.succfail) { 
           msg='Program terminating with error '+ fields.msg
           alert(msg)
           return;}
        	$('#idpatbtnconf').prop("disabled",false);    
//        $('#idsnm,#iddobm,#idfilem,#idrefdrm').prop('readonly', true);  
						 $('#iddobm,#idfilem,#idrefdrm').prop('readonly', true);  
        $("#idpatconfrow").addClass('hidden')
        document.getElementById('idpatinpconf').value = ""
        alert("      Lab Report updated")
        $("#idfilelink").remove() 
//        window.close();
         location.href = "op_newlab.php"; 
      }     // end good status  
    })  // end post      
}      // end if y or Y  
  	$('#idpatbtnconf').prop("disabled",false);
})      
$(document).on('click','#idpatbtnexit, #idpatbtncont,#idpatbtncan',function(){   // if cancel then set option to view and init all fields 
            window.close();
//          location.href = "ip_newlab.php";      // put ashrammed.php in quotes. Earlier it was not...vikas          
})

$(document).on('click','#idpatbtnprint', function(){   // if cancel then set option to view and init all fields 
         
              $("#rtmn").addClass('hidden')
              $("#idpateditrow").addClass('hidden')
              window.print()
              $("#idpateditrow").removeClass('hidden')
              $("#rtmn").removeClass('hidden')
})
$(document).on('click','#idpatbtnedit', function(){   // if cancel then set option to view and init all fields 
	            $('.mce-toolbar').show();
              tinymce.activeEditor.getBody().setAttribute('contenteditable', true);
//               $('#idsnm,#iddobm,#idfilem,#idrefdrm').prop('readonly', false);
	            $('#iddobm,#idfilem,#idrefdrm').prop('readonly', false);
              $("#rtmn").addClass('hidden')
              $("#idpateditrow").addClass('hidden')
             
              $("#idpatconfrow").removeClass('hidden')
              $("#rtmn").removeClass('hidden')
})


</script>
</head>
<body>
<?php    
// if(!isset($_SERVER['HTTP_REFERER'])) {
//     echo "access denied "; exit();
//   }  
  $filen=$_GET["fn"]; $len=strlen($filen)-5;$fileid=substr($filen,0,$len); // -5 to subtract .html 
      $name="";$age=""; $sex="";$refdr="";$prepdt="";
?>  
 <div id="idreport">
 <div id="idinsert<?php echo $fileid;?>"></div> 
</div>
 <!--// added  -->
<div class="container">    
<h1> </h1>
</div>
<div class="container">
   <img src="mothersymbol.png" class="img-responsive center-block">
  <h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM CLINICAL LABORATORY</strong> </h3>
<hr style="border-top: 5px solid #ff0000 !important; " />
<!-- start here for adm details--> 
 </div>   
<div class="container">
 <form class="form-inline">
 <div class=" form-group">
   
   <div class="control-group">&nbsp;</div>       
   <div class="row form-group">   
  
    <label for="idnamem">Patient Name:</label>      
    <input type="text" id="idnamem" name="namem"  class="form-control" value="<?php echo $name; ?> " readonly>
     
        <label class="control-label" for="idagem">Age:</label>
     <input type ="text" class="cshort form-control" id="idagem"  value="<?php echo $age; ?> " readonly >
     
     
        <label class="control-label" for="idsexm">Sex:</label>
     <input type ="text"  class="cshort form-control" id="idsexm"  value="<?php echo $sex; ?> " readonly>       
    
      
       </div> 
         <div class="control-group">&nbsp;</div> 
   
   <div class="row form-group">       
        <label class="control-label">Ref Dr :</label>
          <input type ="text" class="form-control" id="idrefdrm"  value="<?php echo $refdr; ?> " readonly>     
  
     
        <label class="control-label" for="iddobm">Date of Report:</label>
 <input type ="text" maxlength="10"  class="form-control" id="iddobm" name ="nmrepdtm" 
        placeholder="dd/mm/yyyy" value="<?php echo $prepdt; ?> " readonly>               
        
        </div>
 </div>
    </form> 
   
 
 <div class="control-group">&nbsp;</div>
    <div class="row  form-group">
			<!--fieldset-->
     <div id="idfilem" class="form-control">	
     </div>
				<!--/fieldset-->
    </div>    
  <p></p>
</div>
<!-- till here -->   
 <div id="idpatconfrow" class="row form-group hidden">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">         
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click Save to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
       <input type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" >
        </div>
       </div>       
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Save">         
</div>     
     
   
    <div id="idpateditrow" class="row form-group hidden">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtnedit" id="idpatbtnedit" class="btn btn-primary vtop" value= "E d i t">         
       </div>       
       <div id="idpatinp">
       <div class="col-sm-1">
            
       <input type="button" name="nmpatbtnprint" id="idpatbtnprint" class="vtop btn btn-primary"  value= "Print"> 
          </div> 
      </div>
      <div class="col-sm-offset-4 col-sm-1">
            
       <input type="button" name="nmpatbtnexit" id="idpatbtnexit" class="vtop btn btn-primary"  value= "Exit"> 
          </div> 
      
</div>    
 <div id="idpatmsgrow" class="row form-group hidden">
       <div  class="col-sm-offset-2 col-sm-3 text-success"> <h4 id="idpatmsg"></h4></div>
       <div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <input type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue">         
       </div>   
 </div> 
</body>
 