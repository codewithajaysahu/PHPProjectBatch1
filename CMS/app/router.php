<?php

$query_string = $_SERVER['QUERY_STRING']; // module=users&action=login
$module = @$_GET['module'];
$ctrl = ucfirst(strtolower($module));
$action = @$_GET['action'];
$method = strtolower($_SERVER['REQUEST_METHOD']);

if(empty($module) || empty($action)) {
    include_once("app/views/layouts/header-view.php");
    include_once("app/views/layouts/footer-view.php");
}else{
    require_once("app/controllers/$module/$ctrl.php");
    $action($method, $action);
}

?>