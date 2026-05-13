<?php
// echo '1';

// Get the content that is in the buffer and put it in your file //
// file_put_contents('yourpage.html', ob_get_contents());
?>

<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
  <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
 
  
  
  
<style>


</style>

<script type="text/javascript">  
  
$(document).ready(function(){
   
  var patnm=[]; var patid=[];var patage=[]; var patsex=[];var patcategory=[]; var pataddress=[];
            
      $.post("ph_getreportdata.php", 
        function(result, status){ 
      
        if (status) {
       var fields = JSON.parse(result); 
      
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         return;}
      var patnm=fields.patnm; var patid=fields.patid;var patage=fields.patage; var patsex=fields.patsex;
          var patcategory=fields.patcategory; var pataddress=fields.pataddress;
      var desc='<thead id="idthead"><tr><th>Id</th><th>Name</th><th>Age</th><th>Sex</th><th>Catg</th><th>Address</th></tr></thead>';
      $("#idtable").append(desc);  
       for (var i = 0; i < patid.length; i++) {
      var desc='<tr><td>' +patid[i]+ '</td>'+ '<td>' +patnm[i]+ '</td>'+ '<td>' +patage[i]+ 
    '</td>'+ '<td>' +patsex[i]+ '</td>'+ '<td>' +patcategory[i]+ '</td>'+ '<td>' +pataddress[i]+ '</td></tr>'  
        $("#idtable").append(desc);
       }
    var table = $('#idtable').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis', 'print' ]
    } );
 
//    table.buttons().container()
 //       .appendTo( '#idtable_wrapper .col-sm-6:eq(0)' );
//          
   }  // end good status
      
      })  // end post
    

})  
</script>
</head>
<body>
  <div id="iddata" class="container">
<table id="idtable" class="table table-bordered">
  </table>  
  </div>
</body>
     