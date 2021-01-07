<?php 
   $conn =  new mysqli("localhost","root","","dbblog");
    if(!$conn){
        echo "Database Not Found";
    }
?>