<?php
session_start();
$messeges=Array();
if(!isset($_SESSION['user']))
{
    $messeges['Error validation']='you can not direct enter in this page .!!!';
    $_SESSION['login_error'] = $messeges;
    header("Location: "."http://servertest.htudemo/htu_courses/login.php");

}
include '../htu_courses/components/header.php';
$courses = file_get_contents('./courses.json');

$courses = json_decode($courses);
?>
<div class="main_page">
<div class="h-25 w-25 p-5 bg-light border rounded-3">
          <h2>Add borders</h2>
          <p>
            
          </p>
          <form action="../htu_courses/search.php" method="GET">
            <input type="search" name="q" class=" w-100" action placeholder="enter the name of course">
            </form>
        </div>
</div>
<div class="row m-5">
   

        <?php foreach ($courses as  $course) {?>
            <div class="col-3 my-3">
        <div class="card" style="width: 18rem;">
            <img src = "<?php echo $course->image;?>"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $course->title; ?></h5>
                <p class="card-text"><?php echo $course->excerpt;?></p>
                <a href="./course_details.php?id=<?php echo $course->id ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        </div>
        <?php };?>




</div>

<?php
include '../htu_courses/components/footer.php';
?>