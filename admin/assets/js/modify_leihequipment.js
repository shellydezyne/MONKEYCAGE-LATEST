function edit_row(id)
{
 var description =document.getElementById("description"+id).innerHTML;
 var erwachsene =document.getElementById("erwachsene"+id).innerHTML;
 var kinder =document.getElementById("kinder"+id).innerHTML;

 document.getElementById("description"+id).innerHTML="<input type='text' id='description_val"+id+"' value='"+description+"'>";
 document.getElementById("erwachsene"+id).innerHTML="<input type='text' id='erwachsene_val"+id+"' value='"+erwachsene+"'>";
 document.getElementById("kinder"+id).innerHTML="<input type='text' id='kinder_val"+id+"' value='"+kinder+"'>";

 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
  var description =document.getElementById("description_val"+id).value;
  var erwachsene =document.getElementById("erwachsene_val"+id).value;
  var kinder =document.getElementById("kinder_val"+id).value;
  console.log(description);
  console.log(erwachsene);
  console.log(kinder);

 $.ajax
 ({
  type:'post',
  url:'modify_leihequipment.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   description_val:description,
   erwachsene_val:erwachsene,
   kinder_val:kinder
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("description"+id).innerHTML=description;
    document.getElementById("erwachsene"+id).innerHTML=erwachsene;
    document.getElementById("kinder"+id).innerHTML=kinder;
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
  url:'modify_leihequipment.php',
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
  var erwachsene =document.getElementById("new_erwachsene").value;
  var kinder =document.getElementById("new_kinder").value;

 $.ajax
 ({
  type:'post',
  url:'modify_leihequipment.php',
  data:{
   insert_row:'insert_row',
   description_val:description,
   erwachsene_val:erwachsene,
   kinder_val:kinder
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("leihequipment_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='description"+id+"'>"+description+"</td><td id='erwachsene"+id+"'>"+erwachsene+"</td><td id='kinder"+id+"'>"+kinder+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_description").value="";
    document.getElementById("new_erwachsene").value="";
    document.getElementById("new_kinder").value="";
   }
  }
 });
}
