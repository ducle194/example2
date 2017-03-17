<?php include "menu.php"; ?>
<form class="" action="login.php" method="post">
    <table>
        <tr>
            <td>User name</td><td><input type="text" name="user" value="" Placeholder="type your user name" required ></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="text" name="pass" value="" required="" ></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" name="btnLogin" value="Login"></td>
        </tr>
    </table>
</form>
<?php
session_start();
$btn=$_POST['btnLogin'];
if(isset($btn)){
  $_SESSION['username']=$_POST['user'];
  echo 'Hello '.$_POST['user'];
}
?>
<?php include "footer.php"; ?>