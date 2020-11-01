function highlightEdit(editableObj) {
  $(editableObj).css("background","midnightblue");
  $(editableObj).css("color","white");
} 

function saveInlineEdit(editableObj,column,id,table) {
  // no change change made then return false
  if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
  return false;
  // send ajax to update value
  $(editableObj).css("background","#FFF url(loader.gif) no-repeat right");
  $.ajax({
    url: "saveInlineEdit.php",
    cache: false,
    data:'table='+table+'&column='+column+'&value='+editableObj.innerHTML+'&id='+id,
    success: function(response)  {
      $('#alert').attr('class','alert alert-success');
      $('#alert').text(response);
      console.log(response);
      // set updated value as old value
      $(editableObj).attr('data-old_value',editableObj.innerHTML);
      $(editableObj).css("background","white");
      $(editableObj).css("color","midnightblue");     
    }          
   });
}
