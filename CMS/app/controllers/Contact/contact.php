<?php
// include_once ('app/models/deparment/DepartmentModel.php');
function contact() {
    $title = "Contact";
    // $contents = getContent();
    include_once("app/views/layouts/header-view.php");
     include_once("app/views/Contact/contact-view.php");
    include_once("app/views/layouts/footer-view.php");
}
?>