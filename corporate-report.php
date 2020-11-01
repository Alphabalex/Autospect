<?php 
require_once('header.php');
if (!isset($_SESSION['loggedIn'])){
  header("location:index.php");
  exit();
}
?>
 <div class="container mt-4" id="form-wrapper">
     <form class="contain" id="needs-validation" method="POST" action="form_action2.php" enctype="multipart/form-data" runat="server" onsubmit="ShowLoading()">
     <div class="progress m-2">
         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
     </div>
      <h3 class="btn d-block mx-auto p-1">CORPORATE INSPECTION</h3>
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
           <label for="validationCustom17">OPTIONS</label>
           <textarea class="form-control" id="validationCustom17" name="options"  placeholder="Enter options" rows="3"></textarea>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom18">VALUATION</label>
           <textarea class="form-control" id="validationCustom18" name="valuation"  placeholder="Enter valuation" rows="3"></textarea>
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
       <input type="button" name="next" class="next btn btn-primary btn-lg pull-right" value="Next" />
       </fieldset>
       <fieldset>
         <table class="table table-striped" id="checklist">
          <tr>
            <th>BODY FRAME CHECKLIST</th>
            <th>OK</th>
            <th>NOT OK</th>
            <th>N/A</th>
          </tr>
          <tr>
            <th>Radiator Core Support</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Strut tower apron(right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Strut tower apron(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>front rail(right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>front rail(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>cowl panel firewall</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>A pillar (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>A pillar (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>B pillar (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>B pillar (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>C pillar (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>C pillar (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>D pillar (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>D pillar (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Lock Pillar (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Lock Pillar(Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Booth Floor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Booth Lock Pillar</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engraved</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Converted (RHD to LHD)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Accident History</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Roof</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>bonnet</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rocker Panel LH</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rocker Panel RH</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Chassis</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">EXTERIOR LIGHT</th>
          </tr>
          <tr>
            <th>Head Lamp (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Head Lamp (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Tail Lamp (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Tail Lamp (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Reverse Lights</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Fog Lights</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">EXHAUST CHECK</th>
          </tr>
          <tr>
            <th>Exhaust Sound</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Exhaust Joint</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Catalytic Converter</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Exhaust Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Oil Trace In The Exhaust Pipe</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">TRANSMISSION</th>
          </tr>
          <tr>
            <th>Gear Not Converted (Manual/Automatic)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Gear Delay In Engaging</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Gear Surge</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Gear Repair History</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Gear Jerk</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>4W D Active</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">SUSPENSION</th>
          </tr>
          <tr>
            <th>Ball Joints</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Z-Links</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Front Bushings</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Front shocks</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Tie Rod</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rack End</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Bushings</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Shocks</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Height Control</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Height Control Unit Noise</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">POWER/MANUAL WINDOWS & CENTRAL LOCKING</th>
          </tr>
          <tr>
            <th>Window Lever Front (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Window Lever Front (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Window Lever Rear (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Window Lever Rear (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Auto Lock</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Window Safety Lock</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Automatic Window Mechanism</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Manual Window Mechanism</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">GENERAL UPHOLSTERY</th>
          </tr>
          <tr>
            <th>Roof Upholstery</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Floor Upholstery</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Upholstery</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Clean Dashboard</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Sunshades</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Booth Carpet</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Booth Board</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Driver Seat Upholstery</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Passenger Seat Upholstery</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Seat Upholstery</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">ELECTRICAL ELECTRONICS</th>
          </tr>
          <tr>
            <th>Battery Terminals</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Battery Charging</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Battery Malfunction Indicator</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Battery Present</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Wiring Harness Tampered</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">OBD</th>
          </tr>
          <tr>
            <th>Crankshaft Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Camshaft Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Oxygen Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Map Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Throttle Position Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Coolant Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Air Flow Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>TPMS</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Evap</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>ABS</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>SRS</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>BCM</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>PCM</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Detonation Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>EGR Seneor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Vehicle Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Gear Shaft/Solenoid</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Catalyst Sensor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Malfunction Indicator Lamp(MIL)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">MIRRORS</th>
          </tr>
          <tr>
            <th>Side Mirror(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Side Mirror(Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Side Mirror Control(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Side Mirror Control(Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear View Mirror</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">FLUIDS/ FILTERS CHECK</th>
          </tr>
          <tr>
            <th>Engine Oil Guaged</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Oil</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Sump Oil Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Oil Seal Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Valve Cover Oil Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Axle Oil Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Gear Oil Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Gear Oil</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Brake Fluid</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Brake Fluid Leakage</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Brake Caliper</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering Fluid</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering Fluid Gauged</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering Pump</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Washer Fluid Compartment</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">AC/HEATER CHECKUP</th>
          </tr>
          <tr>
            <th>Cooling</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Blower</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Cooling Fan</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Condenser</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Compressor</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>AC No Repair History</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">SEATS</th>
          </tr>
          <tr>
            <th>Seat Adjuster (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Seat Adjuster (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Seat Belt (Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Seat Belt (Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th> Rear Seat Belts</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Head Rest</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Arm Rest</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Glove Box</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">STEERING/CONTROLS</th>
          </tr>
          <tr>
            <th>Light Lever/ Switch</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Wiper Washer Lever</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Wiper</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Steering Wheel</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Horn</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Volume Control</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Temperature Control</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Phone Dialing Control</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">MECHANICAL CHECK</th>
          </tr>
          <tr>
            <th>Trunk Lock</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Front(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Front(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Rear(right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Rear(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Lever Front(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Lever Front(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Lever Rear(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>fDoor Lever Rear(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Front Windshield</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Windshield</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Front(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Front(left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Rear(Right)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Rear(Left)</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Underbody Shields</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Fender Shields</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Front Spoiler</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Rear Spoiler</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>

          <tr>
            <th colspan="4">BRAKES</th>
          </tr>
          <tr>
            <th>Brake Pads</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>   
          <tr>
            <th>Brake Discs</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Parking Brakes</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Brakes</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          
          <tr>
            <th colspan="4">EQUIPMENT</th>
          </tr>
          <tr>
            <th>Tools</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Jack</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Jack Handle Present</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Wheel Spanner Present</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>C-Caution Present</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>

          <tr>
            <th colspan="4">ENGINE CHECK</th>
          </tr>
          <tr>
            <th>Wires</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Hoses</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Belt</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Pulleys</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Head Gasket</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Noise</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Mount</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Gear Mount</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Radiator Fan</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Radiator</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr><tr>
            <th>Starter Operation</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Vibration</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Worked On</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Misfire</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Tappet Sound</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Knocking Sound</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>No Overheating History</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Coolant Reservoir</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Has No Sludge</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Has No Smoke Observed</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Engine Not Likely To Smoke</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">DASH/ROOF CONTROLS</th>
          </tr>
          <tr>
            <th>Interior Lights</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>AC Control</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Defog Control</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Hazard Lights</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Parking Button</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Audio Ok</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Video Ok</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Cigarette Lighter</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Fuel Cap Release Lever</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
          <tr>
            <th>Bonnet Release Lever</th>
            <td><label><input type="checkbox" name="rcs[]" value="1">Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="0">Not Ok</label></td>
            <td><label><input type="checkbox" name="rcs[]" value="-1">N/A</label></td>
          </tr>
         </table>
         <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
         <input type="submit" name="submit" class="submit btn btn-success btn-lg pull-right" value="Submit" />
       </fieldset> 
   </form>
 </div>  
<?php require_once 'footer.php'; ?>