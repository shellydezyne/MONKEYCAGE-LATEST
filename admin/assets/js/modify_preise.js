function edit_row(id)
{
 var description =document.getElementById("description"+id).innerHTML;
 var normalhour =document.getElementById("normalhour"+id).innerHTML;
 var happyhour =document.getElementById("happyhour"+id).innerHTML;

 document.getElementById("description"+id).innerHTML="<input type='text' id='description_val"+id+"' value='"+description+"'>";
 document.getElementById("normalhour"+id).innerHTML="<input type='text' id='normalhour_val"+id+"' value='"+normalhour+"'>";
 document.getElementById("happyhour"+id).innerHTML="<input type='text' id='happyhour_val"+id+"' value='"+happyhour+"'>";

 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
  var description =document.getElementById("description_val"+id).value;
  var normalhour =document.getElementById("normalhour_val"+id).value;
  var happyhour =document.getElementById("happyhour_val"+id).value;
  console.log(description);
  console.log(normalhour);
  console.log(happyhour);

 $.ajax
 ({
  type:'post',
  url:'modify_preise.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   description_val:description,
   normalhour_val:normalhour,
   happyhour_val:happyhour
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("description"+id).innerHTML=description;
    document.getElementById("normalhour"+id).innerHTML=normalhour;
    document.getElementById("happyhour"+id).innerHTML=happyhour;
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
  url:'modify_preise.php',
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
  var normalhour =document.getElementById("new_normalhour").value;
  var happyhour =document.getElementById("new_happyhour").value;

 $.ajax
 ({
  type:'post',
  url:'modify_preise.php',
  data:{
   insert_row:'insert_row',
   description_val:description,
   normalhour_val:normalhour,
   happyhour_val:happyhour
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("preise_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='description"+id+"'>"+description+"</td><td id='normalhour"+id+"'>"+normalhour+"</td><td id='happyhour"+id+"'>"+happyhour+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_description").value="";
    document.getElementById("new_normalhour").value="";
    document.getElementById("new_happyhour").value="";
   }
  }
 });
}
