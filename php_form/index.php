<?php
session_start();
require '../constant/cons.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
    include '../form_nav/nav.html';
    ?>
    </div>
    <div class="container my-5">
        <form method="POST" action="../valdiate/validation.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="userName" name="userName" class="form-control" id="exampleInputuserName" aria-describedby="userNameHelp" minlength="3" maxlength="10" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required minlength="5" maxlength="10">
            </div>


            <div class="form-floating w-50">
                <textarea class="form-control" name="textAriea" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <div class="container my-3 ">
                <div class="container ">
                    <label for="examplebtn-group">Gender</label>
                </div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" value="male" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">male</label>
                    <input type="radio" class="btn-check" name="btnradio" value="female" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">female</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php if (isset($_SESSION['login_error'])) :
        foreach ($_SESSION['login_error'] as $key => $error) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error ?>
            </div>
        <?php
        }
        ?>

    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>