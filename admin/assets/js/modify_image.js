function delete_image(id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_image.php',
  data:{
   delete_image:'delete_image',
   image_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("image"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}
