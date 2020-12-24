<?php
@session_start();

// include_once("app/config/database.php");
function login($method, $action) {
    if($method === 'get' && ($action === 'login' || $action === '')) {
        include_once("app/views/users/login-view.php");
        exit();
    }else if($method === 'post' && $action === 'login') {
        include_once("app/models/Users/Users-Model.php");
        $login_status = setLogin();
        if($login_status)
            header("Location: ?");
        else{
            header("Location: ?module=users&action=login&error=Invalid username and password.");
        }
       // die("Successfully loggedin.");
    }
}


function register($method, $action){
    if($method === 'get' && $action === 'register') {
        $token = (rand(10,10000000000));
        $_SESSION['token'] = $token;
        include_once("app/views/users/registration-view.php");
        exit();
    }else if($method === 'post' && $action === 'register') {
        include_once("app/models/Users/Users-Model.php");

         setRegister();
        echo "<pre>"; print_r($_REQUEST);die;
    }
}

function logout() {
    session_destroy();
    header("Location: ?");
}


?>