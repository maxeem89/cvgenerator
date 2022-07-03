<?php 
include_once './function.php';
include_once './header.php';
include_once './footer.php';

?>
<div class="container my-5">
<form method="POST" action="./storeCar.php">
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="nameCar"name='name' aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantity</label>
    <input type="text" class="form-control" name='quantity'id="man_year">
  </div>
  <div class="mb-3">
    <label for="man_year" class="form-label">year</label>
    <input type="text" class="form-control" name='man_year'id="man_year">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>