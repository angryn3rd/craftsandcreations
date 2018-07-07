<?php
    include("dbconnect.php"); //database connection
    $id=$_GET['id'];
    //echo $id;
    $query="SELECT * FROM productsinfo where SKU='$id'";
    $result=mysql_query($query,$connect); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Customer Address</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css"  rel="stylesheet" type="text/css"> <!-- style.css needs to be replaced-->
    <link href="topbar.css"  rel="stylesheet" type="text/css"> <!-- topbar.css has to be included in every frontend page and this gives the navigation bar-->
  </head>
  <body>

  	<!--topbar code-->
          <ul>
		  <li><a href="index.html">Home</a></li>
		  <li><a href="collection.php">Collection</a></li>
		  <li><a href="contactus.php">Contact</a></li>
		  <li style="float:right"><a href="about.html">About</a></li>
	  </ul>
     
    <!--topbar code ends-->

    <div class="container thumbnail">
    <div class="row">
  	<div class="col-md-8"><br><br> <!--this code helps the form to be on the left hand side of the screen-->
    

    <h3>Fill the form !</h3>


    <!--Address form code starts here !!-->
      <form class="form-inline" name="CustomerInfoForm" action="customerinfo.php" method="post">
        	<table>
				<tr>
					Name*<br><input type="text" name="name" required placeholder="Enter your full name" class="form-control" size="47px"/>
				</tr>
				<tr><br>
					Address*<br><input type="text" name="addr" class="form-control" placeholder="Enter your address" size="47px"/>
				</tr>
				<tr><br>
					E-mail*<br><input type="email" name="email" class="form-control" placeholder="Your e-mail id" size="47px"/>
				</tr>
				<tr>
					<td>Phone*<br>+91<input type="text" name="ph" class="form-control" placeholder="Phone No."></td>
					<td>SKU = <?php echo $id; ?><br><input type="password" name="pass" class="form-control" placeholder="type SKU to verify"></td>
				</tr>
				<tr>
					<td style="padding:20px">City*<br><select name="city">
							<option value="city">Select City</option>
							<option value="Dibrugarh">Dibrugarh</option>
							<option value="Guwahati">Guwahati</option>
							<option value="Jorhat">Jorhat</option>
							<option value="Golaghat">Golaghat</option>
							<option value="Tezpur">Tezpur</option>
							</select></td>
					<td style="padding:20px">State*<br><select name="state">
							<option value="state">Select State</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Odisha">Odisha</option>
							<option value="Sikkim">Sikkim</option>
							<option value="West Bengal">West Bengal</option>
							</select></td>
				</tr>
				<tr>
					<td>PIN/ZIP Code*<br><input type="text" name="pin" placeholder="PIN/ZIP code"/></td>
                    <td style="padding:20px">Gender*<br>
							<input type="radio" name="sex" value="male" id="male"/> Male
							<input type="radio" name="sex" value="female" id="female" /> Female
				</tr>
				<tr>
					<!--<td><button type="button" class="btn btn-lg btn-primary" disabled="disabled">Continue Shopping</button></td>-->
					<td><a style=" background-color: #4CAF50;
							    color: white;
							    padding: 15px 32px;
							    text-align: center;
								font-size: 12px;
							    display: inline-block;											    
							    margin: 4px 2px;
							    cursor: pointer;" href="index.html" class="button">Continue Shopping</a></td>
		    		<td style="padding:20px"><a href="#">
		    			<input	style=" background-color: #4CAF50;
								    color: white;
								    padding: 15px 32px;
								    text-align: center;
									font-size: 12px;
								    display: inline-block;											    
								    margin: 4px 2px;
								    cursor: pointer;" type="submit" name="press" value="Proceed to Payment"></a></td>
				</tr>
	    	</table>
        </form>

          <!--address form code ends here-->
	  

    </div><!--class="col-md-8" ends here-->

        <!--Order review column code starts here ! It is for the column on the right hand side , It shall review the order-->
  			<div class="col-md-4">

  				<?php
  				
  				$row=mysql_fetch_array($result);
  				?>

  				<h3><?php echo $row['name']; ?></h3>
  				Price :- <h4><?php echo $row['price']; ?></h4>
                
                
                <?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['photo']).'" height="inherit" width="100%"'; ?>
                
                <p><?php echo $row['description']; ?></p>

  			</div>
  	<!--Order review column code ends here-->
    </div><!--class="row" ends here-->
    </div><!--class="container" ends here-->
      
      <?php include ("footer.php"); ?> <!--footer file inclusion part-->
      
      
  </body>
</html>
