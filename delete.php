<?php
    include 'config.php';
    if(isset($_GET['id']))
    {
        $uid=$_GET['id'];
        $sql="DELETE FROM reg WHERE id=$uid";
        $result=mysqli_query($conn,$sql);
        if($result==TRUE)
        {
            header('location:view.php');
        }
    }
?>