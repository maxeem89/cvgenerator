<?php
session_start();

$_SESSION['error'] = null;
$messege_error = Array();
$pieces =Array();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (empty($_GET)) {
        $messege_error = ['wronge_data' => 'enter the correct data'];
        $_SESSION['error'] = $messege_error;
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
} else {
    $messege_error = ['wronge_requset' => 'enter the correct request'];
    $_SESSION['error'] = $messege_error;
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
var_dump($_GET);
if(empty($_Get['skills'])!=false)  {
                             
$pieces = explode(",",$_GET['skills']);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cv_generator/assets/style.css">

</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col text-light p-0">
                <div class=" p-2 left_side ">
                    <div class="profileText1">
                        <div class="imgBx">
                            <img src="C:\Users\maxee\Desktop\11.jpeg" style="width: 70%; ">
                        </div>
                        <h2><?php echo $_GET['fName'] . " " . $_GET['lName'] ?> <br><span><?php echo $_GET['Profession'] ?></span></h2>
                    </div>
                    <hr class="bg-light">
                    <div class="mt-5 ">
                        <h3 class="title">contact Info</h3>
                        <ul class="list-group ">
                            <li class="list-group-item border-0 disabled htu-title ">
                                <span class="icon"><i class="fa fa-phone-square" aria-hidden="true">
                                    </i>

                                </span>
                                <span class="text"><?php echo $_GET['phone'] ?></span>
                            </li>
                            <li class="list-group-item border-0 disabled htu-title">
                                <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                <span class="text"><?php echo $_GET['email'] ?></span>
                            </li>
                            <li class="list-group-item border-0 disabled htu-title">
                                <span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </span>
                                <span class="text"><a href="https://www.linkedin.com/in/maxeem-kh-28bbba228/">
                                        linkedin profile</a></span>
                            </li>
                            <li class="list-group-item border-0 disabled htu-title">
                                <span class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i>
                                </span>
                                <span class="text">jordan,Irbid,Albaerony Street</span>
                            </li>

                        </ul>
                    </div>
                    <div class=" mt-5 contactInfo education">
                        <h3 class="title">Education</h3>
                        <ul>
                            <li class="mt-5">
                                <h5><?php echo $_GET['start_date'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $_GET['end_date'] ?></h5>
                                <h4>Bachalor Degree in Software Engineering (91.2 %)</h4>
                                <h4>Jadara University</h4>
                            </li>
                            <li class="mt-4">
                                <h5>2006 - 2007</h5>
                                <h4>High School Scientific Dep. 75.6% </h4>

                            </li>
                        </ul>
                    </div>
                    <div class="mt-5 contactInfo language">
                        <h3 class="text-uppercase mb-4 title">Languages</h3>
                        <ul class="list-group ">
                            <?php foreach ($_GET['subject'] as  $value) { ?>
                                <li class="list-group-item disabled border-0 htu-title">
                                    <span class="text"><?php echo $value ?></span>
                                    <span class="precent">
                                        <div style="width: 99%;"></div>
                                    </span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-8 bg-light">
                <div class="right-side" style="height: 100%;">
                    <div class="col mt-3">
                        <h2 class="mb-1 text-uppercase title2">profile</h2>
                        <p>
                            I have more than 1 year of experience in the IT field in development.
                            I worked in many projects with many roles as developer with excellent
                            experience in many fields like assets tracking system, E-commerce
                            system, ERP/CRM
                        </p>

                        <div class=" about">
                            <h2 class="mt-4 title2">Experience</h2>
                            <div class="mt-3 box">
                                <div class="year_company">
                                    <h5 class="text-uppercase">2013 - 2017</h5>
                                    <h5 class="mb-2">VIP optics Company [Jordan]</h5>
                                </div>
                                <div class="text">
                                    <h4 class="ml-5"> Accounting system developer</h4>
                                    <p class="ml-5">VIP Optics based company in Jordan, Irbid has many branches across the country</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="year_company">
                                    <h5>2020 - 2021</h5>
                                </div>
                                <div class="text">
                                    <h4 class="ml-5"> Junior PHP Developer</h4>
                                    <p>
                                    <ul>
                                        <li class="ml-5">
                                            Worked on creation portal for inventories, storage system, and Fanatical
                                            system.

                                        </li>
                                        <li class="ml-5">
                                            Worked on creating website to sell optics online and display the
                                            products and payment online.
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="h3 mt-5 font-weight-lighter about skills ">
                            <h2 class="title2">skills</h2>
                            
                            <?php foreach ($pieces as  $value) { ?>

                                <div class="mb-6 box">
                                    <h4 class="htu-1"><?php echo $value ?> </h4>
                                </div>
                            <?php }  ?>
                             
                        </div>
                        <div class="about trainee my-5 ">
                            <h2 class="text-uppercase title2">Trainee</h2>
                            <h5>Jadara University [Jordan] Aug/2021 – Feb/2022</h5>
                        </div>
                        <div class="mt-5 about references">
                            <h2 class=" text-uppercase title2 "> References</h2>
                            <h5>Eng . Mo’nes Dagher +962786672470</h5>
                            <h5>Eng . Ali Alquran +962795953154</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
        </script>
</body>

</html>