<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">   
     
    </head>
    <body>
            <header>
               <div class="topbar">
                    <div class="wrap">
                        <div class="logo"><img src="img/logo.png" alt="C&C"></div>
                        <div class="name"><img src="img/name1.png"</div> 
                        <div class="navbar">
                                <nav>
                                    <ul>
                                    <li> <a href="index.html" class="navbutton">HOME </a> </li>
                                    <li> <a href="collection.php" class="navbutton"> COLLECTIONS </a> </li>
                                    <li> <a href="about.html" class="navbutton"> ABOUT US </a> </li>
                                    <li> <a href="contactus.php" class="navbutton"> CONTACT US </a> </li>
                                    </ul>
                                </nav>
                        </div>
                    </div>
               </div>
            </header>
            <section>
                <div class="item">                                                                  
                    <?php
                        include("dbconnect.php");
                        $ress="SELECT * FROM productsinfo";
                        $result=mysql_query($ress,$connect);
                        while($row=mysql_fetch_array($result)){
                                $p=$row['price'];
                                $n=$row['name'];
                                $a=$row['SKU'];
                    ?>
                    <div class="prod">
                            <ul>
                            <li>
                            <?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['photo']).'" height="230px" width="100%">'; ?>
                            <h5>
                    
                                <?php echo $n; ?></br>
                                Price: Rs. <?php echo $p; ?>
                            </h5>
                            <div class="but"><a href="address.php?id=<?php echo $a; ?>" ><input type="button" id="button" value="Buy Now" /></a></div>
                            </li>
                            
                            </ul>
                    </div>
                    <?php   } ?>   
                </div>
            </section>    
    </body>
</html>    
