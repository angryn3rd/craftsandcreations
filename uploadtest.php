<?php
   //include("dbconnect.php")
   $target_dir = "uploads/";   //the targeted directory where the file will be stored
   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //it specifies the path of the file to be uploaded
   //This gets all the other information from the form
   //$sku=$_POST['sku'];
   //$sp=$_POST['sp'];
   //$pic=($_FILES['photo']['name']);
   //$pname=$_POST['pname'];
   //$pdes=$_POST['pdes'];
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file(in lower case)
   
   // Checks if image file is a actual image or fake image
   if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . "."."<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
     }
    }
    
    
    // Checks if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists."."<br>";
        $uploadOk = 0;
    }
    
    
    
    // Checks file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large."."<br>";
        $uploadOk = 0;
    }
    
    
    // Allows certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."."<br>";
        $uploadOk = 0;
    }
    
    
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    else 
    {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
     	//write database code here

	} else {
        echo "Sorry, there was an error uploading your file.";
     }
    }

    
?> 
