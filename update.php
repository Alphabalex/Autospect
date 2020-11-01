<?php 
require_once('header.php');
if (!isset($_SESSION['loggedIn'])){
  header("location:index.php");
  exit();
}else{
    $user=$_SESSION['user'];
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
	<?php
	if (isset($_POST['update'])) {
		$targetDir = "uploads/";
		$vin = mysqli_real_escape_string($conn, $_POST['vin']);
		$model = mysqli_real_escape_string($conn, $_POST['model']);
		$color = mysqli_real_escape_string($conn, $_POST['color']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);
		$mileage = mysqli_real_escape_string($conn, $_POST['mileage']);
		$eng = mysqli_real_escape_string($conn, $_POST['eng']);
        $transmission = mysqli_real_escape_string($conn, $_POST['transmission']);
        $interior = mysqli_real_escape_string($conn, $_POST['interior']);
        $exterior = mysqli_real_escape_string($conn, $_POST['exterior']);
        $electricals = mysqli_real_escape_string($conn, $_POST['electricals']);
        $suspension = mysqli_real_escape_string($conn, $_POST['suspension']);
        $remark = mysqli_real_escape_string($conn, $_POST['remark']);
        $options = mysqli_real_escape_string($conn, $_POST['options']);
        $valuation = mysqli_real_escape_string($conn, $_POST['valuation']);
        $query="UPDATE reports SET 
        model= '$model',
        color='$color',
        location='$location',
        mileage='$mileage',
        eng='$eng',
        transmission='$transmission',
        interior='$interior',
        exterior='$exterior',
        electricals='$electricals',
        suspension='$suspension',
        remark='$remark',
        options='$options',
        valuation='$valuation' ";

		if($_FILES['front']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["front"]["name"]);
			compressImage($_FILES['front']['tmp_name'],$front,60);
		$query.=",front = '$front'";
		}
		if($_FILES['back']['name'] !== "") {
			$back=$targetDir. uniqid().basename($_FILES["back"]["name"]);
			compressImage($_FILES['back']['tmp_name'],$back,60);
		$query.=",back = '$back'";
		}
		if($_FILES['right']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["right"]["name"]);
			compressImage($_FILES['right']['tmp_name'],$right,60);
		$query.=",right = '$right'";
		}

		if($_FILES['left']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["left"]["name"]);
			compressImage($_FILES['left']['tmp_name'],$left,60);
		$query.=",left = '$left'";
		}
		if($_FILES['driver']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["driver"]["name"]);
			compressImage($_FILES['driver']['tmp_name'],$driver,60);
		$query.=",driver = '$driver'";
		}

		if($_FILES['passenger']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["passenger"]["name"]);
			compressImage($_FILES['passenger']['tmp_name'],$passenger,60);
		$query.=",passenger = '$passenger'";
		}
		if($_FILES['engine']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["engine"]["name"]);
			compressImage($_FILES['engine']['tmp_name'],$engine,60);
		$query.=",engine = '$engine'";
		}

		if($_FILES['tyre']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["tyre"]["name"]);
			compressImage($_FILES['tyre']['tmp_name'],$tyre,60);
		$query.=",tyre = '$tyre'";
		}
		if($_FILES['vinplate']['name'] !== "") {
			$front=$targetDir. uniqid().basename($_FILES["vinplate"]["name"]);
			compressImage($_FILES['vinplate']['tmp_name'],$vinplate,60);
		$query.=",vinplate = '$vinplate'";
		}
		$query.="WHERE vin ='$vin'";

		$update=mysqli_query($conn,$query);

		$query2=mysqli_query($conn,"SELECT * FROM damages WHERE vin ='$vin'");
		if (mysqli_num_rows($query2)>0){
			while($damages=mysqli_fetch_assoc($query2)){
				$did=$damages['id'];
				$fid='damages-'.$did;
				$tid='damageType-'.$did;
				$type=$_POST[$tid];
				if ($_FILES[$fid]['name'] !== "")
				{
					$damagesImage=$targetDir. uniqid().basename($_FILES[$fid]['name']);
					$tmp=$_FILES[$fid]['tmp_name'];
					$sql="UPDATE damages SET 
					damage = '$type',
					image = '$damagesImage' 
					WHERE id='$did' ";
					mysqli_query($conn,$sql);
					compressImage($tmp, $damagesImage, 60);
				}
			}
		}

		if($update){
			
			echo "<div class='row well alert alert-success'> Reports updated Successfully! </div>";
		} else {
			echo "<div class='row well alert alert-danger'> Error in updating report...Please try again later! </div>";
		}
	}		
	?>	
<?php include('footer.php'); ?> 