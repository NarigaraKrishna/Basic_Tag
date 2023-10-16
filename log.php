<?php
    include 'config.php';
    $email=$_POST['email'];
    $pass=$_POST['psw'];

    $sql="SELECT * FROM reg WHERE email='$email' and password='$pass'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);

    if($count==1)
    {
        header('location:view.php');
    }
    else
    { ?>
        <script>
            alert("incorect email and password!!!");
            windows.location.href="index.php";
        </script>
    <?php }
?>