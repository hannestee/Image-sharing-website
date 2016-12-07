
<?php
unset($_SESSION['viesti']);
include_once("../iheader.php");

if ($_SESSION['loggedIn'] == "yes"){


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$imgName = $_POST['imgName'];
	$uploaderName = $_POST['username2'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} 
	
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	echo $imgName;
// if everything is ok, try to upload file
} else {
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		try {

		echo "testi58";
        $stm = $DBH->prepare("INSERT INTO ga_imgdata (url, name, uploadtime) VALUES (:1url, :1name, NOW())"); 
        
        
        echo "testi61";
		$stm->execute(array(
		"1url" => ($_FILES['fileToUpload']['name']),
		"1name" => ($imgName)
		));
		
		$kuvaid = $DBH->lastInsertId();
		echo "testi66";
		$datat['id'] = $_SESSION['userid'];
		$datat['imgid'] = $kuvaid;
		print_r($datat);
		$stm2 = $DBH->prepare("INSERT INTO ga_img (uploaderID, imgID) VALUES (:id, 					:imgid)");
		if($stm2->execute($datat)){
                $_SESSION['id'] = $datat['id'];
                $_SESSION['imgid'] = $datat['imgid'];
		//$stm2->execute(array(
		//"id" => ($STH)
		//));	
		} else {
                $_SESSION['viesti'] = "en voi hyvin";
                //redirect("../frontpage.php");
		}
		}catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //$e.getMessage()")
		}
		//redirect("../frontpage.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
		
    }
}
} else {
	$_SESSION['viesti'] = "You aren't logged in";
	//redirect("../frontpage.php");
	
}

?>

