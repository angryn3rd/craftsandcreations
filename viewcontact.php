<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css"  rel="stylesheet" type="text/css"> <!--style.css needs to be replaced-->
    <link href="sidebar.css"  rel="stylesheet" type="text/css"> <!--this css file helps to navigate between different backend pages-->
  </head>

  <body>
  
    <!--Backend topbar-->
      <ul>
  <li style="word-spacing: 5px; text-align: center"><a href="#about">Crafts & Creations</a></li>
      </ul>
    <!--end of the backend topbar code-->
  
  
  
   <div class="row"> <!--this div contains the column classes-->
    <div class="col-md-3 col-md-offset-1"> <!--this div gives the left side , i.e, the customer table-->
        <?php
            include("dbconnect.php"); //connects to the file that connects to the database
            $query="SELECT * FROM `register`"; //SQL query to select from database
            $result=mysql_query($query,$connect); //stores the query result in the $result variable
            
            //the code below prints the table
            echo "<table border='solid' >
                      <thead>
                      <td>Name</td>
                      <td>E-mail</td>
                      <td>Message</td>
                      <td>Delete</td>
                      </thead>";
            while($row=mysql_fetch_array($result)) //fetches the variable
            {
                //$i=$row['id']
                $a=$row['username1'];
                $b=$row['email'];
                $c=$row['username2'];
                                ?>
                      <tr>
                      <td> <?php echo $a; ?></td>
                      <td> <?php echo $b; ?></td>
                      <td> <?php echo $c; ?></td>
                      <td><form  method="post"><input type="hidden" value="<?php echo $i; ?>" name="d"><input type="submit" name="del" value="Delete"></form></td>
                      </tr>
        <?php }?>
        </table>
    
    
    <!--the following code deletes from the customer information database-->
    <?php
        if(isset($_POST["del"])) //'del' because name of the button delete is del
        {
        $id=$_POST["d"]; //'d' because name of the form is d
        $query="DELETE FROM `register` WHERE id='$id'";
        $result=mysql_query($query,$connect);
        if($result)
            {
                echo"Your data is deleted.";
            }
        else
            {
                echo"There was an error."; 
            }
        }
    ?>
    </div> <!--this is the closing div of the left column div-->
    
    <div class="col-md-3 col-md-offset-5"> <!--this div gives the right hand side , i.e , the side navigation bar-->
        <ul> <!--the sidebar code starts here-->
      <li><a href="customerdata.php">Customer Data</a></li>
      <li><a href="uupload.html">Upload Products</a></li>
      <li><a href="products.php">Stock</a></li>
      <li><a href="index.html">Home</a></li>
      <li><a class="active" href="#contact">Contact</a></li>
    </ul> <!--the sidebar code ends here-->
    </div> <!--the right hand side div ends here-->
 </div> <!--the class='row' ends here-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
