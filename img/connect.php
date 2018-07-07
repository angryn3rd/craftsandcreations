<?php
$host="localhost";
$user="root";
$password="SsXx*9710";
$db="craftsandcreations";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where USER='".$uname."' AND PASS='".$password."'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        echo "you have succesfully logged in";
    }
    else{
        echo "you have entered incorrect password";
    }
    
}
?>
