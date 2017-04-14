function delete_album(id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_album.php',
  data:{
   delete_album:'delete_album',
   album_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("album"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}
