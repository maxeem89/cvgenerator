<?php 
session_start();
include_once './function.php';
include_once './header.php';
include_once './footer.php';

$error=Array();
$id= $_POST['id'];
$name= $_POST['name'];
$man_year= $_POST['man_year'];
$quantity= $_POST['quantity'];
$con=  connection();
$query= "update car set name='$name', man_year='$man_year', sales_quantity='$quantity' where id=$id;";
$res = mysqli_query($con, $query);

mysqli_close($con);

if($res){
    header('Location: ./');
} else {
    $error['update wa not applied']=" update wasn't applied succssesfully";
    $_SESSION['error']=$error;
    header('Location: ./');
    $_SESSION['error']=null;
}
?>