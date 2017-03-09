function edit_row(id)
{
 var description =document.getElementById("description"+id).innerHTML;
 var one11er =document.getElementById("one11er"+id).innerHTML;
 var two3monate =document.getElementById("two3monate"+id).innerHTML;
 var threehalbjahr =document.getElementById("threehalbjahr"+id).innerHTML;
 var fourjahr =document.getElementById("fourjahr"+id).innerHTML;
 var fivejahrmtl =document.getElementById("fivejahrmtl"+id).innerHTML;

 document.getElementById("description"+id).innerHTML="<input type='text' id='description_val"+id+"' value='"+description+"'>";
 document.getElementById("one11er"+id).innerHTML="<input type='text' id='one11er_val"+id+"' value='"+one11er+"'>";
 document.getElementById("two3monate"+id).innerHTML="<input type='text' id='two3monate_val"+id+"' value='"+two3monate+"'>";
 document.getElementById("threehalbjahr"+id).innerHTML="<input type='text' id='threehalbjahr_val"+id+"' value='"+threehalbjahr+"'>";
 document.getElementById("fourjahr"+id).innerHTML="<input type='text' id='fourjahr_val"+id+"' value='"+fourjahr+"'>";
 document.getElementById("fivejahrmtl"+id).innerHTML="<input type='text' id='fivejahrmtl_val"+id+"' value='"+fivejahrmtl+"'>";


 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
  var description =document.getElementById("description_val"+id).value;
  var one11er =document.getElementById("one11er_val"+id).value;
  var two3monate =document.getElementById("two3monate_val"+id).value;
  var threehalbjahr =document.getElementById("threehalbjahr_val"+id).value;
  var fourjahr =document.getElementById("fourjahr_val"+id).value;
  var fivejahrmtl =document.getElementById("fivejahrmtl_val"+id).value;

  console.log(description);
  console.log(one11er);
  console.log(two3monate);

 $.ajax
 ({
  type:'post',
  url:'modify_eintrittskarten.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   description_val:description,
   one11er_val:one11er,
   two3monate_val:two3monate,
   threehalbjahr_val:threehalbjahr,
   fourjahr_val:fourjahr,
   fivejahrmtl_val:fivejahrmtl
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("description"+id).innerHTML=description;
    document.getElementById("one11er"+id).innerHTML=one11er;
    document.getElementById("two3monate"+id).innerHTML=two3monate;
    document.getElementById("threehalbjahr"+id).innerHTML=threehalbjahr;
    document.getElementById("fourjahr"+id).innerHTML=fourjahr;
    document.getElementById("fivejahrmtl"+id).innerHTML=fivejahrmtl;
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_eintrittskarten.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}

function insert_row()
{
  var description = document.getElementById("new_description").value;
  var one11er =document.getElementById("new_one11er").value;
  var two3monate =document.getElementById("new_two3monate").value;
  var fivejahrmtl = document.getElementById("new_fivejahrmtl").value;
  var threehalbjahr =document.getElementById("new_threehalbjahr").value;
  var fourjahr =document.getElementById("new_fourjahr").value;


 $.ajax
 ({
  type:'post',
  url:'modify_eintrittskarten.php',
  data:{
   insert_row:'insert_row',
   description_val:description,
   one11er_val:one11er,
   two3monate_val:two3monate,
   fivejahrmtl_val:fivejahrmtl,
   threehalbjahr_val:threehalbjahr,
   fourjahr_val:fourjahr
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("eintrittskarten_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='description"+id+"'>"+description+"</td><td id='one11er"+id+"'>"+one11er+"</td><td id='two3monate"+id+"'>"+two3monate+"</td><td id='threehalbjahr"+id+"'>"+threehalbjahr+"</td><td id='fourjahr"+id+"'>"+fourjahr+"</td><td id='fivejahrmtl"+id+"'>"+fivejahrmtl+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_description").value="";
    document.getElementById("new_one11er").value="";
    document.getElementById("new_two3monate").value="";
    document.getElementById("new_fivejahrmtl").value="";
    document.getElementById("new_threehalbjahr").value="";
    document.getElementById("new_fourjahr").value="";
   }
  }
 });
}
