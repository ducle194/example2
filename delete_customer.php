<?php include "menu.php"; ?>
<h2>Delete Customer</h2>
<?php
  include "connection.php";
  $sql="SELECT * FROM customers WHERE id_customers=".$_GET['id'];
  $result=$db->query($sql);
  $theArray=$result->fetch(PDO::FETCH_ASSOC);
  $fn=$theArray['firstname'];
  $ln=$theArray['lastname'];
  $ad=$theArray['streetaddress'];
?>
<form class="" action="customers.php" method="post">

<label for="fn">First name</label><br/>
<input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" disabled><br>

<label for="ln">Last name</label><br/>
<input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" disabled><br>

<label for="ad">Street address</label><br/>
<input type="text" name="ad" id="ad" value="<?php echo $ad; ?>"disabled><br>

<input type="hidden" name="id" value="<?php echo $_GET['id']?>"><br>
<label for="">Do you really want to delete this customer ?</label>
<input type="submit" name="btnDelete" value="Delete">
<a href="customers.php"></a><button>Cancel</button></a>
</form>
<?php include "footer.php"; ?>
