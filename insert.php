<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $email=$_POST['email'];
    $psw=$_POST['password'];
    $phone=$_POST['phone'];

    $sql="INSERT INTO reg(firstname,lastname,email,password,phone)VALUES('$fn','$ln','$email','$psw','$phone')";
    $result=mysqli_query($conn,$sql);
    if($result==TRUE)
    {
        header('location:index.php');
    }
}
?>