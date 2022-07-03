<?php
session_start();
include_once './function.php';
include_once './header.php';
include_once './footer.php';
$quantity;

$_SESSION['error']=null;
$error=Array();
$id=$_GET['id'];
$query = "SELECT * FROM car WHERE id=$id;";

$result=selectCars($query);
foreach ($result as  $value) {
   $quantity=$value['sales_quantity'];
}


if($quantity>0){
    $quantity--;
 $con=  connection();
 $query= "update car set sales_quantity=$quantity where id=$id;";
 
 $res = mysqli_query($con, $query);

 mysqli_close($con);


     header('Location: ./');
 
}
 else{
    $error['update wa not applied']=" The quantity is zero ";
    $_SESSION['error']=$error;
    header('Location: ./');

}
