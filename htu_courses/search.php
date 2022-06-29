<?php
session_start();
include '../htu_courses/components/header.php';

 if(!isset($_SESSION['user']))
 {
     header('Location: '.' http://servertest.htudemo/htu_courses/login.php');
 }

if(!isset($_GET['q'] )|| empty($_GET['q'])){
    header('Location: ' .' http://servertest.htudemo/htu_courses/home.php');
}
$search = $_GET['q'];
$result = array();
$coming_data = file_get_contents('./courses.json');
$courses = json_decode($coming_data);
foreach ($courses as $course) {
    if(strpos( strtolower($course->title), strtolower($search) ) !== false){
        $result[]= $course;
    }
}

?>
<div id="htu-courses-search" class="container my-5">
 

    <div class="my-5">
        <form method="GET" action="../htu_courses/search.php" id="htu-home-search">
            <input name="q" type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
    </div>

    <?php if(!empty($result)){ ?>

        <?php foreach ($result as $course): ?>
            <div class="htu-search-course-container row">
                <div class="col-6">
                    <img src="<?= $course->image ?>" class="img-thumbnail" alt="<?= $course->title ?>">
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <h4><?= $course->title ?></h4>
                        <p><?= $course->excerpt ?></p>
                        <a href="./course_details.php?id=<?= $course->id; ?>" class="btn btn-primary w-25">Check Course</a>
                    </div>
                </div>
                <hr class="my-5">
            </div>
        <?php endforeach; ?>
    <?php } else { ?>

        <p class="text-center">we don't heve any result for this keyword "<?= $search ?>"</p>

    <?php } ?>
</div>



<?php
include './components/footer.php';
?>