<?php include "menu.php"; ?>
<h2>Delete Selected Customers</h2>
<form class="" action="delete_chosen.php" method="post">
<table border="1">
  <tr>
    <TH>Firstname</TH><TH>Lastname</TH><TH>Streetaddress</TH><TH>Choose</TH>
  </tr>

<?php
include "connection.php";
$myquery="SELECT firstname,lastname,streetaddress,id_customers FROM customers";
$customers_data=$db->query($myquery);
foreach ($customers_data as $row) {
  echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['streetaddress'].'</td>';
  echo '<td><input type="Checkbox" name="chosen[]" value="'.$row['id_customers'].'" /></td>';
  echo '</tr>';
}
?>
</table>
<input type="submit" name="deleteSelected" value="Delete">
</form>
<?php include "footer.php"; ?>
