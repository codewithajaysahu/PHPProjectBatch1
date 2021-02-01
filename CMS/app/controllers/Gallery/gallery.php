<?php
 include_once ('app/models/gallery/GalleryModel.php');
function gallery() {
    $title = "Gallery";
    // $contents = getContent();
    include_once("app/views/layouts/header-view.php");
     include_once("app/views/Gallery/gallery-view.php");
    include_once("app/views/layouts/footer-view.php");
}
?>