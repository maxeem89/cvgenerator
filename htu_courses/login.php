<?php 
 session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-5">
     <?php if(isset($_SESSION['login_error'])){ 
        foreach ($_SESSION['login_error'] as  $error) { ?>
   
    <div class="alert alert-danger text-center" role="alert">
    <?php echo $error?>
    </div>
    

    <?php }; ?>
    <?php }; ?>
    <form method="POST" action="./validation.php">
    <div class="mb-3">
    <label for="exampleInputuserName1" class="form-label">User Name </label>
    <input type="text" name="userName" class="form-control" id="exampleInputuserName1" aria-describedby="userNameHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
