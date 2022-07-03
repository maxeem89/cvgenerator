<?php 
include_once './function.php';
include_once './header.php';
include_once './footer.php';
$id=$_GET['id'];
$query = "SELECT * FROM car WHERE id=$id;";
$cars = selectCars($query);
?>
<div class="container w-50 my-5">
    <div class="container d-flex justify-content-between align-items-center">
        <h3>Edit Car Inforamtion </h3>
    <a href="./" class="my-5"><button type="button" class="btn btn-success">back</button></a>
    </div>
<form method="POST" action="./updateCar.php">
     <?php foreach ($cars as  $car) : ?>
  <div class="mb-3">
    <input type="hidden" class="form-control" id="nameCar"name='id' aria-describedby="emailHelp" value="<?= $car['id'] ;?>">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="nameCar"name='name' aria-describedby="emailHelp" value="<?= $car['name'] ;?>">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantity</label>
    <input type="text" class="form-control" name='quantity'id="man_year" value="<?= $car['sales_quantity'] ;?>">
  </div>
  <div class="mb-3">
    <label for="man_year" class="form-label">year</label>
    <input type="text" class="form-control" name='man_year'id="man_year" value="<?= $car['man_year'] ;?>">
  </div>
  <?php endforeach; ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>