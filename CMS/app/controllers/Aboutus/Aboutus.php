<?php
include_once ('app/models/aboutus/AboutusModel.php');
function details() {
    $title = "About US";
    $contents = getContent();
    include_once("app/views/layouts/header-view.php");
    include_once("app/views/aboutus/aboutus-view.php");
    include_once("app/views/layouts/footer-view.php");
}
?>