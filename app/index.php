<?php 
require_once('../libs/functions.php');
require_once('../libs/CourseDAO.php');

try {
  $pdo = create_PDO();

  $course_dao = new CourseDAO($pdo);
  $courses = $course_dao->selectAll();
  require("../views/index_view.php");

} catch (PDOException $e) {
  error_log("Index.php PDOException: " . $e->getMessage());
  // header("Location: error.php");
}
?>

