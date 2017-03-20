<?php include "menu.php"; ?>
<?php
include "connection.php";

if(isset($_POST['btnAdd'])){
    $add=$db->prepare("INSERT INTO customers (firstname,lastname,streetaddress)
    VALUES(:fn,:ln,:ad)");
    $add->bindParam(':fn',$fn);
    $add->bindParam(':ln',$ln);
    $add->bindParam(':ad',$ad);
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $ad=$_POST['ad'];
    $add->execute();
}
?>
<h2>Customers</h2>
<table border="1">
    <tr>
        <th>First name</th><th>Last name</th><th>Street address</th>
        <th>Edit</th>;
    </tr>

<?php
    include "connection.php";
    $myquery="SELECT firstname,lastname,streetaddress,id_customers FROM customers";
    $customers_data=$db->query($myquery);

    foreach ($customers_data as $row){
      echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td>
      <td>'.$row['streetaddress'].'</td>';
      echo '<td><a href="update_customer.php?id='.$row['id_customers'].'"><button>Update</button></a></td>';
      echo '</td>';
    }
?>
</table>

<?php include "footer.php"; ?>
