<?php
session_start();
include_once './function.php';
include_once './header.php';
include_once './footer.php';
$query = "SELECT * FROM car;";
$cars = selectCars($query);
?>
<div class="my-5 container ">
  <div id="message">
    <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
      <?php foreach ($_SESSION['error'] as  $error) : ?>
        <div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert">
          <?= $error; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div class="row d-flex justify-content-between">
    <div class="col-6">
      <h2>cars inforamtion</h2>
    </div>
    <div class="col-6">

      <a class="mb-5  d-flex justify-content-end " href="./createCar.php" class="mx-5"> <button type="button" class="btn btn-success">add</button></a>
    </div>


  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">man_year</th>
        <th scope="col">quantity</th>
        <th scope="col">reg_date</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cars as $car) { ?>
        <tr>

          <td><?php echo $car['id']; ?></td>
          <td><?php echo $car['name']; ?></td>
          <td><?php echo $car['man_year']; ?></td>
          <td><?php echo $car['sales_quantity']; ?></td>
          <td><?php echo $car['reg_date']; ?></td>
          <td>


            <a href="./show.php?id=<?php echo $car['id']; ?>"><button type="button" class="btn btn-success">show</button>
              <a href="./editCar.php?id=<?php echo $car['id']; ?>"><button type="button" class="btn btn-warning">edit</button>
                <a href="./deleteCar.php?id=<?php echo $car['id']; ?>"><button type="button" class="btn btn-danger confirm remove" value="<?php echo $car['id'] ?>">del</button>
                <a href="./addSale.php?id=<?php echo $car['id']; ?>"><button type="button" class="btn btn-info confirm" >sale</button>
          </td>


        </tr>
      <?php }; ?>
    </tbody>
  </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>s
<script type="text/javascript">
  window.setTimeout("document.getElementById('message').style.display='none';", 2000);
</script>

  
 <!-- <script type="text/javascript"> 
  $(".remove").click(function() {
    event.preventDefault();
    var id = $(this).parents("tr").attr("id");

    if (confirm('Are you sure to remove this record ?') == true) {
      $.ajax({
        url: './deleteCar.php',
        type: 'GET',
        data: {
          id: id
        },
        error: function() {
          alert('Something is wrong');
        },
        success: function(data) {
          $("#" + id).remove();
          alert("Record removed successfully");
        }
      });
    }
  }); 
</script> -->