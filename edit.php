<?php require_once('header.php'); 
	if (isset($_POST['edit'])) {
		$vin=mysqli_real_escape_string($conn,$_POST['vin']);
		$query=mysqli_query($conn,"SELECT * FROM reports WHERE vin ='$vin'");
		while ($report=mysqli_fetch_assoc($query)) {
			$model=$report['model'];
			$color=$report['color'];
			$location=$report['location'];
			$mileage=$report['mileage'];
			$front=$report['front'];
			$back=$report['back'];
			$right=$report['right'];
			$left=$report['left'];
			$driver=$report['driver'];
			$passenger=$report['passenger'];
			$engine=$report['engine'];
			$tyre=$report['tyre'];
			$vinplate=$report['vinplate'];
			$eng=$report['eng'];
			$transmission=$report['transmission'];
			$interior=$report['interior'];
			$exterior=$report['exterior'];
			$electricals=$report['electricals'];
			$suspension=$report['suspension'];
			$remark=$report['remark'];
			$options=$report['options'];
			$valuation=$report['valuation'];
		}
	}
?>
<div class="container mt-4">
     <form class="contain" id="needs-validation" method="post"  enctype="multipart/form-data" runat="server" action="update.php" onsubmit="ShowLoading()">
     <div class="progress m-2">
         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
     </div>
      <fieldset>
      <h2 class="text-center">Update Vehicle Details</h2>
      <div class="form-group">
      <label for="vin">VIN*</label>
      <input type="text" class="form-control" required id="vin" name="vin" placeholder="Vin" value="<?php echo $vin; ?>" readonly>
      </div>
      <div class="form-group">
      <label for="model">YEAR/ MAKE/ MODEL*</label>
      <input type="text" class="form-control" required id="model" name="model" placeholder="Year/Make/Model" value="<?php echo $model; ?>">
      </div>
      <div class="form-group">
      <label for="color">COLOUR*</label>
      <input type="text" class="form-control" required id="color" name="color" placeholder="Color" value="<?php echo $color; ?>">
      </div>
      <div class="form-group">
      <label for="location">LOCATION*</label>
      <input type="text" class="form-control" required id="location" name="location" placeholder="location" value="<?php echo $location; ?>">
      </div>
      <div class="form-group">
      <label for="mileage">MILEAGE*</label>
      <input type="text" class="form-control" required id="mileage" name="mileage"  placeholder="mileage" value="<?php echo $mileage; ?>">
      </div>
      <input type="button" class="next btn btn-primary btn-lg" value="Next" />
      </fieldset>

      <fieldset>
       <div class="row">
         <div class="col-12"><h4 class="text-center">VEHICLE OVERVIEW</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom01">FRONT VIEW</label>
           <input type="file" class="form-control" id="validationCustom01" name="front" value="<?php echo $front; ?>">
           <img src="<?php echo $front; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom02">BACK VIEW</label>
           <input type="file" class="form-control" id="validationCustom02" name="back" value="<?php echo $back; ?>">
           <img src="<?php echo $back; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
         <div class="col-12"><h4 class="text-center">SIDE VIEWS</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom03">RIGHT VIEW</label>
           <input type="file" class="form-control" id="validationCustom03" name="right" value="<?php echo $right; ?>">
           <img src="<?php echo $right; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom04">LEFT VIEW</label>
           <input type="file" class="form-control" id="validationCustom04" name="left" value="<?php echo $left; ?>">
           <img src="<?php echo $left; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
        <div class="row">
         <div class="col-12"><h4 class="text-center">INTERIOR VIEW</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom05">DRIVER'S SIDE</label>
           <input type="file" class="form-control" id="validationCustom05" name="driver" value="<?php echo $driver; ?>">
           <img src="<?php echo $driver; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
          <div class="col-12 mb-3">
           <label for="validationCustom06">PASSENGER'S SIDE</label>
           <input type="file" class="form-control" id="validationCustom06" name="passenger" value="<?php echo $passenger; ?>">
           <img src="<?php echo $passenger; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-12"><h4 class="text-center">ENGINE AND TYRE</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom07">ENGINE</label>
           <input type="file" class="form-control" id="validationCustom07" name="engine" value="<?php echo $engine; ?>">
           <img src="<?php echo $engine; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
          <div class="col-12 mb-3">
           <label for="validationCustom08">TYRE</label>
           <input type="file" class="form-control" id="validationCustom08" name="tyre" value="<?php echo $tyre; ?>">
           <img src="<?php echo $tyre; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-12"><h4 class="text-center">VIN NAME PLATE</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom09">VIN PLATE</label>
           <input type="file" class="form-control" id="validationCustom09" name="vinplate" value="<?php echo $vinplate; ?>">
           <img src="<?php echo $vinplate; ?>" width="150" height="150">
           <div class="invalid-feedback">
             Please choose an image.
           </div>
         </div>
       </div>
       <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
       <input type="button" name="next" class="next btn btn-primary btn-lg pull-right" value="Next" />
       </fieldset>
       <?php $query2=mysqli_query($conn,"SELECT * FROM damages WHERE vin ='$vin'"); ?>
       <?php if(mysqli_num_rows($query2)>0): ?>
       <fieldset>
       <div class="row">
         <div class="col-12"> <h4 class="text-center">DAMAGES</h4> </div>
	        <?php while ($damage=mysqli_fetch_assoc($query2)): ?>
	            <div class="col-12 mb-3">
	            <input type="text" class="form-control"  name="damageType-<?php echo $damage['id']; ?>" placeholder="Enter Damage Type" value="<?php echo $damage['damage']; ?>">
	            <div class="invalid-feedback">Please input damage type.</div>
	            </div>
	            <div class="col-12 mb-3"><input type="file" class="form-control" name="damages-<?php echo $damage['id']; ?>" value="<?php $damage['image']; ?>">
	            <img src="<?php echo $damage['image']; ?>" width="150" height="150">
	            <div class="invalid-feedback">Please choose an image.</div>
	            </div>
		<?php endwhile; ?>
       </div>
       <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
       <input type="button" name="next" class="next btn btn-primary btn-lg pull-right" value="Next" />
       </fieldset>
     <?php endif; ?>
       <fieldset>
         <div class="row">
         <div class="col-12"><h4 class="text-center">SUMMARY REPORT</h4></div>
         <div class="col-12 mb-3">
           <label for="validationCustom10">ENGINE</label>
           <textarea class="form-control" id="validationCustom10" name="eng" required placeholder="Enter Engine report" rows="3" value="<?php echo $eng; ?>"><?php echo $eng; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom11">TRANSMISSION</label>
           <textarea class="form-control" id="validationCustom11" name="transmission" required placeholder="Enter transmission report" rows="3" value="<?php echo $transmission; ?>"><?php echo $transmission; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom12">INTERIOR</label>
           <textarea class="form-control" id="validationCustom12" name="interior" required placeholder="Enter interior report" rows="3" value="<?php echo $interior; ?>"><?php echo $interior; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom13">EXTERIOR</label>
           <textarea class="form-control" id="validationCustom13" name="exterior" required placeholder="Enter exterior report" rows="3" value="<?php echo $exterior; ?>"><?php echo $exterior; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom14">ELECTRICALS</label>
           <textarea class="form-control" id="validationCustom14" name="electricals" required placeholder="Enter Electrical report" rows="3" value="<?php echo $electricals; ?>"><?php echo $electricals; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom15">SUSPENSION</label>
           <textarea class="form-control" id="validationCustom15" name="suspension" required placeholder="Enter suspension report" rows="3" value="<?php echo $suspension; ?>"><?php echo $suspension; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom17">OPTIONS</label>
           <textarea class="form-control" id="validationCustom17" name="options" placeholder="Enter options" rows="3" value="<?php echo $options; ?>"><?php echo $options; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom18">VALUATION</label>
           <textarea class="form-control" id="validationCustom18" name="valuation" placeholder="Enter valuation" rows="3" value="<?php echo $valuation; ?>"><?php echo $valuation; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
         <div class="col-12 mb-3">
           <label for="validationCustom16">GENERAL REMARK</label>
           <textarea class="form-control" id="validationCustom16" name="remark" required placeholder="Enter General Remark" rows="3" value="<?php echo $remark; ?>"><?php echo $remark; ?></textarea>
           <div class="invalid-feedback">
             Please provide a valid Parameter.
           </div>
         </div>
       </div>
       <input type="button" name="previous" class="previous btn btn-default btn-lg" value="Previous" />
       <input type="submit" name="update" class="submit btn btn-success btn-lg pull-right" value="Update" />
       </fieldset>
   </form>
 </div>
  
<?php require_once 'footer.php'; ?>