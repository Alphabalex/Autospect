<?php 
require_once('header.php');
if (!isset($_SESSION['loggedIn'])){
  header("location:index.php");
  exit();
}
?>
 <div class="container mt-4" id="form-wrapper">
     <form class="contain" id="needs-validation" method="POST" action="form_action.php" enctype="multipart/form-data" runat="server" onsubmit="ShowLoading()">
     <div class="progress m-2">
         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
     </div>
      <h3 class="btn d-block mx-auto p-1">PRE-PURCHASE INSPECTION</h3>
      <fieldset>
      <h2 class="text-center">Add Vehicle Details</h2>
      <div class="form-group">
      <label for="vin">VIN*</label>
      <input type="text" class="form-control" required id="vin" name="vin" placeholder="Vin">
      </div>
      <div class="form-group">
      <label for="model">YEAR/ MAKE/ MODEL*</label>
      <input type="text" class="form-control" required id="model" name="model" placeholder="Year/Make/Model">
      </div>
      <div class="form-group">
      <label for="color">COLOUR*</label>
      <input type="text" class="form-control" required id="color" name="color" placeholder="Color">
      </div>
      <div class="form-group">
      <label for="location">LOCATION*</label>
      <input type="text" class="form-control" required id="location" name="location" placeholder="location">
      </div>
      <div class="form-group">
      <label for="mileage">MILEAGE*</label>
      <input type="text" class="form-control" required id="mileage" name="mileage"  placeholder="mileage">
      </div>
      <input type="button" class="next btn btn-primary btn-lg" value="Next" />
      </fieldset>

      <fieldset>
       <div class="row">
         <div class="col-12"><h4 class="text-center">VEHICLE OVERVIEW</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom01">FRONT VIEW</label>
           <input type="file" class="form-control" id="validationCustom01" name="front" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom02">BACK VIEW</label>
           <input type="file" class="form-control" id="validationCustom02" name="back"  required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
         <div class="col-12"><h4 class="text-center">SIDE VIEWS</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom03">RIGHT VIEW</label>
           <input type="file" class="form-control" id="validationCustom03" name="right" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom04">LEFT VIEW</label>
           <input type="file" class="form-control" id="validationCustom04" name="left" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
        <div class="row">
         <div class="col-12"><h4 class="text-center">INTERIOR VIEW</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom05">DRIVER'S SIDE</label>
           <input type="file" class="form-control" id="validationCustom05" name="driver" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
          <div class="col-12 mb-3">
           <label for="validationCustom06">PASSENGER'S SIDE</label>
           <input type="file" class="form-control" id="validationCustom06" name="passenger" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-12"><h4 class="text-center">ENGINE AND TYRE</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom07">ENGINE</label>
           <input type="file" class="form-control" id="validationCustom07" name="engine" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
          <div class="col-12 mb-3">
           <label for="validationCustom08">TYRE</label>
           <input type="file" class="form-control" id="validationCustom08" name="tyre" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-12"><h4 class="text-center">VIN NAME PLATE</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom09">VIN PLATE</label>
           <input type="file" class="form-control" id="validationCustom09" name="vinplate" required>
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
       <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
       <input type="button" name="next" class="next btn btn-primary btn-lg pull-right" value="Next" />
       </fieldset>

       <fieldset>
       <div class="row" id="damages">
         <div class="col-12"> <h4 class="text-center">DAMAGES</h4> </div>
         <span class="btn btn-sm btn-primary fa fa-plus d-block mx-auto" id="add-more">Add More fields</span>
       </div>
       <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
       <input type="button" name="next" class="next btn btn-primary btn-lg pull-right" value="Next" />
       </fieldset>

       <fieldset>
         <div class="row">
         <div class="col-12"><h4 class="text-center">SUMMARY REPORT</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom10">ENGINE</label>
           <textarea class="form-control" id="validationCustom10" name="eng" required placeholder="Enter Engine report" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom11">TRANSMISSION</label>
           <textarea class="form-control" id="validationCustom11" name="transmission" required placeholder="Enter transmission report" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom12">INTERIOR</label>
           <textarea class="form-control" id="validationCustom12" name="interior" required placeholder="Enter interior report" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom13">EXTERIOR</label>
           <textarea class="form-control" id="validationCustom13" name="exterior" required placeholder="Enter exterior report" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom14">ELECTRICALS</label>
           <textarea class="form-control" id="validationCustom14" name="electricals" required placeholder="Enter Electrical report" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom15">SUSPENSION</label>
           <textarea class="form-control" id="validationCustom15" name="suspension" required placeholder="Enter suspension report" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom16">GENERAL REMARK</label>
           <textarea class="form-control" id="validationCustom16" name="remark" required placeholder="Enter General Remark" rows="3"></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
       </div>
       <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
       <input type="submit" name="submit" class="submit btn btn-success btn-lg pull-right" value="Submit" />
       </fieldset>
   </form>
 </div>
  
<?php require_once 'footer.php'; ?>