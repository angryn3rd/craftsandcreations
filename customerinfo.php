<?php
include("dbconnect.php"); //this code connects the database to this file
if(isset($_POST["press"])) //name of the submit button is press
       {
        $nam=$_POST["name"];  //the following code stores the inputs that are passed in some variables
        $add=$_POST["addr"];
        $ema=$_POST["email"];
        $ph=$_POST["ph"];
        $pass=$_POST["pass"];
	    $cit=$_POST["city"];
	    $sta=$_POST["state"];
        $pin=$_POST["pin"];
        $sex=$_POST["sex"];
	
	//query to insert the values into the mariadb database
	$query="INSERT INTO `customerinfo`(`name`, `address`, `email`, `phone`, `password`,`city`,`state`,`pin`,`sex`) VALUES ('$nam','$add','$ema','$ph','$pass','$cit','$sta','$pin','$sex')";
        $result=mysql_query($query,$connect);
        if($result)
        {
            echo"Your data is inserted";
        }
        else{
            echo"there was an error"; 
        }
       } 
?> 