<?php
    $connect=mysql_connect("localhost","root","");  //this file connects to the database
    if(!$connect)
    {
        echo"Database not connected.";
    }
    else{
        mysql_select_db("craftsandcreations",$connect);
    }
?>
