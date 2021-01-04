<?php

include_once("app/config/database.php");

function getUsers($start_limit, $end_limit) {
    $result = false; // login error
    $dbConn = getDBConnection();
    $query = " SELECT * FROM users LIMIT $start_limit, $end_limit";
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
    $query = " SELECT COUNT(1) total_rows FROM users";
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

?>