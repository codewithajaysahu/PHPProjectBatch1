<?php
// include_once ('app/models/deparment/DepartmentModel.php');
function placement() {
    $title = "Placement";
    // $contents = getContent();
    include_once("app/views/layouts/header-view.php");
     include_once("app/views/Placement/placement-view.php");
    include_once("app/views/layouts/footer-view.php");
}
?>