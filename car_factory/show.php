<?php

include_once './function.php';
include_once './header.php';
include_once './footer.php';
$id = $_GET['id'];
$query = "SELECT * FROM car WHERE id=$id;";
$res = selectCars($query);

?>
<div class="container">
    <a href="./">back</a>
    <div class="container my-5 d-flex justify-content-center align-items-csnter">

        <?php if (isset($res)) : ?>
            <?php foreach ($res as  $value) : ?>
                <div class="card w-25" style="width: 18rem;">
                    <div class="card-header">
                        car number <?= $value['id']; ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: <?= $value['name']; ?> </li>
                        <li class="list-group-item">Quantity: <?= $value['sales_quantity']; ?></li>
                        <li class="list-group-item">Registration Date: <?= $value['reg_date']; ?></li>
                    </ul>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>


    </div>