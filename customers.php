<?php include "menu.php"; ?>
<?php
include "connection.php";

if(isset($_POST['btnEdit'])){
    $add=$db->prepare("UPDATE customers SET firstname=:fn,lastname=:ln,streetaddress=:ad WHERE id_customers=:id");
    $add->bindParam(':fn',$fn);
    $add->bindParam(':ln',$ln);
    $add->bindParam(':ad',$ad);
    $add->bindParam(':id',$id);
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $ad=$_POST['ad'];
    $id=$_POST['id'];
    $add->execute();
}

if(isset($_POST['btnDelete'])){
  $deleteSQL="DELETE FROM customers WHERE id_customers=".$_POST['id'];
  $db->query($deleteSQL);
}
?>
<h2>Customers</h2>
<table border="1">
    <tr>
        <th>First name</th><th>Last name</th><th>Street address</th>
        <th>Edit</th><th>Delete</th>;
    </tr>

<?php
    include "connection.php";
    $myquery="SELECT firstname,lastname,streetaddress,id_customers FROM customers";
    $customers_data=$db->query($myquery);

    foreach ($customers_data as $row){
      echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td>
      <td>'.$row['streetaddress'].'</td>';
      echo '<td><a href="update_customer.php?id='.$row['id_customers'].'"><button>Update</button></a></td>';
      echo '<td><a href="delete_customer.php?id='.$row['id_customers'].'"><button>Delete</button></a></td>';
      echo '</td>';
    }
?>
</table>

<?php include "footer.php"; ?>
