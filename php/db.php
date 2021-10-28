<?php

   //Allows for the PHP to communicate with the data base ran by the Unviversity of Windsor

    $servername='localhost';
    $username='pacek_db';
    $password='myPASSdb123';
    $dbname = "pacek_db";
    
    $conn=mysqli_connect($servername,$username,$password, $dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>