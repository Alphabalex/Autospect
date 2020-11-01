var add_input_button = $('#add-more'),
    field_wrapper = $('#damages'),
    new_field_html = '<div class="col-12 mb-3"><input type="text" class="form-control"  name="damageType[]" placeholder="Enter Damage Type" required><div class="invalid-feedback">Please input damage type.</div></div><div class="col-12 mb-3"><input type="file" class="form-control" name="damages[]" required><div class="invalid-feedback">Please choose an image.</div></div>';
  // Add button dynamically
    $(add_input_button).click(function(){ 
            $(field_wrapper).append(new_field_html); 
    });
  
var form_count = 1, form_count_form, next_form, total_forms;
  total_forms = $("fieldset").length;  
  $(".next").click(function(){
    form_count_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    form_count_form.hide();
    setProgressBar(++form_count);
  });  
  $(".previous").click(function(){
    form_count_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    form_count_form.hide();
    setProgressBar(--form_count);
  });
  setProgressBar(form_count);  
  function setProgressBar(curStep){
    var percent = parseFloat(100 / total_forms) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }  
  