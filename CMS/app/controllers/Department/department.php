<?php
// include_once ('app/models/deparment/DepartmentModel.php');
function department() {
    $title = "Department";
    // $contents = getContent();
    include_once("app/views/layouts/header-view.php");
     include_once("app/views/Department/department-view.php");
    include_once("app/views/layouts/footer-view.php");
}
?>