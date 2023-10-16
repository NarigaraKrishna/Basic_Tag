<?php
    include 'config.php';
    $sql="SELECT * FROM reg";
    $result=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <style>
            table{
                margin-top:80px;
            }
        </style>
    </head>
    <body>
        <center>
            <table border="1">
                <tr>
                    <th colspan=7 style="text-align:center;">VIew all record in table</th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                    <th>password</th>
                    <th>mobile no</th>
                    <th>delete</th>
                    <th>edit</th>
                </tr>
                <?php
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        { ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['firstname']; ?></td>
                        <td><?php echo $rows['lastname']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['password']; ?></td>
                        <td><?php echo $rows['phone']; ?></td>
                        <td><a href="delete.php?id=<?php echo $rows['id']; ?>">delete</a></td>
                        <td><a href="update.php?id=<?php echo $rows['id']; ?>">edit</a></td>
                    </tr>
                     <?php   }
                    }
                    
                ?>
            </table>
        </center>
    </body>
</html>