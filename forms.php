<?php include "menu.php"; ?>
<h2>Forms</h2>
<form class="" action="forms.php" method="post">
    <label for="country">Choose the country</label>
    <select id="country"name="country">
        <option value="">Choose</option>
        <option value="fin">Finland</option>
        <option value="rus">Russia</option>
        <option value="nep">Nepal</option>
        <option value="vie">Vietnam</option>
        <option value="lat">Latvia</option>
    </select>
    <br>
    <label for="gender">Choose your gender</label><br/>
    <input type="radio" name="gender" value="female">Female<br/>
    <input type="radio" name="gender" value="male">Male<br/>
    
    <label for="status">Choose your status</label><br>
    <input type="radio" name="status" value="student">Student<br>
    <input type="radio" name="status" value="teacher">Teacher<br>

    <input type="submit" name="btnSend" value="Send">
</form>
<?php
    $btn=$_POST['btnSend'];
    if(isset($btn)){
        $country=$_POST['country'];
        $gender=$_POST['gender'];
        echo 'Hello '.$gender.' from '.$country;
    }
?>
<?php include "footer.php"; ?>