<?php
include "connection.php";
$id=$_POST['chosen'];
$id_list=implode(",",$id);
//echo 'the list is '.$id_list;
$sql="DELETE FROM customers WHERE id_customers IN ($id_list)";
$db->query($sql);
header('Location: customers.php');
 ?>
