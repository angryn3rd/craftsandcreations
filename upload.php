<?php
   include("dbconnect.php");
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file(in lower case)
   
   // Checks if image file is a actual image or fake image
   if(isset($_POST["submit"])) {
     
     $fileName=$_FILES["fileToUpload"]["name"];
     $tmpName=addslashes(file_get_contents($_FILES["fileToUpload"]["tmp_name"])); //gives the final name to be saved in the database
     $array=array('jpg','jpeg','png'); //defines the types of files that can be uploaded
     $ext=pathinfo($fileName,PATHINFO_EXTENSION);  
    //This gets all the other information from the form
     $sku=$_POST['sku'];
     $sp=$_POST['sp'];
     $pname=$_POST['pname'];
     $pdes=$_POST['pdes'];



     //query to insert the values into the mariadb database
     $query="INSERT INTO `productsinfo`(`SKU`, `price`, `name`, `description`, `photo`) VALUES ('$sku','$sp','$pname','$pdes','$tmpName')";
      $result=mysql_query($query,$connect);
  
     if($result)
        {
            echo "Your data is inserted";
        }
     else{
            echo "there was an error"; 
        }
    
    }
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <br><a href="uupload.html" class="btn btn-primary btn-lg" role="button">Upload Again ?</a>
    <a href="customerdata.php" class="btn btn-default btn-lg" role="button">I am Done !!</a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>