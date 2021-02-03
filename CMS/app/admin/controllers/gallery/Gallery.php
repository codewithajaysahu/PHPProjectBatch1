<?php
function getGalleryList(){
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/gallery/Gallery-Model.php");
    $page = (isset($_GET['page']) && ($_GET['page'] <= 1)) ? 0 : @$_GET['page'];
    $per_page = 2;
    $start_limit = $page * $per_page;
    $end_limit = $per_page;
    $gallery_list = getGalleryImagesList($start_limit, $end_limit);
    $gallery_count = getGalleryImagesCount();
    $total_pages = ceil($gallery_count/$per_page);
    include_once("app/admin/views/gallery/gallery-list-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
}


function getGalleryUpload(){
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/gallery/Gallery-Model.php");

    include_once("app/admin/views/gallery/gallery-create-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
}

function setGalleryUpload() {
    $upload_dir = fileUpload();
    setGalleryImage();
}

function fileUpload() {
    $upload_dir = "upload/gallery";
    $filename = $_FILES['image']['tmp_name'];
    //$uploadfile = $upload_dir . basename($_FILES['profile_photo']['name']);
    // echo $uploadfile.'<br>';
    echo $filename;
    move_uploaded_file($filename, $upload_dir.'/abc.png');
    return $upload_dir;
}

?>