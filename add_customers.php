<?php include "menu.php"; ?>
<h2>Add Customer</h2>

<form class="" action="customers.php" method="post">

<label for="fn">First name</label><br/>
<input type="text" name="fn" id="fn" value="" required=""><br>

<label for="ln">Last name</label><br/>
<input type="text" name="ln" id="ln" value="" required=""><br>

<label for="ad">Street address</label><br/>
<input type="text" name="ad" id="ad" value=""><br>

<input type="submit" name="btnAdd" value="Add">
</form>

<?php include "footer.php"; ?>