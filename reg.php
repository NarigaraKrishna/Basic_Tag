<html>
    <head>
<style>
    table{
        margin-top: 120px;
    }
    a{
        text-decoration: none;
    }
</style>
    </head>
    <body>
        <center>
        <table>
            <tr>
                <td colspan="2"><h2>Register Form</h2></td>
            </tr>
            <form action="insert.php" method="POST">
                <tr>
                    <td>firstname:</td>
                    <td><input type="text" name="fname" id=""></td>
           </tr>
           <tr>
            <td>lastname:</td>
            <td><input type="text" name="lname" id=""></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>password:</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td>phone:</td>
            <td><input type="text" name="phone" id=""></td>
        </tr>
        <tr>
        <td colspan="2" style="text-align: center; height: 50px;">
            <input type="submit" name="submit" id="" value="register">
            <input type="reset" name="" id="" value="clear"></td>
        </tr>
            <tr>
                <td colspan="2">already have an account? <a href="index.php">login now</a></td>
            </tr>
            </form>
        </table>
        </center>
    </body>
</html>