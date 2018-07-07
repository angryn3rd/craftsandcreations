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
    //$uname=mysqli_real_escape_string($db, $_POST['username']);
    //$password=mysqli_real_escape_string($db, $_POST['password']);
    


    $sql="select * from loginform where USER='".$uname."' AND PASS='".$password."'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){ 
        echo "you have succesfully logged in";?>
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
            <br>
            <h1>You have successfully accessed the dashboard ! Congratulations !!</h1><br>
            <a href="customerdata.php" class="btn btn-primary btn-lg" role="button">Proceed Further</a>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
          </body>
        </html>
    <?php }
       else{
        echo "you have entered incorrect password"; ?>
       <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Logged In Successfully</title>

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
            <br>
            <h1>You are not allowed without the password Dude !</h1><br>
            <h3>click below for another try !</h3><br>
            <a href="login.html" class="btn btn-primary btn-lg" role="button">Please let my try again !</a>
            

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
          </body>
        </html>

    <?php }
    
}
?>
