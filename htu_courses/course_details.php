<?php
session_start();
include '../htu_courses/components/header.php';
$flage = true;
$_SESSION['error_course'] = '';
$messeges = array();
if (!isset($_SESSION['user'])) {
    $messeges['Error validation'] = 'you can not direct enter in this page .!!!';
    $_SESSION['login_error'] = $messeges;
    redirect();
}
if (!$_SERVER['REQUEST_METHOD'] == 'GET') {
    $messeges['Error validation'] = 'wrong Method .!!!';
    $_SESSION['login_error'] = $messeges;
    redirect();
}
if (!isset($_GET['id']) || empty($_GET['id'])) {
    $messeges['Error validation'] = 'Id is not valid.!!!';
    $_SESSION['login_error'] = $messeges;
    redirect();
}
$course_title = '';
$course_disc = '';
$course_author = '';
$course_image = '';
$course_vedio = '';

$courses = file_get_contents('./courses.json');
$courses = json_decode($courses);
foreach ($courses as  $course) {
    if ($course->id == $_GET['id']) {
        $course_title = $course->title;
        $course_disc = $course->content;
        $course_author = $course->author;
        $course_image = $course->image;
        $course_vedio = $course->course_vedio;
        $flage = false;
        break;
    }
}
if ($flage == true) {
    $messeges['not found'] = "we can't find the course";
    $_SESSION['error_course'] = $messeges;
}

function redirect()
{
    header("Location: " . "http://servertest.htudemo/htu_courses/home.php");
}
?>
<div class=" container details_courses_page">
    <?php if (!empty($_SESSION['error_course'])) : ?>
        <?php foreach ($_SESSION['error_course'] as  $error) : ?>
            <div class="alert alert-primary justify-content-center text-center" role="alert">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class=" htu_detalis">
        <div class="container my-5 d-flex justify-content-center text-center">
            <strong><?php echo $course_title  ?></strong>
        </div>
        <dvi class="row m-5">
            <div class="col-3 m-5">
                <?php echo $course_disc  ?>
            </div>
            <div class="col-3 m-5">
                <img src="  <?php echo $course_image  ?>" alt="Trulli" width="500" height="333">
            </div>
            <div class="col-3 m-5">
                <?php echo $course_author  ?>
            </div>

            <div class="col-3">
                <?php echo $course_vedio  ?>
            </div>
        </dvi>
    </div>
</div>

<?php
include '../htu_courses/components/footer.php';
?>