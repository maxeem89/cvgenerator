<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/style.css">
    <title>CV Generator</title>

</head>

<body>

    <?php if (isset($_SESSION['error'])) :
        foreach ($_SESSION['error'] as $key => $error) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $error ?>
            </div>
        <?php
        }
        ?>

    <?php endif; ?>


    <div class="container register">
        <form method="GET" action="../cv_generator/result.php">

            <div class="row">
                <div class="col-md-3 register-left">
                    <h3>Welcome</h3>

                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <section id="section_one">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply All Information To Generate Full CV </h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="fName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lName" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Profession *" value="" name="Profession" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City/Municipality *" value="" name="city" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" name="phoe" />
                                        </div>

                        </section>
                        <section id="section_edu" class="mx-5">
                            <label for="p-s-date"> Education Date</label>

                            <div class="form-group ">

                            
                                <input id="p_s_date " type="date" class="w-50 my-3" name="start_date">
                                <input id="p_e_date " type="date" class="w-40 my-3" name="end_date">
                                <input type="text " class="m-3" placeholder="enter your Uinvarsity" name="univarsity"> 
                                <input type="text "class="my-3" placeholder="enter your Major" name="major"> 
                            </div>
                            <label for=""> languges</label>
                            <div class="form-group">

                                <select name='subject[]' multiple size=6>
                                    <option value='english'>ENGLISH</option>
                                    <option value='arabic'>Arabic</option>
                                    <option value='hindi'>HINDI</option>
                                </select>
                            </div>
                            <label for=""> skills please write (,) between your skills*  </label>
                            <div class="form-group ">
                          
                                <textarea  rows="4" cols="50" class="w-50" placeholder="skills" name="skills">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary d-flex jusitfy-content-end ">submit

                        </section>
                    </div>

                </div>
            </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    </div>
    </div>


    </form>

    <button id="btnBack" type="button" class="btn btn-primary btn-next js-next-button d-none">BACK</button>
    <button id="header1" type="button" class="btn btn-primary btn-next js-next-button">NEXT: WORK HISTORY</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#section_edu").hide();
            $('#header1').on('click', function() {
                $("#section_edu").show();
                $("#section_one").hide();
                $("#btnBack").toggleClass("d-none");


            });
        });
        $("#btnBack").click(function() {
            $("#btnBack").toggleClass("d-none");
            $("#section_edu").hide();
            $("#section_one").show();

        });
    </script>

</body>

</html>