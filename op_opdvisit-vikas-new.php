<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SAA MEDICAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.44/css/bootstrap-datetimepicker.min.css"
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.44/js/bootstrap-datetimepicker.min.js"></script
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>-->
  
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">13/5/2019-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>13/5/2019-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>13/5/2019-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script 13/5/2019 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>  
 
  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>13/05/19-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
 
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
/*    padding: 0 1.4em 1.4em 1.4em !important;
*/ 
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
.wdth {
    max-width:80%;
}
	 .lgrouptest, .lgroupsel {
    max-height: 200px;
    overflow:auto; 
}
.lgrouptestsub {
    max-height: 100px;
    overflow:auto; 
}

  
.lgrouptest  .list-group-item {  
  
  position: relative;  
  display: block;  
  padding: 10px 15px;  
  border: 1px solid #0000ff;  
}  
.lgroupsel .list-group-item {   
  position: relative;  
  display: block;  
  padding: 10px 15px;  
  border: 1px solid #00ff00;  
}  
.lgrouptestd {
  position: relative;  /* anchor for the absolute list */
}

#testlistd {
  position: absolute;  /* takes it out of document flow */
  top: 24px;           /* just below the label */
  left: 15px;
  right: 15px;
  z-index: 999;        /* sits on top of other elements */
  background: white;   /* so it covers content beneath it */
  border: 1px solid #ccc;
  padding: 0;
  margin: 0;
max-height: 460px;   /* ← limits height */
  overflow-y: auto;    /* ← makes it scrollable */
}

.lgrouptestd .list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  border-bottom: 1px solid #0000ff;
  margin-bottom: 0;
  background: white;
}
/*
.lgrouptestd  .list-group-item {  
  
  position: relative;  
  display: block;  
  padding: 10px 15px;  
  border: 1px solid #0000ff;  
}  

.lgrouptestd .list-group-item {   
  position: relative;  
  display: block;  
  padding: 10px 15px;  
  border: 1px solid #00ff00;  
}  
*/
</style>

<script type="text/javascript">
  
   function getage() { 
   var dobval=document.getElementById("iddob").value
 
  var today = new Date();
  
   var curr_date = today.getDate();
   var curr_month = today.getMonth() + 1;
   var curr_year = today.getFullYear();

  
   var birth_date = parseInt(dobval.substr(0,2))
   var birth_month = parseInt(dobval.substr(3,2))
   var birth_year = parseInt(dobval.substr(6,4))
 
   var agetemp=0
   if (curr_month == birth_month && curr_date >= birth_date){
      agetemp = parseInt(curr_year-birth_year)}
   
                 
 document.getElementById("idage").value = agetemp;  
  
   if (curr_month == birth_month && curr_date < birth_date){
      agetemp = parseInt(curr_year-birth_year-1)}
   
 document.getElementById("idage").value = agetemp;  
  
   if (curr_month > birth_month) { 
    agetemp = parseInt(curr_year-birth_year)}
      
  document.getElementById("idage").value = agetemp; 
  
   if (curr_month < birth_month){ 
      agetemp = parseInt(curr_year-birth_year-1)}
      
      document.getElementById("idage").value = agetemp;
    }
  
    function getdate(elmid)  
	 
  {
		var today = new Date();
     
   var curr_year = today.getFullYear();
    var thisid=elmid; var thiserrid=thisid+'err';
    var dobinp=document.getElementById(elmid).value 
     
        var dobinpdd=parseInt(dobinp.substr(0,2))
        if (!dobinpdd) {
					$('#'+thiserrid).removeClass('hidden')
          document.getElementById(thiserrid).innerHTML = "Invalid!"              
            return false;};
        var dobinpmm=parseInt(dobinp.substr(3,2))
         if (!dobinpmm) {$('#'+thiserrid).removeClass('hidden');document.getElementById(thiserrid).innerHTML = "Invalid!"       
             
            return false;};
        var dobinpyyyy=parseInt(dobinp.substr(6,4))
        if (!dobinpyyyy) { $('#'+thiserrid).removeClass('hidden') ;document.getElementById(thiserrid).innerHTML = "Invalid!"       
           
            return false;};
        if (dobinpdd < 1 || dobinpdd > 31) {
					 $('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML = "Invalid date!"       
           
            return false;};
        if (dobinpmm < 1 || dobinpmm > 12) {
					  $('#'+thiserrid).removeClass('hidden') 
             document.getElementById(thiserrid).innerHTML = "Invalid month!"       
            
            return false;};
        if (dobinpyyyy < 1910  || dobinpyyyy > 2099) {
					$('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML = "Invalid!"       
            
            return false;};
		    if (dobinpyyyy > curr_year) {
					 $('#'+thiserrid).removeClass('hidden')
            document.getElementById(thiserrid).innerHTML = "Invalid birth year"       
           
					            return false;};
		   
       if (dobinpdd == 31 && !(dobinpmm == 1 || dobinpmm == 3 || dobinpmm == 5 || dobinpmm == 7 || 
                               dobinpmm == 8 || dobinpmm == 10 || dobinpmm == 12)) {
				 $('#'+thiserrid).removeClass('hidden') 
           document.getElementById(thiserrid).innerHTML = "Invalid date!"       
            
            return false;};
    
      var leapyear = dobinpyyyy % 4
      if (dobinpmm == 2) {
       if ( dobinpdd > 29) {
				 $('#'+thiserrid).removeClass('hidden') 
            document.getElementById(thiserrid).innerHTML ="Invalid date for feb"      
            
            return false;}
    
        else {
        if ((dobinpdd==29) && !(leapyear==0)){
					$('#'+thiserrid).removeClass('hidden') 
         document.getElementById(thiserrid).innerHTML ="It is not leap year,correct the date"      
            
            return false;}; 
              
      }
   }
    
         document.getElementById(thiserrid).innerHTML = " "
         $('#'+thiserrid).addClass('hidden') 
				 return true;
  }      
  
 function checkbp(elmid) {
    var str = document.getElementById(elmid).value;
    var patt = new RegExp("^[1-9][0-9]{1,2}\/[1-9][0-9]{1,2}$");
   
   var   thiserrid=elmid+"err";
  if (!patt.test(str)) {     
        document.getElementById(thiserrid).innerHTML = "Invalid !"   
            $('#'+thiserrid).removeClass('hidden') 
      }
   else {
         document.getElementById(thiserrid).innerHTML = "" 
         $('#'+thiserrid).addClass('hidden') 
         }
}  
  
function checklimit(elmid,flower,fhigher) {
   var  errid=elmid+"err";
        var temp=document.getElementById(elmid).value 
         if (temp < flower || temp > fhigher) {
          $('#'+errid).removeClass('hidden')
          document.getElementById(errid).innerHTML = "Invalid : Range is between "+flower+" and "+ fhigher         
           }
      else {
         $('#'+errid).removeClass('hidden')
         document.getElementById(errid).innerHTML = " "
         $('#'+errid).addClass('hidden') 
         }
}  
/*
$(document).on('change','[id^=chk]', function (e) {  
//if ($(this).hasClass('group-parent')) return;
// note that the checkbox has chk+testid as id and testname as value. 
   if (this.id === 'chk00') return;   
    var thisid=this.id;  //  get id like chk5 or whatever it is
    var selid="sel"+thisid  // create id for select list so selchk5
    var testid =Number(thisid.substr(3))   // this will get the number 5 i.e testid
    
    if(!document.getElementById(thisid).checked) // if item has been unchecked then remove it
      { $('#'+selid).remove(); }
     else {     // insert in the right position of the selected list
     var desc='<li class="list-group-item" id=' + '"' +selid+  '">'+ document.getElementById(thisid).value+"</li>";  
     var  len=  $("#testsel li").length
    $("#testsel li").each(function(index,element){ 
      var eachid=this.id;
    
    var eachnum =Number(eachid.substr(6))  
  
    if (testid < eachnum) {
      $('#'+eachid).before(desc);
      return false;
      }
    if (index == len - 1) {
     $("#testsel").append(desc);}
      })
   }
});
*/

$(document).on('change', '[id^=chk]', function () {
    if (this.id === 'chk00') return;

    var thisid = this.id;
    var testid = Number(thisid.substr(3));

    // Check if this checkbox's parent <li> is followed by a <li> containing a nested <ul>
    var $myLi = $(this).closest('li.list-group-item');
    var $nextLi = $myLi.next('li.list-group-item');
    var $nestedUl = $nextLi.find('ul.list-group');

    if ($nestedUl.length > 0) {
        // This is a PARENT checkbox
        var checked = this.checked;
        $nestedUl.find('input[type=checkbox]').prop('checked', checked).each(function () {
            var childid = this.id;
            var childSelid = "sel" + childid;
            var childNum = Number(childid.substr(3));
            if (!checked) {
                $('#' + childSelid).remove();
            } else {
                insertIntoSelected(childSelid, childNum, this.value);
            }
        });
        return; // parent itself never goes into selected list
    }

    // Check if this is a SUBTEST (lives inside a nested ul)
    var $closestUl = $(this).closest('ul.list-group');
    if ($closestUl.attr('id') !== 'testlist') {
        // It's a subtest — find parent checkbox
        var $parentLi = $closestUl.closest('li.list-group-item').prev('li.list-group-item');
        var $parentChk = $parentLi.find('input[type=checkbox]');

        if (!this.checked) {
            $parentChk.prop('checked', false);
        } else {
            var allChecked = true;
            $closestUl.find('input[type=checkbox]').each(function () {
                if (!this.checked) { allChecked = false; return false; }
            });
            $parentChk.prop('checked', allChecked);
        }
    }

    // Add/remove from selected list (subtests only, not parents)
    var selid = "sel" + thisid;
    if (!this.checked) {
        $('#' + selid).remove();
    } else {
        insertIntoSelected(selid, testid, this.value);
    }
});

function insertIntoSelected(selid, testid, value) {
    if ($('#' + selid).length) return; // duplicate guard

    var desc = '<li class="list-group-item" id="' + selid + '">' + value + '</li>';
    var inserted = false;

    $("#testsel li").each(function () {
        if (this.id === 'selchk00') return true;
        var eachnum = Number(this.id.substr(6));
        if (testid < eachnum) {
            $(this).before(desc);
            inserted = true;
            return false;
        }
    });

    if (!inserted) {
        $("#testsel").append(desc);
    }
}
function freezefields() {     // this will freeze all the fields and make it readonly after insert or update when the continue button shows
  $('#idinpadmdt,#iddob,#idage,#idht,#idwt,#idbp,#idtemp,#idpulse,#idcomplaint,#idallergy,#idcf,#idresp,#idcaseno,#idbed').prop('readonly', true);   
     
     $('#idpat,#idbldgrp,#idsex,#idcatg,#idtreatdr,#idrefdr').prop('disabled', true); 

}
function initseltests() {    // remove all the items except the heading
    $("#testlist input:checkbox").each(function(index,element){ 
     $('#'+this.id).prop('checked', false);
    })
  $('#testsel > li').slice(1).remove()
}  
function initallfields() {
          
      document.getElementById("idpatinpconf").value="";  
      $('#idpatconfrow').addClass('hidden') // show confirm
      $('#idpatmsgrow').addClass('hidden')
 
     $('#idbldgrp,#iddob,#idage,#idsex,#idcatg,#idht,#idwt,#idbp,#idtemp,#idpulse,#idcomplaint,#idallergy').val('');
     $('#iddob,#idage,#idht').prop('readonly', true); 
     var el=document.getElementById("idrefdr");
     el.selectedIndex=0
     var el=document.getElementById("idtreatdr");
     el.selectedIndex=0
     $('[id$=err]').each(function(i, selected){ 

    document.getElementById(this.id).innerHTML = ""
    $(this.id).addClass('hidden') 
  })
     $('#idbldgrp,#idsex,#idcatg').prop('disabled', true); 
     $("#idtreatdr option[value='Z']").prop("disabled",true);
}  
  
$(document).ready(function(){
  var fieldsvalid="Y"
  
  initallfields()   
  initseltests()
//  $("#idmaintchart,#idpatconfrow,#idpatmsgrow").addClass('hidden')
 // $('[data-toggle="tooltip"]').tooltip();
              

$(document).on('change','#idpat',function(){
  
  var valopt= $('#idpat').val();
  
    if (valopt == "Z") {    // meaning dont show any patient and clear everything      
        initallfields()
 //       $('#idinpadmdt').prop('readonly', true);   
       return;
     }
     initallfields()   
     initseltests()
      var patid=valopt;
/* vikas 04/15
     $.post("op_newgetpatmaster.php", // $.post("patientmasterdata.php",
      { pid: patid},
      function(result, status){ 
        
        if (status) {
         var fields = JSON.parse(result); 
       
      if (!fields.succfail) { 
        msg='Program terminating with error '+ fields.msg
         alert(msg)
         alert("kindly contact the programmer")
         return;}
vik 04/15             
*/ 
 $.post("op_newgetpatmaster.php",
      { pid: patid})
.done(function(result, status){

    if (status) {

      try {
           var  fields = JSON.parse(result)         
        } catch (e) {
          var  msg='Program op_newgetpatmaster.php terminating with error '+ result
       
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;  
        }
       if (!fields.succfail) { 
        var vmsg='Program op_newgetpatmaster.php terminating with error '+ result.msg
         alert(vmsg)
				  $(document).off()
         return;}
///vikas
        
         var datenow = new Date();
         
         $('#idinpopddt').datetimepicker({
         format: 'DD.MM.YYYY - hh: mm a',
         minDate: '04.24.1914',
         maxDate: '04.24.2064',
         sideBySide: true, 
         useCurrent: false,     
        defaultDate: datenow
       })  

       
         ptaddress=fields.address    
        
        $('#idbldgrp,#idsex,#idcatg').prop('disabled', false);
					
       $("select#idsex").val(fields.sex);
        $("select#idcatg").val(fields.catg);
        $("select#idbldgrp").val(fields.bldgrp);
         document.getElementById("idwt").value=fields.wt;  //vik 04/15/26
        document.getElementById("idht").value=fields.ht;  //to keep the value empty  
        if(fields.dob == ""){
					document.getElementById("idage").value=fields.age}
					else{
        document.getElementById("iddob").value=fields.dob; 
        getage()}
        document.getElementById("idallergy").value=fields.allergy; 
       $('#idbldgrp,#idsex,#idcatg').prop('disabled', true);  
        
          
          document.getElementById("idpatinpconf").value="";  
           $('#idpatconfrow').removeClass('hidden') // show confirm  
                 
   }  // end good status
/// vik 04/15/26 now get meds
$.post("ph_getpatientdrugs.php",
    {ppatid: patid})
.done(function(resultd, statusd){

    if (statusd) {

      try {
           var  fieldsd = JSON.parse(resultd)         
        } catch (e) {
          var  msg='Program ph_getpatientdrugs.php terminating with error '+ fieldsd.msg
       
         alert(msg)
         alert("kindly contact programmmer")
           $(document).off()
               return;  
        }

     if (!fieldsd.succfail) { 
        if (fieldsd.msg == "No rows")
           { $('#testlistd > li').slice(0).remove();}
         else {      
         var vmsg='Program ph_getpatientdrugs.php terminating with error '+ fieldsd.msg
         alert(vmsg)
	$(document).off()
         return;}
       } 
    else {	   
       $('#testlistd > li').slice(0).remove();
      
       var pdrugname=fieldsd.drugname; var pdrugid=fieldsd.drugid; var pdrugstrength=fieldsd.drugstrength;var pdrugtype=fieldsd.drugtype;  
       var pqtyissued=fieldsd.qtyissued; var prate=fieldsd.rate; var pamount=fieldsd.amount;var pdtofissue=fieldsd.dtofissue;
      var docname=fieldsd.docname;var premarks=fieldsd.remarks;
       var pdruglen=pdrugid.length
       for (i = 0; ((i < (pdruglen)) && (i < 30)); i++) {
        
          var desc='<li class="list-group-item" id=' + '"' +pdrugid[i]+  '">' + pdrugname[i]+'----'+'(QTY)  '+pqtyissued[i]+'----(ISSUED)  '+
              pdtofissue[i].substr(6,2)+'/'+pdtofissue[i].substr(4,2)+'/'+pdtofissue[i].substr(0,4)+'--'+docname[i]+'--'+premarks[i]+'</li>';  

        $("#testlistd").append(desc);
         }
      }
           
      }  // end if status
  })  // .done post    
  .fail(function(xhr,status, error) {
			var temp="Request ph_getpatientdrugs.php failed kindly contact programmmer status is "+xhr.status
			  alert(temp)
          $(document).off()
         return;
    }) 
          
   // vik 04/15 till here
})  // .done post    
  .fail(function(xhr,status, error) {
			var temp="Request op_newgetpatmaster.php failed kindly contact programmmer status is "+xhr.status
			  alert(temp)
          $(document).off()
         return;
    })          

 })      
  
$(document).on('blur','#idtreatdr',  function(){
          
  var thisid = this.id; thiserrid=thisid+'err';
  
  if (thisid == "idtreatdr") {
    if (document.getElementById(thisid).selectedIndex == 0) {      
           document.getElementById(thiserrid).innerHTML = "Invalid !"
            $('#'+thiserrid).removeClass('hidden')
            return;
           }
        else {
         document.getElementById(thiserrid).innerHTML = ""
         $('#'+thiserrid).addClass('hidden')  
         return;
         }
   return; 
  }
	})
$(document).on('blur','#idht,#idwt, #idtemp, #idpulse, #idresp',  function(){
var thisid = this.id;thiserrid=thisid+'err';
         if (document.getElementById(thisid).value == "") { 
             document.getElementById(thisid).value =0
          document.getElementById(thiserrid).innerHTML = ""
          $('#'+thiserrid).addClass('hidden')  
         return;}
        if (document.getElementById(thisid).value == 0) {
         document.getElementById(thiserrid).innerHTML = ""
          $('#'+thiserrid).addClass('hidden')    
         return;}
	if(thisid=="idht"){
        checklimit(thisid,60,300)
      } 
     if(thisid=="idwt"){
      checklimit(thisid,5,250)
      }
     if(thisid=="idresp"){
      checklimit(thisid,10,200)
      }
        
  
  if(thisid=="idpulse"){
    checklimit(thisid,20,150)
     }
  
  if(thisid=="idtemp"){
    checklimit(thisid,80,110)
     }
 
}) 
 
$(document).on('click','#idpatbtnconf', function (e) {
  
    if (document.getElementById("idpatinpconf").value == "y" || document.getElementById("idpatinpconf").value == "Y") {
         
        document.getElementById('idpatinpconf').value = ""
       
          if (document.getElementById("idtreatdr").selectedIndex == 0) {      
           document.getElementById("idtreatdrerr").innerHTML = "Invalid !"
            $('#idtreatdrerr').removeClass('hidden')
           
           }
           if (document.getElementById("idbp").value == "") {      
           document.getElementById("idbperr").innerHTML = ""
            $('#idbperr').addClass('hidden')
           
           }
       
//12 Dec 25 vik
          var tempinp=document.getElementById("idht").value
           if ((tempinp.trim().length === 0) || (document.getElementById("idht").value== "")){
              document.getElementById("idht").value=0
           document.getElementById("idhterr").innerHTML = ""
           $('#idhterr').addClass('hidden') }

          tempinp=document.getElementById("idwt").value
           if ((tempinp.trim().length === 0) || (document.getElementById("idwt").value== "")){ 
              document.getElementById("idwt").value=0
           document.getElementById("idwterr").innerHTML = ""
           $('#idwterr').addClass('hidden') }
          
           tempinp=document.getElementById("idtemp").value
           if ((tempinp.trim().length === 0) || (document.getElementById("idtemp").value== "")){ 
              document.getElementById("idtemp").value=0
           document.getElementById("idtemperr").innerHTML = ""
           $('#idtemperr').addClass('hidden') }

           tempinp=document.getElementById("idpulse").value
            if ((tempinp.trim().length === 0) || (document.getElementById("idpulse").value== "")){ 
              document.getElementById("idpulse").value=0
           document.getElementById("idpulseerr").innerHTML = ""
           $('#idpulseerr').addClass('hidden') }
           
           tempinp=document.getElementById("idresp").value
            if ((tempinp.trim().length === 0) || (document.getElementById("idresp").value== "")){ 
              document.getElementById("idresp").value=0
           document.getElementById("idresperr").innerHTML = ""
           $('#idresperr').addClass('hidden') }

          
//vik dec 25 till here

        fieldsvalid="Y"
       $('[id$=err]').each(function(i, selected){ 
      var temp = document.getElementById(this.id).innerHTML
      
       if (temp.indexOf("Invalid") != -1) {
          fieldsvalid="N" }
    })
        if (fieldsvalid=="N") {
          return }
       
     var  elmdob=document.getElementById("iddob").value 
     var  elmage=document.getElementById("idage").value 
     var  elmsex=$("select#idsex").val() 
     var  elmcatg=$("select#idcatg").val() 
 //    var elmaddress = ptaddress  
     
     var  elmht=document.getElementById("idht").value 
     var  elmwt=document.getElementById("idwt").value              
     var  elmbldgrp=$("select#idbldgrp").val() 
     var  elmbp=document.getElementById("idbp").value 
     var  elmtemp=document.getElementById("idtemp").value 
     var  elmpulse=document.getElementById("idpulse").value 
     var  elmresp=document.getElementById("idresp").value 
     var  elmcomplaint=document.getElementById("idcomplaint").value 
     var  elmcf=document.getElementById("idcf").value 
		  var  elmmedpresc=document.getElementById("idmedpresc").value 
     var  elmallergy=document.getElementById("idallergy").value 
     var  elmtreatdr=$("#idtreatdr option:selected").text()
     var sel=document.getElementById("idrefdr").selectedIndex;
     if (document.getElementById("idrefdr").options[sel].value == "Z") { var  elmrefdr =" "}
         else {  elmrefdr=$("#idrefdr option:selected").text()}
     var tempdt=document.getElementById("idinpopddt").value;
       var dtyyyymmdd=tempdt.substr(6,4)+tempdt.substr(3,2)+tempdt.substr(0,2)
       var  elmopddt=dtyyyymmdd
     var indxsel2 = document.getElementById("idpat").selectedIndex;                  
     var elmid=document.getElementById("idpat").options[indxsel2].value;
     var elmname=document.getElementById("idpat").options[indxsel2].text;
          var arrlab = [];
      var arrlabname = [];
     
       $("#testsel li").each(function(index,element){ 
       var eachid=this.id;     
       arrlab.push(eachid.substr(6))  // store testid

         
         var varlabname=document.getElementById(eachid.substr(3)).value  // get labname
        
         arrlabname.push(varlabname)  // put in array
         
       })
       arrlabname.splice(0, 1);  // remove 1st element
       arrlab.splice(0, 1);  // remove 1st element
       var labcount=arrlab.length;                          
      
    $.post("op_newopdadddb.php",
    { pname: elmname,  pid: elmid, pdob: elmdob, page: elmage, psex: elmsex, pcatg: elmcatg,  
     pbldgrp: elmbldgrp, pht: elmht, pwt: elmwt, pbp: elmbp, ptemp: elmtemp, ppulse: elmpulse,presp:elmresp, ptreatdr: elmtreatdr, 
     prefdr: elmrefdr, popddt: elmopddt, pallergy: elmallergy, pmedpresc: elmmedpresc, pcf:elmcf, 
     pcomplaint: elmcomplaint, parrlab:arrlab, parrlabname:arrlabname, plabcount:labcount},
    function(result, status){
    
    if (status) {
    
    var  resultdata = JSON.parse(result)
       
      if (!resultdata.succfail) { // if Insert or mod was a problem
       
        msg='Program terminating with error '+ resultdata.msg
         alert(msg)
         alert("kindly contact programmmer")
          $("select#idpat").val("Z");
              $('#idinpadmdt').val('');
              
              $(document).off()
               return;}  
     
        $("#idpatconfrow").addClass('hidden') 
        
 //      var patremove="idpat option[value='"+elmid+ "']";
 //      $('#'+patremove).remove();   
 //      $("select#idpat").val("Z");
 //       document.getElementById("idinpadmdt").value="";
 //       initallfields()   
        $("#idpatmsgrow").removeClass('hidden')
       document.getElementById("idpatmsg").innerHTML=resultdata.msg;        
       freezefields() 
       
      }  // end if status
      else {
        
        msg='Program terminating with error '+ status
         alert(msg)
         alert("kindly contact programmmer")
          $(document).off()
         return;
      }
      
      
     
   })   //  end post     
   } // end if y or Y       
})   
  

$(document).on('click','#idpatbtncan, #idpatbtncont',function(){   // if cancel then set option to view and init all fields 
 /*          
              $("select#idpat").val("Z");
              document.getElementById("idinpadmdt").value="";
                initallfields()  
            
           $("#idclose").addClass('hidden')   
            // $("select#idpat").val("Z");
//              $('#idinpadmdt').val('');
             //   initallfields()  
*/             
          location.href = "opdmenu.php";
          
})
  
}) // ready event
  
</script>
</head>
<body>
<?php
	if(!isset($_SERVER['HTTP_REFERER'])) {
     echo "access denied "; exit();
   } 
	?>

<?php

$allpatnm=array(); $allpatid=array(); $alldrs=array(); $alltestnm=array(); $alltestid=array(); $allsubtestname=array(); 

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
     
 $sql = "SELECT patientid,name FROM patient  order by name";   // get all patient
             
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Patients"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          echo json_encode( $desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$allpatnm[]=$row["name"];$allpatid[]=$row["patientid"]; }  // get names and id of all patients
     
    }

$sql = "SELECT  docname FROM doctors";   // get all doctors
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Doctor"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
          $conn->close(); exit();
       }
     if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) { $alldrs[]=$row["docname"];}  // get names and id of all patients
    }
	
	 $sql = "SELECT testid,testname, subtestname FROM labtest order by testname ASC, subtestname ASC";   // get all tests
     $result = $conn->query($sql); // execute sql
     if (!$conn->query($sql)) 
       { $errdesc = "Error: " . $sql . " " . $conn->error; $succfail=false; $operation="Select Tests"; 
        $desc = array( "succfail" => $succfail, "opration" => $operation, "msg" => $errdesc); 
      echo($desc); $conn->close(); exit();
       }
   if ($result->num_rows > 0) 
     
    {
      
      while($row = $result->fetch_assoc()) {$alltestnm[]=$row["testname"];$alltestid[]=$row["testid"];$allsubtestname[]=$row["subtestname"]; }  // get names and id of all tests
     
    }
 
  $conn->close();
?>  

  <div class="container">    
<h1> </h1>
</div>
<div class="container">
  <img src="ma.jpg" class="img-responsive center-block">
	<h3 class="text-center" style="color: blue"><strong>SRI AUROBINDO ASHRAM OPD RECORDS</strong></h3>
<hr style="border-top: 5px solid #ff0000 !important; " />

  <p></p>
</div>

<div id="idcontainer" class="container">
 <form id="fidpat" name="fnmdoc" action="" method="post" role="form">
 <div class="form-group">
   <div class="row">
     <div class="col-xs-5 col-sm-5 text-success"><h4 ><strong>OPD Visit Entry</strong></h4></div> 
      <div class="text-success">
          <a id="rtmn"  href="op_viewopdvisit.php" ><h5><strong> Click to View OPD VISIT </strong></h5></a>
            </div>
     <div class="col-xs-offset-4 col-sm-offset-4 col-xs-3 col-sm-3 text-success">
         <a id="rtmn" href="opdmenu.php" > <h4 class="pull-right"><strong>Return to OPD Menu</strong></h4></a>
     </div>
   </div>
   
    <div class="control-group">&nbsp;</div>
      
   <div class="row">
     <div id="idallpats" class="col-sm-2"> 
    <label for="idpat">Patient Name:</label>
      <select id="idpat" name="nmpat[]"  class="form-control">
        <option value="Z"  selected>Select Patient</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($allpatid); $i++) { ?> 
        <option value="<?php echo $allpatid[$i]; ?>"><?php echo $allpatnm[$i];?></option>
        <?php } ?>
    </select>
    </div> 
<!-- admission here --> 
         
     <div id="identeradmsn" class="req col-sm-3">
         <label class="control-label">OPD Date</label>
       
         <div class="input-group date" id="idopdt" >
					 <INPUT onkeydown="return false" id="idinpopddt" type="text" class="form-control" name ="nmopddt"></INPUT>
       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> 
      
      </div> 
      </div>
      
     </div>
<!-- admission here instead -->  
       <div class="control-group">&nbsp;</div>
     
    
       <fieldset class="scheduler-border"> 
       <legend class="scheduler-border">NEW OPD :</legend>
    <div class="row">
     
     <div class="col-sm-offset-1 col-sm-2">
        <label class="control-label" for="iddob">Date of Birth:</label>
			 <INPUT type ="text" maxlength="10"  class="form-control" id="iddob" name ="nmdob"></INPUT>
       <span class="text-danger" id="iddoberr"></span>
     </div>
     <div class="req  col-sm-1">
        <label class="control-label" for="idage">Age:</label>
			 <INPUT type ="number" min="1" max="120" class="form-control" id="idage" name ="nmage" ></INPUT>
        <span class="text-danger" id="idageerr"></span>
     </div>
     <div class="col-sm-1">
        <label class="control-label" for="idsex">Sex:</label>
       <select id="idsex" name="nmsex[]"  class="form-control">
       <option value="Z"  disabled selected></option>
        <option>M</option>
        <option>F</option>
       </select>
       <span class="text-danger" id="idsexerr"></span>
     </div>
       <div class="col-sm-1 ">
        <label class="control-label" for="idht">Ht(cms) </label>
				 <INPUT type ="number" min="1" max="300.00" class="form-control" id="idht" name ="nmht" ></INPUT>
       <span class="text-danger" id="idhterr"></span>
     </div>
     <div class="col-sm-1 ">
        <label class=" control-label" for="idwt">Wt:</label>
			 <INPUT type ="number" max="250.00" class="form-control" id="idwt" name ="nmwt" ></INPUT>
       <span class="text-danger" id="idwterr"></span>
     </div>
        <div class="col-sm-1"> 
    <label class="control-label" for ="idcatg">Category:</label>
      <select id="idcatg" name="nmcatg[]"  class="form-control ">
        <option value="Z"  disabled selected></option>
        <option value="A">A</option>
        <option value="NA">NA</option>
    </select>
       <span class="text-danger" id="idcatgerr"></span>  
    </div> 
       
     <div class="col-sm-1"> 
    <label class="control-label" for = "idbldgrp">Bl.Group:&nbsp;
    </label>
      <select id="idbldgrp" name="nmbldgrp[]"  class="form-control ">
        <option value="Z"  disabled selected></option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
         <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option> 
       </select>
       <span class="text-danger" id="idbldgrperr" ></span>
       
    </div>
         </div>
         <div class="control-group">&nbsp;</div>
   <div class="row">
        <div id="idalltreatdr" class="req col-sm-offset-1 col-sm-2"> 
    <label class="control-label">Treating Dr:</label>
      <select id="idtreatdr" name="nmtreatdr[]"  class="form-control">   
        <option value="Z"  selected>Select Dr</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($alldrs); $i++) { ?> 
        <option value="<?php echo $alldrs[$i]; ?>"><?php echo $alldrs[$i];?></option>
        <?php } ?>
    </select>
       <span class="text-danger" id="idtreatdrerr"></span>
    </div> 
       <div id="idallrefdr" class="col-sm-2"> 
    <label for="idrefdr">Ref Dr:</label>
      <select id="idrefdr" name="nmrefdr[]"  class="form-control">   
        <option value="Z"  selected>Select Dr</option>
        <?php  
        // all patients are put here 
       for ($i = 0; $i < count($alldrs); $i++) { ?> 
        <option value="<?php echo $alldrs[$i]; ?>"><?php echo $alldrs[$i];?></option>
        <?php } ?>
    </select>
       <span class="text-danger" id="idrefdrerr"></span>
    </div> 
   
                
        <div class=" col-sm-2">
        <label class="control-label" for="idbp">BP:</label> 
        
          <INPUT type ="text" maxlength="7" class="form-control" id="idbp" name ="nmbp" value="" ></INPUT>       
         <span class="text-danger" id="idbperr"></span> 
          
           
        </div>
          <div class="  col-sm-1">
        <label class="control-label" for="idpulse">Pulse:</label> 
        
            <INPUT type ="number" min="20" max="200" class="form-control" id="idpulse" name ="nmpulse" value="" ></INPUT>      
         <span class="text-danger" id="idpulseerr"></span>    
     </div>
       <div class="col-sm-2">
        <label class=" control-label" for="idtemp">Temp:</label>
         <INPUT type ="number" step=0.1 min="80" max="200" class="form-control" id="idtemp" name ="nmtemp" value="" ></INPUT>
         <span class="text-danger" id="idtemperr"></span>
          </div>
         
         <div class= "col-sm-1 ">
        <label class=" control-label" for="idresp">Resp:</label>
           <INPUT type ="number" step=0.1 min="10" max="200" class="form-control" id="idresp" name ="nmresp" value="" ></INPUT>
         <span class="text-danger" id="idresperr"></span>
     </div>
       
     </div>       
   
<div class="control-group">&nbsp;</div>     
   <div class="row"> 
     
      <div class="col-sm-offset-1 col-sm-4 form-group">
        <label class="control-label">Complaint & Allergy(if any) :</label>
       <textarea class="form-control" rows="6" id="idcomplaint" name ="nmcomplaint" value=""></textarea>
       <span class="text-danger" id="idcomplainterr" ></span>     
     </div>
     
      <div class="col-sm-4 form-group">
        <label class="control-label">Clinical Findings & Prov. Diagnosis :</label>
       <textarea class="form-control" rows="6" id="idcf" name ="nmcf" value=""></textarea>
      <!--<span class="text-danger" id="idcfterr" ></span> -->    
     </div>
<!--from here 04/16 vikas-->
    <div class="lgrouptestd col-sm-3">
	<label class="control-label">Drugs Previously Issued</label>  
        <ul class="list-groupd" id="testlistd">        
        </ul>
        </div> 
<div class="clearfix"></div> 
<!--till here 04/16--> 

     </div> 
       <div class="row" style="clear: both;">
      <div class=" col-sm-offset-1 col-sm-4 form-group">
      
        <label class="col-sm-offset-1 control-label">Diagnosis & Other Remarks:</label>
       <textarea class="form-control" rows="6" id="idallergy" name ="nmallergy"></textarea>   
     </div>
     
      
     <div class=" col-sm-4 form-group">
        <label class="control-label">Medicine Prescribed :</label>
       <textarea class="form-control" rows="6" id="idmedpresc" name ="nmmp" value=""></textarea>
      <!--<span class="text-danger" id="idcfterr" ></span> -->    
     </div>
    </div>
				 
				 <div class="control-group">&nbsp;</div>     
        <div class="row">
       <div class="lgrouptest col-sm-offset-1 col-sm-4">
        <ul class="list-group" id="testlist">
  <!--// note that the li items have testid as id and checkbox has chk+testid as id and testname as value. -->         
        <li class="list-group-item" id="chk00"><font size="3" color="blue" >Select Tests from Below</font></li>
          <?php $i = 0; while ( $i < count($alltestid)) {
            if (trim($allsubtestname[$i]) == "") 
             { ?> 
         <li class="list-group-item" id="<?php echo $i;?>"><input type="checkbox" id="<?php echo "chk".$i;?>" 
             value="<?php echo $alltestnm[$i];?>">&nbsp;<?php echo $alltestnm[$i];?>
         </li>
        
        <?php $i++;} else
             { ?>
              <li class="list-group-item" style="border-top: none; padding-top: 0; padding-bottom: 5px;">
                        <ul class="list-group" style="margin-bottom: 0;">
                            <?php while ($i < count($alltestid) && trim($allsubtestname[$i]) !== "") { ?>
                                <li class="list-group-item" style="border: none; padding: 5px 20px;">
                       <label>
                         <input type="checkbox" id="chk<?php echo $i; ?>" 
                                       value="<?php echo $allsubtestname[$i];?>">
                                <?php echo $allsubtestname[$i]; ?>
                       </label>
                               </li>
                      <?php $i++;} ?> 
                     </ul>
             </li>
       <?php } ?>
     <?php } ?>
    </ul>
           
        </div>
       <div class="lgroupsel  col-sm-4">
        <ul class="list-group" id="testsel">
        <li class="list-group-item" id="selchk00"><font size="3" color="green" >Tests Selected</font></li>
       
        </ul>
        </div>
    </div>
    </fieldset>
            
         
       
    <div class="control-group">&nbsp;</div> 
 <div id="idpatconfrow" class="row form-group">
       <div class="col-sm-offset-2  col-sm-2">
       <input type="button" name="nmpatbtncan" id="idpatbtncan" class="btn btn-primary vtop" value= "E x i t">         
       </div>       
       <div id="idpatinp">
       <div class="col-sm-3 text-warning vtop1">Type Y and click  Confirm to accept or Click  Exit to cancel :</div>
       <div class="col-sm-1">
         <INPUT type ="text"  maxlength="1" class="col-sm-1 form-control vtop2" id="idpatinpconf" value="N" name="nmpatinpconf" ></INPUT>
        </div>
       </div> 
       <div class="col-sm-2">
      <!--input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="btn btn-primary" title="Please type Y  before clicking me" 
             value= "Confirm"-->      
       <input type="button" name="nmpatbtnconf" id="idpatbtnconf" class="vtop btn btn-primary"  value= "Confirm">
                                    
          </div>
 </div> 
     
 <div id="idpatmsgrow" class="row form-group">
       <div  class="col-sm-offset-2 col-sm-3 text-success"><h4 id="idpatmsg"></h4></div>
       <div class="col-sm-offset-2 col-sm-2 col-xs-2">
       <input type="button" name="nmpatbtncont" id="idpatbtncont" class="btn btn-primary" value= "Continue">         
       </div>   
 </div>          
 <div class="control-group">&nbsp;</div> <div class="control-group">&nbsp;</div>             
   
</div>
</form>
</div> 
</body>
</html>
     