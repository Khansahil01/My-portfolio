<?php
$name =$_POST['name'];
$address =$_POST['address'];
$phone =$_POST['phone'];
$order =$_POST['order'];
$quantity =$_POST['quantity'];
$conn = new mysqli('localhost','root','','cont');
if($conn->connect_error){
die('Connection Failed : ' .$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into contact (name, address,phone, order, quantity)
values(?,?,?,?,?)");
$stmt->bind_param("ssisi",$name, $address,$phone, $order, $quantity);
$stmt->execute();
echo"order successful....";
$stmt->close();
}
?>
