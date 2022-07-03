<?php

include_once './function.php';
include_once './header.php';
include_once './footer.php';
$id=$_GET['id'];

$con=  connection();
$query= "delete from car where id=$id; ";

$res = mysqli_query($con, $query);

mysqli_close($con);

if($res){
    header('Location: ./');
} else {
    header('Location: ./');
}
?>