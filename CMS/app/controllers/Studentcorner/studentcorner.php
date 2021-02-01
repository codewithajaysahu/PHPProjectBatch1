<?php
include_once ('app/models/studentcorner/StudentcornerModel.php');
function studentcorner() {
    $title = "Studentcorner";
    // $contents = getContent();
    include_once("app/views/layouts/header-view.php");
    include_once("app/views/studentcorner/Studentcorner-view.php");
    include_once("app/views/layouts/footer-view.php");
}
?>