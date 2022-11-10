<?php
function recibirArchivo($userName=""){
	// recibe un nombre de usuario para concatenar como prefijo al nombre 
	// del archivo y así identificar su usuario y distinguirlo de otro nombre 
	// de archivo igual que pertencece a otro usuario.
	// eJ: <user>@<nombreArhivo>.png
	//
	// almacena en el directorio $target_dir el archivo que se encuentra
	// en la variable global $_FILES
	//
	// $target_dir Es el nombre del directorio donde se almacena el archivo subido
	//
	$target_dir = "uploads/"; 
	$target_file = $target_dir .$userName."@". basename($_FILES["fileToUpload"]["name"]);
	$nomArch= basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$result=null;
	$msj="";
	// Check if file name is empty
	if ($target_file==$target_dir .$userName."@") {
		$msj= ", file name empty.";
		$uploadOk = 0;
	}

	// Check if file already exists
	if (file_exists($target_file)) {
		$msj= ", file already exists.";
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000 && $uploadOk ) {
		$msj= ", your file is too large.";
		$uploadOk = 0;
	}

	// Allow certain file formats
	
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $uploadOk ) {
			$msj= ", only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
	
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$msj= "Sorry, your file was not uploaded".$msj;
		$uploadOk = 0;
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			   $msj= "The file ".$nomArch. " has been uploaded.";
			} else {
			   $msj= "Sorry, there was an error uploading your file.";
			   $uploadOk = 0;
			}
	}
	
	$result=['filename'=>$nomArch,'message'=>$msj,'uploadOk'=>$uploadOk];
	return $result;
}
