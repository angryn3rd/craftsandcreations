<html>
<head><title>Contact Form</title>
        <link rel="stylesheet" type="text/css" href="isstyle.css">
</head>
    <body>
        <div class="login-box">
          <!--  <img src="download.jpg" class="download">-->
            <h1>Details Here</h1>
            <form method="post" action="contactus.php">
                <p>Name</p>
                <input type="text" name="username" placeholder="Enter name">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter mail id">
                <p>Write Message </p>
                <textarea rows="5" cols="30" name="message"></textarea>
                <input type="submit" name="submit" value="Submit">
                
                
            </form>
        </div>
        
        
    </body>
</html>
<?php
    $host="localhost";
    $dbUsername="root";
    $dbPassword="SsXx*9710";
    $dbname="craftsandcreations";
    //cretae connection
    $conn=new mysqli($host,$dbUsername,$dbPassword);
    mysqli_select_db($conn,$dbname);
    if(!$conn){
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }

if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$message=$_POST['message'];

    

        $insert="INSERT into register(username1,email,username2) values('$username', '$email','$message')";
        if(mysqli_query($conn,$insert)){
            echo "your message is sent successfully";
            
        }
        else{             echo "Please fill the form 1st ";       }
}
?>