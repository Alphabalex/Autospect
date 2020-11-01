<?php require_once('header.php'); 
	if (isset($_GET['action']) && isset($_GET['vin'])) {
		$vin=mysqli_real_escape_string($conn,$_GET['vin']);
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
<div class="container p-2" id="printer_div">
	<button onclick="window.print()" class="btn btn-primary" id="printer">Save as Pdf</button>
</div>
<div class="jumbotron jumbotron-fluid text-primary" style="background: white;">
  <div><img src="Admin/img/logo.jpg" width="150" height="150"></div>
  <div class="container text-center">
    <h1 class="text-uppercase text-primary">INSPECTION REPORT <br>FOR <br> <?php echo $model; ?></h1>
    <p class="lead">Vehicle Colour: <?php echo $color; ?><br>
    	Mileage: <?php echo $mileage; ?><br>
    	VIN: <?php echo $vin; ?>
    </p>
  </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h1 style="font-size: 18px;" class="text-primary text-center">VEHICLE OVERVIEW</h1>
		</div>
		<div class="col">
			<img src="<?php echo $front; ?>" class="img-fluid">
		</div>
		<div class="col">
			<img src="<?php echo $back; ?>" class="img-fluid">
		</div>
	</div>
</div>
<div class="container-fluid" id="sideviews">
	<div class="row">
		<div class="col-12">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h1 style="font-size: 18px;" class="text-primary text-center">SIDE VIEWS</h1>
		</div>
		<div class="col">
			<img src="<?php echo $right; ?>" class="img-fluid">
		</div>
		<div class="col">
			<img src="<?php echo $left; ?>" class="img-fluid">
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h1 style="font-size: 18px;" class="text-primary text-center">INTERIOR VIEW</h1>
		</div>
		<div class="col">
			<img src="<?php echo $driver; ?>" class="img-fluid">
		</div>
		<div class="col">
			<img src="<?php echo $passenger; ?>" class="img-fluid">
		</div>
	</div>
</div>
<div class="container-fluid" id="engine">
	<div class="row">
		<div class="col-12">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h1 style="font-size: 18px;" class="text-primary text-center">ENGINE &amp; TYRE</h1>
		</div>
		<div class="col">
			<img src="<?php echo $engine; ?>" class="img-fluid">
		</div>
		<div class="col">
			<img src="<?php echo $tyre; ?>" class="img-fluid">
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h1 style="font-size: 18px;" class="text-primary text-center">VIN NAME PLATE</h1>
		</div>
		<div class="col">
			<img src="<?php echo $vinplate; ?>" class="img-fluid">
		</div>
	</div>
</div>
<?php $query2=mysqli_query($conn,"SELECT * FROM damages WHERE vin ='$vin'"); ?>
	<?php while ($damage=mysqli_fetch_assoc($query2)): ?>
			<div class="container-fluid damages">
				<div class="row">
					<div class="col-12">
						<img src="Admin/img/logo.jpg" width="150" height="150">
						<h1 style="font-size: 18px;" class="text-uppercase text-primary text-center"><?php echo $damage['damage']; ?></h1>
					</div>
					<div class="col">
						<img src="<?php echo $damage['image']; ?>" class="img-fluid">
					</div>
				</div>
			</div>
		<?php endwhile; ?>
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col" style="border: 1px solid black;">
			<table class="table table-striped" style="text-transform: capitalize;">
				<tr>
					<th>VIN: <?php echo $vin; ?></th>
				</tr>
				<tr>
				    <th>Location: <?php echo $location; ?></th>
				</tr>
				<tr>
					<th>Year/Make/Model: <?php echo $model; ?></th>
				</tr>
				<tr>
					<th>COLOUR: <?php echo $color; ?></th>
				</tr>
				<tr>
				    <th>Mileage: <?php echo $mileage; ?></th>
				</tr>
			</table>
		</div>
		<div class="col text-center" style="border: 1px solid black;">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h2>AUTOSPECT</h2>
			<p>11, bajulaye Compound Shomolu Lagos <br>
				Tel: 08100314596, 08170779471 <br>
				E-mail: Inspect@autospect.org <br>
				IG: @autospect
			</p>
			<small>OUR SERVICES INCLUDE: <br>
				*vehicle pre-purchase inspection *vehicle scan and diagnosis *free consultation *Fleet Management
			</small>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<img src="Admin/img/logo.jpg" width="150" height="150">
			<h1 style="font-size: 14px;" class="text-primary text-center">VEHICLE INSPECTION REPORT</h1>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">ENGINE</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $eng; ?>" readonly>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">TRANSMISSION</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $transmission; ?>" readonly>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">INTERIOR</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $interior; ?>" readonly>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">EXTERIOR</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $exterior; ?>" readonly>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">ELECTRICALS</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $electricals; ?>" readonly>
		</div>
		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">SUSPENSION</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $suspension; ?>" readonly>
		</div>
		<?php if(isset($options)): ?>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">OPTIONS</div>
			    </div>
			    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $options; ?>" readonly>
			</div>
		<?php endif; ?>
		<?php if(isset($valuation)): ?>
			<div class="input-group mb-3">
			    <div class="input-group-prepend">
			      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">VALUATION</div>
			    </div>
			    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $valuation; ?>" readonly>
			</div>
		<?php endif; ?>

		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <div class="input-group-text bg-primary text-white" id="btnGroupAddon">GENERAL REMARK</div>
		    </div>
		    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" value="<?php echo $remark; ?>" readonly>
		</div>
	</div>
</div>
	<?php 
	$query3=mysqli_query($conn,"SELECT * FROM checklist WHERE vin ='$vin'"); 
	$check=mysqli_fetch_assoc($query3)['checklists'];
	$checks=explode(',', $check);
	?>
	<?php if(mysqli_num_rows($query3)>0): ?>
	<div class="container-fluid my-2">
		<div class="row">
			<div class="col" style="border: 1px solid black;">
				<h2>VEHICLE INSPECTION CHECKLIST</h2>
				<p>This is a detailed inspection report of the vehicle as at the time of inspection, the checklists has been created to guide which parts of the vehicle is Okay(OK), Not Okay (NOT OK) or Not Available (N/A).</p>
			</div>
			<div class="col text-center" style="border: 1px solid black;">
				<img src="Admin/img/logo.jpg" width="150" height="150">
				<h2>AUTOSPECT</h2>
				<p>11, bajulaye Compound Shomolu Lagos <br>
					Tel: 08100314596, 08170779471 <br>
					E-mail: Inspect@autospect.org <br>
					IG: @autospect
				</p>
				<small>OUR SERVICES INCLUDE: <br>
					*vehicle pre-purchase inspection *vehicle scan and diagnosis *free consultation *Fleet Management
				</small>
			</div>
		</div>
	</div>
	<table class="table table-striped" style="text-transform: capitalize;">
          <tr>
            <th>BODY FRAME CHECKLIST</th>
            <th>OK</th>
            <th>NOT OK</th>
            <th>N/A</th>
          </tr>
          <tr>
            <th>Radiator Core Support</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[0]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[0]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[0]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Strut tower apron(right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[1]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[1]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[1]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Strut tower apron(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[2]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[2]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[2]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>front rail(right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[3]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[3]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[3]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>front rail(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[4]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[4]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[4]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>cowl panel firewall</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[5]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[5]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[5]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>A pillar (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[6]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[6]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[6]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>A pillar (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[7]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[7]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[7]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>B pillar (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[8]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[8]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[8]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>B pillar (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[9]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[9]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[9]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>C pillar (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[10]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[10]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[10]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>C pillar (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[11]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[11]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[11]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>D pillar (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[12]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[12]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[12]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>D pillar (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[13]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[13]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[13]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Lock Pillar (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[14]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[14]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[14]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Lock Pillar(Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[15]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[15]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[15]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Booth Floor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[16]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[16]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[16]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Booth Lock Pillar</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[17]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[17]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[17]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engraved</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[18]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[18]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[18]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Converted (RHD to LHD)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[19]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[19]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[19]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Accident History</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[20]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[20]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[20]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Roof</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[21]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[21]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[21]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>bonnet</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[22]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[22]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[22]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rocker Panel LH</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[23]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[23]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[23]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rocker Panel RH</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[24]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[24]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[24]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Chassis</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[25]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[25]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[25]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">EXTERIOR LIGHT</th>
          </tr>
          <tr>
            <th>Head Lamp (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[26]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[26]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[26]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Head Lamp (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[27]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[27]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[27]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Tail Lamp (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[28]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[28]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[28]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Tail Lamp (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[29]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[29]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[29]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Reverse Lights</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[30]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[30]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[30]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Fog Lights</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[31]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[31]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[31]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">EXHAUST CHECK</th>
          </tr>
          <tr>
            <th>Exhaust Sound</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[32]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[32]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[32]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Exhaust Joint</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[33]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[33]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[33]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Catalytic Converter</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[34]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[34]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[34]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Exhaust Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[35]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[35]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[35]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Oil Trace In The Exhaust Pipe</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[36]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[36]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[36]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">TRANSMISSION</th>
          </tr>
          <tr>
            <th>Gear Not Converted (Manual/Automatic)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[37]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[37]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[37]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Gear Delay In Engaging</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[38]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[38]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[38]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Gear Surge</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[39]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[39]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[39]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Gear Repair History</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[40]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[40]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[40]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Gear Jerk</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[41]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[41]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[41]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>4W D Active</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[42]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[42]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[42]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">SUSPENSION</th>
          </tr>
          <tr>
            <th>Ball Joints</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[43]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[43]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[43]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Z-Links</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[44]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[44]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[44]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Front Bushings</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[45]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[45]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[45]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Front shocks</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[46]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[46]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[46]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Tie Rod</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[47]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[47]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[47]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rack End</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[48]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[48]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[48]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Bushings</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[49]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[49]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[49]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Shocks</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[50]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[50]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[50]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Height Control</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[51]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[51]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[51]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Height Control Unit Noise</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[52]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[52]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[52]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">POWER/MANUAL WINDOWS & CENTRAL LOCKING</th>
          </tr>
          <tr>
            <th>Window Lever Front (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[53]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[53]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[53]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Window Lever Front (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[54]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[54]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[54]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Window Lever Rear (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[55]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[55]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[55]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Window Lever Rear (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[56]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[56]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[56]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Auto Lock</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[57]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[57]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[57]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Window Safety Lock</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[58]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[58]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[58]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Automatic Window Mechanism</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[59]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[59]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[59]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Manual Window Mechanism</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[60]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[60]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[60]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">GENERAL UPHOLSTERY</th>
          </tr>
          <tr>
            <th>Roof Upholstery</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[61]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[61]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[61]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Floor Upholstery</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[62]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[62]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[62]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Upholstery</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[63]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[63]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[63]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Clean Dashboard</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[64]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[64]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[64]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Sunshades</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[65]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[65]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[65]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Booth Carpet</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[66]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[66]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[66]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Booth Board</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[67]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[67]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[67]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Driver Seat Upholstery</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[68]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[68]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[68]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Passenger Seat Upholstery</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[69]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[69]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[69]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Seat Upholstery</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[70]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[70]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[70]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">ELECTRICAL ELECTRONICS</th>
          </tr>
          <tr>
            <th>Battery Terminals</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[71]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[71]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[71]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Battery Charging</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[72]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[72]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[72]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Battery Malfunction Indicator</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[73]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[73]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[73]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Battery Present</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[74]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[74]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[74]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Wiring Harness Tampered</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[75]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[75]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[75]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">OBD</th>
          </tr>
          <tr>
            <th>Crankshaft Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[76]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[76]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[76]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Camshaft Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[77]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[77]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[77]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Oxygen Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[78]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[78]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[78]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Map Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[79]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[79]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[79]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Throttle Position Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[80]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[80]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[80]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Coolant Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[81]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[81]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[81]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Air Flow Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[82]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[82]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[82]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>TPMS</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[83]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[83]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[83]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Evap</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[84]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[84]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[84]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>ABS</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[85]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[85]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[85]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>SRS</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[86]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[86]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[86]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>BCM</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[87]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[87]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[87]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>PCM</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[88]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[88]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[88]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Detonation Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[89]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[89]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[89]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>EGR Seneor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[90]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[90]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[90]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Vehicle Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[91]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[91]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[91]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Gear Shaft/Solenoid</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[92]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[92]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[92]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Catalyst Sensor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[93]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[93]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[93]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Malfunction Indicator Lamp(MIL)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[94]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[94]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[94]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">MIRRORS</th>
          </tr>
          <tr>
            <th>Side Mirror(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[95]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[95]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[95]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Side Mirror(Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[96]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[96]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[96]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Side Mirror Control(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[97]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[97]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[97]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Side Mirror Control(Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[98]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[98]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[98]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear View Mirror</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[99]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[99]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[99]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">FLUIDS/ FILTERS CHECK</th>
          </tr>
          <tr>
            <th>Engine Oil Guaged</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[100]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[100]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[100]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Oil</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[101]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[101]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[101]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Sump Oil Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[102]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[102]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[102]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Oil Seal Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[103]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[103]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[103]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Valve Cover Oil Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[104]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[104]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[104]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Axle Oil Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[105]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[105]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[105]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Gear Oil Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[106]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[106]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[106]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Gear Oil</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[107]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[107]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[107]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Brake Fluid</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[108]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[108]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[108]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Brake Fluid Leakage</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[109]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[109]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[109]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Brake Caliper</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[110]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[110]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[110]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering Fluid</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[111]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[111]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[111]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering Fluid Gauged</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[112]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[112]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[112]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering Pump</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[113]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[113]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[113]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Power Steering</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[114]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[114]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[114]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Washer Fluid Compartment</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[115]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[115]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[115]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">AC/HEATER CHECKUP</th>
          </tr>
          <tr>
            <th>Cooling</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[116]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[116]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[116]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Blower</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[117]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[117]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[117]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Cooling Fan</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[118]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[118]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[118]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Condenser</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[119]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[119]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[119]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Compressor</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[120]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[120]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[120]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>AC No Repair History</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[121]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[121]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[121]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">SEATS</th>
          </tr>
          <tr>
            <th>Seat Adjuster (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[122]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[122]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[122]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Seat Adjuster (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[123]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[123]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[123]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Seat Belt (Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[124]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[124]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[124]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Seat Belt (Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[125]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[125]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[125]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th> Rear Seat Belts</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[126]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[126]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[126]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Head Rest</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[127]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[127]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[127]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Arm Rest</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[128]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[128]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[128]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Glove Box</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[129]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[129]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[129]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">STEERING/CONTROLS</th>
          </tr>
          <tr>
            <th>Light Lever/ Switch</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[130]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[130]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[130]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Wiper Washer Lever</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[131]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[131]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[131]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Wiper</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[132]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[132]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[132]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Steering Wheel</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[133]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[133]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[133]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Horn</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[134]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[134]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[134]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Volume Control</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[135]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[135]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[135]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Temperature Control</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[136]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[136]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[136]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Phone Dialing Control</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[137]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[137]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[137]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">MECHANICAL CHECK</th>
          </tr>
          <tr>
            <th>Trunk Lock</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[138]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[138]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[138]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Front(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[139]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[139]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[139]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Front(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[140]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[140]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[140]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Rear(right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[141]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[141]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[141]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Fittings Rear(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[142]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[142]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[142]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Lever Front(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[143]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[143]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[143]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Lever Front(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[144]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[144]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[144]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Lever Rear(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[145]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[145]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[145]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>fDoor Lever Rear(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[146]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[146]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[146]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Front Windshield</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[147]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[147]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[147]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Windshield</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[148]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[148]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[148]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Front(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[149]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[149]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[149]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Front(left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[150]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[150]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[150]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Rear(Right)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[151]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[151]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[151]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Door Window Rear(Left)</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[152]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[152]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[152]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Underbody Shields</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[153]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[153]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[153]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Fender Shields</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[154]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[154]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[154]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Front Spoiler</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[155]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[155]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[155]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Rear Spoiler</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[156]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[156]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[156]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>

          <tr>
            <th colspan="4">BRAKES</th>
          </tr>
          <tr>
            <th>Brake Pads</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[157]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[157]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[157]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>   
          <tr>
            <th>Brake Discs</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[158]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[158]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[158]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Parking Brakes</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[159]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[159]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[159]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Brakes</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[160]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[160]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[160]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          
          <tr>
            <th colspan="4">EQUIPMENT</th>
          </tr>
          <tr>
            <th>Tools</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[161]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[161]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[161]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Jack</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[162]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[162]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[162]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Jack Handle Present</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[163]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[163]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[163]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Wheel Spanner Present</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[164]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[164]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[164]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>C-Caution Present</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[165]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[165]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[165]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>

          <tr>
            <th colspan="4">ENGINE CHECK</th>
          </tr>
          <tr>
            <th>Wires</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[166]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[166]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[166]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Hoses</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[167]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[167]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[167]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Belt</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[168]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[168]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[168]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Pulleys</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[169]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[169]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[169]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Head Gasket</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[170]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[170]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[170]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Noise</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[171]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[171]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[171]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Mount</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[172]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[172]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[172]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Gear Mount</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[173]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[173]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[173]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Radiator Fan</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[174]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[174]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[174]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Radiator</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[175]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[175]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[175]==-1? 'checked':''; ?>>N/A</label></td>
          </tr><tr>
            <th>Starter Operation</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[176]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[176]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[176]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Vibration</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[177]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[177]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[177]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Worked On</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[178]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[178]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[178]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Misfire</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[179]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[179]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[179]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Tappet Sound</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[180]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[180]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[180]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Knocking Sound</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[181]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[181]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[181]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>No Overheating History</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[182]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[182]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[182]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Coolant Reservoir</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[183]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[183]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[183]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Has No Sludge</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[184]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[184]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[184]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Has No Smoke Observed</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[185]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[185]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[185]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Engine Not Likely To Smoke</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[186]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[186]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[186]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th colspan="4">DASH/ROOF CONTROLS</th>
          </tr>
          <tr>
            <th>Interior Lights</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[187]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[187]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[187]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>AC Control</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[188]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[188]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[188]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Defog Control</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[189]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[189]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[189]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Hazard Lights</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[190]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[190]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[190]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Parking Button</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[191]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[191]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[191]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Audio Ok</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[192]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[192]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[192]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Video Ok</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[193]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[193]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[193]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Cigarette Lighter</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[194]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[194]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[194]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Fuel Cap Release Lever</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[195]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[195]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[195]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>
          <tr>
            <th>Bonnet Release Lever</th>
            <td><label><input type="checkbox" readonly <?php echo $checks[196]==1? 'checked':''; ?>>Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[196]==0? 'checked':''; ?>>Not Ok</label></td>
            <td><label><input type="checkbox" readonly <?php echo $checks[196]==-1? 'checked':''; ?>>N/A</label></td>
          </tr>   
     </table>
 <?php endif; ?>
<?php 	require_once 'footer.php'; ?>

 
