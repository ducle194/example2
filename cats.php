<?php include "menu.php"; ?>
<h2>Cats</h2>
<?php
 include "connection.php";
 $getCats="SELECT name,id_customers FROM cats";
 $result=$db->query($getCats);
?>
<p>Choose the cat to see the owner</p>
<form class="" action="cats.php" method="post">
  <select class="" name="id_chosen">
    <option value="">Choose</option>
    <?php
      foreach ($result as $row) {
        echo '<option value="'.$row['id_customers'].'">'.$row['name'].'</option>';
      }
    ?>
  </select>
  <input type="submit" name="btnShow" value="Show">
</form>
<?php
  if(isset($_POST['btnShow'])){
    $owner="SELECT * FROM customers INNER JOIN cats
    ON customers.id_customers=cats.id_customers
    WHERE customers.id_customers=".$_POST['id_chosen'];
    $data=$db->query($owner);
    $theOwner=$data->fetch(PDO::FETCH_ASSOC);
    echo 'The owner '.$theOwner['name'].' is '.$theOwner['firstname'].' '.$theOwner['lastname'];
  }
?>
<?php include "footer.php"; ?>
