<?php

include_once("app/config/database.php");

function getUsers($start_limit, $end_limit) {
    $result = false; // login error
    $dbConn = getDBConnection();
    $query = " SELECT * FROM users WHERE deleted = 0 LIMIT $start_limit, $end_limit";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
            $result = $res_query;
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $result;
}

function getUsersCount() {
    $dbConn = getDBConnection();
    $query = " SELECT COUNT(1) total_rows FROM users WHERE deleted = 0";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        $result = mysqli_fetch_row($res_query);
        $count = $result[0];
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $count;
}

function deleteUser() {
    $status = true;
    $dbConn = getDBConnection();
    $today = date("Y-m-d H:i:s");
    $record = @$_GET['record'];
    $loggedin_id = $_SESSION['id'];
    $query = " UPDATE users SET deleted = 1, modified = '$today', modified_by = $loggedin_id where id = $record";
    $res_query = mysqli_query($dbConn, $query);
    if(!$res_query){
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $status;
}

function getUserDetails() {
    $id = $_GET['record'];
    $result = false;
    $dbConn = getDBConnection();
    $query = " SELECT * FROM users WHERE deleted = 0 AND id = $id LIMIT 1";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        if(mysqli_num_rows($res_query) > 0){
            $result = mysqli_fetch_assoc($res_query);
        }
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);
    return $result;
}

?>