<?php
    include("dbconnect.php"); //database connection
    $id=$_GET['id'];
    echo $id;
    $query="SELECT * FROM customerinfo where serial='$id'";
    $result=mysql_query($query,$connect); 
?>
<!doctype html>
<html>
<head>
	<title>Update Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css"> <!--to be deleted later-->
</head>
<body>
<p><b>Update Database</b></p>
	<form name="myForm" method="post">
            <table>
                <?php
                    while($row=mysql_fetch_array($result))
                    {
                        $a=$row['address'];
                        $b=$row['email'];
                        $c=$row['phone'];
                        $d=$row['password'];
                ?>
                        <tr>
                        <td>Address:</td>
                        <td><input type='text' name='addr' value='<?php echo $a; ?>'placeholder='Enter the new address' /></td>
                        </tr>
                        <tr>
                        <td>E-mail:</td>
                        <td><input type='email' name='email' value='<?php echo $b; ?>' placeholder='Enter new e-mail address' /></td>
                        </tr>
                        <tr>
                        <td>Mobile:</td>
                        <td><input type='text' name='ph' value='<?php echo $c; ?>' placeholder='Enter new Mobile number' /></td>
                        </tr>
                        <td>Password:</td>
                        <td><input type='password' name='pass' value='<?php echo $d; ?>' placeholder='Enter new Password' /></td>
                        </tr>
                        <tr>
				<td></td>
				<td><input type='submit' id='submit' value='Submit' name='update'/></td>
			</tr>
                <?php    }    ?>
                

            </table>
        </form>
	
      <!--test link , to be deleted later-->
      <a href="customerdata.php">customerdata.php</a>
      <!--test link code ends here-->
</body>
</html>
<?php
    if(isset($_POST["update"]))
    {
        $addr=$_POST["addr"];
        $email=$_POST["email"];
        $ph=$_POST["ph"];
        $pass=$_POST["pass"];
        $query="UPDATE customerinfo SET address='$addr',email='$email',phone='$ph',password='$pass' WHERE serial='$id'";
        $result=mysql_query($query,$connect);
        if($result)
        {
            echo"Your data is updated.";
           
        }
        else{
            echo"There was an error."; 
        }
    }
?>
