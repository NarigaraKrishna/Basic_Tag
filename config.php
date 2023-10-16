<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="krishnadb";
     
    $conn = mysqli_connect($servername,$username,$password,$databasename);
    if(!$conn)
    {
        echo "not";
    }
    
?>