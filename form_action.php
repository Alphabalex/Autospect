<?php 
require_once('header.php');
if (!isset($_SESSION['loggedIn'])){
  header("location:index.php");
  exit();
}else{
    $user=$_SESSION['user'];
}
?>				
	<?php
	if (isset($_POST['submit'])) {
		$targetDir = "uploads/";
		$vin = mysqli_real_escape_string($conn, $_POST['vin']);
		$model = mysqli_real_escape_string($conn, $_POST['model']);
		$color = mysqli_real_escape_string($conn, $_POST['color']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);
		$mileage = mysqli_real_escape_string($conn, $_POST['mileage']);
		$front =$targetDir. uniqid().basename($_FILES["front"]["name"]); 
        $back =$targetDir. uniqid().basename($_FILES["back"]["name"]);
        $right =$targetDir. uniqid().basename($_FILES["right"]["name"]);
        $left =$targetDir. uniqid().basename($_FILES["left"]["name"]);
        $driver =$targetDir. uniqid().basename($_FILES["driver"]["name"]);
        $passenger =$targetDir. uniqid().basename($_FILES["passenger"]["name"]);
        $engine =$targetDir. uniqid().basename($_FILES["engine"]["name"]);
        $tyre =$targetDir. uniqid().basename($_FILES["tyre"]["name"]);
        $vinplate =$targetDir. uniqid().basename($_FILES["vinplate"]["name"]);
        $eng = mysqli_real_escape_string($conn, $_POST['eng']);
        $transmission = mysqli_real_escape_string($conn, $_POST['transmission']);
        $interior = mysqli_real_escape_string($conn, $_POST['interior']);
        $exterior = mysqli_real_escape_string($conn, $_POST['exterior']);
        $electricals = mysqli_real_escape_string($conn, $_POST['electricals']);
        $suspension = mysqli_real_escape_string($conn, $_POST['suspension']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);		
		if(mysqli_query($conn, "INSERT INTO reports(`vin`, `model`, `color`, `location`, `mileage`, `front`, `back`, `right`, `left`, `driver`, `passenger`, `engine`, `tyre`, `vinplate`, `eng`, `transmission`, `interior`, `exterior`, `electricals`, `suspension`, `remark`,`report_by`) VALUES('".$vin."', '" . $model . "', '". $color."', '".$location."', '".$mileage."', '". $front."','".$back."','".$right."','".$left."','".$driver."','".$passenger."','".$engine."','".$tyre."','".$vinplate."','".$eng."','".$transmission."','".$interior."','".$exterior."','".$electricals."','".$suspension."','".$remark."','".$user."')")) {
			compressImage($_FILES['front']['tmp_name'],$front,60);
			compressImage($_FILES['back']['tmp_name'],$back,60);
			compressImage($_FILES['right']['tmp_name'],$right,60);
			compressImage($_FILES['left']['tmp_name'],$left,60);
			compressImage($_FILES['driver']['tmp_name'],$driver,60);
			compressImage($_FILES['passenger']['tmp_name'],$passenger,60);
			compressImage($_FILES['engine']['tmp_name'],$engine,60);
			compressImage($_FILES['tyre']['tmp_name'],$tyre,60);
			compressImage($_FILES['vinplate']['tmp_name'],$vinplate,60);
			if (isset($_POST['damageType'])) {
				$damages=($_POST['damageType']);
				$images=($_FILES['damages']);
				for ($i=0; $i < count($damages); $i++) { 
					$damagesImage=$targetDir. uniqid().basename($images['name'][$i]);
					$sql="INSERT INTO damages(vin,damage,image)VALUES('$vin','".$damages[$i]."','$damagesImage')";
					$run=mysqli_query($conn,$sql);
					if ($run) {
						compressImage($images["tmp_name"][$i],$damagesImage,60);
					}
				}
			}
			echo "<div class='row well alert alert-success'> Reports uploaded Successfully! </div>";
		} else {
			echo "<div class='row well alert alert-danger'> Error in uploading report...Please try again later! </div>";
		}
	}

	// Compress image
	function compressImage($source, $destination, $quality) {

	    $info = getimagesize($source);

	    if ($info['mime'] == 'image/jpeg') 
	        $image = imagecreatefromjpeg($source);

	    elseif ($info['mime'] == 'image/gif') 
	        $image = imagecreatefromgif($source);

	    elseif ($info['mime'] == 'image/png') 
	        $image = imagecreatefrompng($source);

	    imagejpeg($image, $destination, $quality);

	}	
	?>	
<?php include('footer.php'); ?> 