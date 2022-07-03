<?php
function connection()
{
    $con = mysqli_connect('127.0.0.1', 'root', '123456789', 'car_factory');
  
 return $con;
}
function selectCars($query)
{
    $con=connection();
    $cars = array();
    $result = mysqli_query($con, $query);
    while ($car = mysqli_fetch_assoc($result)) {

        $cars[] = array(
            'id' => $car['id'],
            'name' => $car['name'],
            'man_year' => $car['man_year'],
            'sales_quantity' => $car['sales_quantity'],
            'reg_date' => $car['reg_date'],
        );
    }

    mysqli_close($con);
    return $cars;
   
}


