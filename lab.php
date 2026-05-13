<?php // 
?>
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
 
<style>
  
 @media print {
  #idadmdt { width: 20% ;}
  [class*="col-sm-"] {
    float: left; 
  }
  
  fieldset {page-break-after: always;}
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

</style>


<script type="text/javascript">   
function loadreport ()  {
     var insertid=document.getElementById("idreport").firstElementChild.id
     var filen='reports/'+insertid.substr(8)+'.html'
//     var filen='83-221-4-Microbiology.html'
//     105-277-14-Urine.html
    filen += '?_=' + (new Date()).getTime();
     $( '#'+insertid ).load(filen, function(response,status,xhr){
        if (status) { 
          $( '#idpatmsgrow' ).addClass("hidden")
          $("#idpatconfrow").removeClass('hidden') }
     })  // end load
     
}
$(document).ready(function(){
 loadreport()
  
})
$(document).on('click','#idpatbtnconf', function (e) {	
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {
        var temp=$("#idfile").val() 
        var insertid=document.getElementById("idreport").firstElementChild.id
       
        $("#"+insertid).find('#idfile').text(temp)
       var datarec= document.getElementById(insertid).innerHTML     
       var reportname=insertid.substr(8)+'.html';     // ger report name
      
     $.post("ip_rewrite.php",
           { pfilen: reportname, pdatarec:datarec},

         function(result, status){
         
          if (status) { 
           
         var fields = JSON.parse(result); 
         if (!fields.succfail) { 
           msg='Program terminating with error '+ fields.msg
           alert(msg)
           return;}
        $("#idpatconfrow").addClass('hidden')
        document.getElementById('idpatinpconf').value = "N"
       $("#idpatconfrow").addClass('hidden') 
        $("#idpatmsgrow").removeClass('hidden') 
       document.getElementById("idpatmsg").innerHTML = "      Results Successfully Recorded;"
        $("#idfilelink").remove() 
            reportname += '?_=' + (new Date()).getTime();
  //     var filenm='<h4><a id="idfilelink" href="reports/' + reportname">Click to View Lab Report</a></h4>'
       $(filenm).insertBefore( "#idpatmsg");
      }     // end good status  
    })  // end post      
}      // end if y or Y       
})      
$(document).on('click','#idpatbtncan, #idpatbtncont',function(){   // if cancel then set option to view and init all fields                   
          location.href = "ashrammed.php";      // put ashrammed.php in quotes. Earlier it was not...vikas          
})

</script>
</head>
<body>
<?php $filen=$_GET["fn"]; $len=strlen($filen)-5;$fileid=substr($filen,0,$len);?>
 <div id="idreport">
 <div id="idinsert<?php echo $fileid;?>"></div> 
</div>
 <div id="idpatconfrow" class="row form-group hidden">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">         
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click Save to Edit / Click  Exit to cancel :</div>
       <div class="col-sm-1">
       <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="" name="nmpatinpconf" >
        </div>
       </div>       
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Save">         
</div>     
     
 <div id="idpatmsgrow" class="row form-group hidden">
       <div  class="col-sm-offset-2 col-sm-3 text-success"> <h4 id="idpatmsg"></h4></div>
       <div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <input type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue">         
       </div>   
 </div> 
</body>
 