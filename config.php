<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "dropdown";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' ());
        }
?>