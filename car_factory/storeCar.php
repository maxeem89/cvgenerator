<?php

include_once './function.php';
include_once './header.php';
include_once './footer.php';

$name= $_POST['name'];
$man_year= $_POST['man_year'];
$quantity= $_POST['quantity'];

$con=  connection();
$query= "insert into car (name,man_year, sales_quantity) values('$name','$man_year','$quantity')";
$res = mysqli_query($con, $query);

mysqli_close($con);

if($res){
    header('Location: ./');
} else {
    header('Location: ./createCar.php');
}
?>