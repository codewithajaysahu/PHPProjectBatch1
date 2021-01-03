<?php

$query_string = $_SERVER['QUERY_STRING']; // module=users&action=login
$module = @$_GET['module'];
$ctrl = ucfirst(strtolower($module));
$action = @$_GET['action'];
$admin = @$_GET['admin'];
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($admin === 'show') {
    require_once("app/admin/controllers/$module/$ctrl.php");
    $action = ucfirst(strtolower($action));
    if($method === 'get') {
        $action = $method.$ctrl.$action;
    }else{
        $action = 'set'.$ctrl.$action;
    }
    $action($method, $action);
}else{
    if(empty($module) || empty($action)) {
        include_once("app/views/layouts/header-view.php");
        include_once("app/views/layouts/footer-view.php");
    }else{
        require_once("app/controllers/$module/$ctrl.php");
        $action($method, $action);
    }
}
?>