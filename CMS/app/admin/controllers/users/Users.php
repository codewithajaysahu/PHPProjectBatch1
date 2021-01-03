<?php

function getUsersList($method, $action) {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $users_list = getUsers();
    include_once("app/admin/views/users/users-list-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
}

?>